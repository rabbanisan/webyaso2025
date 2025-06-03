    <style>
        th:nth-child(6) {
            width: 12%;
            /* Atur lebar kolom Nominal menjadi 20% */
        }
    </style>

    <body>
        <table id="datatablesSimple" class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nama Orang Tua</th>
                    <th>Asal Sekolah</th>
                    <th>Nominal</th>
                    <th>Jurusan</th>
                    <th>Keterangan</th>
                    <th>status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($siswa as $a): ?>
                    <tr>
                        <td>
                            <?= $a['Nama']; ?>
                        </td>
                        <td>
                            <?= $a['alamat']; ?>
                        </td>
                        <td>
                            <?= $a['nama_ortu']; ?>
                        </td>
                        <td>
                            <?= $a['asek']; ?>
                        </td>
                        <td style="padding: 8px;
">
                            <?php
                            if ($a['nominal'] == 0) { ?>
                                <a href="#" class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#editModal" data-id="<?= $a['id_siswa']; ?>">tambah</a>
                            <?php
                            } elseif ($a['nominal'] < 2000000) {
                                echo "Rp " . number_format($a['nominal'], 0, ',', '.'); ?>
                                <a href="#" class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#editModal" data-id="<?= $a['id_siswa']; ?>">tambah</a>
                            <?php
                            } else {
                                echo "Rp " . number_format($a['nominal'], 0, ',', '.');
                            }
                            ?>
                        </td>
                        <td>
                            <?php if ($a['jurusan'] == 'AP') {
                                echo "Perhotelan";
                            } else { ?>
                            <?= $a['jurusan'];
                            } ?>
                        </td>
                        <td>
                            <?php if ($a['ket'] == 0) {
                                echo anchor('Admin/terima/' . $a['id_siswa'], '<div class="badge bg-info" onclick="return confirm(\'apakah anda yakin ingin menerima siswa ini?\')">terima</div>');
                                echo anchor('Admin/no_terima/' . $a['id_siswa'], '<div class="badge bg-danger" onclick="return confirm(\'apakah anda yakin ingin menerima siswa ini?\')">tolak</div>');
                            } else if ($a['ket'] == 2) {
                                echo anchor('Admin/terima/' . $a['id_siswa'], '<div class="badge bg-info" onclick="return confirm(\'apakah anda yakin ingin menerima siswa ini?\')">terima</div>');
                            } ?>
                        </td>
                        <td>
                            <?php
                            echo anchor('Admin/hapus/' . $a['id_siswa'], '<div class="badge bg-danger" onclick="return confirm(\'apakah anda yakin ingin menghapus ini?\')">hapus</div>');
                            ?>
                            <?php
                            echo anchor('Admin/edit/' . $a['id_siswa'], '<div class="badge bg-warning" onclick="return confirm(\'apakah anda yakin ingin mengedit ini?\')">edit</div>');
                            ?>
                        </td>
                        <td>

                            <?php
                            if ($a['ket'] == 0) {
                            ?>
                                <p style="color:grey">Proses</p>
                            <?php } else if ($a['ket'] == 1) { ?>
                                <p style="color:green">diterima</p>
                            <?php } else { ?>
                                <p style="color:red">tidak diterima</p>
                            <?php } ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="<?= base_url('Excel') ?>"><button class="badge bg-info">Download</button></a>
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Masukan Jumlah Nominal</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url('Admin/update_nominal'); ?>" method="POST">
                            <input type="hidden" name="id" id="editId">
                            <label for="value">Value:</label>
                            <input type="text" name="new_value" value="" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- CSS Bootstrap -->

        <!-- JavaScript Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="<?= base_url() ?>Assets/js/datatables-simple-demo.js"></script>
        <script>
            $(document).ready(function() {
                $('#editModal').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget);
                    var id = button.data('id');
                    $('#editId').val(id);
                });
            });
        </script>
    </body>

    </html>