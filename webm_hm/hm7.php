<?php
$color = $_SERVER['REQUEST_METHOD'] === 'GET' ? 'green' : header('Location: hm6.php');
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
        <button type="submit">Green</button>
    </form>
    <form action="" method="post">
        <button type="submit">Yellow</button>
    </form>
</body>

</html>