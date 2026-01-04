<?php 
// Komentar satu baris dalam PHP
// echo "Hello, World!";

// ======================
// Variabel
// ======================
// $nama = "Ganes Gemi Putra";
// $nim = "2311104075";
// $hobi = "Ngoding";

// echo "Nama : ".$nama."<br>";
// echo "NIM : ".$nim."<br>";
// echo "Hobi : ".$hobi;

// ======================
// Konstanta
// ======================
// define("NAMA", "Ganes Gemi Putra");
// define("NIM", "2311104075");
// define("ASAL", "Brebes");

// echo "Nama : ".NAMA."<br>";
// echo "NIM : ".NIM."<br>";
// echo "Asal : ".ASAL;

// ======================
// Struktur Kondisi
// ======================

// $nilai = 90;
// if ($nilai >= 50) {
//     echo "Nilai Anda adalah ".$nilai.". Selamat, Anda lulus";
// } else {
//     echo "Nilai Anda adalah ".$nilai.". Maaf, Anda tidak lulus";
// }

// ======================
// Looping
// ======================

// for ($i = 1; $i <= 10; $i++) {
//     echo $i . " ";
// }

// ======================
// Function
// ======================

// function luasSegitiga($alas, $tinggi) {
//     return 0.5 * $alas * $tinggi;
// }
// echo luasSegitiga(10, 5);

// ======================
// Array Associative
// ======================

$arrAlamat = [
    "Ganes Gemi Putra" => "Brebes",
    "Dhiva" => "Bandung",
    "Ilham" => "Medan",
    "Oku" => "Hongkong"
];

echo $arrAlamat["Ganes Gemi Putra"] . "<br>";
echo $arrAlamat["Oku"] . "<br>";

$arrNim = [];
$arrNim["Ganes Gemi Putra"] = "2311104075";
$arrNim["Dhiva"] = "11011101";
$arrNim["Ilham"] = "11011309";
$arrNim["Oku"] = "11014765";

echo $arrNim["Ganes Gemi Putra"] . "<br>";
echo $arrNim["Ilham"] . "<br>";
?>
