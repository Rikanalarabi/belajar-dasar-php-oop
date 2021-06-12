<?php


class Produk
{
    //property
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlepisode,
        $waktumain;

    //constraktor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlepisode = 0, $waktumain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlepisode = $jmlepisode;
        $this->waktumain = $waktumain;
    }


    //method
    public function getLebel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLebel()}, (Rp. {$this->harga})";

        // if ($this->tipe == "Anime") {
        //     $str .= " - {$this->jmlepisode} Episode.";
        // } else if ($this->tipe == "Game") {
        //     $str .= " ~ {$this->waktumain} jam.";
        // }

        return $str;
    }
}

// Inheritce
class Anime extends Produk
{
    public function getInfoProduk()
    {
        $str = "Anime : {$this->judul} | {$this->getLebel()}, (Rp. {$this->harga}) - {$this->jmlepisode} Episode.";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLebel()}, (Rp. {$this->harga}) ~ {$this->waktumain} Jam.";
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
$produk1 = new Anime("Naruto shippuden", "Masashi Kisamoto", "Toho", 30000, 500, 0);
$produk2 = new Game("Harvesmoon Back To Nature", "Redaldy", "capcom", 10000, 0, 30);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
