<?php
// Konfigurasi Dasar Website
$site_title = "Universitas Nusantara - Inovasi & Keunggulan Akademik";
$primary_color = "#3e8000"; // Maroon

// Data Berita / Artikel Utama
$featured_news = [
    [
        "category" => "Riset & Penemuan",
        "title" => "Peneliti Mengembangkan Teknologi Energi Terbarukan Berbasis Sel Surya Organik",
        "date" => "25 September 2026",
        "image" => "https://images.unsplash.com/photo-1532094349884-543bc11b234d?auto=format&fit=crop&w=800&q=80",
        "excerpt" => "Terobosan baru dalam efisiensi konversi energi surya berhasil dicapai oleh tim laboratorium fisika material."
    ],
    [
        "category" => "Kehidupan Kampus",
        "title" => "Simposio Nasional Kebudayaan dan Seni Pertunjukan Tradisional",
        "date" => "22 September 2026",
        "image" => "https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80",
        "excerpt" => "Ratusan akademisi dan praktisi seni berkumpul untuk membahas pelestarian warisan budaya digital."
    ],
    [
        "category" => "Sains & Teknologi",
        "title" => "Penerapan Kecerdasan Buatan dalam Diagnosa Medis Dini",
        "date" => "18 September 2026",
        "image" => "https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80",
        "excerpt" => "Kemitraan antara Fakultas Kedokteran dan Ilmu Komputer menghadirkan inovasi pendeteksi penyakit bawaan."
    ]
];

// Data Program Akademik
$academic_programs = [
    "Sarjana (S1)" => "Lebih dari 50 program studi interdisipliner dengan kurikulum berbasis riset.",
    "Magister & Doktor" => "Program pascasarjana tingkat lanjut untuk mencetak peneliti dan pemimpin global.",
    "Pendidikan Berkelanjutan" => "Kursus profesional dan sertifikasi eksekutif untuk pengembangan karir."
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts: Playfair Display (Judul Serif Khusus) & Inter (Sains/Body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

    <!-- Custom CSS Styles -->
    <style>
        :root {
            --brand-maroon: #3e8000;
            --brand-dark-maroon: #5a0000;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #fcfcfc;
            color: #1a1a1a;
        }

        .font-serif-heading {
            font-family: 'Playfair Display', Georgia, serif;
        }

        .bg-maroon {
            background-color: var(--brand-maroon);
        }

        .bg-dark-maroon {
            background-color: var(--brand-dark-maroon);
        }

        .text-maroon {
            color: var(--brand-maroon);
        }

        .border-maroon {
            border-color: var(--brand-maroon);
        }

        /* Hover Transitions */
        .card-zoom-image {
            transition: transform 0.5s ease;
        }
        .card-container:hover .card-zoom-image {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">

    <!-- Top Utility Navigation Bar -->
    <div class="bg-stone-900 text-stone-300 text-xs py-2 px-4 border-b border-stone-800">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex space-x-4">
                <a href="#" class="hover:text-white transition">Mahasiswa</a>
                <a href="#" class="hover:text-white transition">Dosen & Staf</a>
                <a href="#" class="hover:text-white transition">Alumni</a>
                <a href="#" class="hover:text-white transition">Orang Tua</a>
            </div>
            <div class="flex space-x-4 items-center">
                <a href="#" class="hover:text-white transition">Pustaka</a>
                <a href="#" class="hover:text-white transition">Klinik & Rumah Sakit</a>
                <a href="#" class="bg-maroon text-white px-2.5 py-1 font-semibold rounded hover:bg-red-900 transition">Portal Kampus</a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <header class="bg-white border-b border-stone-200 sticky top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Logo Institusi -->
            <a href="#" class="flex items-center space-x-3 group">
                <div class="w-10 h-10 bg-maroon text-white flex items-center justify-center font-serif-heading font-bold text-xl rounded-sm">
                    U
                </div>
                <div>
                    <span class="block font-serif-heading font-bold text-xl md:text-2xl text-stone-900 tracking-tight leading-none group-hover:text-maroon transition">
                        UNIVERSITAS NUSANTARA
                    </span>
                    <span class="text-[10px] uppercase tracking-widest text-stone-500 font-semibold">Cendekia & Integritas</span>
                </div>
            </a>

            <!-- Navigasi Utama -->
            <nav class="hidden md:flex space-x-8 text-sm font-semibold text-stone-700">
                <a href="#tentang" class="hover:text-maroon transition py-1">Tentang Kampus</a>
                <a href="#akademik" class="hover:text-maroon transition py-1">Akademik</a>
                <a href="#riset" class="hover:text-maroon transition py-1">Riset & Inovasi</a>
                <a href="#berita" class="hover:text-maroon transition py-1">Berita & Acara</a>
                <a href="#pendaftaran" class="hover:text-maroon transition py-1">Pendaftaran</a>
            </nav>

            <!-- Pencarian -->
            <div class="flex items-center">
                <button class="text-stone-600 hover:text-maroon p-2 rounded-full border border-stone-200 hover:border-maroon transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section (Gaya Editorial UChicago) -->
    <section class="relative bg-stone-900 text-white overflow-hidden py-24 md:py-36">
        <div class="absolute inset-0 z-0 opacity-40">
            <img src="https://images.unsplash.com/photo-1541829070764-84a7d30dd3f3?auto=format&fit=crop&w=1920&q=80" alt="Kampus Hero" class="w-full h-full object-cover">
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4">
            <div class="max-w-3xl">
                <span class="bg-maroon text-white text-xs uppercase tracking-widest font-bold px-3 py-1 inline-block mb-4">
                    Keunggulan Akademik
                </span>
                <h1 class="font-serif-heading text-4xl md:text-6xl font-extrabold leading-tight mb-6">
                    Mendorong Batas Pengetahuan dan Inovasi Global.
                </h1>
                <p class="text-lg md:text-xl text-stone-200 mb-8 font-light leading-relaxed">
                    Kami berkomitmen untuk mendukung kebebasan berpikir, riset transformatif, dan pendidikan yang membentuk pemimpin masa depan.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#pendaftaran" class="bg-maroon hover:bg-red-900 text-white font-semibold px-6 py-3 transition shadow-lg">
                        Jelajahi Program Studi
                    </a>
                    <a href="#riset" class="bg-transparent border border-white hover:bg-white hover:text-stone-900 text-white font-semibold px-6 py-3 transition">
                        Pusat Riset Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Berita & Liputan Utama -->
    <section id="berita" class="py-20 max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-end mb-12 border-b border-stone-200 pb-4">
            <div>
                <span class="text-xs font-bold uppercase tracking-widest text-maroon">Kabar Kampus</span>
                <h2 class="font-serif-heading text-3xl md:text-4xl font-bold text-stone-900 mt-1">Berita & Riset Terbaru</h2>
            </div>
            <a href="#" class="hidden sm:inline-block text-sm font-semibold text-maroon hover:underline">
                Lihat Semua Berita &rarr;
            </a>
        </div>

        <!-- Grid Berita Dinamis PHP -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ($featured_news as $news) : ?>
                <article class="card-container bg-white border border-stone-200 overflow-hidden flex flex-col justify-between shadow-sm hover:shadow-md transition">
                    <div>
                        <div class="overflow-hidden h-48 bg-stone-100">
                            <img src="<?php echo $news['image']; ?>" alt="<?php echo $news['title']; ?>" class="card-zoom-image w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="text-xs font-bold uppercase tracking-wider text-maroon mb-2">
                                <?php echo $news['category']; ?>
                            </div>
                            <h3 class="font-serif-heading text-xl font-bold text-stone-900 mb-3 leading-snug hover:text-maroon transition cursor-pointer">
                                <?php echo $news['title']; ?>
                            </h3>
                            <p class="text-stone-600 text-sm mb-4 line-clamp-3">
                                <?php echo $news['excerpt']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="p-6 pt-0 text-xs text-stone-400 font-medium">
                        <?php echo $news['date']; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Section Program Akademik -->
    <section id="akademik" class="bg-stone-100 py-20 border-t border-b border-stone-200">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-xs font-bold uppercase tracking-widest text-maroon">Pendidikan</span>
                <h2 class="font-serif-heading text-3xl md:text-4xl font-bold text-stone-900 mt-2">Program Akademik</h2>
                <p class="text-stone-600 mt-4 text-sm md:text-base">
                    Pilih jalur studi yang dirancang untuk mengasah pemikiran kritis dan keterampilan praktis.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($academic_programs as $program_name => $description) : ?>
                    <div class="bg-white p-8 border-t-4 border-maroon shadow-sm hover:shadow-md transition">
                        <h3 class="font-serif-heading text-2xl font-bold text-stone-900 mb-4"><?php echo $program_name; ?></h3>
                        <p class="text-stone-600 text-sm leading-relaxed mb-6"><?php echo $description; ?></p>
                        <a href="#" class="text-sm font-bold text-maroon hover:underline inline-flex items-center">
                            Pelajari Selengkapnya 
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Institutional Footer -->
    <footer class="bg-stone-900 text-stone-400 text-sm mt-auto">
        <div class="max-w-7xl mx-auto px-4 py-16 grid grid-cols-1 md:grid-cols-4 gap-10 border-b border-stone-800">
            <!-- Kolom 1: Profil Institusi -->
            <div>
                <h4 class="font-serif-heading text-xl text-white font-bold mb-4">UNIVERSITAS NUSANTARA</h4>
                <p class="text-stone-400 text-xs leading-relaxed mb-4">
                    Jl. Kebangsaan No. 100, Jakarta Pusat, Indonesia<br>
                    Telepon: (021) 555-0192
                </p>
                <p class="text-xs text-stone-500">&copy; <?php echo date('Y'); ?> Universitas Nusantara. All rights reserved.</p>
            </div>

            <!-- Kolom 2: Navigasi Cepat -->
            <div>
                <h5 class="text-white font-semibold mb-4 text-xs uppercase tracking-wider">Tautan Utama</h5>
                <ul class="space-y-2 text-xs">
                    <li><a href="#" class="hover:text-white transition">Pendaftaran Mahasiswa Baru</a></li>
                    <li><a href="#" class="hover:text-white transition">Fakultas & Sekolah</a></li>
                    <li><a href="#" class="hover:text-white transition">Pusat Penelitian</a></li>
                    <li><a href="#" class="hover:text-white transition">Kalender Akademik</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Layanan & Fasilitas -->
            <div>
                <h5 class="text-white font-semibold mb-4 text-xs uppercase tracking-wider">Sumber Daya</h5>
                <ul class="space-y-2 text-xs">
                    <li><a href="#" class="hover:text-white transition">Perpustakaan Utama</a></li>
                    <li><a href="#" class="hover:text-white transition">Karir & Alumni</a></li>
                    <li><a href="#" class="hover:text-white transition">Portal Keamanan Kampus</a></li>
                    <li><a href="#" class="hover:text-white transition">Peta & Arah Lokasi</a></li>
                </ul>
            </div>

            <!-- Kolom 4: Media Sosial / Buletin -->
            <div>
                <h5 class="text-white font-semibold mb-4 text-xs uppercase tracking-wider">Tetap Terhubung</h5>
                <p class="text-xs text-stone-400 mb-4">Dapatkan buletin berita mingguan langsung di email Anda.</p>
                <form action="#" method="POST" class="flex">
                    <input type="email" placeholder="Email Anda" class="bg-stone-800 text-white text-xs px-3 py-2 w-full focus:outline-none focus:ring-1 focus:ring-maroon border border-stone-700">
                    <button type="submit" class="bg-maroon hover:bg-red-900 text-white font-semibold px-4 py-2 text-xs transition">
                        Kirim
                    </button>
                </form>
            </div>
        </div>
    </footer>

</body>
</html>