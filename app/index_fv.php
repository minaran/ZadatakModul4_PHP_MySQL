<body style="background: linear-gradient(to bottom right, #33ccff 0%, #cc66ff 100%);">

<?php
use davanjeTerapije\Lekovi;
use davanjeTerapije\FizikalneVezbe\Terapija;
include 'namespace.php';


$vezbe = new Terapija();
$vezbe->createTerapija('Vezbe za ruke');
$vezbe->createTerapija('Vezbe za ramena');
$vezbe->createTerapija('Diklofen 5mg');

echo "<br><br> Preporučene su fizikalne vežbe: ";
echo "<br><br>";
print_r($vezbe->getFizikalneVezbe());
?>

<br><br><button class="button" onclick="history.back(-1)"> <<< Vrati se nazad </button>
