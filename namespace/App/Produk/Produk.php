<?php
    abstract class Produk
    {
        protected $judul,
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
    
        abstract public function getInfo();
    
        
    
    }
?>