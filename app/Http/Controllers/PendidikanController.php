<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN DATA PENDIDIKAN
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $pendidikans = Pendidikan::where(
            'user_id',
            Auth::id()
        )
        ->latest()
        ->get();

        return view(
            'asn.data-pendidikan',
            compact('pendidikans')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | SIMPAN
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $fileIjazah = null;
        $fileTranskrip = null;

        /*
        |--------------------------------------------------------------------------
        | FILE IJAZAH
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('file_ijazah')) {

            $extension = $request
                ->file('file_ijazah')
                ->getClientOriginalExtension();

            $namaLengkap = str_replace(
                ' ',
                '_',
                Auth::user()->name
            );

            $kodeUnik = date('YmdHis');

            $namaFileIjazah =

                $namaLengkap

                .'_IJAZAH_'

                .$request->jenjang_pendidikan

                .'_'

                .$kodeUnik

                .'.'

                .$extension;

            $fileIjazah = $request
                ->file('file_ijazah')
                ->storeAs(
                    'file_ijazah',
                    $namaFileIjazah,
                    'public'
                );
        }

        /*
        |--------------------------------------------------------------------------
        | FILE TRANSKRIP
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('file_transkrip')) {

            $extension = $request
                ->file('file_transkrip')
                ->getClientOriginalExtension();

            $namaLengkap = str_replace(
                ' ',
                '_',
                Auth::user()->name
            );

            $kodeUnik = date('YmdHis');

            $namaFileTranskrip =

                $namaLengkap

                .'_TRANSKRIP_'

                .$request->jenjang_pendidikan

                .'_'

                .$kodeUnik

                .'.'

                .$extension;

            $fileTranskrip = $request
                ->file('file_transkrip')
                ->storeAs(
                    'file_transkrip',
                    $namaFileTranskrip,
                    'public'
                );
        }

        Pendidikan::create([

            'user_id' => Auth::id(),

            'jenjang_pendidikan' => $request->jenjang_pendidikan,
            'nama_institusi'      => $request->nama_institusi,
            'fakultas'            => $request->fakultas,
            'prodi'               => $request->prodi,
            'jurusan'             => $request->jurusan,
            'lokasi'              => $request->lokasi,
            'alamat_institusi'    => $request->alamat_institusi,
            'kepala_institusi'    => $request->kepala_institusi,
            'judul_penelitian'    => $request->judul_penelitian,
            'gelar'               => $request->gelar,
            'singkatan_gelar'     => $request->singkatan_gelar,
            'letak_gelar'         => $request->letak_gelar,
            'no_ijazah'           => $request->no_ijazah,
            'tgl_ijazah'          => $request->tgl_ijazah,
            'tahun_masuk'         => $request->tahun_masuk,
            'tahun_lulus'         => $request->tahun_lulus,
            'ipk'                 => $request->ipk,

            'file_ijazah'         => $fileIjazah,
            'file_transkrip'      => $fileTranskrip,

            'validasi_admin_unit' => 'Belum Validasi'

        ]);

        return back()->with(
            'success',
            'Data pendidikan berhasil disimpan'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

   public function update(Request $request, $id)
{
    $pendidikan = Pendidikan::findOrFail($id);

    if(
        $pendidikan->validasi_admin_unit
        ==
        'Disetujui'
    ){

        return back()->with(
            'error',
            'Data sudah divalidasi'
        );

    }

    $fileIjazah = $pendidikan->file_ijazah;
    $fileTranskrip = $pendidikan->file_transkrip;

    if ($request->hasFile('file_ijazah')) {

        if ($fileIjazah) {

            Storage::disk('public')
                ->delete($fileIjazah);

        }

        $extension = $request
            ->file('file_ijazah')
            ->getClientOriginalExtension();

        $namaLengkap = str_replace(
            ' ',
            '_',
            Auth::user()->name
        );

        $kodeUnik = date('YmdHis');

        $namaFileIjazah =

            $namaLengkap

            .'_IJAZAH_'

            .$request->jenjang_pendidikan

            .'_'

            .$kodeUnik

            .'.'

            .$extension;

        $fileIjazah = $request
            ->file('file_ijazah')
            ->storeAs(
                'file_ijazah',
                $namaFileIjazah,
                'public'
            );
    }

    if ($request->hasFile('file_transkrip')) {

        if ($fileTranskrip) {

            Storage::disk('public')
                ->delete($fileTranskrip);

        }

        $extension = $request
            ->file('file_transkrip')
            ->getClientOriginalExtension();

        $namaLengkap = str_replace(
            ' ',
            '_',
            Auth::user()->name
        );

        $kodeUnik = date('YmdHis');

        $namaFileTranskrip =

            $namaLengkap

            .'_TRANSKRIP_'

            .$request->jenjang_pendidikan

            .'_'

            .$kodeUnik

            .'.'

            .$extension;

        $fileTranskrip = $request
            ->file('file_transkrip')
            ->storeAs(
                'file_transkrip',
                $namaFileTranskrip,
                'public'
            );
    }

    $pendidikan->update([

        'jenjang_pendidikan' => $request->jenjang_pendidikan,
        'nama_institusi'      => $request->nama_institusi,
        'fakultas'            => $request->fakultas,
        'prodi'               => $request->prodi,
        'jurusan'             => $request->jurusan,
        'lokasi'              => $request->lokasi,
        'alamat_institusi'    => $request->alamat_institusi,
        'kepala_institusi'    => $request->kepala_institusi,
        'judul_penelitian'    => $request->judul_penelitian,
        'gelar'               => $request->gelar,
        'singkatan_gelar'     => $request->singkatan_gelar,
        'letak_gelar'         => $request->letak_gelar,
        'no_ijazah'           => $request->no_ijazah,
        'tgl_ijazah'          => $request->tgl_ijazah,
        'tahun_masuk'         => $request->tahun_masuk,
        'tahun_lulus'         => $request->tahun_lulus,
        'ipk'                 => $request->ipk,

        'file_ijazah'         => $fileIjazah,
        'file_transkrip'      => $fileTranskrip,

    ]);

    return back()->with(
        'success',
        'Data pendidikan berhasil diupdate'
    );
}

    /*
    |--------------------------------------------------------------------------
    | HAPUS
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
{
    $pendidikan = Pendidikan::findOrFail($id);

    if(
        $pendidikan->validasi_admin_unit
        ==
        'Disetujui'
    ){

        return back()->with(
            'error',
            'Data sudah divalidasi dan tidak dapat dihapus'
        );

    }

    if($pendidikan->file_ijazah){

        Storage::disk('public')
            ->delete(
                $pendidikan->file_ijazah
            );

    }

    if($pendidikan->file_transkrip){

        Storage::disk('public')
            ->delete(
                $pendidikan->file_transkrip
            );

    }

    $pendidikan->delete();

    return back()->with(
        'success',
        'Data pendidikan berhasil dihapus'
    );
}

}