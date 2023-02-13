<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <h1><?=$h1?></h1>

    <?php

  
    ?>
    <ul>
        <?php foreach($db as $rows):?>
            <li><?= $rows["name"] ?></li>
            <li><?= $rows["price"] ?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>

<?php

// print_r(pathinfo(__FILE__)) ;