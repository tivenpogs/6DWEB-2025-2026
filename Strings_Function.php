<?php
$text  = " Yabang mo ne ";
$text1 = " Nag Ai si Japoy ";
$text2 = " Naging tomboy si Daddy Rov at naghanap ng daddy ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>String Functions</title>
<style>
body, html {
    margin: 0;
    padding: 15px;
    height: 100%;
    font-family: sans-serif;
    color: black;
}
.design {
    background-image: linear-gradient(to top right,
    #ff9a9e 0%,
    #fecfef 50%,
    #a18cd1 100%);
}
table, tr, td {
    background-color: white;
    border: 2px solid black;
    border-collapse: collapse;
    padding: 15px;
    text-align: center;
    color: black;
    font-size: 15px;
}
</style>
</head>

<body class="design">

<h2>Changing the Case of Characters</h2>
<table>
<tr>
<td><b>Lowercase</b></td>
<td><?= strtolower($text) ?></td>
</tr>
<tr>
<td><b>Uppercase</b></td>
<td><?= strtoupper($text) ?></td>
</tr>
<tr>
<td><b>Capitalized</b></td>
<td><?= ucwords($text) ?></td>
</tr>
</table>

<h2>Counting Characters and Words</h2>
<table>
<tr>
<td>Number of Characters</td>
<td><?= strlen($text) ?></td>
</tr>
<tr>
<td>Number of Words</td>
<td><?= str_word_count($text) ?></td>
</tr>
</table>

<h2>Removing and Replacing Characters</h2>
<table>
<tr>
<td>Remove whitespaces from left</td>
<td><?= ltrim($text) ?></td>
</tr>
<tr>
<td>Remove whitespaces from right</td>
<td><?= rtrim($text) ?></td>
</tr>
<tr>
<td>Remove whitespace from both sides</td>
<td><?= trim($text) ?></td>
</tr>
<tr>
<td>String replace</td>
<td><?= str_replace("Yabang", "Pogi", $text) ?></td>
</tr>
<tr>
<td>String ireplace</td>
<td><?= str_ireplace("yabang", "pogi", $text) ?></td>
</tr>
<tr>
<td>String repeat</td>
<td><?= str_repeat($text, 3) ?></td>
</tr>
</table>

<h2>Other Built-in Functions</h2>
<table>
<tr>
<td>strpos()</td>
<td><?= strpos($text2, "Daddy") ?></td>
</tr>

<tr>
<td>stripos()</td>
<td><?= stripos($text2, "daddy") ?></td>
</tr>

<tr>
<td>strrpos()</td>
<td><?= strrpos($text2, "Daddy") ?></td>
</tr>

<tr>
<td>strripos()</td>
<td><?= strripos($text2, "daddy") ?></td>
</tr>

<tr>
<td>strstr()</td>
<td><?= strstr($text2, "Daddy") ?></td>
</tr>

<tr>
<td>stristr()</td>
<td><?= stristr($text2, "daddy") ?></td>
</tr>

<tr>
<td>substr()</td>
<td><?= substr($text2, 7, 10) ?></td>
</tr>

<tr>
<td>str_contains()</td>
<td><?= str_contains($text1, "Japoy") ? "True" : "False" ?></td>
</tr>

<tr>
<td>mb_strlen()</td>
<td><?= mb_strlen($text1) ?></td>
</tr>
</table>

</body>
</html>
