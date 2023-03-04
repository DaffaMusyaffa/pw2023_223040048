<?php

echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungluaslingkaran($r)
{
  //menghitung luas lingkaran rumusnya pi x r x r
  $luas = 3.14 * $r * $r;
  return $luas . " cm<sup>2</sup>";
  //menambah <sup> biar angkanya jadi naik keatas kecil
}
echo "Jari-jari = 10 cm. <br>";
echo "Luas Lingkaran = " . hitungluaslingkaran(10) . " <br>";

echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilinglingkaran($r)
{
  //menghitung keliling lingkaran rumusnya 2 x pi x r
  $keliling = 2 * 3.14 * $r;
  return $keliling . " cm";
  //menambahkan string cm di return agar mempunyai output dengan cm diakhirnya
}

echo "Jari-jari = 20 cm. <br>";
echo "Luas Lingkaran = " . hitungluaslingkaran(20) . "<br>";

echo "<hr>";
