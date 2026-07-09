<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<table border="1">

    <tr>
        <td colspan="6" style="
            text-align:center;
            font-weight:bold;
            font-size:18px;
        ">
            KEMENTERIAN HAJI DAN UMRAH
        </td>
    </tr>

    <tr>
        <td colspan="6" style="
            text-align:center;
            font-weight:bold;
            font-size:15px;
        ">
            REKAP ABSENSI ASN
        </td>
    </tr>

    <tr>
        <td colspan="6" style="
            text-align:center;
        ">
            Bulan {{ $bulanSekarang }} Tahun {{ $tahun }}
        </td>
    </tr>

    <tr>
        <td colspan="6"></td>
    </tr>

    <!-- HEADER -->

    <tr>

        <th style="
            background:#0f172a;
            color:white;
            font-weight:bold;
        ">
            No
        </th>

        <th style="
            background:#0f172a;
            color:white;
            font-weight:bold;
        ">
            NIP
        </th>

        <th style="
            background:#0f172a;
            color:white;
            font-weight:bold;
        ">
            Nama ASN
        </th>

        <th style="
            background:#0f172a;
            color:white;
            font-weight:bold;
        ">
            File Kinerja
        </th>

        <th style="
            background:#0f172a;
            color:white;
            font-weight:bold;
        ">
            File Absensi
        </th>

        <th style="
            background:#0f172a;
            color:white;
            font-weight:bold;
        ">
            Status
        </th>

    </tr>

    <!-- DATA -->

    @foreach($users as $key => $user)

    @php

    $upload = \App\Models\Upload::where('user_id',$user->id)
    ->where('tahun',$tahun)
    ->where('bulan',$bulanSekarang)
    ->latest()
    ->first();

    @endphp

    <tr>

        <td>

            {{ $key+1 }}

        </td>

        <td>

            {{ $user->nip }}

        </td>

        <td>

            {{ $user->name }}

        </td>

        <td>

            @if($upload && $upload->file_kinerja)

                {{ asset('storage/'.$upload->file_kinerja) }}

            @else

                -

            @endif

        </td>

        <td>

            @if($upload && $upload->file_absensi)

                {{ asset('storage/'.$upload->file_absensi) }}

            @else

                -

            @endif

        </td>

        <td>

            @if($upload)

                @if($upload->status == 'lengkap')

                    Lengkap

                @elseif($upload->status == 'belum lengkap')

                    Belum Lengkap

                @else

                    Belum Upload

                @endif

            @else

                Belum Upload

            @endif

        </td>

    </tr>

    @endforeach

</table>

</body>
</html>