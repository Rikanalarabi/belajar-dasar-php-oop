<?php

class Produk
{
    //property
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    //constraktor
    public function __construct($judul = "", $penulis = "", $penerbit = "", $harga = "")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    //method
    public function getLebel()
    {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
}

//objeck
$produk3 = new Produk("Naruto shippuden", "Masashi Kisamoto", "Toho", 30000);
// $produk3->judul = "Naruto shippuden";
// $produk3->penulis = "Masashi Kisamoto";
// $produk3->penerbit = "Toho";
// $produk3->harga = 30000;
// var_dump($produk3);
// echo "Anime : $produk3->judul, $produk3->penulis, $produk3->penerbit, $produk3->harga";

$produk4 = new Produk("Harvesmoon Back To Nature", "Redaldy", "capcom", 10000);
// $produk4->judul = ;
// $produk4->penulis = ;
// $produk4->penerbit = ;
// $produk4->harga = ;


echo "Anime : " . $produk3->getLebel();
echo "<hr>";
echo "Game : " . $produk4->getLebel();
