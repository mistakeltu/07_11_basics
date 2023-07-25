<!-- 3) Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje. -->

<?php
$color = isset($_GET['color']) ? $_GET['color'] : '000000';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?= $color ?>;">
<form action="" method="get">
    <input type="color" name="color">
    <button type="submit">Submit</button>
</form>
</body>
</html>