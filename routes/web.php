<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| MODEL
|--------------------------------------------------------------------------
*/

use App\Models\User;
use App\Models\Upload;
use App\Models\Unit;
use App\Models\Biodata;

/*
|--------------------------------------------------------------------------
| CONTROLLER
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\KinerjaAbsensiController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PangkatController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\DataKaryawanController;
use App\Http\Controllers\DetailKaryawanController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\DataKgbController;
use App\Http\Controllers\KendaliKgbController;
use App\Http\Controllers\ReimbursementController;
use App\Http\Controllers\SkpController;
use App\Http\Controllers\MasterJabatanController;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    return redirect('/login');

});

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get(

    '/dashboard',

    [DashboardController::class, 'index']

)->middleware('auth')->name('dashboard');

/*
/*
|--------------------------------------------------------------------------
| DATA USER
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | TAMPIL DATA USER
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/user',
        [UserController::class, 'index']
    )->name('user.index');

    /*
    |--------------------------------------------------------------------------
    | TAMBAH USER
    |--------------------------------------------------------------------------
    */

    Route::post(
        '/tambah-user',
        [UserController::class, 'store']
    )->name('user.store');

    /*
    |--------------------------------------------------------------------------
    | UPDATE USER
    |--------------------------------------------------------------------------
    */

    Route::post(
        '/update-user/{id}',
        [UserController::class, 'update']
    )->name('user.update');

    /*
    |--------------------------------------------------------------------------
    | HAPUS USER
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/hapus-user/{id}',
        [UserController::class, 'destroy']
    )->name('user.destroy');

    /*
    |--------------------------------------------------------------------------
    | RESET PASSWORD
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/reset-password/{id}',
        [UserController::class, 'resetPassword']
    )->name('user.reset');

    /*
    |--------------------------------------------------------------------------
    | IMPORT USER
    |--------------------------------------------------------------------------
    */

    Route::post(
        '/import-user',
        [UserController::class, 'import']
    )->name('user.import');

    /*
    |--------------------------------------------------------------------------
    | DOWNLOAD TEMPLATE CSV
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/download-template-user',
        [UserController::class, 'downloadTemplate']
    )->name('user.template');

});

/*
|--------------------------------------------------------------------------
| MASTER UNIT
|--------------------------------------------------------------------------
*/

Route::get(

    '/unit',

    [UnitController::class, 'index']

)->middleware('auth');

Route::post(

    '/tambah-unit',

    [UnitController::class, 'store']

)->middleware('auth');

Route::post(

    '/update-unit/{id}',

    [UnitController::class, 'update']

)->middleware('auth');

Route::get(

    '/hapus-unit/{id}',

    [UnitController::class, 'destroy']

)->middleware('auth');

/*
|--------------------------------------------------------------------------
| DATA PRIBADI
|--------------------------------------------------------------------------
*/

Route::get(

    '/data-pribadi',

    [BiodataController::class, 'index']

)->middleware('auth');

Route::post(

    '/simpan-data-pribadi',

    [BiodataController::class, 'simpan']

)->middleware('auth');

/*
|--------------------------------------------------------------------------
| PROFIL
|--------------------------------------------------------------------------
*/

Route::get(

    '/profil',

    [ProfilController::class, 'index']

)->middleware('auth');

Route::post(

    '/update-profil',

    [ProfilController::class, 'update']

)->middleware('auth');

/*
|--------------------------------------------------------------------------
| KINERJA & ABSENSI
|--------------------------------------------------------------------------
*/

Route::get(

    '/kinerja-absensi',

    [KinerjaAbsensiController::class, 'index']

)->middleware('auth');

Route::post(

    '/upload-file',

    [KinerjaAbsensiController::class, 'upload']

)->middleware('auth');

Route::get(

    '/hapus-file/{id}',

    [KinerjaAbsensiController::class, 'destroy']

)->middleware('auth');

Route::get(

    '/validasi-upload/{id}',

    [KinerjaAbsensiController::class, 'validasi']

)->middleware('auth');

Route::get(

    '/batal-validasi/{id}',

    [KinerjaAbsensiController::class, 'batalValidasi']

)->middleware('auth');

/*
|--------------------------------------------------------------------------
| E-CUTI
|--------------------------------------------------------------------------
*/

Route::get(

    '/e-cuti',

    [CutiController::class, 'index']

)->middleware('auth');

Route::post(

    '/simpan-cuti',

    [CutiController::class, 'simpan']

)->middleware('auth');

Route::get(

    '/batal-cuti/{id}',

    [CutiController::class, 'destroy']

)->middleware('auth');

Route::get(

    '/data-cuti',

    [CutiController::class, 'dataCuti']

)->middleware('auth');

Route::get(

    '/validasi-cuti/{id}',

    [CutiController::class, 'validasi']

)->middleware('auth');

Route::get(

    '/batal-validasi-cuti/{id}',

    [CutiController::class, 'batalValidasi']

)->middleware('auth');

Route::get(

    '/cetak-cuti/{id}',

    [CutiController::class, 'cetak']

)->middleware('auth');


/*
|--------------------------------------------------------------------------
| PENDIDIKAN
|--------------------------------------------------------------------------
*/

Route::get(
    '/data-pendidikan',
    [PendidikanController::class, 'index']
)->middleware('auth');
Route::post(
    '/tambah-pendidikan',
    [PendidikanController::class, 'store']
)->middleware('auth');
Route::post(
    '/update-pendidikan/{id}',
    [PendidikanController::class, 'update']
)->middleware('auth');

Route::get(
    '/hapus-pendidikan/{id}',
    [PendidikanController::class, 'destroy']
)->middleware('auth');

/*
|--------------------------------------------------------------------------
| PANGKAT
|--------------------------------------------------------------------------
*/


Route::get(
    '/data-pangkat',
    [PangkatController::class,'index']
)->middleware('auth');

Route::post(
    '/tambah-pangkat',
    [PangkatController::class,'store']
)->middleware('auth');

Route::post(
    '/update-pangkat/{id}',
    [PangkatController::class,'update']
)->middleware('auth');

Route::get(
    '/hapus-pangkat/{id}',
    [PangkatController::class,'destroy']
)->middleware('auth');


/*
|--------------------------------------------------------------------------
| JABATAN
|--------------------------------------------------------------------------
*/

Route::get(

    '/data-jabatan',

    [JabatanController::class,'index']

)->middleware('auth');

Route::post(

    '/tambah-jabatan',

    [JabatanController::class,'store']

)->middleware('auth');

Route::post(

    '/update-jabatan/{id}',

    [JabatanController::class,'update']

)->middleware('auth');

Route::get(

    '/hapus-jabatan/{id}',

    [JabatanController::class,'destroy']

)->middleware('auth');

/*
|--------------------------------------------------------------------------
| DATA KARYAWAN
|--------------------------------------------------------------------------
*/

Route::get(
    '/data-karyawan',
    [DataKaryawanController::class,'index']
);

Route::get(
    '/detail-karyawan/{id}',
    [DataKaryawanController::class,'show']
);

/*
|--------------------------------------------------------------------------
| DETAIL KARYAWAN
|--------------------------------------------------------------------------
*/

Route::get(

    '/detail-karyawan/{id}',

    [DetailKaryawanController::class,'index']

)->middleware('auth');

Route::get(
    '/karyawan/pdf/{id}',
    [DetailKaryawanController::class,'cetakPdf']
);

/*
|--------------------------------------------------------------------------
| DAYA KGB
|--------------------------------------------------------------------------
*/

Route::get('/data-kgb',[DataKgbController::class,'index']);

Route::post('/tambah-kgb',[DataKgbController::class,'tambah']);

Route::post('/update-kgb/{id}',[DataKgbController::class,'update']);

Route::delete('/hapus-kgb/{id}', [DataKgbController::class,'destroy']);

/*
|--------------------------------------------------------------------------
| KENDALI KGB
|--------------------------------------------------------------------------
*/

Route::middleware(['auth','role:admin,admin_unit'])->group(function () {

    Route::get(
        '/kendali-kgb',
        [KendaliKgbController::class,'index']
    )->name('kendali-kgb');

    Route::get(
        '/kendali-kgb/{id}/surat',
        [KendaliKgbController::class,'generateSurat']
    )->name('kendali-kgb.surat');

    Route::get(
        '/kendali-kgb/{id}/sk',
        [KendaliKgbController::class,'generateSk']
    )->name('kendali-kgb.sk');
    
    Route::get(
    '/kendali-kgb/{id}/generate',
    [KendaliKgbController::class,'generate']
)->name('kendali-kgb.generate');

Route::get(
    '/kendali-kgb/{id}/batal-generate',
    [KendaliKgbController::class,'batalGenerate']
)->name('kendali-kgb.batal');

});

/*
|--------------------------------------------------------------------------
| VALIDASI DATA PENDIDIKAN - PANGKAT - JABATAN - KGB - SKP
|--------------------------------------------------------------------------
*/

Route::post(
'/validasi-pendidikan/{id}',
[ValidasiController::class,'pendidikan']
);

Route::post(
'/validasi-pangkat/{id}',
[ValidasiController::class,'pangkat']
);

Route::post(
'/validasi-jabatan/{id}',
[ValidasiController::class,'jabatan']
);

Route::post(
'/validasi-kgb/{id}',
[ValidasiController::class,'kgb']
)->middleware('auth');

Route::post(
    '/validasi-skp/{id}',
    [ValidasiController::class,'skp']
)->middleware('auth');

/*
|--------------------------------------------------------------------------
| REIMBURSEMENT
|--------------------------------------------------------------------------
*/

Route::get(

    '/reimbursement',

    [ReimbursementController::class,'index']

)->middleware('auth');

Route::post(

    '/simpan-reimbursement',

    [ReimbursementController::class,'simpan']

)->middleware('auth');

Route::get(

    '/hapus-reimbursement/{id}',

    [ReimbursementController::class,'destroy']

)->middleware('auth');


/*
|--------------------------------------------------------------------------
| DATA SKP
|--------------------------------------------------------------------------
*/

Route::get(
    '/data-skp',
    [SkpController::class,'index']
);

Route::post(
    '/tambah-skp',
    [SkpController::class,'store']
);

Route::post(
    '/update-skp/{id}',
    [SkpController::class,'update']
);

Route::get(
    '/hapus-skp/{id}',
    [SkpController::class,'destroy']
);


/*
|--------------------------------------------------------------------------
| MASTER JABATAN
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| DATA USER
|--------------------------------------------------------------------------
*/

Route::get(
    '/user',
    [UserController::class,'index']
)->name('user.index');

Route::post(
    '/tambah-user',
    [UserController::class,'store']
)->name('user.store');

Route::post(
    '/update-user/{id}',
    [UserController::class,'update']
)->name('user.update');

Route::get(
    '/hapus-user/{id}',
    [UserController::class,'destroy']
)->name('user.destroy');

Route::get(
    '/reset-password/{id}',
    [UserController::class,'resetPassword']
)->name('user.reset');

Route::post(
    '/import-user',
    [UserController::class,'import']
)->name('user.import');

Route::get(
    '/download-template-user',
    [UserController::class,'downloadTemplate']
)->name('user.template');

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';