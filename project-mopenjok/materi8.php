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
    <title>MOPENJOK - Rafi Pujati S</title>
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
            <div class="materi-badge-group"><span class="category-tag tag-pkm">Pengabdian</span><span class="badge-status"><i class="fa-solid fa-circle-info"></i> Belum Diunggah</span></div>
            <h1>Bahan Seminar: Rafi Pujati S</h1>
            <p class="materi-subtitle">Ruang repositori berkas seminar masih dalam proses unggah berkas oleh pemateri.</p>
            <div class="materi-meta-info">
                <span><i class="fa-solid fa-user"></i> Pemilik: Rafi Pujati S</span>
                <span><i class="fa-solid fa-calendar"></i> Diperbarui: -</span>
                <span><i class="fa-solid fa-layer-group"></i> 0 Berkas</span>
            </div>
        </div>
        <div class="materi-card" style="text-align: center; padding: 40px;">
            <i class="fa-solid fa-folder-open" style="font-size: 48px; color: #ccc; margin-bottom: 12px;"></i>
            <p style="color: #777; font-size: 13px;">Belum ada berkas terlampir dalam folder ini.</p>
        </div>
    </div>
</body>
</html>