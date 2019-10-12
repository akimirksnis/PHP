<?php
$ceu=array("Italija"=>"Roma","Liuksemburgas"=>"Liuksemburgas","Belgija"=>"Briuselis","Danija"=>"Kopenhaga","Suomija"=>"Helsinkis","Prancuzija"=>"Paryzius","Slovakija"=>"Bratislava","Slovenija"=>"Liublijana","Vokietija"=>"Berlynas","Graikija"=>"Atenai","Airija"=>"Dublinas","Nyderlandai"=>"Amsterdamas","Portugalija"=>"Lisabona","Ispanija"=>"Madridas","Svedija"=>"Stokholmas","Didzioji Britanija"=>"Londonas","Kipras"=>"Nikosija","Lietuva"=>"Vilnius","Cekija"=>"Praha","Estija"=>"Talinas","Vengrija"=>"Budapestas","Latvija"=>"Ryga","Malta"=>"Valeta","Austrija"=>"Viena","Bulgarija"=>"Sofija","Rumunija"=>"Bukarestas","Lenkija"=>"Varsuva");
?>
<h2>Sostines</h2>
<?php
foreach ($ceu as $sostine) {
    echo "<li>$sostine</li></br>";
}
?>
<h2>Valstybes ir sostines</h2>
<?php
foreach ($ceu as $valstybe=>$sostine){
    echo "$valstybe - $sostine </br>";
}
?>
