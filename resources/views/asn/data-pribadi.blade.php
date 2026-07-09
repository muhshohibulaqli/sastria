<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
    
        <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
        >
    
        <title>
        Data Pribadi ASN
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
    
    
    /* KUMPULAN CSS */
    
    
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

.sidebar a.active{
    background:linear-gradient(90deg,#2563eb,#3b82f6);
    color:white;
    transform:translateX(5px);
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
        
        .main-card{
        background:white;
        border-radius:35px;
        padding:35px;
        box-shadow:0 10px 40px rgba(0,0,0,0.08);
        margin-bottom:25px;
        }
        
        .foto-box{
        text-align:center;
        margin-bottom:30px;
        }
        
        .foto-box img{
        width:160px;
        height:200px;
        object-fit:cover;
        border-radius:20px;
        border:5px solid #e2e8f0;
        margin-bottom:15px;
        }
        
        .nav-pills .nav-link{
        border-radius:16px;
        padding:14px 20px;
        font-weight:600;
        color:#334155;
        margin-right:10px;
        margin-bottom:10px;
        }
        
        .nav-pills .nav-link.active{
        background:linear-gradient(90deg,#2563eb,#3b82f6);
        }
        
        .form-label{
        font-weight:600;
        margin-bottom:8px;
        }
        
        .form-control,
        .form-select{
        border-radius:14px;
        padding:14px;
        border:1px solid #cbd5e1;
        }
        
        .section-title{
        font-size:22px;
        font-weight:bold;
        margin-bottom:25px;
        }
        
        .save-btn{
        background:linear-gradient(90deg,#2563eb,#3b82f6);
        color:white;
        border:none;
        padding:14px 30px;
        border-radius:16px;
        font-weight:bold;
        margin-top:20px;
        }
        
        .footer{
        margin-top:35px;
        text-align:center;
        color:#64748b;
        font-size:14px;
        padding-bottom:20px;
        }
        
        .footer a{
        text-decoration:none;
        font-weight:bold;
        color:#0f172a;
        transition:.3s;
        }
        
        .footer a:hover{
        color:#2563eb;
        }
        
        .table{
        border-radius:20px;
        overflow:hidden;
        }
        
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
        <div class="content">
        <div class="topbar">
        <div>

    <h2>
    Data Pribadi ASN
    </h2>

    <small class="text-muted">
    Kelola data ASN lengkap
    </small>
    </div>
    <div class="user-box">{{ Auth::user()->name }}
    </div>
    </div>

    <form
    method="POST"
    action="/simpan-data-pribadi"
    enctype="multipart/form-data"
    >
    @csrf

    <div class="main-card">
    <div class="foto-box">
    @if($biodata->foto)
    <img
    src="{{ asset('storage/'.$biodata->foto) }}"
    >
    @else

    <img
    src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}"
    >

    @endif

    <input
    type="file"
    name="foto"
    class="form-control mt-3"
    >

    </div>

<!-- TAB MENU BESAR-->
    <div class="tab-scroll">
    <ul class="nav nav-pills modern-tabs">


        <li>
        <button
        class="nav-link active"
        data-bs-toggle="pill"
        data-bs-target="#biodata"
        type="button"
        >
        <i class="fa fa-user"></i>
        <span>Biodata</span>
        </button>
        </li>

        <li>
        <button
        class="nav-link"
        data-bs-toggle="pill"
        data-bs-target="#kepegawaian"
        type="button"
        >
        <i class="fa fa-briefcase"></i>
        <span>Kepegawaian</span>
        </button>
        </li>

        <li>
        <button
        class="nav-link"
        data-bs-toggle="pill"
        data-bs-target="#alamat"
        type="button"
        >
        <i class="fa fa-location-dot"></i>
        <span>Domisili</span>
        </button>
        </li>

        <li>
        <button
        class="nav-link"
        data-bs-toggle="pill"
        data-bs-target="#fisik"
        type="button"
        >
        <i class="fa fa-heart-pulse"></i>
        <span>Fisik</span>
        </button>
        </li>

        <li>
        <button
        class="nav-link"
        data-bs-toggle="pill"
        data-bs-target="#rekening"
        type="button"
        >
        <i class="fa fa-building-columns"></i>
        <span>Rekening</span>
        </button>
        </li>
    
        </ul>
    
    </div>
    <div class="tab-content">
    
    

<!-- BIODATA -->

    <div
        class="tab-pane fade show active"
        id="biodata"
    >
    <div class="main-card">
        <h4 class="section-title">
        Biodata
        </h4>

    <div class="row">

    <div class="col-md-4 mb-3">
        <label class="form-label">Gelar Depan</label>
        <input type="text" name="gelar_depan" class="form-control" value="{{ $biodata->gelar_depan }}" >
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Gelar Belakang</label>
        <input type="text" name="gelar_belakang" class="form-control" value="{{ $biodata->gelar_belakang }}"> 
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select class="form-select" name="jenis_kelamin">
        <option value="">Pilih</option>
        <option value="Laki-Laki" {{ $biodata->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }} > Laki-Laki </option>
        <option value="Perempuan"{{ $biodata->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Agama</label>
        <select class="form-select" name="agama">
            <option value="">Pilih</option>
            <option value="Islam" {{ $biodata->agama == 'Islam' ? 'selected' : '' }} > Islam </option>
            <option value="Kristen" {{ $biodata->agama == 'Kristen' ? 'selected' : '' }} > Kristen </option>
            <option value="Katolik" {{ $biodata->agama == 'Katolik' ? 'selected' : '' }} > Katolik </option>
            <option value="Hindu" {{ $biodata->agama == 'Hindu' ? 'selected' : '' }} > Hindu </option>
            <option value="Buddha" {{ $biodata->agama == 'Buddha' ? 'selected' : '' }} > Buddha </option>
            <option value="Konghucu" {{ $biodata->agama == 'Konghucu' ? 'selected' : '' }} > Konghucu </option>
        </select>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control" value="{{ $biodata->tempat_lahir }}">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Tgl. Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" value="{{ $biodata->tanggal_lahir }}">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Status Nikah</label>
        <select class="form-select" name="status_nikah">
        <option value="">Pilih</option>
        <option value="Belum Kawin" {{ $biodata->status_nikah == 'Belum Kawin' ? 'selected' : '' }} > Belum Kawin </option>
        <option value="Kawin" {{ $biodata->status_nikah == 'Kawin' ? 'selected' : '' }} > Kawin </option>
        <option value="Cerai Hidup" {{ $biodata->status_nikah == 'Cerai Hidup' ? 'selected' : '' }} > Cerai Hidup </option>
        <option value="Cerai Mati" {{ $biodata->status_nikah == 'Cerai Mati' ? 'selected' : '' }} > Cerai Mati </option>
    </select>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Nomor WhatsApp</label>
        <input type="text" name="hp1" class="form-control" value="{{ $biodata->hp1 }}">
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Email Pribadi</label>
        <input type="email" name="email_pribadi" class="form-control" value="{{ $biodata->email_pribadi }}">
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Warga Negara</label>
        <select class="form-select" name="warga_negara">
        <option value="">Pilih</option>
        <option value="WNI" {{ $biodata->warga_negara == 'WNI' ? 'selected' : '' }} > WNI </option>
        <option value="WNA" {{ $biodata->warga_negara == 'WNA' ? 'selected' : '' }} > WNA </option>
        </select>
    </div>
    </div>
    </div>
    </div>

<!-- KEPEGAWAIAN -->

    <div
    class="tab-pane fade"
    id="kepegawaian"
    >
    <div class="main-card">
        <h4 class="section-title">
        Kepegawaian
        </h4>
    <div class="row">
    <div class="col-md-4 mb-3">
        <label class="form-label">Unit Kerja</label>
        <input type="text" name="unit_kerja" class="form-control" <input type="text" class="form-control" value="{{ Auth::user()->unit }}" readonly>
        </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Status Aktif</label>
        <input type="text" name="status_aktif" class="form-control">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Status Pegawai</label>
        <input type="text" name="status_pegawai" class="form-control">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Jabatan Atasan</label>
        <input type="text" name="jabatan_atasan" class="form-control">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Karpeg</label>
        <input type="text" name="karpeg" class="form-control" value="{{ $biodata->karpeg }}">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label fw-semibold">
        File Karpeg
        </label>
        @if($biodata->file_karpeg)
    <div
        class="d-flex align-items-center justify-content-between border rounded-4 px-3 py-2"
        style="min-height:58px;"
        >
    <div class="d-flex align-items-center">
        <i class="fa fa-file-pdf text-danger me-2"></i>
        <small class="text-muted">
        File sudah diupload
        </small>
            </div>
            <div class="d-flex align-items-center gap-2">
            <a
            href="{{ asset('storage/'.$biodata->file_karpeg) }}"
            target="_blank"
            class="btn btn-sm btn-primary rounded-3"
                >
            <i class="fa fa-eye"></i>

            </a>
            <button
            type="button"
            class="btn btn-sm btn-danger rounded-3"
            onclick="document.getElementById('upload-karpeg').classList.toggle('d-none')"
                >
                    <i class="fa fa-pen"></i>
                </button>
    </div>
    </div>
    <div
            id="upload-karpeg"
            class="d-none mt-2"
            >
            <input
                type="file"
                name="file_karpeg"
                class="form-control rounded-4"
            >
    </div>
             @else
            <input
                type="file"
                name="file_karpeg"
                class="form-control rounded-4"
                    >
                @endif
            </div>


    <div class="col-md-4 mb-3">
            <label class="form-label">Taspen</label>
            <input type="text" name="taspen" class="form-control" value="{{ $biodata->taspen }}">
    </div>

    <div class="col-md-4 mb-3">
            <label class="form-label fw-semibold">
                File Taspen
            </label>
                @if($biodata->file_taspen)
    <div
            class="d-flex align-items-center justify-content-between border rounded-4 px-3 py-2"
            style="min-height:58px;"
        >
    <div class="d-flex align-items-center">
            <i class="fa fa-file-pdf text-danger me-2"></i>
            <small class="text-muted">
             File sudah diupload
            </small>
            </div>
    <div class="d-flex align-items-center gap-2">
            <a
            href="{{ asset('storage/'.$biodata->file_taspen) }}"
            target="_blank"
            class="btn btn-sm btn-primary rounded-3"
                >
            <i class="fa fa-eye"></i>
            </a>
            <button
                type="button"
                class="btn btn-sm btn-danger rounded-3"
                onclick="document.getElementById('upload-taspen').classList.toggle('d-none')"
                >
            <i class="fa fa-pen"></i>
            </button>
            </div>
    </div>
    <div
            id="upload-taspen"
            class="d-none mt-2"
    >
            <input
            type="file"
            name="file_taspen"
            class="form-control rounded-4"
    >
    </div>
            @else
            <input
            type="file"
            name="file_taspen"
            class="form-control rounded-4"
    >
            @endif
    </div>
    
    <div class="col-md-4 mb-3">
            <label class="form-label">NPWP</label>
            <input type="text" name="npwp" class="form-control" value="{{ $biodata->npwp }}">
    </div>
    
   <div class="col-md-4 mb-3">

    <label class="form-label fw-semibold">
        File NPWP
    </label>
    @if($biodata->file_npwp)
        <div
            class="d-flex align-items-center justify-content-between border rounded-4 px-3 py-2"
            style="min-height:58px;"
        >
            <div class="d-flex align-items-center">
                <i class="fa fa-file-pdf text-danger me-2"></i>

                <small class="text-muted">
                    File sudah diupload
                </small>
            </div>
            <div class="d-flex align-items-center gap-2">
                <a
                    href="{{ asset('storage/'.$biodata->file_npwp) }}"
                    target="_blank"
                    class="btn btn-sm btn-primary rounded-3"
                >

                    <i class="fa fa-eye"></i>
                </a>
                <button
                    type="button"
                    class="btn btn-sm btn-danger rounded-3"
                    onclick="document.getElementById('upload-npwp').classList.toggle('d-none')"
                >
                    <i class="fa fa-pen"></i>
                </button>
            </div>
        </div>
        <div
            id="upload-npwp"
            class="d-none mt-2"
        >
            <input
                type="file"
                name="file_npwp"
                class="form-control rounded-4"
            >
        </div>
    @else
        <input
            type="file"
            name="file_npwp"
            class="form-control rounded-4"
        >
    @endif
    </div>

    <div class="col-md-4 mb-3">
            <label class="form-label">NIP PNS/PPPK</label>
            <input type="text" name="nip_pppk" class="form-control" value="{{ Auth::user()->nip }}" readonly>
    </div>

    <div class="col-md-4 mb-3">
            <label class="form-label">TMT PNS/PPPK</label>
    <input
        type="date"
        name="tmt_cpns"
        class="form-control"
        value="{{ $biodata->tmt_cpns }}"
    >
    </div>

<div class="col-md-4 mb-3">

<label class="form-label fw-semibold">
File SK PNS/PPPK
</label>

@if($biodata->file_sk_cpns)

<div
class="d-flex align-items-center justify-content-between border rounded-4 px-3 py-2"
style="min-height:58px;"
>

<div class="d-flex align-items-center">

<i class="fa fa-file-pdf text-danger me-2"></i>

<small class="text-muted">
File sudah diupload
</small>

</div>

<div class="d-flex align-items-center gap-2">

<a
href="{{ asset('storage/'.$biodata->file_sk_cpns) }}"
target="_blank"
class="btn btn-sm btn-primary rounded-3"
>

<i class="fa fa-eye"></i>

</a>

<button
type="button"
class="btn btn-sm btn-danger rounded-3"
onclick="document.getElementById('upload-sk-cpns').classList.toggle('d-none')"
>

<i class="fa fa-pen"></i>

</button>

</div>

</div>

<div
id="upload-sk-cpns"
class="d-none mt-2"
>

<input
type="file"
name="file_sk_cpns"
class="form-control rounded-4"
>

</div>

@else

<input
type="file"
name="file_sk_cpns"
class="form-control rounded-4"
>

@endif

</div>

    </div>
    </div>
    </div>
    
<!-- ALAMAT -->
    <div
            class="tab-pane fade"
            id="alamat"
    >

    <div class="main-card">
            <h4 class="section-title">
            Alamat Domisili
            </h4>

    <div class="row">
    <div class="col-md-12 mb-3">
            <label class="form-label">Alamat, Dusun</label>
            <textarea
            name="alamat"
            class="form-control"
            rows="3"
            >{{ $biodata->alamat }}</textarea>
    </div>

    <div class="col-md-4 mb-3">
            <label class="form-label">RT/RW</label>
            <input type="text" name="rt_rw" class="form-control" value="{{ $biodata->rt_rw }}">
    </div>

    <div class="col-md-4 mb-3">
            <label class="form-label">Kelurahan / Desa</label>
            <input type="text" name="kelurahan" class="form-control" value="{{ $biodata->kelurahan }}">
    </div>

    <div class="col-md-4 mb-3">
            <label class="form-label">Kode Pos</label>
            <input type="text" name="kode_pos" class="form-control" value="{{ $biodata->kode_pos }}">
    </div>

    <div class="col-md-6 mb-3">
            <label class="form-label">Jarak Tempat Tinggal</label>
            <input type="text" name="jarak_tempat_tinggal" class="form-control" value="{{ $biodata->jarak_tempat_tinggal }}">
    </div>
    </div>
            <hr class="my-5">
            <h4 class="section-title">
            Alamat KTP
            </h4>
    <div class="row">
    <div class="col-md-4 mb-3">
            <label class="form-label">No. KTP</label>
            <input type="text" name="no_ktp" class="form-control" value="{{ $biodata->no_ktp }}" >
    </div>
    <div class="col-md-4 mb-3">
            <label class="form-label">Tanggal KTP</label>
            <input type="date" name="tanggal_ktp" class="form-control" value="{{ $biodata->tanggal_ktp }}">
    </div>
    <div class="col-md-4 mb-3">
            <label class="form-label">Kode Pos KTP</label>
            <input type="text" name="kode_pos_ktp" class="form-control" value="{{ $biodata->kode_pos_ktp }}">
    </div>

    <div class="col-md-12 mb-3">
            <label class="form-label">Alamat, Dusun</label>
            <textarea
            name="alamat_ktp"
            class="form-control"
            rows="3"
            >{{ $biodata->alamat_ktp }}</textarea>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">RT/RW</label>
        <input type="text" name="rt_rw_ktp" class="form-control" value="{{ $biodata->rt_rw_ktp }}">
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Kelurahan / Desa</label>
        <input type="text" name="kelurahan_ktp" class="form-control" value="{{ $biodata->kelurahan_ktp }}">
    </div>


<div class="col-md-6 mb-3">

<label class="form-label fw-semibold">
File KTP
</label>

@if($biodata->file_ktp)

<div
class="d-flex align-items-center justify-content-between border rounded-4 px-3 py-2"
style="min-height:58px;"
>

<div class="d-flex align-items-center">

<i class="fa fa-file-pdf text-danger me-2"></i>

<small class="text-muted">
File sudah diupload
</small>

</div>

<div class="d-flex align-items-center gap-2">

<a
href="{{ asset('storage/'.$biodata->file_ktp) }}"
target="_blank"
class="btn btn-sm btn-primary rounded-3"
>

<i class="fa fa-eye"></i>

</a>

<button
type="button"
class="btn btn-sm btn-danger rounded-3"
onclick="document.getElementById('upload-ktp').classList.toggle('d-none')"
>

<i class="fa fa-pen"></i>

</button>

</div>

</div>

<div
id="upload-ktp"
class="d-none mt-2"
>

<input
type="file"
name="file_ktp"
class="form-control rounded-4"
>

</div>

@else

<input
type="file"
name="file_ktp"
class="form-control rounded-4"
>

@endif

</div>

<div class="col-md-6 mb-3">

<label class="form-label fw-semibold">
File KK
</label>

@if($biodata->file_kk)

<div
class="d-flex align-items-center justify-content-between border rounded-4 px-3 py-2"
style="min-height:58px;"
>

<div class="d-flex align-items-center">

<i class="fa fa-file-pdf text-danger me-2"></i>

<small class="text-muted">
File sudah diupload
</small>

</div>

<div class="d-flex align-items-center gap-2">

<a
href="{{ asset('storage/'.$biodata->file_kk) }}"
target="_blank"
class="btn btn-sm btn-primary rounded-3"
>

<i class="fa fa-eye"></i>

</a>

<button
type="button"
class="btn btn-sm btn-danger rounded-3"
onclick="document.getElementById('upload-kk').classList.toggle('d-none')"
>

<i class="fa fa-pen"></i>

</button>

</div>

</div>

<div
id="upload-kk"
class="d-none mt-2"
>

<input
type="file"
name="file_kk"
class="form-control rounded-4"
>

</div>

@else

<input
type="file"
name="file_kk"
class="form-control rounded-4"
>

@endif

</div>

</div>

</div>

</div>


<!-- IDENTITAS FISIK -->

<div
class="tab-pane fade"
id="fisik"
>

<div class="main-card">

<h4 class="section-title">
Identitas Fisik
</h4>

<div class="row">

<div class="col-md-3 mb-3">
<label class="form-label">Golongan Darah</label>
<select name="golongan_darah" class="form-select" >
<option value="">Pilih</option>
<option value="A" {{ $biodata->golongan_darah == 'A' ? 'selected' : '' }} > A </option>
<option value="B"{{ $biodata->golongan_darah == 'B' ? 'selected' : '' }}> B </option>
<option value="AB"{{ $biodata->golongan_darah == 'AB' ? 'selected' : '' }}> AB </option>
<option value="O"{{ $biodata->golongan_darah == 'O' ? 'selected' : '' }}> O </option>
</select>
</div>

<div class="col-md-3 mb-3">
<label class="form-label">Tinggi Badan</label>
<input type="text" name="tinggi_badan" class="form-control" value="{{ $biodata->tinggi_badan }}">
</div>

<div class="col-md-3 mb-3">
<label class="form-label">Berat Badan</label>
<input type="text" name="berat_badan" class="form-control" value="{{ $biodata->berat_badan }}">
</div>

<div class="col-md-3 mb-3">
<label class="form-label">Ukuran Baju</label>
<select name="ukuran_baju" class="form-select">
<option value="">Pilih</option>
<option value="S" {{ $biodata->ukuran_baju == 'S' ? 'selected' : '' }} > S </option>
<option value="M" {{ $biodata->ukuran_baju == 'M' ? 'selected' : '' }} > M </option>
<option value="L" {{ $biodata->ukuran_baju == 'L' ? 'selected' : '' }} > L </option>
<option value="XL" {{ $biodata->ukuran_baju == 'XL' ? 'selected' : '' }} > XL </option>
<option value="XXL" {{ $biodata->ukuran_baju == 'XXL' ? 'selected' : '' }} > XXL </option>
</select>
</div>

<div class="col-md-12 mb-3">
<label class="form-label">Hobby</label>
<input type="text" name="hobby" class="form-control" value="{{ $biodata->hobby }}">
</div>

</div>

</div>

</div>

<!-- REKENING BANK -->

<div
class="tab-pane fade"
id="rekening"
>

<div class="main-card">

<h4 class="section-title">
Rekening Bank
</h4>

<div class="row">

<div class="col-md-4 mb-3">
<label class="form-label">Nama Bank</label>
<select name="nama_bank" class="form-select">
<option value="">Pilih</option>
<option value="BRI" {{ $biodata->nama_bank == 'BRI' ? 'selected' : '' }} > BRI </option>
<option value="BNI" {{ $biodata->nama_bank == 'BNI' ? 'selected' : '' }} > BNI </option>
<option value="BTN" {{ $biodata->nama_bank == 'BTN' ? 'selected' : '' }} > BTN </option>
<option value="BSI" {{ $biodata->nama_bank == 'BSI' ? 'selected' : '' }} > BSI </option>
<option value="Bank Mandiri" {{ $biodata->nama_bank == 'Bank Mandiri"' ? 'selected' : '' }} > Bank Mandiri </option>
</select>
</div>

<div class="col-md-4 mb-3">
<label class="form-label">No. Rekening</label>
<input type="text" name="no_rekening" class="form-control" value="{{ $biodata->no_rekening }}">
</div>

<div class="col-md-4 mb-3">
<label class="form-label">Atas Nama Rekening</label>
<input type="text" name="atas_nama_rekening" class="form-control" value="{{ $biodata->atas_nama_rekening }}">
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Cabang Bank</label>
<input type="text" name="cabang_bank" class="form-control" value="{{ $biodata->cabang_bank }}">
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Keterangan</label>
<input type="text" name="keterangan_bank" class="form-control" value="{{ $biodata->keterangan_bank }}">
</div>


<div class="col-md-12 mb-3">

<label class="form-label fw-semibold">
File Rekening
</label>

@if($biodata->file_rekening)

<div
class="d-flex align-items-center justify-content-between border rounded-4 px-3 py-2"
style="min-height:58px;"
>

<div class="d-flex align-items-center">

<i class="fa fa-file-pdf text-danger me-2"></i>

<small class="text-muted">
File sudah diupload
</small>

</div>

<div class="d-flex align-items-center gap-2">

<a
href="{{ asset('storage/'.$biodata->file_rekening) }}"
target="_blank"
class="btn btn-sm btn-primary rounded-3"
>

<i class="fa fa-eye"></i>

</a>

<button
type="button"
class="btn btn-sm btn-danger rounded-3"
onclick="document.getElementById('upload-rekening').classList.toggle('d-none')"
>

<i class="fa fa-pen"></i>

</button>

</div>

</div>

<div
id="upload-rekening"
class="d-none mt-2"
>

<input
type="file"
name="file_rekening"
class="form-control rounded-4"
>

</div>

@else

<input
type="file"
name="file_rekening"
class="form-control rounded-4"
>

@endif

</div>

</div>

</div>

</div>

<button class="save-btn">

<i class="fa fa-save"></i>

Simpan Data

</button>

</form>

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

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>

<script>

function toggleSidebar(){

document
.getElementById('sidebar')
.classList
.toggle('active');

}

</script>

<script>

document.addEventListener("DOMContentLoaded", function () {

    // SIMPAN TAB AKTIF SAAT DIKLIK
    const tabs = document.querySelectorAll('[data-bs-toggle="pill"]');

    tabs.forEach(tab => {

        tab.addEventListener('shown.bs.tab', function (e) {

            localStorage.setItem(
                'activeTab',
                e.target.getAttribute('data-bs-target')
            );

        });

    });

    // AKTIFKAN TAB TERAKHIR SETELAH RELOAD
    const activeTab = localStorage.getItem('activeTab');

    if(activeTab){

        const triggerEl = document.querySelector(
            '[data-bs-target="' + activeTab + '"]'
        );

        if(triggerEl){

            const tab = new bootstrap.Tab(triggerEl);

            tab.show();

        }

    }

});

</script>


<!-- MODAL TAMBAH PENDIDIKAN -->

<div
class="modal fade"
id="modalPendidikan"
tabindex="-1"
>

<div class="modal-dialog modal-xl modal-dialog-scrollable">

<div class="modal-content border-0 rounded-5">

<form
method="POST"
action="/tambah-pendidikan"
enctype="multipart/form-data"
>

@csrf

<div class="modal-header border-0">

<h5 class="modal-title fw-bold">
Tambah Pendidikan
</h5>

<button
type="button"
class="btn-close"
data-bs-dismiss="modal"
></button>

</div>

<div class="modal-body">

<div class="row">

<div class="col-md-4 mb-3">
<label class="form-label">
Jenjang Pendidikan
</label>
<select
name="jenjang_pendidikan"
class="form-select"
required
>
<option value="">
Pilih
</option>

<option value="SD">
SD
</option>

<option value="SMP">
SMP
</option>

<option value="SMA">
SMA
</option>

<option value="D3">
D3
</option>

<option value="S1">
S1
</option>

<option value="S2">
S2
</option>

<option value="S3">
S3
</option>

</select>
</div>

<div class="col-md-8 mb-3">
<label class="form-label">
Nama Institusi
</label>
<input
type="text"
name="nama_institusi"
class="form-control"
>
</div>

<div class="col-md-4 mb-3">
<label class="form-label">
Fakultas
</label>
<input
type="text"
name="fakultas"
class="form-control"
>
</div>

<div class="col-md-4 mb-3">
<label class="form-label">
Prodi
</label>
<input
type="text"
name="prodi"
class="form-control"
>
</div>

<div class="col-md-4 mb-3">
<label class="form-label">
Jurusan
</label>
<input
type="text"
name="jurusan"
class="form-control"
>
</div>

<div class="col-md-4 mb-3">
<label class="form-label">
Lokasi
</label>

<select
name="lokasi"
class="form-select"
>

<option value="">
Pilih
</option>

<option value="Dalam Negeri">
Dalam Negeri
</option>

<option value="Luar Negeri">
Luar Negeri
</option>

</select>

</div>

<div class="col-md-8 mb-3">
<label class="form-label">
Alamat Institusi
</label>

<input
type="text"
name="alamat_institusi"
class="form-control"
>

</div>

<div class="col-md-6 mb-3">
<label class="form-label">
Kepala Institusi
</label>

<input
type="text"
name="kepala_institusi"
class="form-control"
>

</div>

<div class="col-md-6 mb-3">
<label class="form-label">
Judul Penelitian
</label>

<input
type="text"
name="judul_penelitian"
class="form-control"
>

</div>

<div class="col-md-4 mb-3">
<label class="form-label">
Gelar
</label>

<input
type="text"
name="gelar"
class="form-control"
>

</div>

<div class="col-md-4 mb-3">
<label class="form-label">
Singkatan Gelar
</label>

<input
type="text"
name="singkatan_gelar"
class="form-control"
>

</div>

<div class="col-md-4 mb-3">
<label class="form-label">
Letak Gelar
</label>

<select
name="letak_gelar"
class="form-select"
>

<option value="">
Pilih
</option>

<option value="Depan">
Depan
</option>

<option value="Belakang">
Belakang
</option>

</select>

</div>

<div class="col-md-4 mb-3">
<label class="form-label">
No Ijazah
</label>

<input
type="text"
name="no_ijazah"
class="form-control"
>

</div>

<div class="col-md-4 mb-3">
<label class="form-label">
Tanggal Ijazah
</label>

<input
type="date"
name="tgl_ijazah"
class="form-control"
>

</div>

<div class="col-md-4 mb-3">
<label class="form-label">
IPK
</label>

<input
type="text"
name="ipk"
class="form-control"
>

</div>

<div class="col-md-6 mb-3">
<label class="form-label">
Tahun Masuk
</label>

<input
type="number"
name="tahun_masuk"
class="form-control"
>

</div>

<div class="col-md-6 mb-3">
<label class="form-label">
Tahun Lulus
</label>

<input
type="number"
name="tahun_lulus"
class="form-control"
>

</div>

<div class="col-md-6 mb-3">
<label class="form-label">
File Ijazah
</label>

<input
type="file"
name="file_ijazah"
class="form-control"
>

</div>

<div class="col-md-6 mb-3">
<label class="form-label">
File Transkrip
</label>

<input
type="file"
name="file_transkrip"
class="form-control"
>

</div>

</div>

</div>

<div class="modal-footer border-0">

<button
type="submit"
class="btn btn-primary rounded-4 px-4"
>

<i class="fa fa-save"></i>

Simpan

</button>

</div>

</form>

</div>

</div>

</div>

<!-- VIEW PENDIDIKAN -->
@foreach($pendidikans as $item)

<div
class="modal fade"
id="viewPendidikan{{ $item->id }}"
tabindex="-1"
>

<div class="modal-dialog modal-xl modal-dialog-scrollable">

<div class="modal-content border-0 rounded-5">

<div class="modal-header border-0">

<h5 class="modal-title fw-bold">
Detail Pendidikan
</h5>

<button
type="button"
class="btn-close"
data-bs-dismiss="modal"
></button>

</div>

<div class="modal-body">

<div class="row">

<!-- JENJANG -->

<div class="col-md-4 mb-3">

<label class="form-label fw-bold">
Jenjang Pendidikan
</label>

<div class="form-control">
{{ $item->jenjang_pendidikan ?? '-' }}
</div>

</div>

<!-- NAMA INSTITUSI -->

<div class="col-md-8 mb-3">

<label class="form-label fw-bold">
Nama Institusi
</label>

<div class="form-control">
{{ $item->nama_institusi ?? '-' }}
</div>

</div>

<!-- FAKULTAS -->

<div class="col-md-4 mb-3">

<label class="form-label fw-bold">
Fakultas
</label>

<div class="form-control">
{{ $item->fakultas ?? '-' }}
</div>

</div>

<!-- PRODI -->

<div class="col-md-4 mb-3">

<label class="form-label fw-bold">
Prodi
</label>

<div class="form-control">
{{ $item->prodi ?? '-' }}
</div>

</div>

<!-- JURUSAN -->

<div class="col-md-4 mb-3">

<label class="form-label fw-bold">
Jurusan
</label>

<div class="form-control">
{{ $item->jurusan ?? '-' }}
</div>

</div>

<!-- LOKASI -->

<div class="col-md-4 mb-3">

<label class="form-label fw-bold">
Lokasi
</label>

<div class="form-control">
{{ $item->lokasi ?? '-' }}
</div>

</div>

<!-- ALAMAT -->

<div class="col-md-8 mb-3">

<label class="form-label fw-bold">
Alamat Institusi
</label>

<div class="form-control">
{{ $item->alamat_institusi ?? '-' }}
</div>

</div>

<!-- KEPALA -->

<div class="col-md-6 mb-3">

<label class="form-label fw-bold">
Kepala Institusi
</label>

<div class="form-control">
{{ $item->kepala_institusi ?? '-' }}
</div>

</div>

<!-- JUDUL -->

<div class="col-md-6 mb-3">

<label class="form-label fw-bold">
Judul Penelitian
</label>

<div class="form-control">
{{ $item->judul_penelitian ?? '-' }}
</div>

</div>

<!-- GELAR -->

<div class="col-md-4 mb-3">

<label class="form-label fw-bold">
Gelar
</label>

<div class="form-control">
{{ $item->gelar ?? '-' }}
</div>

</div>

<!-- SINGKATAN GELAR -->

<div class="col-md-4 mb-3">

<label class="form-label fw-bold">
Singkatan Gelar
</label>

<div class="form-control">
{{ $item->singkatan_gelar ?? '-' }}
</div>

</div>

<!-- LETAK GELAR -->

<div class="col-md-4 mb-3">

<label class="form-label fw-bold">
Letak Gelar
</label>

<div class="form-control">
{{ $item->letak_gelar ?? '-' }}
</div>

</div>

<!-- NO IJAZAH -->

<div class="col-md-4 mb-3">

<label class="form-label fw-bold">
No Ijazah
</label>

<div class="form-control">
{{ $item->no_ijazah ?? '-' }}
</div>

</div>

<!-- TANGGAL IJAZAH -->

<div class="col-md-4 mb-3">

<label class="form-label fw-bold">
Tanggal Ijazah
</label>

<div class="form-control">
{{ $item->tgl_ijazah ?? '-' }}
</div>

</div>

<!-- IPK -->

<div class="col-md-4 mb-3">

<label class="form-label fw-bold">
IPK
</label>

<div class="form-control">
{{ $item->ipk ?? '-' }}
</div>

</div>

<!-- TAHUN MASUK -->

<div class="col-md-6 mb-3">

<label class="form-label fw-bold">
Tahun Masuk
</label>

<div class="form-control">
{{ $item->tahun_masuk ?? '-' }}
</div>

</div>

<!-- TAHUN LULUS -->

<div class="col-md-6 mb-3">

<label class="form-label fw-bold">
Tahun Lulus
</label>

<div class="form-control">
{{ $item->tahun_lulus ?? '-' }}
</div>

</div>

<!-- FILE IJAZAH -->

<div class="col-md-6 mb-3">

<label class="form-label fw-bold">
File Ijazah
</label>

@if($item->file_ijazah)

<div
class="d-flex align-items-center justify-content-between border rounded-4 px-3 py-2"
>

<div class="d-flex align-items-center">

<i class="fa fa-file-pdf text-danger me-2"></i>

<small class="text-muted">
File tersedia
</small>

</div>

<a
href="{{ asset('storage/'.$item->file_ijazah) }}"
target="_blank"
class="btn btn-sm btn-primary rounded-3"
>

<i class="fa fa-eye"></i>

</a>

</div>

@else

<div class="form-control">
Tidak ada file
</div>

@endif

</div>

<!-- FILE TRANSKRIP -->

<div class="col-md-6 mb-3">

<label class="form-label fw-bold">
File Transkrip
</label>

@if($item->file_transkrip)

<div
class="d-flex align-items-center justify-content-between border rounded-4 px-3 py-2"
>

<div class="d-flex align-items-center">

<i class="fa fa-file-pdf text-danger me-2"></i>

<small class="text-muted">
File tersedia
</small>

</div>

<a
href="{{ asset('storage/'.$item->file_transkrip) }}"
target="_blank"
class="btn btn-sm btn-success rounded-3"
>

<i class="fa fa-eye"></i>

</a>

</div>

@else

<div class="form-control">
Tidak ada file
</div>

@endif

</div>

</div>

</div>

</div>

</div>

</div>

@endforeach

</body>
</html>