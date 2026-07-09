<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Upload;
use App\Models\Unit;

class DashboardController extends Controller
{

    public function index(Request $request)
    {

        /*
        |--------------------------------------------------------------------------
        | ADMIN
        |--------------------------------------------------------------------------
        */

        if(Auth::user()->role == 'admin'){

            $totalAsn = User::where(
                'role',
                'asn'
            )->count();

            $lengkap = Upload::where(
                'status',
                'lengkap'
            )->count();

            $belumLengkap = Upload::where(
                'status',
                'belum lengkap'
            )->count();

            $tervalidasi = Upload::where(
                'status',
                'tervalidasi'
            )->count();

            /*
            |--------------------------------------------------------------------------
            | BELUM UPLOAD
            |--------------------------------------------------------------------------
            */

            $sudahUpload = Upload::distinct()
                ->count('user_id');

            $belumUpload = $totalAsn - $sudahUpload;

            $users = User::where(
                'role',
                'asn'
            )

            ->latest()

            ->paginate(10);

            $units = Unit::all();

            return view(

                'admin.dashboard',

                compact(

                    'totalAsn',
                    'lengkap',
                    'belumLengkap',
                    'tervalidasi',
                    'belumUpload',
                    'users',
                    'units'

                )

            );

        }

        /*
        |--------------------------------------------------------------------------
        | ADMIN UNIT
        |--------------------------------------------------------------------------
        */

        elseif(Auth::user()->role == 'admin_unit'){

            $users = User::where(

                'unit',

                Auth::user()->unit

            )

            ->where(
                'role',
                'asn'
            )

            ->latest()

            ->paginate(10);

            return view(

                'admin-unit.dashboard',

                compact('users')

            );

        }

        /*
        |--------------------------------------------------------------------------
        | ASN
        |--------------------------------------------------------------------------
        */

        else{

            return view(

                'asn.dashboard'

            );

        }

    }

}