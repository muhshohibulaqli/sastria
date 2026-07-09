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

<a href="/dashboard">
<i class="fa-solid fa-gauge-high"></i>
Dashboard
</a>

<div class="menu-title">
Data Master
</div>

<a href="/data-karyawan">
<i class="fa-solid fa-users"></i>
Data Karyawan
</a>

<a href="/data-kgb">
<i class="fa-solid fa-money-bill-trend-up"></i>
Data KGB
</a>

<a href="/data-admin-unit">
<i class="fa-solid fa-user-shield"></i>
Data Admin Unit
</a>

<a href="/user">
<i class="fa-solid fa-user-gear"></i>
Data User
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

<div class="main-card">

<div class="d-flex gap-2 mb-4">

<a
href="/data-karyawan?page={{ request('page',1) }}"
class="btn btn-secondary"
>

<i class="fa fa-arrow-left"></i>

Kembali

</a>

<a
href="/karyawan/pdf/{{ $user->id }}"
target="_blank"
class="btn btn-danger"
>

<i class="fa fa-file-pdf"></i>

Cetak Portofolio ASN

</a>

</div>

<h3 class="fw-bold mb-4">
Detail Karyawan ASN
</h3>

<div class="row mb-5">

<div class="col-lg-3 text-center">

@if($biodata && $biodata->foto)

<img
src="{{ asset('storage/'.$biodata->foto) }}"
class="img-fluid rounded-4 shadow"
style="max-height:350px"
>

@else

<img
src="https://via.placeholder.com/300x400"
class="img-fluid rounded-4 shadow"
>

@endif

</div>

<div class="col-lg-9">

<div class="card border-0 shadow-sm rounded-4">

<div
class="card-header text-white"
style="background:#0f172a;"
>

<h5 class="mb-0">
Identitas ASN
</h5>

</div>

<div class="card-body">

<div class="row">

<div class="col-md-6">

<table class="table">

<tr>
<th width="220">Nama Lengkap</th>
<td>{{ $user->name }}</td>
</tr>

<tr>
<th>Gelar Depan</th>
<td>{{ $biodata->gelar_depan ?? '-' }}</td>
</tr>

<tr>
<th>Gelar Belakang</th>
<td>{{ $biodata->gelar_belakang ?? '-' }}</td>
</tr>

<tr>
<th>Jenis Kelamin</th>
<td>{{ $biodata->jenis_kelamin ?? '-' }}</td>
</tr>

<tr>
<th>Agama</th>
<td>{{ $biodata->agama ?? '-' }}</td>
</tr>

<tr>
<th>Tempat Lahir</th>
<td>{{ $biodata->tempat_lahir ?? '-' }}</td>
</tr>

<tr>
<th>Tanggal Lahir</th>
<td>{{ $biodata->tanggal_lahir ?? '-' }}</td>
</tr>

<tr>
<th>Status Nikah</th>
<td>{{ $biodata->status_nikah ?? '-' }}</td>
</tr>

</table>

</div>

<div class="col-md-6">

<table class="table">

<tr>
<th width="220">Kewarganegaraan</th>
<td>{{ $biodata->warga_negara ?? '-' }}</td>
</tr>

<tr>
<th>Unit Kerja</th>
<td>{{ $biodata->unit_kerja ?? '-' }}</td>
</tr>

<tr>
<th>Status Aktif</th>
<td>{{ $biodata->status_aktif ?? '-' }}</td>
</tr>

<tr>
<th>Status Pegawai</th>
<td>{{ $biodata->status_pegawai ?? '-' }}</td>
</tr>

<tr>
<th>Karpeg</th>
<td>{{ $biodata->karpeg ?? '-' }}</td>
</tr>

<tr>
<th>Taspen</th>
<td>{{ $biodata->taspen ?? '-' }}</td>
</tr>

<tr>
<th>NIP</th>
<td>{{ $biodata->nip_pppk ?? '-' }}</td>
</tr>

</table>

</div>

</div>

</div>

</div>

</div>

</div>

<!-- KONTAK -->

<div class="card shadow-sm border-0 rounded-4 mb-4">

<div
class="card-header text-white"
style="background:#0f172a;"
>

<h5 class="mb-0">
Kontak & Alamat
</h5>

</div>

<div class="card-body">

<table class="table">

<tr>
<th width="250">HP</th>
<td>{{ $biodata->hp1 ?? '-' }}</td>
</tr>

<tr>
<th>Email Pribadi</th>
<td>{{ $biodata->email_pribadi ?? '-' }}</td>
</tr>

<tr>
<th>Alamat</th>
<td>{{ $biodata->alamat ?? '-' }}</td>
</tr>

<tr>
<th>RT/RW</th>
<td>{{ $biodata->rt_rw ?? '-' }}</td>
</tr>

<tr>
<th>Kelurahan</th>
<td>{{ $biodata->kelurahan ?? '-' }}</td>
</tr>

<tr>
<th>Kode Pos</th>
<td>{{ $biodata->kode_pos ?? '-' }}</td>
</tr>

</table>

</div>

</div>

<!-- DATA FISIK -->

<div class="card shadow-sm border-0 rounded-4 mb-4">

<div
class="card-header text-white"
style="background:#0f172a;"
>

<h5 class="mb-0">
Data Fisik
</h5>

</div>

<div class="card-body">

<table class="table">

<tr>
<th width="250">Golongan Darah</th>
<td>{{ $biodata->golongan_darah ?? '-' }}</td>
</tr>

<tr>
<th>Tinggi Badan</th>
<td>{{ $biodata->tinggi_badan ?? '-' }}</td>
</tr>

<tr>
<th>Berat Badan</th>
<td>{{ $biodata->berat_badan ?? '-' }}</td>
</tr>

<tr>
<th>Hobi</th>
<td>{{ $biodata->hobby ?? '-' }}</td>
</tr>

<tr>
<th>Ukuran Baju</th>
<td>{{ $biodata->ukuran_baju ?? '-' }}</td>
</tr>

</table>

</div>

</div>

<!-- DATA BANK -->

<div class="card shadow-sm border-0 rounded-4 mb-4">

<div
class="card-header text-white"
style="background:#0f172a;"
>

<h5 class="mb-0">
Data Bank
</h5>

</div>

<div class="card-body">

<table class="table">

<tr>
<th width="250">Nama Bank</th>
<td>{{ $biodata->nama_bank ?? '-' }}</td>
</tr>

<tr>
<th>Nomor Rekening</th>
<td>{{ $biodata->no_rekening ?? '-' }}</td>
</tr>

<tr>
<th>Atas Nama Rekening</th>
<td>{{ $biodata->atas_nama_rekening ?? '-' }}</td>
</tr>

<tr>
<th>Cabang Bank</th>
<td>{{ $biodata->cabang_bank ?? '-' }}</td>
</tr>

</table>

</div>

</div>

<!-- DOKUMEN -->

<div class="card shadow-sm border-0 rounded-4 mb-4">

<div
class="card-header text-white"
style="background:#0f172a;"
>

<h5 class="mb-0">
Dokumen ASN
</h5>

</div>

<div class="card-body">

<div class="row g-3">

@php

$dokumen = [

'KTP' => $biodata->file_ktp ?? null,
'KK' => $biodata->file_kk ?? null,
'NPWP' => $biodata->file_npwp ?? null,
'Karpeg' => $biodata->file_karpeg ?? null,
'Taspen' => $biodata->file_taspen ?? null,
'Rekening' => $biodata->file_rekening ?? null,
'SK CPNS' => $biodata->file_sk_cpns ?? null,

];

@endphp

@foreach($dokumen as $nama => $file)

<div class="col-md-3">

<div class="border rounded-4 p-3 text-center">

<h6>{{ $nama }}</h6>

@if($file)

<a
href="{{ asset('storage/'.$file) }}"
target="_blank"
class="btn btn-primary btn-sm"
>
<i class="fa fa-eye"></i>
Lihat PDF
</a>

@else

<span class="badge bg-secondary">
Tidak Ada File
</span>

@endif

</div>

</div>

@endforeach

</div>

</div>

</div>

<!-- PENDIDIKAN -->

<div class="card shadow-sm border-0 rounded-4 mb-4">

<div
class="card-header text-white"
style="background:#0f172a;"
>

<h5 class="mb-0">

Data Pendidikan

</h5>

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-bordered align-middle">

<thead class="table-light">

<tr>
<th width="10%">Jenjang</th>
<th width="27%">Institusi</th>
<th>Prodi</th>
<th width="10%">IPK</th>
<th width="10%">Status</th>
<th width="250">Aksi</th>
</tr>

</thead>

<tbody>

@forelse($pendidikans as $item)

<tr>

<td>{{ $item->jenjang_pendidikan }}</td>

<td>{{ $item->nama_institusi }}</td>

<td>{{ $item->prodi }}</td>

<td>{{ $item->ipk }}</td>

<td>

@if($item->validasi_admin_unit=='Disetujui')

<span class="badge bg-success">
Disetujui
</span>

@elseif($item->validasi_admin_unit=='Ditolak')

<span class="badge bg-danger">
Ditolak
</span>

@else

<span class="badge bg-warning text-dark">
Belum Validasi
</span>

@endif

</td>

<td>

<div class="d-flex gap-1 flex-wrap">

<button
type="button"
class="btn btn-primary btn-sm"
onclick="togglePendidikan({{ $item->id }})"

>

<i class="fa fa-eye"></i>
View </button>

@if($item->validasi_admin_unit=='Belum Validasi')

<form
method="POST"
action="/validasi-pendidikan/{{ $item->id }}"
class="d-inline"
>

@csrf

<button
type="submit"
name="status"
value="Disetujui"
class="btn btn-success btn-sm"

>

Setujui </button>

<button
type="submit"
name="status"
value="Ditolak"
class="btn btn-danger btn-sm"

>

Tolak </button>

</form>

@else

<form
method="POST"
action="/validasi-pendidikan/{{ $item->id }}"
class="d-inline"
>

@csrf

<button
type="submit"
name="status"
value="Belum Validasi"
class="btn btn-warning btn-sm"

>

Batal Validasi </button>

</form>

@endif

</div>

</td>

</tr>

<tr
id="detailPendidikan{{ $item->id }}"
style="display:none;"
>

<td colspan="6">

<div class="card border-0 shadow-sm">

<div
class="card-header text-white"
style="background:#0f172a;"
>

<h5 class="mb-0">
Detail Pendidikan
</h5>

<button
type="button"
class="btn btn-light btn-sm"
onclick="togglePendidikan({{ $item->id }})"

>

<i class="fa fa-minus"></i>
Minimize </button>

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-bordered">

<tr>
<th width="300">Jenjang Pendidikan</th>
<td>{{ $item->jenjang_pendidikan }}</td>
</tr>

<tr>
<th>Nama Institusi</th>
<td>{{ $item->nama_institusi }}</td>
</tr>

<tr>
<th>Fakultas</th>
<td>{{ $item->fakultas }}</td>
</tr>

<tr>
<th>Program Studi</th>
<td>{{ $item->prodi }}</td>
</tr>

<tr>
<th>Jurusan</th>
<td>{{ $item->jurusan }}</td>
</tr>

<tr>
<th>Lokasi</th>
<td>{{ $item->lokasi }}</td>
</tr>

<tr>
<th>Alamat Institusi</th>
<td>{{ $item->alamat_institusi }}</td>
</tr>

<tr>
<th>Kepala Institusi</th>
<td>{{ $item->kepala_institusi }}</td>
</tr>

<tr>
<th>Judul Penelitian</th>
<td>{{ $item->judul_penelitian }}</td>
</tr>

<tr>
<th>Gelar</th>
<td>{{ $item->gelar }}</td>
</tr>

<tr>
<th>Singkatan Gelar</th>
<td>{{ $item->singkatan_gelar }}</td>
</tr>

<tr>
<th>Letak Gelar</th>
<td>{{ $item->letak_gelar }}</td>
</tr>

<tr>
<th>Nomor Ijazah</th>
<td>{{ $item->nomor_ijazah }}</td>
</tr>

<tr>
<th>Tanggal Ijazah</th>
<td>{{ $item->tanggal_ijazah }}</td>
</tr>

<tr>
<th>Tahun Masuk</th>
<td>{{ $item->tahun_masuk }}</td>
</tr>

<tr>
<th>Tahun Lulus</th>
<td>{{ $item->tahun_lulus }}</td>
</tr>

<tr>
<th>IPK</th>
<td>{{ $item->ipk }}</td>
</tr>

<tr>
<th>Status Validasi</th>
<td>{{ $item->validasi_admin_unit }}</td>
</tr>

<tr>
<th>File Ijazah</th>
<td>

@if($item->file_ijazah)

<a
href="{{ asset('storage/'.$item->file_ijazah) }}"
target="_blank"
class="btn btn-danger btn-sm"

>

<i class="fa fa-file-pdf"></i>
Lihat Ijazah </a>

@endif

</td>
</tr>

<tr>
<th>File Transkrip</th>
<td>

@if($item->file_transkrip)

<a
href="{{ asset('storage/'.$item->file_transkrip) }}"
target="_blank"
class="btn btn-info btn-sm text-white"

>

<i class="fa fa-file-pdf"></i>
Lihat Transkrip </a>

@endif

</td>
</tr>

</table>

</div>

</div>

</div>

</td>

</tr>

@empty

<tr>
<td colspan="6" class="text-center">
Belum ada data pendidikan
</td>
</tr>

@endforelse

</tbody>

</table>

</div>

</div>

</div>

<script>

function togglePendidikan(id)
{
    let detail = document.getElementById('detailPendidikan'+id);

    if(detail.style.display === 'none' || detail.style.display === '')
    {
        detail.style.display = 'table-row';
    }
    else
    {
        detail.style.display = 'none';
    }
}

</script>


<!-- PANGKAT -->

<div class="card shadow-sm border-0 rounded-4 mb-4">

<div
class="card-header text-white"
style="background:#0f172a;"
>

<h5 class="mb-0">

Data Pangkat

</h5>

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-bordered align-middle">

<thead class="table-light">

<tr>
<th width="23%">Pangkat</th>
<th width="11%">TMT</th>
<th>No SK</th>
<th width="10%">Status</th>
<th width="250">Aksi</th>
</tr>

</thead>

<tbody>

@forelse($pangkats as $item)

<tr>

<td>{{ $item->nama_pangkat }}</td>

<td>{{ $item->tmt_pangkat }}</td>

<td>{{ $item->no_sk }}</td>

<td>

@if($item->validasi_admin_unit=='Disetujui')

<span class="badge bg-success">
Disetujui
</span>

@elseif($item->validasi_admin_unit=='Ditolak')

<span class="badge bg-danger">
Ditolak
</span>

@else

<span class="badge bg-warning text-dark">
Belum Validasi
</span>

@endif

</td>

<td>

<div class="d-flex gap-1 flex-wrap">

<button
type="button"
class="btn btn-primary btn-sm"
onclick="togglePangkat({{ $item->id }})"

>

<i class="fa fa-eye"></i>
View </button>

@if($item->validasi_admin_unit=='Belum Validasi')

<form
method="POST"
action="/validasi-pangkat/{{ $item->id }}"
class="d-inline"
>

@csrf

<button
type="submit"
name="status"
value="Disetujui"
class="btn btn-success btn-sm"

>

Setujui </button>

<button
type="submit"
name="status"
value="Ditolak"
class="btn btn-danger btn-sm"

>

Tolak </button>

</form>

@else

<form
method="POST"
action="/validasi-pangkat/{{ $item->id }}"
class="d-inline"
>

@csrf

<button
type="submit"
name="status"
value="Belum Validasi"
class="btn btn-warning btn-sm"

>

Batal Validasi </button>

</form>

@endif

</div>

</td>

</tr>

<tr
id="detailPangkat{{ $item->id }}"
style="display:none;"
>

<td colspan="5">

<div class="card border-0 shadow-sm">

<div
class="card-header text-white"
style="background:#0f172a;"
>

<h5 class="mb-0">
Detail Pangkat
</h5>

<button
type="button"
class="btn btn-light btn-sm"
onclick="togglePangkat({{ $item->id }})"

>

<i class="fa fa-minus"></i>
Minimize </button>

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-bordered">

<tr>
<th width="300">Jenis SK</th>
<td>{{ $item->jenis_sk }}</td>
</tr>

<tr>
<th>Jenis Pangkat</th>
<td>{{ $item->jenis_pangkat }}</td>
</tr>

<tr>
<th>Nama Pangkat</th>
<td>{{ $item->nama_pangkat }}</td>
</tr>

<tr>
<th>TMT Pangkat</th>
<td>{{ $item->tmt_pangkat }}</td>
</tr>

<tr>
<th>Nomor SK</th>
<td>{{ $item->no_sk }}</td>
</tr>

<tr>
<th>Tanggal SK</th>
<td>{{ $item->tanggal_sk }}</td>
</tr>

<tr>
<th>Pejabat Penetap</th>
<td>{{ $item->pejabat_penetap }}</td>
</tr>

<tr>
<th>Masa Kerja (Tahun)</th>
<td>{{ $item->masa_kerja_tahun }} Tahun</td>
</tr>

<tr>
<th>Masa Kerja (Bulan)</th>
<td>{{ $item->masa_kerja_bulan }} Bulan</td>
</tr>

<tr>
<th>Keterangan</th>
<td>{{ $item->keterangan }}</td>
</tr>

<tr>
<th>Status Validasi</th>
<td>

@if($item->validasi_admin_unit=='Disetujui')

<span class="badge bg-success">
Disetujui
</span>

@elseif($item->validasi_admin_unit=='Ditolak')

<span class="badge bg-danger">
Ditolak
</span>

@else

<span class="badge bg-warning text-dark">
Belum Validasi
</span>

@endif

</td>
</tr>

<tr>
<th>File Pangkat</th>
<td>

@if($item->file_sk)

<a
href="{{ asset('storage/'.$item->file_sk) }}"
target="_blank"
class="btn btn-danger btn-sm"

>

<i class="fa fa-file-pdf"></i>
Lihat File Pangkat </a>

@else

<span class="badge bg-secondary">
Tidak Ada File
</span>

@endif

</td>
</tr>

</table>

</div>

</div>

</div>

</td>

</tr>

@empty

<tr>
<td colspan="5" class="text-center">
Belum ada data pangkat
</td>
</tr>

@endforelse

</tbody>

</table>

</div>

</div>

</div>

<script>

function togglePangkat(id)
{
    let detail = document.getElementById('detailPangkat'+id);

    if(detail.style.display === 'none' || detail.style.display === '')
    {
        detail.style.display = 'table-row';
    }
    else
    {
        detail.style.display = 'none';
    }
}

</script>


<!-- JABATAN -->
<div class="card shadow-sm border-0 rounded-4 mb-4">

<div
class="card-header text-white"
style="background:#0f172a;"
>

<h5 class="mb-0">

Data Jabatan

</h5>

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-bordered align-middle">

<thead class="table-light">

<tr>
<th width="23%">Jabatan</th>
<th width="11%">TMT</th>
<th>No SK</th>
<th width="10%">Status</th>
<th width="250">Aksi</th>
</tr>

</thead>

<tbody>

@forelse($jabatans as $item)

<tr>

<td>{{ $item->nama_jabatan }}</td>

<td>{{ $item->tmt_jabatan }}</td>

<td>{{ $item->no_sk }}</td>

<td>

@if($item->validasi_admin_unit=='Disetujui')

<span class="badge bg-success">
Disetujui
</span>

@elseif($item->validasi_admin_unit=='Ditolak')

<span class="badge bg-danger">
Ditolak
</span>

@else

<span class="badge bg-warning text-dark">
Belum Validasi
</span>

@endif

</td>

<td>

<div class="d-flex gap-1 flex-wrap">

<button
type="button"
class="btn btn-primary btn-sm"
onclick="toggleJabatan({{ $item->id }})"

>

<i class="fa fa-eye"></i>
View </button>

@if($item->validasi_admin_unit=='Belum Validasi')

<form
method="POST"
action="/validasi-jabatan/{{ $item->id }}"
class="d-inline"
>

@csrf

<button
type="submit"
name="status"
value="Disetujui"
class="btn btn-success btn-sm"

>

Setujui </button>

<button
type="submit"
name="status"
value="Ditolak"
class="btn btn-danger btn-sm"

>

Tolak </button>

</form>

@else

<form
method="POST"
action="/validasi-jabatan/{{ $item->id }}"
class="d-inline"
>

@csrf

<button
type="submit"
name="status"
value="Belum Validasi"
class="btn btn-warning btn-sm"

>

Batal Validasi </button>

</form>

@endif

</div>

</td>

</tr>

<tr
id="detailJabatan{{ $item->id }}"
style="display:none;"
>

<td colspan="5">

<div class="card border-0 shadow-sm">

<div
class="card-header text-white"
style="background:#0f172a;"
>

<h5 class="mb-0">
Detail Jabatan
</h5>

<button
type="button"
class="btn btn-light btn-sm"
onclick="toggleJabatan({{ $item->id }})"

>

<i class="fa fa-minus"></i>
Minimize </button>

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-bordered">

<tr>
<th width="300">Nama Jabatan</th>
<td>{{ $item->nama_jabatan }}</td>
</tr>

<tr>
<th>TMT Jabatan</th>
<td>{{ $item->tmt_jabatan }}</td>
</tr>

<tr>
<th>Nomor SK</th>
<td>{{ $item->no_sk }}</td>
</tr>

<tr>
<th>Tanggal SK</th>
<td>{{ $item->tanggal_sk }}</td>
</tr>

<tr>
<th>Jenis Jabatan</th>
<td>{{ $item->jenis_jabatan }}</td>
</tr>

<tr>
<th>Pejabat Penetap</th>
<td>{{ $item->pejabat_penetap }}</td>
</tr>

<tr>
<th>Keterangan</th>
<td>{{ $item->keterangan }}</td>
</tr>

<tr>
<th>Status Validasi</th>
<td>

@if($item->validasi_admin_unit=='Disetujui')

<span class="badge bg-success">
Disetujui
</span>

@elseif($item->validasi_admin_unit=='Ditolak')

<span class="badge bg-danger">
Ditolak
</span>

@else

<span class="badge bg-warning text-dark">
Belum Validasi
</span>

@endif

</td>
</tr>

<tr>
<th>File Jabatan</th>
<td>

@if($item->file_sk)

<a
href="{{ asset('storage/'.$item->file_sk) }}"
target="_blank"
class="btn btn-danger btn-sm"

>

<i class="fa fa-file-pdf"></i>
Lihat File Jabatan </a>

@else

<span class="badge bg-secondary">
Tidak Ada File
</span>

@endif

</td>
</tr>

</table>

</div>

</div>

</div>

</td>

</tr>

@empty

<tr>
<td colspan="5" class="text-center">
Belum ada data jabatan
</td>
</tr>

@endforelse



</tbody>

</table>

</div>

</div>

</div>


<script>

function toggleJabatan(id)
{
    let detail = document.getElementById('detailJabatan'+id);

    if(detail.style.display === 'none' || detail.style.display === '')
    {
        detail.style.display = 'table-row';
    }
    else
    {
        detail.style.display = 'none';
    }
}

</script>

<!-- jabatan -->

<!-- ===================== DATA KGB ===================== -->

<div class="card shadow-sm border-0 rounded-4 mb-4">

<div
class="card-header text-white"
style="background:#0f172a;"
>

<h5 class="mb-0">

Data KGB

</h5>

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-bordered align-middle">

<thead class="table-light">

<tr>

<th width="23%">No SK</th>

<th>Tanggal SK</th>

<th>TMT</th>

<th>Masa Kerja</th>

<th>Status</th>

<th width="250">

Aksi

</th>

</tr>

</thead>

<tbody>

@forelse($kgbs as $item)

<tr>

<td>

{{ $item->no_sk_terakhir }}

</td>

<td>

{{ $item->tgl_sk_berkala }}

</td>

<td>

{{ $item->tmt_berkala }}

</td>

<td>

{{ $item->masa_kerja_berkala }}

</td>

<td>

@if($item->validasi_admin_unit=='Disetujui')

<span class="badge bg-success">

Disetujui

</span>

@elseif($item->validasi_admin_unit=='Ditolak')

<span class="badge bg-danger">

Ditolak

</span>

@else

<span class="badge bg-warning text-dark">

Belum Validasi

</span>

@endif

</td>

<td>

<button

type="button"

class="btn btn-primary btn-sm"

onclick="toggleKgb({{ $item->id }})"

>

<i class="fa fa-eye"></i>

View

</button>

@if($item->validasi_admin_unit=='Belum Validasi')

<form
action="/validasi-kgb/{{ $item->id }}"
method="POST"
class="d-inline"
>

@csrf

<button
name="status"
value="Disetujui"
class="btn btn-success btn-sm"
>

Setujui

</button>

<button
name="status"
value="Ditolak"
class="btn btn-danger btn-sm"
>

Tolak

</button>

</form>

@else

<form
action="/validasi-kgb/{{ $item->id }}"
method="POST"
class="d-inline"
>

@csrf

<button
name="status"
value="Belum Validasi"
class="btn btn-warning btn-sm"
>

Batal Validasi

</button>

</form>

@endif

</td>

</tr>

<tr
id="detailKgb{{ $item->id }}"
style="display:none;"
>

<td colspan="5">

<div class="card border-0 shadow-sm">

<div
class="card-header text-white"
style="background:#0f172a;"
>
    
<h5 class="mb-0">
Detail KGB
</h5>

<button
type="button"
class="btn btn-light btn-sm"
onclick="toggleKgb({{ $item->id }})"

>

<i class="fa fa-minus"></i>
Minimize </button>

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-bordered">
    
<tr>

<th width="30%">

Nomor SK Terakhir

</th>

<td>

{{ $item->no_sk_terakhir }}

</td>

</tr>

<tr>

<th>

Tanggal SK Berkala

</th>

<td>

{{ $item->tgl_sk_berkala }}

</td>

</tr>

<tr>

<th>

TMT Berkala

</th>

<td>

{{ $item->tmt_berkala }}

</td>

</tr>

<tr>

<th>

Masa Kerja Berkala

</th>

<td>

{{ $item->masa_kerja_berkala }}

</td>

</tr>

<tr>

<th>

Status Validasi

</th>

<td>

@if($item->validasi_admin_unit=='Disetujui')

<span class="badge bg-success">

Disetujui

</span>

@elseif($item->validasi_admin_unit=='Ditolak')

<span class="badge bg-danger">

Ditolak

</span>

@else

<span class="badge bg-warning text-dark">

Belum Validasi

</span>

@endif

</td>

</tr>

<tr>

<th>

File SK KGB

</th>

<td>

@if($item->file_sk_kgb)

<a
href="{{ asset('storage/'.$item->file_sk_kgb) }}"
target="_blank"
class="btn btn-primary btn-sm"
>

<i class="fa fa-eye"></i>

Lihat SK

</a>

<a
href="{{ asset('storage/'.$item->file_sk_kgb) }}"
download
class="btn btn-success btn-sm"
>

<i class="fa fa-download"></i>

Download

</a>

@else

<span class="text-muted">

Belum ada file SK.

</span>

@endif

</td>

</tr>

</table>

</div>

</div>

</td>

</tr>

@empty

<tr>

<td colspan="6" class="text-center py-4">

<i class="fa fa-folder-open fa-3x text-secondary mb-3"></i>

<br>

Belum ada data KGB.

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

</div>

</div>

<script>

function toggleKgb(id)
{

    let detail = document.getElementById(

        'detailKgb' + id

    );

    if(detail.style.display == 'none' || detail.style.display == '')
    {

        detail.style.display = 'table-row';

    }
    else
    {

        detail.style.display = 'none';

    }

}

</script>

<!-- ===================== DATA SKP ===================== -->

<div class="card shadow-sm border-0 rounded-4 mb-4">

<div
class="card-header text-white"
style="background:#0f172a;"
>

<h5 class="mb-0">

Data SKP

</h5>

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-bordered align-middle">

<thead class="table-light">

<tr>

<th width="15%">Tahun</th>

<th>Capaian Organisasi</th>

<th>Predikat Pegawai</th>

<th>Status</th>

<th width="250">

Aksi

</th>

</tr>

</thead>

<tbody>

@forelse($skps as $item)

<tr>

<td>

{{ $item->tahun }}

</td>

<td>

{{ $item->capaian_kinerja_organisasi }}

</td>

<td>

{{ $item->predikat_kinerja_pegawai }}

</td>

<td>

@if($item->validasi_admin_unit=='Disetujui')

<span class="badge bg-success">

Disetujui

</span>

@elseif($item->validasi_admin_unit=='Ditolak')

<span class="badge bg-danger">

Ditolak

</span>

@else

<span class="badge bg-warning text-dark">

Belum Validasi

</span>

@endif

</td>

<td>

<button

type="button"

class="btn btn-primary btn-sm"

onclick="toggleSkp({{ $item->id }})"

>

<i class="fa fa-eye"></i>

View

</button>

@if($item->validasi_admin_unit=='Belum Validasi')

<form
action="/validasi-skp/{{ $item->id }}"
method="POST"
class="d-inline"
>

@csrf

<button
name="status"
value="Disetujui"
class="btn btn-success btn-sm"
>

Setujui

</button>

<button
name="status"
value="Ditolak"
class="btn btn-danger btn-sm"
>

Tolak

</button>

</form>

@else

<form
action="/validasi-skp/{{ $item->id }}"
method="POST"
class="d-inline"
>

@csrf

<button
name="status"
value="Belum Validasi"
class="btn btn-warning btn-sm"
>

Batal Validasi

</button>

</form>

@endif

</td>

</tr>

<tr
id="detailSkp{{ $item->id }}"
style="display:none;"
>

<td colspan="5">

<div class="card border-0 shadow-sm">

<div
class="card-header text-white"
style="background:#0f172a;"
>

<h5 class="mb-0">
Detail SKP
</h5>

<button
type="button"
class="btn btn-light btn-sm"
onclick="toggleSkp({{ $item->id }})"
>

<i class="fa fa-minus"></i>
Minimize

</button>

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-bordered">

<tr>

<th width="30%">

Tahun

</th>

<td>

{{ $item->tahun }}

</td>

</tr>

<tr>

<th>

Capaian Kinerja Organisasi

</th>

<td>

{{ $item->capaian_kinerja_organisasi }}

</td>

</tr>

<tr>

<th>

Predikat Kinerja Pegawai

</th>

<td>

{{ $item->predikat_kinerja_pegawai }}

</td>

</tr>

<tr>

<th>

Status Validasi

</th>

<td>

@if($item->validasi_admin_unit=='Disetujui')

<span class="badge bg-success">

Disetujui

</span>

@elseif($item->validasi_admin_unit=='Ditolak')

<span class="badge bg-danger">

Ditolak

</span>

@else

<span class="badge bg-warning text-dark">

Belum Validasi

</span>

@endif

</td>

</tr>

<tr>

<th>

File SKP

</th>

<td>

@if($item->file_skp)

<a
href="{{ asset('storage/'.$item->file_skp) }}"
target="_blank"
class="btn btn-primary btn-sm"
>

<i class="fa fa-eye"></i>

Lihat SKP

</a>

<a
href="{{ asset('storage/'.$item->file_skp) }}"
download
class="btn btn-success btn-sm"
>

<i class="fa fa-download"></i>

Download

</a>

@else

<span class="text-muted">

Belum ada File SKP.

</span>

@endif

</td>

</tr>

<tr>

<th>

File SKP Final (TTE)

</th>

<td>

@if($item->file_skp_final)

<a
href="{{ asset('storage/'.$item->file_skp_final) }}"
target="_blank"
class="btn btn-primary btn-sm"
>

<i class="fa fa-eye"></i>

Lihat SKP Final

</a>

<a
href="{{ asset('storage/'.$item->file_skp_final) }}"
download
class="btn btn-success btn-sm"
>

<i class="fa fa-download"></i>

Download

</a>

<hr>

@endif

<form
action="/validasi-skp/{{ $item->id }}"
method="POST"
enctype="multipart/form-data"
>

@csrf

<div class="mb-2">

<label class="fw-bold">

Upload SKP Final (TTE)

</label>

<input
type="file"
name="file_skp_final"
class="form-control"
accept=".pdf"
>

<small class="text-muted">

Upload PDF SKP yang sudah ditandatangani elektronik.

</small>

</div>

<button
name="status"
value="Disetujui"
class="btn btn-success btn-sm"
>

<i class="fa fa-check"></i>

Setujui

</button>

<button
name="status"
value="Ditolak"
class="btn btn-danger btn-sm"
>

<i class="fa fa-times"></i>

Tolak

</button>

@if($item->validasi_admin_unit!='Belum Validasi')

<button
name="status"
value="Belum Validasi"
class="btn btn-warning btn-sm"
>

<i class="fa fa-rotate-left"></i>

Batal Validasi

</button>

@endif

</form>

</td>

</tr>

@if($item->catatan_admin)

<tr>

<th>

Catatan Admin

</th>

<td>

{{ $item->catatan_admin }}

</td>

</tr>

@endif

</table>

</div>

</div>

</td>

</tr>

@empty

<tr>

<td colspan="5" class="text-center py-4">

<i class="fa fa-folder-open fa-3x text-secondary mb-3"></i>

<br>

Belum ada data SKP.

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

</div>

</div>

<script>

function toggleSkp(id)
{

    let detail = document.getElementById(

        'detailSkp' + id

    );

    if(detail.style.display == 'none' || detail.style.display == '')
    {

        detail.style.display = 'table-row';

    }
    else
    {

        detail.style.display = 'none';

    }

}

</script>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    console.log('Bootstrap Loaded');
});
</script>
</body>
</html>

