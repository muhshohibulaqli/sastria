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

        <h2>Dashboard ASN</h2>

        <small class="text-muted">
            Sistem Informasi ASN
        </small>

    </div>

    <div class="user-box">

        {{ Auth::user()->name }}

    </div>

</div>

<!-- DATA SKP -->

<div class="main-card">

    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">

        <div>

            <h4 class="mb-1">

                Data SKP Tahunan

            </h4>

            <small class="text-muted">

                Kelola Data Sasaran Kinerja Pegawai

            </small>

        </div>

        <button
            type="button"
            class="btn btn-primary rounded-pill px-4"
            data-bs-toggle="modal"
            data-bs-target="#modalTambahSkp">

            <i class="fa fa-plus me-2"></i>

            Tambah SKP

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

                    <th width="60">

                        No

                    </th>

                    <th width="90">

                        Tahun

                    </th>

                    <th>

                        Capaian Kinerja Organisasi

                    </th>

                    <th width="220">

                        Predikat

                    </th>

                    <th width="80" class="text-center">

                        TTE

                    </th>

                    <th width="150">

                        Status

                    </th>

                    <th width="170">

                        Aksi

                    </th>

                </tr>

            </thead>

            <tbody>

            @forelse($skps as $item)

                <tr>

                    <td>

                        {{ $loop->iteration }}

                    </td>

                    <td>

                        <strong>

                            {{ $item->tahun }}

                        </strong>

                    </td>

                    <td>

                        {{ \Illuminate\Support\Str::limit($item->capaian_kinerja_organisasi,80) }}

                    </td>

                    <td>

                        {{ $item->predikat_kinerja_pegawai }}

                    </td>

                    <!-- FILE TTE -->

                    <td class="text-center">

                        @if($item->file_skp_final)

                            <a
                                href="{{ asset('storage/'.$item->file_skp_final) }}"
                                target="_blank"
                                title="Download SKP Final (TTE)">

                                <i class="fa-solid fa-file-pdf fa-2x text-success"></i>

                            </a>

                        @else

                            <i
                                class="fa-solid fa-file-pdf fa-2x text-danger"
                                title="SKP Final (TTE) Belum Diupload">
                            </i>

                        @endif

                    </td>

                    <!-- STATUS -->

                    <td>

                        @if($item->validasi_admin_unit=='Disetujui')

                            <span class="badge bg-success rounded-pill">

                                Disetujui

                            </span>

                        @elseif($item->validasi_admin_unit=='Ditolak')

                            <span class="badge bg-danger rounded-pill">

                                Ditolak

                            </span>

                        @else

                            <span class="badge bg-warning text-dark rounded-pill">

                                Belum Validasi

                            </span>

                        @endif

                    </td>

                    <!-- AKSI -->

                    <td>

                        <div class="d-flex gap-1">

                            <button
                                type="button"
                                class="btn btn-info btn-sm rounded-pill"
                                data-bs-toggle="modal"
                                data-bs-target="#view{{ $item->id }}">

                                <i class="fa fa-eye"></i>

                            </button>

                            <button
                                type="button"
                                class="btn btn-warning btn-sm rounded-pill"
                                data-bs-toggle="modal"
                                data-bs-target="#edit{{ $item->id }}">

                                <i class="fa fa-pen"></i>

                            </button>

                            <a
                                href="/hapus-skp/{{ $item->id }}"
                                class="btn btn-danger btn-sm rounded-pill"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">

                                <i class="fa fa-trash"></i>

                            </a>

                        </div>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="7" class="text-center py-5">

                        Belum ada Data SKP.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

<style>

/* =====================================================
   TABEL
===================================================== */

.table-responsive{

    background:#fff;

    border-radius:25px;

    overflow:hidden;

    box-shadow:0 20px 40px rgba(15,23,42,.08);

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

    color:#fff;

    font-size:14px;

    font-weight:700;

    padding:18px;

    border:none;

}

.table td{

    padding:18px;

    vertical-align:middle;

    border-color:#e2e8f0;

}

.table tbody tr{

    transition:.25s;

}

.table tbody tr:hover{

    background:#f8fafc;

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

}

.form-control,
.form-select{

    border-radius:12px;

}

.btn{

    font-weight:600;

}

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


/* =====================================================
   DETAIL
===================================================== */

.detail-box{

    background:#fff;

    border:1px solid #e2e8f0;

    border-radius:18px;

    padding:18px;

    height:100%;

    transition:.25s;

}

.detail-box:hover{

    transform:translateY(-3px);

    box-shadow:0 15px 35px rgba(37,99,235,.15);

}

.detail-box label{

    display:block;

    font-size:12px;

    color:#64748b;

    font-weight:700;

    margin-bottom:8px;

    text-transform:uppercase;

}

.detail-value{

    font-size:15px;

    font-weight:600;

    color:#0f172a;

}

</style>

<!-- =====================================================
     MODAL TAMBAH SKP
===================================================== -->

<div
class="modal fade"
id="modalTambahSkp"
tabindex="-1">

<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable modal-pendidikan">

<div class="modal-content rounded-4 border-0">

<form
method="POST"
action="/tambah-skp"
enctype="multipart/form-data">

@csrf

<div class="modal-header bg-primary text-white">

<h5 class="modal-title">

<i class="fa fa-plus-circle me-2"></i>

Tambah Data SKP

</h5>

<button
type="button"
class="btn-close btn-close-white"
data-bs-dismiss="modal">

</button>

</div>

<div class="modal-body">

<div class="row">

<!-- Tahun -->

<div class="col-md-6 mb-3">

<label class="form-label">

Tahun

</label>

<input
type="number"
name="tahun"
class="form-control"
min="2000"
max="2100"
value="{{ old('tahun', date('Y')) }}"
required>

</div>

<div class="col-md-6 mb-3"></div>

<!-- Capaian Kinerja Organisasi -->

<div class="col-md-12 mb-3">

<label class="form-label">

Capaian Kinerja Organisasi

</label>

<input
type="text"
name="capaian_kinerja_organisasi"
class="form-control"
placeholder="Masukkan Capaian Kinerja Organisasi"
value="{{ old('capaian_kinerja_organisasi') }}"
required>

</div>

<!-- Predikat Kinerja Pegawai -->

<div class="col-md-12 mb-3">

<label class="form-label">

Predikat Kinerja Pegawai

</label>

<input
type="text"
name="predikat_kinerja_pegawai"
class="form-control"
placeholder="Masukkan Predikat Kinerja Pegawai"
value="{{ old('predikat_kinerja_pegawai') }}"
required>

</div>

<!-- Upload File -->

<div class="col-md-12 mb-3">

<label class="form-label">

Upload File SKP (PDF)

</label>

<input
type="file"
name="file_skp"
class="form-control"
accept=".pdf"
required>

<small class="text-muted">

Format PDF maksimal 5 MB.

</small>

</div>

</div>

</div>

<div class="modal-footer">

<button
type="button"
class="btn btn-secondary"
data-bs-dismiss="modal">

Tutup

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

<!-- =====================================================
     MODAL VIEW SKP
===================================================== -->

@foreach($skps as $item)

<div
class="modal fade"
id="view{{ $item->id }}"
tabindex="-1">

<div class="modal-dialog modal-xl modal-dialog-scrollable modal-pendidikan">

<div class="modal-content rounded-4 border-0">

<div class="modal-header bg-primary text-white">

<h5 class="modal-title">

<i class="fa fa-chart-line me-2"></i>

Detail Data SKP

</h5>

<button
type="button"
class="btn-close btn-close-white"
data-bs-dismiss="modal">

</button>

</div>

<div class="modal-body">

<div class="row g-3">  

<!-- Tahun -->

<div class="col-md-6">

<div class="detail-box">

<label>

Tahun SKP

</label>

<div class="detail-value">

{{ $item->tahun }}

</div>

</div>

</div>

<!-- Predikat -->

<div class="col-md-6">

<div class="detail-box">

<label>

Capaian Kinerja Organisasi

</label>

<div class="detail-value">

{!! nl2br(e($item->capaian_kinerja_organisasi)) !!}

</div>

</div>

</div>

<!-- Capaian -->

<div class="col-md-12">

<div class="detail-box">

<label>

Predikat Kinerja Pegawai

</label>

<div class="detail-value">

{{ $item->predikat_kinerja_pegawai }}

</div>

</div>

</div>

<!-- Status -->

<div class="col-md-6">

<div class="detail-box">

<label>

Status Validasi

</label>

<div class="detail-value">

@if($item->validasi_admin_unit=='Disetujui')

<span class="badge bg-success rounded-pill">

Disetujui

</span>

@elseif($item->validasi_admin_unit=='Ditolak')

<span class="badge bg-danger rounded-pill">

Ditolak

</span>

@else

<span class="badge bg-warning text-dark rounded-pill">

Belum Validasi

</span>

@endif

</div>

</div>

</div>

<!-- Catatan Admin -->

<div class="col-md-6">

<div class="detail-box">

<label>

Catatan Admin

</label>

<div class="detail-value">

{{ $item->catatan_admin ?? '-' }}

</div>

</div>

</div>

<!-- File SKP -->

<div class="col-md-6">

<div class="detail-box">

<label>

File SKP ASN

</label>

@if($item->file_skp)

<a
href="{{ asset('storage/'.$item->file_skp) }}"
target="_blank"
class="btn btn-primary rounded-pill">

<i class="fa fa-file-pdf me-2"></i>

Lihat File

</a>

@else

<span class="text-muted">

Belum Upload File

</span>

@endif

</div>

</div>

<!-- File Final -->

<div class="col-md-6">

<div class="detail-box">

<label>

File SKP Final (TTE)

</label>

@if($item->file_skp_final)

<a
href="{{ asset('storage/'.$item->file_skp_final) }}"
target="_blank"
class="btn btn-success rounded-pill">

<i class="fa fa-file-pdf me-2"></i>

Lihat File Final

</a>

@else

<span class="text-muted">

Belum ada File Final

</span>

@endif

</div>

</div>

<!-- Dibuat -->

<div class="col-md-6">

<div class="detail-box">

<label>

Dibuat Pada

</label>

<div class="detail-value">

{{ $item->created_at ? $item->created_at->format('d-m-Y H:i') : '-' }}

</div>

</div>

</div>

<!-- Terakhir Update -->

<div class="col-md-6">

<div class="detail-box">

<label>

Terakhir Diupdate

</label>

<div class="detail-value">

{{ $item->updated_at ? $item->updated_at->format('d-m-Y H:i') : '-' }}

</div>

</div>

</div>

</div>

</div>

<div class="modal-footer">

<button
type="button"
class="btn btn-secondary"
data-bs-dismiss="modal">

Tutup

</button>

</div>

</div>

</div>

</div>

<!-- =====================================================
     MODAL EDIT SKP
===================================================== -->

<div
class="modal fade"
id="edit{{ $item->id }}"
tabindex="-1"
>

<div class="modal-dialog modal-xl modal-dialog-scrollable modal-pendidikan">

<div class="modal-content rounded-4 border-0">

<form
method="POST"
action="/update-skp/{{ $item->id }}"
enctype="multipart/form-data"
>

@csrf

<div class="modal-header bg-warning">

<h5 class="modal-title">

<i class="fa fa-pen me-2"></i>

Edit Data SKP

</h5>

<button
type="button"
class="btn-close"
data-bs-dismiss="modal"
></button>

</div>

<div class="modal-body">

<div class="row">

<!-- Tahun -->

<div class="col-md-6 mb-3">

<label>Tahun</label>

<input
type="number"
name="tahun"
class="form-control"
min="2000"
max="2100"
value="{{ old('tahun',$item->tahun) }}"
required
>

</div>

<div class="col-md-6 mb-3"></div>

<!-- Capaian -->

<div class="col-md-12 mb-3">

<label>Capaian Kinerja Organisasi</label>

<input
type="text"
name="capaian_kinerja_organisasi"
class="form-control"
value="{{ old('capaian_kinerja_organisasi',$item->capaian_kinerja_organisasi) }}"
required
>

</div>

<!-- Predikat -->

<div class="col-md-12 mb-3">

<label>Predikat Kinerja Pegawai</label>

<input
type="text"
name="predikat_kinerja_pegawai"
class="form-control"
value="{{ old('predikat_kinerja_pegawai',$item->predikat_kinerja_pegawai) }}"
required
>

</div>

<!-- File SKP -->

<div class="col-md-12 mb-3">

<label class="form-label fw-semibold">

File SKP

</label>

@if($item->file_skp)

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
href="{{ asset('storage/'.$item->file_skp) }}"
target="_blank"
class="btn btn-sm btn-primary rounded-3"
>

<i class="fa fa-eye"></i>

</a>

<button
type="button"
class="btn btn-sm btn-danger rounded-3"
onclick="document.getElementById('upload-skp{{ $item->id }}').classList.toggle('d-none')"
>

<i class="fa fa-pen"></i>

</button>

</div>

</div>

<div
id="upload-skp{{ $item->id }}"
class="d-none mt-2"
>

<input
type="file"
name="file_skp"
class="form-control rounded-4"
accept=".pdf"
>

<small class="text-muted">

Kosongkan jika file tidak ingin diganti.

</small>

</div>

@else

<input
type="file"
name="file_skp"
class="form-control rounded-4"
accept=".pdf"
>

@endif

</div>

<!-- Status -->

<div class="col-md-6 mb-3">

<label>Status Validasi</label>

<input
type="text"
class="form-control"
value="{{ $item->validasi_admin_unit }}"
readonly
>

</div>

<!-- Catatan -->

<div class="col-md-6 mb-3">

<label>Catatan Admin</label>

<input
type="text"
class="form-control"
value="{{ $item->catatan_admin ?? '-' }}"
readonly
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

<!-- =====================================================
     PENUTUP
===================================================== -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    const tooltipTriggerList = [].slice.call(

        document.querySelectorAll('[data-bs-toggle="tooltip"]')

    );

    tooltipTriggerList.map(function (tooltipTriggerEl) {

        return new bootstrap.Tooltip(tooltipTriggerEl);

    });

});

</script>

@if($errors->any())

<script>

document.addEventListener('DOMContentLoaded', function(){

    var modalTambah = new bootstrap.Modal(

        document.getElementById('modalTambahSkp')

    );

    modalTambah.show();

});

</script>

@endif

@if(session('open_edit'))

<script>

document.addEventListener('DOMContentLoaded', function(){

    var modalEdit = new bootstrap.Modal(

        document.getElementById('edit{{ session('open_edit') }}')

    );

    modalEdit.show();

});

</script>

@endif

@if(session('open_view'))

<script>

document.addEventListener('DOMContentLoaded', function(){

    var modalView = new bootstrap.Modal(

        document.getElementById('view{{ session('open_view') }}')

    );

    modalView.show();

});

</script>

@endif

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>\

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

