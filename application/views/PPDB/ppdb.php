<style>
	.button-link {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
 .background {
	 height: 100vh;
	background-color: #f4d03f;
	background-image: linear-gradient(1000deg, #3f93f4 0%, #000cf9 100%);
	background-size: cover;
}
.sideee {
	color: #fff;
}
.tombol2 {
	background-image: linear-gradient(
		to right,
		#ff512f 0%,
		#f09819 51%,
		#ff512f 100%
	);
	margin: 10px;
	padding: 15px 45px;
	text-align: center;
	text-transform: uppercase;
	transition: 0.5s;
	background-size: 200% auto;
	color: white;
	box-shadow: 0 0 20px #eee;
	border-radius: 10px;
	display: block;
}
.tombol {
	background-image: linear-gradient(
		to right,
		#0024c7 0%,
		#19a5f0 51%,
		#632fff 100%
	);
	margin: 10px;
	padding: 15px 45px;
	text-align: center;
	text-transform: uppercase;
	transition: 0.5s;
	background-size: 200% auto;
	color: white;
	box-shadow: 0 0 20px #eee;
	border-radius: 10px;
	display: block;
}

.logo {
	width: 110px;
	height: 100px;
	border-radius: 50% solid;
	border: 20px;
	overflow: hidden;
	position: absolute;
	top: calc(-50px);
	left: calc(45%);
	background-image: transparent;
}
.tombol:hover {
	background-position: right center; /* change the direction of the change here */
	color: #fff;
	text-decoration: none;
}
.tombol2:hover {
	background-position: right center; /* change the direction of the change here */
	color: #fff;
	text-decoration: none;
}
.trns {
	opacity: 0.5;
}
form {
	background-color: transparent;
}

</style>
<body>

	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
        <main style="margin-bottom:30px">
            <div class="container">
                <div class="row justify-content-center" style="margin-top:30px">
                    <div class="col-lg-12">
                        <div class="card shadow-lg border-0 rounded-lg mt-5" >
							<img src="<?= base_url();?>Assets/img/logo/logo yadika.png"class="logo">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4 mt-5"><?= $title?></h3>
                            </div>
                            <div class="card-body">
								<?= $this->session->flashdata('message');?>
                               <form class="form-ppdb container mb-3" action="<?= base_url('Ppdb')?>" method="post">
	<?php if ($this->session->flashdata('success_message')): ?>
		<div class="alert alert-success">
			<?php echo $this->session->flashdata('success_message'); ?>
		</div>
	<?php endif; ?>

	<div class="row mb-3">
		<div class="col-md-6">
			<label for="nama" class="form-label">Nama</label>
			<div class="form-floating mb-3">
				<input type="text" class="form-control form-control-user" id="nama" name="Nama" placeholder="Nama Siswa" onclick="test_na()" value="<?= set_value('Nama'); ?>">
				<div style="color: red" id="error_na" class="error">
					<?= form_error('Nama'); ?>
				</div>
			</div>
	
			<label for="namaOrtu" class="form-label">Nama Orang Tua</label>
			<div class="form-floating mb-3">
				<input type="text" class="form-control form-control-user" id="namaOrtu" name="namaOrtu" onclick="test_no()" placeholder="Nama Orang Tua" value="<?= set_value('namaOrtu'); ?>">
				<div style="color: red" id="error_no" class="error">
					<?= form_error('namaOrtu'); ?>
				</div>
			</div>

			<label for="asek" class="form-label">Asal Sekolah</label>
			<div class="form-floating mb-3">
				<input type="text" class="form-control form-control-user" id="asek" name="asek" placeholder="Asal Sekolah" onclick="test_as()" value="<?= set_value('asek'); ?>">
				<div style="color: red" id="error_as" class="error">
					<?= form_error('asek'); ?>
				</div>
			</div>
			<label for="no_hp" class="form-label">Nomer Hp(+62)</label>
			<div class="form-floating mb-3">
				<input type="number" class="form-control form-control-user" id="no_hp" name="no_hp" placeholder="+62" onclick="test_nh()">
				<p style="font-size:12px">
					contoh isi: 8192831...
				</p>
					<div style="color: red" id="error_nh" class="error">
						<?= form_error('no_hp'); ?>
					</div>
				</div>
		</div>
		<div class="col-md-6">
				
		<label for="Alamat" class="form-label">Alamat</label>
				<div class="form-floating mb-3">
            <textarea class="form-control form-control-user" id="alamat" name="alamat" placeholder="Isi alamat lengkap anda di sini ..."onclick="test_al()" value="<?= set_value('alamt');?>"></textarea>
            <div style="color: red" id="error_al" class="error">
              <?= form_error('alamat'); ?>
            </div>
		</div>
		<label for="JK">Jenis Kelamin</label>
		<div class="form-check mt-3">
  <input class="form-check-input" type="radio" name="JK" value="pria" checked>
  <label class="form-check-label" for="wanita">
    Pria
  </label>
</div>
		<div class="form-check mb-3">
  <input class="form-check-input" type="radio" name="JK" value="wanita" checked>
  <label class="form-check-label" for="pria">
    Wanita
  </label>
</div>
<div class="form-group mb-4 mt-4">
  <label for="agama">Agama</label>
  <select class="form-control" id="agama" name="agama">
    <option disabled selected>--Pilih--</option>
    <option value="islam">Islam</option>
    <option value="Kristen">Kristen</option>
    <option value="Hindu">Hindu</option>
    <option value="Budha">Budha</option>
    <option value="Konghucu">Konghucu</option>
  </select>
</div>

<div class="form-group mb-3">
  <label for="jurusan">Pilihan Jurusan</label>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="jurusan" value="RPL" id="rpl">
    <label class="form-check-label" for="rpl">Rekayasa Perangkat Lunak</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="jurusan" value="AK" id="ak">
    <label class="form-check-label" for="ak">Akuntansi</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="jurusan" value="AP" id="ap">
    <label class="form-check-label" for="ap">Perhotelan</label>
  </div>
</div>

	</div>
	
	<div class="mt-4 mb-0">
		<div class="d-grid">
			<button type="submit" class="tombol" value="login">Daftar</button>
		</div>
		<center>
			<a href="<?= base_url('Home') ?>" class="button-link" >Kembali</a>
		</center>
	</div>
</form>

</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body>
<script>
	function test_na(){
		document.getElementById('error_na').style.display = 'none'
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

    </script>