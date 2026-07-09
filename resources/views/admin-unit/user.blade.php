<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0"
>

<title>
User ASN
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

}

/* CONTENT */

.content{

margin-left:270px;
padding:35px;

}

/* MOBILE */

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

/* BOX */

.box{

background:white;
border-radius:35px;
padding:30px;
border:1px solid rgba(255,255,255,0.5);
box-shadow:
0 10px 40px rgba(0,0,0,0.08),
inset 0 1px 0 rgba(255,255,255,0.5);

}

/* INPUT */

.form-control,
.form-select{

border:none;
border-radius:18px;
padding:14px;
background:#f8fafc;

}

.form-control:focus,
.form-select:focus{

box-shadow:0 0 0 3px rgba(37,99,235,.15);

}

/* BUTTON */

.btn-modern{

border:none;
border-radius:16px;
padding:10px 18px;
font-weight:bold;

}

/* TABLE */

table{

white-space:nowrap;

}

thead{

background:linear-gradient(90deg,#0f172a,#1e293b);
color:white;

}

thead th{

border:none !important;
padding:18px !important;

}

tbody tr{

transition:.2s;

}

tbody tr:hover{

background:linear-gradient(
90deg,
rgba(37,99,235,.04),
rgba(59,130,246,.02)
);

transform:translateY(-2px);

}

tbody td{

padding:18px !important;
vertical-align:middle;

}

/* BADGE */

.badge-admin{

background:linear-gradient(90deg,#2563eb,#60a5fa);
color:white;
padding:8px 14px;
border-radius:30px;
font-size:12px;
font-weight:bold;
box-shadow:0 5px 15px rgba(37,99,235,.2);

}

.badge-asn{

background:linear-gradient(90deg,#16a34a,#4ade80);
color:white;
padding:8px 14px;
border-radius:30px;
font-size:12px;
font-weight:bold;
box-shadow:0 5px 15px rgba(34,197,94,.2);

}

/* PAGINATION */

.pagination{

justify-content:center;

}

.page-link{

border:none;
margin:0 4px;
border-radius:12px !important;
color:#0f172a;

}

/* FOOTER */

.footer{

text-align:center;
margin-top:40px;
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

.box{

padding:20px;
border-radius:25px;

}

.table-responsive{

overflow-x:auto;

}

table{

min-width:800px;

}

}

</style>

</head>
<body>

<!-- MOBILE -->

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

<a
href="/user"
class="active"
>

<i class="fa fa-user-gear"></i>

User

</a>

<div class="menu-title">

Pengajuan

</div>

<a href="/kinerja-absensi">

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

<div class="topbar">

<div>

<h2>

User ASN

</h2>

<small class="text-muted">

Kelola akun ASN unit kerja

</small>

</div>

<div class="user-box">

{{ Auth::user()->name }}

</div>

</div>

@if(session('success'))

<div class="alert alert-success border-0 rounded-4 mb-4">

{{ session('success') }}

</div>

@endif

<!-- TAMBAH USER -->

<div class="box mb-4">

<h5 class="fw-bold mb-4">

Tambah User

</h5>

<form
method="POST"
action="/tambah-asn"
>

@csrf

<div class="row g-3">

<div class="col-md-3">

<input
type="text"
name="nip"
class="form-control"
placeholder="NIP"
required
>

</div>

<div class="col-md-3">

<input
type="text"
name="name"
class="form-control"
placeholder="Nama ASN"
required
>

</div>

<div class="col-md-3">

<input
type="email"
name="email"
class="form-control"
placeholder="Email"
required
>

</div>

<div class="col-md-3">

<input
type="password"
name="password"
class="form-control"
placeholder="Password"
required
>

</div>

<div class="col-md-3">

<select
name="role"
class="form-select"
required
>

<option value="asn">

ASN

</option>

<option value="admin_unit">

Admin Unit

</option>

</select>

</div>

<div class="col-md-3">

<input
type="text"
class="form-control"
value="{{ Auth::user()->unit }}"
readonly
>

<input
type="hidden"
name="unit"
value="{{ Auth::user()->unit }}"
>

</div>

</div>

<button class="btn btn-dark btn-modern mt-4">

<i class="fa fa-plus"></i>

Simpan User

</button>

</form>

</div>

<!-- DATA USER -->

<div class="box">

<div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">

<div>

<h5 class="fw-bold mb-1">

Data User

</h5>

<small class="text-muted">

Unit {{ Auth::user()->unit }}

</small>

</div>

<form
method="GET"
action="/user"
>

<input
type="text"
name="cari"
class="form-control"
placeholder="Cari user..."
value="{{ request('cari') }}"
>

</form>

</div>

<div class="table-responsive">

<table class="table align-middle">

<thead>

<tr>

<th>No</th>
<th>NIP</th>
<th>Nama</th>
<th>Email</th>
<th>Role</th>
<th>Aksi</th>

</tr>

</thead>

<tbody>

@foreach($users as $key => $user)

<tr>

<td>

{{ $users->firstItem() + $key }}

</td>

<td>

{{ $user->nip }}

</td>

<td class="fw-semibold">

{{ $user->name }}

</td>

<td>

{{ $user->email }}

</td>

<td>

@if($user->role == 'admin_unit')

<span class="badge-admin">

Admin Unit

</span>

@else

<span class="badge-asn">

ASN

</span>

@endif

</td>

<td>

<div class="d-flex gap-2">

<a
href="/edit-user/{{ $user->id }}"
class="btn btn-warning btn-sm rounded-4"
>

<i class="fa fa-pen"></i>

</a>

<a
href="/hapus-asn/{{ $user->id }}"
class="btn btn-danger btn-sm rounded-4"
onclick="return confirm('Hapus user?')"
>

<i class="fa fa-trash"></i>

</a>

</div>

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
```
