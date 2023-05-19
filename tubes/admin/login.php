<?php
session_start();
require "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <title>Form Login dan Registrasi</title>
  <link rel="stylesheet" href="css/form.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="wrapper">
    <div class="title-text">
      <div class="title login">Login</div>
      <div class="title signup">Registrasi</div>
    </div>
    <div class="form-container">
      <div class="slide-controls">
        <input type="radio" name="slide" id="login" checked />
        <input type="radio" name="slide" id="signup" />
        <label for="login" class="slide login">Login</label>
        <label for="signup" class="slide signup">Registrasi</label>
        <div class="slider-tab"></div>
      </div>
      <div class="form-inner">
        <form action="#" class="login">
          <div class="field">
            <input type="text" placeholder="Masukan Username" required />
          </div>
          <div class="field">
            <input type="password" placeholder="Masukan Password" required />
          </div>
          <div class="pass-link">
            <a href="#">Lupa password?</a>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Login" />
          </div>
          <div class="signup-link">
            Belum Punya Akun? <a href="">Daftar Sekarang</a>
          </div>
        </form>
        <form action="#" class="signup">
          <div class="field">
            <input type="text" placeholder="Masukan Username" required />
          </div>
          <div class="field">
            <input type="password" placeholder="Masukan Password" required />
          </div>
          <div class="field">
            <input type="password" placeholder="Konfirmasi password" required />
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Daftar" />
          </div>

          <div class="mt-3">
            <?php if (isset($_POST['loginbtn'])) {
              $username = htmlspecialchars($_POST['username']);
              $password = htmlspecialchars($_POST['password']);

              $query = mysqli_query($con, "SELECT user* FROM users WHERE username='$username");
              $countdata = mysqli_num_rows($query);

              if ($countdata > 0) {
              } else {
            ?>
                <div class="alert alert-warning" role="alert">
                  Akun tidak tersedia
                </div>
            <?php
              }
            }
            ?>
          </div>

        </form>
      </div>
    </div>
  </div>
  <script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = () => {
      loginForm.style.marginLeft = "-50%";
      loginText.style.marginLeft = "-50%";
    };
    loginBtn.onclick = () => {
      loginForm.style.marginLeft = "0%";
      loginText.style.marginLeft = "0%";
    };
    signupLink.onclick = () => {
      signupBtn.click();
      return false;
    };
  </script>
</body>

</html>