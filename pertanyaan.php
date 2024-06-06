<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Diagnosa</title>
    <style>
  body {
    margin: 0;
    padding: 0;
    font-family: "Montserrat", sans-serif;
    background-color: #ffc6ac;
    color: #fff6dc;
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center; 
    justify-content: center;
    letter-spacing: 1px;
  }
  .container {
    text-align: center;
  }
  a {
    background-color: #c4c1a4ea;
    color: #ffff;
    padding: 0.7rem 2rem;
    border-radius: 6rem;
    font-size: 1rem;
    font-weight: 500;
    margin: 1rem;
    text-decoration: none;
  }
    </style>
  </head>
<body>
  <div class="container">
  <form method="post" action="input-ketampung.php" enctype="multipart/form-data" role="form">
    <?php
    include ('functions.php');
    $kode='G1';
    session_start();
        if(isset($_GET['kode'])){
            $kode=$_GET['kode'];
        }
        $sql = "SELECT * from gejala WHERE kode_gejala='$kode'";
        $data = mysqli_query($connect,$sql);
        $row = mysqli_fetch_assoc($data);     
    ?>
    <h1><?php echo $row['nama_gejala']; ?></h1>
    <br>
    <div class="option">
        <?php 
            include "fungsi.php";
            answer($kode);                    
        ?>
    </div>
  </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
