<?php
session_start();
if (!isset($_SESSION['user_nama'])) { header("Location: index.php"); exit(); }
$nama_user = $_SESSION['user_nama'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOPENJOK - Lestari Putri Widuri</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="dashboard-body">
    <nav class="navbar">
        <div class="nav-brand"><div class="logo-icon-sm"><i class="fa-solid fa-folder-closed"></i></div><span>MOPENJOK</span></div>
        <div class="user-profile-nav"><i class="fa-solid fa-circle-user"></i><span><?php echo htmlspecialchars($nama_user); ?></span><a href="logout.php" class="btn-logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></div>
    </nav>
    <div class="dashboard-container" style="max-width: 850px;">
        <a href="dashboard.php" class="btn-back"><i class="fa-solid fa-arrow-left"></i> Kembali ke Dashboard</a>
        <div class="materi-header-card">
            <div class="materi-badge-group"><span class="category-tag tag-pengajaran">Perkuliahan</span><span class="badge-status"><i class="fa-solid fa-circle-check"></i> Terverifikasi</span></div>
            <h1>Bahan Seminar: Teaching Games for Understanding (TGFU)</h1>
            <p class="materi-subtitle">Berkas penjelasan TGFU, modul ajar revisi, instrumen tes awal, dan video simulasi pembelajaran.</p>
            <div class="materi-meta-info">
                <span><i class="fa-solid fa-user"></i> Pemilik: Lestari Putri Widuri</span>
                <span><i class="fa-solid fa-calendar"></i> Diperbarui: 21 Sep</span>
                <span><i class="fa-solid fa-layer-group"></i> 5 Berkas Terlampir</span>
            </div>
        </div>
        <div class="materi-card">
            <h3><i class="fa-solid fa-folder-open slide-icon"></i> Daftar Lampiran Berkas</h3>
            <div class="download-list" style="margin-top: 16px;">
                <div class="download-item">
                    <div class="file-info"><i class="fa-solid fa-file-pdf pdf-color"></i><div><strong>Penjelasan TGFU.pdf</strong><span>21,4 MB • Dokumen PDF</span></div></div>
                    <a href="files/Penjelasan TGFU.pdf" target="_blank" class="btn-download-file"><i class="fa-solid fa-up-right-from-square"></i> Buka</a>
                </div>
                <div class="download-item">
                    <div class="file-info"><i class="fa-solid fa-file-pdf pdf-color"></i><div><strong>MODUL AJAR_LestariPutriWiduri revisi.pdf</strong><span>4,6 MB • Dokumen PDF</span></div></div>
                    <a href="files/MODUL AJAR_LestariPutriWiduri revisi.pdf" target="_blank" class="btn-download-file"><i class="fa-solid fa-up-right-from-square"></i> Buka</a>
                </div>
                <div class="download-item">
                    <div class="file-info"><i class="fa-solid fa-file-pdf pdf-color"></i><div><strong>Tes Awal Seminar.pdf</strong><span>12 KB • Dokumen PDF</span></div></div>
                    <a href="files/Tes Awal Seminar.pdf" target="_blank" class="btn-download-file"><i class="fa-solid fa-up-right-from-square"></i> Buka</a>
                </div>
                <div class="download-item">
                    <div class="file-info"><i class="fa-solid fa-file-video video-icon"></i><div><strong>Materi TGFU.mp4</strong><span>32,6 MB • Video MP4</span></div></div>
                    <a href="https://drive.google.com/file/d/1-GJwCBoHSnH3Bbojnmw7ztzws-kFUkG8/view?usp=drive_link" target="_blank" class="btn-download-file"><i class="fa-solid fa-circle-play"></i> Buka</a>
                </div>
                <div class="download-item">
                    <div class="file-info"><i class="fa-solid fa-file-video video-icon"></i><div><strong>video Pembelajaran TgFU.mp4</strong><span>721,7 MB • Video MP4</span></div></div>
                    <a href="https://drive.google.com/file/d/1c4Umo7uN18l5lTyH5in8uRrIaRkWUIfR/view?usp=drive_link" class="btn-download-file"><i class="fa-solid fa-circle-play"></i> Buka</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>