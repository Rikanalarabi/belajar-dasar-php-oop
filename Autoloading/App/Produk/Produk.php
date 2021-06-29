<?php

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
