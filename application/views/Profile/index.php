
<style><style>
      .accordion-container {
        width: 100%;
        margin: 20px auto;
        padding: 20px;
      }

      @media (min-width: 768px) {
        .accordion-container {
          margin: 20px 0;
          max-width: 50%;
        }
      }

      .accordion-item {
        border: 1px solid #ddd;
        border-radius: 10px;
        margin-bottom: 15px;
        overflow: hidden;
        background-color: transparent;
        box-shadow: none;
      }

      .accordion-header {
        background-color: transparent;
        border-bottom: 1px solid #ddd;
      }

      .accordion-button {
        font-weight: bold;
        color: #333;
        background-color: transparent;
        border: none;
        border-radius: 0;
        padding: 15px;
        transition: color 0.3s, box-shadow 0.3s;
      }

      .accordion-button:focus {
        box-shadow: none;
      }

      .accordion-button:hover {
        color: #007bff; /* Ubah warna teks saat hover */
      }

      .accordion-button:not(.collapsed) {
        color: #007bff; /* Warna teks aktif */
      }

      .accordion-button::after {
        font-size: 1.25rem;
        color: #333;
        transition: color 0.3s;
      }

      .accordion-button:not(.collapsed)::after {
        color: #007bff; /* Warna tanda panah aktif */
      }

      .accordion-body {
        padding: 20px;
        background-color: #f8f9fa;
      }

      ul.mission-list {
        list-style-type: disc;
        padding-left: 20px;
      }

      .accordion-item:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
      }
    </style></style>

<div class="accordion-container">
      <div class="accordion" id="accordionExample">
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
              Visi Kami
            </button>
          </h2>
          <div
            id="collapseOne"
            class="accordion-collapse collapse show"
            aria-labelledby="headingOne"
            data-bs-parent="#accordionExample"
          >
            <div class="accordion-body">
              <strong
                >Visi SMK Yadika Soreang adalah mewujudkan generasi masa kini yang berakhlak mulia, kompeten dan profesional sesuai bidangnya, serta dapat berkontribusi bagi diri sendiri, keluarga, dan masyarakat.
                </strong
              >
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
            Untuk mewujudkan Visi sekolah, maka SMK Yadika Soreang menetapkan misi dengan melakukan beberapa langkah konkret, adalah sebagai berikut :

            </button>
          </h2>
          <div
            id="collapseTwo"
            class="accordion-collapse collapse"
            aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample"
          >
            <div class="accordion-body">
              <ul class="mission-list">
                <li>Mengembangkan karakter beriman dan bertawa kepada Tuhan Yang Maha Esa serta berakhlak mulia, Berkebhinekaan Global, Mandiri, Gotong Royong, Bernalar Kritis, dan Kreatif sesuai dengan Profil Pelajar Pancasila yang kuat melalui program kegiatan di sekolah
                .</li>
                <li>Mengintegrasikan pendidikan moral dan etika dalam kegiatan pembelajaran
                </li>
                <li>Menumbuhkan sikap kritis dan kreatif pada siswa.</li>
                <li>
                Selalu melakukan Upgrading yang disesuaikan dengan kebutuhan industri dan perkembangan teknologi pada setiap ajaran baru

                </li>
                <li>
                  Memastikan keberhasilan setiap siswa melalui pendekatan
                  individu.
                </li>
                <li>Memberikan dukungan kepada orang tua dalam mendidik anak-anak mereka dengan memberikan informasi, dukungan, dan sumber daya 

                </li>
                <li>Mendorong keikutsertaan dalam kegiatan sosial dan kewirausahaan dengan target 40% di tahun ajaran 2024/2025
                </li>
                <li>Menyelenggarakan proses pembelajaran yang sesuai dengan tuntutan dunia industri/ dunia usaha dengan tingkat keterserapan sebesar 65%
                </li>
                <li>Melaksanakan delapan standar pendidikan nasional dengan maksimal
                </li>
              </ul>
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
              Sejarah SMK Yadika Soreang
            </button>
          </h2>
          <div
            id="collapseThree"
            class="accordion-collapse collapse"
            aria-labelledby="headingThree"
            data-bs-parent="#accordionExample"
          >
            <div class="accordion-body">
              <strong>SMK Yadika Soreang didirikan pada tahun 1985</strong>
              dengan tujuan untuk memberikan pendidikan berkualitas kepada
              masyarakat. Sejak didirikan, sekolah ini telah menghasilkan banyak
              lulusan yang berhasil dalam berbagai bidang.
            </div>
          </div>
        </div>
      </div>
    </div>  

    <div class="guru">
      <h1>Guru Kita</h1>
      <div class="btn">
        <a href="more/more.html"
          ><button>
            Selengkapnya <img src="<?= base_url();?>Assets/Profile/img/down-arrow 1.png" alt="" /></button
        ></a>
      </div>
      <div class="slider">
        <div class="swiper slide-container">
          <div class="swiper-wrapper card-wrapper">
            <div class="swiper-slide card">
              <div class="card-content">
                <div class="card-img">
                  <img src="<?= base_url();?>Assets/Profile/img/yoga.jfif" alt="" />
                </div>
                <div class="card-text">
                  <h1>Yoga Eldhi Prawira S.Kom</h1>
                  <p>Guru PPLG</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide card">
              <div class="card-content">
                <div class="card-img">
                  <img src="<?= base_url();?>Assets/Profile/img/jepi.jpeg" alt="" />
                </div>
                <div class="card-text">
                  <h1>Jepi Sutarlan Saputra S.Kom </h1>
                  <p>Guru PPLG</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide card">
              <div class="card-content">
                <div class="card-img">
                  <img src="<?= base_url();?>Assets/Profile/img/nuha.jpeg" alt="" />
                </div>
                <div class="card-text">
                  <h1>Nuha Cikal Azizah, S.Pd</h1>
                  <p>DDPPLG & MAPEL PILIHAN RPL</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide card">
              <div class="card-content">
                <div class="card-img">
                  <img src="<?= base_url();?>Assets/Profile/img/dewi.jpeg" alt="" />
                </div>
                <div class="card-text">
                  <h1>Dewi kristina sodikin, S.Ag</h1>
                  <p>Bimbingan dan Konseling</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide card">
              <div class="card-content">
                <div class="card-img">
                  <img src="<?= base_url();?>Assets/Profile/img/.jpeg" alt="" />
                </div>
                <div class="card-text">
                  <h1>Esa Suri Ratnasuminar, M.Pd</h1>
                  <p>Guru Matematika</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide card">
              <div class="card-content">
                <div class="card-img">
                  <img src="<?= base_url();?>Assets/Profile/img/profile.png" alt="" />
                </div>
                <div class="card-text">
                  <h1>Nama Guru</h1>
                  <p>Mata Pelajaran</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide card">
              <div class="card-content">
                <div class="card-img">
                  <img src="<?= base_url();?>Assets/Profile/img/profile.png" alt="" />
                </div>
                <div class="card-text">
                  <h1>Nama Guru</h1>
                  <p>Mata Pelajaran</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide card">
              <div class="card-content">
                <div class="card-img">
                  <img src="<?= base_url();?>Assets/Profile/img/profile.png" alt="" />
                </div>
                <div class="card-text">
                  <h1>Nama Guru</h1>
                  <p>Mata Pelajaran</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide card">
              <div class="card-content">
                <div class="card-img">
                  <img src="<?= base_url();?>Assets/Profile/img/profile.png" alt="" />
                </div>
                <div class="card-text">
                  <h1>Nama Guru</h1>
                  <p>Mata Pelajaran</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>

    <div class="fasilitas">
      <div class="judul">
        <h1>Fasilitas Sekolah</h1>
      </div>

      <div class="konten">
        <div class="img">
          <img src="<?= base_url();?>Assets/Profile/img/perpustakaan.jpeg" alt="" />
        </div>
        <div class="text-second">
          <h2>Perpustakaan</h2>
          <p>
            "Selamat datang di perpustakaan kami di SMK YADIKA SOREANG. 
            Sebagai jantung intelektualitas dan pengetahuan di lingkungan kami, 
            perpustakaan kami membanggakan diri sebagai tempat yang menyediakan akses tak terbatas ke dunia pengetahuan. 
            Dengan koleksi buku yang beragam dan fasilitas canggih,kami berkomitmen untuk mendorong minat membaca dan pengembangan keterampilan literasi bagi setiap siswa.
            Perpustakaan kami menyediakan lingkungan yang nyaman dan terbuka untuk semua siswa, staf, dan anggota komunitas sekolah. 
            Dengan suasana yang ramah dan penuh inspirasi, kami mengundang Anda untuk menjelajahi rak-rak penuh buku, majalah, dan sumber daya referensi lainnya. 
            Apakah Anda mencari buku fiksi terbaru, bahan penelitian untuk proyek Anda, 
            atau ingin memperdalam pengetahuan Anda dalam berbagai subjek, perpustakaan kami siap melayani Anda."
          </p>
        </div>
      </div>

      <div class="hr2">
        <hr />
      </div>

      <div class="konten">
        <div class="text">
          <h2>Lab Komputer Rnd</h2>
          <p>
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt
            mollit anim id est laborum."
          </p>
        </div>
        <div class="img">
          <img src="<?= base_url();?>Assets/Profile/img/labkomputer.jpeg" alt="" />
        </div>
      </div>

      <div class="hr2">
        <hr />
      </div>

      <div class="konten">
        <div class="img">
          <img src="<?= base_url();?>Assets/Profile/img/Marketplace-amico 1.png" alt="" />
        </div>
        <div class="text-second">
          <h2>Kantin</h2>
          <p>
            "Selamat datang di kantin kami di SMK YADIKA SOREANG 
            Sebagai pusat kuliner dan sosial di lingkungan kami, kantin kami menawarkan beragam pilihan makanan dan minuman yang lezat 
            serta menyediakan tempat yang nyaman untuk siswa dan staf sekolah bersantai dan bersosialisasi.
            Kantin kami menampilkan suasana yang ramah dan santai, di mana siswa dapat menikmati makanan favorit mereka sambil bersantai dengan teman-teman
            atau menghabiskan waktu istirahat dengan nyaman. Dari sarapan pagi hingga makan siang dan camilan sore, 
            kami menyajikan berbagai menu yang disesuaikan dengan selera dan preferensi siswa."
          </p>
        </div>
      </div>

      <div class="hr2">
        <hr />
      </div>

      <div class="konten">
        <div class="text">
          <h2>Mushola</h2>
          <p>
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt
            mollit anim id est laborum."
          </p>
        </div>
        <div class="img">
          <img src="<?= base_url();?>Assets/Profile/img/Ramadan kareem-pana 1.png" alt="" />
        </div>
      </div>

      <div class="hr2">
        <hr />
      </div>

      <div class="konten" >
        <div class="img">
          <img src="<?= base_url();?>Assets/Profile/img/Junior soccer-amico 1.png" alt="" />
        </div>
        <div class="text-second">
          <h2>Lapangan Olahraga</h2>
          <p>
            "Selamat datang di lapangan olahraga kami di SMK YADIKA SOREANG,
            Sebagai pusat kegiatan fisik dan kesehatan di lingkungan kami, 
            lapangan olahraga kami menawarkan fasilitas modern yang dirancang untuk mendukung perkembangan atletik dan kesejahteraan siswa.
            Lapangan olahraga kami terdiri dari berbagai fasilitas, termasuk lapangan sepak bola, lapangan bola basket, lapangan Voli, 
            dan area untuk olahraga atletik lainnya. 
            Dengan luasnya ruang yang tersedia, siswa memiliki kesempatan untuk berpartisipasi dalam berbagai olahraga, 
            mulai dari sepak bola hingga atletik, sesuai dengan minat dan bakat mereka.."
          </p>
        </div>
      </div>

      <div class="hr2" style="margin-bottom:330px">
        <hr />
      </div>
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url();?>Assets/Profile/script.js"></script>
  </body>
</html>
