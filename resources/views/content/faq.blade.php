<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" href="images/assets/ief2024.png" type="image/x-icon">
</head>

<body>
    <header>
        @include('layouts.navbar')
    </header>
    <h1 class="faq-title">FAQ IEF 2024</h1>

    <div class="faq-container">
        <div class="faq-section" id="faq-left">
            <div class="faq-item">
                <h2>What is the competition about? <i class='bx bx-chevron-down'></i></h2>
                <p>This competition brings together university students to compete in various categories such as Debate, Speech, Newscasting, and Scrabble, enhancing skills in communication, creativity, and teamwork.</p>
            </div>
            <div class="faq-item">
                <h2>Is the commpetition open for Highschool students? <i class='bx bx-chevron-down'></i></h2>
                <p>Yes! this competition is also available for Highschool students, so register yourself now and try your best</p>
            </div>
            <div class="faq-item">
                <h2>Is it possible if one person participates in 2 competitions? <i class='bx bx-chevron-down'></i></h2>
                <p>1 participant can join in 2 competitions if they’re capable.</p>
            </div>
        </div>

        <div class="faq-section" id="faq-right">
            <div class="faq-item">
                <h2>What's the theme for each competition? <i class='bx bx-chevron-down'></i></h2>
                <p>Since our main theme is about Health, so the specific same with</p>
            </div>
            <div class="faq-item">
                <h2>What's the procedure for joining the competition? <i class='bx bx-chevron-down'></i></h2>
                <p>To join the competition, you can directly register by visiting the registration page. Simply fill out the required details, and you'll be all set to participate!</p>
            </div>
            <div class="faq-item">
                <h2>If I'm not from Indonesia but want to join, how about the payment? <i class='bx bx-chevron-down'></i></h2>
                <p>No worries, you can use Paypal as well!</p>
            </div>
        </div>
    </div>

    <script>
        const faqSections = document.querySelectorAll('.faq-section');

        faqSections.forEach(section => {
            const faqItems = section.querySelectorAll('.faq-item');

            faqItems.forEach(item => {
                item.addEventListener('click', () => {
                    item.classList.toggle('active');
                });
            });
        });
    </script>
</body>

</html>