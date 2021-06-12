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
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLebel()}, {$produk->getLebel()}, (Rp. {$produk->harga})";
        return $str;
    }
}

//objeck
$produk1 = new Produk("Naruto shippuden", "Masashi Kisamoto", "Toho", 30000);
$produk2 = new Produk("Harvesmoon Back To Nature", "Redaldy", "capcom", 10000);



echo "Anime : " . $produk1->getLebel();
echo "<hr>";
echo "Game : " . $produk2->getLebel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
