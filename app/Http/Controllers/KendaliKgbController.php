<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Carbon\Carbon;
use PhpOffice\PhpWord\TemplateProcessor;

use App\Models\Kgb;
use App\Models\User;

class KendaliKgbController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | MONITORING KENDALI KGB
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {

        /*
        |--------------------------------------------------------------------------
        | QUERY
        |--------------------------------------------------------------------------
        */

        $query = Kgb::with('user')
            ->where('validasi_admin_unit', 'Disetujui');

        /*
        |--------------------------------------------------------------------------
        | FILTER TAHUN
        |--------------------------------------------------------------------------
        */

        if ($request->filled('tahun')) {

            $query->whereYear(
                'kgb_yad',
                $request->tahun
            );

        }

        /*
        |--------------------------------------------------------------------------
        | FILTER BULAN
        |--------------------------------------------------------------------------
        */

        if ($request->filled('bulan')) {

            $query->whereMonth(
                'kgb_yad',
                $request->bulan
            );

        }

        /*
        |--------------------------------------------------------------------------
        | SEARCH
        |--------------------------------------------------------------------------
        */

        if ($request->filled('search')) {

            $search = $request->search;

            $query->whereHas('user', function ($q) use ($search) {

                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('nip', 'like', "%{$search}%");

            });

        }

        /*
        |--------------------------------------------------------------------------
        | DATA
        |--------------------------------------------------------------------------
        */

        $kgbs = $query
            ->orderBy('kgb_yad', 'asc')
            ->paginate(15)
            ->withQueryString();

        /*
        |--------------------------------------------------------------------------
        | STATISTIK
        |--------------------------------------------------------------------------
        */

        $totalKgb = Kgb::where(
            'validasi_admin_unit',
            'Disetujui'
        )->count();

        $sudahGenerate = Kgb::where(
            'validasi_admin_unit',
            'Disetujui'
        )
        ->where(
            'status_generate',
            'Sudah'
        )
        ->count();

        $belumGenerate = Kgb::where(
            'validasi_admin_unit',
            'Disetujui'
        )
        ->where(function ($q) {

            $q->whereNull('status_generate')
              ->orWhere(
                  'status_generate',
                  'Belum'
              );

        })
        ->count();

        $jatuhTempo = Kgb::where(
            'validasi_admin_unit',
            'Disetujui'
        )
        ->whereYear(
            'kgb_yad',
            now()->year
        )
        ->whereMonth(
            'kgb_yad',
            now()->month
        )
        ->count();

        /*
        |--------------------------------------------------------------------------
        | MONITORING BULAN
        |--------------------------------------------------------------------------
        */

        $bulanIni = Kgb::where(
            'validasi_admin_unit',
            'Disetujui'
        )
        ->whereYear(
            'kgb_yad',
            now()->year
        )
        ->whereMonth(
            'kgb_yad',
            now()->month
        )
        ->count();

        $bulanDepan = Kgb::where(
            'validasi_admin_unit',
            'Disetujui'
        )
        ->whereYear(
            'kgb_yad',
            now()->copy()->addMonth()->year
        )
        ->whereMonth(
            'kgb_yad',
            now()->copy()->addMonth()->month
        )
        ->count();

        $duaBulan = Kgb::where(
            'validasi_admin_unit',
            'Disetujui'
        )
        ->whereYear(
            'kgb_yad',
            now()->copy()->addMonths(2)->year
        )
        ->whereMonth(
            'kgb_yad',
            now()->copy()->addMonths(2)->month
        )
        ->count();

        return view(
            'admin.kendali-kgb',
            compact(
                'kgbs',
                'totalKgb',
                'sudahGenerate',
                'belumGenerate',
                'jatuhTempo',
                'bulanIni',
                'bulanDepan',
                'duaBulan'
            )
        );

    }
    
        /*
    |--------------------------------------------------------------------------
    | GENERATE STATUS
    |--------------------------------------------------------------------------
    */

    public function generate($id)
    {

        $kgb = Kgb::findOrFail($id);

        $kgb->update([

            'status_generate' => 'Sudah',

            'generated_by' => Auth::id(),

            'generated_at' => now(),

        ]);

        return redirect()

            ->route('kendali-kgb')

            ->with(

                'success',

                'Dokumen KGB berhasil digenerate.'

            );

    }

    /*
    |--------------------------------------------------------------------------
    | GENERATE SURAT PENGANTAR
    |--------------------------------------------------------------------------
    */

    public function generateSurat($id)
    {

        $kgb = Kgb::with('user')->findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | TEMPLATE
        |--------------------------------------------------------------------------
        */

        $template = new TemplateProcessor(

            resource_path(
                'templates/kgb/surat_pengantar.docx'
            )

        );

        /*
        |--------------------------------------------------------------------------
        | DATA PEGAWAI
        |--------------------------------------------------------------------------
        */

        $template->setValue(
            'nama',
            $kgb->user->name ?? '-'
        );

        $template->setValue(
            'nip',
            $kgb->user->nip ?? '-'
        );

        $template->setValue(
            'pangkat_golongan',
            $kgb->pangkat_golongan ?? '-'
        );

        $template->setValue(
            'jabatan',
            $kgb->jabatan ?? '-'
        );

        $template->setValue(
            'unit_kerja',
            $kgb->unit_kerja ?? '-'
        );

        $template->setValue(
            'status_asn',
            $kgb->status_asn ?? '-'
        );

        $template->setValue(
            'kgb_yad',
            $kgb->kgb_yad
                ? Carbon::parse($kgb->kgb_yad)
                    ->translatedFormat('d F Y')
                : '-'
        );

        /*
        |--------------------------------------------------------------------------
        | SIMPAN FILE
        |--------------------------------------------------------------------------
        */

        $folder = storage_path('app/public/kgb');

        if (! file_exists($folder)) {

            mkdir($folder, 0777, true);

        }

        $namaFile = 'SURAT_PENGANTAR_' .
            preg_replace(
                '/[^A-Za-z0-9]/',
                '_',
                $kgb->user->name
            ) .
            '_' .
            date('YmdHis') .
            '.docx';

        $pathFile = $folder.'/'.$namaFile;

        $template->saveAs($pathFile);

        return response()->download(

            $pathFile,

            $namaFile,

            [
                'Content-Type' =>
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
            ]

        );

    }
    
        /*
    |--------------------------------------------------------------------------
    | GENERATE SK KGB
    |--------------------------------------------------------------------------
    */

    public function generateSk($id)
    {

        $kgb = Kgb::with('user')->findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | TEMPLATE
        |--------------------------------------------------------------------------
        */

        $template = new TemplateProcessor(

            resource_path(
                'templates/kgb/sk_kgb.docx'
            )

        );

        /*
        |--------------------------------------------------------------------------
        | DATA SURAT
        |--------------------------------------------------------------------------
        */

        $template->setValue(
            'nomor_surat',
            $kgb->nomor_sk_baru ?? '-'
        );

        $template->setValue(
            'tanggal_nd',
            now()->translatedFormat('d F Y')
        );

        /*
        |--------------------------------------------------------------------------
        | DATA PEGAWAI
        |--------------------------------------------------------------------------
        */

        $template->setValue(
            'nama',
            $kgb->user->name ?? '-'
        );

        $template->setValue(
            'nip',
            $kgb->user->nip ?? '-'
        );

        $template->setValue(
            'pangkat_golongan',
            $kgb->pangkat_golongan ?? '-'
        );

        $template->setValue(
            'jabatan',
            $kgb->jabatan ?? '-'
        );

        $template->setValue(
            'unit_kerja',
            $kgb->unit_kerja ?? '-'
        );

        $template->setValue(
            'status_asn',
            $kgb->status_asn ?? '-'
        );

        /*
        |--------------------------------------------------------------------------
        | DATA KGB
        |--------------------------------------------------------------------------
        */

        $template->setValue(
            'gaji_lama',
            'Rp '.number_format(
                $kgb->gaji_pokok_lama ?? 0,
                0,
                ',',
                '.'
            )
        );

        $template->setValue(
            'sk_oleh',
            $kgb->sk_terakhir_oleh ?? '-'
        );

        $template->setValue(
            'nomor_sk',
            $kgb->sk_terakhir_nomor ?? '-'
        );

        $template->setValue(
            'tanggal_sk',
            $kgb->sk_terakhir_tanggal
                ? Carbon::parse($kgb->sk_terakhir_tanggal)
                    ->translatedFormat('d F Y')
                : '-'
        );

        $template->setValue(
            'tmt_lama',
            $kgb->tmt_lama
                ? Carbon::parse($kgb->tmt_lama)
                    ->translatedFormat('d F Y')
                : '-'
        );

        $template->setValue(
            'masa_kerja_lama',
            ($kgb->masa_kerja_tahun ?? 0)
            .' Tahun '.
            ($kgb->masa_kerja_bulan ?? 0)
            .' Bulan'
        );

        $template->setValue(
            'gaji_baru',
            'Rp '.number_format(
                $kgb->gaji_pokok_baru ?? 0,
                0,
                ',',
                '.'
            )
        );

        $template->setValue(
            'masa_kerja_baru',
            ($kgb->masa_kerja_baru_tahun ?? 0)
            .' Tahun '.
            ($kgb->masa_kerja_baru_bulan ?? 0)
            .' Bulan'
        );

        $template->setValue(
            'pangkat_baru',
            trim(
                ($kgb->pangkat_baru ?? '').
                (
                    !empty($kgb->golongan_baru)
                    ? ', '.$kgb->golongan_baru
                    : ''
                )
            )
        );

        $template->setValue(
            'tmt_berlaku',
            $kgb->tmt_berlaku
                ? Carbon::parse($kgb->tmt_berlaku)
                    ->translatedFormat('d F Y')
                : '-'
        );

        $template->setValue(
            'kgb_yad',
            $kgb->kgb_yad
                ? Carbon::parse($kgb->kgb_yad)
                    ->translatedFormat('d F Y')
                : '-'
        );

        /*
        |--------------------------------------------------------------------------
        | PENANDATANGAN
        |--------------------------------------------------------------------------
        */

        $template->setValue(
            'nama_penandatangan',
            $kgb->nama_penandatangan ?? '-'
        );

        $template->setValue(
            'jabatan_penandatangan',
            $kgb->jabatan_penandatangan ?? '-'
        );

        $template->setValue(
            'nip_penandatangan',
            $kgb->nip_penandatangan ?? '-'
        );

        /*
        |--------------------------------------------------------------------------
        | SIMPAN FILE
        |--------------------------------------------------------------------------
        */

        $folder = storage_path('app/public/kgb');

        if (! file_exists($folder)) {

            mkdir($folder, 0777, true);

        }

        $namaFile = 'SK_KGB_'.
            preg_replace(
                '/[^A-Za-z0-9]/',
                '_',
                $kgb->user->name
            ).
            '_'.
            date('YmdHis').
            '.docx';

        $pathFile = $folder.'/'.$namaFile;

        $template->saveAs($pathFile);

        return response()->download(

            $pathFile,

            $namaFile,

            [
                'Content-Type' =>
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
            ]

        );

    }
    
        /*
    |--------------------------------------------------------------------------
    | BATAL GENERATE
    |--------------------------------------------------------------------------
    */

    public function batalGenerate($id)
    {

        $kgb = Kgb::findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | HAPUS FILE JIKA ADA
        |--------------------------------------------------------------------------
        */

        if (
            !empty($kgb->file_surat) &&
            Storage::disk('public')->exists($kgb->file_surat)
        ) {

            Storage::disk('public')->delete(
                $kgb->file_surat
            );

        }

        if (
            !empty($kgb->file_sk) &&
            Storage::disk('public')->exists($kgb->file_sk)
        ) {

            Storage::disk('public')->delete(
                $kgb->file_sk
            );

        }

        /*
        |--------------------------------------------------------------------------
        | UPDATE STATUS
        |--------------------------------------------------------------------------
        */

        $kgb->update([

            'status_generate' => 'Belum',

            'generated_by' => null,

            'generated_at' => null,

            // Aktifkan jika kolom sudah ada
            // 'file_surat' => null,
            // 'file_sk' => null,

        ]);

        return redirect()

            ->route('kendali-kgb')

            ->with(

                'success',

                'Generate berhasil dibatalkan.'

            );

    }

}