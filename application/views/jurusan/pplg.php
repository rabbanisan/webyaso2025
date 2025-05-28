<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url();?>Assets/img/logo/logo yadika.png">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <!-- Lightbox CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet" />

  
</head>
<body>
  <!-- Bootstrap CSS -->
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- My css -->
    <link rel="stylesheet" href="<?= base_url();?>Assets/style.css" />
    <link rel="stylesheet" href="<?= base_url();?>Assets/ppdb/style.css" />
    <!-- icon bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />

    <!-- unicons -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css"
      rel="stylesheet"
    />

    <title>Jurusan PPLG - SMK Yadika Soreang</title>
    <style>
      .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("lab-software.JPG");
        background-size: cover;
        background-position: center;
        color: white;
        padding: 100px 0;
      }
      .section-title {
        border-bottom: 3px solid #007bff;
        padding-bottom: 10px;
        margin-bottom: 30px;
      }
      .card-hover {
        transition: 0.3s all;
      }
      .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
      }
    </style>
  </head>
  <body>
    <!-- Hero Section -->
    <header class="hero-section text-center">
      <div class="container">
        <h1 class="display-4 fw-bold mb-4">Jurusan PPLG</h1>
        <p class="lead mb-4">Pengembangan Perangkat Lunak dan Gim</p>
        <a href="/ppdb" class="btn btn-primary">Yuk Daftar Sekarang</a>
      </div>
    </header>

    <!-- Tentang PPLG -->
    <section id="tentang" class="py-5 bg-light">
      <div class="container">
        <h2 class="section-title mb-4">Tentang Jurusan PPLG</h2>
        <div class="row align-items-center">
          <div class="col-md-6">
            <p class="mb-4 fw-semibold">
              Jurusan
              <span class="fw-bold"
                >Pengembangan Perangkat Lunak dan Gim (PPLG)</span
              >
              di SMK Yadika Soreang adalah program unggulan yang dirancang untuk
              mempersiapkan siswa menghadapi era digital dan Industri 4.0.
              Dengan kurikulum yang komprehensif dan relevan, kami fokus pada:
            </p>
            <ul class="list-unstyled">
              <li class="mb-2 d-flex align-items-start">
                <i class="bi bi-check-circle text-primary me-2"></i>
                Pengembangan aplikasi web dan mobile
              </li>
              <li class="mb-2 d-flex align-items-start">
                <i class="bi bi-check-circle text-primary me-2"></i>
                Pemrograman dan algoritma
              </li>
              <li class="mb-2 d-flex align-items-start">
                <i class="bi bi-check-circle text-primary me-2"></i>
                Manajemen basis data
              </li>
              <li class="mb-2 d-flex align-items-start">
                <i class="bi bi-check-circle text-primary me-2"></i>
                Kecerdasan buatan dan machine learning
              </li>
              <li class="mb-2 d-flex align-items-start">
                <i class="bi bi-check-circle text-primary me-2"></i>
                Pengembangan dengan framework modern seperti React dan
                Express.js
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <img
              src="lab-r&d.JPG"
              alt="Kelas PPLG"
              class="card-hover img-fluid rounded shadow"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Kurikulum -->
    <section id="kurikulum" class="py-5 bg-light">
      <div class="container">
        <h2 class="section-title mb-4">Kurikulum</h2>
        <div class="row">
          <!-- Tahun Pertama -->
          <div class="col-md-6 mb-4">
            <div class="card-hover card h-100 d-flex flex-column">
              <div class="card-body">
                <h4 class="text-primary section-title mb-3">Tahun Pertama</h4>
                <ul class="list-unstyled">
                  <li class="mb-2">
                    <i class="bi bi-file-earmark-code text-secondary me-2"></i>
                    Dasar-dasar Pemrograman
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-code-slash text-secondary me-2"></i>
                    Algoritma dan Struktur Data
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-browser-chrome text-secondary me-2"></i>
                    Desain Web Dasar
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-hdd text-secondary me-2"></i>
                    Sistem Operasi
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-calculator text-secondary me-2"></i>
                    Matematika Komputasi
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Tahun Kedua -->
          <div class="col-md-6 mb-4">
            <div class="card-hover card h-100 d-flex flex-column">
              <div class="card-body">
                <h4 class="text-primary section-title mb-3">Tahun Kedua</h4>
                <ul class="list-unstyled">
                  <li class="mb-2">
                    <i class="bi bi-diagram-2 text-secondary me-2"></i>
                    Pemrograman Berorientasi Objek
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-laptop text-secondary me-2"></i>
                    Pengembangan Aplikasi Web
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-filetype-sql text-secondary me-2"></i>
                    Basis Data
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-phone text-secondary me-2"></i>
                    Pemrograman Mobile
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-file-code text-secondary me-2"></i>
                    Pengembangan dengan Express.js
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <!-- Tahun Ketiga -->
          <div class="col-md-6 mb-4">
            <div class="card-hover card h-100 d-flex flex-column">
              <div class="card-body">
                <h4 class="text-primary section-title mb-3">Tahun Ketiga</h4>
                <ul class="list-unstyled">
                  <li class="mb-2">
                    <i class="bi bi-braces text-secondary me-2"></i>
                    Kecerdasan Buatan untuk Web
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-shield text-secondary me-2"></i>
                    Keamanan Perangkat Lunak
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-briefcase text-secondary me-2"></i>
                    Manajemen Proyek IT
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-lightbulb text-secondary me-2"></i>
                    Kewirausahaan Digital
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Soft Skills -->
          <div class="col-md-6 mb-4">
            <div class="card-hover card h-100 d-flex flex-column">
              <div class="card-body">
                <h4 class="text-primary section-title mb-3">Soft Skills</h4>
                <ul class="list-unstyled">
                  <li class="mb-2">
                    <i class="bi bi-chat text-secondary me-2"></i>
                    Komunikasi Efektif
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-people text-secondary me-2"></i>
                    Kerja Tim
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-lightning text-secondary me-2"></i>
                    Pemecahan Masalah
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-clock text-secondary me-2"></i>
                    Manajemen Waktu
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-clipboard text-secondary me-2"></i>
                    Etika Profesi
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Fasilitas -->
    <section id="fasilitas" class="py-5">
      <div class="container">
        <h2 class="section-title">Fasilitas</h2>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card h-100 card-hover">
              <img
                src="lab-r&d.JPG"
                class="card-img-top"
                alt="Laboratorium Resource & Development"
              />
              <div class="card-body">
                <h5 class="card-title">Laboratorium Resource & Development</h5>
                <p class="card-text">
                  Dilengkapi dengan alat dan sumber daya untuk pengembangan dan
                  riset.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card h-100 card-hover">
              <img
                src="lab-vfx.JPG"
                class="card-img-top"
                alt="Laboratorium VFX"
              />
              <div class="card-body">
                <h5 class="card-title">Laboratorium VFX</h5>
                <p class="card-text">
                  Fasilitas untuk eksperimen dan produksi efek visual.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card h-100 card-hover">
              <img
                src="lab-software.JPG"
                class="card-img-top"
                alt="Laboratorium Software"
              />
              <div class="card-body">
                <h5 class="card-title">Laboratorium Software</h5>
                <p class="card-text">
                  Tempat untuk belajar dan mengembangkan perangkat lunak dengan
                  perangkat terbaru.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Prospek Karir -->
    <section id="karir" class="py-5 bg-light">
      <div class="container">
        <h2 class="section-title mb-4">Prospek Karir</h2>
        <div class="row">
          <!-- Card 1 -->
          <div class="col-md-4 mb-4">
            <div
              class="card-hover d-flex flex-column h-100 border rounded shadow-sm p-4 bg-white"
            >
              <div class="d-flex align-items-center mb-3">
                <i
                  class="bi bi-code-slash text-primary"
                  style="font-size: 2rem"
                ></i>
                <h4 class="ms-3 mb-0 text-primary">
                  Pengembangan Perangkat Lunak
                </h4>
              </div>
              <ul class="list-unstyled">
                <li class="mb-2">
                  <i class="bi bi-dot text-secondary"></i> Software Developer
                </li>
                <li class="mb-2">
                  <i class="bi bi-dot text-secondary"></i> Web Developer
                </li>
                <li class="mb-2">
                  <i class="bi bi-dot text-secondary"></i> Full-stack Developer
                </li>
                <li class="mb-2">
                  <i class="bi bi-dot text-secondary"></i> Backend Developer
                </li>
                <li class="mb-2">
                  <i class="bi bi-dot text-secondary"></i> Front-end Developer
                </li>
              </ul>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="col-md-4 mb-4">
            <div
              class="card-hover d-flex flex-column h-100 border rounded shadow-sm p-4 bg-white"
            >
              <div class="d-flex align-items-center mb-3">
                <i class="bi bi-gear text-primary" style="font-size: 2rem"></i>
                <h4 class="ms-3 mb-0 text-primary">Teknologi Web</h4>
              </div>
              <ul class="list-unstyled">
                <li class="mb-2">
                  <i class="bi bi-dot text-secondary"></i> HTML/CSS Specialist
                </li>
                <li class="mb-2">
                  <i class="bi bi-dot text-secondary"></i> JavaScript Developer
                </li>
                <li class="mb-2">
                  <i class="bi bi-dot text-secondary"></i> React Developer
                </li>
                <li class="mb-2">
                  <i class="bi bi-dot text-secondary"></i> MySQL Developer
                </li>
                <li class="mb-2">
                  <i class="bi bi-dot text-secondary"></i> Express.js Developer
                </li>
                <li class="mb-2">
                  <i class="bi bi-dot text-secondary"></i> Bootstrap Specialist
                </li>
                <li class="mb-2">
                  <i class="bi bi-dot text-secondary"></i> Tailwind CSS
                  Specialist
                </li>
              </ul>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="col-md-4 mb-4">
            <div
              class="card-hover d-flex flex-column h-100 border rounded shadow-sm p-4 bg-white"
            >
              <div class="d-flex align-items-center mb-3">
                <i class="bi bi-gear text-primary" style="font-size: 2rem"></i>
                <h4 class="ms-3 mb-0 text-primary">Karir Lainnya</h4>
              </div>
              <ul class="list-unstyled">
                <li class="mb-2">
                  <i class="bi bi-dot text-secondary"></i> UI/UX Designer
                </li>
                <li class="mb-2">
                  <i class="bi bi-dot text-secondary"></i> Database
                  Administrator
                </li>
                <li class="mb-2">
                  <i class="bi bi-dot text-secondary"></i> System Analyst
                </li>
                <li class="mb-2">
                  <i class="bi bi-dot text-secondary"></i> IT Project Manager
                </li>
                <li class="mb-2">
                  <i class="bi bi-dot text-secondary"></i> Technopreneur
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="py-5">
      <div class="container">
        <h2 class="section-title">Pertanyaan yang Sering Diajukan (FAQ)</h2>
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne"
              >
                Apakah saya perlu memiliki pengalaman pemrograman sebelumnya?
              </button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse show"
              aria-labelledby="headingOne"
              data-bs-parent="#faqAccordion"
            >
              <div class="accordion-body">
                Tidak, Kamu tidak perlu memiliki pengalaman pemrograman
                sebelumnya. Sekolah kita akan mengajarkan Kamu dari dasar. Yang
                terpenting adalah minat dan kemauan belajar yang tinggi.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo"
              >
                Apakah ada program PKL untuk siswa PPLG?
              </button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#faqAccordion"
            >
              <div class="accordion-body">
                Ya, kami memiliki program PKL sebagai mata pelajaran di kelas 3
                untuk memberikan pengalaman kerja nyata kepada siswa.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree"
              >
                Bagaimana peluang kerja setelah lulus?
              </button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="headingThree"
              data-bs-parent="#faqAccordion"
            >
              <div class="accordion-body">
                Lulusan PPLG memiliki peluang kerja yang sangat baik. Banyak
                perusahaan teknologi yang mencari lulusan dengan keterampilan
                yang kami ajarkan.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Galeri -->
    <section class="galeri-section">
    <div class="container">
        <h1 class="judul-galeri">Galeri Kegiatan Jurusan</h1>
        <p class="deskripsi-galeri">Dokumentasi berbagai kegiatan jurusan kami di sekolah.</p>

        <div class="galeri-grid">
    <div class="galeri-item animate">
        <a href="Assets/img/kegiatan1.jpg" data-lightbox="galeri" data-title="Kegiatan 1">
        <img src="<?= base_url();?>Assets/img/jurusan/Ujikom_RND.jpeg" alt="Kegiatan 1">
        </a>
    </div>
    <div class="galeri-item animate">
        <a href="Assets/img/kegiatan2.jpg" data-lightbox="galeri" data-title="Kegiatan 2">
        <img src="<?= base_url();?>Assets/img/jurusan/Ujikom_RND.jpeg" alt="Kegiatan 1">
        </a>
    </div>
    <div class="galeri-item animate">
        <a href="Assets/img/kegiatan3.jpg" data-lightbox="galeri" data-title="Kegiatan 3">
            <img src="Assets/img/kegiatan3.jpg" alt="Kegiatan 3">
        </a>
    </div>
    <div class="galeri-item animate">
        <a href="Assets/img/kegiatan4.jpg" data-lightbox="galeri" data-title="Kegiatan 4">
            <img src="Assets/img/kegiatan4.jpg" alt="Kegiatan 4">
        </a>
    </div>
    <div class="galeri-item animate">
        <a href="Assets/img/kegiatan5.jpg" data-lightbox="galeri" data-title="Kegiatan 5">
            <img src="Assets/img/kegiatan5.jpg" alt="Kegiatan 5">
        </a>
    </div>
    <div class="galeri-item animate">
        <a href="Assets/img/kegiatan6.jpg" data-lightbox="galeri" data-title="Kegiatan 6">
            <img src="Assets/img/kegiatan6.jpg" alt="Kegiatan 6">
        </a>
    </div>
</div>

    </div>
</section>



<script>
  /* Style Dasar */
body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: #f4f6f8;
    color: #333;
}

/* Container */
.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 50px 0;
    text-align: center;
}

/* Judul dan Deskripsi */
.judul-galeri {
    font-size: 2.5rem;
    margin-bottom: 10px;
}

.deskripsi-galeri {
    font-size: 1.2rem;
    margin-bottom: 40px;
    color: #666;
}

/* Grid Galeri */
.galeri-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

/* Item Galeri */
.galeri-item {
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    background: #fff;
    transition: transform 0.5s ease;
    cursor: pointer;
}

/* Animasi muncul */
.animate {
    opacity: 0;
    transform: translateY(30px) scale(0.95);
    animation: fadeInZoom 1s ease forwards;
}

/* Delay animasi sedikit antar item */
.galeri-item:nth-child(1) { animation-delay: 0.1s; }
.galeri-item:nth-child(2) { animation-delay: 0.2s; }
.galeri-item:nth-child(3) { animation-delay: 0.3s; }
.galeri-item:nth-child(4) { animation-delay: 0.4s; }
.galeri-item:nth-child(5) { animation-delay: 0.5s; }
.galeri-item:nth-child(6) { animation-delay: 0.6s; }

/* Efek Hover */
.galeri-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
    border-radius: 15px;
}

.galeri-item:hover img {
    transform: scale(1.1);
}

/* Keyframes untuk FadeIn Zoom */
@keyframes fadeInZoom {
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .judul-galeri {
        font-size: 2rem;
    }
    .deskripsi-galeri {
        font-size: 1rem;
    }
}


</script>
<!-- Lightbox JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
      integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
      crossorigin="anonymous"
    ></script>
</body>
    
</html>