<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0"
>

<title>
Profil ASN
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

/* CARD */

.card-box{

background:white;
border-radius:35px;
padding:35px;
box-shadow:
0 10px 40px rgba(0,0,0,0.08),
inset 0 1px 0 rgba(255,255,255,0.5);
max-width:850px;

}

/* FORM */

.form-label{

font-weight:bold;
margin-bottom:10px;

}

.form-control{

border-radius:16px;
padding:14px;

}

.form-control:disabled{

background:#f1f5f9;
font-weight:bold;

}

/* BUTTON */

.btn-update{

background:linear-gradient(90deg,#2563eb,#3b82f6);
color:white;
border:none;
border-radius:16px;
padding:14px 24px;
font-weight:bold;
transition:.3s;

}

.btn-update:hover{

transform:translateY(-2px);
box-shadow:0 10px 20px rgba(37,99,235,0.3);

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

.card-box{

padding:20px;
border-radius:25px;

}

.btn-update{

width:100%;

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

Profil ASN

</h2>

<small class="text-muted">

Kelola informasi akun ASN

</small>

</div>

<div class="user-box">

{{ Auth::user()->name }}

</div>

</div>

<!-- CARD -->

<div class="card-box">

@if(session('success'))

<div class="alert alert-success">

{{ session('success') }}

</div>

@endif

<form
method="POST"
action="/update-profil"
>

@csrf

<!-- NIP -->

<div class="mb-4">

<label class="form-label">

NIP

</label>

<input
type="text"
class="form-control"
value="{{ Auth::user()->nip }}"
disabled
>

</div>

<!-- NAMA -->

<div class="mb-4">

<label class="form-label">

Nama ASN

</label>

<input
type="text"
class="form-control"
value="{{ Auth::user()->name }}"
disabled
>

</div>

<!-- UNIT KERJA -->

<div class="mb-4">

<label class="form-label">

Unit Kerja

</label>

<input
type="text"
class="form-control"
value="{{ Auth::user()->unit }}"
disabled
>

</div>

<!-- EMAIL -->

<div class="mb-4">

<label class="form-label">

Email

</label>

<input
type="email"
name="email"
class="form-control"
value="{{ Auth::user()->email }}"
required
>

</div>

<!-- PASSWORD -->

<div class="mb-4">

<label class="form-label">

Password Baru

</label>

<input
type="password"
name="password"
class="form-control"
placeholder="Kosongkan bila tidak ingin mengganti password"
>

</div>

<button class="btn-update">

<i class="fa fa-save"></i>

Update Profil

</button>

</form>

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