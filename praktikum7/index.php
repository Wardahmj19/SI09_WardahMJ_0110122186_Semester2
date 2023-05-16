<?php

class Tes{

}
$a = new Tes();

class mobil{
    public $nama,
            $merk,
            $warna;
    
    public function tambahKecepatan(){

    }

    public function kurangiKecepatan(){

    }
}

class produk {
    public $nama = 'ini nama',
           $jenis = 'ini jenis',
           $harga = 9999;

    public function __construct($nama, $jenis, $harga){
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->harga = $harga;
    }

    public function printHarga(){
        return $this->harga;
    }
}

// $produk1 = new produk();
// $produk1->nama = 'Hoodie';
// $produk1->jenis = 'Jaket';

$produk2 = new produk("Baju Hitam Polos", "Kaos", 14000);


echo "Produk 2 : $produk2->nama, $produk2->jenis";
echo "<br>";
echo "Harga : " . $produk2->printHarga();

?>