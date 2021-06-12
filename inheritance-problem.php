<?php

class Produk
{
    //property
    protected $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlepisode,
        $waktumain,
        $tipe;

    //constraktor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlepisode = 0, $waktumain = 0, $tipe = "")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlepisode = $jmlepisode;
        $this->waktumain = $waktumain;
        $this->tipe = $tipe;
    }


    //method
    public function getLebel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLebel()}, (Rp. {$this->harga})";
        //if tidak ke deklarasi
        if ($this->tipe == "Anime") {
            $str .= "{$this->tipe} - {$this->jmlepisode} Episode.";
        } else if ($this->tipe == "Game") {
            $str .= "{$this->tipe} ~ {$this->waktumain} jam.";
        }

        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLebel()} (Rp. {$produk->harga})";
        return $str;
    }
}

//objeck
$produk1 = new Produk("Naruto shippuden", "Masashi Kisamoto", "Toho", 30000, 500, 0, "Anime");
$produk2 = new Produk("Harvesmoon Back To Nature", "Redaldy", "capcom", 10000, 0, 30, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
