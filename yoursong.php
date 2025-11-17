<?php
$title = "Pagbigyan Muli";
$artist = "Erik Santos";
$cover = "Steven Timbol";

$verb = array(
    "pagbigyan","nagkamali","patawarin","magsisi","nangako","mauulit",
    "yayakapin","limutin","magtiwala","mahalin","magbalik","kakayanin",
    "mawala","malaman","kaya","tanggapin","sundin","sinadya","maging",
    "nakalimot","mangyari","yakapin","ibalik","dama","mahalin","magbalik","ibalik"
);

$noun = array(
    "pag-ibig","nakaraan","piling","sakit","halik","saglit","pagkakamali","init"
);

$verse1 = 
    "Muli ay 'yong " . $verb[0] . ", ako'y " . $verb[1] . "<br>" .
    "Muli ay 'yong " . $verb[2] . ", ako'y " . $verb[3] . "<br>" .
    "Alam kong ako'y " . $verb[4] . " 'di na " . $verb[5] . " pa<br>" .
    "Ako'y " . $verb[1] . " sa'yo, muli ay " . $verb[2] . " mo";

$prechorus = "Ako ba'y 'yong " . $verb[6] . "?<br>" .
    $noun[1] . "'y kayang " . $verb[7] . "?<br>" .
    $verb[8] . " muli, " . $verb[9] . " mong muli<br>" .
    $verb[10] . " ka sa'kin";

$chorus = "'Di ko " . $verb[11] . " kung ika'y " . $verb[12] . " sa aking " . $noun[2] . "<br>" .
    "'Di ko " . $verb[11] . " 'pag " . $verb[13] . " kong wala nang " . $noun[0] . " sa akin<br>" .
    "'Di " . $verb[14] . " mag-isa, gustong kasama kita<br>" .
    "Sa'yo lang ang " . $noun[0] . "<br>" .
    $verb[8] . " muli, ito na ang huling " . $noun[6] . "<br>" .
    $noun[0] . " ko'y muling " . $verb[15];

$verse2 = "Muli ay 'yong " . $verb[0] . " " . $noun[0] . " natin<br>" .
    "Sabihin mo sa akin ang 'yong gusto'y " . $verb[16] . "<br>" .
    $verb[8] . " 'di " . $verb[17] . " " . $verb[18] . " 'di tapat sa'yo<br>" .
    $verb[19] . " nga ako, " . $verb[20] . " 'di ginusto";

$prechorus2 ="Ako pa ba'y kayang " . $verb[21] . "?<br>" .
    "Ang " . $noun[7] . " ng " . $noun[4] . " sa akin, " . $verb[14] . " bang " . $verb[22] . "?<br>" .
    $verb[23] . " ang bawat " . $noun[5] . " ng " . $noun[3] . "<br>" .
    "Ngayong wala ka na";

$chorus2 ="'Di ko " . $verb[11] . " kung ika'y " . $verb[12] . " sa aking " . $noun[2] . "<br>" .
    "'Di ko " . $verb[11] . " 'pag " . $verb[13] . " kong wala nang " . $noun[0] . " sa akin<br>" .
    "'Di " . $verb[14] . " mag-isa, gustong kasama kita<br>" .
    "Sa'yo lang ang " . $noun[0] . "<br>" .
    $verb[8] . " muli, ito na ang huling " . $noun[6] . "<br>" .
    $noun[0] . " ko'y";

$bridge ="Muling " . $verb[15] . ", muling " . $verb[9] . "<br>" .
    "Di " . $verb[11] . " ikay " . $verb[12] . " sa'king " . $noun[2] . "<br>" .
    "Muling " . $verb[9] . ", ikay " . $verb[10] . ", " . $verb[8] . " muli<br>" .
    "Muling " . $verb[22] . " ang " . $noun[0] . " na dati'y sa atin<br>" .
    "Pagkat";

$chorus3 ="Di ko " . $verb[11] . " kung ikay " . $verb[12] . " sa aking " . $noun[2] . "<br>" .
    "Di ko " . $verb[11] . " pag " . $verb[13] . " kong wala nang " . $noun[0] . " sa akin<br>" .
    "Di " . $verb[14] . " mag-isa, gustong kasama kita<br>" .
    "Sayo lang ang " . $noun[0] . "<br>" .
    $verb[8] . " muli, ito na ang huling " . $noun[6] . "<br>" .
    $noun[0] . " koy muling " . $verb[15];

$outro ="Muling " . $verb[15] . "<br>" .
    "Muling " . $verb[15];
$verseCount = 2;
$prechorusCount = 2;
$chorusCount = 3;
$bridgeCount = 1;
$outroCount = 1;
$totalversechorus = $verseCount + $prechorusCount + $chorusCount + $bridgeCount + $outroCount
?>
<!DOCTYPE html>
<html>
<style>
    body {
        background: linear-gradient(180deg, #001233, #001a47, #002255);
        color: #d9e6ff;
        font-family: "Segoe UI", sans-serif;
        text-align: center;
        padding: 40px;
        line-height: 1.8;
    }

    h1 {
        font-size: 34px;
        margin-bottom: 20px;
        color: #ffffff;
        letter-spacing: 2px;
        opacity: 0.95;
    }

    .lyrics-box {
        max-width: 700px;
        margin: auto;
        background: rgba(0, 20, 60, 0.55);
        border: 5px solid rgba(80, 120, 180, 0.4);
        padding: 30px;
        border-radius: 18px;
        box-shadow: 0 0 25px rgba(0, 50, 120, 0.4);
    }

    p {
        margin: 12px 0;
        font-size: 17px;
    }

</style>

<head>
    <title>Song Lyrics</title>
</head>
<body>

<h1>Lyrics</h1>

<div class="lyrics-box">
<?php
echo "<p>$title</p>";
echo "<p>$artist</p>";
echo "<p>Covered by: $cover</p>";
echo "<p>$verse1</p>";
echo "<p>$prechorus</p>";
echo "<p>$chorus</p>";
echo "<p>$verse2</p>";
echo "<p>$prechorus2</p>";
echo "<p>$chorus2</p>";
echo "<p>$bridge</p>";
echo "<p>$chorus3</p>";
echo "<p>$outro</p>";
?>
</div>
<footer>
    <?php echo "<p>Total stanzas: $totalversechorus</p>";?>
</footer>
</body>
</html>

