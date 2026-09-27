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
    <title>MOPENJOK - Detail Materi Seminar STAD</title>
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
                <span class="category-tag tag-penelitian">Research & Seminar</span>
                <span class="badge-status"><i class="fa-solid fa-circle-check"></i> Terverifikasi</span>
            </div>
            <h1>Bahan Seminar: Model Kooperatif Tipe STAD</h1>
            <p class="materi-subtitle">
                Berkas lengkap bahan ajar, presentasi seminar, instrumen tes awal, dan video pelaksanaan pembelajaran model kooperatif tipe STAD.
            </p>
            <div class="materi-meta-info">
                <span><i class="fa-solid fa-user"></i> Pemilik: Ade Ranjaya</span>
                <span><i class="fa-solid fa-calendar"></i> Diperbarui: 18 Sep</span>
                <span><i class="fa-solid fa-layer-group"></i> 4 Berkas Terlampir</span>
            </div>
        </div>

        <!-- Card Daftar 4 Berkas (Semua tombol otomatis Download) -->
        <div class="materi-card">
            <h3><i class="fa-solid fa-folder-open slide-icon"></i> Daftar Lampiran Berkas Seminar</h3>
            
            <div class="download-list" style="margin-top: 16px;">
                
                <!-- File 1: PPT -->
                <div class="download-item">
                    <div class="file-info">
                        <i class="fa-solid fa-file-pdf pdf-color"></i>
                        <div>
                            <strong>PPT SEMINAR STAD.pdf</strong>
                            <span>3.1 MB • Dokumen PDF / Presentasi</span>
                        </div>
                    </div>
                    <a href="https://docs.google.com/document/d/1AMS4Jnf1kCw-NmwCuFifZWrxWAbILksg/edit?usp=drive_link&ouid=104037718137916703462&rtpof=true&sd=true" download class="btn-download-file">
                        <i class="fa-solid fa-download"></i> Unduh
                    </a>
                </div>

                <!-- File 2: Modul Ajar -->
                <div class="download-item">
                    <div class="file-info">
                        <i class="fa-solid fa-file-pdf pdf-color"></i>
                        <div>
                            <strong>Modul ajar Ade Ranjaya.pdf</strong>
                            <span>566 KB • Dokumen PDF / Modul Ajar</span>
                        </div>
                    </div>
                    <a href="https://docs.google.com/presentation/d/1OvjISekiUTlHx3cwt5P2vXZ8FoDXSWku/edit?usp=drive_link&ouid=104037718137916703462&rtpof=true&sd=true" download class="btn-download-file">
                        <i class="fa-solid fa-download"></i> Unduh
                    </a>
                </div>

                <!-- File 3: Tes Awal -->
                <div class="download-item">
                    <div class="file-info">
                        <i class="fa-solid fa-file-pdf pdf-color"></i>
                        <div>
                            <strong>Tes Awal Model Kooperatif Tipe STAD.pdf</strong>
                            <span>458 KB • Dokumen PDF / Lembar Tes</span>
                        </div>
                    </div>
                    <a href="https://docs.google.com/spreadsheets/d/1XLbnTWbUESAHDyKetSxfkMt8FkUX1nMb/edit?usp=drive_link&ouid=104037718137916703462&rtpof=true&sd=true" download class="btn-download-file">
                        <i class="fa-solid fa-download"></i> Unduh
                    </a>
                </div>

                <!-- File 4: Video MP4 -->
                <div class="download-item">
                    <div class="file-info">
                        <i class="fa-solid fa-file-video video-icon"></i>
                        <div>
                            <strong>VideoModelKooperatifTipeSTAD.mp4</strong>
                            <span>469 MB • Video MP4</span>
                        </div>
                    </div>
                    <a href="https://drive.google.com/file/d/1YSs-3Ozfiv3MkkcFI-S64lZlHZFLG0QH/view?usp=drive_link" download class="btn-download-file">
                        <i class="fa-solid fa-download"></i> Unduh
                    </a>
                </div>

            </div>

        </div>

    </div>

</body>
</html>