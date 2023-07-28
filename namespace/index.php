<?php

    require_once 'App/init.php';

    // $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

    // $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);
    
    
    // $obj = new CetakInfoProduk();
    // $obj->tambahProduk($produk1);
    // $obj->tambahProduk($produk2);
    // echo $obj->cetak();

    use App\Produk\User as ProdukUser;
    use App\Service\User as ServiceUser;

    new ProdukUser();
    echo "<br>";
    new ServiceUser();
    

?>