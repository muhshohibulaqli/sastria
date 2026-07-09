<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0"
>

<title>
Dashboard ASN
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

<a href="/dashboard">

<i class="fa-solid fa-gauge-high"></i>

Dashboard

</a>

<div class="menu-title">

Data Master

</div>

<a href="/data-pribadi">

<i class="fa-solid fa-id-card"></i>

Data Pribadi

</a>

<a href="/data-pendidikan">

<i class="fa-solid fa-graduation-cap"></i>

Data Pendidikan

</a>

<a href="/data-pangkat">

<i class="fa-solid fa-medal"></i>

Data Pangkat

</a>

<a href="/data-jabatan">

<i class="fa-solid fa-briefcase"></i>

Data Jabatan

</a>

<a href="/data-kgb">

<i class="fa-solid fa-money-bill-trend-up"></i>

Data KGB

</a>

<a href="/data-skp">

<i class="fa-solid fa-file-signature"></i>

Data SKP BKN

</a>

<div class="menu-title">

Data Pengajuan

</div>

<a href="/kinerja-absensi">

<i class="fa-solid fa-chart-line"></i>

Kinerja & Absensi

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

<div class="menu-title">

Data Profil

</div>

<a href="/profil">

<i class="fa-solid fa-user-gear"></i>

Profil

</a>

<form
method="POST"
action="{{ route('logout') }}"
>

@csrf


<button class="logout-btn">

<i class="fa fa-right-from-bracket"></i>

Logout

</button>


</form>

</div>

<!-- CONTENT -->

<div class="content">

<!-- TOPBAR -->

<div class="topbar">

<div>

<h2>

Dashboard ASN

</h2>

<small class="text-muted">

Sistem Informasi ASN

</small>

</div>

<div class="user-box">

{{ Auth::user()->name }}

</div>

</div>

<!-- Data Jabatan -->

<div class="main-card">

    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">

        <div>

            <h4 class="mb-1">
                Data Jabatan
            </h4>

            <small class="text-muted">
                Kelola riwayat jabatan ASN
            </small>

        </div>

        <button
            type="button"
            class="btn btn-primary rounded-pill px-4"
            data-bs-toggle="modal"
            data-bs-target="#modalTambahJabatan"
        >
            <i class="fa fa-plus me-2"></i>
            Tambah Jabatan
        </button>

    </div>

    @if(session('success'))

        <div class="alert alert-success rounded-4">

            {{ session('success') }}

        </div>

    @endif

    @if(session('error'))

        <div class="alert alert-danger rounded-4">

            {{ session('error') }}

        </div>

    @endif

    <div class="table-responsive">

        <table class="table align-middle table-hover">

            <thead>

                <tr>

                    <th>No</th>

                    <th>TMT Jabatan</th>

                    <th>Nama Jabatan</th>

                    <th>Tgl. SK</th>
                    
                    <th>No. SK</th>

                    <th>Status</th>

                    <th width="180">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody>

            @forelse($jabatans as $item)

                <tr>

                    <td>

                        {{ $loop->iteration }}

                    </td>

                   <td>
                    {{ $item->tmt_jabatan }}
                    </td>
                    
                    <td>
                    <strong>
                    {{ $item->nama_jabatan }}
                    </strong>
                    </td>
                    
                    <td>
                    {{ $item->tgl_sk }}
                    </td>
                    
                    <td>
                    {{ $item->no_sk }}
                    </td>
                    
                    <td>
                    
                    @if($item->validasi_admin_unit == 'Disetujui')
                    
                    <span class="badge bg-success rounded-pill">
                    Disetujui
                    </span>
                    
                    @else
                    
                    <span class="badge bg-warning text-dark rounded-pill">
                    Belum Validasi
                    </span>
                    
                    @endif
                    
                    </td>
                    </td>

                    <td>

                        <div class="d-flex gap-1">

                            <button
                                class="btn btn-info btn-sm rounded-pill"
                                data-bs-toggle="modal"
                                data-bs-target="#view{{ $item->id }}"
                            >
                                <i class="fa fa-eye"></i>
                            </button>

                            <button
                                class="btn btn-warning btn-sm rounded-pill"
                                data-bs-toggle="modal"
                                data-bs-target="#edit{{ $item->id }}"
                            >
                                <i class="fa fa-pen"></i>
                            </button>

                            <a
                                href="/hapus-jabatan/{{ $item->id }}"
                                class="btn btn-danger btn-sm rounded-pill"
                                onclick="return confirm('Hapus data ini ?')"
                            >
                                <i class="fa fa-trash"></i>
                            </a>

                        </div>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="7" class="text-center py-4">

                        Belum ada Data Jabatan

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

<style>

/* =====================================================
   TABEL DATA
===================================================== */

.table-responsive{

    background:white;

    border-radius:25px;

    overflow:hidden;

    box-shadow:
    0 20px 40px rgba(15,23,42,.08);

}

.table{

    margin-bottom:0;

    border-collapse:separate;

    border-spacing:0;

}

.table thead th{

    background:linear-gradient(
    135deg,
    #0f172a,
    #1e293b
    );

    color:white;

    font-weight:700;

    font-size:14px;

    letter-spacing:.5px;

    padding:18px;

    border:none;

}

.table tbody tr{

    transition:.3s;

}

.table tbody tr:hover{

    background:#f8fafc;

    transform:scale(1.01);

}

.table td{

    padding:18px;

    vertical-align:middle;

    border-color:#e2e8f0;

}

.table tbody tr:nth-child(even){

    background:#fafafa;

}


/* =====================================================
   FORM PENDIDIKAN
===================================================== */

.table th{

    font-size:14px;

    font-weight:700;

    color:#334155;

    border:none;

}

.table td{

    border-color:#e2e8f0;

}

.btn{

    font-weight:600;

}

.modal-content{
    border-radius:25px;
}

.modal-body{
    max-height:70vh;
    overflow-y:auto;
}

.form-control,
.form-select{
    border-radius:12px;
}

@media(max-width:768px){

    .modal-dialog{
        margin:10px;
    }

    .modal-body{
        max-height:65vh;
    }

}

/* =====================================================
   DETAIL PENDIDIKAN
===================================================== */

.detail-box{

    background:#ffffff;

    border:1px solid #e2e8f0;

    border-radius:18px;

    padding:15px;

    height:100%;

    box-shadow:
    0 10px 25px rgba(15,23,42,.08);

    transition:.3s;

}

.detail-box:hover{

    transform:translateY(-3px);

    box-shadow:
    0 15px 35px rgba(37,99,235,.15);

}

.detail-box label{

    display:block;

    font-size:12px;

    font-weight:700;

    color:#64748b;

    text-transform:uppercase;

    margin-bottom:8px;

    letter-spacing:.5px;

}

/* ==========================================
   MODAL RESPONSIVE SASTRIA
========================================== */

.modal-pendidikan{

    max-width:1100px;

}

@media(min-width:992px){

    .modal-pendidikan{

        margin-left:320px;

        margin-right:30px;

    }

}

@media(max-width:991px){

    .modal-pendidikan{

        max-width:95%;

        margin:auto;

    }

}

.detail-value{

    font-size:15px;

    font-weight:600;

    color:#0f172a;

}

</style>

<!-- =====================================================
     MODAL TAMBAH JABATAN
===================================================== -->

<div
class="modal fade"
id="modalTambahJabatan"
tabindex="-1"
>

<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable modal-pendidikan">

<div class="modal-content rounded-4 border-0">

<form
method="POST"
action="/tambah-jabatan"
enctype="multipart/form-data"
>

@csrf

<div class="modal-header bg-primary text-white">

<h5 class="modal-title">

<i class="fa fa-briefcase me-2"></i>

Tambah Data Jabatan

</h5>

<button
type="button"
class="btn-close btn-close-white"
data-bs-dismiss="modal"
></button>

</div>

<div class="modal-body">

<div class="row">

<!-- Nama Jabatan -->

<div class="col-md-6 mb-3">

<label>Nama Jabatan</label>

<input
type="text"
name="nama_jabatan"
class="form-control"
required
>

</div>

<!-- TMT Jabatan -->

<div class="col-md-6 mb-3">

<label>TMT Jabatan</label>

<input
type="date"
name="tmt_jabatan"
class="form-control"
required
>

</div>

<!-- Nomor SK -->

<div class="col-md-6 mb-3">

<label>Nomor SK</label>

<input
type="text"
name="no_sk"
class="form-control"
required
>

</div>

<!-- Tanggal SK -->

<div class="col-md-6 mb-3">

<label>Tanggal SK</label>

<input
type="date"
name="tgl_sk"
class="form-control"
required
>

</div>

<!-- Jenis Jabatan -->

<div class="col-md-6 mb-3">

<label>Jenis Jabatan</label>

<select
name="jenis_jabatan"
class="form-control"
required
>

<option value="">
-- Pilih Jenis Jabatan --
</option>

<option value="Struktural">
Struktural
</option>

<option value="Fungsional">
Fungsional
</option>

<option value="Pelaksana">
Pelaksana
</option>

</select>

</div>

<!-- Pejabat Penetap -->

<div class="col-md-6 mb-3">

<label>Pejabat Penetap</label>

<input
type="text"
name="pejabat_penetap"
class="form-control"
required
>

</div>

<!-- Keterangan -->

<div class="col-md-12 mb-3">

<label>Keterangan</label>

<textarea
name="keterangan"
rows="3"
class="form-control"
></textarea>

</div>

<!-- File Jabatan -->

<div class="col-md-12 mb-3">

<label>File Jabatan</label>

<input
type="file"
name="file_jabatan"
class="form-control"
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
Tutup
</button>

<button
type="submit"
class="btn btn-primary"
>
<i class="fa fa-save me-2"></i>
Simpan Data
</button>

</div>

</form>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- MODAL VIEW -->

@foreach($jabatans as $item)

<!-- MODAL VIEW JABATAN -->

<div
class="modal fade"
id="view{{ $item->id }}"
tabindex="-1"
>

<div class="modal-dialog modal-xl modal-dialog-scrollable modal-pendidikan">

<div class="modal-content">

<div class="modal-header bg-primary text-white">

<h5 class="modal-title">

<i class="fa fa-briefcase me-2"></i>

Detail Jabatan

</h5>

<button
type="button"
class="btn-close btn-close-white"
data-bs-dismiss="modal"
></button>

</div>

<div class="modal-body">

<div class="row g-3">

<div class="col-md-6">

<div class="detail-box">

<label>Nama Jabatan</label>

<div class="detail-value">
{{ $item->nama_jabatan }}
</div>

</div>

</div>

<div class="col-md-6">

<div class="detail-box">

<label>TMT Jabatan</label>

<div class="detail-value">
{{ $item->tmt_jabatan }}
</div>

</div>

</div>

<div class="col-md-6">

<div class="detail-box">

<label>Nomor SK</label>

<div class="detail-value">
{{ $item->no_sk }}
</div>

</div>

</div>

<div class="col-md-6">

<div class="detail-box">

<label>Tanggal SK</label>

<div class="detail-value">
{{ $item->tgl_sk }}
</div>

</div>

</div>

<div class="col-md-6">

<div class="detail-box">

<label>Jenis Jabatan</label>

<div class="detail-value">
{{ $item->jenis_jabatan }}
</div>

</div>

</div>

<div class="col-md-6">

<div class="detail-box">

<label>Pejabat Penetap</label>

<div class="detail-value">
{{ $item->pejabat_penetap }}
</div>

</div>

</div>

<div class="col-12">

<div class="detail-box">

<label>Keterangan</label>

<div class="detail-value">
{{ $item->keterangan }}
</div>

</div>

</div>

<div class="col-md-6">

<div class="detail-box">

<label>Status</label>

<div class="detail-value">

@if($item->validasi_admin_unit == 'Disetujui')

<span class="badge bg-success">
Disetujui
</span>

@else

<span class="badge bg-warning text-dark">
Belum Validasi
</span>

@endif

</div>

</div>

</div>

<div class="col-md-6">

<div class="detail-box">

<label>File Jabatan</label>

@if($item->file_jabatan)

<a
href="{{ asset('storage/'.$item->file_jabatan) }}"
target="_blank"
class="btn btn-primary rounded-pill"
>

<i class="fa fa-file-pdf me-2"></i>

Lihat File

</a>

@else

<div class="text-muted">

Tidak Ada File

</div>

@endif

</div>

</div>

</div>

</div>

</div>

</div>

</div>


<!-- MODAL EDIT JABATAN -->

<div
class="modal fade"
id="edit{{ $item->id }}"
tabindex="-1"
>

<div class="modal-dialog modal-xl modal-dialog-scrollable modal-pendidikan">

<div class="modal-content rounded-4 border-0">

<form
method="POST"
action="/update-jabatan/{{ $item->id }}"
enctype="multipart/form-data"
>

@csrf

<div class="modal-header bg-warning">

<h5 class="modal-title">

<i class="fa fa-pen me-2"></i>

Edit Jabatan

</h5>

<button
type="button"
class="btn-close"
data-bs-dismiss="modal"
></button>

</div>

<div class="modal-body">

<div class="row">

<div class="col-md-6 mb-3">

<label>Nama Jabatan</label>

<input
type="text"
name="nama_jabatan"
class="form-control"
value="{{ $item->nama_jabatan }}"
required
>

</div>

<div class="col-md-6 mb-3">

<label>TMT Jabatan</label>

<input
type="date"
name="tmt_jabatan"
class="form-control"
value="{{ $item->tmt_jabatan }}"
required
>

</div>

<div class="col-md-6 mb-3">

<label>Nomor SK</label>

<input
type="text"
name="no_sk"
class="form-control"
value="{{ $item->no_sk }}"
required
>

</div>

<div class="col-md-6 mb-3">

<label>Tanggal SK</label>

<input
type="date"
name="tgl_sk"
class="form-control"
value="{{ $item->tgl_sk }}"
required
>

</div>

<div class="col-md-6 mb-3">

<label>Jenis Jabatan</label>

<select
name="jenis_jabatan"
class="form-control"
required
>

<option
value="Struktural"
{{ $item->jenis_jabatan == 'Struktural' ? 'selected' : '' }}
>
Struktural
</option>

<option
value="Fungsional"
{{ $item->jenis_jabatan == 'Fungsional' ? 'selected' : '' }}
>
Fungsional
</option>

<option
value="Pelaksana"
{{ $item->jenis_jabatan == 'Pelaksana' ? 'selected' : '' }}
>
Pelaksana
</option>

</select>

</div>

<div class="col-md-6 mb-3">

<label>Pejabat Penetap</label>

<input
type="text"
name="pejabat_penetap"
class="form-control"
value="{{ $item->pejabat_penetap }}"
required
>

</div>

<div class="col-md-12 mb-3">

<label>Keterangan</label>

<textarea
name="keterangan"
class="form-control"
rows="3"
>{{ $item->keterangan }}</textarea>

</div>

<div class="col-md-12 mb-3">

<label class="form-label fw-semibold">

File Jabatan

</label>

@if($item->file_jabatan)

<div
class="d-flex align-items-center justify-content-between border rounded-4 px-3 py-2"
style="min-height:58px;"
>

<div class="d-flex align-items-center">

<i class="fa fa-file-pdf text-danger me-2"></i>

<small class="text-muted">
File sudah diupload
</small>

</div>

<div class="d-flex align-items-center gap-2">

<a
href="{{ asset('storage/'.$item->file_jabatan) }}"
target="_blank"
class="btn btn-sm btn-primary rounded-3"
>

<i class="fa fa-eye"></i>

</a>

<button
type="button"
class="btn btn-sm btn-danger rounded-3"
onclick="document.getElementById('upload-jabatan{{ $item->id }}').classList.toggle('d-none')"
>

<i class="fa fa-pen"></i>

</button>

</div>

</div>

<div
id="upload-jabatan{{ $item->id }}"
class="d-none mt-2"
>

<input
type="file"
name="file_jabatan"
class="form-control rounded-4"
>

</div>

@else

<input
type="file"
name="file_jabatan"
class="form-control rounded-4"
>

@endif

</div>

</div>

</div>

<div class="modal-footer">

<button
type="button"
class="btn btn-secondary"
data-bs-dismiss="modal"
>
Tutup
</button>

<button
type="submit"
class="btn btn-warning"
>
<i class="fa fa-save me-2"></i>
Update Data
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

</body>
</html>

