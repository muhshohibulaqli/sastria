<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0"
>

<title>
Kinerja & Absensi Admin Unit
</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet"
>

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

.sidebar a.active{

background:linear-gradient(90deg,#2563eb,#3b82f6);
color:white;

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

font-size:40px;
font-weight:bold;

}

.user-box{

background:white;
padding:18px 25px;
border-radius:24px;
box-shadow:0 10px 30px rgba(0,0,0,0.08);
font-weight:bold;

}

/* STATS */

.stats-grid{

display:grid;
grid-template-columns:repeat(auto-fit,minmax(230px,1fr));
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

.card-purple{
background:linear-gradient(135deg,#7c3aed,#a855f7);
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

/* FILTER */

.filter-box{

display:flex;
gap:10px;
flex-wrap:wrap;
margin-bottom:25px;

}

.filter-box .form-control,
.filter-box .form-select{

border-radius:14px;
padding:12px 15px;
border:none;
box-shadow:0 5px 15px rgba(0,0,0,0.06);

}

.btn-filter{

background:#0f172a;
color:white;
border:none;
border-radius:14px;
padding:12px 20px;
font-weight:bold;

}

/* TABLE */

.table-responsive{

overflow-x:auto;

}

table{

min-width:1000px;

}

thead{

background:#0f172a;
color:white;

}

thead th{

padding:18px !important;
border:none !important;

}

tbody td{

padding:18px !important;
vertical-align:middle;

}

tbody tr:hover{

background:#f8fafc;

}

/* STATUS */

.status-green{

background:#dcfce7;
color:#166534;
padding:7px 14px;
border-radius:30px;
font-size:13px;
font-weight:bold;

}

.status-yellow{

background:#fef3c7;
color:#92400e;
padding:7px 14px;
border-radius:30px;
font-size:13px;
font-weight:bold;

}

.status-blue{

background:#dbeafe;
color:#1d4ed8;
padding:7px 14px;
border-radius:30px;
font-size:13px;
font-weight:bold;

}

.status-red{

background:#fee2e2;
color:#991b1b;
padding:7px 14px;
border-radius:30px;
font-size:13px;
font-weight:bold;

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

Sistem ASN

</div>

<a href="/dashboard">

<i class="fa fa-home"></i>

Dashboard

</a>

<div class="menu-title">

Data Master

</div>

<a href="/karyawan">

<i class="fa fa-users"></i>

Karyawan

</a>

<a href="/data-kgb">

<i class="fa fa-money-bill-wave"></i>

Data KGB

</a>

<a href="/user">

<i class="fa fa-user-gear"></i>

User

</a>

<div class="menu-title">

Pengajuan

</div>

<a
href="/kinerja-absensi"
class="active"
>

<i class="fa fa-file"></i>

Kinerja & Absensi

</a>

<a href="/izin-cuti">

<i class="fa fa-paper-plane"></i>

Izin Cuti

</a>

<a href="/rekap-unit">

<i class="fa fa-chart-column"></i>

Rekap Unit

</a>

<a href="/profil">

<i class="fa fa-user"></i>

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

Kinerja & Absensi

</h2>

<small class="text-muted">

Monitoring upload ASN unit kerja

</small>

</div>

<div class="user-box">

{{ Auth::user()->name }}

</div>

</div>

<!-- STATS -->

<div class="stats-grid">

<div class="stats-card card-blue">

<h3>

{{ $totalAsn }}

</h3>

<small>

Total ASN Unit

</small>

</div>

<div class="stats-card card-green">

<h3>

{{ $lengkap }}

</h3>

<small>

Upload Lengkap

</small>

</div>

<div class="stats-card card-yellow">

<h3>

{{ $belumLengkap }}

</h3>

<small>

Belum Lengkap

</small>

</div>

<div class="stats-card card-purple">

<h3>

{{ $tervalidasi }}

</h3>

<small>

Tervalidasi

</small>

</div>

</div>

<!-- MAIN -->

<div class="main-card">

<div class="d-flex justify-content-between align-items-center flex-wrap mb-4 gap-3">

<div>

<h4 class="fw-bold mb-1">

Data Upload ASN

</h4>

<small class="text-muted">

Unit {{ Auth::user()->unit }}

</small>

</div>

<div class="d-flex gap-2 flex-wrap">

<a
href="/export-pdf?tahun={{ $tahun }}&bulan={{ request('bulan') }}"
class="btn btn-danger rounded-4 px-4"
>

<i class="fa fa-file-pdf"></i>

PDF

</a>

<a
href="/export-excel?tahun={{ $tahun }}&bulan={{ request('bulan') }}"
class="btn btn-success rounded-4 px-4"
>

<i class="fa fa-file-excel"></i>

Excel

</a>

</div>

</div>

<!-- FILTER -->

<form
method="GET"
action="/kinerja-absensi"
class="filter-box"
>

<input
type="text"
name="cari"
class="form-control"
placeholder="Cari nama / NIP"
value="{{ request('cari') }}"
>

<select
name="bulan"
class="form-select"
>

<option value="">

Semua Bulan

</option>

@php

$bulanList = [

'Januari',
'Februari',
'Maret',
'April',
'Mei',
'Juni',
'Juli',
'Agustus',
'September',
'Oktober',
'November',
'Desember'

];

@endphp

@foreach($bulanList as $item)

<option
value="{{ $item }}"
{{ request('bulan') == $item ? 'selected' : '' }}
>

{{ $item }}

</option>

@endforeach

</select>

<select
name="tahun"
class="form-select"
>

@for($i=date('Y'); $i>=2024; $i--)

<option
value="{{ $i }}"
{{ $tahun == $i ? 'selected' : '' }}
>

{{ $i }}

</option>

@endfor

</select>

<button class="btn-filter">

Filter

</button>

</form>

<!-- TABLE -->

<div class="table-responsive">

<table class="table align-middle">

<thead>

<tr>

<th>No</th>
<th>NIP</th>
<th>Nama ASN</th>
<th>Kinerja</th>
<th>Absensi</th>
<th>Status</th>
<th>Validasi</th>

</tr>

</thead>

<tbody>

@foreach($users as $key => $user)

@php

$upload = \App\Models\Upload::where(
'user_id',
$user->id
)

->where(
'tahun',
$tahun
)

->latest()

->first();

@endphp

<tr>

<td>

{{ $users->firstItem() + $key }}

</td>

<td>

{{ $user->nip }}

</td>

<td class="fw-bold">

{{ $user->name }}

</td>

<td>

@if($upload && $upload->file_kinerja)

<a
href="{{ asset('storage/'.$upload->file_kinerja) }}"
target="_blank"
class="btn btn-primary btn-sm rounded-3"
>

<i class="fa fa-eye"></i>

</a>

<a
href="{{ asset('storage/'.$upload->file_kinerja) }}"
download
class="btn btn-success btn-sm rounded-3"
>

<i class="fa fa-download"></i>

</a>

@else

-

@endif

</td>

<td>

@if($upload && $upload->file_absensi)

<a
href="{{ asset('storage/'.$upload->file_absensi) }}"
target="_blank"
class="btn btn-primary btn-sm rounded-3"
>

<i class="fa fa-eye"></i>

</a>

<a
href="{{ asset('storage/'.$upload->file_absensi) }}"
download
class="btn btn-success btn-sm rounded-3"
>

<i class="fa fa-download"></i>

</a>

@else

-

@endif

</td>

<td>

@if($upload)

@if($upload->status == 'lengkap')

<span class="status-green">

Lengkap

</span>

@elseif($upload->status == 'belum lengkap')

<span class="status-yellow">

Belum Lengkap

</span>

@elseif($upload->status == 'tervalidasi')

<span class="status-blue">

Tervalidasi

</span>

@else

<span class="status-red">

Belum Upload

</span>

@endif

@else

<span class="status-red">

Belum Upload

</span>

@endif

</td>

<td>

@if($upload)

@if($upload->status != 'tervalidasi')

<a
href="/validasi-upload/{{ $upload->id }}"
class="btn btn-dark btn-sm rounded-3"
>

Validasi

</a>

@else

<a
href="/batal-validasi/{{ $upload->id }}"
class="btn btn-danger btn-sm rounded-3"
>

Batal

</a>

@endif

@else

-

@endif

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

<div class="mt-4">

{{ $users->links() }}

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