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

<div class="content">

<!-- TOPBAR -->

<div class="main-card">

<h4>

Data Karyawan ASN

</h4>

<p class="text-muted mb-4">

Kelola seluruh data ASN pada sistem

</p>

<form
method="GET"
action="{{ url('/data-karyawan') }}"
class="row g-3 mb-4"
>

<div class="col-lg-5">

<input
type="text"
name="search"
class="form-control"
placeholder="Cari Nama ASN..."
value="{{ request('search') }}"
>

</div>

<div class="col-lg-4">

<select
name="unit"
class="form-select"
>

<option value="">
Semua Unit
</option>

@foreach($units as $unit)

<option
value="{{ $unit->nama_unit }}"
{{ request('unit') == $unit->nama_unit ? 'selected' : '' }}
>

{{ $unit->nama_unit }}

</option>

@endforeach

</select>

</div>

<div class="col-lg-3 d-flex gap-2">

<button
type="submit"
class="btn btn-primary flex-fill"
>

<i class="fa fa-search"></i>

Cari

</button>

<a
href="/data-karyawan/export-excel"
class="btn btn-success"
title="Export Excel"
>

<i class="fa fa-file-excel"></i>

</a>

<a
href="/data-karyawan/export-pdf"
class="btn btn-danger"
title="Export PDF"
>

<i class="fa fa-file-pdf"></i>

</a>

</div>

</form>

<div class="table-responsive">

<table class="table table-hover align-middle">

<thead class="table-light">

<tr>

<th width="80">

No

</th>

<th>

Nama

</th>

<th>

NIP

</th>

<th>

Unit

</th>

<th width="140">

Aksi

</th>

</tr>

</thead>

<tbody>

@forelse($users as $user)

<tr>

<td>

{{ $loop->iteration + (($users->currentPage()-1) * $users->perPage()) }}

</td>

<td>

<div class="fw-semibold">

{{ $user->name }}

</div>

<small class="text-muted">

{{ $user->email }}

</small>

</td>

<td>

{{ $user->nip ?? '-' }}

</td>

<td>

<span class="badge bg-info">

{{ $user->unit ?? '-' }}

</span>

</td>

<td>

<div class="d-flex gap-1">

<a
href="/detail-karyawan/{{ $user->id }}?page={{ request('page',1) }}"
class="btn btn-primary btn-sm"
title="Detail ASN"
>

<i class="fa fa-eye"></i>

</a>

</div>

</td>

</tr>

@empty

<tr>

<td
colspan="5"
class="text-center py-4"
>

Belum ada data ASN

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

@if(method_exists($users,'links'))

<div class="mt-4">

{{ $users->appends(request()->query())->links() }}

</div>

@endif

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

