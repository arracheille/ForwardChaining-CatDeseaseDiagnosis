<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the penyakit id exists, for example update.php?id=1 will get the penyakit with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $kode_penyakit = isset($_POST['kode_penyakit']) ? $_POST['kode_penyakit'] : '';
        $nama_penyakit = isset($_POST['nama_penyakit']) ? $_POST['nama_penyakit'] : '';
        
        // Update the record
        $stmt = $pdo->prepare('UPDATE penyakit SET id = ?, kode_penyakit = ?, nama_penyakit = ? WHERE id = ?');
        $stmt->execute([$id, $kode_penyakit, $nama_penyakit, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the penyakit from the penyakit table
    $stmt = $pdo->prepare('SELECT * FROM penyakit WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $penyakit = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$penyakit) {
        exit('penyakit doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>



<?=template_header('Read')?>

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
	<h2>Update penyakit<?=$penyakit['id']?></h2>
    <form action="update.php?id=<?=$penyakit['id']?>" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" value="<?=$penyakit['id']?>" id="id" disabled readonly>
        <br>
        <br>
        <label for="kode_penyakit">KODE PENYAKIT</label>
        <input type="text" name="kode_penyakit" value="<?=$penyakit['kode_penyakit']?>" id="kode_penyakit">
        <br>
        <br>
        <label for="nama_penyakit">NAMA PENYAKIT</label>
        <input type="text" name="nama_penyakit" value="<?=$penyakit['nama_penyakit']?>" id="nama_penyakit">
        <br>
        <br>
        <label></label>
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>
