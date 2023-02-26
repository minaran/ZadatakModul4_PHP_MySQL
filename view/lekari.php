<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/logoNovi.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lekari</title>
</head>

<body style="background: linear-gradient(to top, #00ccff 0%, #0099cc 100%);">

<?php
echo "<br> U tabeli se nalaze zakazani pregledi i imena pacijenata:";

$pregledi = $_SESSION["pregledi"];
$zakazanipregledi = [];

foreach($pregledi as $pr){
    if($pr->getStatusPregleda()==$korisnik->getStatus()){
       array_push($zakazanipregledi, $pr);
    }
}
Kontroler::prikaziTabelu($zakazanipregledi,["Pacijent", "Datum i vreme","Pregled"]);
?>

<hr>
<div>
<button class="button" onclick="window.location.href='app/index_orl.php'">Određivanje terapije ORL</button>
<button class="button" onclick="window.location.href='app/index_o.php'">Određivanje terapije Oftamolog</button>
<button class="button" onclick="window.location.href='app/index_fv.php'">Određivanje terapije Fizijatar</button> 
</div>
<hr>

<!--klikom na dugme da nam se prikazu podaci o pacijentima iz Baze-->
<div id="main">
    <form action="#" method="POST" >
    <input type="submit" name="submit" id="dugmezaprikaz" value="Spisak pacijenata sortiranih po imenu:"><br><br>
<?php
include "controller/sortirajpacijenta.php";
?>
    </form>
</div>

                                <?php 
                                //prikaz u vidu niza, ostatak koda iz 3. zadatka
                                //foreach($zakazanipregledi as $preg){
                                //echo "<br>";
                                //print_r($preg->konvertujUNiz()); };
                                ?>


<?php
include "potvrdaZakazano.php";
?>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
</body>



</html>