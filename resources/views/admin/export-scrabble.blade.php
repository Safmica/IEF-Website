<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Export Scrabble</title>
    <link rel="icon" href="{{ asset('images/assets/logo_ief_small.png') }}" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <!-- CSS -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <script src="{{ asset('js/checkAdmin.js') }}"></script>

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <style>
        @font-face {
            font-family: "freshman";
            src: url("/fonts/freshman/freshman.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "dortmund";
            src: url("/fonts/dortmund/Dortmund-ExtraBold.otf") format("opentype");
            font-weight: normal;
            font-style: normal;
        }

        :root {
            --blue: #224faa;
            --dark-blue: #15238c;
            --white: #fff6ed;
            --light-grey: #e0dede;
            --yellow: #f4c253;
            --grey: #555555;
            --shadow-nav: 0 2px 10px 2px #000000;
        }

        .nav-link,
        .sb-nav-link-icon {
            text-decoration: none;
            color: var(--white) !important;
        }

        .nav-link:hover,
        .sb-nav-link-icon:hover {
            color: var(--yellow) !important;
        }

        table {
            width: 100%;
        }

        td,
        th {
            text-align: center;
            vertical-align: middle;
        }

        td img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        table.dataTable td {
            vertical-align: middle !important;
        }

        .freshman {
            font-family: 'freshman';
        }

        .dortmund {
            font-family: 'dortmund';
        }

        .bg-blue {
            background: var(--blue);
        }

        .bg-dark-blue {
            background: var(--dark-blue);
        }

        .active {
            color: var(--yellow) !important;
        }

        .btn-copy {
            background-color: #c4ad9d !important;
            color: white !important;
        }

        .btn-csv {
            background-color: #17a2b8 !important;
            color: white !important;
        }

        .btn-excel {
            background-color: #28a745 !important;
            color: white !important;
        }

        .btn-pdf {
            background-color: #dc3545 !important;
            color: white !important;
        }

        .btn-print {
            background-color: #ffc107 !important;
            color: black !important;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-blue">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3 freshman" href="index.php">IEF 2024</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </div>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item dortmund" href="">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark bg-blue" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav dortmund">
                        <div class="sb-sidenav-menu-heading text-light freshman">IEF 2024</div>
                        <a class="nav-link" href="/admin/dashboard">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-file"></i></div>
                            Competition Data
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="/admin/data-debate">Debate</a>
                                <a class="nav-link" href="/admin/data-speech">Speech</a>
                                <a class="nav-link" href="/admin/data-scrabble">Scrabble</a>
                                <a class="nav-link" href="/admin/data-newscasting">Newscasting</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseExportData" aria-expanded="false" aria-controls="collapseExportData">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-file-import"></i></div>
                            Export Data
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseExportData" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="/admin/export-debate">Debate</a>
                                <a class="nav-link" href="/admin/export-speech">Speech</a>
                                <a class="nav-link active" href="/admin/export-scrabble">Scrabble</a>
                                <a class="nav-link" href="/admin/export-newscasting">Newscasting</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="/admin/manage-account">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                            Manage Account
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4 text-dark freshman">Export Data Scrabble</h1>
                    <div class="card mb-4 text-dark mt-3">
                        <div class="card-header mt-3">
                            <div class="export-buttons"></div>
                        </div>
                        <div class="card-body dortmund">

                            <!-- Menampilkan data barang di dalam tabel -->
                            <table class="table table-bordered" id="export-scrabble" width="100%" cellspacing="0" class="text-dark">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Full Name</th>
                                        <th>Competition</th>
                                        <th>Gender</th>
                                        <th>Student Id Number</th>
                                        <th>Major</th>
                                        <th>Faculty</th>
                                        <th>University</th>
                                        <th>Nationality</th>
                                        <th>Phone Number</th>
                                        <th>Email Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($scrabble as $index => $scrabble)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $scrabble->full_name }}</td>
                                        <td>Scrabble</td>
                                        <td>{{ $scrabble->gender }}</td>
                                        <td>{{ $scrabble->student_id_number }}</td>
                                        <td>{{ $scrabble->major }}</td>
                                        <td>{{ $scrabble->faculty }}</td>
                                        <td>{{ $scrabble->university }}</td>
                                        <td>{{ $scrabble->nationality }}</td>
                                        <td>{{ $scrabble->phone_number }}</td>
                                        <td>{{ $scrabble->email_address }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-blue mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-light dortmund">Copyright &copy; International English Festival 2024</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var table = $('#export-scrabble').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'copy',
                        text: '<i class="fas fa-copy"></i> Salin Data',
                        className: 'btn-copy'
                    },
                    {
                        extend: 'csv',
                        text: '<i class="fas fa-file-csv"></i> Ekspor CSV',
                        className: 'btn-csv'
                    },
                    {
                        extend: 'excel',
                        text: '<i class="fas fa-file-excel"></i> Ekspor Excel',
                        className: 'btn-excel'
                    },
                    {
                        extend: 'pdf',
                        text: '<i class="fas fa-file-pdf"></i> Ekspor PDF',
                        className: 'btn-pdf'
                    },
                    {
                        extend: 'print',
                        text: '<i class="fas fa-print"></i> Cetak',
                        className: 'btn-print'
                    }
                ]
            });

            table.buttons().container().appendTo('.export-buttons');
        });
    </script>

    <!-- JS -->
    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="{{ asset('js/datatables-simple-demo.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
</body>

</html>