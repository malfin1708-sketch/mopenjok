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
    <title>MOPENJOK - Hamzah Putra Darmawan</title>
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
            <h1>Bahan Seminar: Model Teaching Personal and Social Responsibility (TPSR)</h1>
            <p class="materi-subtitle">Berkas lengkap paparan materi TPSR, modul ajar, instrumen tes observasi seminar, dan rekaman video pembelajaran.</p>
            <div class="materi-meta-info">
                <span><i class="fa-solid fa-user"></i> Pemilik: Hamzah Putra Darmawan</span>
                <span><i class="fa-solid fa-calendar"></i> Diperbarui: 25 Sep</span>
                <span><i class="fa-solid fa-layer-group"></i> 4 Berkas Terlampir</span>
            </div>
        </div>
        <div class="materi-card">
            <h3><i class="fa-solid fa-folder-open slide-icon"></i> Daftar Lampiran Berkas</h3>
            <div class="download-list" style="margin-top: 16px;">
                
                <!-- FILE 1: VIDEO MOV -->
                <div class="download-item">
                    <div class="file-info">
                        <i class="fa-solid fa-file-video video-icon"></i>
                        <div>
                            <strong>copy_48EC3F53-5CE5-4C6A-AE71-142D63326727.mov</strong>
                            <span>271,4 MB • Video MOV</span>
                        </div>
                    </div>
                    <a href="https://drive.google.com/file/d/1ripKRjSCqXia0hxf5xphTYhUvnx9dNVB/view?usp=drive_link" target="_blank" class="btn-download-file"><i class="fa-solid fa-up-right-from-square"></i> Buka</a>
                </div>

                <!-- FILE 2: PDF MODEL TPSR -->
                <div class="download-item">
                    <div class="file-info">
                        <i class="fa-solid fa-file-pdf pdf-color"></i>
                        <div>
                            <strong>Model TPSR.pdf</strong>
                            <span>33,7 MB • Dokumen PDF</span>
                        </div>
                    </div>
                    <a href="https://drive.google.com/file/d/1ggb7c9URL9oKUEPb7qF23ItDZEg8pyPy/view?usp=drive_link" target="_blank" class="btn-download-file"><i class="fa-solid fa-up-right-from-square"></i> Buka</a>
                </div>

                <!-- FILE 3: PDF MODUL TPSR -->
                <div class="download-item">
                    <div class="file-info">
                        <i class="fa-solid fa-file-pdf pdf-color"></i>
                        <div>
                            <strong>MODUL TPSR.pdf</strong>
                            <span>520 KB • Dokumen PDF</span>
                        </div>
                    </div>
                    <a href=https://drive.google.com/file/d/10eFqkgUfGtLs9uL5bAjtW1puXlI59_D6/view?usp=drive_link" target="_blank" class="btn-download-file"><i class="fa-solid fa-up-right-from-square"></i> Buka</a>
                </div>

                <!-- FILE 4: EXCEL TES OBSERVASI -->
                <div class="download-item">
                    <div class="file-info">
                        <i class="fa-solid fa-file-excel" style="color: #16a34a; font-size: 1.5rem;"></i>
                        <div>
                            <strong>TES OBSERVASI SEMINAR.xlsx</strong>
                            <span>22 KB • Spreadsheet Excel</span>
                        </div>
                    </div>
                    <a href="https://docs.google.com/spreadsheets/d/1CHGebkxuj2vUb6evL4uDRXolsSVHiBQG/edit?usp=drive_link&ouid=104037718137916703462&rtpof=true&sd=true" target="_blank" class="btn-download-file"><i class="fa-solid fa-up-right-from-square"></i> Buka</a>
                </div>

            </div>
        </div>
    </div>
</body>
</html>