<?php

class Produk
{
    //property
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    //method
    public function getLebel()
    {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
}

// $produk1 = new produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "Harvesmoon Back To Nature";
// $produk2->tambahproperty = "gamenya seru";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto shippuden";
$produk3->penulis = "Masashi Kisamoto";
$produk3->penerbit = "Toho";
$produk3->harga = 30000;
// var_dump($produk3);
// echo "Anime : $produk3->judul, $produk3->penulis, $produk3->penerbit, $produk3->harga";

$produk4 = new Produk();
$produk4->judul = "Harvesmoon Back To Nature";
$produk4->penulis = "Redaldy";
$produk4->penerbit = "capcom";
$produk4->harga = 10000;


echo "Anime : " . $produk3->getLebel();
echo "<hr>";
echo "Game : " . $produk4->getLebel();
