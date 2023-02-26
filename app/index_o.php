<body style="background: linear-gradient(to bottom, #33ccff 0%, #cc66ff 100%);">

<?php
use davanjeTerapije\Lekovi as lek;
use davanjeTerapije\FizikalneVezbe;
include 'namespace.php';


$receptLek = new lek\Terapija();
$receptLek->createTerapija('Hemomicin');
$receptLek->createTerapija('Vitamin D');
$receptLek->createTerapija('B-komplex');

echo "<br><br>Terapija preporučeni lekovi: ";
echo "<br><br>";
print_r($receptLek->getLekovi());
?>

<br><br><button class="button" onclick="history.back(-1)"> <<< Vrati se nazad </button>
