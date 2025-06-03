<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-6 col-md-12 offset-md-3">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-header">
                            <h3>Total Keseluruhan Data Pendaftar</h3>
                        </div>
                        <div class="card-body">
                            <h4><?php foreach ($siswa as $a) {
                                    echo $a['siswa'];
                                }; ?></h4>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('Admin/data') ?>">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-header">
                            <h3>Total Keseluruhan Data Pendaftar Jurusan PPLG</h3>
                        </div>
                        <div class="card-body">
                            <h4><?php foreach ($RPL as $a) {
                                    echo $a['RPL'];
                                }; ?></h4>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('Admin/RPL') ?>">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-header">
                            <h3>Total Keseluruhan Data Pendaftar Jurusan Akuntansi</h3>
                        </div>
                        <div class="card-body">
                            <h4><?php foreach ($AK as $a) {
                                    echo $a['AK'];
                                }; ?></h4>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('Admin/AK') ?>">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-header">
                            <h3>Total Keseluruhan Data Pendaftar Jurusan Perhotelan</h3>
                        </div>
                        <div class="card-body">
                            <h4><?php foreach ($AP as $a) {
                                    echo $a['AP'];
                                }; ?></h4>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('Admin/AP') ?>">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-header">
                            <h3>Total diterima Jurusan PPLG</h3>
                        </div>
                        <div class="card-body">
                            <h4><?php foreach ($RPL_terima as $a) {
                                    echo $a['RPL'];
                                }; ?></h4>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('Terima/RPL') ?>">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-header">
                            <h3>Total diterima Jurusan Akuntansi</h3>
                        </div>
                        <div class="card-body">
                            <h4><?php foreach ($AK_terima as $a) {
                                    echo $a['AK'];
                                }; ?></h4>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('Terima/AK') ?>">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-header">
                            <h3>Total diterima Jurusan Perhotelan</h3>
                        </div>
                        <div class="card-body">
                            <h4><?php foreach ($AP_terima as $a) {
                                    echo $a['AP'];
                                }; ?></h4>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('Terima/AP') ?>">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-info text-white mb-4">
                        <div class="card-header">
                            <h3>Total Keseluruhan Data Pendaftar yang diterima</h3>
                        </div>
                        <div class="card-body">
                            <h4><?php foreach ($terima as $a) {
                                    echo $a['terima'];
                                }; ?></h4>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('Terima') ?>">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</main>