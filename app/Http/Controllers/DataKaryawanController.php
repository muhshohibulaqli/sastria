<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Unit;

class DataKaryawanController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | DATA KARYAWAN
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {

        $query = User::where(
            'role',
            'asn'
        );

        /*
        |--------------------------------------------------------------------------
        | SEARCH NAMA
        |--------------------------------------------------------------------------
        */

        if($request->filled('search')){

            $query->where(

                'name',

                'like',

                '%'.$request->search.'%'

            );

        }

        /*
        |--------------------------------------------------------------------------
        | FILTER UNIT
        |--------------------------------------------------------------------------
        */

        if($request->filled('unit')){

            $query->where(

                'unit',

                $request->unit

            );

        }

        /*
        |--------------------------------------------------------------------------
        | DATA ASN
        |--------------------------------------------------------------------------
        */

        $users = $query

        ->latest()

        ->paginate(20)

        ->appends(

            $request->all()

        );

        /*
        |--------------------------------------------------------------------------
        | DATA UNIT
        |--------------------------------------------------------------------------
        */

        $units = Unit::orderBy(

            'nama_unit'

        )

        ->get();

        return view(

            'admin.data-karyawan',

            compact(

                'users',
                'units'

            )

        );

    }

}