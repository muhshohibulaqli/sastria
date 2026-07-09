<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0"
>

<title>
Dashboard Administrator
</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet"
>

<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
background:#edf2f7;
font-family:Arial, Helvetica, sans-serif;
overflow-x:hidden;
}

/* SIDEBAR */

.sidebar{

width:270px;
height:100vh;
position:fixed;
top:0;
left:0;
background:linear-gradient(180deg,#0f172a,#1e293b);
padding:30px 20px;
color:white;
overflow-y:auto;
transition:.3s;
z-index:9999;

}

.logo{

font-size:30px;
font-weight:bold;
margin-bottom:45px;

}

.menu-title{

color:#94a3b8;
font-size:13px;
margin-top:20px;
margin-bottom:10px;
text-transform:uppercase;
letter-spacing:1px;

}

.sidebar a{

display:block;
color:#cbd5e1;
text-decoration:none;
padding:15px 18px;
border-radius:18px;
margin-bottom:10px;
transition:0.3s;
font-size:15px;
font-weight:500;

}

.sidebar a:hover{

background:linear-gradient(90deg,#2563eb,#3b82f6);
color:white;
transform:translateX(5px);

}

.sidebar i{

margin-right:10px;

}


/* LOGOUT */

.logout-btn{

width:100%;
border:none;
padding:15px;
border-radius:18px;
margin-top:25px;
font-weight:bold;
font-size:15px;
background:linear-gradient(90deg,#dc2626,#ef4444);
color:white;
transition:.3s;

}

.logout-btn:hover{

transform:translateY(-2px);
box-shadow:0 10px 20px rgba(239,68,68,0.3);

}

.logout-btn i{

margin-right:8px;

}


/* CONTENT */

.content{

margin-left:270px;
padding:35px;
transition:.3s;

}

/* MOBILE BUTTON */

.menu-toggle{

display:none;
background:#0f172a;
color:white;
border:none;
width:45px;
height:45px;
border-radius:12px;
margin-bottom:20px;

}

/* TOPBAR */

.topbar{

display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:30px;
gap:15px;

}

.topbar h2{

font-size:38px;
font-weight:bold;

}

.user-box{

background:white;
padding:18px 25px;
border-radius:24px;
box-shadow:0 10px 30px rgba(0,0,0,0.08);
font-weight:bold;

}

/* CARD */

.stats-grid{

display:grid;
grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
gap:20px;
margin-bottom:25px;

}

.stats-card{

padding:28px;
border-radius:30px;
color:white;
position:relative;
overflow:hidden;
box-shadow:0 15px 35px rgba(0,0,0,0.12);

}

.stats-card::before{

content:'';
position:absolute;
right:-30px;
top:-30px;
width:120px;
height:120px;
background:rgba(255,255,255,0.15);
border-radius:50%;

}

.stats-card h3{

font-size:38px;
font-weight:bold;
position:relative;
z-index:2;

}

.stats-card small{

font-size:15px;
position:relative;
z-index:2;

}

.card-blue{

background:linear-gradient(135deg,#2563eb,#60a5fa);

}

.card-green{

background:linear-gradient(135deg,#16a34a,#4ade80);

}

.card-yellow{

background:linear-gradient(135deg,#f59e0b,#facc15);

}

.card-red{
background:linear-gradient(135deg,#dc2626,#ef4444);
}

/* MAIN CARD */

.main-card{

background:white;
border-radius:35px;
padding:35px;
box-shadow:
0 10px 40px rgba(0,0,0,0.08),
inset 0 1px 0 rgba(255,255,255,0.5);

}

.main-card h4{

font-weight:bold;
margin-bottom:15px;

}

/* FOOTER */

.footer{

margin-top:35px;
text-align:center;
color:#64748b;
font-size:14px;

}

.footer a{

text-decoration:none;
color:#0f172a;
font-weight:bold;

}

/* RESPONSIVE */

@media(max-width:991px){

.sidebar{

left:-100%;

}

.sidebar.active{

left:0;

}

.content{

margin-left:0;
padding:20px;

}

.menu-toggle{

display:block;

}

.topbar{

flex-direction:column;
align-items:flex-start;

}

.topbar h2{

font-size:28px;

}

.user-box{

width:100%;

}

.main-card{

padding:20px;
border-radius:25px;

}

.stats-card{

padding:22px;

}

.stats-card h3{

font-size:30px;

}

}

</style>

</head>
<body>

<!-- MOBILE BUTTON -->

<div class="p-3 pb-0">

<button
class="menu-toggle"
onclick="toggleSidebar()"
>

<i class="fa fa-bars"></i>

</button>

</div>

<!-- SIDEBAR -->

<div
class="sidebar"
id="sidebar"
>

    <div class="logo">
        SASTRIA
    </div>

    <!-- DASHBOARD -->

    <a href="/dashboard">
        <i class="fa-solid fa-gauge-high"></i>
        Dashboard
    </a>

    <!-- DATA MASTER -->

    <div class="menu-title">
        DATA MASTER
    </div>

    <a href="/data-karyawan">
        <i class="fa-solid fa-id-card"></i>
        Data Karyawan
    </a>

    <a href="/kendali-kgb">
        <i class="fa-solid fa-money-bill-trend-up"></i>
        Kendali KGB
    </a>

    <a href="/unit">
        <i class="fa-solid fa-building"></i>
        Data Unit
    </a>

    <a href="/user">
        <i class="fa-solid fa-users"></i>
        Data User
    </a>

    <!-- DATA PENGAJUAN -->

    <div class="menu-title">
        DATA PENGAJUAN
    </div>

    <a href="/kinerja-absensi">
        <i class="fa-solid fa-chart-line"></i>
        Kinerja &amp; Absensi
    </a>

    <a href="/e-cuti">
        <i class="fa-solid fa-calendar-check"></i>
        Izin Cuti
    </a>

    <a href="/reimbursement">
        <i class="fa-solid fa-wallet"></i>
        Reimbursement
    </a>

    <a href="/surat-tugas">
        <i class="fa-solid fa-file-signature"></i>
        Surat Tugas
    </a>

    <!-- DATA PROFIL -->

    <div class="menu-title">
        DATA PROFIL
    </div>

    <a href="/profil">
        <i class="fa-solid fa-user-gear"></i>
        Profil
    </a>

    <!-- LOGOUT -->

    <form
        method="POST"
        action="{{ route('logout') }}"
    >
        @csrf

        <button
            type="submit"
            class="logout-btn"
        >
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </button>
    </form>

</div>

<!-- ======================================================
                    CONTENT
======================================================= -->

<div class="content">

<!-- ======================================================
                    TOPBAR
======================================================= -->

<div class="topbar mb-4">

<div>

<h2 class="fw-bold mb-1">

<i class="fa-solid fa-users text-primary me-2"></i>

Data User

</h2>

<small class="text-muted">

Kelola seluruh akun pengguna Sistem SASTRIA

</small>

</div>

<div class="user-box">

<i class="fa-solid fa-user-shield me-2"></i>

{{ auth()->user()->name }}

</div>

</div>

<!-- ======================================================
                    STATISTIK
======================================================= -->

<div class="row g-3 mb-4">

<div class="col-lg-3 col-md-6">

<div class="stats-card card-blue">

<h3>{{ $totalUser }}</h3>

<small>Total User</small>

</div>

</div>

<div class="col-lg-3 col-md-6">

<div class="stats-card card-green">

<h3>{{ $totalAktif }}</h3>

<small>User Aktif</small>

</div>

</div>

<div class="col-lg-3 col-md-6">

<div
class="stats-card"
style="background:linear-gradient(135deg,#f59e0b,#fbbf24);">

<h3>{{ $totalAdmin+$totalAdminUnit }}</h3>

<small>Administrator</small>

</div>

</div>

<div class="col-lg-3 col-md-6">

<div
class="stats-card"
style="background:linear-gradient(135deg,#7c3aed,#8b5cf6);">

<h3>{{ $totalAsn }}</h3>

<small>ASN</small>

</div>

</div>

</div>

<!-- ======================================================
                    CARD
======================================================= -->

<div class="main-card">

<div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">

<form
action="{{ url('/user') }}"
method="GET"
class="d-flex"
style="max-width:450px;width:100%;">

<input
type="text"
name="search"
class="form-control"
placeholder="Cari Nama / NIP / Email"
value="{{ request('search') }}">

<button
class="btn btn-primary ms-2">

<i class="fa fa-search"></i>

</button>

</form>

<div class="d-flex gap-2 flex-wrap">

<button
class="btn btn-success"
data-bs-toggle="modal"
data-bs-target="#modalImportUser">

<i class="fa-solid fa-file-import me-2"></i>

Import CSV

</button>

<a
href="{{ url('/download-template-user') }}"
class="btn btn-outline-success">

<i class="fa-solid fa-download me-2"></i>

Template CSV

</a>

</div>

<button
class="btn btn-primary"
data-bs-toggle="modal"
data-bs-target="#modalTambahUser">

<i class="fa fa-plus me-2"></i>

Tambah User

</button>

</div>

</div>

<!-- ======================================================
                    TABLE
======================================================= -->

<div class="table-responsive">

<table class="table table-hover align-middle">

<thead class="table-dark">

<tr>

<th width="60">No</th>

<th>Nama</th>

<th>NIP</th>

<th>Email</th>

<th>Role</th>

<th>Unit</th>

<th>Jabatan</th>

<th>Status</th>

<th width="170" class="text-center">

Aksi

</th>

</tr>

</thead>

<tbody>

@forelse($users as $user)

<tr>

<td>

{{ $loop->iteration + ($users->firstItem()-1) }}

</td>

<td>

<strong class="text-primary">

{{ $user->name }}

</strong>

</td>

<td>

{{ $user->nip }}

</td>

<td>

{{ $user->email }}

</td>

<td>

@if($user->role=='admin')

<span class="badge bg-danger">

Administrator

</span>

@elseif($user->role=='admin_unit')

<span class="badge bg-warning text-dark">

Admin Unit

</span>

@else

<span class="badge bg-success">

ASN

</span>

@endif

</td>

<td>

{{ optional($user->unit)->nama_unit ?? '-' }}

</td>

<td>

{{ optional($user->jabatan)->nama_jabatan ?? '-' }}

</td>

<td>

@if($user->status_aktif=='Aktif')

<span class="badge bg-success">

Aktif

</span>

@else

<span class="badge bg-danger">

Non Aktif

</span>

@endif

</td>

<td class="text-center">

<button
class="btn btn-warning btn-sm"
data-bs-toggle="modal"
data-bs-target="#editUser{{ $user->id }}">

<i class="fa fa-edit"></i>

</button>

<a
href="{{ url('/hapus-user/'.$user->id) }}"
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin menghapus user ini?')">

<i class="fa fa-trash"></i>

</a>

<a
href="{{ url('/reset-password/'.$user->id) }}"
class="btn btn-info btn-sm text-white"
onclick="return confirm('Reset password user ini?')">

<i class="fa fa-key"></i>

</a>

</td>

</tr>

@empty

<tr>

<td colspan="9" class="text-center py-5">

<i class="fa-solid fa-users fa-4x text-secondary mb-3"></i>

<h5>

Belum ada data user

</h5>

<small class="text-muted">

Silakan tambahkan user terlebih dahulu.

</small>

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

<div class="mt-4 d-flex justify-content-center">

{{ $users->links() }}

</div>

</div>

<!-- ======================================================
                MODAL EDIT USER
====================================================== -->

@foreach($users as $user)

<div class="modal fade"
     id="editUser{{ $user->id }}"
     tabindex="-1">

<div class="modal-dialog modal-xl modal-dialog-scrollable">

<div class="modal-content border-0 shadow">

<form
action="{{ url('/update-user/'.$user->id) }}"
method="POST">

@csrf

<div class="modal-header text-white"
style="background:linear-gradient(135deg,#f59e0b,#fbbf24);">

<h5 class="modal-title">

<i class="fa fa-user-edit me-2"></i>

Edit Data User

</h5>

<button
type="button"
class="btn-close btn-close-white"
data-bs-dismiss="modal">
</button>

</div>

<div class="modal-body">

<div class="row g-4">

<div class="col-lg-6">

<label class="form-label fw-bold">

Nama Lengkap

</label>

<input
type="text"
name="name"
class="form-control"
value="{{ $user->name }}"
required>

</div>

<div class="col-lg-6">

<label class="form-label fw-bold">

NIP

</label>

<input
type="text"
name="nip"
class="form-control"
value="{{ $user->nip }}"
required>

</div>

<div class="col-lg-6">

<label class="form-label fw-bold">

Email

</label>

<input
type="email"
name="email"
class="form-control"
value="{{ $user->email }}"
required>

</div>

<div class="col-lg-6">

<label class="form-label fw-bold">

Password Baru

</label>

<input
type="password"
name="password"
class="form-control"
placeholder="Kosongkan jika tidak diganti">

<small class="text-muted">

Kosongkan apabila password tidak diubah.

</small>

</div>

<div class="col-lg-4">

<label class="form-label fw-bold">

Role

</label>

<select
name="role"
class="form-select"
required>

<option value="admin"
{{ $user->role=='admin' ? 'selected' : '' }}>

Administrator

</option>

<option value="admin_unit"
{{ $user->role=='admin_unit' ? 'selected' : '' }}>

Admin Unit

</option>

<option value="asn"
{{ $user->role=='asn' ? 'selected' : '' }}>

ASN

</option>

</select>

</div>

<div class="col-lg-4">

<label class="form-label fw-bold">

Status Pegawai

</label>

<select
name="status_pegawai"
class="form-select"
required>

<option value="PNS"
{{ $user->status_pegawai=='PNS' ? 'selected' : '' }}>

PNS

</option>

<option value="PPPK"
{{ $user->status_pegawai=='PPPK' ? 'selected' : '' }}>

PPPK

</option>

<option value="Honorer"
{{ $user->status_pegawai=='Honorer' ? 'selected' : '' }}>

Honorer

</option>

</select>

</div>

<div class="col-lg-4">

<label class="form-label fw-bold">

Status Akun

</label>

<select
name="status_aktif"
class="form-select"
required>

<option value="Aktif"
{{ $user->status_aktif=='Aktif' ? 'selected' : '' }}>

Aktif

</option>

<option value="Non Aktif"
{{ $user->status_aktif=='Non Aktif' ? 'selected' : '' }}>

Non Aktif

</option>

</select>

</div>

<div class="col-lg-6">

<label class="form-label fw-bold">

Unit Kerja

</label>

<select
name="unit_id"
class="form-select"
required>

@foreach($units as $unit)

<option
value="{{ $unit->id }}"
{{ $user->unit_id==$unit->id ? 'selected' : '' }}>

{{ $unit->nama_unit }}

</option>

@endforeach

</select>

</div>

<div class="col-lg-6">

<label class="form-label fw-bold">

Master Jabatan

</label>

<select
name="jabatan_id"
class="form-select">

<option value="">-- Pilih Jabatan --</option>

@foreach($masterJabatans as $jabatan)

<option
value="{{ $jabatan->id }}"
{{ $user->jabatan_id==$jabatan->id ? 'selected' : '' }}>

{{ $jabatan->nama_jabatan }}

</option>

@endforeach

</select>

</div>

<hr>

<div class="col-lg-6">

<label class="fw-bold text-secondary">

Tanggal Dibuat

</label>

<div class="form-control bg-light">

{{ optional($user->created_at)->format('d-m-Y H:i') }}

</div>

</div>

<div class="col-lg-6">

<label class="fw-bold text-secondary">

Terakhir Diupdate

</label>

<div class="form-control bg-light">

{{ optional($user->updated_at)->format('d-m-Y H:i') }}

</div>

</div>

</div>

</div>

<div class="modal-footer justify-content-between">

<a
href="{{ url('/reset-password/'.$user->id) }}"
class="btn btn-danger"
onclick="return confirm('Reset password menjadi 12345678 ?')">

<i class="fa fa-key me-2"></i>

Reset Password

</a>

<div>

<button
type="button"
class="btn btn-secondary"
data-bs-dismiss="modal">

Batal

</button>

<button
type="submit"
class="btn btn-warning text-white">

<i class="fa fa-save me-2"></i>

Update User

</button>

</div>

</div>

</form>

</div>

</div>

</div>

@endforeach

<!-- ======================================================
                MODAL TAMBAH USER
====================================================== -->

<div
class="modal fade"
id="modalTambahUser"
tabindex="-1"
aria-hidden="true">

<div class="modal-dialog modal-xl modal-dialog-scrollable">

<div class="modal-content border-0 shadow-lg">

<form
action="{{ url('/tambah-user') }}"
method="POST">

@csrf

<div
class="modal-header text-white"
style="background:linear-gradient(135deg,#0f172a,#2563eb);">

<h5 class="modal-title">

<i class="fa-solid fa-user-plus me-2"></i>

Tambah Data User

</h5>

<button
type="button"
class="btn-close btn-close-white"
data-bs-dismiss="modal">
</button>

</div>

<div class="modal-body">

<div class="row g-4">

<!-- NAMA -->

<div class="col-lg-6">

<label class="form-label fw-bold">

Nama Lengkap

</label>

<input
type="text"
name="name"
class="form-control"
required>

</div>

<!-- NIP -->

<div class="col-lg-6">

<label class="form-label fw-bold">

NIP

</label>

<input
type="text"
name="nip"
class="form-control"
required>

</div>

<!-- EMAIL -->

<div class="col-lg-6">

<label class="form-label fw-bold">

Email

</label>

<input
type="email"
name="email"
class="form-control"
required>

</div>

<!-- PASSWORD -->

<div class="col-lg-6">

<label class="form-label fw-bold">

Password Awal

</label>

<input
type="password"
name="password"
class="form-control"
value="12345678"
required>

<small class="text-muted">

Password default : <b>12345678</b>

</small>

</div>

<!-- ROLE -->

<div class="col-lg-4">

<label class="form-label fw-bold">

Role

</label>

<select
name="role"
class="form-select"
required>

<option value="admin">

Administrator

</option>

<option value="admin_unit">

Admin Unit

</option>

<option
value="asn"
selected>

ASN

</option>

</select>

</div>

<!-- STATUS PEGAWAI -->

<div class="col-lg-4">

<label class="form-label fw-bold">

Status Pegawai

</label>

<select
name="status_pegawai"
class="form-select"
required>

<option value="PNS">

PNS

</option>

<option value="PPPK">

PPPK

</option>

<option value="Honorer">

Honorer

</option>

</select>

</div>

<!-- STATUS AKTIF -->

<div class="col-lg-4">

<label class="form-label fw-bold">

Status Akun

</label>

<select
name="status_aktif"
class="form-select"
required>

<option value="Aktif">

Aktif

</option>

<option value="Non Aktif">

Non Aktif

</option>

</select>

</div>

<!-- UNIT -->

<div class="col-lg-6">

<label class="form-label fw-bold">

Unit Kerja

</label>

<select
name="unit_id"
class="form-select"
required>

<option value="">

Pilih Unit

</option>

@foreach($units as $unit)

<option value="{{ $unit->id }}">

{{ $unit->nama_unit }}

</option>

@endforeach

</select>

</div>

<!-- MASTER JABATAN -->

<div class="col-lg-6">

<label class="form-label fw-bold">

Master Jabatan

</label>

<select
name="jabatan_id"
class="form-select">

<option value="">

Pilih Master Jabatan

</option>

@foreach($masterJabatans as $jabatan)

<option value="{{ $jabatan->id }}">

{{ $jabatan->nama_jabatan }}

</option>

@endforeach

</select>

</div>

</div>

</div>

<div class="modal-footer">

<button
type="button"
class="btn btn-secondary"
data-bs-dismiss="modal">

<i class="fa fa-times me-2"></i>

Batal

</button>

<button
type="submit"
class="btn btn-primary">

<i class="fa fa-save me-2"></i>

Simpan User

</button>

</div>

</form>

</div>

</div>

</div>

<!-- ======================================================
                MODAL IMPORT CSV
====================================================== -->

<div
class="modal fade"
id="modalImportUser"
tabindex="-1"
aria-hidden="true">

<div class="modal-dialog modal-lg">

<div class="modal-content border-0 shadow-lg">

<form
action="{{ url('/import-user') }}"
method="POST"
enctype="multipart/form-data">

@csrf

<div
class="modal-header text-white"
style="background:linear-gradient(135deg,#059669,#10b981);">

<h5 class="modal-title">

<i class="fa-solid fa-file-csv me-2"></i>

Import Data User

</h5>

<button
type="button"
class="btn-close btn-close-white"
data-bs-dismiss="modal">
</button>

</div>

<div class="modal-body">

<div class="alert alert-info">

<h6 class="fw-bold mb-2">

<i class="fa-solid fa-circle-info me-2"></i>

Petunjuk Import

</h6>

<ul class="mb-0">

<li>File harus berformat <b>CSV</b>.</li>

<li>Baris pertama adalah <b>header</b>.</li>

<li>Password otomatis menjadi <b>12345678</b>.</li>

<li>Nama Unit harus sama persis dengan data Master Unit.</li>

<li>Nama Jabatan harus sama persis dengan data Master Jabatan.</li>

</ul>

</div>

<div class="mb-3">

<label class="form-label fw-bold">

Pilih File CSV

</label>

<input
type="file"
name="file"
class="form-control"
accept=".csv"
required>

</div>

<div class="d-grid">

<a
href="{{ url('/download-template-user') }}"
class="btn btn-outline-success">

<i class="fa-solid fa-download me-2"></i>

Download Template CSV

</a>

</div>

</div>

<div class="modal-footer">

<button
type="button"
class="btn btn-secondary"
data-bs-dismiss="modal">

<i class="fa fa-times me-2"></i>

Batal

</button>

<button
type="submit"
class="btn btn-success">

<i class="fa-solid fa-file-import me-2"></i>

Import Data

</button>

</div>

</form>

</div>

</div>

</div>


<style>

/* =====================================================
   RESET
===================================================== */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{

    background:#edf2f7;

    font-family:Arial,Helvetica,sans-serif;

    overflow-x:hidden;

}

/* =====================================================
   SIDEBAR
===================================================== */

.sidebar{

    position:fixed;

    left:0;

    top:0;

    width:270px;

    height:100vh;

    overflow-y:auto;

    background:linear-gradient(180deg,#0f172a,#1e293b);

    color:#fff;

    z-index:1040;

}

/* =====================================================
   CONTENT
===================================================== */

.content{

    margin-left:270px;

    width:calc(100% - 270px);

    min-height:100vh;

    padding:30px;

    transition:.3s;

}

/* =====================================================
   TOPBAR
===================================================== */

.topbar{

    display:flex;

    justify-content:space-between;

    align-items:center;

    gap:15px;

    margin-bottom:30px;

    flex-wrap:wrap;

}

.user-box{

    background:#fff;

    padding:14px 22px;

    border-radius:15px;

    box-shadow:0 8px 20px rgba(0,0,0,.08);

}

/* =====================================================
   CARD
===================================================== */

.main-card{

    background:#fff;

    border-radius:22px;

    padding:25px;

    box-shadow:0 10px 35px rgba(0,0,0,.08);

}

.stats-card{

    border-radius:20px;

    padding:24px;

    color:#fff;

    transition:.3s;

}

.stats-card:hover{

    transform:translateY(-4px);

}

.card-blue{

    background:linear-gradient(135deg,#2563eb,#60a5fa);

}

.card-green{

    background:linear-gradient(135deg,#16a34a,#4ade80);

}

/* =====================================================
   TABLE
===================================================== */

.table-responsive{

    overflow-x:auto;

    border-radius:18px;

}

.table{

    margin-bottom:0;

}

.table thead th{

    white-space:nowrap;

    border:none;

    padding:16px;

}

.table tbody td{

    padding:15px;

    vertical-align:middle;

}

.table tbody tr{

    transition:.25s;

}

.table tbody tr:hover{

    background:#f8fafc;

}

/* =====================================================
   FORM
===================================================== */

.form-control{

    border-radius:12px;

    min-height:48px;

}

textarea.form-control{

    min-height:120px;

}

/* =====================================================
   BUTTON
===================================================== */

.btn{

    border-radius:12px;

    font-weight:600;

}

/* =====================================================
   MODAL (FIX SIDEBAR)
===================================================== */

.modal{

    z-index:2000 !important;

}

.modal-backdrop{

    z-index:1990 !important;

}

/* ===== Modal khusus Data Unit ===== */

/* =========================
   MODAL
========================= */

.modal-dialog.modal-xl{

    max-width:calc(100vw - 360px);

    margin-left:300px;

    margin-right:25px;

    margin-top:40px;

    height:calc(100vh - 80px);

}

.modal-content{

    height:100%;

    border-radius:22px;

    overflow:hidden;

}

.modal-body{

    overflow-y:auto;

    max-height:calc(100vh - 190px);

    padding:28px;

}

.modal-footer{

    position:sticky;

    bottom:0;

    background:#fff;

    border-top:1px solid #dee2e6;

    z-index:10;

    padding:15px 25px;

}

/* =====================================================
   PAGINATION
===================================================== */

.pagination{

    justify-content:center;

}

/* =====================================================
   MOBILE
===================================================== */

@media(max-width:991px){

    .sidebar{

        left:-270px;

    }

    .sidebar.active{

        left:0;

    }

    .content{

        margin-left:0;

        width:100%;

        padding:15px;

    }

    .menu-toggle{

        display:block;

    }

    .modal-dialog{

        width:98%;

        margin:10px auto;

    }

}

@media(max-width:768px){

    .topbar{

        flex-direction:column;

        align-items:flex-start;

    }

    .user-box{

        width:100%;

    }

    .stats-card{

        padding:18px;

    }

    .table{

        min-width:900px;

    }

}

@media(max-width:576px){

    .main-card{

        padding:15px;

    }

    .btn{

        width:100%;

    }

    .d-flex.gap-2{

        width:100%;

    }

    .d-flex.gap-2 .btn{

        flex:1;

    }

}

</style>

<!-- FOOTER -->

<div class="footer">

© {{ date('Y') }}

<a
href="https://www.muhshohibulaqli.my.id/"
target="_blank"
>

MUH SHOHIBUL AQLI

</a>

All Rights Reserved.

</div>

</div>

<script>

function toggleSidebar(){

document
.getElementById('sidebar')
.classList
.toggle('active');

}

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

