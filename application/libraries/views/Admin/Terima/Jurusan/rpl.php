<style>
      .icon-large {
      font-size: 1rem;
    }
    th:nth-child(6) {
      width: 12%; /* Atur lebar kolom Nominal menjadi 20% */
    }
    </style>
<body>
<table id="datatablesSimple" class="table">
<thead>
        <tr>
            <th>Nama</th>
            <th>Nomer Hp</th>
            <th>JK</th>
            <th>Agama</th>
            <th>Jurusan</th>
            <th>Nominal</th>
            <th>wawancara</th>
            <th>Action</th>
            <th>status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($siswa as $a):?>
            <tr>
            <td>
                <?= $a['Nama']; ?>
            </td>
            <td>
            <a href="https://api.whatsapp.com/send?phone=<?= $a['no_hp']; ?>&text=Selamat%20Anda%20telah%20diterima%20di%20keluarga%20besar%20SMK%20yadika%20soreang%2C%20terimakasih%20sudah%20mendaftar%21%20Selamat%20bergabung%21" target="_blank"><?= $a['no_hp']; ?></a>
                
            </td>
            <td>
                <?= $a['jenis_kelamin']; ?>
            </td>
            <td>
                <?= $a['agama']; ?>
            </td>
            
            <td>
            <?php if($a['jurusan']=='AP'){
                    echo "Perhotelan";
                }else{?>
                <?= $a['jurusan'];} ?>
            </td>
            </td>
           
            <td>
                 <?= $rupiah = "Rp " . number_format($a['nominal'], 0, ',', '.');?>
            </td>
            <td><?php if($a['wawancara'] == 0 ){?>
                <div style="color:red">belum
                <?php
                
                echo anchor('Admin/wawancaras/'. $a['id_siswa'], '<div class="badge bg-info" onclick="return confirm(\'apakah siswa tersebut sudah wawancara?\')"> <i class="bi bi-check icon-large "></i></div>');
            }else{?>
            </div>
                <div style="color:green">sudah</div>
             <?php }?>
            </td>
            <td>
            <?php 
             echo anchor('Admin/hapus/'. $a['id_siswa'], '<div class="badge bg-danger" onclick="return confirm(\'apakah anda yakin ingin menghapus ini?\')">hapus</div>');
             ?>
            <?php 
             echo anchor('Admin/edit/'. $a['id_siswa'], '<div class="badge bg-warning" onclick="return confirm(\'apakah anda yakin ingin mengedit ini?\')">edit</div>');
             ?> 
            </td>
            <td>

                <?php
               if($a['ket']==1){?>
                    <p style="color:green">diterima</p>
                    <?php } ?>
                </td>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?= base_url('Excel/terima_rpl') ?>"><button class="badge bg-success">Download excel</button></a>
    <a href="<?= base_url('Buatpdf') ?>"><button class="badge bg-danger">Download PDF</button></a>

  <!-- ... -->
  <!-- Tombol Edit -->


<!-- Modal Edit -->


  
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>Assets/js/datatables-simple-demo.js"></script>
</body>
</html>