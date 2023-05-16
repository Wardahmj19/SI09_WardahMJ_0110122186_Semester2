<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-12">
                <h3 class="text-center">FORM NILAI MAHASISWA</h3>
                <hr>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
            <form method="POST" action="">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">DDP</option>
        <option value="BasDat">Basis Data</option>
        <option value="PW">Pem Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="tugas" name="tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
            </div>
        </div>
    </div>
    <hr>

    <?php if(isset($_POST['submit']) && isset($_POST['matkul'])) : ?>

        Nama Mahasiswa : <?= $_POST['nama'] ?>
        <br>
        Mata Kuliah : <?= $_POST['matkul'] ?>
        <br>
        Nilai UTS : <?= $_POST['uts'] ?> 
        <br>
        Nilai UAS : <?= $_POST['uas'] ?> 
        <br>
        Nilai Tugas : <?= $_POST['tugas'] ?>   

    <?php
        $nilai_akhir = ($_POST['uts'] + $_POST['uas'] + $_POST['tugas']) / 3;

        if($nilai_akhir >= 0 && $nilai_akhir <= 35){
            echo '<br> Grade : E';
            echo '<br> Predikat : Kurang';  
        }elseif($nilai_akhir >= 36 && $nilai_akhir <= 55){
            echo '<br> Grade : D';
            echo '<br> Predikat : Sangat Kurang';  
        }elseif($nilai_akhir >= 56 && $nilai_akhir <= 69){
            echo '<br> Grade : C';
            echo '<br> Predikat : Cukup'; 
        }elseif($nilai_akhir >= 70 && $nilai_akhir <= 84){
            echo '<br> Grade : B';
            echo '<br> Predikat : Memuaskan'; 
        }elseif($nilai_akhir >= 85 && $nilai_akhir <= 100){
            echo '<br> Grade : A';
            echo '<br> Predikat : Sangat Memuaskan'; 
        }else{
            echo '<br> Grade : I';
            echo '<br> Predikat : Tidak Ada'; 
        }
    ?>

    <?php endif ?>

</body>
</html>