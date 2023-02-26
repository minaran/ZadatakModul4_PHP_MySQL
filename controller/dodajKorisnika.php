<?php

require "../dbBroker.php";
require "../model/osoba.php";
require "../model/tipkorisnika.php";

if(isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['tipkorisnika']))
{
    $tipkorisnika_id = TipKorisnika::getByName($_POST['tipkorisnika'], $conn);
    
    $status = Osoba::add($_POST['ime'], $_POST['prezime'], $tipkorisnika_id, $conn);  // saljemo podatke modelu da izvrsi upit
    if($status){
        echo 'Success';
    } else{
        echo $status;
        echo "Failed";
    }
}

?>