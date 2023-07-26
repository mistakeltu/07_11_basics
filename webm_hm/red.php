<?php
if (isset($_GET['color']) && $_GET['color'] === 'blue') {
    header('Location: blue.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: crimson;">
    <a href="?color=blue">Go to blue</a>
</body>

</html>