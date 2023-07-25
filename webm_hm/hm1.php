<!-- Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas. -->
<?php
$color = isset($_GET['color']) && $_GET['color'] == 1 ? 'crimson' : 'black';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:<?= $color ?>;">
<h1>
<a href="http://localhost/bitas/07_11_basics/functions_hm/functions_hm1.php?color=1">Red</a>
<a href="http://localhost/bitas/07_11_basics/functions_hm/functions_hm1.php">Black</a>
</h1>
</body>
</html>