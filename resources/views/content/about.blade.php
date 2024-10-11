<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <link rel="stylesheet" href='https://unpkg.com/boxicons@latest/css/boxicons.min.css'>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" href="images/assets/ief2024.png" type="image/x-icon">
</head>

<body>
    <header>
        @include('layouts.navbar')
    </header>

    <section class="about-section">
        <div class="about-content">
            <div class="about-video">
                <iframe width="720" height="400" src="https://www.youtube.com/embed/yAoLSRbwxL8"
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
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

    <section class="cta-section">
        <div class="about-content">
            <h2>Ready to Join?</h2>
            <p>Don't miss your chance to participate in IEF 2024 and showcase your English skills to the world. Register now and become part of this exciting international competition!</p>
            <a href="FORM REGISTRASI" class="cta-btn">Register Now</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 IEF - International English Festival. All Rights Reserved.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/materialize.min.js"></script>
    <script src="js/about.js"></script>
</body>

</html>
