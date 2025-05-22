<body>
  <!-- Navbar -->

  <!-- Bootstrap Carousel -->
  <style>
    .carousel-item {
      position: relative;
      height: 60vh;
      /* background-color: #00bfff; */
      /* Menyesuaikan tinggi gambar dengan viewport */
    }

    .carousel-item img {
      object-fit: cover;
      height: 100%;
      width: 100%;
      filter: brightness(0.5);
      /* Menggelapkan gambar */
    }

    /* .carousel-caption {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 10;
      color: #fff;
      text-align: center;
      font-size: 1.5rem;
      padding: 0 10px;
    } */

    .carousel-caption {
      /* background-color: #0000ff; */
      top: 15%;
    }

    .carousel-caption h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    .carousel-caption p {
      font-size: 1rem;
      letter-spacing: 1px;
    }

    .carousel-caption .btn {
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 1rem;
      font-weight: bold;
      letter-spacing: 1px;
    }

    /* Styling untuk tombol navigasi carousel */
    .carousel-control-prev,
    .carousel-control-next {
      background-color: transparent;
      /* Menghapus background */
      border: none;
      /* Menghapus border */
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: rgba(0, 0, 0, 0.5);
      /* Mengatur warna ikon jika diperlukan */
    }

    .carousel-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.2));
      z-index: 5;
    }

    /* Styling indikator bulet */
    .carousel-indicators {
      bottom: 20px;
      /* Jarak dari bawah */
      z-index: 15;
    }

    .carousel-indicators [data-bs-target] {
      background-color: rgba(255, 255, 255, 0.5);
      /* Warna indikator */
      border-radius: 50%;
      width: 12px;
      height: 12px;
    }

    .carousel-indicators .active {
      background-color: #fff;
      /* Warna indikator aktif */
    }

    /* Responsif untuk tampilan kecil */
    @media (min-width: 320px) and (max-width: 767px) {
      .carousel-item {
        height: 45vh;
        width: 100%;
        /* Menyesuaikan tinggi gambar untuk perangkat kecil */
      }

      /* .carousel-caption {
       
      } */

      .carousel-caption h1 {
        font-size: 1.5rem;
        width: 100%;
      }

      .carousel-caption p {
        font-size: 0.875rem;
      }

      .carousel-caption .btn {
        padding: 8px 16px;
        font-size: 0.875rem;
      }

      .carousel-control-prev,
      .carousel-control-next {
        display: none;
        /* Menyembunyikan tombol navigasi pada tampilan kecil */
      }

      .carousel-indicators {
        bottom: 10px;
        /* Menurunkan posisi indikator */
      }
    }
  </style>

  <!-- <style>
    .carousel-item {
      position: relative;
      height: 60vh;
      /* margin-top: 20px; */
      /* Menyesuaikan tinggi gambar dengan viewport */
    }

    .carousel-item img {
      object-fit: cover;
      height: 100%;
      width: 100%;
      filter: brightness(0.5);
      /* Menggelapkan gambar */
    }

    .carousel-caption {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 10;
      color: #fff;
      text-align: center;
      font-size: 1.5rem;
      padding: 0 10px;
      /* Menambahkan padding horizontal */
    }

    .carousel-caption h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    .carousel-caption p {
      font-size: 1rem;
      letter-spacing: 1px;
    }

    .carousel-caption .btn {
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 1rem;
      font-weight: bold;
      letter-spacing: 1px;
    }

    /* Styling untuk tombol navigasi carousel */
    .carousel-control-prev,
    .carousel-control-next {
      background-color: transparent;
      /* Menghapus background */
      border: none;
      /* Menghapus border */
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: rgba(0, 0, 0, 0.5);
      /* Mengatur warna ikon jika diperlukan */
    }

    .carousel-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.2));
      z-index: 5;
    }

    /* Styling indikator bulet */
    .carousel-indicators {
      bottom: 20px;
      /* Jarak dari bawah */
      z-index: 15;
    }

    .carousel-indicators [data-bs-target] {
      background-color: rgba(255, 255, 255, 0.5);
      /* Warna indikator */
      border-radius: 50%;
      width: 12px;
      height: 12px;
    }

    .carousel-indicators .active {
      background-color: #fff;
      /* Warna indikator aktif */
    }

    /* Responsif untuk tampilan kecil */
    @media (max-width: 768px) {
      .carousel-item {
        height: 45vh;
        /* Menyesuaikan tinggi gambar untuk perangkat kecil */
      }

      .carousel-caption {
        font-size: 1.2rem;
        padding: 0 5px;
        /* Mengurangi padding horizontal */
      }

      .carousel-caption h1 {
        font-size: 1.5rem;
      }

      .carousel-caption p {
        font-size: 0.875rem;
      }

      .carousel-caption .btn {
        padding: 8px 16px;
        font-size: 0.875rem;
      }

      .carousel-control-prev,
      .carousel-control-next {
        display: none;
        /* Menyembunyikan tombol navigasi pada tampilan kecil */
      }

      .carousel-indicators {
        bottom: 10px;
        /* Menurunkan posisi indikator */
      }
    }

    /* Animasi untuk Judul (h1) */
    .carousel-caption h1 {
      opacity: 0;
      transform: translateX(-50px);
      transition: all 0.7s ease-in-out;
    }

    .carousel-item.active .carousel-caption h1 {
      opacity: 1;
      transform: translateX(0);
    }

    /* Animasi untuk Paragraf (p) */
    .carousel-caption p {
      opacity: 0;
      transform: translateX(50px);
      transition: all 0.7s ease-in-out 0.2s;
    }

    .carousel-item.active .carousel-caption p {
      opacity: 1;
      transform: translateX(0);
    }

    /* Animasi untuk Tombol (a.btn) */
    .carousel-caption .btn {
      opacity: 0;
      transform: translateY(50px);
      transition: all 0.7s ease-in-out 0.4s;
    }

    .carousel-item.active .carousel-caption .btn {
      opacity: 1;
      transform: translateY(0);
    }
  </style> -->
  <div id="myCarousel"
    class="carousel slide"
    data-bs-ride="carousel"
    data-bs-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= base_url(); ?>Assets/img/imageInfo/Kum.jpeg" class="d-block w-100" alt="Slide 1" />
        <div class="carousel-caption">
          <h1>SELAMAT DATANG</h1>
          <p>DI WEBSITE SMK YADIKA SOREANG</p>
          <a href="/ppdb" class="btn btn-primary">Yuk Daftar Sekarang</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url(); ?>Assets/img/imageInfo/IHT.jpeg" class="d-block w-100" alt="Slide 2" />
        <div class="carousel-caption">
          <h1>TELAH DI BUKA</h1>
          <p>PENERIMAAN PESERTA DIDIK BARU TAHUN AJARAN 2024-2025</p>
          <a href="/ppdb" class="btn btn-primary">Lihat PPDB</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url(); ?>Assets/img/imageInfo/lobi.JPG" class="d-block w-100" alt="Slide 3" />
        <div class="carousel-caption">
          <h1>SMK YADIKA SOREANG</h1>
          <p>SEKOLAH SWASTA DENGAN FASILITAS PEMBELAJARAN YANG LENGKAP</p>
          <a href="/ppdb" class="btn btn-primary">Lihat PPDB</a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    <!-- Indikator -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  </div>

  <!-- End -->
  <style>
    /* Fixed position for calendar icon */
    .calendar-icon {
      position: fixed;
      top: 50%;
      right: 20px;
      font-size: 30px;
      cursor: pointer;
      z-index: 1000;
    }

    /* Calendar container */
    .calendar-container {
      display: none;
      position: fixed;
      top: 50%;
      right: 70px;
      transform: translateY(-50%);
      border: 1px solid #ccc;
      padding: 10px;
      background-color: white;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      z-index: 999;
    }

    /* Calendar header */
    .calendar-header {
      text-align: center;
      margin-bottom: 10px;
    }

    /* Calendar grid */
    .calendar-grid {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 5px;
      text-align: center;
    }

    /* Calendar cells */
    .calendar-cell {
      padding: 10px;
      border: 1px solid #ddd;
      background-color: #f9f9f9;
      border-radius: 5px;
    }

    /* Highlight today's date */
    .today {
      background-color: #007bff;
      color: white;
    }
  </style>

  <!-- Calendar Icon -->
  <div class="calendar-icon">
    <i class="bi bi-calendar"></i>
  </div>

  <!-- Calendar Container -->
  <div class="calendar-container">
    <div class="calendar-header">
      <span id="month-year"></span>
    </div>
    <div class="calendar-grid" id="calendar-grid"></div>
  </div>

  <script>
    // Calendar icon click event
    document.querySelector('.calendar-icon').addEventListener('click', function() {
      const calendarContainer = document.querySelector('.calendar-container');
      calendarContainer.style.display =
        calendarContainer.style.display === 'block' ? 'none' : 'block';
    });

    // Get the current date
    const date = new Date();
    const month = date.getMonth();
    const year = date.getFullYear();
    const today = date.getDate();

    // Month names
    const monthNames = [
      'January', 'February', 'March', 'April', 'May', 'June',
      'July', 'August', 'September', 'October', 'November', 'December'
    ];

    // Display the current month and year
    document.getElementById('month-year').textContent = `${monthNames[month]} ${year}`;

    // Generate the days in the calendar
    function generateCalendar(month, year) {
      const calendarGrid = document.getElementById('calendar-grid');
      calendarGrid.innerHTML = '';

      const firstDay = new Date(year, month, 1).getDay();
      const daysInMonth = new Date(year, month + 1, 0).getDate();

      // Add empty cells for days before the first day of the month
      for (let i = 0; i < firstDay; i++) {
        const emptyCell = document.createElement('div');
        emptyCell.classList.add('calendar-cell');
        calendarGrid.appendChild(emptyCell);
      }

      // Add cells for each day of the month
      for (let day = 1; day <= daysInMonth; day++) {
        const dayCell = document.createElement('div');
        dayCell.classList.add('calendar-cell');
        dayCell.textContent = day;
        if (day === today) {
          dayCell.classList.add('today');
        }
        calendarGrid.appendChild(dayCell);
      }
    }

    // Generate the calendar for the current month
    generateCalendar(month, year);
  </script>

  <!-- Jumbotron -->
  <Style>
    .video-container {
      margin-top: 20px;
      width: 100%;
      height: 50%;
    }

    .video-container iframe {
      width: 90%;
      height: 90%;
      border-radius: 10px;
      ;
    }

    /* .jumbotron-col-right {
      display: flex;
      align-items: center;
      padding: 100px 0;
    } */

    .myjumbotron {
      height: fit-content;
      padding-bottom: 180px;
      width: 100%;
      padding: 0;
      margin: 0;
    }

    .myjumbotron-bg img {
      position: relative;
      width: 70rem;
      left: -500px;
      top: 50px;
      z-index: -1;
    }
  </Style>
  <div class="container mb-4">
    <div class="mx-2 myjumbotron jumbotron">
      <div class="row m-auto">
        <div class="col-md-6">
          <!-- <div class="myjumbotron-bg2">
            <img src="/Assets/img/background/background-yaso1.1.png" alt="">
          </div> -->
          <img class="logo-homepage" src="<?= base_url(); ?>Assets/img/logo/logo yadika.png" alt="" />
          <h1 class="fw-bold">SMK Yadika Soreang</h1>
          <p>
            Sekolah Menengah Kejuruan yang memiliki 3 jurusan yaitu
            Perhotelan, Pemograman Perangkat Lunak dan Gim, dan Akutansi yang memiliki
            fasilitas mewah dengan harga terjangkau.
          </p>
          <a href="https://wa.me/6282130354353" target="_blank" rel="noopener">
            <button type="button" class="btn btn-primary btn-contact mt-2">
              Contact Us
            </button>
          </a>
          <a href="https://www.youtube.com/watch?v=ubTDTZYQq6I">
            <button type="button" class="btn btn-primary btn-OurSch mt-2">
              <i class="bi bi-play-fill"></i> Our School
            </button>
          </a>
          <div class="video-container">
            <iframe src="https://www.youtube.com/embed/ubTDTZYQq6I?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-6 jumbotron-col-right">

          <!-- Tombol-tombol di atas gambar -->
          <!-- <div class="overlay-buttons">
            <a href="https://wa.me/6282130354353" target="_blank" rel="noopener">
              <button type="button" class="btn btn-primary btn-contact mb-2">
                Contact Us
              </button>
            </a>
            <a href="https://www.youtube.com/watch?v=ubTDTZYQq6I">
              <button type="button" class="btn btn-primary btn-OurSch">
                <i class="bi bi-play-fill"></i> Our School
              </button>
            </a>
          </div> -->

          <div class="myjumbotron-bg">
            <!-- <img src="<?= base_url(); ?>Assets/img/background/background-yaso1.0.png" alt="" /> -->
            <img src="<?= base_url(); ?>Assets/img/background/Bg-jumbotron.png" alt="" />
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- End -->

  <!-- Bar info -->
  <style>
    .bar-info {
      padding-top: 100px;
    }

    .brosur-container {
      max-width: 1200px;
      margin: 2rem 0;
      background-color: #e2e8f0;
      color: #1f2937;
      padding: 1rem 1rem 3rem 1rem;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .brosur-title {
      text-align: center;
      font-weight: bold;
      font-size: 1.5rem;
      margin: 1rem 0;
    }

    .brosur-content {
      display: grid;
      grid-template-columns: 1fr;
      gap: 16px;
    }

    @media (min-width: 768px) {
      .brosur-container {
        max-width: 1200px;
        margin: 5rem 6rem;
        background-color: #e2e8f0;
        color: #1f2937;
        padding: 1rem 1rem 3rem 1rem;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .brosur-content {
        grid-template-columns: repeat(3, 1fr);
      }

      .brosur-title {
        text-align: center;
        font-weight: bold;
        font-size: 2.25rem;
        margin: 2rem 0;
      }
    }

    .brosur-item {
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      background-color: #ffffff;
      transition: transform 0.3s;
    }

    .brosur-item:hover {
      transform: translateY(-10px);
    }

    .brosur-image {
      width: 100%;
      height: auto;
      border-bottom: 1px solid #e2e8f0;
    }

    .download-button {
      display: block;
      margin: 1rem auto;
      text-align: center;
      border: 1px solid #1f2937;
      background-color: #87ceeb;
      padding: 8px 16px;
      border-radius: 8px;
      color: #1f2937;
      font-weight: bolder;
      font-family: sans-serif;
      text-decoration: none;
      width: 80%;
    }

    .download-button:hover {
      background-color: #00bfff;
      color: #ffffff;
    }

    .brosur-footer {
      text-align: center;
      margin-top: 32px;
    }

    .cek-pendaftar-button {
      background-color: #0000ff;
      color: white;
      padding: 16px 32px;
      border-radius: 16px;
      text-decoration: none;
      transition: all 0.5s;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      display: inline-block;
    }

    .cek-pendaftar-button:hover {
      background-color: #1e90ff;
      transform: scale(1.1);
    }

    .cek-pendaftar-button:active {
      transform: scale(0.9);
    }
  </style>
  <div class="container bar-info">
    <div class="brosur-container">
      <h1 class="brosur-title">Galeri Informasi</h1>
      <div class="brosur-content">
        <div class="brosur-item">
          <img src="<?= base_url(); ?>Assets/img/imageInfo/info-ppdb-2.png" alt="PPDB 1" class="brosur-image">

        </div>
        <div class="brosur-item">
          <img src="<?= base_url(); ?>Assets/img/imageInfo/info-ppdb-1.png" alt="PPDB 2" class="brosur-image">

        </div>
        <div class="brosur-item">
          <img src="<?= base_url(); ?>Assets/img/imageInfo/info-ppdb-3.png" alt="PPDB 3" class="brosur-image">

        </div>
      </div>
      <div class="brosur-footer">
        <a href="<?= base_url('Keterangan') ?>"
          class="cek-pendaftar-button">Cek Pendaftar!</a>
      </div>
    </div>
  </div>
  <!-- End -->

  <!-- kepala sekolah page -->
  <style>
    .kepala-sekolah-container {
      /* background-color: #00bfff; */
      /* max-width: 1200px; */
      width: 100%;
      margin: 2rem auto;
      padding: 2rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .kepala-sekolah-content {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 1.5rem;
      padding: 10px 8px;
    }

    @media (min-width: 768px) {
      .kepala-sekolah-container {
        max-width: 1200px;
        margin: 7rem auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .kepala-sekolah-content {
        flex-direction: row;
        align-items: center;
      }
    }

    .kepala-sekolah-image-container {
      position: relative;
      width: 288px;
      height: 288px;
      border-radius: 50%;
      overflow: hidden;
    }

    @media (min-width: 768px) {
      .kepala-sekolah-image-container {
        width: 425px;
        height: 450px;
      }
    }

    .kepala-sekolah-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: all .5s;
    }

    .kepala-sekolah-image:hover {
      transform: scale(1.1);
    }

    .kepala-sekolah-text {
      display: flex;
      flex-direction: column;
      width: 100%;
    }

    @media (min-width: 768px) {
      .kepala-sekolah-text {
        width: 50%;
      }
    }

    .kepala-sekolah-title {
      font-weight: bold;
      font-size: 1.8rem;
      text-align: center;
    }

    @media (min-width: 768px) {
      .kepala-sekolah-title {
        font-weight: bold;
        font-size: 2.25rem;
        text-align: left;
      }
    }

    .kepala-sekolah-paragraph {
      text-align: justify;
      font-size: 12pt;
      margin-bottom: 0;
    }

    .kepala-sekolah-footer {
      display: flex;
      flex-direction: column;
      gap: 2px;
      margin-top: 10px;
    }

    .kepala-sekolah-signature {
      margin: 8px 0;
    }
  </style>
  <section id="kepala-sekolah" class="kepala-sekolah-container">
    <div class="kepala-sekolah-content">
      <div class="kepala-sekolah-image-container">
        <img src="<?= base_url(); ?>Assets/img/imageInfo/lead.png" alt="Kepala Sekolah" class="kepala-sekolah-image" />
      </div>

      <div class="kepala-sekolah-text">
        <h1 class="kepala-sekolah-title">Sambutan Kepala Sekolah</h1>
        <p class="kepala-sekolah-paragraph">
          Assalammualikum Wr.Wb.
          Om Swastiastu Namo Budaya Salam Kebajikan Rahayu
          Puji syukur kita panjatkan kehadirat Tuhan Yang Maha Esa atas segala rahmat dan karunia-Nya sehingga kita dapat terus menjalankan tugas mulia dalam mencerdaskan kehidupan bangsa. Kami mengucapkan selamat datang di website resmi SMK Yadika Soreang, yang merupakan media informasi dan komunikasi yang diharapkan mampu memenuhi kebutuhan informasi seputar kegiatan dan prestasi sekolah kami. Saya mengajak seluruh guru, siswa, orang tua, dan alumni untuk turut serta dalam mengisi dan mengembangkan website ini yang dapat memberikan masukan dan saran yang konstruktif agar website ini dapat menjadi lebih baik lagi. Mari kita bersama-sama menjadikan website ini sebagai wadah untuk berkreasi dan berinovasi dalam dunia pendidikan.
        </p>
        <div class="kepala-sekolah-footer">
          <p class="kepala-sekolah-signature">Salam,</p>
          <p>Yetti Nuraini, S.Pd., Gr.</p>
        </div>
      </div>

    </div>
    </div>
  </section>
  <!-- end -->

  <style>
    .jurusan h3 {
      padding: 2% 0;
    }

    .card-container {
      display: flex;
      /* gap: 5px; */
    }

    .card {
      /* width: 18rem; */
      padding: 0;
    }

    @media (min-width: 320px) and (max-width: 768px) {
      .card-container {
        padding-top: 10px;
        display: flex;
        flex-direction: column;
      }

      .card {
        margin: 5% 0;
      }

    }
  </style>
  <!-- jurusan -->
  <div class="container">
    <section class="jurusan" id="jurusan">
      <h3 class="text-center fw-bold">Jurusan Apa Yang Tersedia?</h3>
      <div class="card-container text-center">
        <div class="col-md-4 d-flex justify-content-center">
          <div class="card mt-0" style="width: 18rem">
            <img src="<?= base_url(); ?>Assets/img/jurusan/account.png" class="card-img-top" alt="" />
            <div class="card-body">
              <h5 class="card-title fw-bold">Akuntansi</h5>
              <p class="card-text">
                Jurusan Akuntansi merupakan bidang studi yang mempelajari
                tentang metode pencatatan serta penyusunan laporan keuangan .
              </p>
              <a href="<?= base_url(); ?>Jurusan/akuntansi" class="btn btn-primary mt-4">More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="card mt-0" style="width: 18rem">
            <img src="<?= base_url(); ?>Assets/img/jurusan/software-engineer.png" class="card-img-top" alt="" />
            <div class="card-body">
              <h5 class="card-title fw-bold">Pemograman Perangkat Lunak Dan Gim</h5>
              <p class="card-text">
                Pemograman Perangkat Lunak Dan Gim adalah salah satu jurusan yang
                berfokus pada produksi dan pengembangan perangkat lunak dan gim .
              </p>
              <a href="<?= base_url(); ?>Jurusan/pplg" class="btn btn-primary">More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="card mt-0" style="width: 18rem">
            <img src="<?= base_url(); ?>Assets/img/jurusan/pin.png" class="card-img-top" alt="" />
            <div class="card-body">
              <h5 class="card-title fw-bold">Perhotelan</h5>
              <p class="card-text">
                Jurusan Perhotelan adalah jurusan yang mempelajari pengelolaan
                hotel serta cara menyeimbangkan aspek wisata dan manajemen
                bisnis untuk mencapai kesuksesan .
              </p>
              <a href="<?= base_url(); ?>Jurusan/perhotelan" class="btn btn-primary">More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Visitor Counter -->
  <style>
    .visitor-counter-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 20px;
      border-radius: 10px;
      background-color: #f0f0f0;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 300px;
      margin: auto;
      /* margin: 0 0 20px 0; */
      font-family: 'Arial', sans-serif;
    }

    /* Gaya untuk teks utama */
    .visitor-counter .p {
      font-size: 24px;
      color: #333;
      /* margin: 0 0 10px; */
      text-align: left;
    }

    /* Gaya untuk angka pengunjung */
    .visitor-counter .visitor-number {
      font-size: 48px;
      font-weight: bold;
      color: #2a9d8f;
      margin: 10px 0;
    }
  </style>
  <div class="container my-5">
    <?php
    // Hitungan jumlah pengunjung
    $file = "counter.txt";
    if (file_exists($file)) {
      $count = file_get_contents($file) + 1;
    } else {
      $count = 1;
    }
    file_put_contents($file, $count);
    ?>
    <div class="visitor-counter-container mt-4">
      <p>Jumlah Pengunjung: <?= $count; ?></p>
    </div>
  </div>
  <!-- End Visitor Counter -->

  <!--Total Siswa-->
  <style>
    /* Gaya khusus untuk statistik */
    .facts-section {
      background-color: #007bff;
      /* Background biru untuk seluruh section */
      padding: 50px 0;
    }

    .facts-card {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 20px;
      color: #fff;
      /* Warna teks putih untuk kontras dengan background biru */
      /* Hapus border dan shadow */
      border: none;
      background: none;
      box-shadow: none;
      /* Menghilangkan shadow */
    }

    .facts-card i {
      font-size: 3rem;
      margin-bottom: 10px;
    }

    .facts-card h2 {
      font-size: 2.5rem;
      /* Ukuran angka tetap */
      margin: 0;
    }

    .facts-card p {
      margin: 0;
      color: #e0e0e0;
      /* Warna teks sedikit lebih terang untuk kontras yang lebih baik */
      font-size: 1.25rem;
      /* Memperbesar ukuran teks */
    }

    /* Animasi */
    .fact-number {
      display: inline-block;
      /* Mengatur animasi angka */
      transition: all 0.5s ease-in-out;
    }
  </style>
  <script>
    // Fungsi untuk animasi angka
    function animateNumbers() {
      const numberElements = document.querySelectorAll(".fact-number");

      numberElements.forEach((el) => {
        const target = +el.getAttribute("data-count");
        const duration = 3000; // Durasi animasi dalam ms (3 detik)
        let start = 0;
        const increment = target / (duration / 50); // Pembaruan angka setiap 50ms

        function updateNumber() {
          start += increment;
          if (start < target) {
            el.textContent = Math.ceil(start);
            requestAnimationFrame(updateNumber);
          } else {
            el.textContent = target;
          }
        }

        // Mulai animasi ketika elemen terlihat di viewport
        function onScroll() {
          if (el.getBoundingClientRect().top < window.innerHeight) {
            updateNumber();
            window.removeEventListener("scroll", onScroll); // Hapus listener setelah animasi selesai
          }
        }

        window.addEventListener("scroll", onScroll);
        onScroll(); // Cek saat memuat halaman
      });
    }

    // Panggil fungsi animateNumbers ketika halaman dimuat
    window.addEventListener("load", animateNumbers);
  </script>
  <section class="facts-section">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-3">
          <div class="facts-card">
            <i class="bi bi-person-bounding-box"></i>
            <div class="facts-text">
              <h2 class="fact-number" data-count="40">0</h2>
              <p>Guru dan Tenaga Pendidikan</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="facts-card">
            <i class="bi bi-people"></i>
            <div class="facts-text">
              <h2 class="fact-number" data-count="549">0</h2>
              <p>Siswa Kelas X</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="facts-card">
            <i class="bi bi-people"></i>
            <div class="facts-text">
              <h2 class="fact-number" data-count="505">0</h2>
              <p>Siswa Kelas XI</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="facts-card">
            <i class="bi bi-people"></i>
            <div class="facts-text">
              <h2 class="fact-number" data-count="526">0</h2>
              <p>Siswa Kelas XII</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End -->