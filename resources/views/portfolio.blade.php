<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Crypto Portfolio — Efrat</title>
  <meta name="description" content="Efrat's crypto portfolio: positions, charts, dashboards, and trading documentation." />
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&family=Poppins:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />

  <!-- Vendor CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />

  <!-- Main CSS -->
  <link href="assets/css/main.css" rel="stylesheet"> 

  <!-- Page-only styling -->
  <style>
    /* Tema: Graphite + neon crypto */
    :root { --acc:#19e36e; }

    body.portfolio-crypto{
      background:
        radial-gradient(1100px 520px at 10% -8%, #1b2130 0%, #131824 55%, #0b0f18 100%),
        #0b0f18;
    }

    /* Header brand font a la coding */
    .sitename { letter-spacing:.5px }

    /* Page title tweaks */
    .page-title .heading h1{ letter-spacing:.6px }
    .page-title .heading p{ opacity:.8 }

    /* Grid kartu crypto */
    .crypto-grid{
      display:grid;
      gap:22px;
      grid-template-columns: repeat(12,1fr);
    }
    .crypto-card{
      grid-column: span 6; /* 2 kolom di desktop */
      background: linear-gradient(180deg, rgba(255,255,255,.03), rgba(255,255,255,.015));
      border:1px solid rgba(255,255,255,.08);
      border-radius:16px;
      overflow:hidden;
      position:relative;
      transition: transform .2s ease, border-color .2s ease, box-shadow .2s ease;
    }
    .crypto-card:hover{
      transform:translateY(-2px);
      border-color: rgba(25,227,110,.35);
      box-shadow: 0 14px 26px rgba(25,227,110,.08);
    }
    .crypto-thumb{
      aspect-ratio: 16/9;   /* jaga proporsi gambar */
      width:100%;
      object-fit:cover;
      background:#0f1320;   /* fallback saat belum ada gambar */
    }
    .crypto-body{ padding:14px 16px 18px }
    .crypto-title{
      margin:0 0 6px;
      font-weight:700;
      font-size:1.05rem;
    }
    .crypto-meta{
      margin:0;
      opacity:.75;
      font-size:.92rem;
    }

    /* Slot variasi: 1 kartu lebar penuh */
    .crypto-card.wide{ grid-column: span 12; }

    /* Aksen “chip” kecil */
    .chip{
      display:inline-flex; align-items:center; gap:.35rem;
      font-size:.78rem; padding:.3rem .55rem;
      border-radius:.5rem;
      border:1px solid rgba(255,255,255,.12);
      background:rgba(255,255,255,.04);
      margin-right:.35rem;
    }
    .chip i{ color:var(--acc) }

    /* Footer khusus page ini: hitam pekat */
    body.portfolio-crypto #footer{
      background:#000 !important;
      color:#fff;
    }

    @media (max-width: 992px){
      .crypto-card{ grid-column: span 12; }
    }
  </style>
</head>

<body class="portfolio-crypto">
  <!-- Header -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <h1 class="sitename">Personal</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/achievement">Achievement</a></li>
            <li><a href="/portfolio">Portofolio Crpyto</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-9">
              <h1>Crypto Portofolio</h1>
              <p class="mb-0">
                Snapshot Posisi, Dan Dokumentasi Trading. Fokus Pada DiSiplin Entry/Exit, Risk Management,
                Dan Evaluasi Strategi (BTC, ETH, & Fitri).
              </p>
              <div class="mt-3">
                <span class="chip"><i class="bi bi-currency-bitcoin"></i> BTC</span>
                <span class="chip"><i class="bi bi-coin"></i> ETH</span>
                <span class="chip"><i class="bi bi-graph-up-arrow"></i> Risk </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
          </ol>
        </div>
      </nav>
    </div>
    <!-- /Page Title -->

<!-- Crypto Gallery -->
<section class="section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="container my-4">
      <div class="row g-3">
        <!-- Foto 1 -->
        <div class="col-md-6">
          <div class="crypto-card medium">
            <img src="assets/img/btc.png" class="crypto-thumb" alt="BTC" />
          </div>
        </div>
        <!-- Foto 2 -->
        <div class="col-md-6">
          <div class="crypto-card medium">
            <img src="assets/img/eth.png" class="crypto-thumb" alt="ETH" />
          </div>
        </div>
      </div>

      <div class="row g-3 mt-2">
        <!-- Foto 3 -->
        <div class="col-md-6">
          <div class="crypto-card medium">
            <img src="assets/img/fitri.png" class="crypto-thumb" alt="Fitri" />
          </div>
        </div>
        <!-- Foto 4 -->
        <div class="col-md-6">
          <div class="crypto-card medium">
            <img src="assets/img/naik.png" class="crypto-thumb" alt="Untung" />
          </div>
        </div>
      </div>
    </div>


    <!-- Divider -->
    <div class="crypto-divider my-5"></div>

    <!-- Grid 2 Kartu Portofolio -->
    <div class="crypto-grid bottom-grid">
      <!-- Card 5 -->
      <article class="crypto-card mini">
        <a href="assets/img/Rainbow.png" class="glightbox" data-gallery="crypto" title="Case Study — Trade Review">
          <img class="crypto-thumb" src="assets/img/Rainbow.png" alt="Portofolio" />
        </a>
        <div class="crypto-body">
          <h3 class="crypto-title">Portofolio</h3>
        </div>
      </article>

      <!-- Card 6 -->
      <article class="crypto-card mini">
        <a href="assets/img/Rupiah.png" class="glightbox" data-gallery="crypto" title="Case Study — Trade Review">
          <img class="crypto-thumb" src="assets/img/Rupiah.png" alt="Portofolio Rupiah" />
        </a>
        <div class="crypto-body">
          <h3 class="crypto-title">Portofolio Dalam Rupiah</h3>
        </div>
      </article>
    </div>
    <!-- End Grid 2 Kartu -->

  </div>
</section>


  </main>

  <!-- Footer -->
  <footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename">Efrat<span style="color:var(--acc)">_</span></h3>
      <p>Building Web & Exploring the Crypto Space</p>
      <div class="social-links d-flex justify-content-center">
        <a href="https://www.instagram.com/efratap_/" target="_blank" rel="noopener">
          <i class="bi bi-instagram"></i>
        </a>
      </div>
    </div>
  </footer>

  <style>
    body.portfolio-crypto #footer {
      background: #181818 !important;   /* hitam/graphite */
      color: #fff;
      border-top: 3px solid #000 !important;
    }
  </style>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>
</body>
</html>
