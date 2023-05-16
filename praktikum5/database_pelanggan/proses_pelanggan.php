<?php 
require_once 'dbkoneksi.php';
?>

<?php 
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_jk = $_POST['jk'];
   $_tmp_lahir = $_POST['tmp_lahir'];
   $_tgl_lahir = $_POST['tgl_lahir'];
   $_email = $_POST['email'];
   $_kartu = $_POST['kartu'];

   $_proses = $_POST['proses'];

   $ar_data[] = $_kode; 
   $ar_data[] = $_nama; 
   $ar_data[] = $_jk;
   $ar_data[] = $_tmp_lahir;
   $ar_data[] = $_tgl_lahir;
   $ar_data[] = $_email;
   $ar_data[] = $_kartu;

   if($_proses == "Simpan"){
    $sql = "INSERT INTO pelanggan (kode, nama, jk, tmp_lahir, tgl_lahir, 
    email, kartu_id) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[] = $_POST['idedit'];
    $sql = "UPDATE pelanggan SET kode=?, nama=?, jk=?, tmp_lahir=?,
    tgl_lahir=?, email=?, kartu_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_pelanggan.php');
?>