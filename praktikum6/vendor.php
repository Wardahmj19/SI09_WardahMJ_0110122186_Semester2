<?php
    require_once 'dbkoneksi.php';
    
    $sql = "SELECT * FROM vendor";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if(isset($_POST['submit'])){
        $nomor = $_POST['nomor'];
        $nama = $_POST['nama'];
        $kota = $_POST['kota'];
        $kontak = $_POST['kontak'];

        $sql = "INSERT INTO vendor (nomor, nama, kota, kontak)
                VALUE (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nomor, $nama, $kota, $kontak]);

        header("Location: vendor.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Vendor</title>
</head>
<body>
    <a href="formVendor.php">TAMBAH VENDOR</a>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMOR</th>
                <th>NAMA</th>
                <th>KOTA</th>
                <th>KONTAK</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $number = 1;
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)):
            ?>

            <tr>
                <td><?= $number ?></td>
                <td><?=$row['nomor']?></td>
                <td><?=$row['nama']?></td>
                <td><?=$row['kota']?></td>
                <td><?=$row['kontak']?></td>
                <td>
                    <a href="editVendor.php?id=<?=$row['id']?>">EDIT</a>|
                    <a class="btn btn-primary" href="deleteVendor.php?id=<?=$row['id']?>"
                    onclick="if(!confirm('Anda Yakin Hapus Data Vendor <?=$row['nama']?>?')) {return false}"
                    >DELETE</a>
                </td>
            </tr>

            <?php
                $number++;
                endwhile;
            ?>

        </tbody>
    </table>
</body>
</html>