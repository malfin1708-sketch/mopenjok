<?php
session_start();

// Proteksi Halaman
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
    <title>MOPENJOK - B. Surya Lesmana Nurdiansyah</title>
    <link rel="stylesheet" href="style.css">
    <!-- FontAwesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="dashboard-body">

    <!-- Navbar Atas -->
    <nav class="navbar">
        <div class="nav-brand">
            <div class="logo-icon-sm">
                <i class="fa-solid fa-folder-closed"></i>
            </div>
            <span>MOPENJOK</span>
        </div>

        <div class="user-profile-nav">
            <i class="fa-solid fa-circle-user"></i>
            <span><?php echo htmlspecialchars($nama_user); ?></span>
            <a href="logout.php" class="btn-logout" title="Keluar">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
            </a>
        </div>
    </nav>

    <!-- Container Utama -->
    <div class="dashboard-container" style="max-width: 850px;">
        
        <!-- Tombol Kembali -->
        <a href="dashboard.php" class="btn-back">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Dashboard
        </a>

        <!-- Header Judul Materi -->
        <div class="materi-header-card">
            <div class="materi-badge-group">
                <span class="category-tag tag-pkm">Pengabdian</span>
                <span class="badge-status"><i class="fa-solid fa-circle-check"></i> Terverifikasi</span>
            </div>
            <h1>Bahan Seminar: Model Problem Based Learning (PBL)</h1>
            <p class="materi-subtitle">
                Berkas modul PBL, presentasi PowerPoint, tes awal SMPN 1 Cipanas, dan rekaman video pembelajaran.
            </p>
            <div class="materi-meta-info">
                <span><i class="fa-solid fa-user"></i> Pemilik: B. Surya Lesmana Nurdiansyah</span>
                <span><i class="fa-solid fa-calendar"></i> Diperbarui: 19 Sep</span>
                <span><i class="fa-solid fa-layer-group"></i> 4 Berkas Terlampir</span>
            </div>
        </div>

        <!-- Card Daftar Lampiran Berkas -->
        <div class="materi-card">
            <h3><i class="fa-solid fa-folder-open slide-icon"></i> Daftar Lampiran Berkas</h3>
            
            <div class="download-list" style="margin-top: 16px;">
                
                <!-- File 1: Modul PBL -->
                <div class="download-item">
                    <div class="file-info">
                        <i class="fa-solid fa-file-pdf pdf-color"></i>
                        <div>
                            <strong>Modul_PBL.pdf</strong>
                            <span>358 KB • Dokumen PDF / Modul Ajar</span>
                        </div>
                    </div>
                    <a href="https://docs.google.com/document/d/1ibdnuhlb6cxDYykpw46M03qcCWlMG4dM/edit?usp=drive_link&ouid=104037718137916703462&rtpof=true&sd=true" target="_blank" class="btn-download-file">
                        <i class="fa-solid fa-up-right-from-square"></i> Buka
                    </a>
                </div>

                <!-- File 2: PPT PBL -->
                <div class="download-item">
                    <div class="file-info">
                        <i class="fa-solid fa-file-pdf pdf-color"></i>
                        <div>
                            <strong>PPT_PBL.pdf</strong>
                            <span>3,4 MB • Dokumen PDF / Presentasi</span>
                        </div>
                    </div>
                    <a href="https://docs.google.com/presentation/d/1sIydNesUGNo_Phq8x5bUVfUug4PLXpmw/edit?usp=drive_link&ouid=104037718137916703462&rtpof=true&sd=true" target="_blank" class="btn-download-file">
                        <i class="fa-solid fa-up-right-from-square"></i> Buka
                    </a>
                </div>

                <!-- File 3: Tes Awal SMPN 1 Cipanas -->
                <div class="download-item">
                    <div class="file-info">
                        <i class="fa-solid fa-file-pdf pdf-color"></i>
                        <div>
                            <strong>Tes Awal_SMP Negeri 1 Cipanas.pdf</strong>
                            <span>414 KB • Dokumen PDF / Lembar Tes</span>
                        </div>
                    </div>
                    <a href="https://docs.google.com/spreadsheets/d/1TVUiGlfiSdF6JwIs0mGSW-9pKsrW3ojN/edit?usp=drive_link&ouid=104037718137916703462&rtpof=true&sd=true" target="_blank" class="btn-download-file">
                        <i class="fa-solid fa-up-right-from-square"></i> Buka
                    </a>
                </div>

                <!-- File 4: Video Pembelajaran MP4 -->
                <div class="download-item">
                    <div class="file-info">
                        <i class="fa-solid fa-file-video video-icon"></i>
                        <div>
                            <strong>Vidio Pembelajaran Model PBL.mp4</strong>
                            <span>1,17 GB • Video MP4</span>
                        </div>
                    </div>
                    <a href="https://drive.google.com/file/d/1bxO9Os_y-3f8nYpcGHTNfZe0_8bEjBxb/view?usp=drive_link" class="btn-download-file">
                        <i class="fa-solid fa-circle-play"></i> Buka
                    </a>
                </div>

            </div>

        </div>

    </div>

</body>
</html>