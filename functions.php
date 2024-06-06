<?php

$dbhost = 'localhost'; 
$dbuser = 'root';
$dbpass = '';
$dbname = 'spakar';

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal');

if (!function_exists('pdo_connect_mysql')) {
  function pdo_connect_mysql() {
      // Your connection logic here
      $DATABASE_HOST = 'localhost';
      $DATABASE_USER = 'root';
      $DATABASE_PASS = '';
      $DATABASE_NAME = 'pakarcat';
      try {
          return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
      } catch (PDOException $exception) {
          // If there is an error with the connection, stop the script and display the error.
          exit('Failed to connect to the database!');
      }
  }
}

if (!function_exists('template_header')) {
  function template_header($title) {
    echo <<<EOT
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>$title</title>
        <link href="nav.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="style.css" />
      </head>
      <body>
        <nav class="navbar navbar-expand-lg justify-content-between sticky-top" style="background-color: #ffc6ac; padding-left: 5rem; padding-right: 5rem">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
              <img src="img/catties.png" alt="Logo" width="90" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" style="color: #9e9fa5" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: white" href="mulai.php">Diagnosa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: white" href="read.php">Penyakit</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: white" href="read_gejala.php">Gejala</a>
                </li>
              </ul>
            </div>
            <div id="nav-user">
            <div class="text">
              <div class="text">
                <a style="color: white; font-size: 1rem" class="nav-link" href="logout.php">
                  <span>Logout</span></a>
              </div>
            </div>
          </div>
            </div>
        </nav>
    EOT;
  }
}
 if(!function_exists('template_header_user')){
    function template_header_user($title) {
      echo <<<EOT
      <!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>$title</title>
          <link href="nav.css" rel="stylesheet" type="text/css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
        </head>
        <body>
        <nav class="navbar navbar-expand-lg justify-content-between sticky-top" style="background-color: #ffc6ac; padding-left: 5rem; padding-right: 5rem">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="img/catties.png" alt="Logo" width="90" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="color: #9e9fa5" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="#contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="mulai-user.php">Diagnosa</a>
              </li>
            </ul>
          </div>
            <div class="text">
              <div class="text">
                <a style="color: white; font-size: 1rem" class="nav-link" href="logout.php">
                  <span>Logout</span></a>
              </div>
            </div>
        </div>
      </nav>
      EOT;
    }
 }

 if(!function_exists('template_footer')){
  function template_footer() {
    echo <<<EOT
    <link href="nav.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <section class="d-flex justify-content-between" id="foot" style="background-color: #dfdcbe;">
    <div class="satu" style="max-width: 30%">
      <div class="heading">
      <p style="color: #9e9fa5; font-weight: 600; font-size: 1.5rem">About</p>
      </div>
      <div class="text">
      <p style="color: #787551; font-size: 1.1rem">
        Catties memiliki visi untuk membantu pemilik kucing dalam merawat dan menjaga kesehatan kucing mereka. Pemahaman tentang penyakit kucing dan tindakan yang tepat dapat memastikan kesejahteraan dan kebahagiaan kucing Anda.
      </p>
      </div>
      <div class="social">
      <img src="img/Frame.png" style="width: 3rem; border-radius: 50%; background-color: #c4c1a4" />
      <img src="img/Frame.png" style="width: 3rem; border-radius: 50%; background-color: #c4c1a4" />
      <img src="img/Frame.png" style="width: 3rem; border-radius: 50%; background-color: #c4c1a4" />
      <img src="img/Frame.png" style="width: 3rem; border-radius: 50%; background-color: #c4c1a4" />
      <img src="img/Frame.png" style="width: 3rem; border-radius: 50%; background-color: #c4c1a4" />
      </div>
    </div>
    <div class="dua" style="max-width: 25%">
      <div class="heading">
      <p style="color: #9e9fa5; font-weight: 600; font-size: 1.5rem">Contact Us</p>
      </div>
      <div class="f-con">
      <div class="d-flex align-items-center" id="ichi" style="padding-bottom: 1rem">
        <div class="f-img" style="width: 3rem; height: 3rem; background-color: #c4c1a4; border-radius: 50%"></div>
        <div class="f-text" style="padding-left: 1rem">
        <div class="p-6">Jepang</div>
        <div class="p-6">Purwokerto, Jawa Tengah</div>
        </div>
      </div>
      <div class="d-flex align-items-center" id="ni" style="padding-bottom: 1rem">
        <div class="f-img" style="width: 3rem; height: 3rem; background-color: #c4c1a4; border-radius: 50%"></div>
        <div class="f-text" style="padding-left: 1rem">
        <div class="p-6">+82 077-777-123</div>
        </div>
      </div>
      <div class="d-flex align-items-center" id="san" style="padding-bottom: 1rem">
        <div class="f-img" style="width: 3rem; height: 3rem; background-color: #c4c1a4; border-radius: 50%"></div>
        <div class="f-text" style="padding-left: 1rem">
        <div class="p-6">nelaimoet@gmail.gom</div>
        </div>
      </div>
      </div>
    </div>
    <div class="tiga" style="max-width: 15%">
      <div class="heading">
      <p style="color: #9e9fa5; font-weight: 600; font-size: 1.5rem">Layanan</p>
      </div>
      <div class="p-6" style="color: #787551; letter-spacing: 0.5px;">Konsultasi Kucing <br />Diagnosis Kucing <br />Penyakit Kucing</div>
    </div>
    </section>
    EOT;
    }
 }
?>