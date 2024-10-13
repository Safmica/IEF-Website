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
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f7f9fc;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            margin-top: 5%;
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
                    <p class="contact-person">Name: <strong>John Doe</strong></p>
                    <p>Phone: <strong>(123) 456-7890</strong></p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact-card">
                    <h5 class="competition-title">Speech</h5>
                    <p class="contact-person">Name: <strong>Jane Smith</strong></p>
                    <p>Phone: <strong>(098) 765-4321</strong></p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact-card">
                    <h5 class="competition-title">Scrabble</h5>
                    <p class="contact-person">Name: <strong>Mike Johnson</strong></p>
                    <p>Phone: <strong>(555) 123-4567</strong></p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact-card">
                    <h5 class="competition-title">Newscasting</h5>
                    <p class="contact-person">Name: <strong>Emily Davis</strong></p>
                    <p>Phone: <strong>(444) 321-9876</strong></p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
