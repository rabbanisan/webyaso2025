<!-- Daftar footer -->
<section class="daftar-footer" id="daftar-footer">
  <div class="container">
    <div class="row p-5 d-flex justify-content-center">
      <div class="col-md-6 d-flex mobile">
        <h3 class="text-white fw-bold text-center">Ayo Daftar Sekarang Juga!</h3>
        <a href="<?= base_url() ?>Ppdb"><button type="button" class="btn btn-primary">PPDB</button></a>
      </div>

    </div>
  </div>
</section>
<!-- END -->

<!-- Alamat -->
<style>
  .map-container {
    width: 100%;
    height: 13rem;
    padding-left: 15%;
  }

  .map-container iframe {
    width: 100%;
    height: 100%;
  }

  .container-alamat {}
</style>

<section class="alamat">
  <div class="container container-alamat">
    <div class="row">
      <div class="col-md-6 mb-3">
        <div class="d-flex flex-col">
          <div class="logo-footer mt-2">
            <img src="<?= base_url(); ?>Assets/img/logo/logo yadika.png" alt="" />
          </div>
          <div class="alam-footer ms-4">
            <h3 class="fw-bold">SMK Yadika Soreang</h3>
            <p class="mobile">
              Jl. Raya Soreang, Cingcin, Kec. Soreang, Kabupaten Bandung, Jawa
              Barat 40921
            </p>
          </div>
        </div>
        <div class="map-container">
          <iframe frameborder="0" style="border: 0" referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.875119848697!2d107.53463727470421!3d-7.023962192977751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ed28408eab67%3A0xc39aa21e7016ed40!2sSMA%20Yadika%20Soreang!5e0!3m2!1sen!2sus!4v1723093263403!5m2!1sen!2sus"></iframe>
        </div>
      </div>
      <div class="CTA-page col-md-6 d-flex justify-content-end">
        <div class="col-md-4">
          <div class="row">
            <h5 class="fw-bold">Link Helper</h5>
            <ul class="list-unstyled">
              <li><a href="">Home</a></li>
              <li><a href="">Profile</a></li>
              <li><a href="">Kelulusan</a></li>
              <li><a href="">PPDB</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
            <h5 class="fw-bold">Need Help?</h5>
            <ul class="list-unstyled">
              <li><a href="">Contact Us</a></li>
              <li><a href="">Help</a></li>
              <li><a href="">FAQ's</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row contact-us">
      <p>
        <i class="bi bi-envelope-fill px-2"></i>
        unityadikasoreang@gmail.com
      </p>
      <p><i class="bi bi-telephone-fill px-2"></i> 08112228128</p>
    </div>
  </div>
</section>
<!-- End -->

<!-- footer -->
<footer class="text-white">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-9">
        <p>
          All rights reserve to <span>SMK YADIKA SOREANG 2024</span> Ltd.
        </p>
      </div>
      <div class="col-md-3 social-media">
        <a href=""><img src="<?= base_url(); ?>Assets/img/socialMedia/tiktok.png" alt="" /></a>
        <a href="https://wa.me/08112228128" target="_blank"
          rel="noopener"><img src="<?= base_url(); ?>Assets/img/socialMedia/whatsapp.png" alt="" /></a>
        <a href="https://www.instagram.com/smkyadikasoreangofficial/"><img
            src="<?= base_url(); ?>Assets/img/socialMedia/instagram.png" alt="" /></a>
      </div>
    </div>
  </div>
</footer>
<!-- End -->

<!-- sccroll top -->
<a href="#" class="scrollup" id="scroll-up">
  <i class="uil uil-arrow-up scrollup_icon"></i>
</a>
<!-- End -->

<!-- Indikator -->
<div class="indikator d-flex flex-column">
  <a href="#" id="indikator-btn1"></a>
  <a href="#kepala-sekolah" id="indikator-btn2"></a>
  <a href="#jurusan" id="indikator-btn3"></a>
  <a href="#daftar-footer" id="indikator-btn4"></a>
</div>
<!-- End -->

<!-- Optional JavaScript; choose one of the two! -->
<script src="<?= base_url(); ?>Assets/script.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<!-- JS Bundle (Wajib untuk collapse) -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>Assets/js/datatables-simple-demo.js"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

<!-- <script>
  const toggler = document.getElementById('custom-toggler');
  const menu = document.getElementById('custom-navbar');
  const openIcon = toggler.querySelector('.open-icon');
  const closeIcon = toggler.querySelector('.close-icon');

  toggler.addEventListener('click', () => {
    console.log("clickerd");

    const isOpen = !menu.classList.contains('d-none');
    if (isOpen) {
      menu.classList.add('d-none');
      openIcon.classList.remove('d-none');
      closeIcon.classList.add('d-none');
    } else {
      menu.classList.remove('d-none');
      openIcon.classList.add('d-none');
      closeIcon.classList.remove('d-none');
    }
  });
</script> -->
</body>