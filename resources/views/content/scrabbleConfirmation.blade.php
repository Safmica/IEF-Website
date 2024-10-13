<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/checkLogin.js') }}"></script>
    <script src="{{ asset('js/checkRegisteredScrabble.js') }}"></script>
    <link rel="icon" href="{{ asset('images/assets/logo_ief_small.png') }}" type="image/x-icon">
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

        .confirmation-message {
            margin-top: 20px;
            font-size: 1.2rem;
        }

        .group-link {
            margin-top: 20px;
            font-size: 1.1rem;
            color: #007bff;
        }

        .group-link a {
            color: #007bff;
            text-decoration: none;
        }

        .group-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('layouts.navbar')

    <div class="container text-center">
        <h1>Registration Confirmation</h1>
        <p class="confirmation-message">Thank you for registering! Your registration has been confirmed.</p>
        <p class="confirmation-message">For more updates, please join our WhatsApp group:</p>

        <div class="group-link">
            <a href="https://chat.whatsapp.com/your-group-link" target="_blank">Join WhatsApp Group</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
