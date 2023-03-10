<?php
//ARRAY
//array adalah variabel yang bisa menampung banyak nilai

//membuat array
$hari = array('Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Daffa', 10, false];
$binatang = ['🐒', '🐑', '🐇', '🐉', '🦖'];



// Mencetak Array
var_dump($hari);
print_r($bulan);
var_dump($myArray);
echo $binatang[4];

echo "<hr>";

// Manipulasi Array

// Menambah elemen di akhir array
$bulan[] = 'April';
$bulan[] = 'Mei';
print_r($bulan);
echo "<hr>";
array_push($bulan, 'Juni', 'Juli', 'Agustus');
print_r($bulan);
echo "<hr>";

// Menambah elemen di awal array
array_unshift($binatang, '🐉', '🦖');
print_r($binatang);
echo "<hr>";

// Menghapus elemen di akhir array
array_pop($hari);
print_r($hari);
echo "<hr>";
