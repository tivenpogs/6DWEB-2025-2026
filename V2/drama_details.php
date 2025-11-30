<?php include 'header.php'; ?>
<?php include 'data.php'; ?>

<?php
$id = $_GET['id'] ?? 0;

$selected = null;
foreach ($dramas as $d) {
    if ($d["id"] == $id) {
        $selected = $d;
        break;
    }
}
?>

<section class="container">

<?php if ($selected): ?>

    <div class="details">
        <img class="details-img" src="<?php echo $selected['image']; ?>" alt="">
        
        <div class="details-content">
            <h1><?php echo $selected['title']; ?></h1>

            <p><strong>Genre:</strong> <?php echo $selected['genre']; ?></p>
            <p><strong>Year:</strong> <?php echo $selected['year']; ?></p>
            <p><strong>Rating:</strong> <?php echo $selected['rating']; ?></p>

            <h3>Synopsis</h3>
            <p><?php echo $selected['synopsis']; ?></p>
            
            <a href="dramas.php" class="back-btn">← Back to List</a>
        </div>
    </div>

<?php else: ?>
    <h2>Drama not found.</h2>
<?php endif; ?>

</section>

<?php include 'footer.php'; ?>
