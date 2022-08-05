<?php
session_start();
require 'functions.php';

if( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_mahasiswa WHERE username = '$username'");
    if( mysqli_num_rows($result) === 1 ) {
        echo "<script> alert('Login Sukses') </script>";
        $row = mysqli_fetch_assoc($result);
            if($password === $row["password"])  {
            	$_SESSION["login"] = true;
                $_SESSION["id_mahasiswa"] = $row["id_mahasiswa"];
                echo "<script> alert('Login Sukses') </script>";
                header("Location: user/index.php");
                exit;
            	}              
    } 
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Ogani Template" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Peserta</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/login-style.css" type="text/css" />
  </head>

  <body>
    <div class="login-page">
      <div class="form">
        <span
          ><h4><b>Login Peserta</b></h4></span
        >
        <hr />

       <form action="" method="post">
            <div class="form-group">        
            <input type="text" class="form-control" name="username" id="username" required autocomplete="off" placeholder="Masukan NPM">
            </div>
            <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" required autocomplete="off" placeholder="Password">
            </div>

            <div class="form-group">
            <?php if( isset($error) ) : ?>
                <p style="color: red; font-style: italic">username / password salah</p>
            <?php endif; ?>
            </div>

            <button type="submit" name="login" class="btn btn-primary" style="width: 100%;">Login</button>
            <p class="message">Back to <a href="index.php">Home</a></p>
            
            </form>
      </div>
    </div>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
