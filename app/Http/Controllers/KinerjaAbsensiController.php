<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\User;
use App\Models\Upload;

class KinerjaAbsensiController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | HALAMAN
    |--------------------------------------------------------------------------
    */
public function index()
{

if(Auth::user()->role == 'asn'){

    return view('asn.kinerja-absensi');

}

elseif(Auth::user()->role == 'admin_unit'){

    $users = User::where(
        'unit',
        Auth::user()->unit
    )
    ->where('role','asn')
    ->latest()
    ->paginate(15);

    return view(
        'admin-unit.kinerja-absensi',
        compact('users')
    );

}

else{

    $bulanSekarang = request('bulan') ?? date('F');

    $tahun = request('tahun') ?? date('Y');

    $users = User::where(
        'role',
        'asn'
    )
    ->latest()
    ->paginate(15);

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

    $belumUpload = max(
        0,
        $totalAsn - (
            $lengkap +
            $belumLengkap +
            $tervalidasi
        )
    );

    return view(
        'admin.kinerja-absensi',
        compact(
            'users',
            'totalAsn',
            'lengkap',
            'belumLengkap',
            'tervalidasi',
            'belumUpload',
            'bulanSekarang',
            'tahun'
        )
    );

}

}


    /*
    |--------------------------------------------------------------------------
    | UPLOAD FILE
    |--------------------------------------------------------------------------
    */

    public function upload(Request $request)
    {

        $upload = Upload::firstOrCreate([

            'user_id' => Auth::id(),

            'bulan' => $request->bulan,

            'tahun' => $request->tahun

        ]);

        /*
        |--------------------------------------------------------------------------
        | FILE KINERJA
        |--------------------------------------------------------------------------
        */

        if($request->hasFile('file_kinerja')){

            $extension = $request
                ->file('file_kinerja')
                ->getClientOriginalExtension();

            $namaLengkap = str_replace(
                ' ',
                '_',
                Auth::user()->name
            );

            $namaFileKinerja =
                $namaLengkap .
                '_KINERJA_' .
                $request->bulan .
                '_' .
                date('YmdHis') .
                '.' .
                $extension;

            $kinerja = $request
                ->file('file_kinerja')
                ->storeAs(
                    'kinerja',
                    $namaFileKinerja,
                    'public'
                );

            $upload->file_kinerja = $kinerja;

        }

        /*
        |--------------------------------------------------------------------------
        | FILE ABSENSI
        |--------------------------------------------------------------------------
        */

        if($request->hasFile('file_absensi')){

            $extension = $request
                ->file('file_absensi')
                ->getClientOriginalExtension();

            $namaLengkap = str_replace(
                ' ',
                '_',
                Auth::user()->name
            );

            $namaFileAbsensi =
                $namaLengkap .
                '_ABSENSI_' .
                $request->bulan .
                '_' .
                date('YmdHis') .
                '.' .
                $extension;

            $absensi = $request
                ->file('file_absensi')
                ->storeAs(
                    'absensi',
                    $namaFileAbsensi,
                    'public'
                );

            $upload->file_absensi = $absensi;

        }

        /*
        |--------------------------------------------------------------------------
        | STATUS
        |--------------------------------------------------------------------------
        */

        if(

            $upload->file_kinerja

            &&

            $upload->file_absensi

        ){

            $upload->status = 'lengkap';

        }else{

            $upload->status = 'belum lengkap';

        }

        $upload->save();

        return back()->with(

            'success',

            'File berhasil diupload'

        );

    }

    /*
    |--------------------------------------------------------------------------
    | HAPUS FILE
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {

        $upload = Upload::findOrFail($id);

        if($upload->file_kinerja){

            Storage::disk('public')

                ->delete($upload->file_kinerja);

        }

        if($upload->file_absensi){

            Storage::disk('public')

                ->delete($upload->file_absensi);

        }

        $upload->delete();

        return back()->with(

            'success',

            'File berhasil dihapus'

        );

    }

    /*
    |--------------------------------------------------------------------------
    | VALIDASI
    |--------------------------------------------------------------------------
    */

    public function validasi($id)
    {

        $upload = Upload::findOrFail($id);

        $upload->status = 'tervalidasi';

        $upload->save();

        return back()->with(

            'success',

            'Upload berhasil divalidasi'

        );

    }

    /*
    |--------------------------------------------------------------------------
    | BATAL VALIDASI
    |--------------------------------------------------------------------------
    */

    public function batalValidasi($id)
    {

        $upload = Upload::findOrFail($id);

        $upload->status = 'lengkap';

        $upload->save();

        return back()->with(

            'success',

            'Validasi berhasil dibatalkan'

        );

    }

}