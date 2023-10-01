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

    <!-- Custom fonts for this template-->
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0-alpha2/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <img src="../assets/img/logo-disnaker.png" alt="logo" style="width: 80%;">
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="sertifikat.html">
                <i class="fas fa-certificate"></i>
                <span>Sertifikat</span>
            </a>
            </li>

             <li class="nav-item active">
            <a class="nav-link" href="">
                <i class="fas fa-file-alt"></i>
                <span>Bukti Pendaftaran</span>
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
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
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
                    <header class="container mt-3">
                        <h1>Pendaftaran Pelatihan Disnaker Kota Cirebon</h1>
                        <p>Perhatian!<br>Akun ini digunakan untuk mengajukan layanan secara online. Pastikan nomor HP dan email yang didaftarkan aktif.</p>
                    </header>
                    

                    <main class="container mt-5">
                        <div class="form-group">
                            <h5 class="text-danger" style="text-align: justify;" >Pendaftaran pelatihan dapat dilakukan ketika telah mendaftar pelatihan melalui situs Siapkerja Kementerian Ketenagakerjaan.</h5>
                            <p>Apabila anda belum melakukan pendaftaran silahkan klik link dibawah: <br> <a href="https://siapkerja.kemnaker.go.id" >https://siapkerja.kemnaker.go.id</a> </p>
                        </div>
                        <div class="form-group">
                            <label for="nama">Silahkan upload bukti pendaftaran anda:</label>
                            <input type="file" name="bukti" class="form-control" id="bukti" required>
                        </div>
                         <!-- Tambahkan form untuk upload pas foto ukuran 4x6 -->
                        <div class="form-group">
                            <label for="pasFoto">Upload pas foto ukuran 4x6:</label>
                            <input type="file" name="pasFoto" class="form-control" id="pasFoto" accept=".jpg, .jpeg, .png" onchange="previewPasFoto(event)" required>
                            <small class="form-text text-muted">Format file: JPG, JPEG, PNG</small>
                        </div>

                        <!-- Tampilan gambar setelah diunggah -->
                        <div class="form-group">
                            <label for="previewPasFoto"></label>
                            <img id="previewPasFoto" src="#" alt="Preview Pas Foto" style="max-width: 100%; max-height: 200px;">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                 <form method="post" action="../admin/halaman_admin.php">
                                    <!-- Informasi Akun -->
                                    <div class="form-group">
                                        <label for="namaLengkap">Nama Lengkap:</label>
                                        <input type="text" class="form-control" id="namaLengkap" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirmEmail">Konfirmasi Email:</label>
                                        <input type="email" class="form-control" id="confirmEmail" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="noHP">No Handphone:</label>
                                        <input type="tel" class="form-control" id="noHP" pattern="[0-9]+" title="Hanya boleh berisi angka" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="noKTP">No KTP:</label>
                                        <input type="text" class="form-control" id="noKTP" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempatLahir">Tempat Lahir:</label>
                                        <input type="text" class="form-control" id="tempatLahir" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggalLahir">Tanggal Lahir:</label>
                                        <input type="date" class="form-control" id="tanggalLahir" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pelatihan">Pilih Pelatihan:</label>
                                        <select class="form-control" id="pelatihan" required>
                                            <option value="" disabled selected>Pilih Pelatihan</option>
                                            <option value="Graphic Desain">Graphic Desain</option>
                                            <option value="Digital Marketing">Digital Marketing</option>
                                            <option value="Computer Operator Sistem">Computer Operator Sistem</option>
                                            <option value="Video Editing">Video Editing</option>
                                            <option value="Junior Web Programming">Junior Web Programming</option>
                                            <option value="Plat Welder SMAW 3G UP/PF">Plat Welder SMAW 3G UP/PF</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form>
                                    <!-- Informasi Pribadi -->
                                    <div class="form-group">
                                        <label>Jenis Kelamin:</label>
                                        <select class="form-control" id="jenisKelamin" required>
                                            <option value="" disabled selected>-Pilih-</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="agama">Agama:</label>
                                        <select class="form-control" id="agama" required>
                                            <option value="" disabled selected>-Pilih-</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kewarganegaraan">Kewarganegaraan:</label>
                                        <select class="form-control" id="kewarganegaraan" required>
                                            <option value="" disabled selected>-Pilih-</option>
                                            <option value="WNI">Warga Negara Indonesia (WNI)</option>
                                            <option value="WNA">Warga Negara Asing (WNA)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="domisili">Domisili:</label>
                                        <select class="form-control" id="domisili" required onchange="updateKecamatanOptions()">
                                            <option value="" disabled selected>-Pilih-</option>
                                            <option value="kota">Kota Cirebon</option>
                                            <option value="kabupaten">Kabupaten Cirebon</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kecamatan">Kecamatan:</label>
                                        <select class="form-control" id="kecamatan" required>
                                            <option value="" disabled selected>-Pilih-</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kelurahan">Desa/Kelurahan:</label>
                                        <select class="form-control" id="kelurahan" required>
                                            <option value="" disabled selected>-Pilih-</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status:</label>
                                        <select class="form-control" id="status" required>
                                            <option value="" disabled selected>-Pilih-</option>
                                            <option value="Lajang">Lajang</option>
                                            <option value="Menikah">Menikah</option>
                                            <option value="Duda">Duda</option>
                                            <option value="Janda">Janda</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat:</label>
                                        <textarea class="form-control" id="alamat" rows="3" required></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-left">
                                <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                            </div>
                        </div>
                    </main>
                </form>



                    <!-- Bootstrap JS and jQuery -->
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


                    <!-- Bootstrap JS and jQuery -->
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                    <script>
                        // Data kecamatan dan kelurahan berdasarkan domisili
                        const dataKecamatan = {
                            kota: ["Harjamukti", "Kesambi", "Pekalipan", "Lemahwungkuk", "Kejaksan"],
                            kabupaten: ["Kecamatan 1 Kabupaten", "Kecamatan 2 Kabupaten", "Kecamatan 3 Kabupaten"],
                        };

                        const dataKelurahan = {
                            "Harjamukti": ["Argasunya", "Harjamukti", "Kalijaga", "Kecapi", "Larangan"],
                            "Kesambi": ["Drajat", "Karyamulya", "Kesambi"],
                            "Pekalipan": ["Jagasatru", "Pekalangan", "Pekalipan"],
                            "Lemahwungkuk": ["Kasepuhan", "Lemahwungkuk", "Panjunan", "Pegambiran"],
                            "Kejaksan": ["Kebonbaru", "Kejaksan", "Kesenden", "Sukapura"],
                            "Kecamatan 1 Kabupaten": ["Kelurahan 1 Kecamatan 1 Kabupaten", "Kelurahan 2 Kecamatan 1 Kabupaten", "Kelurahan 3 Kecamatan 1 Kabupaten"],
                            "Kecamatan 2 Kabupaten": ["Kelurahan 1 Kecamatan 2 Kabupaten", "Kelurahan 2 Kecamatan 2 Kabupaten", "Kelurahan 3 Kecamatan 2 Kabupaten"],
                            "Kecamatan 3 Kabupaten": ["Kelurahan 1 Kecamatan 3 Kabupaten", "Kelurahan 2 Kecamatan 3 Kabupaten", "Kelurahan 3 Kecamatan 3 Kabupaten"],
                        };

                        function updateKecamatanOptions() {
                            const domisili = document.getElementById("domisili").value;
                            const kecamatanSelect = document.getElementById("kecamatan");
                            const kelurahanSelect = document.getElementById("kelurahan");

                            // Kosongkan pilihan kecamatan dan kelurahan
                            kecamatanSelect.innerHTML = "<option value='' disabled selected>-Pilih-</option>";
                            kelurahanSelect.innerHTML = "<option value='' disabled selected>-Pilih-</option>";

                            // Isi pilihan kecamatan berdasarkan domisili yang dipilih
                            const kecamatanOptions = dataKecamatan[domisili];
                            kecamatanOptions.forEach((kecamatan) => {
                                const option = document.createElement("option");
                                option.text = kecamatan;
                                kecamatanSelect.add(option);
                            });
                        }

                        function updateKelurahanOptions() {
                            const kecamatan = document.getElementById("kecamatan").value;
                            const kelurahanSelect = document.getElementById("kelurahan");

                            // Kosongkan pilihan kelurahan
                            kelurahanSelect.innerHTML = "<option value='' disabled selected>-Pilih-</option>";

                            // Isi pilihan kelurahan berdasarkan kecamatan yang dipilih
                            const kelurahanOptions = dataKelurahan[kecamatan];
                            kelurahanOptions.forEach((kelurahan) => {
                                const option = document.createElement("option");
                                option.text = kelurahan;
                                kelurahanSelect.add(option);
                            });
                        }

                        // Panggil fungsi updateKecamatanOptions() ketika memilih domisili
                        document.getElementById("domisili").addEventListener("change", updateKecamatanOptions);

                        // Panggil fungsi updateKelurahanOptions() ketika memilih kecamatan
                        document.getElementById("kecamatan").addEventListener("change", updateKelurahanOptions);
                    </script>

                    <script>
                        // Fungsi untuk menampilkan preview gambar pas foto setelah diunggah
                        function previewPasFoto(event) {
                            const input = event.target;
                            if (input.files && input.files[0]) {
                                const reader = new FileReader();
                                reader.onload = function (e) {
                                    const previewPasFoto = document.getElementById('previewPasFoto');
                                    previewPasFoto.src = e.target.result;
                                };
                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>


                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
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

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
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

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

        </body>

        </html>
