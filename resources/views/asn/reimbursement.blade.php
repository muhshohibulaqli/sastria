<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0"
>

<title>
E-Cuti ASN
</title>

<!-- BOOTSTRAP -->

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet"
>

<!-- FONT AWESOME -->

<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
rel="stylesheet"
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
box-shadow:15px 0 40px rgba(0,0,0,0.15);
transition:.3s;
z-index:9999;
overflow-y:auto;

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

font-weight:bold;
font-size:40px;

}

.user-box{

background:white;
padding:18px 25px;
border-radius:24px;
box-shadow:0 10px 30px rgba(0,0,0,0.08);
font-weight:bold;

}

/* CARD */

.main-card{

background:white;
border-radius:35px;
padding:35px;
box-shadow:
0 10px 40px rgba(0,0,0,0.08),
inset 0 1px 0 rgba(255,255,255,0.5);

}

.section-title{

font-size:30px;
font-weight:bold;

}

/* FORM */

.form-control,
.form-select{

border-radius:14px;
padding:14px;

}

/* BUTTON */

.btn-modern{

border:none;
border-radius:14px;
padding:10px 18px;
font-weight:bold;

}

.btn-upload{

background:linear-gradient(90deg,#16a34a,#22c55e);
color:white;

}

.btn-delete{

background:linear-gradient(90deg,#dc2626,#ef4444);
color:white;

}

/* STATUS */

.status-green{

background:linear-gradient(90deg,#16a34a,#22c55e);
color:white;
padding:8px 18px;
border-radius:30px;
font-size:13px;
font-weight:bold;
display:inline-block;

}

.status-yellow{

background:linear-gradient(90deg,#f59e0b,#facc15);
color:white;
padding:8px 18px;
border-radius:30px;
font-size:13px;
font-weight:bold;
display:inline-block;

}

.status-red{

background:linear-gradient(90deg,#dc2626,#ef4444);
color:white;
padding:8px 18px;
border-radius:30px;
font-size:13px;
font-weight:bold;
display:inline-block;

}

/* TABLE */

table{

border-collapse:separate;
border-spacing:0 14px;

}

thead th{

border:none !important;
background:linear-gradient(180deg,#0f172a,#1e293b) !important;
color:white !important;
padding:20px !important;
font-size:14px;
font-weight:bold;

}

tbody tr{

background:white;
box-shadow:0 8px 20px rgba(0,0,0,0.04);
border-radius:20px;

}

tbody td{

padding:18px !important;
border:none !important;
vertical-align:middle;

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
font-weight:bold;
color:#0f172a;

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

.section-title{

font-size:22px;

}

.table-responsive{

overflow-x:auto;

}

table{

min-width:900px;

}

.btn-modern{

width:100%;
margin-bottom:10px;

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

<!-- LOGOUT -->

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

Reimbursement ASN

</h2>

<small class="text-muted">

Pengajuan reimbursement ASN digital

</small>

</div>

<div class="user-box">

{{ Auth::user()->name }}

</div>

</div>

<!-- CARD -->

<div class="main-card">

<div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">

<div>

<div class="section-title">

Pengajuan Reimbursement

</div>

<small class="text-muted">

Input nota reimbursement ASN

</small>

</div>

<div class="status-green">

Total :
Rp {{ number_format($totalNominal,0,',','.') }}

</div>

</div>

@if(session('success'))

<div class="alert alert-success">

{{ session('success') }}

</div>

@endif

<div class="row mb-4">

<div class="col-lg-4">

<div class="card border-0 shadow-sm">

<div class="card-body text-center">

<h6>

Belum Dicairkan

</h6>

<h2 class="text-warning">

{{ $belumDicairkan }}

</h2>

</div>

</div>

</div>

<div class="col-lg-4">

<div class="card border-0 shadow-sm">

<div class="card-body text-center">

<h6>

Sudah Dicairkan

</h6>

<h2 class="text-success">

{{ $sudahDicairkan }}

</h2>

</div>

</div>

</div>

<div class="col-lg-4">

<div class="card border-0 shadow-sm">

<div class="card-body text-center">

<h6>

Total Nominal

</h6>

<h2 class="text-primary">

Rp {{ number_format($totalNominal,0,',','.') }}

</h2>

</div>

</div>

</div>

</div>

<hr class="my-4">

<form
method="POST"
action="/simpan-reimbursement"
enctype="multipart/form-data"
>

@csrf

<div class="row g-4">

<div class="col-lg-6">

<label class="fw-bold mb-2">

Nomor Pengajuan

</label>

<input
type="text"
class="form-control"
value="Otomatis Saat Disimpan"
readonly
>

</div>

<div class="col-lg-6">

<label class="fw-bold mb-2">

Tanggal Nota

</label>

<input
type="date"
name="tanggal_nota"
class="form-control"
required
>

</div>

<div class="col-lg-6">

<label class="fw-bold mb-2">

Jenis Pengeluaran

</label>

<select
name="jenis"
class="form-select"
required
>

<option value="">

Pilih Jenis

</option>

<option>Bensin</option>

<option>Rumah Tangga</option>

<option>Transportasi</option>

<option>Parkir</option>

<option>Tol</option>

<option>Makan Dinas</option>

<option>Hotel</option>

<option>ATK</option>

<option>Lainnya</option>

</select>

</div>

<div class="col-lg-6">

<label class="fw-bold mb-2">

Jumlah / Harga Total

</label>

<input
type="number"
name="jumlah"
class="form-control"
required
>

</div>

<div class="col-12">

<label class="fw-bold mb-2">

Deskripsi

</label>

<textarea
name="deskripsi"
rows="4"
class="form-control"
placeholder="Keterangan reimbursement..."
></textarea>

</div>

<div class="col-12">

<label class="fw-bold mb-2">

Upload Nota

</label>

<input
type="file"
name="file_nota"
class="form-control"
accept="image/*,.pdf"
capture="environment"
>

<small class="text-muted">

JPG, PNG atau PDF

</small>

</div>

<div class="col-12">

<button
type="submit"
class="btn btn-success btn-lg px-4"
>

<i class="fa fa-paper-plane"></i>

Ajukan Reimbursement

</button>

</div>

</div>

</form>

<hr class="my-5">

<h4 class="fw-bold mb-4">

Riwayat Reimbursement

</h4>

<div class="table-responsive">

<table class="table align-middle">

<thead>

<tr>

<th width="60">

No

</th>

<th>

Nomor Pengajuan

</th>

<th>

Tanggal Nota

</th>

<th>

Jenis

</th>

<th>

Deskripsi

</th>

<th>

Nominal

</th>

<th>

Nota

</th>

<th>

Status

</th>

<th>

Aksi

</th>

</tr>

</thead>

<tbody>

@forelse($reimbursements as $key => $item)

<tr>

<td>

{{ $key + 1 }}

</td>

<td>

<div class="fw-bold">

{{ $item->nomor_pengajuan }}

</div>

<small class="text-muted">

{{ date('d M Y',strtotime($item->created_at)) }}

</small>

</td>

<td>

{{ date('d/m/Y',strtotime($item->tanggal_nota)) }}

</td>

<td>

<span class="badge bg-primary">

{{ $item->jenis }}

</span>

</td>

<td style="min-width:220px">

{{ $item->deskripsi }}

</td>

<td>

<strong>

Rp {{ number_format($item->jumlah,0,',','.') }}

</strong>

</td>

<td>

@if($item->file_nota)

<div class="d-flex gap-2 flex-wrap">

<a
href="{{ asset('storage/'.$item->file_nota) }}"
target="_blank"
class="btn btn-success btn-sm"
>

<i class="fa fa-eye"></i>

View

</a>

<a
href="{{ asset('storage/'.$item->file_nota) }}"
download
class="btn btn-primary btn-sm"
>

<i class="fa fa-download"></i>

Download

</a>

</div>

@else

-

@endif

</td>

<td>

@if($item->status == 'belum_dicairkan')

<span class="badge bg-warning text-dark">

Belum Dicairkan

</span>

@else

<span class="badge bg-success">

Sudah Dicairkan

</span>

@endif

</td>

<td>

<div class="d-flex gap-2 flex-wrap">

@if($item->status == 'belum_dicairkan')

<a
href="/hapus-reimbursement/{{ $item->id }}"
class="btn btn-danger btn-sm"
onclick="return confirm('Hapus reimbursement ini?')"
>

<i class="fa fa-trash"></i>

Hapus

</a>

@else

<span class="text-success fw-bold">

✓ Dicairkan

</span>

@endif

</div>

</td>

</tr>

@empty

<tr>

<td colspan="9" class="text-center py-5">

<i class="fa fa-wallet fa-3x text-secondary"></i>

<br><br>

Belum ada pengajuan reimbursement

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

</div>

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

