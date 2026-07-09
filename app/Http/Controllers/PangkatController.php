<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\Pangkat;

class PangkatController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN DATA PANGKAT
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $pangkats = Pangkat::where(
            'user_id',
            Auth::id()
        )
        ->latest()
        ->get();

        return view(
            'asn.data-pangkat',
            compact('pangkats')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | SIMPAN
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $filePangkat = null;

        if($request->hasFile('file_pangkat')){

            $extension = $request
                ->file('file_pangkat')
                ->getClientOriginalExtension();

            $namaLengkap = str_replace(
                ' ',
                '_',
                Auth::user()->name
            );

            $namaPangkat = str_replace(
                ' ',
                '_',
                $request->nama_pangkat
            );

            $kodeUnik = date('YmdHis');

            $namaFile =

                $namaLengkap

                .'_'

                .$namaPangkat

                .'_'

                .$kodeUnik

                .'.'

                .$extension;

            $filePangkat = $request
                ->file('file_pangkat')
                ->storeAs(
                    'file_pangkat',
                    $namaFile,
                    'public'
                );

        }

        Pangkat::create([

            'user_id' => Auth::id(),

            'jenis_sk' => $request->jenis_sk,

            'jenis_pangkat' => $request->jenis_pangkat,

            'nama_pangkat' => $request->nama_pangkat,

            'tmt_pangkat' => $request->tmt_pangkat,

            'no_sk' => $request->no_sk,

            'tgl_sk' => $request->tgl_sk,

            'pejabat_penetap' => $request->pejabat_penetap,

            'masa_kerja_tahun' => $request->masa_kerja_tahun,

            'masa_kerja_bulan' => $request->masa_kerja_bulan,

            'keterangan' => $request->keterangan,

            'file_pangkat' => $filePangkat,

            'validasi_admin_unit' => 'Belum Validasi'

        ]);

        return back()->with(
            'success',
            'Data pangkat berhasil ditambahkan'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {
        $pangkat = Pangkat::findOrFail($id);

        if(
            $pangkat->validasi_admin_unit
            ==
            'Disetujui'
        ){

            return back()->with(
                'error',
                'Data sudah divalidasi'
            );

        }

        $filePangkat = $pangkat->file_pangkat;

        if($request->hasFile('file_pangkat')){

            if($pangkat->file_pangkat){

                Storage::disk('public')
                ->delete(
                    $pangkat->file_pangkat
                );

            }

            $extension = $request
                ->file('file_pangkat')
                ->getClientOriginalExtension();

            $namaLengkap = str_replace(
                ' ',
                '_',
                Auth::user()->name
            );

            $namaPangkat = str_replace(
                ' ',
                '_',
                $request->nama_pangkat
            );

            $kodeUnik = date('YmdHis');

            $namaFile =

                $namaLengkap

                .'_'

                .$namaPangkat

                .'_'

                .$kodeUnik

                .'.'

                .$extension;

            $filePangkat = $request
                ->file('file_pangkat')
                ->storeAs(
                    'file_pangkat',
                    $namaFile,
                    'public'
                );

        }

        $pangkat->update([

            'jenis_sk' => $request->jenis_sk,

            'jenis_pangkat' => $request->jenis_pangkat,

            'nama_pangkat' => $request->nama_pangkat,

            'tmt_pangkat' => $request->tmt_pangkat,

            'no_sk' => $request->no_sk,

            'tgl_sk' => $request->tgl_sk,

            'pejabat_penetap' => $request->pejabat_penetap,

            'masa_kerja_tahun' => $request->masa_kerja_tahun,

            'masa_kerja_bulan' => $request->masa_kerja_bulan,

            'keterangan' => $request->keterangan,

            'file_pangkat' => $filePangkat

        ]);

        return back()->with(
            'success',
            'Data pangkat berhasil diupdate'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | HAPUS
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        $pangkat = Pangkat::findOrFail($id);

        if(
            $pangkat->validasi_admin_unit
            ==
            'Disetujui'
        ){

            return back()->with(
                'error',
                'Data sudah divalidasi'
            );

        }

        if($pangkat->file_pangkat){

            Storage::disk('public')
            ->delete(
                $pangkat->file_pangkat
            );

        }

        $pangkat->delete();

        return back()->with(
            'success',
            'Data pangkat berhasil dihapus'
        );
    }
}
