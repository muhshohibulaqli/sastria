<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\Reimbursement;

class ReimbursementController extends Controller
{

    public function index()
    {

        $reimbursements = Reimbursement::where(

            'user_id',

            Auth::id()

        )

        ->latest()

        ->get();

        $belumDicairkan = Reimbursement::where(
            'user_id',
            Auth::id()
        )
        ->where(
            'status',
            'belum_dicairkan'
        )
        ->count();

        $sudahDicairkan = Reimbursement::where(
            'user_id',
            Auth::id()
        )
        ->where(
            'status',
            'sudah_dicairkan'
        )
        ->count();

        $totalNominal = Reimbursement::where(
            'user_id',
            Auth::id()
        )
        ->sum('jumlah');

        return view(

            'asn.reimbursement',

            compact(

                'reimbursements',

                'belumDicairkan',

                'sudahDicairkan',

                'totalNominal'

            )

        );

    }

    public function simpan(Request $request)
    {

        $request->validate([

            'tanggal_nota' => 'required',

            'jenis' => 'required',

            'jumlah' => 'required'

        ]);

        $file = null;

        if($request->hasFile('file_nota')){

            $file = $request
            ->file('file_nota')
            ->store(
                'nota-reimbursement',
                'public'
            );

        }

        $nomor =

            'RMB-' .

            date('Y') .

            '-' .

            str_pad(

                (Reimbursement::max('id') ?? 0) + 1,

                5,

                '0',

                STR_PAD_LEFT

            );

        Reimbursement::create([

            'user_id' => Auth::id(),

            'nomor_pengajuan' => $nomor,

            'tanggal_nota' => $request->tanggal_nota,

            'jenis' => $request->jenis,

            'deskripsi' => $request->deskripsi,

            'jumlah' => $request->jumlah,

            'file_nota' => $file

        ]);

        return back()->with(

            'success',

            'Pengajuan reimbursement berhasil'

        );

    }

    public function destroy($id)
    {

        $data = Reimbursement::findOrFail($id);

        if(

            $data->status ==

            'sudah_dicairkan'

        ){

            return back();

        }

        if($data->file_nota){

            Storage::disk('public')
            ->delete(
                $data->file_nota
            );

        }

        $data->delete();

        return back();

    }

}