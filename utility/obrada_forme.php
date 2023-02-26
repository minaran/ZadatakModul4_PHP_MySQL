<body style="background-color: rgb(2,222,222);">

<?php
$lekar = $_POST['lekar'];
    function stampajLekar($lekar){
    echo "Zakazan Vam je termin pregleda kod lekara: " . $lekar . "<br>"; }
stampajLekar($lekar);
?>

<br><br>

<?php
$datum = $_POST['datum'];
    function stampajDatum($datum){
    echo "Za datum: " . $datum . "<br>"; }
stampajDatum($datum);
?>

<br><br>

<?php
$vreme = $_POST['vreme'];
    function stampajVreme($vreme){
    echo "U terminu od: " . $vreme . "<br>"; }
stampajVreme($vreme);
?>

<br><br>

<button class="button" onclick="history.back(-1)"> <<< Vrati se nazad </button>

</body>