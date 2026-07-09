<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterJabatan;
use App\Models\User;

class MasterJabatanController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | DATA JABATAN
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {
        $query = MasterJabatan::query();

        if ($request->filled('search')) {

            $query->where(
                'nama_jabatan',
                'like',
                '%' . $request->search . '%'
            );

        }

        $jabatans = $query
            ->orderBy('nama_jabatan')
            ->paginate(10)
            ->withQueryString();

        return view(
            'admin.master-jabatan',
            compact('jabatans')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | SIMPAN
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([

            'nama_jabatan' =>
            'required|unique:master_jabatans,nama_jabatan'

        ],[

            'nama_jabatan.required' =>
            'Nama jabatan wajib diisi.',

            'nama_jabatan.unique' =>
            'Nama jabatan sudah ada.'

        ]);

        MasterJabatan::create([

            'nama_jabatan' =>
            $request->nama_jabatan

        ]);

        return back()->with(
            'success',
            'Data jabatan berhasil ditambahkan.'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function update(Request $request,$id)
    {
        $request->validate([

            'nama_jabatan'=>

            'required|unique:master_jabatans,nama_jabatan,'.$id

        ]);

        MasterJabatan::findOrFail($id)

        ->update([

            'nama_jabatan'=>

            $request->nama_jabatan

        ]);

        return back()->with(
            'success',
            'Data berhasil diperbarui.'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | HAPUS
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        $jabatan = MasterJabatan::findOrFail($id);

        $dipakai = User::where(
            'jabatan_id',
            $jabatan->id
        )->count();

        if($dipakai>0){

            return back()->with(

                'error',

                'Jabatan sedang digunakan oleh user.'

            );

        }

        $jabatan->delete();

        return back()->with(

            'success',

            'Data berhasil dihapus.'

        );
    }
}