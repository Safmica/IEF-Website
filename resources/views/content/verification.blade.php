<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Under Verification</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/checkLogin.js') }}"></script>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/checkVerification.js') }}"></script>
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f7f9fc;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            margin-top: 7%;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #003399;
        }

        .contact-card {
            background-color: #e9f1ff;
            border: 1px solid #007bff;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }

        .contact-card:hover {
            transform: scale(1.05);
        }

        .contact-person {
            font-weight: bold;
        }

        .competition-title {
            margin-top: 10px;
            font-size: 1.5rem;
            font-weight: bold;
        }

        @media screen and (max-width: 678px) {
            .container {
                margin-top: 20%;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('layouts.navbar')

    <div class="container text-center">
        <h1>Registration Under Verification</h1>
        <p>Thank you for registering! Your registration is currently under verification.</p>
        <p>Please contact the persons listed below for more information:</p>

        <div class="row">
            <div class="col-md-6">
                <div class="contact-card">
                    <h5 class="competition-title">Debate</h5>
                    <p>Fakhri: <strong>0821-7295-6173</strong></p>
                    <p>Nadhira: <strong>0831-8428-1701</strong></p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact-card">
                    <h5 class="competition-title">Speech</h5>
                    <p>Eka: <strong>0895-3249-85585</strong></p>
                    <p>Sarah: <strong>0823-3089-4841</strong></p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact-card">
                    <h5 class="competition-title">Scrabble</h5>
                    <p>Fathir: <strong>0823-7600-8881</strong></p>
                    <p>Hera: <strong>0877-4843-2023</strong></p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact-card">
                    <h5 class="competition-title">Newscasting</h5>
                    <p>Azmi: <strong>0821-8120-8305</strong></p>
                    <p>Adetya: <strong>0812-5063-7184</strong></p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
