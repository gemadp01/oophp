<?php
    define('NAMA', 'Gema Dodi Pranata');

    class Coba {
        const NAMA = 'Gema Dodi Pranata';
    }

    $obj = new Coba;
    $obj->NAMA;
?>

8 Magic constant yang sudah dimiliki oleh PHP
__LINE__: Mendapatkan nomor baris saat ini dari file yang sedang dieksekusi.

__FILE__: Mendapatkan jalur lengkap dan nama file dari file yang sedang dieksekusi.

__DIR__: Mendapatkan direktori dari file yang sedang dieksekusi.

__FUNCTION__: Mendapatkan nama fungsi dari fungsi yang sedang dieksekusi.

__CLASS__: Mendapatkan nama kelas dari kelas yang sedang dieksekusi.

__TRAIT__: Mendapatkan nama trait dari trait yang sedang dieksekusi.

__METHOD__: Mendapatkan nama metode dari metode yang sedang dieksekusi.

__NAMESPACE__: Mendapatkan namespace dari file yang sedang dieksekusi.