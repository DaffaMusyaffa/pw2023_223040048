<?php
require "koneksi.php";

if (isset($_GET['keyword'])) {
  $keyword = $_GET['keyword'];
  $queryProduk = mysqli_query($conn, "SELECT * FROM produk WHERE nama LIKE '%$keyword%'");
  $countData = mysqli_num_rows($queryProduk);

  if ($countData < 1) {
    echo '<h4 class="text-center my-5">Produk yang Anda cari tidak tersedia</h4>';
  } else {
    while ($produk = mysqli_fetch_array($queryProduk)) {
      echo '
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="image-box">
              <img src="image/' . $produk['foto'] . '" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">' . $produk['nama'] . '</h5>
              <p class="card-text text-truncate">' . $produk['detail'] . '</p>
              <p class="card-text text-harga">' . $produk['harga'] . '</p>
              <a href="produk-detail.php?nama=' . $produk['nama'] . '" class="btn warna1">Lihat Detail</a>
            </div>
          </div>
        </div>
      ';
    }
  }
}
