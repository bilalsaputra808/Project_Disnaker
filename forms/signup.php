<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Signup</title>
    
    <!-- Add the link to your CSS file here -->
    <link rel="stylesheet" href="../forms/login.css">
    <link href="../assets/img/favicon.png" rel="icon">

    <!-- Add Font Awesome CDNs for the icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="../assets/img/apple-touch-icon.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Disnaker Kota Cirebon
        </div>
        <form class="p-3 mt-3" action="signup_control.php" method="post">
            <p>Email</p>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-envelope"></span>
                <input type="text" name="email" id="email" placeholder="Masukkan email">
            </div>
            <p>Nama lengkap</p>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="full_name" id="full_ame" placeholder="Masukkan Nama Lengkap">
            </div>
            <p>Password</p>
            <div class="form-field d-flex align-items-center">
                <span class="password-toggle-icon" onclick="togglePasswordVisibility()">
                    <i class="fas fa-eye"></i>
                </span>
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Masukkan Password">
            </div>
            <button class="btn mt-3">Daftar</button>
        </form>
        <div class="text-center fs-6">
            <p>Sudah memiliki akun? <a href="../forms/login.php">Masuk sekarang</a></p>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            const pwdInput = document.getElementById("pwd");
            const toggleIcon = document.querySelector(".password-toggle-icon i");

            if (pwdInput.type === "password") {
                pwdInput.type = "text";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            } else {
                pwdInput.type = "password";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>
</html>
