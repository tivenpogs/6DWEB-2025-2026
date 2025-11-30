<?php include 'header.php'; ?>
<?php include 'data.php'; ?>

<section class="drama-grid container">
<h2>All K-Dramas</h2>

<div class="grid">

<?php foreach($dramas as $d): ?>
    <article class="card">
        <a href="drama_details.php?id=<?php echo $d['id']; ?>">
            <img src="<?php echo $d['image']; ?>" alt="<?php echo $d['title']; ?>">
        </a>

        <h3><?php echo $d['title']; ?></h3>
        <p class="meta">
            <?php echo $d['genre']; ?> • 
            <?php echo $d['year']; ?> • 
            Rating: <?php echo $d['rating']; ?>
        </p>
    </article>
<?php endforeach; ?>

</div>
</section>

<?php include 'footer.php'; ?>
