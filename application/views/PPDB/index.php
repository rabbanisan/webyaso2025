
<!-- Bar info -->
<div class="container-fluid px-4">
  <!-- <form class="form-ppdb container" action="<?= base_url('Ppdb')?>" method="post">
    <?php if ($this->session->flashdata('success_message')): ?>
      <div class="alert alert-success">
        <?php echo $this->session->flashdata('success_message'); ?>
      </div>
    <?php endif; ?>
    <div class="d-flex justify-content-center">
      <div class="row">
        <div class="col-xl-6 col-md-6">
          <div class="first-form d-flex flex-column w-100 align-items-center"> 
            <input type="text" name="Nama" placeholder="Nama Siswa" onclick="test_na()" value="<?= set_value('Nama');?>" />
            <div id="error_na" class="error">
              <?= form_error('Nama'); ?>
            </div>
            <input type="number" name="nisn" id="nisn" onclick="test_ni()"placeholder="NISN"value="<?= set_value('nisn');?>"/>
            <div id="error_ni" class="error">
              <?= form_error('nisn'); ?>
            </div>
            <input type="text" name="namaOrtu"onclick="test_no()" placeholder="Nama Orang Tua"value="<?= set_value('namaOrtu');?>"/>
            <div id="error_no" class="error">
              <?= form_error('namaOrtu'); ?>
            </div>
            <input type="text" name="asek" placeholder="Asal Sekolah" onclick="test_as()" value="<?= set_value('asek');?>"/>
            <div id="error_as" class="error">
              <?= form_error('asek'); ?>
            </div>
            <input type="number" name="no_hp" placeholder="Nomer Handphone / WA"onclick="test_nh()" value="<?= set_value('no_hp');?>"/>
            <div id="error_nh" class="error">
              <?= form_error('no_hp'); ?>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-6">
          <div class="second-form w-100 d-flex flex-column">
            <label for="alamat"> Alamat</label>
            <textarea class="100" id="alamat" name="alamat" placeholder="Isi alamat lengkap anda di sini ..."onclick="test_al()" value="<?= set_value('no_hp');?>"></textarea>
            <div id="error_al" class="error">
              <?= form_error('alamat'); ?>
            </div>
            <div class="d-flex justify-content-between">
              <div class="jenis-kelamin w-75 me-3">
                <p>Jenis Kelamin</p>
                Pria
                <input id="pria" type="radio" name="JK" value="pria"/>
                Wanita
                <input id="wanita" type="radio" name="JK" value="wanita"/> 
              </div>
              <div class="agama w-75">
                <p>Agama</p>
                <select id="agama" name="agama" style="display:block" >
                  <option disabled selected>--Pilih--</option>
                  <option value="islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
                <input type="text" name="lainnya_a" style="display:none" placeholder="isi agamamu"  id="lainnya_a"/>
                <div class="d-flex">
                  <p>Lainnya</p>
                  <input type="checkbox" id="LainnyaA" value="lainnya" name="LainnyaA" class="ms-2 checkbox" style="margin-top: -1px">
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between">
              <div class="know-from w-75 me-3">
                <p>Darimana Kamu Tahu SMK Yadika Soreang?</p>
                <select id="sumber" name="sumber" style="display:block" >
                  <option disabled selected>--Pilih--</option>
                  <option value="Teman">Teman</option>
                  <option value="Keluarga">Keluarga</option>
                  <option value="Media Sosial">Media Sosial</option>
                </select>
                <input type="text" name="sumber_l" style="display:none"placeholder ="isi sumber informasi" id="lainnya_s"/>
                <div class="d-flex">
                  <p>Lainnya</p>
                  <input type="checkbox" id="LainnyaS" value="lainnya" name="LainnyaS" style="margin-top: -3px" class="checkbox ms-2"/> 
                </div>
              </div>
              <div class="jurusan w-50" style="margin-top: -10px">
                <p>Pilihan Jurusan</p>
                <div>
                  <input type="radio" name="jurusan" value="RPL" id="rpl"/> 
                  <label for="rpl">Rekayasa Perangkat Lunak</label>
                </div>
                <div>
                  <input type="radio" name="jurusan" value="AK" id="ak"/> 
                  <label for="ak">Akuntansi</label>
                </div>
                <div>
                  <input type="radio" name="jurusan" value="AP" id="ap"/> 
                  <label for="ap">Perhotelan</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-100 d-flex justify-content-center">
          <input class="btn btn-form-submit mx-auto" type="submit" value="submit">
        </div>
      </div>
    </form> -->
    <body style="background-color:blue">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Create Account</a></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
  </div>
    <script>
    function test_na(){
      document.getElementById('error_na').style.display = 'none'
    }
    function test_ni(){
      document.getElementById('error_ni').style.display = 'none'
    }
    function test_no(){
      document.getElementById('error_no').style.display = 'none'
    }
    function test_as(){
      document.getElementById('error_as').style.display = 'none'
    }
    function test_nh(){
      document.getElementById('error_nh').style.display = 'none'
    }
    function test_al(){
      document.getElementById('error_al').style.display = 'none'
    }
       const checkA = document.getElementById('LainnyaA');
       checkA.addEventListener('change', function () {
            if (this.checked) {
                return muncul_a()
            } else {
                return ilang_a()
            }
        });
       const checkS = document.getElementById('LainnyaS');
       checkS.addEventListener('change', function () {
            if (this.checked) {
                return muncul_s()
            } else {
                return ilang_s()
            }
        });
    function ilang_a(){
      document.getElementById('lainnya_a').style.display = 'none';
      document.getElementById('agama').setAttribute('name','agama');
      document.getElementById('agama').style.display = 'block';
    }
    function muncul_a(){
      document.getElementById('lainnya_a').style.display = 'block';
      document.getElementById('agama').removeAttribute('name');
      document.getElementById('agama').style.display = 'none';
    }
    function ilang_s(){
      document.getElementById('lainnya_s').style.display = 'none';
      document.getElementById('sumber').setAttribute('name','sumber');
      document.getElementById('sumber').style.display = 'block';
    }
    function muncul_s(){
      document.getElementById('lainnya_s').style.display = 'block';
      document.getElementById('sumber').removeAttribute('name');
      document.getElementById('sumber').style.display = 'none';
    }
  </script>
  <!-- End -->
  