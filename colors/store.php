<?php
require __DIR__ . '/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    http_response_code(405); //Method not allowed
    die;
}

$hex = $_POST['hex'] ?? '';
$name = $_POST['name'] ?? '';

if ($hex == '' || $name == '') {
    $_SESSION['message'] = [
        'text' => 'Please fill in all fields!',
        'type' => 'crimson'
    ];
    $_SESSION['old_values'] = $_POST;
    header('Location: ' . URL . 'create.php');
    die;
}

if (strlen($name) < 3) {
    $_SESSION['message'] = [
        'text' => 'Name must be at least 3 characters long!!',
        'type' => 'crimson'
    ];
    $_SESSION['old_values'] = $_POST;
    header('Location: ' . URL . 'create.php');
    die;
}

$colors = json_decode(file_get_contents(__DIR__ . '/colors.json'), 1);

$color = [
    'id' => uniqid(),
    'name' => $name,
    'hex' => $hex
];

$colors[] = $color;
file_put_contents(__DIR__ . '/colors.json', json_encode($colors));

$_SESSION['message'] = [
    'text' => 'Color created!',
    'type' => 'limegreen'
];

header('Location: ' . URL . 'list.php');
die;
