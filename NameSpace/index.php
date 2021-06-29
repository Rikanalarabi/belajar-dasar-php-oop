<?php

require_once 'App/Init.php';

// $produk1 = new Anime("Naruto shippuden", "Masashi Kisamoto", "Toho", 30000, 500);
// $produk2 = new Game("Harvesmoon Back To Nature", "Redaldy", "capcom", 10000, 30);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<hr>";
new ProdukUser();
