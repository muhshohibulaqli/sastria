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

                E-Cuti ASN

            </h2>

            <small class="text-muted">

                Pengajuan cuti elektronik ASN sesuai ketentuan BKN

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

                    Pengajuan Cuti ASN

                </div>

                <small class="text-muted">

                    Hak cuti dihitung otomatis berdasarkan TMT CPNS / PPPK.

                </small>

            </div>

            @if($sudahSetahun)

                <span class="status-green">

                    Hak Aktif :
                    {{ $hakAktif }} Hari

                </span>

            @else

                <span class="status-red">

                    Belum Memenuhi Syarat

                </span>

            @endif

        </div>

        @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif

        @if(session('error'))

            <div class="alert alert-danger">

                {{ session('error') }}

            </div>

        @endif

        <!-- INFORMASI ASN -->

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-body">

                <div class="row">

                    <div class="col-lg-3">

                        <small class="text-muted">

                            TMT CPNS / PPPK

                        </small>

                        <h5 class="fw-bold mt-2">

                            {{ \Carbon\Carbon::parse($biodata->tmt_cpns)->translatedFormat('d F Y') }}

                        </h5>

                    </div>

                    <div class="col-lg-3">

                        <small class="text-muted">

                            Masa Kerja

                        </small>

                        <h5 class="fw-bold mt-2">

                            {{ $masaKerjaText }}

                        </h5>

                    </div>

                    <div class="col-lg-3">

                        <small class="text-muted">

                            Status Hak Cuti

                        </small>

                        @if($sudahSetahun)

                            <h5 class="text-success fw-bold mt-2">

                                Memenuhi Syarat

                            </h5>

                        @else

                            <h5 class="text-danger fw-bold mt-2">

                                Belum 1 Tahun

                            </h5>

                        @endif

                    </div>

                    <div class="col-lg-3">

                        <small class="text-muted">

                            Hak Aktif

                        </small>

                        <h3 class="text-primary fw-bold mt-2">

                            {{ $hakAktif }} Hari

                        </h3>

                    </div>

                </div>

            </div>

        </div>

        <!-- DASHBOARD -->

        <div class="row">

            <div class="col-lg-3 mb-3">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body text-center">

                        <small class="text-muted">

                            N ({{ date('Y') }})

                        </small>

                        <h2 class="text-success fw-bold mt-2">

                            {{ $n }}

                        </h2>

                        <small>

                            Hak Tahun Berjalan

                        </small>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 mb-3">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body text-center">

                        <small class="text-muted">

                            N-1 ({{ date('Y')-1 }})

                        </small>

                        <h2 class="text-info fw-bold mt-2">

                            {{ $n1 }}

                        </h2>

                        <small>

                            Maksimal 6 Hari

                        </small>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 mb-3">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body text-center">

                        <small class="text-muted">

                            N-2 ({{ date('Y')-2 }})

                        </small>

                        <h2 class="text-warning fw-bold mt-2">

                            {{ $n2 }}

                        </h2>

                        <small>

                            Maksimal 6 Hari

                        </small>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 mb-3">

                <div class="card bg-success text-white border-0 shadow-sm h-100">

                    <div class="card-body text-center">

                        <small>

                            Hak Aktif

                        </small>

                        <h1 class="fw-bold my-2">

                            {{ $hakAktif }}

                        </h1>

                        <small>

                            Maksimal 24 Hari

                        </small>

                    </div>

                </div>

            </div>

        </div>

        <div class="alert alert-info mt-4">

            <strong>

                Perhitungan Hak Cuti Tahunan

            </strong>

            <hr>

            Hak Aktif =

            <strong>

                N (12 Hari)

            </strong>

            +

            <strong>

                N-1 (Maks. 6 Hari)

            </strong>

            +

            <strong>

                N-2 (Maks. 6 Hari)

            </strong>

            =

            <strong>

                Maksimal 24 Hari

            </strong>

        </div>

        <hr class="my-5">
        
        <form method="POST"
      action="{{ url('/simpan-cuti') }}"
      enctype="multipart/form-data">

    @csrf

    @if(!$sudahSetahun)

    <div class="alert alert-warning">

        <i class="fa fa-exclamation-triangle me-2"></i>

        Anda belum memenuhi syarat pengajuan cuti tahunan.

        Hak cuti diberikan setelah masa kerja mencapai
        <strong>1 Tahun</strong>
        berdasarkan
        <strong>TMT CPNS / PPPK</strong>.

    </div>

    @endif

    <div class="row g-4">

        <div class="col-lg-6">

            <label class="fw-bold mb-2">

                Nomor Pengajuan

            </label>

            <input
                type="text"
                class="form-control"
                value="Otomatis Setelah Disimpan"
                readonly>

        </div>

        <div class="col-lg-6">

            <label class="fw-bold mb-2">

                Jenis Cuti

            </label>

            <select
                name="jenis_cuti"
                class="form-select"
                required
                {{ !$sudahSetahun ? 'disabled' : '' }}>

                <option value="">

                    -- Pilih Jenis Cuti --

                </option>

                <option value="Cuti Tahunan">

                    Cuti Tahunan (Hak Aktif)

                </option>

                <option value="Cuti Besar">

                    Cuti Besar (90 Hari)

                </option>

                <option value="Cuti Sakit">

                    Cuti Sakit (365 Hari)

                </option>

                <option value="Cuti Melahirkan">

                    Cuti Melahirkan (90 Hari)

                </option>

                <option value="Cuti Karena Alasan Penting">

                    Cuti Karena Alasan Penting (30 Hari)

                </option>

                <option value="Cuti di Luar Tanggungan Negara">

                    Cuti di Luar Tanggungan Negara (365 Hari)

                </option>

            </select>

        </div>

        <div class="col-lg-6">

            <label class="fw-bold mb-2">

                Tanggal Mulai

            </label>

            <input
                type="date"
                name="tanggal_mulai"
                class="form-control"
                required
                {{ !$sudahSetahun ? 'disabled' : '' }}>

        </div>

        <div class="col-lg-6">

            <label class="fw-bold mb-2">

                Tanggal Selesai

            </label>

            <input
                type="date"
                name="tanggal_selesai"
                class="form-control"
                required
                {{ !$sudahSetahun ? 'disabled' : '' }}>

        </div>

        <div class="col-12">

            <label class="fw-bold mb-2">

                Alasan Pengajuan Cuti

            </label>

            <textarea
                name="alasan"
                rows="4"
                class="form-control"
                placeholder="Masukkan alasan pengajuan cuti..."
                required
                {{ !$sudahSetahun ? 'disabled' : '' }}></textarea>

        </div>

        <div class="col-lg-6">

            <label class="fw-bold mb-2">

                Hak Cuti Aktif

            </label>

            <input
                type="text"
                class="form-control bg-light"
                value="{{ $hakAktif }} Hari"
                readonly>

        </div>

        <div class="col-lg-6">

            <label class="fw-bold mb-2">

                Perhitungan Hak

            </label>

            <input
                type="text"
                class="form-control bg-light"
                value="N={{ $n }} | N-1={{ $n1 }} | N-2={{ $n2 }}"
                readonly>

        </div>

    </div>

    <hr class="my-4">

    <h5 class="fw-bold mb-3">

        Formulir Cuti ASN

    </h5>

    <div class="row">

        <div class="col-md-6 mb-3">

            <a href="{{ url('/download-form-cuti/pns') }}"
               class="btn btn-outline-primary w-100">

                <i class="fa fa-download"></i>

                Download Template PNS

            </a>

        </div>

        <div class="col-md-6 mb-3">

            <a href="{{ url('/download-form-cuti/pppk') }}"
               class="btn btn-outline-success w-100">

                <i class="fa fa-download"></i>

                Download Template PPPK

            </a>

        </div>

    </div>

    <div class="mb-4">

        <label class="fw-bold mb-2">

            Upload Formulir Cuti

        </label>

        <input
            type="file"
            name="file_formulir"
            class="form-control"
            accept=".pdf"
            {{ !$sudahSetahun ? 'disabled' : '' }}>

        <small class="text-muted">

            Upload file PDF maksimal 5 MB.

        </small>

    </div>

    <button
        type="submit"
        class="btn btn-success btn-lg"
        {{ !$sudahSetahun ? 'disabled' : '' }}>

        <i class="fa fa-paper-plane"></i>

        Ajukan Cuti

    </button>

</form>

<hr class="my-5">

<!-- RIWAYAT CUTI -->

<h4 class="fw-bold mb-4">

    Riwayat Pengajuan Cuti

</h4>

<div class="table-responsive">

    <table class="table align-middle table-hover">

        <thead>

            <tr>

                <th width="60">

                    No

                </th>

                <th>

                    Nomor Surat

                </th>

                <th>

                    Jenis Cuti

                </th>

                <th>

                    Periode

                </th>

                <th class="text-center">

                    Hari

                </th>

                <th class="text-center">

                    Status

                </th>

                <th class="text-center">

                    Dokumen

                </th>

                <th class="text-center" width="170">

                    Aksi

                </th>

            </tr>

        </thead>

        <tbody>

        @forelse($cutis as $cuti)

            <tr>

                <td>

                    {{ $loop->iteration }}

                </td>

                <td>

                    <div class="fw-bold">

                        {{ $cuti->nomor_surat }}

                    </div>

                    <small class="text-muted">

                        {{ $cuti->created_at->format('d M Y') }}

                    </small>

                </td>

                <td>

                    {{ $cuti->jenis_cuti }}

                </td>

                <td>

                    {{ \Carbon\Carbon::parse($cuti->tanggal_mulai)->format('d/m/Y') }}

                    <br>

                    s/d

                    <br>

                    {{ \Carbon\Carbon::parse($cuti->tanggal_selesai)->format('d/m/Y') }}

                </td>

                <td class="text-center">

                    <span class="badge bg-primary">

                        {{ $cuti->jumlah_hari }}

                        Hari

                    </span>

                </td>

                <td class="text-center">

                    @if($cuti->status=='menunggu')

                        <span class="badge bg-warning text-dark">

                            Menunggu

                        </span>

                    @elseif($cuti->status=='disetujui')

                        <span class="badge bg-success">

                            Disetujui

                        </span>

                    @else

                        <span class="badge bg-danger">

                            Ditolak

                        </span>

                    @endif

                </td>

                <td class="text-center">

                    @if($cuti->file_final)

                        <a href="{{ asset('storage/'.$cuti->file_final) }}"
                           target="_blank"
                           class="btn btn-danger btn-sm"
                           title="Download Surat Cuti">

                            <i class="fas fa-file-pdf"></i>

                        </a>

                    @elseif($cuti->file_formulir)

                        <a href="{{ asset('storage/'.$cuti->file_formulir) }}"
                           target="_blank"
                           class="btn btn-secondary btn-sm"
                           title="Lihat Formulir">

                            <i class="fas fa-file-upload"></i>

                        </a>

                    @else

                        -

                    @endif

                </td>

                <td>

                    <div class="d-flex justify-content-center gap-2">

                        @if($cuti->status=='menunggu')

                            <a href="{{ url('/hapus-cuti/'.$cuti->id) }}"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Batalkan pengajuan cuti?')">

                                <i class="fas fa-trash"></i>

                            </a>

                        @endif

                        @if($cuti->status=='ditolak')

                            <button
                                class="btn btn-warning btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#catatan{{ $cuti->id }}">

                                <i class="fas fa-comment"></i>

                            </button>

                        @endif

                        @if($cuti->file_final)

                            <a href="{{ asset('storage/'.$cuti->file_final) }}"
                               target="_blank"
                               class="btn btn-primary btn-sm">

                                <i class="fas fa-download"></i>

                            </a>

                        @endif

                    </div>

                </td>

            </tr>

            <!-- MODAL CATATAN -->

            <div class="modal fade"

                 id="catatan{{ $cuti->id }}"

                 tabindex="-1">

                <div class="modal-dialog">

                    <div class="modal-content">

                        <div class="modal-header">

                            <h5 class="modal-title">

                                Catatan Admin

                            </h5>

                            <button
                                class="btn-close"
                                data-bs-dismiss="modal"></button>

                        </div>

                        <div class="modal-body">

                            {{ $cuti->catatan_admin ?? '-' }}

                        </div>

                    </div>

                </div>

            </div>

        @empty

            <tr>

                <td colspan="8" class="text-center py-5">

                    <i class="fas fa-folder-open fa-3x text-secondary mb-3"></i>

                    <br><br>

                    Belum ada pengajuan cuti.

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

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

