<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/assets/ief2024.png') }}" alt="Logo" width="50" height="50" class="d-inline-block align-text-center me-2">
            IEF 2024
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-lg-center gap-lg-5 mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/welcome">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Competition
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Scrabble</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="">Debate</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="">Newscasting</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="">Speech</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../All Teams/index.html">Timeline</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Kontak/index.html">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="/login" class="btn-signin">Sign In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>