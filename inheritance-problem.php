<?php
// membuat produk penjualan
// komik dan game
class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe;


    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        // if ($this->jmlHalaman == 0) {
        //     $str .= " - {$this->waktuMain} Jam.";
        // } else {
        //     $str .= " - {$this->jmlHalaman} Halaman.";
        // }
        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " - {$this->waktuMain} Jam.";
        }
        return $str;
    }

    public function getInfoProduk(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    }
}

class CetakInfoProduk
{
    public function cetak($produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

function cetakProduk(Produk $produk)
{
    return "{$produk->judul}";
}



$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");

$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
