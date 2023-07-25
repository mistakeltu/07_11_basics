<?php

$animals = [];
if (file_exists(__DIR__ . '/animals.json')) {
    $animals = json_decode(file_get_contents(__DIR__ . '/animals.json'), 1);
}

//POST

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_GET['action'] == 'delete') {
        foreach ($animals as $key => $animal) {
            if ($animal['id'] == $_GET['id']) {
                unset($animals[$key]);
                break;
            }
        }
    }

    if ($_GET['action'] == 'create') {
        $animals[] = [
            'name' => $_POST['name'],
            'id' => uniqid(),
        ];
        $message = 'Animal Added';
    }

    if ($_GET['action'] == 'edit') {
        foreach ($animals as $key => $animal) {
            if ($animal['id'] == $_GET['id']) {
                $animals[$key]['name'] = $_POST['name'];
                break;
            }
        }
    }

    file_put_contents(__DIR__ . '/animals.json', json_encode($animals));
    header('Location: http://localhost/bitas/07_11_basics/webm/07_25_index.php');
    die;
}

//GET
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>ZOO</title>
</head>

<body>
    <h1>ZOO</h1>
    <div class="message">
        <?= $message ?>
    </div>
    <ul>
        <?php if (!empty($animals)) : ?>
            <?php foreach ($animals as $animal) : ?>
                <li>
                    <h2><?= $animal['name'] ?></h2>
                    <form action="http://localhost/bitas/07_11_basics/webm/07_25_index.php?action=delete&id=<?= $animal['id'] ?>" method="post">
                        <button type="submit">Delete</button>
                    </form>
                    <span>Edit</span>
                    <input type="checkbox" name="edit">
                    <fieldset class="edit">
                        <legend>Edit animal</legend>
                        <form action="http://localhost/bitas/07_11_basics/webm/07_25_index.php?action=edit&id=<?= $animal['id'] ?>" method="post">
                            <input type="text" name="name" value="<?= $animal['name'] ?>">
                            <button type="submit">Save</button>
                        </form>
                    </fieldset>
                </li>
            <?php endforeach ?>
        <?php else : ?>
            <li>
                No animals
            </li>
        <?php endif ?>
    </ul>
    <fieldset>
        <legend>Add animal</legend>
        <form action="http://localhost/bitas/07_11_basics/webm/07_25_index.php?action=create" method="post">
            <input type="text" name="name">
            <button type="submit">Add</button>
        </form>
    </fieldset>
</body>

</html>