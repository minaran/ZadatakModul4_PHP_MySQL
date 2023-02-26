<body style="background: linear-gradient(to bottom left, #33ccff 0%, #cc66ff 100%);">

<?php
use davanjeTerapije\Lekovi;
use davanjeTerapije\FizikalneVezbe;
include 'namespace.php';


$receptLek = new Lekovi\Terapija();
$receptLek->createTerapija('Antibiotik');
$receptLek->createTerapija('Vitamin D');


echo "<br><br>Terapija preporučeni lekovi: ";
echo "<br><br>";
print_r($receptLek->getLekovi());
?>

<br><br><button class="button" onclick="history.back(-1)"> <<< Vrati se nazad </button>
