<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Unit;
use App\Models\MasterJabatan;

class UserController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | DATA USER
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {

        $query = User::with([
            'unit',
            'jabatan'
        ]);

        /*
        |--------------------------------------------------------------------------
        | PENCARIAN
        |--------------------------------------------------------------------------
        */

        if ($request->filled('search')) {

            $query->where(function ($q) use ($request) {

                $q->where('nip', 'like', '%' . $request->search . '%')
                  ->orWhere('name', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%');

            });

        }

        /*
        |--------------------------------------------------------------------------
        | DATA USER
        |--------------------------------------------------------------------------
        */

        $users = $query
            ->orderBy('name', 'ASC')
            ->paginate(10)
            ->withQueryString();

        /*
        |--------------------------------------------------------------------------
        | MASTER UNIT
        |--------------------------------------------------------------------------
        */

        $units = Unit::orderBy('nama_unit', 'ASC')->get();

        /*
        |--------------------------------------------------------------------------
        | MASTER JABATAN
        |--------------------------------------------------------------------------
        */

        $masterJabatans = MasterJabatan::orderBy('nama_jabatan', 'ASC')->get();

        /*
        |--------------------------------------------------------------------------
        | STATISTIK
        |--------------------------------------------------------------------------
        */

        $totalUser = User::count();

        $totalAktif = User::where(
            'status_aktif',
            'Aktif'
        )->count();

        $totalNonAktif = User::where(
            'status_aktif',
            'Non Aktif'
        )->count();

        $totalAdmin = User::where(
            'role',
            'admin'
        )->count();

        $totalAdminUnit = User::where(
            'role',
            'admin_unit'
        )->count();

        $totalAsn = User::where(
            'role',
            'asn'
        )->count();

        /*
        |--------------------------------------------------------------------------
        | VIEW
        |--------------------------------------------------------------------------
        */

        return view(
            'admin.users',
            compact(
                'users',
                'units',
                'masterJabatans',
                'totalUser',
                'totalAktif',
                'totalNonAktif',
                'totalAdmin',
                'totalAdminUnit',
                'totalAsn'
            )
        );

    }
    
        /*
    |--------------------------------------------------------------------------
    | TAMBAH USER
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {

        $request->validate([

            'nip'              => 'required|unique:users,nip',

            'name'             => 'required|max:150',

            'email'            => 'required|email|unique:users,email',

            'password'         => 'required|min:6',

            'role'             => 'required|in:admin,admin_unit,asn',

            'unit_id'          => 'required|exists:units,id',

            'jabatan_id'       => 'nullable|exists:master_jabatans,id',

            'status_pegawai'   => 'required',

            'status_aktif'     => 'required',

        ]);

        /*
        |--------------------------------------------------------------------------
        | AMBIL DATA UNIT
        |--------------------------------------------------------------------------
        */

        $unit = Unit::findOrFail($request->unit_id);

        /*
        |--------------------------------------------------------------------------
        | SIMPAN USER
        |--------------------------------------------------------------------------
        */

        User::create([

            'nip'              => trim($request->nip),

            'name'             => trim($request->name),

            'email'            => trim($request->email),

            'password'         => Hash::make($request->password),

            'role'             => $request->role,

            'unit_id'          => $request->unit_id,

            'jabatan_id'       => $request->jabatan_id,

            'status_pegawai'   => $request->status_pegawai,

            'status_aktif'     => $request->status_aktif,

            // Kolom lama (tetap diisi agar kompatibel)
            'unit'             => $unit->nama_unit,

        ]);

        return redirect()
            ->back()
            ->with(
                'success',
                'Data user berhasil ditambahkan.'
            );

    }
    
        /*
    |--------------------------------------------------------------------------
    | UPDATE USER
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {

        $request->validate([

            'nip'              => 'required|unique:users,nip,' . $id,

            'name'             => 'required|max:150',

            'email'            => 'required|email|unique:users,email,' . $id,

            'role'             => 'required|in:admin,admin_unit,asn',

            'unit_id'          => 'required|exists:units,id',

            'jabatan_id'       => 'nullable|exists:master_jabatans,id',

            'status_pegawai'   => 'required',

            'status_aktif'     => 'required',

        ]);

        /*
        |--------------------------------------------------------------------------
        | CARI USER
        |--------------------------------------------------------------------------
        */

        $user = User::findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | AMBIL UNIT
        |--------------------------------------------------------------------------
        */

        $unit = Unit::findOrFail($request->unit_id);

        /*
        |--------------------------------------------------------------------------
        | UPDATE DATA
        |--------------------------------------------------------------------------
        */

        $user->nip = trim($request->nip);

        $user->name = trim($request->name);

        $user->email = trim($request->email);

        $user->role = $request->role;

        $user->unit_id = $request->unit_id;

        $user->jabatan_id = $request->jabatan_id;

        $user->status_pegawai = $request->status_pegawai;

        $user->status_aktif = $request->status_aktif;

        // Sinkronkan kolom unit lama
        $user->unit = $unit->nama_unit;

        /*
        |--------------------------------------------------------------------------
        | PASSWORD BARU (OPSIONAL)
        |--------------------------------------------------------------------------
        */

        if ($request->filled('password')) {

            $user->password = Hash::make($request->password);

        }

        $user->save();

        return redirect()
            ->back()
            ->with(
                'success',
                'Data user berhasil diperbarui.'
            );

    }
    
        /*
    |--------------------------------------------------------------------------
    | HAPUS USER
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {

        $user = User::findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | CEGAH HAPUS AKUN SENDIRI
        |--------------------------------------------------------------------------
        */

        if (auth()->id() == $user->id) {

            return redirect()
                ->back()
                ->with(
                    'error',
                    'Akun yang sedang digunakan tidak dapat dihapus.'
                );

        }

        $user->delete();

        return redirect()
            ->back()
            ->with(
                'success',
                'Data user berhasil dihapus.'
            );

    }

    /*
    |--------------------------------------------------------------------------
    | RESET PASSWORD
    |--------------------------------------------------------------------------
    */

    public function resetPassword($id)
    {

        $user = User::findOrFail($id);

        $user->password = Hash::make('12345678');

        $user->save();

        return redirect()
            ->back()
            ->with(
                'success',
                'Password berhasil direset menjadi 12345678.'
            );

    }
    
        /*
    |--------------------------------------------------------------------------
    | DOWNLOAD TEMPLATE CSV
    |--------------------------------------------------------------------------
    */

    public function downloadTemplate()
    {

        $headers = [

            'Content-Type' => 'text/csv',

            'Content-Disposition' => 'attachment; filename=template-user.csv'

        ];

        $callback = function () {

            $file = fopen('php://output', 'w');

            fputcsv($file, [

                'nip',

                'name',

                'email',

                'role',

                'unit',

                'jabatan',

                'status_pegawai',

                'status_aktif'

            ]);

            fclose($file);

        };

        return response()->stream(

            $callback,

            200,

            $headers

        );

    }

    /*
    |--------------------------------------------------------------------------
    | IMPORT USER CSV
    |--------------------------------------------------------------------------
    */

    public function import(Request $request)
    {

        $request->validate([

            'file' => 'required|mimes:csv,txt'

        ]);

        $file = fopen(

            $request->file('file')->getRealPath(),

            'r'

        );

        $header = true;

        while (($row = fgetcsv($file, 1000, ",")) !== false) {

            if ($header) {

                $header = false;

                continue;

            }

            $unit = Unit::where(

                'nama_unit',

                trim($row[4])

            )->first();

            $jabatan = MasterJabatan::where(

                'nama_jabatan',

                trim($row[5])

            )->first();

            if (!$unit) {

                continue;

            }

            User::updateOrCreate(

                [

                    'nip' => trim($row[0])

                ],

                [

                    'name' => trim($row[1]),

                    'email' => trim($row[2]),

                    'password' => Hash::make('12345678'),

                    'role' => trim($row[3]),

                    'unit_id' => $unit->id,

                    'unit' => $unit->nama_unit,

                    'jabatan_id' => $jabatan ? $jabatan->id : null,

                    'status_pegawai' => trim($row[6]),

                    'status_aktif' => trim($row[7])

                ]

            );

        }

        fclose($file);

        return redirect()

            ->back()

            ->with(

                'success',

                'Import user berhasil dilakukan.'

            );

    }

}