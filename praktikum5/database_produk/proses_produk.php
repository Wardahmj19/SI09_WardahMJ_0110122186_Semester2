<?php 
require_once 'dbkoneksi.php';
?>

<?php 
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_harga = $_POST['harga_beli'];
   $_stok = $_POST['stok'];
   $_minstok = $_POST['min_stok'];
   $_jenis = $_POST['jenis'];

   $_proses = $_POST['proses'];

   $ar_data[] = $_kode;
   $ar_data[] = $_nama;
   $ar_data[] = $_harga;
   $ar_data[] = 1.2 * $_harga;
   $ar_data[] = $_stok;
   $ar_data[] = $_minstok;
   $ar_data[] = $_jenis;

   if($_proses == "Simpan"){
    $sql = "INSERT INTO produk (kode, nama, harga_beli, harga_jual, stok, 
    min_stok, jenis_produk_id) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]= $_POST['idedit'];
    $sql = "UPDATE produk SET kode=?, nama=?, harga_beli=?, harga_jual=?, 
    stok=?, min_stok=?, jenis_produk_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_produk.php');
?>