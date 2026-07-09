<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | HALAMAN PROFIL
    |--------------------------------------------------------------------------
    */

    public function index()
    {

        return view('asn.profil');

    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE PROFIL
    |--------------------------------------------------------------------------
    */

    public function update(Request $request)
    {

        $user = Auth::user();

        $user->nip = $request->nip;
        $user->name = $request->name;
        $user->email = $request->email;

        if($request->password){

            $user->password = Hash::make(
                $request->password
            );

        }

        $user->save();

        return back()->with(

            'success',

            'Profil berhasil diupdate'

        );

    }

}