<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\Kgb;

class DataKgbController extends Controller
{

    public function index()
    {

        $kgbs = Kgb::where(
            'user_id',
            Auth::id()
        )
        ->latest()
        ->get();

        return view(
            'asn.data-kgb',
            compact('kgbs')
        );

    }
    
    public function tambah(Request $request)
{

    $file = null;

    if ($request->hasFile('file_sk_kgb')) {

        $file = $request
            ->file('file_sk_kgb')
            ->store('kgb', 'public');

    }

    Kgb::create([

        'user_id' => Auth::id(),

        'gaji_pokok_lama' => $request->gaji_pokok_lama,

        'oleh_pejabat' => $request->oleh_pejabat,

        'no_sk_terakhir' => $request->no_sk_terakhir,

        'tgl_sk_berkala' => $request->tgl_sk_berkala,

        'tmt_berkala' => $request->tmt_berkala,

        'masa_kerja_berkala' => $request->masa_kerja_berkala,

        'gaji_pokok_baru' => $request->gaji_pokok_baru,

        'masa_kerja_baru' => $request->masa_kerja_baru,

        'pangkat_golongan' => $request->pangkat_golongan,

        'tmt_baru' => $request->tmt_baru,

        'kgb_yad' => $request->kgb_yad,

        'file_sk_kgb' => $file,

        'validasi_admin_unit' => 'Belum Validasi',

        'status_generate' => 'Belum'

    ]);

    return redirect()
        ->back()
        ->with(
            'success',
            'Data KGB berhasil ditambahkan'
        );

}

public function update(
    Request $request,
    $id
)
{

    $kgb = Kgb::findOrFail($id);

    if(
        $kgb->validasi_admin_unit
        ==
        'Disetujui'
    ){
    
        return back()->with(
            'error',
            'Data Sudah Disetujui'
        );
    
    }
    
    $file = $kgb->file_sk_kgb;

    if ($request->hasFile('file_sk_kgb')) {

        if (
            $file &&
            Storage::disk('public')->exists($file)
        ) {

            Storage::disk('public')->delete($file);

        }

        $file = $request
            ->file('file_sk_kgb')
            ->store('kgb', 'public');

    }

    $kgb->update([

        'gaji_pokok_lama' => $request->gaji_pokok_lama,

        'oleh_pejabat' => $request->oleh_pejabat,

        'no_sk_terakhir' => $request->no_sk_terakhir,

        'tgl_sk_berkala' => $request->tgl_sk_berkala,

        'tmt_berkala' => $request->tmt_berkala,

        'masa_kerja_berkala' => $request->masa_kerja_berkala,

        'gaji_pokok_baru' => $request->gaji_pokok_baru,

        'masa_kerja_baru' => $request->masa_kerja_baru,

        'pangkat_golongan' => $request->pangkat_golongan,

        'tmt_baru' => $request->tmt_baru,

        'kgb_yad' => $request->kgb_yad,

        'file_sk_kgb' => $file

    ]);

    return redirect()
        ->back()
        ->with(
            'success',
            'Data KGB berhasil diperbarui'
        );

}

public function destroy($id)
{
    $kgb = Kgb::findOrFail($id);
    
    if(
    $kgb->validasi_admin_unit
    ==
    'Disetujui'
){

    return back()->with(
        'error',
        'Data Sudah Disetujui'
    );

}

    // Pastikan hanya pemilik data yang boleh menghapus
    if ($kgb->user_id != Auth::id()) {

        abort(403);

    }

    // Hapus file jika ada
    if (
        $kgb->file_sk_kgb &&
        Storage::disk('public')->exists($kgb->file_sk_kgb)
    ) {

        Storage::disk('public')->delete($kgb->file_sk_kgb);

    }

    // Hapus data
    $kgb->delete();

    return redirect('/data-kgb')
        ->with(
            'success',
            'Data KGB berhasil dihapus.'
        );
}


}