<!DOCTYPE html>
<html>
<head>
  <title>Laporan PPDB - SMK Yadika Soreang</title>
  <style>
    .header {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .content {
      margin-bottom: 20px;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      border: 1px solid black;
      padding: 8px;
    }
    
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
<img src="<?= base_url();?>Assets/profile/img/logoYadika.png" style="width:75px; float:left; margin-bottom:2px" />
  <div class="header">
    <h1>SMK Yadika Soreang</h1>
    <p>Jl. Bojong Koneng Kampung Karang Anyar Rt.04/05 Desa Cingcin Kecamatan Soreang Kabupaten Bandung Jawa Barat</p>
  </div>
  
  <div class="content">
    <h2>Laporan PPDB - SMK Yadika Soreang</h2>
  </div>
  <div class="content">
    <h3>Jumlah Siswa per Jurusan:</h3>
    <table>
      <tr>
        <th>Jurusan</th>
        <th>Jumlah Siswa</th>
      </tr>
      <tr>
        <td>Mendaftar</td>
        <td><?php foreach($siswa_c as $a){
                echo $a['siswa']; 
            };?></td>
            </tr>

          <tr>
      <tr>
        <td>Diterima</td>
        <td><?php foreach($terima as $a){
                echo $a['terima']; 
            };?></td>
            </tr>

          <tr>
        <td>Rekayasa Perangkat Lunak</td>
        <td><?php foreach($RPL_c as $a){
                echo $a['RPL']; 
            };?></td>
      </tr>
      <tr>
        <td>Akuntansi</td>
        <td><?php foreach($AK_c as $a){
          echo $a['AK']; 
        };?></td>
      </tr>
      <tr>
        <td>Perhotelan</td>
        <td><?php foreach($AP_c as $a){
                echo $a['AP']; 
            };?></td>
      </tr>
    
            </table>
            </div>
            <h3>Data Siswa Rekayasa Perangkat Lunak:</h3>
  <table>
  <thead>
        <tr>
            <th>Nama</th>
            <th>Asal Sekolah</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>wawancara</th>
            <th>status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($RPL as $a):?>
            <tr>
            <td>
                <?= $a['Nama']; ?>
            </td>
            <td>
                <?= $a['asek']; ?>
            </td>

            <td>
                <?= $a['jenis_kelamin']; ?>
            </td>
            <td>
                <?= $a['jurusan']; ?>
            </td>
            <td>
           <?php if($a['wawancara']==0){?>

            <p style="color:red">belum</p>
            <?php }else{ ?>
            <p style="color:green">sudah</p>
            <?php } ?>
            <td>  
                    <p style="color:green">diterima</p>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
  </table>
            <h3>Data Siswa Akuntansi:</h3>
            <table>
  <thead>
        <tr>
            <th>Nama</th>
            <th>Asal Sekolah</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>status</th>
            <th>wawancara</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($RPL as $a):?>
            <tr>
            <td>
                <?= $a['Nama']; ?>
            </td>
            <td>
                <?= $a['asek']; ?>
            </td>

            <td>
                <?= $a['jenis_kelamin']; ?>
            </td>
            <td>
                <?= $a['jurusan']; ?>
            </td>
            <td>
           <?php if($a['wawancara']==0){?>

            <p style="color:red">belum</p>
            <?php }else{ ?>
            <p style="color:green">sudah</p>
            <?php } ?>
            <td>  
                    <p style="color:green">diterima</p>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
  </table>
           <h3>Data Siswa Perhotelan:</h3>
           <table>
  <thead>
        <tr>
            <th>Nama</th>
            <th>Asal Sekolah</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>wawancara</th>
            <th>status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($RPL as $a):?>
            <tr>
            <td>
                <?= $a['Nama']; ?>
            </td>
            <td>
                <?= $a['asek']; ?>
            </td>

            <td>
                <?= $a['jenis_kelamin']; ?>
            </td>
            <td>
                <?= $a['jurusan']; ?>
            </td>
            <td>
           <?php if($a['wawancara']==0){?>

            <p style="color:red">belum</p>
            <?php }else{ ?>
            <p style="color:green">sudah</p>
            <?php } ?>
            <td>  
                    <p style="color:green">diterima</p>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
  </table>
  <p>
    <div style="float:left">Panitia PPDB</div>
    <div style="text-align:right">Kepala Sekolah SMK Yadika Soreang</div>
  </p> 
  <p>
    <div style="float:left; margin-top:50px">....................</div>
    <div style="text-align:right; margin-right: 35px; margin-top:50px">Yetti Nuraini, S.Pd., Gr.</div>
  </p> 

            </body>
            </html>
