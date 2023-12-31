<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "multiuser_db";

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function escape_input($conn, $input)
{
    return $conn->real_escape_string($input);
}

function get_all_peserta($conn)
{
    $sql = "SELECT * FROM peserta";
    $result = $conn->query($sql);

    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    return $result;
}

// Fungsi Tambah Data Peserta
if (isset($_POST['daftar'])) {
    // Code to add data to the database. Ensure to use prepared statements.
}

// Fungsi Update (Ubah Data) Peserta
if (isset($_POST['ubah'])) {
    // Code to update data in the database. Ensure to use prepared statements.
}

// Fungsi Delete (Hapus Data) Peserta
if (isset($_POST['hapus'])) {
    // Code to delete data from the database. Ensure to use prepared statements.
}

// Fungsi Read (Baca Data) Peserta
$result = get_all_peserta($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Peserta pelatihan</title>
    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Custom fonts for this template -->
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0-alpha2/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Add this inside the head section of your HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.25.0/font/bootstrap-icons.css">


</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <img src="../assets/img/logo-disnaker.png" alt="logo" style="width: 80%;">
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="halaman_admin.php">
                    <i class="fas fa-file-alt"></i>
                    <span>Daftar Peserta</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="sertifikat.html">
                    <i class="fas fa-certificate"></i>
                    <span>Sertifikat</span>
                </a>
            </li>
           
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../forms/logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">
    <form method="post" action="admin/halaman_admin.php" enctype="multipart/form-data">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>No Handphone</th>
                        <th>No KTP</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Kewarganegaraan</th>
                        <th>Domisili</th>
                        <th>Kecamatan</th>
                        <th>Kelurahan</th>
                        <th>Status</th>
                        <th>Alamat</th>
                        <th>Bukti Pendaftaran</th>
                        <th>Pas Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . escape_input($conn, $row['id_peserta']) . "</td>";
                            echo "<td>" . escape_input($conn, $row['nama_lengkap']) . "</td>";
                            echo "<td>" . escape_input($conn, $row['email']) . "</td>";
                            echo "<td>" . escape_input($conn, $row['no_hp']) . "</td>";
                            echo "<td>" . escape_input($conn, $row['no_ktp']) . "</td>";
                            echo "<td>" . escape_input($conn, $row['tempat_lahir']) . "</td>";
                            echo "<td>" . escape_input($conn, $row['tanggal_lahir']) . "</td>";
                            echo "<td>" . escape_input($conn, $row['jenis_kelamin']) . "</td>";
                            echo "<td>" . escape_input($conn, $row['agama']) . "</td>";
                            echo "<td>" . escape_input($conn, $row['kewarganegaraan']) . "</td>";
                            echo "<td>" . escape_input($conn, $row['domisili']) . "</td>";
                            echo "<td>" . escape_input($conn, $row['kecamatan']) . "</td>";
                            echo "<td>" . escape_input($conn, $row['kelurahan']) . "</td>";
                            echo "<td>" . escape_input($conn, $row['status']) . "</td>";
                            echo "<td>" . escape_input($conn, $row['alamat']) . "</td>";
                            echo "<td>" . escape_input($conn, $row['bukti_pendaftaran']) . "</td>";
                            echo "<td>" . escape_input($conn, $row['pas_foto']) . "</td>";
                            echo "<td>
                                    <div class='btn-group' role='group'>
                                        <button type='button' class='btn btn-sm btn-primary' data-toggle='modal' data-target='#editModal" . escape_input($conn, $row['id_peserta']) . "'><i class='fas fa-edit'></i> Konfirmasi</button>
                                        <form method='post' action='admin/halaman_admin.php' style='display:inline-block;'>
                                            <input type='hidden' name='id_peserta' value='" . escape_input($conn, $row['id_peserta']) . "'>
                                            <button type='submit' class='btn btn-sm btn-danger'><i class='fas fa-trash'></i> Hapus</button>
                                        </form>
                                    </div>
                                </td>";


                            echo "</tr>";

                        }
                    } else {
                        echo "<tr><td colspan='19'>Tidak ada data peserta.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </form>
</div>
<!-- End of Main Content -->


                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="text-center">
                            <span>2023 Disnaker Kota Cirebon. All rights reserved.</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="../forms/logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages -->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
    </body>
</html>
