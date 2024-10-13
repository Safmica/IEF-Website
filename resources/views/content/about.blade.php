<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>

    <!-- Google Fonts and Boxicons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- Bootstrap and Custom Styles -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="css/about.css">

    <!-- AOS (Animate On Scroll) for Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/assets/logo_ief_small.png') }}" type="image/x-icon">
</head>

<body>
    <!-- Navbar Include -->
    <header>
        @include('layouts.navbar')
    </header>

    <!-- About Section -->
    <section class="about-section">
        <div class="about-content">
            <div class="about-video">
                <!-- Video Embed -->
                <iframe width="720" height="400" src="https://www.youtube.com/embed/jhRoM2j4DIU" 
                        title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
            </div>

            <h2 class="about-title">About IEF 2024</h2>
            <p class="about-description">
                The International English Festival (IEF) 2024 is a global event that fosters the development of English language skills among young talents across the globe. As globalization continues to shape our world, proficiency in English is no longer a luxury but a necessity for success in both academic and professional realms.
                <br><br>
                Our event invites students from high schools and universities from Indonesia, Malaysia, the Philippines, and beyond to showcase their linguistic talents in a variety of competitions. This includes Debate, Speech, Scrabble, and Newscasting. Through these competitions, we aim to provide a platform for the youth to express themselves, challenge their peers, and grow in confidence and skill.
                <br><br>
                Hosted by INTEL, the English Language Lovers Community of Universitas Sriwijaya, IEF 2024 continues the tradition of excellence in language mastery while embracing a future full of opportunities for personal and professional growth.
            </p>
        </div>
    </section>

    <footer>
        @include('layouts.footer')
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    {{-- Data AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        </script>
        {{-- Data AOS End --}}

        <!-- Bootstrap JS -->
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
