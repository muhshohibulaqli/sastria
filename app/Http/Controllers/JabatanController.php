<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN DATA JABATAN
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $jabatans = Jabatan::where(
            'user_id',
            Auth::id()
        )
        ->latest()
        ->get();

        return view(
            'asn.data-jabatan',
            compact('jabatans')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | SIMPAN DATA JABATAN
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $fileJabatan = null;

        if($request->hasFile('file_jabatan')){

            $extension = $request
                ->file('file_jabatan')
                ->getClientOriginalExtension();

            $namaLengkap = str_replace(
                ' ',
                '_',
                Auth::user()->name
            );

            $namaJabatan = str_replace(
                ' ',
                '_',
                $request->nama_jabatan
            );

            $kodeUnik = date('YmdHis');

            $namaFile =

                $namaLengkap

                .'_'

                .$namaJabatan

                .'_'

                .$kodeUnik

                .'.'

                .$extension;

            $fileJabatan = $request
                ->file('file_jabatan')
                ->storeAs(
                    'file_jabatan',
                    $namaFile,
                    'public'
                );
        }

        Jabatan::create([

            'user_id' => Auth::id(),

            'nama_jabatan' => $request->nama_jabatan,

            'tmt_jabatan' => $request->tmt_jabatan,

            'no_sk' => $request->no_sk,

            'tgl_sk' => $request->tgl_sk,

            'jenis_jabatan' => $request->jenis_jabatan,

            'pejabat_penetap' => $request->pejabat_penetap,

            'keterangan' => $request->keterangan,

            'file_jabatan' => $fileJabatan,

            'validasi_admin_unit' => 'Belum Validasi'

        ]);

        return back()->with(
            'success',
            'Data jabatan berhasil ditambahkan'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE DATA JABATAN
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {
        $jabatan = Jabatan::findOrFail($id);

        if(
            $jabatan->validasi_admin_unit
            ==
            'Disetujui'
        ){

            return back()->with(
                'error',
                'Data sudah divalidasi'
            );
        }

        $fileJabatan = $jabatan->file_jabatan;

        if($request->hasFile('file_jabatan')){

            if($jabatan->file_jabatan){

                Storage::disk('public')
                    ->delete(
                        $jabatan->file_jabatan
                    );
            }

            $extension = $request
                ->file('file_jabatan')
                ->getClientOriginalExtension();

            $namaLengkap = str_replace(
                ' ',
                '_',
                Auth::user()->name
            );

            $namaJabatan = str_replace(
                ' ',
                '_',
                $request->nama_jabatan
            );

            $kodeUnik = date('YmdHis');

            $namaFile =

                $namaLengkap

                .'_'

                .$namaJabatan

                .'_'

                .$kodeUnik

                .'.'

                .$extension;

            $fileJabatan = $request
                ->file('file_jabatan')
                ->storeAs(
                    'file_jabatan',
                    $namaFile,
                    'public'
                );
        }

        $jabatan->update([

            'nama_jabatan' => $request->nama_jabatan,

            'tmt_jabatan' => $request->tmt_jabatan,

            'no_sk' => $request->no_sk,

            'tgl_sk' => $request->tgl_sk,

            'jenis_jabatan' => $request->jenis_jabatan,

            'pejabat_penetap' => $request->pejabat_penetap,

            'keterangan' => $request->keterangan,

            'file_jabatan' => $fileJabatan

        ]);

        return back()->with(
            'success',
            'Data jabatan berhasil diupdate'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | HAPUS DATA JABATAN
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        $jabatan = Jabatan::findOrFail($id);

        if(
            $jabatan->validasi_admin_unit
            ==
            'Disetujui'
        ){

            return back()->with(
                'error',
                'Data sudah divalidasi'
            );
        }

        if($jabatan->file_jabatan){

            Storage::disk('public')
                ->delete(
                    $jabatan->file_jabatan
                );
        }

        $jabatan->delete();

        return back()->with(
            'success',
            'Data jabatan berhasil dihapus'
        );
    }
}