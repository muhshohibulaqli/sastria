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

<!-- =========================
        CONTENT
========================= -->

<div class="content">
    
    <!-- =========================
        TOPBAR
========================= -->

<div class="topbar mb-4">

    <div>

        <h2 class="fw-bold mb-1">

            <i class="fa-solid fa-building text-primary me-2"></i>

            Data Unit

        </h2>

        <small class="text-muted">

            Kelola Data Unit Kerja SASTRIA

        </small>

    </div>

    <div class="user-box">

        <i class="fa-solid fa-user-shield me-2"></i>

        {{ auth()->user()->name }}

    </div>

</div>

<!-- =========================
        STATISTIK
========================= -->

<div class="row g-3 mb-4">

    <div class="col-lg-3 col-md-6">

        <div class="stats-card card-blue">

            <h3>

                {{ $units->total() }}

            </h3>

            <small>Total Unit</small>

        </div>

    </div>

    <div class="col-lg-3 col-md-6">

        <div class="stats-card card-green">

            <h3>

                {{ $units->count() }}

            </h3>

            <small>Data Ditampilkan</small>

        </div>

    </div>

    <div class="col-lg-3 col-md-6">

        <div class="stats-card"
             style="background:linear-gradient(135deg,#7c3aed,#8b5cf6);">

            <h3>

                {{ date('Y') }}

            </h3>

            <small>Tahun Sistem</small>

        </div>

    </div>

    <div class="col-lg-3 col-md-6">

        <div class="stats-card"
             style="background:linear-gradient(135deg,#ea580c,#fb923c);">

            <h3>

                Administrator

            </h3>

            <small>Hak Akses</small>

        </div>

    </div>

</div>

<!-- =========================
        CARD
========================= -->

<div class="main-card">

    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">

        <form
            action="{{ url('/unit') }}"
            method="GET"
            class="d-flex"
            style="max-width:450px;width:100%;">

            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                class="form-control"
                placeholder="Cari Nama Unit...">

            <button
                class="btn btn-primary ms-2">

                <i class="fa fa-search"></i>

            </button>

        </form>

        <div class="d-flex gap-2 flex-wrap">

            <button
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#modalTambahUnit">

                <i class="fa fa-plus me-2"></i>

                Tambah Unit

            </button>

        </div>

    </div>

    <!-- =========================
            TABLE
    ========================= -->

    <div class="table-responsive">

        <table class="table table-hover align-middle">

            <thead class="table-dark">

                <tr>

                    <th width="60">No</th>

                    <th>Nama Unit</th>

                    <th>Nama Lengkap Unit</th>

                    <th>Wilayah</th>

                    <th>Telepon</th>

                    <th>Email</th>

                    <th width="150" class="text-center">

                        Aksi

                    </th>

                </tr>

            </thead>

            <tbody>
                
                @forelse($units as $unit)

<tr>

    <td>

        {{ $loop->iteration + ($units->firstItem() - 1) }}

    </td>

    <td>

        <strong class="text-primary">

            <i class="fa-solid fa-building me-2"></i>

            {{ $unit->nama_unit }}

        </strong>

    </td>

    <td>

        {{ $unit->nama_lengkap_unit }}

    </td>

    <td>

        <span class="badge bg-primary">

            {{ $unit->wilayah }}

        </span>

    </td>

    <td>

        @if($unit->telepon)

            <i class="fa-solid fa-phone me-1 text-success"></i>

            {{ $unit->telepon }}

        @else

            -

        @endif

    </td>

    <td>

        @if($unit->email)

            <i class="fa-solid fa-envelope me-1 text-danger"></i>

            {{ $unit->email }}

        @else

            -

        @endif

    </td>

    <td class="text-center">

        <button
            class="btn btn-warning btn-sm"
            data-bs-toggle="modal"
            data-bs-target="#editUnit{{ $unit->id }}">

            <i class="fa fa-edit"></i>

        </button>

        <a
            href="{{ url('/hapus-unit/'.$unit->id) }}"
            class="btn btn-danger btn-sm"
            onclick="return confirm('Yakin ingin menghapus data unit ini?')">

            <i class="fa fa-trash"></i>

        </a>

    </td>

</tr>

@empty

<tr>

    <td colspan="7" class="text-center py-5">

        <i class="fa-solid fa-building fa-4x text-secondary mb-3"></i>

        <h5 class="mt-3">

            Data Unit Belum Tersedia

        </h5>

        <small class="text-muted">

            Silakan tambahkan data unit terlebih dahulu.

        </small>

    </td>

</tr>

@endforelse

</tbody>

</table>

</div>

<div class="mt-4 d-flex justify-content-center">

    {{ $units->links() }}

</div>

</div>

<!-- =========================
        MODAL TAMBAH
========================= -->

<div class="modal fade" id="modalTambahUnit" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-xl modal-dialog-scrollable">

        <div class="modal-content border-0 shadow-lg">

            <form action="{{ url('/tambah-unit') }}" method="POST">

                @csrf

                <div class="modal-header text-white"
                    style="background:linear-gradient(135deg,#0f172a,#2563eb);">

                    <h5 class="modal-title">

                        <i class="fa-solid fa-plus-circle me-2"></i>

                        Tambah Data Unit

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

                                Nama Singkat Unit

                            </label>

                            <input
                                type="text"
                                name="nama_unit"
                                class="form-control"
                                placeholder="Contoh : Kanwil Haji Bali"
                                required>

                        </div>

                        <div class="col-lg-6">

                            <label class="form-label fw-bold">

                                Nama Lengkap Unit

                            </label>

                            <input
                                type="text"
                                name="nama_lengkap_unit"
                                class="form-control"
                                placeholder="Masukkan Nama Lengkap Unit"
                                required>

                        </div>

                        <div class="col-lg-6">

                            <label class="form-label fw-bold">

                                Wilayah

                            </label>

                            <input
                                type="text"
                                name="wilayah"
                                class="form-control"
                                placeholder="Provinsi / Kabupaten / Kota"
                                required>

                        </div>

                        <div class="col-lg-6">

                            <label class="form-label fw-bold">

                                Nomor Telepon

                            </label>

                            <input
                                type="text"
                                name="telepon"
                                class="form-control"
                                placeholder="08xxxxxxxxxx">

                        </div>

                        <div class="col-lg-12">

                            <label class="form-label fw-bold">

                                Email

                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                placeholder="unit@email.go.id">

                        </div>

                        <div class="col-12">

                            <label class="form-label fw-bold">

                                Alamat Lengkap

                            </label>

                            <textarea
                                name="alamat"
                                rows="4"
                                class="form-control"
                                placeholder="Masukkan alamat lengkap unit"></textarea>

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

                        Simpan Data

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<!-- =========================
        MODAL EDIT
========================= -->

@foreach($units as $unit)

<div
class="modal fade"
id="editUnit{{ $unit->id }}"
tabindex="-1"
aria-hidden="true">

    <div class="modal-dialog modal-xl modal-dialog-scrollable">

        <div class="modal-content border-0 shadow-lg">

            <form
                action="{{ url('/update-unit/'.$unit->id) }}"
                method="POST">

                @csrf

                <div
                    class="modal-header text-white"
                    style="background:linear-gradient(135deg,#f59e0b,#fbbf24);">

                    <h5 class="modal-title">

                        <i class="fa-solid fa-pen-to-square me-2"></i>

                        Edit Data Unit

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

                                Nama Singkat Unit

                            </label>

                            <input
                                type="text"
                                name="nama_unit"
                                class="form-control"
                                value="{{ $unit->nama_unit }}"
                                required>

                        </div>

                        <div class="col-lg-6">

                            <label class="form-label fw-bold">

                                Nama Lengkap Unit

                            </label>

                            <input
                                type="text"
                                name="nama_lengkap_unit"
                                class="form-control"
                                value="{{ $unit->nama_lengkap_unit }}"
                                required>

                        </div>

                        <div class="col-lg-6">

                            <label class="form-label fw-bold">

                                Wilayah

                            </label>

                            <input
                                type="text"
                                name="wilayah"
                                class="form-control"
                                value="{{ $unit->wilayah }}"
                                required>

                        </div>

                        <div class="col-lg-6">

                            <label class="form-label fw-bold">

                                Nomor Telepon

                            </label>

                            <input
                                type="text"
                                name="telepon"
                                class="form-control"
                                value="{{ $unit->telepon }}">

                        </div>

                        <div class="col-lg-12">

                            <label class="form-label fw-bold">

                                Email

                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                value="{{ $unit->email }}">

                        </div>

                        <div class="col-12">

                            <label class="form-label fw-bold">

                                Alamat

                            </label>

                            <textarea
                                name="alamat"
                                rows="4"
                                class="form-control">{{ $unit->alamat }}</textarea>

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
                        class="btn btn-warning text-white">

                        <i class="fa fa-save me-2"></i>

                        Update Data

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endforeach

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

