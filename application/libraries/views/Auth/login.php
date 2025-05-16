<style>
    .background {
	background-color: #f4d03f;
	background-image: linear-gradient(132deg, #3f93f4 0%, #000cf9 100%);
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
	left: calc(38.5%);
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
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center" style="margin-top:30px">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5" >
                            <img src="<?= base_url();?>Assets/img/logo/logo yadika.png"class="logo">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4 mt-5"><?= $title?></h3>
                            </div>
                            <div class="card-body">
                                <?= $this->session->flashdata('message');?>
                                <form class="user" action="<?= base_url('Auth')?>" method="post" >
                                        <div class="form-floating mb-3">
                                            <input class="form-control form-control-user" id="inputEmail" type="email" placeholder="email" name="email" value="<?= set_value('email')?>"/>
                                            <?= form_error('email', '<small class"text-danger pl-3">','</small>')?>
                                            <label for="inputEmail">Email</label>
                                        </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control form-control-user" id="inputPassword" type="password" placeholder="password" name="password" />
                                        <?= form_error('password', '<small class"text-danger pl-3">','</small>')?>
                                        <label for="password">Password</label>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
									
                                    <div class="mt-4 mb-0">
										<div class="d-grid"><button type="submit" class="tombol" value="login">Login</button></div>
                                    </div>
									<center>
										<a href="<?= base_url('Home') ?>">back</a>
									</center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    