<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Pendidikan;
use App\Models\Pangkat;
use App\Models\Jabatan;
use App\Models\Kgb;
use App\Models\Skp;

class ValidasiController extends Controller
{

    public function pendidikan(Request $request,$id)
    {

        Pendidikan::findOrFail($id)

        ->update([

            'validasi_admin_unit'
            =>
            $request->status

        ]);

        return back();

    }

    public function pangkat(Request $request,$id)
    {

        Pangkat::findOrFail($id)

        ->update([

            'validasi_admin_unit'
            =>
            $request->status

        ]);

        return back();

    }

    public function jabatan(Request $request,$id)
    {

        Jabatan::findOrFail($id)

        ->update([

            'validasi_admin_unit'
            =>
            $request->status

        ]);

        return back();

    }

    public function kgb(Request $request,$id)
    {

        Kgb::findOrFail($id)

        ->update([

            'validasi_admin_unit'
            =>
            $request->status

        ]);

        return back();

    }
    
    public function skp(Request $request,$id)
{

    $skp = Skp::findOrFail($id);

    $fileFinal = $skp->file_skp_final;

    /*
    |--------------------------------------------------------------------------
    | Upload File SKP Final (TTE)
    |--------------------------------------------------------------------------
    */

    if($request->hasFile('file_skp_final')){

        if(

            $fileFinal &&

            Storage::disk('public')->exists($fileFinal)

        ){

            Storage::disk('public')->delete($fileFinal);

        }

        $fileFinal = $request
            ->file('file_skp_final')
            ->store(
                'skp-final',
                'public'
            );

    }

    /*
    |--------------------------------------------------------------------------
    | Simpan Validasi
    |--------------------------------------------------------------------------
    */

    $skp->update([

        'file_skp_final'       => $fileFinal,

        'validasi_admin_unit'  => $request->status,

        'catatan_admin'        => $request->catatan_admin

    ]);

    return back()->with(

        'success',

        'Validasi SKP berhasil disimpan.'

    );

}

}