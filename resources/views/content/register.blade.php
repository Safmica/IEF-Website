<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Link Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Icon -->
    <link rel="icon" href="images/assets/ief2024.png" type="image/x-icon">

    <style>
        .competition-section {
            margin-top: 10%;
            text-align: center;
        }

        .competition-title {
            font-size: 3rem;
            font-weight: bold;
            text-transform: uppercase;
            color: #003399;
            margin-bottom: 20px;
        }

        .competition-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 50px;
        }

        .competition-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            cursor: pointer;
            min-height: 100%;
        }

        .competition-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            flex: 1;
            padding: 20px;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 10px;
            border-top: 1px solid #e0e0e0;
            margin-top: 10px;
        }

        .card-text {
            word-wrap: break-word;
        }

        .btn-details {
            background-color: #003399;
            color: #fff;
            border-radius: 30px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
            margin-left: auto; /* Align the button to the right */
        }

        .btn-details:hover {
            background-color: #0055ff;
        }

        @media (max-width: 768px) {
            .competition-title {
                font-size: 2.5rem;
            }

            .competition-subtitle {
                font-size: 1rem;
                margin-bottom: 30px;
            }

            .card-body {
                padding: 15px;
            }

            .btn-details {
                padding: 8px 15px;
            }

            .card-footer {
                flex-direction: column;
                align-items: flex-start;
            }

            .btn-details {
                margin-top: 10px;
                margin-left: 0;
            }
        }

        @media (min-width: 769px) {
            .competition-card {
                height: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- Navbar End  -->

    <div class="container competition-section" data-aos="fade-up">
        <h1 class="competition-title">Competition</h1>
        <p class="competition-subtitle">Berikut adalah beberapa competition di IEF 2024</p>
        <div class="row justify-content-center">

            <!-- Debate Card -->
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                <div class="card competition-card">
                    <img src="../images/assets/debate.jpg" class="card-img-top" alt="Debate Image">
                    <div class="card-body">
                        <h5 class="card-title">Debate</h5>
                        <p class="card-text">Debate competition focusing on critical thinking and eloquence. Each team consists of 3 participants.</p>
                    </div>
                    <div class="card-footer">
                        <div>
                            <p><strong>HTM:</strong> Rp 150.000</p>
                            <p><strong>Participants:</strong> 2 per team</p>
                        </div>
                        <a href="{{ url('register-debate') }}" class="btn btn-details">Register</a>
                    </div>
                </div>
            </div>

            <!-- Speech Card -->
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                <div class="card competition-card">
                    <img src="/images/assets/spech.jpg" class="card-img-top" alt="Speech Image">
                    <div class="card-body">
                        <h5 class="card-title">Speech</h5>
                        <p class="card-text">A platform for public speaking, where participants deliver speeches on specific topics.</p>
                    </div>
                    <div class="card-footer">
                        <div>
                            <p><strong>HTM:</strong> Rp 100.000</p>
                            <p><strong>Participants:</strong> 1 per person</p>
                        </div>
                        <a href="{{ url('register-speech') }}" class="btn btn-details">Register</a>
                    </div>
                </div>
            </div>

            <!-- Scrabble Card -->
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                <div class="card competition-card">
                    <img src="/images/assets/scramble.jpg" class="card-img-top" alt="Scrabble Image">
                    <div class="card-body">
                        <h5 class="card-title">Scrabble</h5>
                        <p class="card-text">A game of words that tests your vocabulary and strategy. Each game consists of 2 players.</p>
                    </div>
                    <div class="card-footer">
                        <div>
                            <p><strong>HTM:</strong> Rp 120.000</p>
                            <p><strong>Participants:</strong> 2 per game</p>
                        </div>
                        <a href="{{ url('register-scrabble') }}" class="btn btn-details">Register</a>
                    </div>
                </div>
            </div>

            <!-- Newscasting Card -->
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                <div class="card competition-card">
                    <img src="/images/assets/newcasting.jpg" class="card-img-top" alt="Newscasting Image">
                    <div class="card-body">
                        <h5 class="card-title">Newscasting</h5>
                        <p class="card-text">A competition where participants simulate a real news broadcast, displaying presentation skills.</p>
                    </div>
                    <div class="card-footer">
                        <div>
                            <p><strong>HTM:</strong> Rp 130.000</p>
                            <p><strong>Participants:</strong> 1 per person</p>
                        </div>
                        <a href="{{ url('register-newscasting') }}" class="btn btn-details">Register</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
