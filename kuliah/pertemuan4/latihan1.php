<?php
// Mengecek apakah sebuah Bilangan itu GANJIL / GENAP

$angka = 10;
function cek_ganjil_genap($angka)
{
  //@param mixed angka
  //@return string
  // jika $angka dibagi 2, sisanya 1 maka GANJIL
  if ($angka % 2 == 1) {
    return "$angka adalah bilangan GANJIL!";
  } else { // Selain dari itu
    return "$angka adalah bilangan GENAP!";
  }
}
//echo cek_ganjil_genap(10);
//echo "<br>";
//echo cek_ganjil_genap(5);
//echo "<br>";
echo cek_ganjil_genap((10));
