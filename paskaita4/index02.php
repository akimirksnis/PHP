<?php
class zmogus {
    public $vardas;

    public $pasisveikinimas = 'Sveikas';

public function labas() {
    return $this -> vardas;
}
}
$Haris_Poteris = new zmogus();
$Valdas_Adamkus = new zmogus();

$Haris_Poteris -> vardas = "Haris Poteris <br>";
$Valdas_Adamkus -> vardas = " Valdas Adamkus";

echo $Haris_Poteris -> labas ();
echo $Valdas_Adamkus -> labas ();
