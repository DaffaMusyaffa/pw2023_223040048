<?php
$mahasiswa = [
  [
    "nama" => "Muhammad Daffa Musyaffa",
    "nrp" => "223040048",
    "email" => "DAFFA.223040048@mail.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "daffa.jpeg",
  ],
  [
    "nama" => "Muhamad Marsa Nur Jaman ",
    "nrp" => "223040083",
    "email" => "MARSA.223040083@mail.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "caca.jpeg",
  ],
  [
    "nama" => "Kaka Praditha",
    "nrp" => "223040087",
    "email" => "KAKA.223040087@mail.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "kaka.jpeg",
  ],
  [
    "nama" => "Moch Zuhdi Maulana Nabilah",
    "nrp" => "223040101",
    "email" => "ZUHDI.223040101@mail.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "zuhdi.jpeg",
  ],
  [
    "nama" => "Rivaldy Novyan Dwi Putra",
    "nrp" => "223040110",
    "email" => "RIVALDY.223040110@mail.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "rivaldy.jpeg",
  ],
  [
    "nama" => "Muhammad Rifki Ramadhani",
    "nrp" => "223040046",
    "email" => "RIFKI.223040046@mail.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "rifki.jpeg",
  ],
  [
    "nama" => "Dzikri Setiawan",
    "nrp" => "223040072",
    "email" => "DZIKRI.223040072@mail.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "dzikri.jpeg",
  ],
  [
    "nama" => "Muhammad Alfath Septian",
    "nrp" => "223040014",
    "email" => "ALFATH.223040014@mail.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "alfath.jpeg",
  ],
  [
    "nama" => "Muhammad Daffa Riyadi",
    "nrp" => "2230400120",
    "email" => "DAFFA.223040120@mail.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "daffarb.jpeg",
  ],
  [
    "nama" => "Angga Nugraha Sofyan",
    "nrp" => "223040052",
    "email" => "ANGGA.223040052@mail.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "angga.jpeg",
  ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 5a</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>

  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>
        <img src="img/<?= $mhs["gambar"]; ?>" width="120" height="135">
      </li>
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NRP : <?= $mhs["nrp"]; ?></li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>