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

<!-- CONTENT -->
<!-- ===================== CONTENT ===================== -->

<div class="content">

@if(session('success'))

<div class="alert alert-success alert-dismissible fade show rounded-4">

    <i class="fa-solid fa-circle-check me-2"></i>

    {{ session('success') }}

    <button
        type="button"
        class="btn-close"
        data-bs-dismiss="alert">
    </button>

</div>

@endif

@if(session('error'))

<div class="alert alert-danger alert-dismissible fade show rounded-4">

    <i class="fa-solid fa-circle-xmark me-2"></i>

    {{ session('error') }}

    <button
        type="button"
        class="btn-close"
        data-bs-dismiss="alert">
    </button>

</div>

@endif


<!-- ===================== HEADER ===================== -->

<div class="main-card mb-4">

    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

        <div>

            <h4 class="fw-bold mb-1">

                Master Jabatan

            </h4>

            <small class="text-muted">

                Kelola Data Jabatan

            </small>

        </div>

        <div class="d-flex align-items-center flex-wrap gap-2">

            <form
                action="/master-jabatan"
                method="GET"
                class="d-flex flex-wrap gap-2"
            >

                <input
                    type="text"
                    name="search"
                    class="form-control"
                    style="width:260px;height:46px;border-radius:14px;"
                    placeholder="Cari Jabatan..."
                    value="{{ request('search') }}"
                >

                <button
                    class="btn btn-primary"
                    style="width:46px;height:46px;border-radius:14px;"
                >

                    <i class="fa fa-search"></i>

                </button>

                @if(request('search'))

                <a
                    href="/master-jabatan"
                    class="btn btn-secondary"
                    style="height:46px;border-radius:14px;"
                >

                    Reset

                </a>

                @endif

            </form>

            <button
                class="btn btn-primary px-4"
                style="height:46px;border-radius:14px;font-weight:600;"
                data-bs-toggle="modal"
                data-bs-target="#modalTambahJabatan"
            >

                <i class="fa fa-plus me-2"></i>

                Tambah Jabatan

            </button>

        </div>

    </div>

</div>



<!-- ===================== DATA ===================== -->

<div class="card shadow border-0 rounded-4">

<div
class="card-header text-white"
style="background:linear-gradient(135deg,#0f172a,#1e3a8a);"
>

<div class="d-flex justify-content-between align-items-center">

<div>

<h5 class="mb-1">

<i class="fa-solid fa-briefcase me-2"></i>

Data Jabatan

</h5>

<small>

Master Jabatan ASN

</small>

</div>

<span class="badge bg-light text-dark rounded-pill px-3 py-2">

Total Data :

{{ $jabatans->total() }}

</span>

</div>

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-hover align-middle">

<thead>

<tr>

<th width="70">

No

</th>

<th>

Nama Jabatan

</th>

<th width="170" class="text-center">

Aksi

</th>

</tr>

</thead>

<tbody>
    
    @forelse($jabatans as $jabatan)

@php

$dipakai = App\Models\User::where(
    'jabatan_id',
    $jabatan->id
)->count();

@endphp

<tr>

    <td class="text-center">

        {{ $jabatans->firstItem() + $loop->index }}

    </td>

    <td>

        <strong>

            {{ $jabatan->nama_jabatan }}

        </strong>

    </td>

    <td class="text-center">

        <div class="d-flex justify-content-center gap-2">

            <!-- EDIT -->

            <button
                class="btn btn-warning btn-sm rounded-pill"
                data-bs-toggle="modal"
                data-bs-target="#editJabatan{{ $jabatan->id }}"
            >

                <i class="fa fa-pen"></i>

            </button>

            <!-- HAPUS -->

            @if($dipakai==0)

            <a
                href="/hapus-master-jabatan/{{ $jabatan->id }}"
                class="btn btn-danger btn-sm rounded-pill"
                onclick="return confirm('Hapus jabatan ini?')"
            >

                <i class="fa fa-trash"></i>

            </a>

            @else

            <button
                class="btn btn-secondary btn-sm rounded-pill"
                disabled
                title="Masih digunakan oleh {{ $dipakai }} user"
            >

                <i class="fa fa-lock"></i>

            </button>

            @endif

        </div>

    </td>

</tr>

@empty

<tr>

    <td
        colspan="3"
        class="text-center py-5"
    >

        <i class="fa-solid fa-folder-open fa-3x text-secondary mb-3"></i>

        <br>

        Belum ada Data Jabatan.

    </td>

</tr>

@endforelse

</tbody>

</table>

</div>

@if($jabatans->hasPages())

<hr>

<div class="d-flex justify-content-between align-items-center flex-wrap">

    <small class="text-muted">

        Menampilkan

        {{ $jabatans->firstItem() }}

        -

        {{ $jabatans->lastItem() }}

        dari

        {{ $jabatans->total() }}

        data

    </small>

    {{ $jabatans->links() }}

</div>

@endif

</div>

</div>

<style>

/* =====================================================
   CARD
===================================================== */

.main-card{

    background:#fff;

    border-radius:25px;

    padding:25px;

    box-shadow:0 15px 35px rgba(15,23,42,.08);

}

/* =====================================================
   TABLE
===================================================== */

.table-responsive{

    background:#fff;

    border-radius:25px;

    overflow:hidden;

    box-shadow:0 15px 35px rgba(15,23,42,.08);

}

.table{

    margin-bottom:0;

}

.table thead th{

    background:linear-gradient(
        135deg,
        #0f172a,
        #1e293b
    );

    color:#fff;

    border:none;

    padding:18px;

    font-weight:700;

}

.table td{

    padding:18px;

    vertical-align:middle;

}

.table tbody tr{

    transition:.25s;

}

.table tbody tr:hover{

    background:#f8fafc;

    transform:scale(1.01);

}

.table tbody tr:nth-child(even){

    background:#fafafa;

}

/* =====================================================
   MODAL
===================================================== */

.modal-content{

    border:none;

    border-radius:25px;

}

.modal-body{

    max-height:70vh;

    overflow-y:auto;

    padding:30px;

}

.form-control{

    border-radius:14px;

}

.modal-jabatan{

    max-width:900px;

}

@media(min-width:992px){

.modal-jabatan{

margin-left:320px;

margin-right:30px;

}

}

@media(max-width:991px){

.modal-jabatan{

max-width:95%;

margin:auto;

}

}

</style>

<!-- ===================== MODAL TAMBAH ===================== -->

<div
class="modal fade"
id="modalTambahJabatan"
tabindex="-1"
>

<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable modal-jabatan">

<div class="modal-content">

<form
action="{{ url('/tambah-master-jabatan') }}"
method="POST"
id="formTambahJabatan"
>

@csrf

<div
class="modal-header text-white"
style="background:linear-gradient(135deg,#0f172a,#1e3a8a);"
>

<h5>

<i class="fa fa-plus me-2"></i>

Tambah Jabatan

</h5>

<button
type="button"
class="btn-close btn-close-white"
data-bs-dismiss="modal"
></button>

</div>

<div class="modal-body">

<div class="row">

<div class="col-md-12">

<label>

Nama Jabatan

</label>

<input
type="text"
name="nama_jabatan"
class="form-control"
required
>

</div>

</div>

</div>

<div class="modal-footer">

<button
type="button"
class="btn btn-secondary"
data-bs-dismiss="modal"
>

Batal

</button>

<button
type="submit"
class="btn btn-primary rounded-pill px-4"
>

<i class="fa fa-save me-2"></i>

Simpan

</button>

</div>

</form>

</div>

</div>

</div>

<!-- ===================== MODAL EDIT ===================== -->

@foreach($jabatans as $jabatan)

<div
class="modal fade"
id="editJabatan{{ $jabatan->id }}"
tabindex="-1"
>

<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable modal-jabatan">

<div class="modal-content">

<form
action="/update-master-jabatan/{{ $jabatan->id }}"
method="POST"
>

@csrf

<div
class="modal-header text-white"
style="background:linear-gradient(135deg,#0f172a,#1e3a8a);"
>

<h5 class="modal-title">

<i class="fa fa-pen me-2"></i>

Edit Jabatan

</h5>

<button
type="button"
class="btn-close btn-close-white"
data-bs-dismiss="modal"
></button>

</div>

<div class="modal-body">

<div class="row">

<div class="col-md-12 mb-3">

<label>

Nama Jabatan

</label>

<input
type="text"
name="nama_jabatan"
class="form-control"
value="{{ $jabatan->nama_jabatan }}"
required
>

</div>

</div>

</div>

<div class="modal-footer">

<button
type="button"
class="btn btn-secondary rounded-pill px-4"
data-bs-dismiss="modal"
>

<i class="fa fa-times me-2"></i>

Tutup

</button>

<button
type="submit"
class="btn btn-primary rounded-pill px-4"
>

<i class="fa fa-save me-2"></i>

Simpan Perubahan

</button>

</div>

</form>

</div>

</div>

</div>

@endforeach

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

