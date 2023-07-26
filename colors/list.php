<?php
require __DIR__ . '/bootstrap.php';
$title = 'Colors - Colors List';
require __DIR__ . '/top.php';
?>
<?php require __DIR__ . '/msg.php' ?>
<?php require __DIR__ . '/menu.php' ?>

<div class="list">
    <h1>List of colors</h1>
    <?php $colors = json_decode(file_get_contents(__DIR__ . '/colors.json'), 1) ?>
    <div class="colors-list">
        <?php foreach ($colors as $color) : ?>
            <div class="color-bin">
                <div class="color" style="background-color: <?= $color['hex'] ?>;">
                    <?= $color['name'] ?>
                </div>
                <a class="red" href="<?= URL ?>delete.php?id=<?= $color['id'] ?>">Delete</a>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?php
require __DIR__ . '/bottom.php';
