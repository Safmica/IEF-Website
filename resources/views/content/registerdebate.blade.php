<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Debate - IEF 2024</title>
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
      background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('https://asset-2.tstatic.net/tribunnews/foto/bank/images/ilustrasi-debat-3.jpg');
      background-size: cover;
      background-position: center;
    }
    .card {
      margin-top: 18%;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 12px;
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
      margin-bottom: 7%;
    }
    
    .card:hover {
      transform: scale(1.02);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);z
    }

    .form-check-label {
      font-size: 0.9rem;
    }

    .btn-gradient {
      background: linear-gradient(to right, #56ccf2, #2f80ed);
      color: white;
      border: none;
      font-size: 1.3rem;
      transition: background 0.3s ease;
    }

    .btn-gradient:hover {
      background: linear-gradient(to right, #2f80ed, #56ccf2);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-control {
      transition: box-shadow 0.3s ease, border-color 0.3s ease;
    }

    .form-control:focus {
      box-shadow: 0 0 10px rgba(0, 123, 255, 0.3);
      border-color: #2f80ed;
    }

    .alert {
      display: none;
    }

    .checkbox-label {
      display: inline-flex;
      align-items: center;
      gap: 10px;
    }

    .checkbox-label input {
      margin-right: 10px;
    }

    /* Tambahkan jarak di bawah teks "Upload Proof of Payment" */
    .form-label + .form-control {
      margin-bottom: 20px;
    }

    /* Tambahkan jarak di bawah teks keterangan pembayaran */
    .about-description {
      margin-bottom: 20px;
    }
  </style>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h3 class="text-center about-title">REGISTRATION</h3>
              <div class="alert alert-success mb-4" id="berhasil">
                <i class="bi bi-check2-square"></i> Registration has been successful.
              </div>
              
            <form id="registrationForm">

              <!-- Container Speaker 1 -->
              <div class="speaker-container mb-4">
                <p class="form-label about-description speaker-title">Speaker 1</p>
                <div class="mb-4">
                  <label for="full_name" class="form-label about-description">Full Name</label>
                  <input type="text" class="form-control" id="full_name" name="full_name" required>
                </div>
                <div class="mb-4">
                  <label for="gender" class="form-label about-description">Gender</label>
                  <input type="text" class="form-control" id="gender" name="gender" required>
                </div>
                <div class="mb-4">
                  <label for="student_id_number" class="form-label about-description">Student ID Number</label>
                  <input type="text" class="form-control" id="student_id_number" name="student_id_number" required>
                </div>
                <div class="mb-4">
                  <label for="major" class="form-label about-description">Major</label>
                  <input class="form-control" type="text" id="major" name="major" required>
                </div>
                <div class="mb-4">
                  <label for="faculty" class="form-label about-description">Faculty</label>
                  <input class="form-control" type="text" id="faculty" name="faculty" required>
                </div>
                <div class="mb-4">
                  <label for="university" class="form-label about-description">University</label>
                  <input class="form-control" type="text" id="university" name="university" required>
                </div>
                <div class="mb-4">
                  <label for="nationality" class="form-label about-description">Nationality</label>
                  <input class="form-control" type="text" id="nationality" name="nationality" required>
                </div>
                <div class="mb-4">
                  <label for="phone_number" class="form-label about-description">Phone Number/Whatsapp</label>
                  <input class="form-control" type="text" id="phone_number" name="phone_number" required>
                </div>
                <div class="mb-4">
                  <label for="email_address" class="form-label about-description">Email Address</label>
                  <input class="form-control" type="email" id="email_address" name="email_address" required>
                </div>
                <div class="mb-4">
                  <label for="photo_upload" class="form-label about-description">Upload Your Photo</label>
                  <input type="file" class="form-control" id="photo_upload" name="photo_upload" required>
                </div>
                <div class="mb-4">
                  <label for="student_card_upload" class="form-label about-description">Upload Your ID Student Card</label>
                  <input type="file" class="form-control" id="student_card_upload" name="student_card_upload" required>
                </div>
              </div>
              
              <!-- Container Speaker 2 -->
              <div class="speaker-container mb-4">
                <p class="form-label about-description speaker-title">Speaker 2</p>
                <div class="mb-4">
                  <label for="full_name" class="form-label about-description">Full Name</label>
                  <input type="text" class="form-control" id="full_name" name="full_name" required>
                </div>
                <div class="mb-4">
                  <label for="gender" class="form-label about-description">Gender</label>
                  <input type="text" class="form-control" id="gender" name="gender" required>
                </div>
                <div class="mb-4">
                  <label for="student_id_number" class="form-label about-description">Student ID Number</label>
                  <input type="text" class="form-control" id="student_id_number" name="student_id_number" required>
                </div>
                <div class="mb-4">
                  <label for="major" class="form-label about-description">Major</label>
                  <input class="form-control" type="text" id="major" name="major" required>
                </div>
                <div class="mb-4">
                  <label for="faculty" class="form-label about-description">Faculty</label>
                  <input class="form-control" type="text" id="faculty" name="faculty" required>
                </div>
                <div class="mb-4">
                  <label for="university" class="form-label about-description">University</label>
                  <input class="form-control" type="text" id="university" name="university" required>
                </div>
                <div class="mb-4">
                  <label for="nationality" class="form-label about-description">Nationality</label>
                  <input class="form-control" type="text" id="nationality" name="nationality" required>
                </div>
                <div class="mb-4">
                  <label for="phone_number" class="form-label about-description">Phone Number/Whatsapp</label>
                  <input class="form-control" type="text" id="phone_number" name="phone_number" required>
                </div>
                <div class="mb-4">
                  <label for="email_address" class="form-label about-description">Email Address</label>
                  <input class="form-control" type="email" id="email_address" name="email_address" required>
                </div>
                <div class="mb-4">
                  <label for="photo_upload" class="form-label about-description">Upload Your Photo</label>
                  <input type="file" class="form-control" id="photo_upload" name="photo_upload" required>
                </div>
                <div class="mb-4">
                  <label for="student_card_upload" class="form-label about-description">Upload Your ID Student Card</label>
                  <input type="file" class="form-control" id="student_card_upload" name="student_card_upload" required>
                </div>
              </div>

              <!-- Container for Payment and Agreements -->
              <div class="mb-4">
                <label for="payment_proof" class="form-label about-description">Upload Proof of Payment</label>
                <input type="file" class="form-control" id="payment_proof" name="payment_proof" required>                
                <p class="form-label about-description mt-2">**Normal registration: Rp. 150.000,00<br>
                **Extended registration: Rp. 200.000,00</p>
                <p class="form-label about-description">Mandiri: 1130018844724 (a.n. ANABEL FIORENZA RIZKYLLAH)<br>
                Dana: 0895359960703<br>
                Shopeepay: 0895359960703</p>
              </div>

              <!-- Checkbox Agreement -->
              <div class="checkbox-label mb-4">
                <input type="checkbox" id="agree_participation" name="agree_participation" required>
                <label for="agree_participation">I agree to participate in the entire selection process until the end of the Debate Competition International English Festival 2024.</label>
              </div>
              <div class="checkbox-label mb-4">
                <input type="checkbox" id="agree_final_decision" name="agree_final_decision" required>
                <label for="agree_final_decision">I understand that the app’s (Woogles.io) decision is final and cannot be contested.</label>
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-gradient">REGIST</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<style>
  /* Style untuk container Speaker */
  .speaker-container {
    border: 2px solid #2f80ed;
    padding: 20px;
    border-radius: 12px;
    background-color: #f7f9fc;
  }

  .speaker-title {
    font-size: 1.5rem;
    font-weight: bold;
    text-align: center;
    margin-bottom: 10px;
    border-bottom: 2px solid #2f80ed;
    padding-bottom: 5px;
    border-radius: 10px;
  }
  
  /* Styling tambahan */
  .btn-gradient {
    background: linear-gradient(45deg, #1e90ff, #00bfff);
    border: none;
    color: white;
    font-size: 1.2rem;
    padding: 12px;
    border-radius: 8px;
  }

  .btn-gradient:hover {
    background: linear-gradient(45deg, #00bfff, #1e90ff);
  }

  .form-label {
    font-size: 1rem;
  }

  .about-title {
    font-size: 2rem;
    font-weight: bold;
    color: #2f80ed;
  }

  .about-description {
    font-size: 1.1rem;
    color: #333;
  }
</style>
</body>
</html>
