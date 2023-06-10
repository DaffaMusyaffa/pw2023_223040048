<?php
require "koneksi.php";
$queryProduk = mysqli_query($conn, "SELECT id, nama, harga, foto, detail FROM produk LIMIT 6");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Susdaf Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php require "navbar.php"; ?>

  <!-- background -->
  <div class="container-fluid background d-flex align-items-center">
    <div class="container text-center text-white">
      <h1>Susdaf Fashion</h1>
      <h3>Mau Cari Apa?</h3>
      <div class="col-md-8 offset-md-2">
        <form method="get" action="produk.php">
          <div class="input-group input-group-lg my-4">
            <input type="text" class="form-control" placeholder="Nama Barang" aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
            <button type="submit" class="btn warna1 text-white">Telusuri</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- highlighted kategori -->
  <div class="container-fluid py-5">
    <div class="container text-center">
      <h3>Kategori Terlaris</h3>

      <div class="row mt-5">
        <div class="col-md-4 mb-3">
          <div class="highlighted-kategori kategori-fashion-pria d-flex justify-content-center align-items-center">
            <h4 class=""><a class="no-decoration" href="produk.php?kategori=Classic Elegant">Classic Elegant</a></h4>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="highlighted-kategori kategori-fashion-wanita d-flex justify-content-center align-items-center">
            <h4 class=""><a class="no-decoration" href="produk.php?kategori=Art Of Beat">Art Of Beat</a></h4>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="highlighted-kategori kategori-hoodie d-flex justify-content-center align-items-center">
            <h4 class=""><a class="no-decoration" href="produk.php?kategori=Sporty Casual">Sporty Casual</a></h4>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- About Us -->
  <div class="container-fluid warna1 py-5">
    <div class="container text-center">
      <h3>About Us</h3>
      <p class="fs-5 mt-3">Fashion Nova is the worlds leading quick-to-market apparel and lifestyle brand. We are renowned for delivering the seasons most wanted styles to millions of people worldwide, which earned us the title of the #1 Most-Searched Fashion Brand on Google in 2018.

        As a Los Angeles based company with 5 retail stores throughout Southern California, we sell collections for women, men, curve, and kids. We are a pop culture phenomenon, reaching staggering social media followings of over 25 million, of which includes celebrity fans and collaborators.

        Our name has been featured in songs and our styles have been worn by your favorite celebs. From Cardi B to Kylie Jenner, there isnt a famous booty our jeans havent been on. Tyga, The Game, YG, City Girls, Saweetie, Offset—youll hear Fashion Nova mentioned in the hottest chart-topping hits, worldwide.</p>
    </div>
  </div>

  <!-- produk -->
  <div class="container-fluid py-5">
    <div class="container text-center">
      <h3>Produk</h3>

      <div class="row mt-5">
        <?php while ($data = mysqli_fetch_array($queryProduk)) { ?>
          <div class="col-sm-6 col-md-4 mb-3">
            <div class="card h-100">
              <div class="image-box">
                <img src="image/<?php echo $data['foto']; ?>" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo $data['nama']; ?></h5>
                <p class="card-text text-truncate"><?php echo $data['detail']; ?></p>
                <p class="card-text text-harga"><?php echo $data['harga']; ?></p>
                <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn warna1">Lihat Detail</a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <a class="btn btn-outline-primary mt-3 p-3" href="produk.php">See more</a>
    </div>
  </div>

  <!-- footer -->
  <?php require "footer.php"; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="fontawesome/js/all.min.js"></script>
</body>

</html>