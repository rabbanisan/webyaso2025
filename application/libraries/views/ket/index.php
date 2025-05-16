<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url();?>Assets/img/logo/logo yadika.png">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  
</head>
<body>
<table id="datatablesSimple" class="table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Asal Sekolah</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Jurusan</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($siswa as $a):?>
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
                <?= $a['agama']; ?>
            </td>
            <td>
                <?php if($a['jurusan']=='AP'){
                    echo "Perhotelan";
                }else{?>
                <?= $a['jurusan'];} ?>
            </td>
            <td>
                <?php
            if($a['ket']==0){
                    ?>
                <p style="color:grey">Proses</p>
                <?php }else if($a['ket']==1){?>
                    <p style="color:green">diterima</p>
                    <?php }else{?>
                        <p style="color:red">tidak diterima</p>
                    <?php } ?>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>Assets/js/datatables-simple-demo.js"></script>
</body>
</html>