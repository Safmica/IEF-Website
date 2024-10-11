<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - IEF 2024</title>
    <link rel="stylesheet" href='https://unpkg.com/boxicons@latest/css/boxicons.min.css'>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" href="images/assets/ief2024.png" type="image/x-icon">
</head>
<body class="bg-black">
<header>
    @include('layouts.navbar')
</header>

<style>
    body {
      background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('https://akcdn.detik.net.id/visual/2021/10/28/film-lightyear-2022-1_169.jpeg?w=650');
      background-size: cover;
      background-position: center;
    }
    .card {
      margin-top: 35%;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .form-check-label {
      font-size: 0.9rem;
    }

    .btn-gradient {
      background: linear-gradient(to right, #56ccf2, #2f80ed);
      color: white;
      border: none;
      font-size: 1.3rem;
    }

    .btn-gradient:hover {
      background: linear-gradient(to right, #2f80ed, #56ccf2);
    }

    .alert {
      display: none;
    }
  </style>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h3 class="text-center about-title">REGISTRASI</h3>
              <div class="alert alert-success mb-4" id="berhasil">
                <i class="bi bi-check2-square"></i> Registrasi telah berhasil.
              </div>
            <form id="registrationForm">
              <div class="mb-4">
                <label for="nama_tim" class="form-label about-description">Nama Tim</label>
                <input type="text" class="form-control" id="nama_tim" name="nama_tim" required>
              </div>
              <div class="mb-4">
                <label for="nama_anggota" class="form-label about-description">Nama Anggota</label>
                <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" required>
              </div>
              <div class="mb-4">
                <label for="email" class="form-label about-description">Email</label>
                <input class="form-control" type="email" id="email" name="email" required>
              </div>
              <div class="mb-4">
                <label for="jenis_lomba" class="form-label about-description">Jenis Lomba</label>
                <select class="form-control" id="jenis_lomba" name="jenis_lomba" required>
                  <option value="Debate">Debate</option>
                  <option value="Speech">Speech</option>
                  <option value="Scrabble">Scrabble</option>
                  <option value="Newscasting">Newscasting</option>
                </select>
              </div>
              <div class="mb-4">
                <label for="bukti_pembayaran" class="form-label about-description">Bukti Pembayaran</label>
                <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran" required>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-gradient">SIGN UP</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/materialize.min.js"></script>
<script src="js/about.js"></script>
<script>
  document.getElementById('registrationForm').addEventListener('submit', function(event) {
    // Cegah form submit jika ada input yang tidak valid
    if (!this.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
    } else {
      // Jika form valid, tampilkan alert sukses
      event.preventDefault(); // Cegah submit form default
      document.getElementById('berhasil').style.display = 'block'; // Tampilkan alert
    }
    // Tambahkan kelas untuk menampilkan validasi HTML5
    this.classList.add('was-validated');
  });
</script>
</body>
</html>
