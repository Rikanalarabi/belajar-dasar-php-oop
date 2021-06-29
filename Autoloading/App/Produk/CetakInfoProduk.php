<?php

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
