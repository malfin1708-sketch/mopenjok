<?php
session_start();

// Proteksi Halaman: Jika belum login, kembalikan ke index.php
if (!isset($_SESSION['user_nama'])) {
    header("Location: index.php");
    exit();
}

$nama_user = $_SESSION['user_nama'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOPENJOK - Pemutar Video PBL</title>
    <link rel="stylesheet" href="style.css">
    <!-- FontAwesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="dashboard-body">

    <!-- Navbar Atas -->
    <nav class="navbar">
        <div class="nav-brand">
            <div class="logo-icon-sm"><i class="fa-solid fa-folder-closed"></i></div>
            <span>MOPENJOK</span>
        </div>
        <div class="user-profile-nav">
            <i class="fa-solid fa-circle-user"></i>
            <span><?php echo htmlspecialchars($nama_user); ?></span>
            <a href="logout.php" class="btn-logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </div>
    </nav>

    <!-- Container Utama -->
    <div class="dashboard-container" style="max-width: 900px;">
        <a href="materi4.php" class="btn-back"><i class="fa-solid fa-arrow-left"></i> Kembali ke Detail Materi</a>

        <div class="materi-card" style="margin-top: 15px; padding: 24px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                <h3 style="margin: 0;"><i class="fa-solid fa-circle-play video-icon"></i> Vidio Pembelajaran Model PBL</h3>
                <!-- Tombol Fullscreen Manual -->
                <button onclick="toggleFullscreen()" class="btn-download-file" style="cursor: pointer; border: none; font-size: 12px; padding: 8px 14px;">
                    <i class="fa-solid fa-expand"></i> Layar Penuh
                </button>
            </div>
            
            <!-- Pemutar Video dengan Rasio Proporsional 16:9 -->
            <div style="position: relative; width: 100%; padding-top: 56.25%; background: #000; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.15);">
                <video id="playerVideo" controls controlsList="nodownload" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: contain;">
                    <source src="files/Vidio%20Pembelajaran%20Model%20PBL.mp4" type="video/mp4">
                    Browser Anda tidak mendukung pemutaran video ini.
                </video>
            </div>

            <p style="margin-top: 16px; font-size: 12px; color: #666; display: flex; gap: 15px;">
                <span><i class="fa-solid fa-hard-drive"></i> <strong>Ukuran Berkas:</strong> 1,17 GB</span>
                <span><i class="fa-solid fa-file-video"></i> <strong>Format:</strong> MP4 Video (H.264)</span>
            </p>
        </div>
    </div>

    <!-- Script Kontrol Fullscreen -->
    <script>
        function toggleFullscreen() {
            const video = document.getElementById('playerVideo');
            if (video.requestFullscreen) {
                video.requestFullscreen();
            } else if (video.webkitRequestFullscreen) {
                video.webkitRequestFullscreen();
            } else if (video.msRequestFullscreen) {
                video.msRequestFullscreen();
            }
        }
    </script>

</body>
</html>