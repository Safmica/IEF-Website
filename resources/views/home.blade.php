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
    <!-- Icon-->
    <link rel="icon" href="images/assets/ief2024.png" type="image/x-icon">

</head>

<body>
    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Navbar End  -->

    <!-- Start Header -->
    <section class="header mt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 copywriting align-self-center">
                    <span class="big-header mb-10" data-aos="fade-down" data-aos-duration="2500" id="typed-header"></span>
                    {{-- <h1 class="big-header mb-10" id="element" data-aos="fade-right" data-aos-duration="1500">IEF 2024</h1> --}}
                    <p class="primary-copy mb-30" data-aos="fade-right" data-aos-duration="2000">
                        FASILKOM English Festival is an annual international competition held by ILKOM’s Community of English Lovers (INTEL), UNSRI. There are four category of competitions which are debate, speech, scrabble and newscasting. It will be held on 23 October 2024.

                    </p>
                    <a href="#timeline" class="btn-primary mr-10 medium-header-dortmund" data-aos="fade-right" data-aos-duration="2500">Timeline</a>
                </div>

                <div id="carouselExampleSlidesOnly" class="carousel slide col-lg-7 mt-4" data-bs-ride="carousel">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/assets/comingsoonpng.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/assets/comingsoonpng.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/assets/comingsoonpng.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header End -->

    <!-- Timeline -->
    <div class="container mt-100" data-aos="fade-down" data-aos-duration="1000">
        <div class="row text-center">
            <div class="col-lg-12">
                <h3 class="medium-header mb-10" id="timeline">Timeline</h3>
                <p class="primary-copy mb-30">Berikut adalah timeline acara IEF 2024</p>
            </div>
        </div>
    </div>

    <!-- Section: Timeline -->
    <div class="container">
        <section class="py-5 ms-3">
            <ul class="timeline-with-icons">
                <li class="timeline-item mb-5">
                    <span class="timeline-icon">
                        <i class="fas fa-rocket text-primary fa-sm fa-fw"></i>
                    </span>
                    <h5 class="small-header-dortmund mb-2">Registrasi</h5>
                    <p class="text-muted mb-2 fw-bold">14-30 Oktober 2024</p>
                    <p class="text-muted">
                        Periode registrasi ini terbuka bagi seluruh calon peserta yang ingin mengikuti berbagai kompetisi di IEF 2024.
                        Peserta dari berbagai latar belakang, baik mahasiswa, pelajar, maupun peserta umum, dapat mendaftar secara online melalui portal resmi IEF.
                    </p>
                </li>

                <li class="timeline-item mb-5">
                    <span class="timeline-icon">
                        <i class="fas fa-hand-holding-usd text-primary fa-sm fa-fw"></i>
                    </span>
                    <h5 class="small-header-dortmund mb-2">Opening Ceremony (online)</h5>
                    <p class="text-muted mb-2 fw-bold">23 Oktober 2024</p>
                    <p class="text-muted">
                        Acara pembukaan IEF 2024 secara daring, diisi dengan sambutan, informasi acara, dan preview lomba. Dapat diikuti oleh seluruh peserta melalui streaming.
                    </p>
                </li>

                <li class="timeline-item mb-5">
                    <span class="timeline-icon">
                        <i class="fas fa-users text-primary fa-sm fa-fw"></i>
                    </span>
                    <h5 class="small-header-dortmund mb-2">Pengiriman Video Lomba (Speech dan Newscasting)</h5>
                    <p class="text-muted mb-2 fw-bold">23-30 Oktober 2024</p>
                    <p class="text-muted">
                        Peserta kategori Speech dan Newscasting mengirimkan video lomba sesuai tema dan kriteria yang ditentukan untuk penilaian oleh juri.
                    </p>
                </li>

                <li class="timeline-item mb-5">
                    <span class="timeline-icon">
                        <i class="fas fa-money-bill-wave text-primary fa-sm fa-fw"></i>
                    </span>
                    <h5 class="small-header-dortmund mb-2">Penilaian Juri</h5>
                    <p class="text-muted mb-2 fw-bold">30 Oktober 2024 - 1 November 2024</p>
                    <p class="text-muted">
                        Juri melakukan penilaian video untuk kategori Speech dan Newscasting, menilai dari konten, gaya penyampaian, dan kreativitas.
                    </p>
                </li>

                <li class="timeline-item mb-5">
                    <span class="timeline-icon">
                        <i class="fas fa-money-bill-wave text-primary fa-sm fa-fw"></i>
                    </span>
                    <h5 class="small-header-dortmund mb-2">Kegiatan Lomba Debate dan Scrabble</h5>
                    <p class="text-muted mb-2 fw-bold">2 November 2024</p>
                    <p class="text-muted">
                        Pelaksanaan lomba debat dan scrabble. Peserta akan bertanding dalam format turnamen dan diuji kemampuan berargumen dan strategi mereka.
                    </p>
                </li>

                <li class="timeline-item mb-5">
                    <span class="timeline-icon">
                        <i class="fas fa-money-bill-wave text-primary fa-sm fa-fw"></i>
                    </span>
                    <h5 class="small-header-dortmund mb-2">Semi Final Seluruh Kompetisi</h5>
                    <p class="text-muted mb-2 fw-bold">3-4 November 2024</p>
                    <p class="text-muted">
                        Babak semi final untuk seluruh kategori lomba, dengan sistem gugur untuk menentukan siapa yang melaju ke final.
                    </p>
                </li>

                <li class="timeline-item mb-5">
                    <span class="timeline-icon">
                        <i class="fas fa-money-bill-wave text-primary fa-sm fa-fw"></i>
                    </span>
                    <h5 class="small-header-dortmund mb-2">Final Seluruh Kompetisi</h5>
                    <p class="text-muted mb-2 fw-bold">5-6 November 2024</p>
                    <p class="text-muted">
                        Pertandingan babak final untuk semua kompetisi, menampilkan peserta terbaik yang bersaing untuk menjadi pemenang.
                    </p>
                </li>

                <li class="timeline-item mb-5">
                    <span class="timeline-icon">
                        <i class="fas fa-money-bill-wave text-primary fa-sm fa-fw"></i>
                    </span>
                    <h5 class="small-header-dortmund mb-2">Awards Ceremony</h5>
                    <p class="text-muted mb-2 fw-bold">22 November 2024</p>
                    <p class="text-muted">
                        Upacara penghargaan untuk mengumumkan dan memberikan trofi kepada para pemenang dari seluruh kompetisi IEF 2024.
                    </p>
                </li>
            </ul>
        </section>
    </div>
    <!-- Section: Timeline End  -->

    {{-- Timeline End --}}

    <!-- Competition -->
    <div class="container mt-5" data-aos="fade-down" data-aos-duration="1000">
        <div class="row text-center">
            <div class="col-lg-12">
                <h3 class="medium-header mb-10">COMPETITION</h3>
                <p class="primary-copy mb-30">Berikut adalah beberapa competition di IEF 2024</p>
            </div>
        </div>
    </div>

    <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                <div class="card card1">
                    <img src="../images/assets/debate.jpg" class="card-img-top img-fluid" alt="Debate">
                    <div class="card-body">
                        <h5 class="card-title small-header-dortmund mb-10">Debate</h5>
                        <a href="#" target="_blank" class="btn btn-primary">Lihat Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                <div class="card card1">
                    <img src="/images/assets/spech.jpg" class="card-img-top img-fluid" alt="Speech">
                    <div class="card-body">
                        <h5 class="card-title small-header-dortmund mb-10">Speech</h5>
                        <a href="#" target="_blank" class="btn btn-primary">Lihat Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                <div class="card card1">
                    <img src="/images/assets/scramble.jpg" class="card-img-top img-fluid" alt="Scrabble">
                    <div class="card-body">
                        <h5 class="card-title small-header-dortmund mb-10">Scrabble</h5>
                        <a href="#" target="_blank" class="btn btn-primary">Lihat Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                <div class="card card1">
                    <img src="/images/assets/newcasting.jpg" class="card-img-top img-fluid" alt="Newscasting">
                    <div class="card-body">
                        <h5 class="card-title small-header-dortmund mb-10">Newscasting</h5>
                        <a href="#" target="_blank" class="btn btn-primary">Lihat Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Competition End -->

    <!-- Contact Person -->
    <div class="container mt-5" data-aos="fade-down" data-aos-duration="1000">
        <div class="row justify-content-center text-center">
            <div class="col-lg-12">
                <h3 class="medium-header mb-10">CONTACT PERSON</h3>
                <p class="primary-copy">Berikut adalah contact person competition</p>
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-5" data-aos="fade-down" data-aos-duration="1000">
        <div class="row text-center">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card card1">
                    <a href="https://wa.me/your-whatsapp-number" target="_blank">
                        <img src="/images/assets/contactdebate.png" class="card-img-top img-fluid" alt="...">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card card1">
                    <a href="https://wa.me/your-whatsapp-number" target="_blank">
                        <img src="/images/assets/contactspeech.png" class="card-img-top img-fluid" alt="...">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card card1">
                    <a href="https://wa.me/your-whatsapp-number" target="_blank">
                        <img src="/images/assets/contactscrabble.png" class="card-img-top img-fluid" alt="...">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card card1">
                    <a href="https://wa.me/your-whatsapp-number" target="_blank">
                        <img src="/images/assets/contactnewcasting.png" class="card-img-top img-fluid" alt="...">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Person End -->


    {{-- Typed JS --}}
    <Script>
        var typed = new Typed('#typed-header', {
            strings: ['IEF 2024'],
            typeSpeed: 90,
            backSpeed: 90,
            loop: true,
            cursorChar: '_', // Ganti karakter kursor jika diperlukan
        });
        </Script>

{{-- Data AOS --}}
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
    </script>
    {{-- Data AOS End --}}

    <!-- Bootstrap JS -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
