<?php
$binatang = ['🐒', '🐑', '🐇', '🐉', '🦖'];
$warna = ['Coklat', 'Abu abu', 'Putih', 'Hijau Merah', 'Hijau']

// mengurutkan array
// Mencetak array untuk user
// sort() untuk awal akhir, rsort() akhir awal

//mencetak array untuk user
//for, foreach

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=<h2> </h2>, initial-scale=1.0">
  <title>Pertenakan ku</title>
</head>

<body>
  <h2>Daftar Binatang</h2>
  <ul> <?php for ($i = 0; $i < count($binatang); $i++) { ?>
      <li> <?= $binatang[$i]; ?></li>
    <?php } ?>
  </ul>

  <h2> Daftar warna</h2>
  <ul> <?php for ($i = 0; $i < count($warna); $i++) { ?>
      <li> <?= $warna[$i]; ?></li>
    <?php } ?>
  </ul>
  <hr>

  <h2>Daftar Binatang</h2>
  <ol>
    <?php foreach ($binatang as $b) { ?>
      <li><?= $b ?></li>
    <?php } ?>
  </ol>

  <h2>Daftar warna</h2>
  <ol>
    <?php foreach ($warna as $w) { ?>
      <li><?= $w ?></li>
    <?php } ?>
  </ol>

</body>

</html>

// mengurutkan array
short array warna {}
, $warna = <i></i>