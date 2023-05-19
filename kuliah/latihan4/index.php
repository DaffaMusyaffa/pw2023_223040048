<?php
require('functions.php');
$name = 'Home';
// $students = [
//   [
//     "nama" => "Sandhika Galih",
//     "npm" => "043040023",
//     "email" => "sandhikagalih@unpas.ac.id"
//   ],
//   [
//     "nama" => "Doddy Ferdiansyah",
//     "npm" => "133040003",
//     "email" => "doddy@gmail.com"
//   ]
// ];

// koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040048') or die('KONEKSI KE DB GAGAL!');

// lakukan query ke tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}


// siapkan data $students
$students = $rows;
// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/index.view.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="row">1</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($students as $student) : ?>
        <tr>
          <th scope="row">1</th>
          <td><img src="img/daffa.jpeg" width="50" class="rounded-circle"></td>
          <td>223040048</td>
          <td>Muhammad Daffa Musyaffa</td>
          <td>daffamusyaffa10@gmail.com</td>
          <td>Teknik Informatika</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td><img src="img/daffa.jpeg" width="50" class="rounded-circle"></td>
          <td>223040052</td>
          <td>Angga Nugraha Sofyan</td>
          <td>angga@gmail.com</td>
          <td>Teknik Informatika</td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>

</html>