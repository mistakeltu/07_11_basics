<?php
if (isset($_GET['color']) && $_GET['color'] === 'red') {
    header('Location: red.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: skyblue;">
    <a href="?color=red">Go to red</a>
</body>

</html>