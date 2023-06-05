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
            <h4 class=""><a class="no-decoration" href="produk.php?kategori=Fashion Pria">Fashion Pria</a></h4>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="highlighted-kategori kategori-fashion-wanita d-flex justify-content-center align-items-center">
            <h4 class=""><a class="no-decoration" href="produk.php?kategori=Fashion Wanita">Fashion Wanita</a></h4>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="highlighted-kategori kategori-hoodie d-flex justify-content-center align-items-center">
            <h4 class=""><a class="no-decoration" href="produk.php?kategori=Hoodie">Hoodie</a></h4>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- About Us -->
  <div class="container-fluid warna1 py-5">
    <div class="container text-center">
      <h3>About Us</h3>
      <p class="fs-5 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum hic voluptatibus quaerat aliquam fugit est excepturi laudantium aspernatur beatae vero!</p>
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
                <h5 class="card-title"><?php $data['nama']; ?></h5>
                <p class="card-text text-truncate"><?php $data['detail']; ?></p>
                <p class="card-text text-harga"><?php $data['harga']; ?></p>
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