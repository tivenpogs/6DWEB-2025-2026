<?php
require "includes/header.php";
require "includes/footer.php";
$username = "Ivy.";
$greeting = "Hello.";
$offer = array("Chocolate", 5, 25, 20);
$usual_price = $offer[1] + $offer[2];
$offer_price = $offer[1] + $offer[3];
$saving = $usual_price - $offer_price;
?>
<!DOCTYPE html>
<html>
    <link rel = "stylesheet" href = "css/styles.css"/>
    <body>
        <h2>MULTI-BUY OFFER</h2>
<?php
echo "<p>$greeting $username</p>";
echo "<p>Buy $offer[1] packs of $offer[0] for $$offer[3]</p>";
echo "<p>(usual price: $$offer[2])</p>";
?>
    </body>
</html>