<?php 
require_once 'dbkoneksi.php';
?>

<?php
    $_id = $_GET['id'];
    $sql = "SELECT * FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
?>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    
    <thead>
        <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>ID Kartu</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['kode']?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['jk']?></td>
            <td><?=$row['tmp_lahir']?></td>
            <td><?=$row['tgl_lahir']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['kartu_id']?></td>
        </tr>
    </tbody>
</table>