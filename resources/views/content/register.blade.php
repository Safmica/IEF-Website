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
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Icon -->
    <link rel="icon" href="{{ asset('images/assets/logo_ief_small.png') }}" type="image/x-icon">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/checkLogin.js') }}"></script>
    <style>
    .status-registered {
    background-color: rgba(0, 128, 0, 0.1); /* Light green background */
    border-radius: 5px; /* Rounded corners */
    padding: 5px; /* Padding for better spacing */
}

.status-verification {
    background-color: rgba(255, 255, 0, 0.3); /* Light yellow background */
    border-radius: 5px; /* Rounded corners */
    padding: 5px; /* Padding for better spacing */
}

.status-not-registered {
    background-color: rgba(255, 0, 0, 0.1); /* Light red background */
    border-radius: 5px; /* Rounded corners */
    padding: 5px; /* Padding for better spacing */
}


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
                    <div>
                      <p id="debate-status" data-competition="debate">Status</p>
                    </div>
                    <div class="card-footer">
                        <div>
                            <p><strong>HTM:</strong> Rp 150.000</p>
                            <p><strong>Participants:</strong> 2 per team</p>
                        </div>
                        <a href="#" onclick="redirectToRegistration('debate')" class="btn btn-details">Register</a>
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
                    <div>
                      <p id="speech-status">Status : Tidak Daftar</p>
                    </div>
                    <div class="card-footer">
                        <div>
                            <p><strong>HTM:</strong> Rp 80.000</p>
                            <p><strong>Participants:</strong> 1 per person</p>
                        </div>
                        <a href="#" onclick="redirectToRegistration('speech')" class="btn btn-details">Register</a>
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
                    <div>
                      <p id="scrabble-status">Status : Tidak Daftar</p>
                    </div>
                    <div class="card-footer">
                        <div>
                            <p><strong>HTM:</strong> Rp 80.000</p>
                            <p><strong>Participants:</strong> 2 per game</p>
                        </div>
                        <a href="#" onclick="redirectToRegistration('scrabble')" class="btn btn-details">Register</a>
                    </div>
                </div>
            </div>

            <!-- Newscasting Card -->
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                <div class="card competition-card justify-center">
                    <img src="/images/assets/newcasting.jpg" class="card-img-top" alt="Newscasting Image">
                    <div class="card-body">
                        <h5 class="card-title">Newscasting</h5>
                        <p class="card-text">A competition where participants simulate a real news broadcast, displaying presentation skills.</p>
                    </div>
                    <div>
                      <p id="newscasting-status">Status : Tidak Daftar</p>
                    </div>
                    <div class="card-footer">
                        <div class="justify-center">
                            <p><strong>HTM:</strong> Rp 80.000</p>
                            <p><strong>Participants:</strong> 1 per person</p>
                        </div>
                      </div>
                      <div class="justify-center">
                        <a href="#" onclick="redirectToRegistration('newscasting')" class="btn btn-details">Register</a>
                      </div>
                    </div>
            </div>
        </div>
    </div>

    <footer>
      @include('layouts.footer')
  </footer>

    <script>
    window.addEventListener('load', function () {
      loadUserData();
      anotherFunction();
    });

    function loadUserData() {
    const user = JSON.parse(localStorage.getItem('user'));
    console.log(user); // Log the user object to see if it's retrieved correctly

    if (user) {
        const scrabbleStatus = document.getElementById('scrabble-status');
        const debateStatus = document.getElementById('debate-status');
        const speechStatus = document.getElementById('speech-status');
        const newscastingStatus = document.getElementById('newscasting-status');

        // Function to set status and apply color class
        function setStatus(element, status) {
            element.textContent = status;
            element.classList.remove('status-registered', 'status-verification', 'status-not-registered'); // Remove all classes
            switch (status) {
                case 'Registered':
                    element.classList.add('status-registered');
                    break;
                case 'Verification':
                    element.classList.add('status-verification');
                    break;
                case 'Not Registered':
                    element.classList.add('status-not-registered');
                    break;
                default:
                    element.textContent = 'Unknown Status'; // Default case
            }
        }

        // Set status for each competition
        if (scrabbleStatus) setStatus(scrabbleStatus, user.scrabble || 'Not Registered');
        if (debateStatus) setStatus(debateStatus, user.debate || 'Not Registered');
        if (speechStatus) setStatus(speechStatus, user.speech || 'Not Registered');
        if (newscastingStatus) setStatus(newscastingStatus, user.newscasting || 'Not Registered');
    } else {
        console.log('No user data found in localStorage.');
    }
}

function redirectToRegistration(competition) {
    const user = JSON.parse(localStorage.getItem('user'));
    let redirectUrl;

    // Determine the redirect URL based on the user's status
    switch (competition) {
        case 'debate':
            if (user.debate === 'Registered') {
                redirectUrl = '/debate-confirmation'; // Change to your actual confirmation page
            } else if (user.debate === 'Verification') {
                redirectUrl = '/verification'; // Change to your verification page
            } else {
                redirectUrl = '/register-debate'; // Registration page
            }
            break;
        case 'speech':
            if (user.speech === 'Registered') {
                redirectUrl = '/speech-confirmation';
            } else if (user.speech === 'Verification') {
                redirectUrl = '/verification';
            } else {
                redirectUrl = '/register-speech';
            }
            break;
        case 'scrabble':
            if (user.scrabble === 'Registered') {
                redirectUrl = '/scrabble-confirmation';
            } else if (user.scrabble === 'Verification') {
                redirectUrl = '/verification';
            } else {
                redirectUrl = '/register-scrabble';
            }
            break;
        case 'newscasting':
            if (user.newscasting === 'Registered') {
                redirectUrl = '/newscasting-confirmation';
            } else if (user.newscasting === 'Verification') {
                redirectUrl = '/verification';
            } else {
                redirectUrl = '/register-newscasting';
            }
            break;
        default:
            redirectUrl = '/'; // Fallback to home or error page
            break;
    }

    // Redirect to the determined URL
    window.location.href = redirectUrl;
}
    </script>
  
  
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
