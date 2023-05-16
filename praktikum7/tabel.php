<?php
    require_once 'bmi.php';

    $data = [
        ["nama" => "Wawa",
            "bb" => 46,
            "tb" => 160,
            "umur" => 20,
            "jk" => "pr",
            "bmi" => "18.5",
            "ket" => "Normal (Ideal)"]
    ];

    $bmi2 = [
        "nama" => $_POST['nama'],
        "bb" => $_POST['bb'],
        "tb" => $_POST['tb'],
        "umur" => $_POST['umur'],
        "jk" => $_POST['jk'],
        "bmi" => $bmi1->hitungBMI(),
        "ket" => $bmi1->ketBMI()
    ];
    
    array_push($data, $bmi2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
</head>
<body>
    <a href="#"><h4 class="mt-3 text-center"> TABEL DATA BMI </h4></a>
    <hr>
    <table class="table" border="1">
  <thead class="thead-light">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA</th>
      <th scope="col">BERAT BADAN</th>
      <th scope="col">TINGGI BADAN</th>
      <th scope="col">UMUR</th>
      <th scope="col">JENIS KELAMIN</th>
      <th scope="col">BMI</th>
      <th scope="col">KETERANGAN</th>
    </tr>
  </thead>
        <tbody>

            <?php
                $number = 1;
                foreach($data as $n){
            ?>

            <tr>
                <td><?= $number ?></td>
                <td><?=$n['nama']?></td>
                <td><?=$n['bb']?></td>
                <td><?=$n['tb']?></td>
                <td><?=$n['umur']?></td>
                <td><?=$n['jk']?></td>
                <td><?=$n['bmi']?></td>
                <td><?=$n['ket']?></td>          
            </tr>

            <?php
                $number++;
                }
            ?>

        </tbody>
    </table>
</body>
</html>