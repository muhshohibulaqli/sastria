<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<title>Formulir Cuti</title>

<style>

body{
    font-family:"Times New Roman",serif;
    font-size:12px;
}

table{
    width:100%;
    border-collapse:collapse;
}

td,th{
    border:1px solid #000;
    padding:3px;
    vertical-align:top;
}

.no-border{
    border:none !important;
}

.center{
    text-align:center;
}

.right{
    text-align:right;
}

.bold{
    font-weight:bold;
}

.checkbox{
    font-family:DejaVu Sans;
}

</style>

</head>

<body>

<table class="no-border">

<tr>

<td class="no-border right">

ANAK LAMPIRAN 1.b<br>
PERATURAN BADAN KEPEGAWAIAN NEGARA REPUBLIK INDONESIA<br>
NOMOR 24 TAHUN 2017<br>
TENTANG TATA CARA PEMBERIAN CUTI PEGAWAI NEGERI SIPIL

</td>

</tr>

</table>

<br>

<table class="no-border">

<tr>

<td class="no-border">

..................................................

</td>

<td class="no-border">

Kepada

</td>

</tr>

<tr>

<td class="no-border"></td>

<td class="no-border">

Yth. .............................................................

</td>

</tr>

<tr>

<td class="no-border"></td>

<td class="no-border">

di

</td>

</tr>

<tr>

<td class="no-border"></td>

<td class="no-border">

.................................................................

</td>

</tr>

</table>

<br><br>

<h3 style="text-align:center;">

FORMULIR PERMINTAAN DAN PEMBERIAN CUTI

</h3>

<table>

<tr>

<td colspan="4" class="bold">

I. DATA PEGAWAI

</td>

</tr>

<tr>

<td width="15%">Nama</td>

<td width="45%">
{{ $user->name ?? '' }}
</td>

<td width="12%">NIP</td>

<td width="28%">
{{ $user->nip ?? '' }}
</td>

</tr>

<tr>

<td>Jabatan</td>

<td>
{{ $jabatan ?? '' }}
</td>

<td>Masa Kerja</td>

<td>
{{ $masa_kerja ?? '' }}
</td>

</tr>

<tr>

<td>Unit Kerja</td>

<td colspan="3">
{{ $user->unit ?? '' }}
</td>

</tr>

</table>

<br>

<table>

<tr>

<td colspan="2" class="bold">

II. JENIS CUTI YANG DIAMBIL **

</td>

</tr>

<tr>

<td width="50%">

@if($cuti->jenis_cuti == 'Cuti Tahunan')
☑
@else
☐
@endif

1. Cuti Tahunan

</td>

<td width="50%">

@if($cuti->jenis_cuti == 'Cuti Besar')
☑
@else
☐
@endif

2. Cuti Besar

</td>

</tr>

<tr>

<td>

@if($cuti->jenis_cuti == 'Cuti Sakit')
☑
@else
☐
@endif

3. Cuti Sakit

</td>

<td>

@if($cuti->jenis_cuti == 'Cuti Melahirkan')
☑
@else
☐
@endif

4. Cuti Melahirkan

</td>

</tr>

<tr>

<td>

@if($cuti->jenis_cuti == 'Cuti Karena Alasan Penting')
☑
@else
☐
@endif

5. Cuti Karena Alasan Penting

</td>

<td>

@if($cuti->jenis_cuti == 'Cuti di Luar Tanggungan Negara')
☑
@else
☐
@endif

6. Cuti di Luar Tanggungan Negara

</td>

</tr>

</table>

<br>

<table>

<tr>
<td colspan="4" class="bold">
III. ALASAN CUTI
</td>
</tr>

<tr>
<td colspan="4" style="height:60px;">
{{ $cuti->alasan }}
</td>
</tr>

</table>

<br>

<table>

<tr>

<td colspan="4" class="bold">

IV. LAMANYA CUTI

</td>

</tr>

<tr>

<td width="25%">
Selama
</td>

<td width="25%">
{{ $cuti->jumlah_hari }} Hari
</td>

<td width="25%">
Mulai Tanggal
</td>

<td width="25%">
{{ date('d-m-Y',strtotime($cuti->tanggal_mulai)) }}
s/d
{{ date('d-m-Y',strtotime($cuti->tanggal_selesai)) }}
</td>

</tr>

</table>

<br>

<table>

<tr>

<td colspan="4" class="bold">

V. CATATAN CUTI

</td>

</tr>

<tr>

<td width="25%">
Cuti Tahunan
</td>

<td width="25%">
Tahun
</td>

<td width="25%">
Sisa
</td>

<td width="25%">
Keterangan
</td>

</tr>

<tr>

<td rowspan="3">

Sisa Cuti Tahunan

</td>

<td>

N-2

</td>

<td>

{{ $cuti->sisa_n2 }}

</td>

<td>

2 Tahun Sebelumnya

</td>

</tr>

<tr>

<td>

N-1

</td>

<td>

{{ $cuti->sisa_n1 }}

</td>

<td>

1 Tahun Sebelumnya

</td>

</tr>

<tr>

<td>

N

</td>

<td>

{{ $cuti->sisa_n }}

</td>

<td>

Tahun Berjalan

</td>

</tr>

<tr>

<td>

Cuti Besar

</td>

<td colspan="3">

@if($cuti->jenis_cuti == 'Cuti Besar')
Diambil
@else
-----

@endif

</td>

</tr>

<tr>

<td>

Cuti Sakit

</td>

<td colspan="3">

@if($cuti->jenis_cuti == 'Cuti Sakit')
Diambil
@else
-----

@endif

</td>

</tr>

<tr>

<td>

Cuti Melahirkan

</td>

<td colspan="3">

@if($cuti->jenis_cuti == 'Cuti Melahirkan')
Diambil
@else
-----

@endif

</td>

</tr>

<tr>

<td>

Cuti Karena Alasan Penting

</td>

<td colspan="3">

@if($cuti->jenis_cuti == 'Cuti Karena Alasan Penting')
Diambil
@else
-----

@endif

</td>

</tr>

<tr>

<td>

Cuti Diluar Tanggungan Negara

</td>

<td colspan="3">

@if($cuti->jenis_cuti == 'Cuti di Luar Tanggungan Negara')
Diambil
@else
-----

@endif

</td>

</tr>

</table>

<br>

<table>

<tr>

<td colspan="2" class="bold">

VI. ALAMAT SELAMA MENJALANKAN CUTI

</td>

</tr>

<tr>

<td style="height:80px;" width="70%">

.......................................................

<br><br>

.......................................................

</td>

<td width="30%">

TELP :

<br><br>

....................................

</td>

</tr>

</table>

<br>

<table>

<tr>

<td colspan="4" class="bold">

VII. PERTIMBANGAN ATASAN LANGSUNG

</td>

</tr>

<tr>

<td width="25%">

DISETUJUI

</td>

<td width="25%">

PERUBAHAN ****

</td>

<td width="25%">

DITANGGUHKAN ****

</td>

<td width="25%">

TIDAK DISETUJUI ****

</td>

</tr>

<tr>

<td style="height:40px;" class="center">

@if($cuti->status == 'disetujui')

✓

@endif

</td>

<td></td>

<td></td>

<td>

@if($cuti->status == 'ditolak')

✓

@endif

</td>

</tr>

<tr>

<td colspan="4" style="height:120px;">

<div style="float:right;text-align:center;width:250px;">

Atasan Langsung

<br><br><br><br><br>

<u>

..............................................

</u>

<br>

NIP. ....................................

</div>

</td>

</tr>

</table>

<br>

<table>

<tr>

<td colspan="4" class="bold">

VIII. KEPUTUSAN PEJABAT YANG BERWENANG MEMBERIKAN CUTI

</td>

</tr>

<tr>

<td width="25%">

DISETUJUI

</td>

<td width="25%">

PERUBAHAN ****

</td>

<td width="25%">

DITANGGUHKAN ****

</td>

<td width="25%">

TIDAK DISETUJUI ****

</td>

</tr>

<tr>

<td style="height:40px;" class="center">

@if($cuti->status == 'disetujui')

✓

@endif

</td>

<td></td>

<td></td>

<td>

@if($cuti->status == 'ditolak')

✓

@endif

</td>

</tr>

<tr>

<td colspan="4" style="height:140px;">

<div style="float:right;text-align:center;width:250px;">

Pejabat Yang Berwenang

<br><br><br><br><br>

<u>

..............................................

</u>

<br>

NIP. ....................................

</div>

</td>

</tr>

</table>

<br><br>

<table class="no-border">

<tr>

<td class="no-border">

Keterangan :

<br><br>

* Coret yang tidak perlu

<br>

** Pilih salah satu jenis cuti

<br>

*** Diisi oleh pejabat kepegawaian

<br>

**** Beri tanda centang pada pilihan yang sesuai

</td>

</tr>

</table>

</body>

</html>
