<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MOPENJOK — Pendidikan Jasmani, Kesehatan, dan Rekreasi</title>
  
  <!-- Google Fonts: Inter & Playfair Display -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Playfair+Display:ital,wght@0,600;1,400&display=swap" rel="stylesheet">
  
  <!-- CSS External -->
  <link rel="stylesheet" href="csslandingpage.css?v=5.0">
</head>
<body>

  <!-- Navigation -->
  <header>
    <nav class="navbar">
      <a href="#" class="logo">MOPENJOK<span></span></a>
      <ul class="nav-links">
        <li><a href="#hero">Home</a></li>
        <li><a href="https://ppg.unsur.ac.id/akademik">Profile</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Scroll Container Utama -->
  <main class="scroll-container">
    
    <!-- PAGE 1: HERO SECTION -->
    <section id="hero" class="page-section hero">
      <div class="hero-bg">
        <img src="Untitled Project.jpg" alt="Hero Background">
        <div class="hero-overlay"></div>
      </div>
      
      <div class="hero-content animate-on-scroll">
        <span class="tagline">Program Studi Pendidikan Jasmani, Kesehatan, dan Rekreasi</span>
        <h1 class="hero-title">Arsip digital, berkas kepangkatan, dan portofolio tridharma perguruan tinggi</h1>
        <p class="hero-subtitle">"Menghasilkan guru profesional yang unggul dalam bidang pendidikan, teknologi, dan berlandaskan nilai keagamaan, untuk menghadapi tantangan dan perubahan global"</p>
      </div>
    </section>

    <!-- PAGE 2: SELECTED WORKS -->
    <section id="work" class="page-section projects">
      <div class="projects-inner animate-on-scroll">
        <div class="section-header">
          <h2>Selected Works</h2>
          <span class="count">(03)</span>
        </div>

        <div class="project-grid">
          <!-- Item 1 -->
          <a href="dashboard.php" target="_blank" class="project-card-link delay-1">
            <article class="project-card">
              <div class="card-image-wrapper">
                <img src="images.jpg" alt="Materi Seminar PPG Pak Ervan" class="card-image">
              </div>
              <div class="card-info">
                <h3>Materi Seminar PPG Pak Ervan</h3>
                <p>Materi berupa video Dan Pdf Kelompok Pak Ervan</p>
              </div>
            </article>
          </a>

          <!-- Item 2 -->
          <a href="https://example.com/project-2" target="_blank" class="project-card-link delay-2">
            <article class="project-card">
              <div class="card-image-wrapper">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=800&auto=format&fit=crop" alt="Architectural Portfolio" class="card-image">
              </div>
              <div class="card-info">
                <h3>Lorem Ipsum</h3>
                <p>Lorem Ipsum</p>
              </div>
            </article>
          </a>

          <!-- Item 3 -->
          <a href="https://example.com/project-3" target="_blank" class="project-card-link delay-3">
            <article class="project-card">
              <div class="card-image-wrapper">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800&auto=format&fit=crop" alt="SaaS Dashboard Concept" class="card-image">
              </div>
              <div class="card-info">
                <h3>Lorem Ipsum</h3>
                <p>Lorem Ipsum</p>
              </div>
            </article>
          </a>
        </div>
      </div>
    </section>

    <!-- PAGE 3: CONTACT / FOOTER -->
    <section id="contact" class="page-section footer-page">
      <div class="footer-inner animate-on-scroll">
        <div class="footer-content">
          <h2>Punya ide menarik?</h2>
          <a href="mailto:hello@Concept.com" class="email-link">hello@Concept.com</a>
        </div>
        <div class="footer-bottom">
          <p>&copy; 2026 FATIH All rights reserved</p>
        </div>
      </div>
    </section>

  </main>

  <!-- Script Animasi Scroll Interaktif -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const observerOptions = {
        root: document.querySelector('.scroll-container'),
        threshold: 0.2 // Animasi terpicu jika 20% elemen terlihat
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('show');
          }
        });
      }, observerOptions);

      // Ambil semua elemen bernama kelas 'animate-on-scroll'
      const animatedElements = document.querySelectorAll('.animate-on-scroll');
      animatedElements.forEach(el => observer.observe(el));
    });
  </script>

</body>
</html>