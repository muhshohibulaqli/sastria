<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Biodata;
use App\Models\Pendidikan;
use App\Models\Pangkat;
use App\Models\Jabatan;
use App\Models\Kgb;
use App\Models\Skp;
use Barryvdh\DomPDF\Facade\Pdf;

class DetailKaryawanController extends Controller
{

    public function index($id)
{

    $user = User::findOrFail($id);

    $biodata = Biodata::where('user_id',$id)->first();

    $pendidikans = Pendidikan::where('user_id',$id)
    ->latest()
    ->get();

    $pangkats = Pangkat::where('user_id',$id)
    ->latest()
    ->get();

    $jabatans = Jabatan::where('user_id',$id)
    ->latest()
    ->get();

    $kgbs = Kgb::where('user_id',$id)
    ->latest()
    ->get();
    
    $skps = Skp::where('user_id',$id)
    ->latest()
    ->get();

    return view(
    'admin.detail-karyawan',
    compact(
        'user',
        'biodata',
        'pendidikans',
        'pangkats',
        'jabatans',
        'kgbs',
        'skps'
    )
    );

}

    public function cetakPdf($id)
    {

        $user = User::findOrFail($id);

        $biodata = Biodata::where('user_id',$id)->first();

        $pendidikans = Pendidikan::where('user_id',$id)
        ->latest()
        ->get();

        $pangkats = Pangkat::where('user_id',$id)
        ->latest()
        ->get();

        $jabatans = Jabatan::where('user_id',$id)
        ->latest()
        ->get();
        
        $kgbs = Kgb::where('user_id',$id)
        ->latest()
        ->get();
        
        $skps = Skp::where('user_id',$id)
        ->latest()
        ->get();

        $pdf = Pdf::loadView(
    'admin.pdf.portofolio-asn',
    compact(
        'user',
        'biodata',
        'pendidikans',
        'pangkats',
        'jabatans',
        'kgbs',
        'skps'
    )
);

$pdf->setPaper('A4', 'portrait');

return $pdf->stream(
    'Portofolio-ASN-'.$user->name.'.pdf'
);

    }

}