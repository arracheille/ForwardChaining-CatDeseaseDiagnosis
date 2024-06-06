<?php
include 'functions.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["usn"];
  $email = $_POST["email"];
  $password = $_POST["pass"];

  // Add your validation and sanitization logic here if needed

  // Assuming you have a user table in your database
  $pdo = pdo_connect_mysql();
  $stmt = $pdo->prepare("INSERT INTO user (nama, email, password) VALUES (?, ?, ?)");
  $stmt->execute([$name, $email, $password]);

  // Redirect to the home page or wherever you want after registration
  header("Location: index-user.php");
  exit();
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
    <section class="meong">
      <p class="text-center" style="font-size: 1.5rem; color: #c4c1a4; font-weight: 550">Temukan Penyakit Kucing: Panduan Awal untuk Kesehatan Kucing Anda</p>
      <img src="img/red-white-cat-i-white-studio-removebg-preview.png" style="height: 80%" />
    </section>
    <section class="miaw">
      <div class="form-miaw">
        <img src="img/catties.png" style="width: 20rem" />
        <form action="login.php" method="post">
        <input type="text" id="usn" name="usn" placeholder="Nama" class="rounded" style="margin-top: 1rem;" required><br>

        <input type="email" id="email" name="email" placeholder="Email" class="rounded" style="margin-top: 1rem;" required><br>

        <input type="password" id="pass" name="pass" placeholder="Password" class="rounded" style="margin-top: 1rem;" required><br>

        <input type="submit" class="rounded" style="margin-top: 1rem; background-color: #fff6dc; color: #ffc6ac; font-size: 1.2rem;" value="Kirim">
        </form>
      </div>
      <a href="login-admin.php">Atau Masuk Sebagai Admin</a>
    </section>
  </body>
</html>
