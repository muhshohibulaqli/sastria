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

<!-- =======================================================
CONTENT
======================================================= -->
<div class="content">

    <!-- TOPBAR -->
    <div class="topbar d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">

                Kendali Kenaikan Gaji Berkala

            </h2>

            <small class="text-muted">

                Monitoring Jadwal KGB ASN

            </small>

        </div>

        <div class="user-box">

            <i class="fa-solid fa-user-circle me-2"></i>

            {{ Auth::user()->name }}

        </div>

    </div>

    <!-- STATISTIK -->
    <div class="row g-3 mb-4">

        <div class="col-lg-3 col-md-6">

            <div class="stats-card card-blue">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <h3>{{ $totalKgb }}</h3>

                        <small>Total KGB</small>

                    </div>

                    <i class="fa-solid fa-users fa-2x opacity-50"></i>

                </div>

            </div>

        </div>

        <div class="col-lg-3 col-md-6">

            <div class="stats-card card-green">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <h3>{{ $sudahGenerate }}</h3>

                        <small>Sudah Generate</small>

                    </div>

                    <i class="fa-solid fa-circle-check fa-2x opacity-50"></i>

                </div>

            </div>

        </div>

        <div class="col-lg-3 col-md-6">

            <div class="stats-card card-yellow">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <h3>{{ $belumGenerate }}</h3>

                        <small>Belum Generate</small>

                    </div>

                    <i class="fa-solid fa-clock fa-2x opacity-50"></i>

                </div>

            </div>

        </div>

        <div class="col-lg-3 col-md-6">

            <div class="stats-card card-red">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <h3>{{ $jatuhTempo }}</h3>

                        <small>Jatuh Tempo Bulan Ini</small>

                    </div>

                    <i class="fa-solid fa-calendar-day fa-2x opacity-50"></i>

                </div>

            </div>

        </div>

    </div>

    <!-- MONITORING -->
    <div class="row g-3 mb-4">

        <div class="col-lg-4">

            <div class="main-card border-start border-4 border-danger h-100">

                <small class="text-muted">

                    BULAN INI

                </small>

                <h4 class="mt-2 mb-1">

                    {{ now()->translatedFormat('F Y') }}

                </h4>

                <h2 class="text-danger">

                    {{ $bulanIni }}

                </h2>

                <small>

                    ASN akan KGB bulan ini

                </small>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="main-card border-start border-4 border-warning h-100">

                <small class="text-muted">

                    BULAN DEPAN

                </small>

                <h4 class="mt-2 mb-1">

                    {{ now()->copy()->addMonth()->translatedFormat('F Y') }}

                </h4>

                <h2 class="text-warning">

                    {{ $bulanDepan }}

                </h2>

                <small>

                    ASN akan KGB bulan depan

                </small>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="main-card border-start border-4 border-success h-100">

                <small class="text-muted">

                    DUA BULAN LAGI

                </small>

                <h4 class="mt-2 mb-1">

                    {{ now()->copy()->addMonths(2)->translatedFormat('F Y') }}

                </h4>

                <h2 class="text-success">

                    {{ $duaBulan }}

                </h2>

                <small>

                    ASN akan KGB dua bulan lagi

                </small>

            </div>

        </div>

    </div>

    <!-- INFORMASI -->
    <div class="main-card mb-4">

        <div class="alert alert-primary mb-0">

            <i class="fa-solid fa-circle-info me-2"></i>

            Data pada menu ini diambil otomatis dari
            <strong>Data KGB yang telah disetujui</strong>.
            Admin dapat melakukan monitoring jadwal KGB,
            kemudian Generate Surat Pengantar maupun SK KGB.

        </div>

    </div>
    
        <!-- =======================================================
        FILTER DATA
    ======================================================== -->

    @php

        $bulan = [

            1  => 'Januari',
            2  => 'Februari',
            3  => 'Maret',
            4  => 'April',
            5  => 'Mei',
            6  => 'Juni',
            7  => 'Juli',
            8  => 'Agustus',
            9  => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember',

        ];

    @endphp

    <div class="main-card mb-4">

        <form
            action="{{ route('kendali-kgb') }}"
            method="GET">

            <div class="row g-3 align-items-end">

                <!-- Tahun -->

                <div class="col-lg-2">

                    <label class="form-label">

                        Tahun

                    </label>

                    <select
                        name="tahun"
                        class="form-select">

                        <option value="">

                            Semua

                        </option>

                        @for($t=date('Y')-3;$t<=date('Y')+5;$t++)

                            <option
                                value="{{ $t }}"
                                {{ request('tahun')==$t ? 'selected' : '' }}>

                                {{ $t }}

                            </option>

                        @endfor

                    </select>

                </div>

                <!-- Bulan -->

                <div class="col-lg-2">

                    <label class="form-label">

                        Bulan KGB

                    </label>

                    <select
                        name="bulan"
                        class="form-select">

                        <option value="">

                            Semua

                        </option>

                        @foreach($bulan as $id=>$nama)

                            <option
                                value="{{ $id }}"
                                {{ request('bulan')==$id ? 'selected' : '' }}>

                                {{ $nama }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <!-- Nama -->

                <div class="col-lg-5">

                    <label class="form-label">

                        Nama / NIP ASN

                    </label>

                    <input
                        type="text"
                        name="search"
                        class="form-control"
                        value="{{ request('search') }}"
                        placeholder="Cari Nama atau NIP ASN">

                </div>

                <!-- Tombol -->

                <div class="col-lg-3 d-grid">

                    <button
                        class="btn btn-primary">

                        <i class="fa-solid fa-search me-2"></i>

                        Tampilkan Data

                    </button>

                </div>

            </div>

        </form>

        <hr>

        <!-- QUICK FILTER -->

        <div class="d-flex flex-wrap gap-2">

            <a
                href="{{ route('kendali-kgb') }}"
                class="btn btn-outline-secondary">

                <i class="fa-solid fa-list me-2"></i>

                Semua Data

            </a>

            <a
                href="{{ route('kendali-kgb',['tahun'=>date('Y'),'bulan'=>date('n')]) }}"
                class="btn btn-outline-danger">

                <i class="fa-solid fa-calendar-day me-2"></i>

                Bulan Ini

            </a>

            <a
                href="{{ route('kendali-kgb',['tahun'=>date('Y'),'bulan'=>date('n')+1]) }}"
                class="btn btn-outline-warning">

                <i class="fa-solid fa-calendar-plus me-2"></i>

                Bulan Depan

            </a>

            <a
                href="{{ route('kendali-kgb',['tahun'=>date('Y'),'bulan'=>date('n')+2]) }}"
                class="btn btn-outline-success">

                <i class="fa-solid fa-calendar-week me-2"></i>

                Dua Bulan Lagi

            </a>

        </div>

    </div>
    
    <!-- =======================================================
    DATA KENDALI KGB
======================================================= -->

<div class="main-card">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h4 class="mb-1">

                Data Kendali KGB

            </h4>

            <small class="text-muted">

                Monitoring ASN Yang Akan Melaksanakan KGB

            </small>

        </div>

        <span class="badge bg-primary fs-6">

            {{ $kgbs->total() }} Data

        </span>

    </div>

    <div class="table-responsive">

        <table class="table table-hover align-middle">

            <thead>

                <tr>

                    <th width="60" class="text-center">
                        No
                    </th>

                    <th>
                        ASN
                    </th>

                    <th>
                        Pangkat / Gol
                    </th>

                    <th class="text-center">
                        TMT
                    </th>

                    <th class="text-center">
                        KGB YAD
                    </th>

                    <th class="text-center">
                        Status
                    </th>

                    <th width="280" class="text-center">
                        Dokumen
                    </th>

                </tr>

            </thead>

            <tbody>

            @forelse($kgbs as $item)

                <tr>

                    <td class="text-center">

                        {{ $loop->iteration + $kgbs->firstItem() - 1 }}

                    </td>

                    <td>

                        <strong>

                            {{ $item->user->name }}

                        </strong>

                        <br>

                        <small class="text-muted">

                            {{ $item->user->nip }}

                        </small>

                    </td>

                    <td>

                        {{ $item->pangkat_golongan }}

                    </td>

                    <td class="text-center">

                        {{ $item->tmt_baru
                            ? \Carbon\Carbon::parse($item->tmt_baru)->format('d-m-Y')
                            : '-'
                        }}

                    </td>

                    <td class="text-center">

                        @php

                            $tgl = \Carbon\Carbon::parse($item->kgb_yad);

                        @endphp

                        @if($tgl->isPast())

                            <span class="badge bg-danger">

                                {{ $tgl->format('d-m-Y') }}

                            </span>

                        @elseif($tgl->diffInDays(now())<=30)

                            <span class="badge bg-warning text-dark">

                                {{ $tgl->format('d-m-Y') }}

                            </span>

                        @else

                            <span class="badge bg-success">

                                {{ $tgl->format('d-m-Y') }}

                            </span>

                        @endif

                    </td>

                    <td class="text-center">

                        @if($item->status_generate=="Sudah")

                            <span class="badge bg-success">

                                Sudah Generate

                            </span>

                        @else

                            <span class="badge bg-warning text-dark">

                                Belum Generate

                            </span>

                        @endif

                    </td>

                    <td class="text-center">

                        @if($item->status_generate=="Sudah")

                            <a
                                href="{{ route('kendali-kgb.surat',$item->id) }}"
                                class="btn btn-primary btn-sm">

                                <i class="fa-solid fa-file-word"></i>

                            </a>

                            <a
                                href="{{ route('kendali-kgb.sk',$item->id) }}"
                                class="btn btn-success btn-sm">

                                <i class="fa-solid fa-file-word"></i>

                            </a>

                            <a
                                href="{{ route('kendali-kgb.batal',$item->id) }}"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Batalkan Generate?')">

                                <i class="fa-solid fa-rotate-left"></i>

                            </a>

                        @else

                            <a
                                href="{{ route('kendali-kgb.generate',$item->id) }}"
                                class="btn btn-warning btn-sm">

                                <i class="fa-solid fa-gears me-1"></i>

                                Generate

                            </a>

                        @endif

                    </td>

                </tr>

            @empty

                <tr>

                    <td
                        colspan="7"
                        class="text-center py-5">

                        <i class="fa-solid fa-folder-open fa-3x text-secondary mb-3"></i>

                        <br>

                        Tidak ada data Kendali KGB.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    <div class="mt-4">

        {{ $kgbs->links() }}

    </div>

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

