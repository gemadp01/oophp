<?php
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
?>