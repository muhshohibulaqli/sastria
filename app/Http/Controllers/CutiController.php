<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Carbon\Carbon;

use App\Models\Biodata;
use App\Models\Cuti;
use App\Models\CutiSaldo;

class CutiController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | HALAMAN E-CUTI
    |--------------------------------------------------------------------------
    */

    public function index()
    {

        $tahun = date('Y');

        /*
        |--------------------------------------------------------------------------
        | AMBIL BIODATA ASN
        |--------------------------------------------------------------------------
        */

        $biodata = Biodata::where(
            'user_id',
            Auth::id()
        )->first();

        if (!$biodata) {

            return back()->with(
                'error',
                'Data biodata belum tersedia.'
            );

        }

        if (empty($biodata->tmt_cpns)) {

            return back()->with(
                'error',
                'TMT CPNS / PPPK belum diisi.'
            );

        }

        /*
        |--------------------------------------------------------------------------
        | HITUNG MASA KERJA
        |--------------------------------------------------------------------------
        */

        $tmtCpns = Carbon::parse(
            $biodata->tmt_cpns
        );

        $masaKerja = $tmtCpns->diff(now());

        $masaKerjaText =
            $masaKerja->y . ' Tahun ' .
            $masaKerja->m . ' Bulan';

        /*
        |--------------------------------------------------------------------------
        | CEK SUDAH 1 TAHUN ATAU BELUM
        |--------------------------------------------------------------------------
        */

        $sudahSetahun = $tmtCpns
            ->copy()
            ->addYear()
            ->lte(now());

        /*
        |--------------------------------------------------------------------------
        | DEFAULT NILAI
        |--------------------------------------------------------------------------
        */

        $n = 0;
        $n1 = 0;
        $n2 = 0;

        $hakAktif = 0;

        /*
        |--------------------------------------------------------------------------
        | JIKA SUDAH MEMENUHI SYARAT CUTI
        |--------------------------------------------------------------------------
        */

        if ($sudahSetahun) {

            $saldo = CutiSaldo::firstOrCreate(

                [

                    'user_id' => Auth::id(),

                    'tahun'   => $tahun

                ],

                [

                    'hak_awal'  => 12,

                    'carry_n1'  => 0,

                    'carry_n2'  => 0,

                    'hak_aktif' => 12,

                    'terpakai'  => 0,

                    'sisa'      => 12

                ]

            );

            /*
            |--------------------------------------------------------------------------
            | HAK CUTI
            |--------------------------------------------------------------------------
            */

            $n = 12;

            $n1 = min(
                $saldo->carry_n1 ?? 0,
                6
            );

            $n2 = min(
                $saldo->carry_n2 ?? 0,
                6
            );

            $hakAktif = $n + $n1 + $n2;

        }

        /*
        |--------------------------------------------------------------------------
        | RIWAYAT CUTI
        |--------------------------------------------------------------------------
        */

        $cutis = Cuti::where(
            'user_id',
            Auth::id()
        )
        ->latest()
        ->get();

        /*
        |--------------------------------------------------------------------------
        | TAMPILKAN HALAMAN
        |--------------------------------------------------------------------------
        */

        return view(

            'asn.e-cuti',

            compact(

                'biodata',

                'masaKerjaText',

                'sudahSetahun',

                'cutis',

                'n',

                'n1',

                'n2',

                'hakAktif'

            )

        );

    }
    
        /*
    |--------------------------------------------------------------------------
    | SIMPAN PENGAJUAN CUTI
    |--------------------------------------------------------------------------
    */

    public function simpan(Request $request)
    {

        /*
        |--------------------------------------------------------------------------
        | VALIDASI FORM
        |--------------------------------------------------------------------------
        */

        $request->validate([

            'jenis_cuti'        => 'required',

            'tanggal_mulai'     => 'required|date',

            'tanggal_selesai'   => 'required|date|after_or_equal:tanggal_mulai',

            'alasan'            => 'required',

            'file_formulir'     => 'nullable|mimes:pdf|max:5120'

        ]);

        /*
        |--------------------------------------------------------------------------
        | AMBIL BIODATA ASN
        |--------------------------------------------------------------------------
        */

        $biodata = Biodata::where(

            'user_id',

            Auth::id()

        )->first();

        if (!$biodata || empty($biodata->tmt_cpns)) {

            return back()->with(

                'error',

                'TMT CPNS / PPPK belum diisi.'

            );

        }

        /*
        |--------------------------------------------------------------------------
        | CEK MASA KERJA
        |--------------------------------------------------------------------------
        */

        $sudahSetahun = Carbon::parse(

            $biodata->tmt_cpns

        )
        ->copy()
        ->addYear()
        ->lte(now());

        if (!$sudahSetahun) {

            return back()->with(

                'error',

                'Hak cuti tahunan baru dapat digunakan setelah genap 1 tahun masa kerja.'

            );

        }

        /*
        |--------------------------------------------------------------------------
        | HITUNG JUMLAH HARI CUTI
        |--------------------------------------------------------------------------
        */

        $jumlahHari = Carbon::parse(
            $request->tanggal_mulai
        )->diffInDays(
            Carbon::parse(
                $request->tanggal_selesai
            )
        ) + 1;

        $tahun = date('Y');

        /*
        |--------------------------------------------------------------------------
        | AMBIL / BUAT SALDO CUTI
        |--------------------------------------------------------------------------
        */

        $saldo = CutiSaldo::firstOrCreate(

            [

                'user_id' => Auth::id(),

                'tahun'   => $tahun

            ],

            [

                'hak_awal'  => 12,

                'carry_n1'  => 0,

                'carry_n2'  => 0,

                'hak_aktif' => 12,

                'terpakai'  => 0,

                'sisa'      => 12

            ]

        );

        /*
        |--------------------------------------------------------------------------
        | HITUNG HAK CUTI
        |--------------------------------------------------------------------------
        */

        $n = 12;

        $n1 = min($saldo->carry_n1 ?? 0, 6);

        $n2 = min($saldo->carry_n2 ?? 0, 6);

        $hakAktif = $n + $n1 + $n2;

        /*
        |--------------------------------------------------------------------------
        | VALIDASI BERDASARKAN JENIS CUTI
        |--------------------------------------------------------------------------
        */

        switch ($request->jenis_cuti) {

            case 'Cuti Tahunan':

                if ($jumlahHari > $hakAktif) {

                    return back()->with(

                        'error',

                        'Hak cuti tahunan Anda tinggal ' . $hakAktif . ' hari.'

                    );

                }

            break;

            case 'Cuti Besar':

                if ($jumlahHari > 90) {

                    return back()->with(

                        'error',

                        'Cuti Besar maksimal 90 hari.'

                    );

                }

            break;

            case 'Cuti Sakit':

                if ($jumlahHari > 365) {

                    return back()->with(

                        'error',

                        'Cuti Sakit maksimal 365 hari.'

                    );

                }

            break;

            case 'Cuti Melahirkan':

                if ($jumlahHari > 90) {

                    return back()->with(

                        'error',

                        'Cuti Melahirkan maksimal 90 hari.'

                    );

                }

            break;

            case 'Cuti Karena Alasan Penting':

                if ($jumlahHari > 30) {

                    return back()->with(

                        'error',

                        'Cuti Karena Alasan Penting maksimal 30 hari.'

                    );

                }

            break;

            case 'Cuti di Luar Tanggungan Negara':

                if ($jumlahHari > 365) {

                    return back()->with(

                        'error',

                        'Cuti di Luar Tanggungan Negara maksimal 365 hari.'

                    );

                }

            break;

        }

        /*
        |--------------------------------------------------------------------------
        | UPLOAD FORMULIR
        |--------------------------------------------------------------------------
        */

        $file = null;

        if ($request->hasFile('file_formulir')) {

            $file = $request->file('file_formulir')->store(

                'formulir-cuti',

                'public'

            );

        }

        /*
        |--------------------------------------------------------------------------
        | NOMOR SURAT OTOMATIS
        |--------------------------------------------------------------------------
        */

        $lastId = (Cuti::max('id') ?? 0) + 1;

        $nomorSurat =

            'CUTI-' .

            $tahun .

            '-' .

            str_pad(

                $lastId,

                5,

                '0',

                STR_PAD_LEFT

            );

        /*
        |--------------------------------------------------------------------------
        | SIMPAN PENGAJUAN CUTI
        |--------------------------------------------------------------------------
        */

        Cuti::create([

            'user_id'         => Auth::id(),

            'nomor_surat'     => $nomorSurat,

            'jenis_cuti'      => $request->jenis_cuti,

            'tanggal_mulai'   => $request->tanggal_mulai,

            'tanggal_selesai' => $request->tanggal_selesai,

            'jumlah_hari'     => $jumlahHari,

            'alasan'          => $request->alasan,

            'file_formulir'   => $file,

            'status'          => 'menunggu'

        ]);

        return back()->with(

            'success',

            'Pengajuan cuti berhasil dikirim dan menunggu persetujuan Admin.'

        );

    }
    
    /*
    |--------------------------------------------------------------------------
    | VALIDASI CUTI OLEH ADMIN
    |--------------------------------------------------------------------------
    */

    public function validasi(Request $request, $id)
    {

        /*
        |--------------------------------------------------------------------------
        | VALIDASI INPUT
        |--------------------------------------------------------------------------
        */

        $request->validate([

            'file_final'     => 'required|mimes:pdf|max:5120',

            'catatan_admin'  => 'nullable|string'

        ]);

        /*
        |--------------------------------------------------------------------------
        | AMBIL DATA CUTI
        |--------------------------------------------------------------------------
        */

        $cuti = Cuti::findOrFail($id);

        if ($cuti->status == 'disetujui') {

            return back()->with(

                'error',

                'Pengajuan cuti ini sudah pernah disetujui.'

            );

        }

        /*
        |--------------------------------------------------------------------------
        | UPLOAD PDF FINAL
        |--------------------------------------------------------------------------
        */

        $fileFinal = $request->file('file_final')->store(

            'cuti-final',

            'public'

        );

        /*
        |--------------------------------------------------------------------------
        | UPDATE STATUS CUTI
        |--------------------------------------------------------------------------
        */

        $cuti->update([

            'status'             => 'disetujui',

            'file_final'         => $fileFinal,

            'catatan_admin'      => $request->catatan_admin,

            'approved_by'        => Auth::id(),

            'approved_at'        => now(),

            'tanggal_disetujui'  => now()->toDateString()

        ]);

        /*
        |--------------------------------------------------------------------------
        | KURANGI SALDO CUTI TAHUNAN
        |--------------------------------------------------------------------------
        */

        if ($cuti->jenis_cuti == 'Cuti Tahunan') {

            $saldo = CutiSaldo::where(

                'user_id',

                $cuti->user_id

            )

            ->where(

                'tahun',

                date('Y', strtotime($cuti->tanggal_mulai))

            )

            ->first();

            if ($saldo) {

                $saldo->terpakai += $cuti->jumlah_hari;

                $saldo->sisa = max(

                    0,

                    $saldo->hak_aktif - $saldo->terpakai

                );

                $saldo->save();

            }

        }

        /*
        |--------------------------------------------------------------------------
        | SELESAI
        |--------------------------------------------------------------------------
        */

        return back()->with(

            'success',

            'Pengajuan cuti berhasil disetujui.'

        );

    }

}