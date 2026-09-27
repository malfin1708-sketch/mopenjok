<?php
// Mencegah PHP Warning terkait variabel session/user
session_start();

// Inisialisasi variabel nama_user jika belum ada di Session
if (isset($_SESSION['nama_user'])) {
    $nama_user = $_SESSION['nama_user'];
} else {
    $nama_user = 'Pengguna'; // Default jika diakses langsung tanpa login
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOPENJOK - Dashboard Repositori</title>
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --accent-yellow: #ffc800;
            --accent-yellow-dark: #e6b400;
            --bg-light: #f8fafc;
            --card-bg: #ffffff;
            --text-dark: #0f172a;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body.dashboard-body {
            background-color: var(--bg-light);
            color: var(--text-dark);
            min-height: 100vh;
        }

        /* Navbar Atas */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 100;
            background-color: var(--accent-yellow);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.9rem 2rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .nav-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            font-size: 1.25rem;
            color: #111111;
            letter-spacing: -0.5px;
        }

        .logo-icon-sm {
            background: #111111;
            color: var(--accent-yellow);
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
        }

        .search-box {
            position: relative;
            width: 100%;
            max-width: 420px;
        }

        .search-box i {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
            font-size: 0.9rem;
        }

        .search-box input {
            width: 100%;
            padding: 0.65rem 1rem 0.65rem 2.5rem;
            border-radius: 50px;
            border: 1px solid rgba(0, 0, 0, 0.15);
            background: rgba(255, 255, 255, 0.9);
            font-size: 0.9rem;
            outline: none;
            transition: all 0.3s ease;
        }

        .search-box input:focus {
            background: #ffffff;
            border-color: #111111;
            box-shadow: 0 0 0 3px rgba(17, 17, 17, 0.1);
        }

        .user-profile-nav {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 500;
            font-size: 0.9rem;
            color: #111111;
        }

        .btn-logout {
            background: #111111;
            color: #ffffff;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            text-decoration: none;
            font-size: 0.82rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s ease;
        }

        .btn-logout:hover {
            background: #333333;
            transform: translateY(-1px);
        }

        /* Container & Filter Bar */
        .dashboard-container {
            max-width: 1300px;
            margin: 90px auto 40px;
            padding: 0 2rem;
        }

        .filter-bar {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .filter-btn {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            padding: 0.6rem 1.2rem;
            border-radius: 50px;
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--text-dark);
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
            transition: all 0.3s ease;
        }

        .filter-btn.active {
            background-color: #111111 !important;
            color: var(--accent-yellow) !important;
            border-color: #111111 !important;
        }

        /* Grid Cards */
        .deck-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
            gap: 1.8rem;
        }

        .deck-card {
            background: var(--card-bg);
            border-radius: 16px;
            border: 1px solid var(--border-color);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
            transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .deck-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            border-color: var(--accent-yellow-dark);
        }

        /* Header Gradien Warna */
        .deck-header {
            position: relative;
            padding: 1.2rem 1.4rem;
            height: 110px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: #ffffff;
            overflow: hidden;
        }

        .bg-gradient-1 { background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); }
        .bg-gradient-2 { background: linear-gradient(135deg, #334155 0%, #1e293b 100%); }
        .bg-gradient-3 { background: linear-gradient(135deg, #475569 0%, #334155 100%); }

        .file-type-badge {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(8px);
            padding: 0.3rem 0.75rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            width: fit-content;
            letter-spacing: 0.5px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #ffffff;
        }

        .deck-icon-bg {
            position: absolute;
            right: -10px;
            bottom: -15px;
            font-size: 5rem;
            opacity: 0.12;
            color: #ffffff;
        }

        .slide-count {
            font-size: 0.8rem;
            font-weight: 500;
            color: var(--accent-yellow);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .deck-body {
            padding: 1.4rem;
            flex-grow: 1;
        }

        .category-tag {
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #854d0e;
            background: #fef9c3;
            padding: 0.25rem 0.6rem;
            border-radius: 6px;
            display: inline-block;
            margin-bottom: 0.8rem;
        }

        .deck-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.6rem;
            line-height: 1.4;
        }

        .deck-desc {
            font-size: 0.85rem;
            color: var(--text-muted);
            line-height: 1.5;
            margin-bottom: 1.2rem;
        }

        .deck-meta {
            display: flex;
            flex-direction: column;
            gap: 6px;
            font-size: 0.8rem;
            color: var(--text-muted);
            border-top: 1px dashed var(--border-color);
            padding-top: 0.9rem;
        }

        .deck-meta span {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .deck-meta i {
            color: var(--text-dark);
            width: 14px;
        }

        .deck-footer {
            padding: 1rem 1.4rem;
            background: #fafafa;
            border-top: 1px solid var(--border-color);
        }

        .btn-preview {
            background-color: var(--accent-yellow);
            color: #111111;
            font-weight: 600;
            font-size: 0.88rem;
            padding: 0.65rem 1rem;
            border-radius: 10px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-preview:hover {
            background-color: var(--accent-yellow-dark);
            transform: translateY(-1px);
        }
    </style>
</head>
<body class="dashboard-body">

    <!-- Navbar Atas -->
    <nav class="navbar">
        <div class="nav-brand">
            <div class="logo-icon-sm"><i class="fa-solid fa-folder-closed"></i></div>
            <span>MOPENJOK</span>
        </div>
        
        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" id="searchInput" onkeyup="searchMateri()" placeholder="Cari bahan presentasi atau pemateri...">
        </div>

        <div class="user-profile-nav">
            <i class="fa-solid fa-circle-user" style="font-size: 1.2rem;"></i>
            <span><?php echo htmlspecialchars($nama_user); ?></span>
            <a href="logout.php" class="btn-logout" title="Kembali ke Beranda"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </div>
    </nav>

    <!-- Container Utama -->
    <div class="dashboard-container">

        <!-- Filter Bar -->
        <div class="filter-bar" style="margin-bottom: 24px;">
            <button class="filter-btn active"><i class="fa-solid fa-border-all"></i> Semua File (9)</button>
        </div>

        <!-- Grid 9 Berkas Presentasi -->
        <div class="deck-grid" id="deckGrid">

            <!-- MATERI 1 -->
            <div class="deck-card">
                <div class="deck-header bg-gradient-1">
                    <span class="file-type-badge"><i class="fa-solid fa-file-pdf"></i> PDF & MP4</span>
                    <i class="fa-solid fa-display deck-icon-bg"></i>
                    <div class="slide-count"><i class="fa-solid fa-layer-group"></i> 4 Berkas</div>
                </div>
                <div class="deck-body">
                    <span class="category-tag">Laporan PPG</span>
                    <h4 class="deck-title">01. Model Kooperatif Tipe STAD</h4>
                    <p class="deck-desc">Bahan seminar lengkap, modul ajar, instrumen tes awal, dan video rekaman STAD.</p>
                    <div class="deck-meta">
                        <span><i class="fa-solid fa-user"></i> Ade Ranjaya</span>
                        <span><i class="fa-solid fa-clock"></i> 18 Sep 2026</span>
                    </div>
                </div>
                <div class="deck-footer">
                    <a href="materi.php" class="btn-preview">
                        <i class="fa-solid fa-folder-open"></i> Buka Materi
                    </a>
                </div>
            </div>

            <!-- MATERI 2 -->
            <div class="deck-card">
                <div class="deck-header bg-gradient-2">
                    <span class="file-type-badge"><i class="fa-solid fa-file-pdf"></i> PDF & MP4</span>
                    <i class="fa-solid fa-person-running deck-icon-bg"></i>
                    <div class="slide-count"><i class="fa-solid fa-layer-group"></i> 4 Berkas</div>
                </div>
                <div class="deck-body">
                    <span class="category-tag">Laporan PPG</span>
                    <h4 class="deck-title">02. Sport Education Model (SEM)</h4>
                    <p class="deck-desc">Modul ajar SEM, materi presentasi, instrumen tes awal, dan video pembelajaran.</p>
                    <div class="deck-meta">
                        <span><i class="fa-solid fa-user"></i> Adrian Hidayat</span>
                        <span><i class="fa-solid fa-clock"></i> 20 Sep 2026</span>
                    </div>
                </div>
                <div class="deck-footer">
                    <a href="materi2.php" class="btn-preview">
                        <i class="fa-solid fa-folder-open"></i> Buka Materi
                    </a>
                </div>
            </div>

            <!-- MATERI 3 -->
            <div class="deck-card">
                <div class="deck-header bg-gradient-3">
                    <span class="file-type-badge"><i class="fa-solid fa-file-pdf"></i> PDF</span>
                    <i class="fa-solid fa-volleyball deck-icon-bg"></i>
                    <div class="slide-count"><i class="fa-solid fa-layer-group"></i> 3 Berkas</div>
                </div>
                <div class="deck-body">
                    <span class="category-tag">Laporan PPG</span>
                    <h4 class="deck-title">03. Model Pembelajaran PSI Bola Voli</h4>
                    <p class="deck-desc">Slide presentasi model pembelajaran PSI, modul ajar bola voli, dan tes awal seminar.</p>
                    <div class="deck-meta">
                        <span><i class="fa-solid fa-user"></i> Alan Krisna J.</span>
                        <span><i class="fa-solid fa-clock"></i> 18 Sep 2026</span>
                    </div>
                </div>
                <div class="deck-footer">
                    <a href="materi3.php" class="btn-preview">
                        <i class="fa-solid fa-folder-open"></i> Buka Materi
                    </a>
                </div>
            </div>

            <!-- MATERI 4 -->
            <div class="deck-card">
                <div class="deck-header bg-gradient-1">
                    <span class="file-type-badge"><i class="fa-solid fa-file-pdf"></i> PDF & MP4</span>
                    <i class="fa-solid fa-puzzle-piece deck-icon-bg"></i>
                    <div class="slide-count"><i class="fa-solid fa-layer-group"></i> 4 Berkas</div>
                </div>
                <div class="deck-body">
                    <span class="category-tag">Laporan PPG</span>
                    <h4 class="deck-title">04. Model Problem Based Learning (PBL)</h4>
                    <p class="deck-desc">Modul PBL, presentasi, instrumen tes SMPN 1 Cipanas, dan video pembelajaran MP4.</p>
                    <div class="deck-meta">
                        <span><i class="fa-solid fa-user"></i> B. Surya Lesmana</span>
                        <span><i class="fa-solid fa-clock"></i> 19 Sep 2026</span>
                    </div>
                </div>
                <div class="deck-footer">
                    <a href="materi4.php" class="btn-preview">
                        <i class="fa-solid fa-folder-open"></i> Buka Materi
                    </a>
                </div>
            </div>

            <!-- MATERI 5 -->
            <div class="deck-card">
                <div class="deck-header bg-gradient-2">
                    <span class="file-type-badge"><i class="fa-solid fa-file-pdf"></i> PDF, JPG & MP4</span>
                    <i class="fa-solid fa-person-swimming deck-icon-bg"></i>
                    <div class="slide-count"><i class="fa-solid fa-layer-group"></i> 5 Berkas</div>
                </div>
                <div class="deck-body">
                    <span class="category-tag">Laporan PPG</span>
                    <h4 class="deck-title">05. Model Pembelajaran Inkuiri Renang</h4>
                    <p class="deck-desc">Modul ajar renang, foto kegiatan, slide inkuiri, tes awal SMA 2 Cianjur, dan video MP4.</p>
                    <div class="deck-meta">
                        <span><i class="fa-solid fa-user"></i> Cecep Sandy M.</span>
                        <span><i class="fa-solid fa-clock"></i> 18 Sep 2026</span>
                    </div>
                </div>
                <div class="deck-footer">
                    <a href="materi5.php" class="btn-preview">
                        <i class="fa-solid fa-folder-open"></i> Buka Materi
                    </a>
                </div>
            </div>

            <!-- MATERI 6 -->
            <div class="deck-card">
                <div class="deck-header bg-gradient-3">
                    <span class="file-type-badge"><i class="fa-solid fa-file-pdf"></i> PDF</span>
                    <i class="fa-solid fa-award deck-icon-bg"></i>
                    <div class="slide-count"><i class="fa-solid fa-layer-group"></i> 1 Berkas</div>
                </div>
                <div class="deck-body">
                    <span class="category-tag">Laporan PPG</span>
                    <h4 class="deck-title">06. Model TPSR</h4>
                    <p class="deck-desc">Paparan materi utama Model Teaching Personal and Social Responsibility (TPSR).</p>
                    <div class="deck-meta">
                        <span><i class="fa-solid fa-user"></i> Hamzah Putra D.</span>
                        <span><i class="fa-solid fa-clock"></i> 18 Sep 2026</span>
                    </div>
                </div>
                <div class="deck-footer">
                    <a href="materi6.php" class="btn-preview">
                        <i class="fa-solid fa-folder-open"></i> Buka Materi
                    </a>
                </div>
            </div>

            <!-- MATERI 7 -->
            <div class="deck-card">
                <div class="deck-header bg-gradient-1">
                    <span class="file-type-badge"><i class="fa-solid fa-file-pdf"></i> PDF & MP4</span>
                    <i class="fa-solid fa-gamepad deck-icon-bg"></i>
                    <div class="slide-count"><i class="fa-solid fa-layer-group"></i> 5 Berkas</div>
                </div>
                <div class="deck-body">
                    <span class="category-tag">Laporan PPG</span>
                    <h4 class="deck-title">07. Teaching Games for Understanding (TGFU)</h4>
                    <p class="deck-desc">Penjelasan TGFU, modul ajar revisi, instrumen tes awal, serta 2 rekaman video simulasi.</p>
                    <div class="deck-meta">
                        <span><i class="fa-solid fa-user"></i> Lestari Putri W.</span>
                        <span><i class="fa-solid fa-clock"></i> 21 Sep 2026</span>
                    </div>
                </div>
                <div class="deck-footer">
                    <a href="materi7.php" class="btn-preview">
                        <i class="fa-solid fa-folder-open"></i> Buka Materi
                    </a>
                </div>
            </div>

            <!-- MATERI 8 -->
            <div class="deck-card">
                <div class="deck-header bg-gradient-2">
                    <span class="file-type-badge"><i class="fa-solid fa-folder-closed"></i> Kosong</span>
                    <i class="fa-solid fa-folder-open deck-icon-bg"></i>
                    <div class="slide-count"><i class="fa-solid fa-layer-group"></i> 0 Berkas</div>
                </div>
                <div class="deck-body">
                    <span class="category-tag">Laporan PPG</span>
                    <h4 class="deck-title">08. Laporan Akhir: Rafi Pujati S</h4>
                    <p class="deck-desc">Ruang repositori berkas seminar masih dalam proses unggah oleh pemateri.</p>
                    <div class="deck-meta">
                        <span><i class="fa-solid fa-user"></i> Rafi Pujati S</span>
                        <span><i class="fa-solid fa-clock"></i> Belum Diunggah</span>
                    </div>
                </div>
                <div class="deck-footer">
                    <a href="materi8.php" class="btn-preview">
                        <i class="fa-solid fa-folder-open"></i> Buka Materi
                    </a>
                </div>
            </div>

            <!-- MATERI 9 -->
            <div class="deck-card">
                <div class="deck-header bg-gradient-3">
                    <span class="file-type-badge"><i class="fa-solid fa-file-pdf"></i> PDF</span>
                    <i class="fa-solid fa-basketball deck-icon-bg"></i>
                    <div class="slide-count"><i class="fa-solid fa-layer-group"></i> 2 Berkas</div>
                </div>
                <div class="deck-body">
                    <span class="category-tag">Laporan PPG</span>
                    <h4 class="deck-title">09. Model Bola Basket TGT Fase E</h4>
                    <p class="deck-desc">Modul ajar bola basket TGT Fase E Kelas X dan slide presentasi seminar Raihan Ayu.</p>
                    <div class="deck-meta">
                        <span><i class="fa-solid fa-user"></i> Raihan Ayu</span>
                        <span><i class="fa-solid fa-clock"></i> 18 Sep 2026</span>
                    </div>
                </div>
                <div class="deck-footer">
                    <a href="materi9.php" class="btn-preview">
                        <i class="fa-solid fa-folder-open"></i> Buka Materi
                    </a>
                </div>
            </div>

        </div>

        <div id="noResults" style="display: none; text-align: center; padding: 60px 20px; color: var(--text-muted);">
            <i class="fa-solid fa-magnifying-glass" style="font-size: 40px; margin-bottom: 12px; color: #cbd5e1;"></i>
            <p style="font-size: 0.95rem;">Bahan presentasi atau pemateri tidak ditemukan.</p>
        </div>

    </div>

    <script>
        function searchMateri() {
            const filter = document.getElementById('searchInput').value.toLowerCase();
            const cards = document.querySelectorAll('.deck-card');
            let hasVisibleCard = false;

            cards.forEach(card => {
                const title = card.querySelector('.deck-title').textContent.toLowerCase();
                const desc = card.querySelector('.deck-desc').textContent.toLowerCase();
                const author = card.querySelector('.deck-meta').textContent.toLowerCase();

                if (title.includes(filter) || desc.includes(filter) || author.includes(filter)) {
                    card.style.display = "";
                    hasVisibleCard = true;
                } else {
                    card.style.display = "none";
                }
            });
            document.getElementById('noResults').style.display = hasVisibleCard ? "none" : "block";
        }
    </script>
</body>
</html>