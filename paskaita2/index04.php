<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    $cities4 = array('Tokijas', 'Vasingtonas','Maskva', 'Londonas');
    print_r($cities4);
      ?>

        <ul>
        <?php
        for ($i=0; $i < count($cities4); $i++) {
            echo "<li>$cities4[$i]</li>";
        }
            ?>
        </ul>

        <ul><?php
        foreach ($cities4 as $miestas) {
            echo "<li>$miestas</li>";
        }
            ?>
        </ul>



</body>
</html>
