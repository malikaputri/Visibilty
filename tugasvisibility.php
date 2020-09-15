<?php
class resto{
  public $namaMakanan;
         protected $potongan;
         private $harga;

  public function getCetak(){
    return "(Rp $this->harga)";
  }
  public function __construct($namaMakanan="nama makanan", $harga=0){
    $this->namaMakanan = $namaMakanan;
    $this->harga=$harga;
  }

    public function cetakInfo(){
        $str="{$this->namaMakanan}, {$this->getCetak()}";
        return $str;
    }
    public function setPotongan($potongan){
      $this ->potongan=$potongan;
    }
    public function getHarga(){
       return $this->harga = ($this->harga*$this->potongan/100 ); 
    }

}

class indoor extends resto{
  public $ukuranMeja, $kapasitasKursi;

  public function __construct ($namaMakanan="nama makanan", $harga=0, $ukuranMeja="ukuran meja", $kapasitasKursi="kapasitas kursi"){
    parent::__construct($namaMakanan,$harga);
    $this->ukuranMeja = $ukuranMeja;
    $this->kapasitasKursi = $kapasitasKursi;
  }

    public function cetakInfo(){
        $str="indoor: " .parent::getCetak(). " | Ukuran Meja : {$this->ukuranMeja}   | Kapasitas Kursi : {$this->kapasitasKursi}";
        return $str;
    }
}

class outdoor extends resto{
  public $luasHalaman, $kapasitasTenda;

  public function __construct ($namaMakanan="nama barang",$harga=0, $luasHalaman="luas halaman ", $kapasitasTenda="kapasitas tenda"){
    parent::__construct($namaMakanan, $harga);
    $this->luasHalaman = $luasHalaman;
    $this->kapasitasTenda= $kapasitasTenda;
  }

    public function cetakInfo(){
        $str="outdoor : " .parent::getCetak(). " | Luas Halaman : {$this->luasHalaman} | Kapasitas Tenda : {$this->kapasitasTenda}";
        return $str;
    }
}

$resto1 = new indoor("nasi timbel",500000,"20 meter","10 orang");
$resto2 = new outdoor("pizza",1000000,"120hektar" ,"50 orang");


echo $resto1->cetakInfo();
echo "<br>";
echo $resto2->cetakInfo();
echo "<br>";
echo "<hr>";
$resto2->setPotongan(25);
echo $resto2->getHarga();
?>