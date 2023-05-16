<?php 
require_once 'dbkoneksi.php';
?>

<?php
    $_id = $_GET['id'];
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
?>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    
    <thead>
        <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Nama Produk</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Stok</th>
            <th>Minimum Stok</th>
            <th>Jenis Produk</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['kode']?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['harga_jual']?></td>
            <td><?=$row['harga_beli']?></td>
            <td><?=$row['stok']?></td>
            <td><?=$row['min_stok']?></td>
            <td><?=$row['jenis_produk_id']?></td>
        </tr>
    </tbody>
</table>