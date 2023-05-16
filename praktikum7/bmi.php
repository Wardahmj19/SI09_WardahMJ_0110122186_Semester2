<?php
    class bmi {
        public $nama, 
               $bb,
               $tb,
               $umur,
               $jk;
    
        public function __construct($nama, $bb, $tb, $umur, $jk){
            $this->nama = $nama;
            $this->bb = $bb;
            $this->tb = $tb;
            $this->umur = $umur;
            $this->jk = $jk;
        }
    
        public function hitungBMI(){
            $this->tb = $_POST['tb']/100; 
            $tb_rumus = $this->tb * $this->tb;
            $hasil_tb = number_format($tb_rumus, 2, '.', '');
            $hasil = $_POST['bb'] / $hasil_tb;
            $bmi = number_format($hasil, 1, '.', '');
            return $bmi;
        }
            
        public function ketBMI(){
            $bmi = $this->hitungBMI();
            if ($bmi <= 18.5) {
                return "Kekurangan Berat Badan";
                
            }else if ($bmi > 18.5 AND $bmi <= 24.9 ) {
                return "Normal (Ideal)";
                
            }else if ($bmi > 25.0 AND $bmi <= 29.9) {
                return "Kelebihan Berat Badan";
                
            }else{
                return "Obesitas";
    
            }
        }  
    }
    
    $bmi1 = new bmi($_POST['nama'], $_POST['bb'], $_POST['tb'], $_POST['umur'], $_POST['jk']);
    
    echo "<hr>";
    echo "OUTPUT HASIL DATA BMI";
    echo "<br>";
    echo "<br>";
    echo "Nama : $bmi1->nama";
    echo "<br>";
    echo "Berat Badan : $bmi1->bb";
    echo "<br>";
    echo "Tinggi Badan : $bmi1->tb";
    echo "<br>";
    echo "Umur : $bmi1->umur";
    echo "<br>";
    echo "Jenis Kelamin : $bmi1->jk";
    echo "<br>";
    echo "BMI : " . $bmi1->hitungBMI();
    echo "<br>";
    echo "Hasil : " . $bmi1->ketBMI();
    echo "<hr>";

?>