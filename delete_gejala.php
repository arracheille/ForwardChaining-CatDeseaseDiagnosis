<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check that the gejala ID exists
if (isset($_GET['id'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM gejala WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $gejala = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$gejala) {
        exit('gejala doesn\'t exist with that ID!');
    }
    // Make sure the user confirms beore deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete record
            $stmt = $pdo->prepare('DELETE FROM gejala WHERE id = ?');
            $stmt->execute([$_GET['id']]);
            $msg = 'You have deleted the gejala!';
        } else {
            // User clicked the "No" button, redirect them back to the read page
            header('Location: read.php');
            exit;
        }
    }
} else {
    exit('No ID specified!');
}
?>


<?=template_header('Delete')?>

<div class="content delete">
	<h2>Delete Gejala #<?=$gejala['id']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Are you sure you want to delete gejala #<?=$gejala['id']?>?</p>
    <div class="yesno">
        <a href="delete_gejala.php?id=<?=$gejala['id']?>&confirm=yes">Yes</a>
        <a href="delete_gejala.php?id=<?=$gejala['id']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>
