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
    <title>MOPENJOK - Adrian Hidayat</title>
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
            <h1>Bahan Seminar: Sport Education Model (SEM)</h1>
            <p class="materi-subtitle">Berkas modul ajar, materi presentasi, instrumen tes awal, dan video pelaksanaan pembelajaran Sport Education Model.</p>
            <div class="materi-meta-info">
                <span><i class="fa-solid fa-user"></i> Pemilik: Adrian Hidayat</span>
                <span><i class="fa-solid fa-calendar"></i> Diperbarui: 20 Sep</span>
                <span><i class="fa-solid fa-layer-group"></i> 4 Berkas Terlampir</span>
            </div>
        </div>
        <div class="materi-card">
            <h3><i class="fa-solid fa-folder-open slide-icon"></i> Daftar Lampiran Berkas</h3>
            <div class="download-list" style="margin-top: 16px;">
                <div class="download-item">
                    <div class="file-info"><i class="fa-solid fa-file-pdf pdf-color"></i><div><strong>Modul Ajar SEM Adrian.pdf</strong><span>614 KB • Dokumen PDF</span></div></div>
                    <a href="https://drive.google.com/file/d/11dAc9ygMiRlfZQScQ03wh81bbwyhSviH/view?usp=drive_link" target="_blank" class="btn-download-file"><i class="fa-solid fa-up-right-from-square"></i> Buka</a>
                </div>
                <div class="download-item">
                    <div class="file-info"><i class="fa-solid fa-file-pdf pdf-color"></i><div><strong>Sport Education Model.pdf</strong><span>3,8 MB • Dokumen PDF</span></div></div>
                    <a href="https://drive.google.com/file/d/1P7wZU2s6oktg9p6rgVUoeK7xFuVcrK86/view?usp=drive_link" target="_blank" class="btn-download-file"><i class="fa-solid fa-up-right-from-square"></i> Buka</a>
                </div>
                <div class="download-item">
                    <div class="file-info"><i class="fa-solid fa-file-pdf pdf-color"></i><div><strong>Tes Awal SEM Adrian.pdf</strong><span>12 KB • Dokumen PDF</span></div></div>
                    <a href="https://docs.google.com/spreadsheets/d/1hRXq2faKdpPyr_7WEAFoBjtaDblG1YkX/edit?usp=drive_link&ouid=104037718137916703462&rtpof=true&sd=true" target="_blank" class="btn-download-file"><i class="fa-solid fa-up-right-from-square"></i> Buka</a>
                </div>
                <div class="download-item">
                    <div class="file-info"><i class="fa-solid fa-file-video video-icon"></i><div><strong>Video Pembelajaran Sport Education Model.mp4</strong><span>456,9 MB • Video MP4</span></div></div>
                    <a href="https://drive.google.com/file/d/1WQ3mCayRxQxRLXYBbe7N1k--r0sCpk5C/view?usp=drive_link" target="_blank" class="btn-download-file"><i class="fa-solid fa-circle-play"></i> Buka</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>