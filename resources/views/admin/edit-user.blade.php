<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Edit User
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

        body{

            margin:0;
            background:#f1f5f9;
            font-family:'Segoe UI',sans-serif;

        }

        /* SIDEBAR */

        .sidebar{

            width:260px;
            height:100vh;

            position:fixed;
            left:0;
            top:0;

            background:linear-gradient(180deg,#0f172a,#1e293b);

            padding:25px;

            overflow-y:auto;

            z-index:999;

        }

        .logo{

            color:white;
            font-size:28px;
            font-weight:bold;

            margin-bottom:40px;

        }

        .sidebar a{

            display:flex;
            align-items:center;
            gap:12px;

            color:#cbd5e1;
            text-decoration:none;

            padding:14px;

            border-radius:16px;

            margin-bottom:10px;

            transition:.3s;

        }

        .sidebar a:hover{

            background:#2563eb;
            color:white;

        }

        .sidebar a.active{

            background:#334155;
            color:white;

        }

        /* CONTENT */

        .content{

            margin-left:260px;
            padding:30px;

        }

        /* BOX */

        .box{

            background:white;

            border-radius:28px;

            padding:30px;

            box-shadow:0 10px 30px rgba(0,0,0,.05);

        }

        /* INPUT */

        .form-control,
        .form-select{

            border:none;

            border-radius:18px;

            padding:14px;

            background:#f8fafc;

        }

        .form-control:focus,
        .form-select:focus{

            box-shadow:0 0 0 3px rgba(37,99,235,.15);

        }

        /* BUTTON */

        .btn-modern{

            border:none;

            border-radius:18px;

            padding:12px 22px;

            font-weight:600;

        }

        /* MOBILE */

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

        @media(max-width:991px){

            .sidebar{

                left:-100%;

            }

            .sidebar.active{

                left:0;

            }

            .content{

                margin-left:0;

            }

            .menu-toggle{

                display:block;

            }

        }

        /* FOOTER */

        .footer{

            text-align:center;

            margin-top:40px;

            color:#64748b;

            font-size:14px;

        }

        .footer a{

            text-decoration:none;
            color:#0f172a;
            font-weight:bold;

        }

    </style>

</head>
<body>

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

    <a
        href="/user-asn"
        class="active"
    >

        <i class="fa fa-users"></i>

        User ASN

    </a>

    <a href="/unit">

        <i class="fa fa-building"></i>

        Data Unit

    </a>

    <form
        method="POST"
        action="{{ route('logout') }}"
    >

        @csrf

        <button class="btn btn-danger w-100 mt-4 btn-modern">

            Logout

        </button>

    </form>

</div>

<!-- CONTENT -->

<div class="content">

    <!-- MOBILE -->

    <button
        class="menu-toggle"
        onclick="toggleSidebar()"
    >

        <i class="fa fa-bars"></i>

    </button>

    <!-- HEADER -->

    <div class="mb-4">

        <h2 class="fw-bold">

            Edit User

        </h2>

        <small class="text-muted">

            Update data akun ASN/Admin Unit

        </small>

    </div>

    <!-- FORM -->

    <div class="box">

        <form
            method="POST"
            action="/update-user/{{ $user->id }}"
        >

            @csrf

            <div class="row g-3">

                <!-- NIP -->

                <div class="col-md-6">

                    <label class="fw-semibold mb-2">

                        NIP

                    </label>

                    <input
                        type="text"
                        name="nip"
                        class="form-control"
                        value="{{ $user->nip }}"
                        required
                    >

                </div>

                <!-- NAMA -->

                <div class="col-md-6">

                    <label class="fw-semibold mb-2">

                        Nama

                    </label>

                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="{{ $user->name }}"
                        required
                    >

                </div>

                <!-- EMAIL -->

                <div class="col-md-6">

                    <label class="fw-semibold mb-2">

                        Email

                    </label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="{{ $user->email }}"
                        required
                    >

                </div>

                <!-- PASSWORD -->

                <div class="col-md-6">

                    <label class="fw-semibold mb-2">

                        Password Baru

                    </label>

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Kosongkan jika tidak diubah"
                    >

                </div>

                <!-- ROLE -->

                <div class="col-md-6">

                    <label class="fw-semibold mb-2">

                        Role

                    </label>

                    <select
                        name="role"
                        class="form-select"
                    >

                        <option
                            value="asn"
                            {{ $user->role == 'asn' ? 'selected' : '' }}
                        >

                            ASN

                        </option>

                        <option
                            value="admin_unit"
                            {{ $user->role == 'admin_unit' ? 'selected' : '' }}
                        >

                            Admin Unit

                        </option>

                    </select>

                </div>

                <!-- UNIT -->

                <div class="col-md-6">

                    <label class="fw-semibold mb-2">

                        Unit

                    </label>

                    <select
                        name="unit"
                        class="form-select"
                        required
                    >
                    
                        <option value="">
                    
                            Pilih Unit
                    
                        </option>
                    
                        @foreach($units as $unit)
                    
                        <option
                            value="{{ $unit->nama_unit }}"
                            {{ isset($user) && $user->unit == $unit->nama_unit ? 'selected' : '' }}
                        >
                    
                            {{ $unit->nama_unit }}
                    
                        </option>
                    
                        @endforeach
                    
                    </select>

                </div>

            </div>

            <!-- BUTTON -->

            <button
                class="btn btn-dark btn-modern mt-4"
            >

                <i class="fa fa-save"></i>

                Simpan Perubahan

            </button>

        </form>

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