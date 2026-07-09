<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <style>

        body{
            font-family:Arial;
            font-size:11px;
        }

        .kop{
            text-align:center;
            margin-bottom:20px;
        }

        h2{
            margin:0;
        }

        h3{
            margin:5px 0;
        }

        p{
            margin:5px 0 15px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            table-layout:fixed;
        }

        table, th, td{
            border:1px solid black;
        }

        th{
            background:#f2f2f2;
            font-weight:bold;
            text-align:center;
        }

        th, td{
            padding:6px;
            vertical-align:top;
        }

        .link{
            font-size:8px;
            color:blue;
            line-height:1.4;
            text-decoration:none;
        }

        .status-green{
            background:#16a34a;
            color:white;
            padding:4px 8px;
            border-radius:8px;
            font-size:9px;
            font-weight:bold;
        }

        .status-yellow{
            background:#f59e0b;
            color:white;
            padding:4px 8px;
            border-radius:8px;
            font-size:9px;
            font-weight:bold;
        }

        .status-red{
            background:#dc2626;
            color:white;
            padding:4px 8px;
            border-radius:8px;
            font-size:9px;
            font-weight:bold;
        }

    </style>

</head>
<body>

<div class="kop">

    <h2>
        KEMENTERIAN HAJI DAN UMRAH
    </h2>

    <h3>
        REKAP ABSENSI ASN
    </h3>

    <p>
        Bulan {{ $bulanSekarang }} Tahun {{ $tahun }}
    </p>

</div>

<table>

    <thead>

        <tr>

            <th width="5%">No</th>
            <th width="10%">NIP</th>
            <th width="16%">Nama ASN</th>
            <th width="30%">File Kinerja</th>
            <th width="30%">File Absensi</th>
            <th width="9%">Status</th>

        </tr>

    </thead>

    <tbody>

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

            <!-- FILE KINERJA -->

            <td>

                @if($upload && $upload->file_kinerja)

                    @php

                    $linkKinerja = asset('storage/'.$upload->file_kinerja);

                    @endphp

                    <a
                        href="{{ $linkKinerja }}"
                        class="link"
                    >

                        {!! chunk_split(

                            $linkKinerja,

                            45,

                            '<br>'

                        ) !!}

                    </a>

                @else

                    -

                @endif

            </td>

            <!-- FILE ABSENSI -->

            <td>

                @if($upload && $upload->file_absensi)

                    @php

                    $linkAbsensi = asset('storage/'.$upload->file_absensi);

                    @endphp

                    <a
                        href="{{ $linkAbsensi }}"
                        class="link"
                    >

                        {!! chunk_split(

                            $linkAbsensi,

                            45,

                            '<br>'

                        ) !!}

                    </a>

                @else

                    -

                @endif

            </td>

            <!-- STATUS -->

            <td>

                @if($upload)

                    @if($upload->status == 'lengkap')

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

        </tr>

        @endforeach

    </tbody>

</table>

</body>
</html>