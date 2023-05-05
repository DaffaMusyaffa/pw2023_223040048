<?php
//array Associative
//array yang indexnya adalah string yang kita buat sendiri
$mahasiswa = [
  [
    'nama' => 'Daffa',
    'binatang' => '🐉',
    'makanan' => ['🍟', '🌭', '🥗']
  ],

  [
    'nama' => 'Faki',
    'binatang' => '🐈',
    'makanan' => ['🍔']
  ],

  [
    'nama' => 'Hedi',
    'binatang' => '🐓',
    'makanan' => ['🍜', '🍥']
  ],

  [
    'nama' => 'Rifki',
    'binatang' => '🐨',
    'makanan' => ['🍚', '🍛']
  ],

  [
    'nama' => 'Danu',
    'binatang' => '🐈‍⬛',
    'makanan' => ['🍞', '🍣', '🥪']
  ]
];


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 2</title>
</head>

<body>

  <h2>Daftar Mahasiswa</h2>
  <?php foreach ($mahasiswa as $i) { ?>
    <ul>
      <li>Nama : <?= $i['nama']; ?></li>
      <li>Makanan Favorit :
        <?php foreach ($i['makanan'] as $mkn) {
          echo $mkn;
        } ?>
      </li>
      <li>Binatang Peliharaan <?= $i['binatang']; ?></li>
    </ul>
  <?php } ?>





</body>

</html>