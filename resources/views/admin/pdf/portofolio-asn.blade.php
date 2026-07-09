<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">

<title>Portofolio ASN</title>

<style>

@page{
    margin:20px;
}

body{
    font-family: DejaVu Sans, sans-serif;
    font-size:11px;
    color:#1e293b;
}

table{
    width:100%;
    border-collapse:collapse;
}

.header{
    background:#0f766e;
    color:white;
    padding:15px;
    border-radius:8px;
}

.logo{
    width:75px;
}

.cover{
    border:1px solid #cbd5e1;
    margin-top:15px;
    padding:20px;
    border-radius:10px;
}

.foto{
    width:130px;
    height:170px;
    object-fit:cover;
    border:3px solid #cbd5e1;
}

.nama{
    font-size:24px;
    font-weight:bold;
}

.section-title{
    background:#0f766e;
    color:white;
    padding:8px 12px;
    margin-top:20px;
    font-weight:bold;
}

.card{
    border:1px solid #cbd5e1;
    margin-bottom:15px;
}

.data td{
    border:1px solid #e2e8f0;
    padding:7px;
}

.label{
    width:250px;
    background:#f8fafc;
    font-weight:bold;
}

.page-break{
    page-break-after:always;
}

</style>

</head>

<body>

<div class="header">

<table border="0">

<tr>

<td width="90">

@if(file_exists(public_path('logo-kemenag.png'))) <img src="{{ public_path('logo-kemenag.png') }}" class="logo">
@endif

</td>

<td align="center">

<h2 style="margin:0;">
KEMENTERIAN AGAMA REPUBLIK INDONESIA
</h2>

<h3 style="margin:5px 0;">
PORTOFOLIO APARATUR SIPIL NEGARA
</h3>

<div>
Sistem Administrasi ASN Terintegrasi
</div>

</td>

</tr>

</table>

</div>

<div class="cover">

<table border="0">

<tr>

<td width="170">

@if($biodata && $biodata->foto)

<img
src="{{ public_path('storage/'.$biodata->foto) }}"
class="foto">

@endif

</td>

<td>

<div class="nama">
{{ strtoupper($user->name) }}
</div>

<br>

<b>NIP</b><br>
{{ $biodata->nip_pppk ?? '-' }}

<br><br>

<b>UNIT KERJA</b><br>
{{ $biodata->unit_kerja ?? '-' }}

<br><br>

<b>STATUS PEGAWAI</b><br>
{{ $biodata->status_pegawai ?? '-' }}

</td>

</tr>

</table>

</div>

<div class="section-title">
IDENTITAS ASN
</div>

<div class="card">

<table class="data">

<tr>
<td class="label">Nama Lengkap</td>
<td>{{ $user->name }}</td>
</tr>

<tr>
<td class="label">Gelar Depan</td>
<td>{{ $biodata->gelar_depan ?? '-' }}</td>
</tr>

<tr>
<td class="label">Gelar Belakang</td>
<td>{{ $biodata->gelar_belakang ?? '-' }}</td>
</tr>

<tr>
<td class="label">Jenis Kelamin</td>
<td>{{ $biodata->jenis_kelamin ?? '-' }}</td>
</tr>

<tr>
<td class="label">Agama</td>
<td>{{ $biodata->agama ?? '-' }}</td>
</tr>

<tr>
<td class="label">Tempat Lahir</td>
<td>{{ $biodata->tempat_lahir ?? '-' }}</td>
</tr>

<tr>
<td class="label">Tanggal Lahir</td>
<td>{{ $biodata->tanggal_lahir ?? '-' }}</td>
</tr>

<tr>
<td class="label">Status Nikah</td>
<td>{{ $biodata->status_nikah ?? '-' }}</td>
</tr>

<tr>
<td class="label">Kewarganegaraan</td>
<td>{{ $biodata->warga_negara ?? '-' }}</td>
</tr>

<tr>
<td class="label">Unit Kerja</td>
<td>{{ $biodata->unit_kerja ?? '-' }}</td>
</tr>

<tr>
<td class="label">Status Aktif</td>
<td>{{ $biodata->status_aktif ?? '-' }}</td>
</tr>

<tr>
<td class="label">Status Pegawai</td>
<td>{{ $biodata->status_pegawai ?? '-' }}</td>
</tr>

<tr>
<td class="label">Karpeg</td>
<td>{{ $biodata->karpeg ?? '-' }}</td>
</tr>

<tr>
<td class="label">Taspen</td>
<td>{{ $biodata->taspen ?? '-' }}</td>
</tr>

<tr>
<td class="label">NIP</td>
<td>{{ $biodata->nip_pppk ?? '-' }}</td>
</tr>

</table>

</div>

<div class="section-title">
KONTAK DAN ALAMAT
</div>

<div class="card">

<table class="data">

<tr>
<td class="label">Nomor HP</td>
<td>{{ $biodata->hp1 ?? '-' }}</td>
</tr>

<tr>
<td class="label">Email Pribadi</td>
<td>{{ $biodata->email_pribadi ?? '-' }}</td>
</tr>

<tr>
<td class="label">Alamat</td>
<td>{{ $biodata->alamat ?? '-' }}</td>
</tr>

<tr>
<td class="label">RT / RW</td>
<td>{{ $biodata->rt_rw ?? '-' }}</td>
</tr>

<tr>
<td class="label">Kelurahan</td>
<td>{{ $biodata->kelurahan ?? '-' }}</td>
</tr>

<tr>
<td class="label">Kode Pos</td>
<td>{{ $biodata->kode_pos ?? '-' }}</td>
</tr>

</table>

</div>

<div class="section-title">
DATA FISIK
</div>

<div class="card">

<table class="data">

<tr>
<td class="label">Golongan Darah</td>
<td>{{ $biodata->golongan_darah ?? '-' }}</td>
</tr>

<tr>
<td class="label">Tinggi Badan</td>
<td>{{ $biodata->tinggi_badan ?? '-' }}</td>
</tr>

<tr>
<td class="label">Berat Badan</td>
<td>{{ $biodata->berat_badan ?? '-' }}</td>
</tr>

<tr>
<td class="label">Hobi</td>
<td>{{ $biodata->hobby ?? '-' }}</td>
</tr>

<tr>
<td class="label">Ukuran Baju</td>
<td>{{ $biodata->ukuran_baju ?? '-' }}</td>
</tr>

</table>

</div>

<div class="section-title">
DATA BANK
</div>

<div class="card">

<table class="data">

<tr>
<td class="label">Nama Bank</td>
<td>{{ $biodata->nama_bank ?? '-' }}</td>
</tr>

<tr>
<td class="label">Nomor Rekening</td>
<td>{{ $biodata->no_rekening ?? '-' }}</td>
</tr>

<tr>
<td class="label">Atas Nama Rekening</td>
<td>{{ $biodata->atas_nama_rekening ?? '-' }}</td>
</tr>

<tr>
<td class="label">Cabang Bank</td>
<td>{{ $biodata->cabang_bank ?? '-' }}</td>
</tr>

</table>

</div>

<div class="section-title">
DOKUMEN ASN
</div>

<div class="card">

<table class="data">

<tr>
<td class="label">KTP</td>
<td>{{ $biodata->file_ktp ? 'Tersedia' : 'Tidak Ada' }}</td>
</tr>

<tr>
<td class="label">KK</td>
<td>{{ $biodata->file_kk ? 'Tersedia' : 'Tidak Ada' }}</td>
</tr>

<tr>
<td class="label">NPWP</td>
<td>{{ $biodata->file_npwp ? 'Tersedia' : 'Tidak Ada' }}</td>
</tr>

<tr>
<td class="label">Karpeg</td>
<td>{{ $biodata->file_karpeg ? 'Tersedia' : 'Tidak Ada' }}</td>
</tr>

<tr>
<td class="label">Taspen</td>
<td>{{ $biodata->file_taspen ? 'Tersedia' : 'Tidak Ada' }}</td>
</tr>

<tr>
<td class="label">Rekening</td>
<td>{{ $biodata->file_rekening ? 'Tersedia' : 'Tidak Ada' }}</td>
</tr>

<tr>
<td class="label">SK CPNS</td>
<td>{{ $biodata->file_sk_cpns ? 'Tersedia' : 'Tidak Ada' }}</td>
</tr>

<tr>
<td class="label">SK KGB</td>
<td>{{ $biodata->file_sk_kgb ? 'Tersedia' : 'Tidak Ada' }}</td>
</tr>

</table>

</div>

<div class="page-break"></div>

<div class="section-title">
RIWAYAT PENDIDIKAN
</div>

@forelse($pendidikans as $item)

<div class="card">

<div style="background:#f1f5f9;padding:10px;font-weight:bold;">
{{ $item->jenjang_pendidikan }}
</div>

<table class="data">

<tr>
<td class="label">Jenjang Pendidikan</td>
<td>{{ $item->jenjang_pendidikan }}</td>
</tr>

<tr>
<td class="label">Nama Institusi</td>
<td>{{ $item->nama_institusi }}</td>
</tr>

<tr>
<td class="label">Fakultas</td>
<td>{{ $item->fakultas }}</td>
</tr>

<tr>
<td class="label">Program Studi</td>
<td>{{ $item->prodi }}</td>
</tr>

<tr>
<td class="label">Jurusan</td>
<td>{{ $item->jurusan }}</td>
</tr>

<tr>
<td class="label">Lokasi</td>
<td>{{ $item->lokasi }}</td>
</tr>

<tr>
<td class="label">Alamat Institusi</td>
<td>{{ $item->alamat_institusi }}</td>
</tr>

<tr>
<td class="label">Kepala Institusi</td>
<td>{{ $item->kepala_institusi }}</td>
</tr>

<tr>
<td class="label">Judul Penelitian</td>
<td>{{ $item->judul_penelitian }}</td>
</tr>

<tr>
<td class="label">Gelar</td>
<td>{{ $item->gelar }}</td>
</tr>

<tr>
<td class="label">Singkatan Gelar</td>
<td>{{ $item->singkatan_gelar }}</td>
</tr>

<tr>
<td class="label">Letak Gelar</td>
<td>{{ $item->letak_gelar }}</td>
</tr>

<tr>
<td class="label">Nomor Ijazah</td>
<td>{{ $item->nomor_ijazah }}</td>
</tr>

<tr>
<td class="label">Tanggal Ijazah</td>
<td>{{ $item->tanggal_ijazah }}</td>
</tr>

<tr>
<td class="label">Tahun Masuk</td>
<td>{{ $item->tahun_masuk }}</td>
</tr>

<tr>
<td class="label">Tahun Lulus</td>
<td>{{ $item->tahun_lulus }}</td>
</tr>

<tr>
<td class="label">IPK</td>
<td>{{ $item->ipk }}</td>
</tr>

<tr>
<td class="label">Status Validasi</td>
<td>{{ $item->validasi_admin_unit }}</td>
</tr>

</table>

</div>

@empty

<div class="card" style="padding:15px">
Belum ada data pendidikan
</div>

@endforelse

<div class="page-break"></div>

<div class="section-title">
RIWAYAT PANGKAT
</div>

@forelse($pangkats as $item)

<div class="card">

<div style="background:#f1f5f9;padding:10px;font-weight:bold;">
{{ $item->nama_pangkat }}
</div>

<table class="data">

<tr>
<td class="label">Jenis SK</td>
<td>{{ $item->jenis_sk }}</td>
</tr>

<tr>
<td class="label">Jenis Pangkat</td>
<td>{{ $item->jenis_pangkat }}</td>
</tr>

<tr>
<td class="label">Nama Pangkat</td>
<td>{{ $item->nama_pangkat }}</td>
</tr>

<tr>
<td class="label">TMT Pangkat</td>
<td>{{ $item->tmt_pangkat }}</td>
</tr>

<tr>
<td class="label">Nomor SK</td>
<td>{{ $item->no_sk }}</td>
</tr>

<tr>
<td class="label">Tanggal SK</td>
<td>{{ $item->tanggal_sk }}</td>
</tr>

<tr>
<td class="label">Pejabat Penetap</td>
<td>{{ $item->pejabat_penetap }}</td>
</tr>

<tr>
<td class="label">Masa Kerja Tahun</td>
<td>{{ $item->masa_kerja_tahun }}</td>
</tr>

<tr>
<td class="label">Masa Kerja Bulan</td>
<td>{{ $item->masa_kerja_bulan }}</td>
</tr>

<tr>
<td class="label">Keterangan</td>
<td>{{ $item->keterangan }}</td>
</tr>

<tr>
<td class="label">Status Validasi</td>
<td>{{ $item->validasi_admin_unit }}</td>
</tr>

<tr>
<td class="label">File SK</td>
<td>
@if($item->file_sk)
Tersedia
@else
Tidak Ada
@endif
</td>
</tr>

</table>

</div>

@empty

<div class="card" style="padding:15px">
Belum ada data pangkat
</div>

@endforelse

<div class="page-break"></div>

<div class="section-title">
RIWAYAT JABATAN
</div>

@forelse($jabatans as $item)

<div class="card">

<div style="background:#f1f5f9;padding:10px;font-weight:bold;">
{{ $item->nama_jabatan }}
</div>

<table class="data">

<tr>
<td class="label">Nama Jabatan</td>
<td>{{ $item->nama_jabatan }}</td>
</tr>

<tr>
<td class="label">TMT Jabatan</td>
<td>{{ $item->tmt_jabatan }}</td>
</tr>

<tr>
<td class="label">Nomor SK</td>
<td>{{ $item->no_sk }}</td>
</tr>

<tr>
<td class="label">Tanggal SK</td>
<td>{{ $item->tanggal_sk }}</td>
</tr>

<tr>
<td class="label">Jenis Jabatan</td>
<td>{{ $item->jenis_jabatan }}</td>
</tr>

<tr>
<td class="label">Pejabat Penetap</td>
<td>{{ $item->pejabat_penetap }}</td>
</tr>

<tr>
<td class="label">Keterangan</td>
<td>{{ $item->keterangan }}</td>
</tr>

<tr>
<td class="label">Status Validasi</td>
<td>{{ $item->validasi_admin_unit }}</td>
</tr>

<tr>
<td class="label">File SK</td>
<td>
@if($item->file_sk)
Tersedia
@else
Tidak Ada
@endif
</td>
</tr>

</table>

</div>

@empty

<div class="card" style="padding:15px">
Belum ada data jabatan
</div>

@endforelse

<br><br><br>

<table border="0">

<tr>

<td width="55%"></td>

<td align="center">

<div>
Dicetak pada:
{{ date('d-m-Y H:i') }}
</div>

<br><br><br>

<div>
Administrator Sistem ASN
</div>

<br><br><br><br>

<div style="font-weight:bold;">
________________________
</div>

</td>

</tr>

</table>

<div style="
position:fixed;
bottom:0;
left:0;
right:0;
text-align:center;
font-size:10px;
color:#64748b;
">

PORTOFOLIO ASN -
{{ strtoupper($user->name) }}

</div>

</body>
</html>
