<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\User;

class UnitController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | DATA UNIT
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {
        $query = Unit::query();

        // Pencarian
        if ($request->filled('search')) {

            $search = $request->search;

            $query->where(function ($q) use ($search) {

                $q->where('nama_unit', 'like', "%{$search}%")
                    ->orWhere('nama_lengkap_unit', 'like', "%{$search}%")
                    ->orWhere('wilayah', 'like', "%{$search}%")
                    ->orWhere('telepon', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");

            });

        }

        // Pagination 6 data
        $units = $query
            ->orderBy('nama_unit')
            ->paginate(10)
            ->withQueryString();

        return view('admin.unit', compact('units'));
    }

    /*
    |--------------------------------------------------------------------------
    | SIMPAN UNIT
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([

            'nama_unit'         => 'required|max:100|unique:units,nama_unit',

            'nama_lengkap_unit' => 'nullable|max:255',

            'wilayah'           => 'nullable|max:150',

            'alamat'            => 'nullable',

            'telepon'           => 'nullable|max:30',

            'email'             => 'nullable|email|max:100',

        ]);

        Unit::create([

            'nama_unit'         => $request->nama_unit,

            'nama_lengkap_unit' => $request->nama_lengkap_unit,

            'wilayah'           => $request->wilayah,

            'alamat'            => $request->alamat,

            'telepon'           => $request->telepon,

            'email'             => $request->email,

        ]);

        return back()->with(
            'success',
            'Data unit berhasil ditambahkan.'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE UNIT
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {
        $unit = Unit::findOrFail($id);

        $request->validate([

            'nama_unit'         => 'required|max:100|unique:units,nama_unit,' . $id,

            'nama_lengkap_unit' => 'nullable|max:255',

            'wilayah'           => 'nullable|max:150',

            'alamat'            => 'nullable',

            'telepon'           => 'nullable|max:30',

            'email'             => 'nullable|email|max:100',

        ]);

        $unit->update([

            'nama_unit'         => $request->nama_unit,

            'nama_lengkap_unit' => $request->nama_lengkap_unit,

            'wilayah'           => $request->wilayah,

            'alamat'            => $request->alamat,

            'telepon'           => $request->telepon,

            'email'             => $request->email,

        ]);

        return back()->with(
            'success',
            'Data unit berhasil diperbarui.'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | HAPUS UNIT
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        $unit = Unit::findOrFail($id);

        $digunakan = User::where(
            'unit',
            $unit->nama_unit
        )->count();

        if ($digunakan > 0) {

            return back()->with(
                'error',
                'Unit masih digunakan oleh pegawai dan tidak dapat dihapus.'
            );

        }

        $unit->delete();

        return back()->with(
            'success',
            'Data unit berhasil dihapus.'
        );
    }
}