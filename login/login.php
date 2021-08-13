<?php
  session_start();
  if ($_SESSION['status'] == "login") {
  header("location:../index.php");
  }
  ?>
<html lang="en">
  <head>
    <title>dompetKita | Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
  </head>
  <body>
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="images/img-01.png" alt="IMG">
        </div>
        <form class="login100-form validate-form" action="prosesLogin.php" method="post">
          <span class="login100-form-title">
          Login
          </span>
          <?php
            if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'><i class='fa fa-times'></i>
              Username dan Password salah!
            </div>";
            } else if ($_GET['pesan'] == "logout") {
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'><i class='fa fa-check'></i>
              Anda telah berhasil logout!
            </div>";
            } else if ($_GET['pesan'] == "belum_login") {
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'><i class='fa fa-sign-in'></i>
              Anda harus login terlebih dahulu!
            </div>";
            } else if ($_GET['pesan'] == "register") {
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'><i class='fa fa-user-plus'></i>
              Registrasi sukses!
            </div>";
            }
            }
            ?>
          <div class="wrap-input100">
            <input class="input100" type="text" name="user" placeholder="Username">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>
          <div class="wrap-input100">
            <input class="input100" type="password" name="pass" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
            Login
            </button>
          </div>
          <div class="text-center p-t-12">
            <span class="txt1">
            Forgot
            </span>
            <a class="txt2" href="#">
            Username / Password?<br>Hahaha mampus
            </a>
          </div>
          <div class="text-center p-t-80">
            <a class="txt2" data-toggle="modal" data-target="#exampleModal">
            Buat Akun
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="../register.php" method="post">
                  <div class="wrap-input100">
                    <input class="input100" type="text" name="user2" placeholder="Username" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="wrap-input100">
                    <input class="input100" type="password" name="pass2" placeholder="Password" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                  </div>
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type"submit">
            Sign Up
            </button>
          </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
    </div>
    </div>
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
      $('.js-tilt').tilt({
      scale: 1.1
      })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script>
      $(document).ready(function() {
      window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
      });
      }, 5000);
      });
    </script>
  </body>
</html>
