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
    <title>MOPENJOK - Raihan Ayu</title>
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
            <h1>Bahan Seminar: Model Bola Basket TGT Fase E</h1>
            <p class="materi-subtitle">Berkas modul ajar bola basket TGT Fase E Kelas X dan slide presentasi seminar Raihan Ayu.</p>
            <div class="materi-meta-info">
                <span><i class="fa-solid fa-user"></i> Pemilik: Raihan Ayu</span>
                <span><i class="fa-solid fa-calendar"></i> Diperbarui: 18 Sep</span>
                <span><i class="fa-solid fa-layer-group"></i> 2 Berkas Terlampir</span>
            </div>
        </div>
        <div class="materi-card">
            <h3><i class="fa-solid fa-folder-open slide-icon"></i> Daftar Lampiran Berkas</h3>
            <div class="download-list" style="margin-top: 16px;">
                <div class="download-item">
                    <div class="file-info"><i class="fa-solid fa-file-pdf pdf-color"></i><div><strong>Modul Ajar_Bola Basket_TGT_Fase E_Kelas X.pdf</strong><span>795 KB • Dokumen PDF</span></div></div>
                    <a href="files/Modul Ajar_Bola Basket_TGT_Fase E_Kelas X.pdf" target="_blank" class="btn-download-file"><i class="fa-solid fa-up-right-from-square"></i> Buka</a>
                </div>
                <div class="download-item">
                    <div class="file-info"><i class="fa-solid fa-file-pdf pdf-color"></i><div><strong>Ppt seminar_Raihan ayu.pdf</strong><span>3,1 MB • Dokumen PDF</span></div></div>
                    <a href="files/Ppt seminar_Raihan ayu.pdf" target="_blank" class="btn-download-file"><i class="fa-solid fa-up-right-from-square"></i> Buka</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>