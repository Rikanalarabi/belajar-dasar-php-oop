<?php

interface infoProduk
{
    public function getInfoProduk();
}

abstract class Produk
{
    //property
    protected $judul,
        $penulis,
        $penerbit,
        $discon = 0,
        $harga;

    //constraktor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    //megubah judul
    public function setJudul($judul)
    {
        $this->judul = $judul;
    }
    //menampilkan judul
    public function getJudul()
    {
        return $this->judul;
    }
    //mengubah penulis
    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    //menampilkan penulis
    public function getPenulis()
    {
        $this->penulis;
    }

    public function setDiscon($discon)
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

    // abstract public function getInfoProduk();

    abstract public function getInfo();
}

// Inheritce
class Anime extends Produk implements infoProduk
{
    public $jmlepisode;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlepisode = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlepisode = $jmlepisode;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLebel()}, (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Anime : " . $this->getInfo() . " - {$this->jmlepisode} Episode.";
        return $str;
    }
}

class Game extends Produk implements infoProduk
{
    public $waktumain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktumain = $waktumain;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLebel()}, (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktumain} Jam.";
        return $str;
    }
}


class CetakInfoProduk
{
    public $daftarProduk = array();

    public function tambahProduk(Produk $prodek)
    {
        $this->daftarProduk[] = $prodek;
    }

    public function cetak()
    {
        $str = "DAFTRA PRODUK : <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

//objeck
$produk1 = new Anime("Naruto shippuden", "Masashi Kisamoto", "Toho", 30000, 500);
$produk2 = new Game("Harvesmoon Back To Nature", "Redaldy", "capcom", 10000, 30);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
