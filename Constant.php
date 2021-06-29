<?php

// define('NAMA', "RIKAN ALARABI");

// const UMUR = 24;

// echo NAMA;
// echo "<br>";
// echo UMUR;


// class coba
// {
//     // define('NAMA', 'RIKAN ALARABI');
//     const NAMA = "RIKAN AL ARABI";
// }

// echo coba::NAMA;


// echo __LINE__;
// echo "<br>";
// echo __FILE__;


// function test()
// {
//     return __FUNCTION__;
// }

// echo test();

class Test
{
    public $kelas = __CLASS__;
}

$obj = new Test;
echo $obj->kelas;
