<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1uzduotis</title>
</head>

<body>
    <?php
    function daugyba($num1, $num2) {
        $rezultatas = ($num1 * $num2);
        return $rezultatas;
    }
    $atsakymas = daugyba(5,10);
    echo "atsakymas: $atsakymas";
    ?>

</body>
</html>
