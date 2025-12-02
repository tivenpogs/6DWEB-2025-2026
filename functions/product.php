<?php
require "includes/header.php";
require "includes/footer.php";
$name = "DaDDY ROV";
$greeting = "Hello";
if (!empty($name)) {
    $greeting = "Welcome Back. $name";
}
$product = "LOLLIPOP";
$cost = 10;
$totals = [];
for ($i = 1; $i <= 15; $i++) {
    $subtotal = $cost * $i;
    $discount = ($cost / 100) * ($i * 4);
    $totals[$i] = $subtotal - $discount;
}
?>
<!DOCTYPE html>
<html>
<body>
<h2><?= $greeting ?></h2>
<p> <?= $product ?> DISCOUNTS</p>

<table>
    <tr>
        <th>PACKS</th>
        <th>PRICE</th>
    </tr>
    <?php foreach ($totals as $quantity => $price): ?>
    <tr>
        <td>
            <?= $quantity ?> pack<?= $quantity === 1 ? '' : 's' ?> 
        </td>
        <td>
            $<?= number_format($price, 2) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
    </body>
</html>