<?php
$cities = array('Belynas','Roma','Londonas');
$cities[] = 'Tokijas';
print_r($cities);
$cities2 = [
    'tokijas' => 13.6,
    'vasingtonas' => 0.6,
    'maskva' => 11.5];
$cities2['londonas']= 8.6;
print_r($cities2);
?>
<!DOCTYPE html>
<html lang="en">
    <body>
    <ul>
        <li><?php echo $cities[1]; ?></li>
    </ul>
        <ul>
        <li><?php echo "Gyventoju skaicius: 13.6 mln."; ?></li>
        </ul>

</body>
</html>



