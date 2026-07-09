<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Biodata;
use App\Models\Pendidikan;

class BiodataController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | DATA PRIBADI
    |--------------------------------------------------------------------------
    */

    public function index()
    {

        $biodata = Biodata::firstOrCreate([

            'user_id' => Auth::id()

        ]);

        $pendidikans = Pendidikan::where(

            'user_id',

            Auth::id()

        )

        ->latest()

        ->get();

        return view(

            'asn.data-pribadi',

            compact(

                'biodata',
                'pendidikans'

            )

        );

    }

    /*
    |--------------------------------------------------------------------------
    | SIMPAN DATA
    |--------------------------------------------------------------------------
    */

    public function simpan(Request $request)
    {

        $biodata = Biodata::firstOrCreate([

            'user_id' => Auth::id()

        ]);

        /*
        |--------------------------------------------------------------------------
        | FOTO
        |--------------------------------------------------------------------------
        */
        if($request->hasFile('foto')){
        
            $extension = $request
                ->file('foto')
                ->getClientOriginalExtension();
        
            $namaLengkap = str_replace(
                ' ',
                '_',
                Auth::user()->name
            );
        
            $foto = $request
                ->file('foto')
                ->storeAs(
                    'foto-asn',
                    $namaLengkap
                    .'_FOTO_'
                    .date('YmdHis')
                    .'.'
                    .$extension,
                    'public'
                );
        
            $biodata->foto = $foto;
        
        }

        /*
        |--------------------------------------------------------------------------
        | FILE
        |--------------------------------------------------------------------------
        */

        $fileFields = [

            'file_karpeg',
            'file_taspen',
            'file_npwp',
            'file_ktp',
            'file_kk',
            'file_rekening',
            'file_sk_cpns',
            'file_sk_kgb',

        ];

        foreach($fileFields as $field){

            if($request->hasFile($field)){
        
                $extension = $request
                    ->file($field)
                    ->getClientOriginalExtension();
        
                $namaLengkap = str_replace(
                    ' ',
                    '_',
                    Auth::user()->name
                );
        
                $namaDokumen = strtoupper(
                    str_replace(
                        'file_',
                        '',
                        $field
                    )
                );
        
                $path = $request
                    ->file($field)
                    ->storeAs(
                        $field,
                        $namaLengkap
                        .'_'
                        .$namaDokumen
                        .'_'
                        .date('YmdHis')
                        .'.'
                        .$extension,
                        'public'
                    );
        
                $biodata->$field = $path;
        
            }
        
        }

        /*
        |--------------------------------------------------------------------------
        | UPDATE
        |--------------------------------------------------------------------------
        */

        $biodata->update([

            'gelar_depan' => $request->gelar_depan,
            'gelar_belakang' => $request->gelar_belakang,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'status_nikah' => $request->status_nikah,
            'hp1' => $request->hp1,
            'email_pribadi' => $request->email_pribadi,
            'warga_negara' => $request->warga_negara,

            'unit_kerja' => $request->unit_kerja,
            'status_aktif' => $request->status_aktif,
            'status_pegawai' => $request->status_pegawai,
            'jabatan_atasan' => $request->jabatan_atasan,
            'karpeg' => $request->karpeg,
            'taspen' => $request->taspen,
            'nuptk' => $request->nuptk,
            'npwp' => $request->npwp,
            'nip_pppk' => $request->nip_pppk,

            'alamat' => $request->alamat,
            'rt_rw' => $request->rt_rw,
            'kelurahan' => $request->kelurahan,
            'kode_pos' => $request->kode_pos,
            'jarak_tempat_tinggal' => $request->jarak_tempat_tinggal,

            'no_ktp' => $request->no_ktp,
            'tanggal_ktp' => $request->tanggal_ktp,
            'alamat_ktp' => $request->alamat_ktp,
            'rt_rw_ktp' => $request->rt_rw_ktp,
            'kelurahan_ktp' => $request->kelurahan_ktp,
            'kode_pos_ktp' => $request->kode_pos_ktp,

            'golongan_darah' => $request->golongan_darah,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'hobby' => $request->hobby,
            'ukuran_baju' => $request->ukuran_baju,

            'nama_bank' => $request->nama_bank,
            'no_rekening' => $request->no_rekening,
            'atas_nama_rekening' => $request->atas_nama_rekening,
            'cabang_bank' => $request->cabang_bank,
            'keterangan_bank' => $request->keterangan_bank,

            'tmt_cpns' => $request->tmt_cpns,
            'tkgb' => $request->tkgb,

        ]);

        $biodata->save();

        return back()->with(

            'success',

            'Data berhasil disimpan'

        );

    }

}