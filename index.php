<?php

include __DIR__ . '/models/products.php';
include __DIR__ . '/models/food.php';
include __DIR__ . '/models/kennel.php';
include __DIR__ . '/models/hygiene.php';
include __DIR__ . '/models/games.php';
include __DIR__ . '/data.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>PET STORE</h1>
    <h3>Choose the best for your pet!</h3>
    <div class="d-flex flex-wrap gap-2 p-3">
        <!-- Singles Cards -->
        <?php 
                foreach ($Products as $Product){
                    ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $Product->image ?>" class="card-img-top" alt="<?= $Product->name ?>">
                        <div class="card-body">
                            <h3><?= $Product->name ?></h3>
                            <div class="card-text"><?= $Product->category ?></div>
                            <div><?= $Product->price ?></div>
                                <div><?php if ($Product instanceof Food){ ?>
                                    <div><?= $Product->getWeight() ?></div>
                                    <div><?= $Product->getExpiry() ?></div>
                                    <?php } else if ($Product instanceof Hygiene){ ?>
                                        <div><?= $Product->getToilet() ?></div>
                                    <?php } else if ($Product instanceof Kennel){ ?>
                                        <div><?= $Product->getKennelDimension() ?></div>
                                    <?php } else if ($Product instanceof Games){ ?>
                                        <div><?= $Product->getMaterial() ?></div>
                                    <?php } ?>
                                </div>
                            </div>
                    </div>
            <?php } ?>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>