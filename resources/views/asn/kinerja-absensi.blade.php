    <!DOCTYPE html>
    <html lang="id">
    <head>
    
    <meta charset="UTF-8">
    
    <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
    >
    
    <title>
    Kinerja & Absensi ASN
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
    transition:0.3s;
    
    }
    
    tbody tr:hover{
    
    transform:translateY(-3px);
    
    }
    
    tbody td{
    
    vertical-align:middle;
    padding:18px !important;
    border:none !important;
    
    }
    
    /* FILE */
    
.file-box{

background:#f8fafc;
border-radius:14px;
padding:10px;

width:100%;
max-width:300px;

margin:auto;

}

.file-box input[type="file"]{

width:100%;
font-size:12px;

}
    
    .file-box input{
    
    border-radius:12px;
    
    }
    
    /* STATUS */
    
/* STATUS */

.status-green{

background:#22c55e;
color:#fff;

padding:10px 15px;

border-radius:10px;

font-size:13px;
font-weight:600;

display:inline-flex;
align-items:center;
justify-content:center;

min-width:130px;
height:46px;

text-align:center;

}

.status-yellow{

background:#f59e0b;
color:#fff;

padding:10px 15px;

border-radius:10px;

font-size:13px;
font-weight:600;

display:inline-flex;
align-items:center;
justify-content:center;

min-width:130px;
height:46px;

text-align:center;

}

.status-red{

background:#ef4444;
color:#fff;

padding:10px 15px;

border-radius:10px;

font-size:13px;
font-weight:600;

display:inline-flex;
align-items:center;
justify-content:center;

min-width:130px;
height:46px;

text-align:center;

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
    
    /* FILTER */
    
    .year-filter{
    
    width:180px;
    border-radius:16px;
    padding:12px;
    border:none;
    box-shadow:0 5px 15px rgba(0,0,0,0.05);
    
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
    
.status-red,
.status-green,
.status-yellow{

width:140px;

}
/* =====================================================
   RESPONSIVE SASTRIA
===================================================== */

@media(max-width:991px){

.sidebar{
left:-100%;
}

.sidebar.active{
left:0;
}

.content{
margin-left:0;
padding:15px;
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
text-align:center;
}

.main-card{
padding:20px;
border-radius:20px;
}

.table-responsive{
overflow-x:auto;
}

table{
min-width:1000px;
}

}

@media(max-width:768px){

.file-box{
max-width:250px;
}

.status-red,
.status-green,
.status-yellow{
width:120px;
font-size:12px;
}

.btn-upload,
.btn-delete{
width:120px;
}

}

@media(max-width:576px){

.topbar h2{
font-size:22px;
}

.section-title{
font-size:20px;
}

.main-card{
padding:15px;
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
    
    Kinerja & Absensi
    
    </h2>
    
    <small class="text-muted">
    
    Upload laporan kinerja & absensi bulanan
    
    </small>
    
    </div>
    
    <div class="user-box">
    
    {{ Auth::user()->name }}
    
    </div>
    
    </div>
    
    <!-- CARD -->
    
    <div class="main-card">
    
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
    
    <div class="section-title">
    
    Data Upload Januari - Desember
    
    </div>
    
    <form method="GET">
    
    <select
    name="tahun"
    class="form-select year-filter"
    onchange="this.form.submit()"
    >
    
    @for($i = date('Y'); $i >= 2025; $i--)
    
    <option
    value="{{ $i }}"
    {{ request('tahun', date('Y')) == $i ? 'selected' : '' }}
    >
    
    {{ $i }}
    
    </option>
    
    @endfor
    
    </select>
    
    </form>
    
    </div>
    
    <!-- TABLE -->
    
    <div class="table-responsive">
    
    <table class="table align-middle">
    
    <thead>
    
    <tr>
    
<th width="10%">Bulan</th>
<th width="25%">File Kinerja</th>
<th width="25%">File Absensi</th>
<th width="15%">Status</th>
<th width="25%">Aksi</th>
    
    </tr>
    
    </thead>
    
    <tbody>
    
    @php
    
    $bulan = [
    
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
    
    @foreach($bulan as $item)
    
    @php
    
    $upload = \App\Models\Upload::where('user_id', Auth::id())
    
    ->where('bulan', $item)
    
    ->where('tahun', request('tahun', date('Y')))
    
    ->latest()
    
    ->first();
    
    @endphp
    
    <form
    method="POST"
    action="/upload-file"
    enctype="multipart/form-data"
    >
    
    @csrf
    
    <input
    type="hidden"
    name="bulan"
    value="{{ $item }}"
    >
    
    <input
    type="hidden"
    name="tahun"
    value="{{ request('tahun', date('Y')) }}"
    >
    
    <tr>
    
    <td class="fw-bold">
    
    {{ $item }}
    
    </td>
    

<!-- FILE KINERJA -->

<td>

<div class="file-box">

@if($upload && $upload->file_kinerja)

<div
class="d-flex align-items-center justify-content-between border rounded-4 px-3 py-2"
style="min-height:58px;"
>

<div class="d-flex align-items-center">

<i class="fa fa-file-pdf text-danger me-2"></i>

<small class="text-muted">
File Kinerja Sudah Diupload
</small>

</div>

<div class="d-flex align-items-center gap-2">

<a
href="{{ asset('storage/'.$upload->file_kinerja) }}"
target="_blank"
class="btn btn-sm btn-primary rounded-3"
>

<i class="fa fa-eye"></i>

</a>

<button
type="button"
class="btn btn-sm btn-warning rounded-3"
onclick="document.getElementById('upload-kinerja{{ $loop->index }}').classList.toggle('d-none')"
>

<i class="fa fa-pen"></i>

</button>

</div>

</div>

<div
id="upload-kinerja{{ $loop->index }}"
class="d-none mt-2"
>

<input
type="file"
name="file_kinerja"
class="form-control rounded-4"
accept=".pdf"
>

</div>

@else

<input
type="file"
name="file_kinerja"
class="form-control rounded-4"
accept=".pdf"
>

@endif

</div>

</td>
    

<!-- FILE ABSENSI -->

<td>

<div class="file-box">

@if($upload && $upload->file_absensi)

<div
class="d-flex align-items-center justify-content-between border rounded-4 px-3 py-2"
style="min-height:58px;"
>

<div class="d-flex align-items-center">

<i class="fa fa-file-pdf text-danger me-2"></i>

<small class="text-muted">
File Absensi Sudah Diupload
</small>

</div>

<div class="d-flex align-items-center gap-2">

<a
href="{{ asset('storage/'.$upload->file_absensi) }}"
target="_blank"
class="btn btn-sm btn-primary rounded-3"
>

<i class="fa fa-eye"></i>

</a>

<button
type="button"
class="btn btn-sm btn-warning rounded-3"
onclick="document.getElementById('upload-absensi{{ $loop->index }}').classList.toggle('d-none')"
>

<i class="fa fa-pen"></i>

</button>

</div>

</div>

<div
id="upload-absensi{{ $loop->index }}"
class="d-none mt-2"
>

<input
type="file"
name="file_absensi"
class="form-control rounded-4"
accept=".pdf"
>

</div>

@else

<input
type="file"
name="file_absensi"
class="form-control rounded-4"
accept=".pdf"
>

@endif

</div>

</td>
    
    <!-- STATUS -->
    
    <td>
    
    @if($upload)
    
    @if($upload->status == 'tervalidasi')
    
    <span class="status-green">
    
    Tervalidasi
    
    </span>
    
    @elseif($upload->status == 'lengkap')
    
    <span class="status-green">
    
    Lengkap
    
    </span>
    
    @elseif($upload->status == 'belum lengkap')
    
    <span class="status-yellow">
    
    Belum Lengkap
    
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
    
    <!-- AKSI -->
    
    <td class="text-center">
    
    @if($upload && $upload->status == 'tervalidasi')
    
    <span class="status-green d-inline-block mb-2">
    
    <i class="fa fa-check-circle"></i>
    
    Tervalidasi
    
    </span>
    
    @else
    
    <button class="btn btn-modern btn-upload mb-2">
    
    <i class="fa fa-upload"></i>
    
    Upload
    
    </button>
    
    @if($upload)
    
    <br>
    
    <a
    href="/hapus-file/{{ $upload->id }}"
    class="btn btn-modern btn-delete"
    onclick="return confirm('Hapus file?')"
    >
    
    <i class="fa fa-trash"></i>
    
    Hapus
    
    </a>
    
    @endif
    
    @endif
    
    </td>
    
    </tr>
    
    </form>
    
    @endforeach
    
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