<body>
  <!-- Navbar -->
<!-- Bootstrap Carousel -->
<style>

      .carousel-item {
        height: calc(100vw * 9 / 16);
      }

      /* Ensure the image covers the entire item */
      .carousel-item img {
        object-fit: cover;
        height: 80%;
        width: 100%;
      }
    
</style>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500" data-bs-pause="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= base_url();?>Assets/img/imageInfo/Kum.jpeg" class="d-block w-100"  alt="Slide 1" />
        </div>
        <div class="carousel-item">
          <img src="<?= base_url();?>Assets/img/imageInfo/IHT.jpeg" class="d-block w-100"  alt="Slide 2" />
        </div>
        <div class="carousel-item">
          <img src="<?= base_url();?>Assets/img/imageInfo/Kum.jpeg" class="d-block w-100"  alt="Slide 3" />
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
        document.querySelector('.calendar-icon').addEventListener('click', function () {
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
            width: 25rem;
            height: calc(25rem * 0.5625);
        }

        .video-container iframe {
            width: 100%;
            height: 100%;
        }
   </Style>
  <div class="jumbotron">
    <div class="container">
      <div class="row m-auto">
        <div class="col-md-6">
          <img class="logo-homepage" src="<?= base_url();?>Assets/img/logo/logo yadika.png" alt="" />
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
          <a href="https://www.youtube.com/watch?v=ubTDTZYQq6I">
            <button type="button" class="btn btn-primary btn-OurSch mt-2">
            <i class="bi bi-play-fill"></i> Our School
          </button>
        </a>
        <div class="video-container">
      <iframe src="https://www.youtube.com/embed/ubTDTZYQq6I?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
      </div>
        <div class="col-md-6">
          <img src="<?= base_url();?>Assets/img/background/Background.png" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!-- End -->

  <!-- Bar info -->
  <style>
.brosur-container {
            max-width: 1200px;
            margin: 5rem auto;
            background-color: #e2e8f0;
            color: #1f2937;
            padding: 1rem 1rem 3rem 1rem;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .brosur-content {
            display: grid;
            grid-template-columns: 1fr;
            gap: 16px;
        }

        @media (min-width: 768px) {
            .brosur-content {
                grid-template-columns: repeat(3, 1fr);
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
<div class="brosur-container">
        <div class="brosur-content">
            <div class="brosur-item">
                <img src="<?= base_url();?>Assets/img/imageInfo/pdb1.jpeg" alt="PPDB 1" class="brosur-image">
                
            </div>
            <div class="brosur-item">
            <img src="<?= base_url();?>Assets/img/imageInfo/pdb2.jpeg" alt="PPDB 2" class="brosur-image">
                
            </div>
            <div class="brosur-item">
            <img src="<?= base_url();?>Assets/img/imageInfo/pdb3.jpeg" alt="PPDB 3" class="brosur-image">
                
            </div>
        </div>
        <div class="brosur-footer">
            <a href="<?= base_url('Keterangan')?>"
            class="cek-pendaftar-button">Cek Pendaftar!</a>
        </div>
    </div>
  <!-- End -->

  <!-- kepala sekolah page -->
<style>
.kepala-sekolah-container {
        max-width: 1200px;
        margin: 7rem auto;
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
        gap: 4rem;
        padding: 24px 8px;
      }

      @media (min-width: 768px) {
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
        font-size: 18px;
      }

      @media (min-width: 768px) {
        .kepala-sekolah-text {
          width: 50%;
        }
      }

      .kepala-sekolah-title {
        font-weight: bold;
        font-size: 2.25rem;
      }

      .kepala-sekolah-paragraph {
        text-align: justify;
      }

      .kepala-sekolah-footer {
        display: flex;
        flex-direction: column;
        gap: 8px;
        margin-top: 16px;
      }

      .kepala-sekolah-signature {
        margin: 8px 0;
      }
  </style>
  <section id="kepala-sekolah" class="kepala-sekolah-container">
      <div class="kepala-sekolah-content">

        <div class="kepala-sekolah-image-container">
        <img src="<?= base_url();?>Assets/img/imageInfo/lead.png" alt="Kepala Sekolah" class="kepala-sekolah-image" />
        </div>

        <div class="kepala-sekolah-text">
          <h1 class="kepala-sekolah-title">Kepala Sekolah Kita</h1>
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

  <!-- jurusan -->
  <section class="jurusan" style="margin-bottom:360px" id="jurusan">
    <div class="container">
      <h3 class="text-center fw-bold">Jurusan Apa Yang Tersedia?</h3>
      <div class="row text-center mt-5 ms-4">
        <div class="col-md-4">
          <div class="card" style="width: 18rem">
            <img src="<?= base_url();?>Assets/img/jurusan/account.png" class="card-img-top" alt="" />
            <div class="card-body">
              <h5 class="card-title fw-bold">Akuntansi</h5>
              <p class="card-text">
                Jurusan Akuntansi merupakan bidang studi yang mempelajari
                tentang metode pencatatan serta penyusunan laporan keuangan .
              </p>
              <a href="<?= base_url();?>Jurusan/akuntansi" class="btn btn-primary mt-4">More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem">
            <img src="<?= base_url();?>Assets/img/jurusan/software-engineer.png" class="card-img-top" alt="" />
            <div class="card-body">
              <h5 class="card-title fw-bold">Pemograman Perangkat Lunak Dan Gim</h5>
              <p class="card-text">
                Pemograman Perangkat Lunak Dan Gim adalah salah satu jurusan yang
                berfokus pada produksi dan pengembangan perangkat lunak dan gim .
              </p>
              <a href="<?= base_url();?>Jurusan/pplg" class="btn btn-primary">More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem">
            <img src="<?= base_url();?>Assets/img/jurusan/pin.png" class="card-img-top" alt="" />
            <div class="card-body">
              <h5 class="card-title fw-bold">Perhotelan</h5>
              <p class="card-text">
                Jurusan Perhotelan adalah jurusan yang mempelajari pengelolaan
                hotel serta cara menyeimbangkan aspek wisata dan manajemen
                bisnis untuk mencapai kesuksesan .
              </p>
              <a href="<?= base_url();?>Jurusan/perhotelan" class="btn btn-primary">More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End -->
