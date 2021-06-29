<?php

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
