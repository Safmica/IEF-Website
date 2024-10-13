<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<script>
window.onload = function () {
    // Cek apakah ada data user di localStorage
    const user = JSON.parse(localStorage.getItem('user'));

    // Mendapatkan elemen tombol sign in dan dropdown
    const signInButton = document.querySelector('.btn-signin');
    const userDropdownContent = document.querySelector('.user-dropdown-content');

    if (user) {
        // Ubah tombol "Sign In" menjadi nama user
        signInButton.textContent = user.name;
        signInButton.classList.add('btn-user'); // Ubah gaya menjadi tombol user

        // Sembunyikan dropdown logout secara default
        userDropdownContent.style.display = 'none'; 

        // Tampilkan dropdown logout saat nama pengguna diklik
        signInButton.addEventListener('click', function () {
            const isVisible = userDropdownContent.style.display === 'block';
            userDropdownContent.style.display = isVisible ? 'none' : 'block'; // Toggle dropdown
        });

        // Logout ketika "Logout" diklik
        const logoutButton = document.getElementById('logoutButton');
        logoutButton.addEventListener('click', function () {
            Swal.fire({
                title: 'Logout',
                text: 'Are you sure you want to log out?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, log out!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Hapus user dari localStorage dan reload halaman
                    localStorage.removeItem('user');
                    location.reload(); // Reload halaman untuk memperbarui tampilan
                }
            });
        });
    } else {
        // Jika tidak ada user, tetap tampilkan "Sign In"
        signInButton.textContent = 'Sign In';
        signInButton.classList.remove('btn-user'); // Pastikan class yang sesuai untuk tombol Sign In

        // Hapus dropdown logout jika tidak ada user
        userDropdownContent.style.display = 'none'; // Sembunyikan dropdown

        // Tambahkan event listener untuk tombol Sign In
        signInButton.addEventListener('click', function () {
            // Tindakan ketika tombol Sign In diklik (misal: redirect ke halaman login)
            window.location.href = '/login'; // Ganti '/login' dengan URL login Anda
        });
    }

    // Tutup dropdown ketika mengklik di luar
    window.onclick = function(event) {
        if (!event.target.matches('.btn-signin')) {
            userDropdownContent.style.display = 'none'; // Sembunyikan dropdown
        }
    }
};
</script>

<style>
    /* Style untuk tombol sign-in yang lebih kontras */
.btn-signin, .btn-user {
    padding: 10px 20px;
    background-color: #d3a237;
    color: rgb(0, 0, 0);
    border-radius: 20px;
    font-weight: bold;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.btn-signin:hover, .btn-user:hover {
    background-color: #c1973c;
    color: #000000;
}

/* Dropdown menu untuk logout */
.user-dropdown {
    position: relative;
    display: inline-block;
}

.user-dropdown-content {
    display: none; /* Default to hidden */
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
    border-radius: 5px;
    overflow: hidden;
}

.user-dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.user-dropdown-content a:hover {
    background-color: #f1f1f1;
}
</style>

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
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/about">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" aria-current="page" href="/competition">Competitions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/register">Register</a>
                </li>
                <li class="nav-item user-dropdown">
                    <a href="javascript:void(0)" class="btn-signin">Sign In</a>
                    <div class="user-dropdown-content">
                        <a href="#" id="logoutButton">Logout</a>
                    </div>
                </li>                
            </ul>
        </div>
    </div>
</nav>
