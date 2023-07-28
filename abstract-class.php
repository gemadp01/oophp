<?php
// membuat produk penjualan
// komik dan game

abstract class Produk
{
    private $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon;


    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
    }
    
    public function setJudul($judul){
        $this->judul = $judul;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function setPenerbit($penebit) {
        $this->penerbit = $penerbit;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfoProduk();

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

}

// Class Komik yang merupakan child dari class Produk (parent)
class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {

        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

// Class Game yang merupakan child dari class Produk (parent)
class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfo() . " - {$this->waktuMain} Jam.";
        return $str;
    }

    
}

// Class CetakInfoProduk merupakan kelas untuk mencetak 
class CetakInfoProduk
{
    public $daftarProduk = [];
    public function tambahProduk(Produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $str = "DAFTAR PRODUK :";
        foreach ($this->daftarProduk as $p) {
            $str .= "<br> - {$p->getInfoProduk()} ";
        }
        return $str;
    }
}




$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);


$obj = new CetakInfoProduk();
$obj->tambahProduk($produk1);
$obj->tambahProduk($produk2);
echo $obj->cetak();

