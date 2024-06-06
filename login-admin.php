<?php 
session_start();

include "functions.php";

if( isset( $_POST['login'] )) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($connect, "SELECT * FROM admin WHERE username = '$username' ");

    if (mysqli_num_rows($result) === 1 ) {
        $data = mysqli_fetch_assoc($result);
        if ($password === $data["password"]) {
          if ($_SESSION['username'] = $username) {
            $_SESSION['status'] = 'login';
            header("location: index.php");
          }          
        }
      }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <style>
      body {
        overflow: hidden;
        height: 100vh;
        display: flex;
      }
      .meong {
        padding: 5rem;
        background-color: #fff6dc;
        background-image: url(img/bubble.png);
        background-position: center bottom;
        background-size: contain;
        background-repeat: no-repeat;
        align-items: center;
        justify-content: center;
        text-align: center;
        width: 40%;
        height: 100%;
      }
      .miaw {
        width: 60%;
        height: 100%;
        background-color: #ffc6ac;
        padding: 6rem;
        align-items: center;
        justify-content: center;
        text-align: center;
      }
      input {
        background-color: #ffc6ac;
        color: white;
        width: 90%;
        padding: 1rem;
        border: 5px solid #fff6dc;
      }
      input::placeholder {
        color: white;
        font-size: 1.2rem;
      }
      input[type="submit"] {
        background-color: #ffc6ac;
        color: white;
        width: 90%;
        padding: 1rem;
        font-size: 1.2rem;
        border: 5px solid #fff6dc;
        border-radius: 0.5rem;
        margin-top: 1rem;
        margin-bottom: 1rem;
      }
      .miaw a {
        color: white;
        letter-spacing: 1px;
      }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  </head>
  <body>

    <?php if(isset($_GET['pesan'])) { 
        if($_GET['pesan'] === 'logout') {
    ?>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            Terimakasih telah menggunakan aplikasi ini
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } elseif($_GET['pesan'] === 'belum_login') { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda <strong>belum login</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } } ?>

    <section class="meong">
      <p class="text-center" style="font-size: 1.5rem; color: #c4c1a4; font-weight: 550">Temukan Penyakit Kucing: Panduan Awal untuk Kesehatan Kucing Anda</p>
      <img src="img/red-white-cat-i-white-studio-removebg-preview.png" style="height: 80%" />
    </section>
    <section class="miaw">
      <?php if(isset($error)) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Username dan Password <strong>SALAH</strong>
        </div>
      <?php } ?>
      <div class="form-miaw">
        <img src="img/catties.png" style="width: 20rem" />
        <form method="post" action="">
          <input type="text" id="usn" name="username" placeholder="Nama" class="rounded" style="margin-top: 1rem;" id="username" required><br>

          <input type="password" id="password" name="password" placeholder="Password" class="rounded" style="margin-top: 1rem;" required><br>

          <input type="submit" name="login" class="rounded" style="margin-top: 1rem; background-color: #fff6dc; color: #ffc6ac; font-size: 1.2rem;" value="Kirim">
      </div>
      <a href="login.php">Atau Masuk Sebagai Pengguna</a>
    </section>
  </body>
</html>
