<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\Skp;

class SkpController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | DATA SKP
    |--------------------------------------------------------------------------
    */

    public function index()
    {

        $skps = Skp::where(
                    'user_id',
                    Auth::id()
                )
                ->orderByDesc('tahun')
                ->orderByDesc('created_at')
                ->get();

        return view(
            'asn.data-skp',
            compact(
                'skps'
            )
        );

    }

/*
|--------------------------------------------------------------------------
| SIMPAN DATA SKP
|--------------------------------------------------------------------------
*/

public function store(Request $request)
{

    $request->validate([

        'tahun' => 'required|numeric',

        'capaian_kinerja_organisasi' => 'required',

        'predikat_kinerja_pegawai' => 'required',

        'file_skp' => 'required|mimes:pdf|max:5120',

    ]);

    $fileSkp = null;

    if($request->hasFile('file_skp')){

        $fileSkp = $request
                    ->file('file_skp')
                    ->store(
                        'skp',
                        'public'
                    );

    }

    Skp::create([

        'user_id' => Auth::id(),

        'tahun' => $request->tahun,

        'capaian_kinerja_organisasi'
            => $request->capaian_kinerja_organisasi,

        'predikat_kinerja_pegawai'
            => $request->predikat_kinerja_pegawai,

        'file_skp'
            => $fileSkp,

        /*
        |--------------------------------------------------------------------------
        | File Final (TTE)
        | Akan diupload oleh Admin Unit
        |--------------------------------------------------------------------------
        */

        'file_skp_final'
            => null,

        /*
        |--------------------------------------------------------------------------
        | Status Awal
        |--------------------------------------------------------------------------
        */

        'validasi_admin_unit'
            => 'Belum Validasi',

        /*
        |--------------------------------------------------------------------------
        | Catatan Admin
        |--------------------------------------------------------------------------
        */

        'catatan_admin'
            => null,

    ]);

    return back()->with(

        'success',

        'Data SKP berhasil disimpan.'

    );

}

/*
|--------------------------------------------------------------------------
| UPDATE DATA SKP
|--------------------------------------------------------------------------
*/

public function update(Request $request, $id)
{

    $request->validate([

        'tahun' => 'required|numeric',

        'capaian_kinerja_organisasi' => 'required',

        'predikat_kinerja_pegawai' => 'required',

        'file_skp' => 'nullable|mimes:pdf|max:5120',

    ]);

    $skp = Skp::findOrFail($id);

    if(
        $skp->validasi_admin_unit
        ==
        'Disetujui'
    ){
    
        return back()->with(
            'error',
            'Data sudah divalidasi'
        );
    
    }
    /*
    |--------------------------------------------------------------------------
    | Pastikan hanya pemilik data yang dapat mengubah
    |--------------------------------------------------------------------------
    */

    if($skp->user_id != Auth::id()){

        abort(403);

    }

    $data = [

        'tahun'
            => $request->tahun,

        'capaian_kinerja_organisasi'
            => $request->capaian_kinerja_organisasi,

        'predikat_kinerja_pegawai'
            => $request->predikat_kinerja_pegawai,

        /*
        |--------------------------------------------------------------------------
        | Jika ASN mengubah data maka status kembali menunggu validasi
        |--------------------------------------------------------------------------
        */

        'validasi_admin_unit'
            => 'Belum Validasi',

        /*
        |--------------------------------------------------------------------------
        | Catatan Admin dihapus karena data berubah
        |--------------------------------------------------------------------------
        */

        'catatan_admin'
            => null,

        /*
        |--------------------------------------------------------------------------
        | File Final TTE dihapus dari database
        | (fisik file akan dihapus jika ada di bawah)
        |--------------------------------------------------------------------------
        */

        'file_skp_final'
            => null,

    ];

    /*
    |--------------------------------------------------------------------------
    | Jika upload file SKP baru
    |--------------------------------------------------------------------------
    */

    if($request->hasFile('file_skp')){

        if(
            $skp->file_skp &&
            Storage::disk('public')->exists($skp->file_skp)
        ){

            Storage::disk('public')->delete($skp->file_skp);

        }

        $data['file_skp'] = $request
                            ->file('file_skp')
                            ->store(
                                'skp',
                                'public'
                            );

    }

    /*
    |--------------------------------------------------------------------------
    | Hapus File SKP Final (TTE) lama jika ada
    |--------------------------------------------------------------------------
    */

    if(
        $skp->file_skp_final &&
        Storage::disk('public')->exists($skp->file_skp_final)
    ){

        Storage::disk('public')->delete($skp->file_skp_final);

    }

    $skp->update($data);

    return back()->with(

        'success',

        'Data SKP berhasil diperbarui.'

    );

}

/*
|--------------------------------------------------------------------------
| HAPUS DATA SKP
|--------------------------------------------------------------------------
*/

public function destroy($id)
{

    $skp = Skp::findOrFail($id);
    
    if(
    $skp->validasi_admin_unit
    ==
    'Disetujui'
    ){

    return back()->with(
        'error',
        'Data sudah divalidasi'
    );

}

    /*
    |--------------------------------------------------------------------------
    | Pastikan hanya pemilik data yang dapat menghapus
    |--------------------------------------------------------------------------
    */

    if($skp->user_id != Auth::id()){

        abort(403);

    }

    /*
    |--------------------------------------------------------------------------
    | Hapus File SKP ASN
    |--------------------------------------------------------------------------
    */

    if(
        $skp->file_skp &&
        Storage::disk('public')->exists($skp->file_skp)
    ){

        Storage::disk('public')->delete($skp->file_skp);

    }

    /*
    |--------------------------------------------------------------------------
    | Hapus File SKP Final (TTE)
    |--------------------------------------------------------------------------
    */

    if(
        $skp->file_skp_final &&
        Storage::disk('public')->exists($skp->file_skp_final)
    ){

        Storage::disk('public')->delete($skp->file_skp_final);

    }

    /*
    |--------------------------------------------------------------------------
    | Hapus Data
    |--------------------------------------------------------------------------
    */

    $skp->delete();

    return back()->with(

        'success',

        'Data SKP berhasil dihapus.'

    );

}

}
    