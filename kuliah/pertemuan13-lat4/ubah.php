<?php
require 'functions.php';
$name = 'ubah Data mahasiswa';
$id = htmlspecialchars($_GET['id']);
$student = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


if (isset($_POST['ubah'])) {

  if (tambah($_POST) > 0) {
    echo "<script>
        alert('ubah data berhasil!');
        document.location.href = 'index.php';
        </script>";
  }
}

require 'views/ubah.view.php';
