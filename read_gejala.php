<?php
include 'functions.php';
// Connect to MySQL database
$pdo = pdo_connect_mysql();
// Prepare the SQL statement and get all records from the gejala table
$stmt = $pdo->prepare('SELECT * FROM gejala ORDER BY id');
$stmt->execute();

// Fetch all records
$gejalas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<?=template_header('Read')?>

<style>
.content {
  padding-top: 2rem;
  padding-bottom: 2rem;
  padding-left: 7rem;
  padding-right: 7rem;
  background-color: #ffc6ac;
}
.content .header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-bottom: 1rem;
}
.content h2 {
  margin: 0;
  color: white;
}
.create-contact {
  padding: 0.6rem;
  background-color: #fff6dc;
  color: #9e9fa5;
  text-decoration: none;
  border-radius: 0.2rem;
}
table {
  width: 100%;
}
.table-row {
  display: flex;
  justify-content: space-between;
  border: 3px solid #fff6dc;
  margin-top: 1rem;
}
.table-row td {
  padding: 1rem;
  color: white;
  font-size: 1.2rem;
  font-weight: 500;
}
.kode {
  width: 7%;
  border-right: 3px solid #fff6dc;
  text-align: center;
}
.nama {
  width: 82%;
}
.actions {
  width: 11%;
  text-align: center;
}
.trash i {
  color: #9e9fa5;
  background-color: #fff6dc;
  padding: 0.3rem;
  padding-right: 0.7rem;
  padding-left: 0.7rem;
  border-radius: 0.2rem;
}
.edit {
  color: #9e9fa5;
  background-color: #fff6dc;
  padding: 0.1rem;
  padding-right: 1rem;
  padding-left: 1rem;
  border-radius: 0.2rem;
  font-size: 1rem;
  text-decoration: none;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

<div class="content read">
    <div class="header">
    <h2>Data Gejala</h2>
	<a href="create_gejala.php" class="create-contact">Tambah Gejala</a>
    </div>
	<table>
        <tbody>
            <?php foreach ($gejalas as $gejala): ?>
            <tr class="table-row">
                <td class="kode"><?=$gejala['kode_gejala']?></td>
                <td class="nama"><?=$gejala['nama_gejala']?></td>
                <td class="actions">
                  <a href="delete_gejala.php?id=<?=$gejala['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                  <a href="update_gejala.php?id=<?=$gejala['id']?>" class="edit">Edit</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
