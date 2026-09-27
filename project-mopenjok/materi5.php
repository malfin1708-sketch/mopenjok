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
    <title>MOPENJOK - Cecep Sandy Mardiana</title>
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
            <div class="materi-badge-group"><span class="category-tag tag-penelitian">Research & Seminar</span><span class="badge-status"><i class="fa-solid fa-circle-check"></i> Terverifikasi</span></div>
            <h1>Bahan Seminar: Model Pembelajaran Inkuiri Renang</h1>
            <p class="materi-subtitle">Berkas modul ajar renang, dokumentasi foto, slide inkuiri, tes awal SMA 2 Cianjur, dan video pembelajaran.</p>
            <div class="materi-meta-info">
                <span><i class="fa-solid fa-user"></i> Pemilik: Cecep Sandy Mardiana</span>
                <span><i class="fa-solid fa-calendar"></i> Diperbarui: 18 Sep</span>
                <span><i class="fa-solid fa-layer-group"></i> 5 Berkas Terlampir</span>
            </div>
        </div>
        <div class="materi-card">
            <h3><i class="fa-solid fa-folder-open slide-icon"></i> Daftar Lampiran Berkas</h3>
            <div class="download-list" style="margin-top: 16px;">
                <div class="download-item">
                    <div class="file-info"><i class="fa-solid fa-image" style="color: #e67e22;"></i><div><strong>IMG-20260918-WA0002.jpg</strong><span>258 KB • Gambar JPG</span></div></div>
                    <a href=https://drive.google.com/file/d/14QQ1JoyMxq7fmaxCmDxnmaOE4E1kRdaQ/view?usp=drive_link" target="_blank" class="btn-download-file"><i class="fa-solid fa-up-right-from-square"></i> Buka</a>
                </div>
                <div class="download-item">
                    <div class="file-info"><i class="fa-solid fa-file-pdf pdf-color"></i><div><strong>Model Pembelajaran Inkuiri.pdf</strong><span>222 KB • Dokumen PDF</span></div></div>
                    <a href="https://docs.google.com/presentation/d/1CbbmjW1ud7W2h-KSh1i41jkNsAx0OAIV/edit?usp=drive_link&ouid=104037718137916703462&rtpof=true&sd=true" target="_blank" class="btn-download-file"><i class="fa-solid fa-up-right-from-square"></i> Buka</a>
                </div>
                <div class="download-item">
                    <div class="file-info"><i class="fa-solid fa-file-pdf pdf-color"></i><div><strong>Modul Ajar Renang Model Inkuiri.pdf</strong><span>29 KB • Dokumen PDF</span></div></div>
                    <a href="https://docs.google.com/document/d/1S9r3jJTdSn4dH-SEYz7Uk2fpzwieHsDE/edit?usp=drive_link&ouid=104037718137916703462&rtpof=true&sd=true" target="_blank" class="btn-download-file"><i class="fa-solid fa-up-right-from-square"></i> Buka</a>
                </div>
                <div class="download-item">
                    <div class="file-info"><i class="fa-solid fa-file-pdf pdf-color"></i><div><strong>Tes Awal SMA 2 CIANJUR.pdf</strong><span>24 KB • Dokumen PDF</span></div></div>
                    <a href="https://docs.google.com/spreadsheets/d/1aSyzAogGj6FVJBp2M1U9qtVimIoiaRlZ/edit?usp=drive_link&ouid=104037718137916703462&rtpof=true&sd=true" target="_blank" class="btn-download-file"><i class="fa-solid fa-up-right-from-square"></i> Buka</a>
                </div>
                <div class="download-item">
                    <div class="file-info"><i class="fa-solid fa-file-video video-icon"></i><div><strong>Modul pembelajaran Renang.mp4</strong><span>65 MB • Video MP4</span></div></div>
                    <a href="https://drive.google.com/file/d/15iSAI1i1Tu5ih5_z50Vgu4DQRI57Qufl/view?usp=drive_link"_blank" class="btn-download-file"><i class="fa-solid fa-circle-play"></i> Buka</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>