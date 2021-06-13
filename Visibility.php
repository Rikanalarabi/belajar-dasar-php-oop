<?php


class Produk
{
    //property
    public $judul,
        $penulis,
        $penerbit,
        $discon = 0;

    private $harga;

    //constraktor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setDiscon( $discon)
    {
        $this->discon = $discon;
    }
    
    public function getHraga()
    {
        return $this->harga - ($this->harga * $this->discon / 100);
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
    public $jmlepisode;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlepisode = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlepisode = $jmlepisode;
    }

    public function getInfoProduk()
    {
        $str = "Anime : " . parent::getInfoProduk() . " - {$this->jmlepisode} Episode.";
        return $str;
    }
}

class Game extends Produk
{
    public $waktumain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktumain = $waktumain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktumain} Jam.";
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
$produk1 = new Anime("Naruto shippuden", "Masashi Kisamoto", "Toho", 30000, 500);
$produk2 = new Game("Harvesmoon Back To Nature", "Redaldy", "capcom", 10000, 30);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiscon(50);
echo $produk2->getHraga();
