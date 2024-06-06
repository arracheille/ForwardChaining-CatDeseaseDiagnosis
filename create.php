<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $kode_penyakit = isset($_POST['kode_penyakit']) ? $_POST['kode_penyakit'] : '';
    $nama_penyakit = isset($_POST['nama_penyakit']) ? $_POST['nama_penyakit'] : '';

    // Insert new record into the penyakit table
    $stmt = $pdo->prepare('INSERT INTO penyakit VALUES (?, ?, ?)');
    $stmt->execute([$id, $kode_penyakit, $nama_penyakit]);
    // Output message
    $msg = 'Created Successfully!';
}
?>


<?=template_header('Create')?>

<style>
    .content {
  height: 91dvb;
  padding-top: 2rem;
  padding-bottom: 2rem;
  padding-left: 7rem;
  padding-right: 7rem;
  background-color: #ffc6ac;
}
.content h2 {
  color: white;
  margin-bottom: 2rem;
}
.content form {
  max-width: 100%;
}
.content form label {
  width: 15%;
  font-size: larger;
  font-weight: 500;
  color: #9e9fa5;
}
.content form input {
  width: 40%;
  font-size: larger;
  color: #9e9fa5;
  border: 2px solid #9e9fa5;
  padding: 0.5rem;
  border-radius: 0.2rem;
}
.content form input[type="submit"] {
  width: 10%;
  padding: 0.2rem;
  color: #9e9fa5;
  border: 2px solid #9e9fa5;
  border-radius: 0.2rem;
  background-color: white;
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />

<div class="content update">
	<h2>Create Penyakit</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" value="Auto" id="id" disabled readonly>
        <br>
        <br>
        <label for="kode_penyakit">KODE PENYAKIT</label>
        <input type="text" name="kode_penyakit" id="kode_penyakit">
        <br>
        <br>
        <label for="nama_penyakit">NAMA PENYAKIT</label>
        <input type="text" name="nama_penyakit" id="nama_penyakit">
        <br>
        <br>
        <label></label>
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>
