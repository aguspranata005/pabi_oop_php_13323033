<!--
    Nama        : Agus Pranata Marpaung
    NIM         : 13323033
    Nama Program: static.php
-->

<?php

// class ContohStatic {
//     public static $angka = 1;

//     public static function halo() {
//         return "Halo." . self::$angka++. " kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . " kali.";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();