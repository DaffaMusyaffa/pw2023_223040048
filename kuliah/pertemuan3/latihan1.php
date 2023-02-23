<?php  
echo "Mulai. <br>";
// 1. inisialisasi / nilai awal
// 2. kondisi terminasi /nkapan pengulangannya berhenti
// 3. increment / decrement
$nilai_awal = 1; // inisialisasi
while ($nilai_awal < 5) { // kondisi terminasi
echo "Hello World <br>";
$nilai_awal = $nilai_awal + 1;
}
echo "Selesai. <br>";



echo "Mulai. <br>";
for ($nilai_awal = 1; $nilai_awal <= 5; $nilai_awal = $nilai_awal * 2) {
  echo "Hello World $nilai_awal x. <br>";
}
echo "Selesai. <br>";
