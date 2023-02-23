<?php
$nim = 48;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 1b</title>
</head>

<body>
  <p>Aku adalah angka <b><?php echo $nim ?></b><br>
    Jika aku dikali 5, maka aku sekarang menjadi <b> <?php echo $nim * 5 ?></b><br>
    Jika aku dibagi 2, maka aku sekarang menjadi<b> <?php echo 240 / 2 ?></b><br>
    Jika aku ditambah 75, maka aku sekarang menjadi<b> <?php echo 120 + 75 ?></b><br>
    Jika aku dikurang 20, maka aku sekarang menjadi<b> <?php echo 195 - 20 ?></b><br>
  </p>
  <?php
  echo "Aku adalah angka <b>$nim</b> <br>";
  echo "Jika aku dikali 5, maka aku sekarang menjadi <b> " . ($nim *= 5) . "</b><br>";
  echo "Jika aku dibagi 2, maka aku sekarang menjadi <b> " . ($nim /= 2) . "</b><br>";
  echo "Jika aku ditambah 75, maka aku sekarang menjadi <b> " . ($nim += 75) . "</b><br>";
  echo "Jika aku dikurang 20, maka aku sekarang menjadi <b> " . ($nim -= 20) . "</b><br>";
  ?>
</body>

</html>