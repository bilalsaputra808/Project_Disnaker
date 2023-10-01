<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Add the link to your CSS file here -->
    <link rel="stylesheet" href="../forms/login.css">
    <link href="../assets/img/favicon.png" rel="icon">

    <!-- Add Font Awesome CDNs for the icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
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
        <form class="p-3 mt-3" action="login_control.php" method="post"> <!-- Perhatikan action form ini telah diubah -->
            <p>Email</p>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-envelope"></span>
                <input type="text" name="email" id="email" placeholder="Masukkan email">
            </div>
            <p>Password</p>
            <div class="form-field d-flex align-items-center">
                <span class="password-toggle-icon" onclick="togglePasswordVisibility()">
                    <i class="fas fa-eye"></i>
                </span>
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Masukkan Password">
            </div>
            <button class="btn mt-3">Masuk</button>
        </form>
        <div class="text-center fs-6">
            <p>Belum memiliki akun ?<a href="../forms/signup.php">Daftar sekarang</a></p>
        </div>
    </div>
</body>
</html>
