<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0"
>

<title>
Dashboard Admin Unit
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

/* MAIN CARD */

.main-card{

background:white;
border-radius:35px;
padding:35px;
box-shadow:
0 10px 40px rgba(0,0,0,0.08),
inset 0 1px 0 rgba(255,255,255,0.5);

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

<!-- TOPBAR -->

<div class="topbar">

<div>

<h2>

Dashboard Admin Unit

</h2>

<small class="text-muted">

Monitoring sistem ASN unit kerja

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

25

</h3>

<small>

Total ASN Unit

</small>

</div>

<div class="stats-card card-green">

<h3>

18

</h3>

<small>

Upload Lengkap

</small>

</div>

<div class="stats-card card-yellow">

<h3>

7

</h3>

<small>

Menunggu Validasi

</small>

</div>

</div>

<!-- INFORMASI -->

<div class="main-card">

<h4 class="fw-bold mb-3">

Selamat Datang

</h4>

<p class="text-muted">

Dashboard Admin Unit digunakan untuk memonitor data ASN,
pengajuan cuti, upload kinerja & absensi,
serta validasi data unit kerja.

</p>

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