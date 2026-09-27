<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOPENJOK - Login</title>
    <link rel="stylesheet" href="style.css">
    <!-- FontAwesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <div class="container">
        <!-- Header Logo & Judul -->
        <div class="header">
            <div class="logo-icon">
                <div class="folder-badge">
                    <i class="fa-solid fa-folder-closed"></i>
                    <i class="fa-solid fa-user user-mini"></i>
                </div>
                <div class="grad-cap">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
            </div>
            
            <h1>MOPENJOK</h1>
            <p class="tagline">• PENYIMPANAN PRIBADI •</p>
            <p class="description">
                Arsip digital, berkas kepangkatan, dan portofolio tridharma perguruan tinggi.
            </p>
        </div>

        <!-- Card Form Login -->
        <div class="card">
            <form action="login.php" method="POST">
                
                <!-- Field Nama -->
                <div class="form-group">
                    <div class="label-wrapper">
                        <label for="nama"><i class="fa-solid fa-user"></i> Nama</label>
                        <span class="badge-verified">Terverifikasi</span>
                    </div>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda..." required>
                </div>

                <!-- Field Kata Sandi -->
                <div class="form-group">
                    <div class="label-wrapper">
                        <label for="password"><i class="fa-solid fa-lock"></i> Kata Sandi</label>
                        <a href="#" class="forgot-pass">Lupa Password?</a>
                    </div>
                    <div class="password-input-wrapper">
                        <input type="password" id="password" name="password" placeholder="Masukkan kata sandi..." required>
                        <i class="fa-regular fa-eye toggle-password" id="togglePassword"></i>
                    </div>
                    <p class="info-text"><i class="fa-regular fa-circle-info"></i> Dibuat saat registrasi akun.</p>
                </div>

                <!-- Remember Me -->
                <div class="form-group checkbox-group">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Ingat saya</label>
                </div>

                <!-- Tombol Submit -->
                <button type="submit" class="btn-submit">
                    <i class="fa-solid fa-lock"></i> MASUK REPOSITORI
                </button>

            </form>
        </div>

        <!-- Banner Registrasi -->
        <div class="register-banner">
            <div class="user-add-icon">
                <i class="fa-solid fa-user-plus"></i>
            </div>
            <div class="banner-text">
                <strong>Pengguna Baru?</strong>
                <span>Aktivasi ruang arsip</span>
            </div>
            <a href="#" class="btn-register">Daftar &gt;</a>
        </div>

    </div>

    <!-- Script Fitur Show/Hide Password -->
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>

</body>
</html>