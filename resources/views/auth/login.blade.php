<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem ASN</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <style>

        body{
            margin:0;
            height:100vh;
            overflow:hidden;
            background:
            linear-gradient(135deg,#0f172a,#1e3a8a);
            font-family:Arial, Helvetica, sans-serif;
        }

        .login-box{
            width:100%;
            max-width:430px;
            background:rgba(255,255,255,0.12);
            backdrop-filter:blur(18px);
            border-radius:28px;
            padding:40px;
            color:white;
            box-shadow:
            0 10px 30px rgba(0,0,0,0.2);
        }

        .logo{
            font-size:34px;
            font-weight:bold;
        }

        .subtitle{
            color:#cbd5e1;
            font-size:14px;
        }

        .form-control{
            height:52px;
            border-radius:14px;
            border:none;
        }

        .btn-login{
            height:52px;
            border-radius:14px;
            background:#2563eb;
            border:none;
            font-weight:bold;
        }

        .btn-login:hover{
            background:#1d4ed8;
        }

    </style>

</head>
<body>

<div class="container h-100 d-flex justify-content-center align-items-center">

    <div class="login-box">

        <div class="text-center mb-4">

            <div class="logo">
                SASTRIA
            </div>

            <div class="subtitle">
                Sistem Administrasi Terintegrasi dan Arsip Digital
            </div>

        </div>

        <form method="POST" action="{{ route('login') }}">

            @csrf

            <div class="mb-3">

                <label class="mb-2">
                    NIP
                </label>

                <input
                    type="text"
                    name="nip"
                    class="form-control"
                    required
                >

            </div>

            <div class="mb-4">

                <label class="mb-2">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    class="form-control"
                    required
                >

            </div>

            <button class="btn btn-primary btn-login w-100">

                <i class="fa fa-right-to-bracket"></i>

                Login

            </button>

        </form>

    </div>

</div>

</body>
</html>