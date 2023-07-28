<?php

    require_once 'App/init.php';

    $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

    $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);
    
    
    $obj = new CetakInfoProduk();
    $obj->tambahProduk($produk1);
    $obj->tambahProduk($produk2);
    echo $obj->cetak();
?>