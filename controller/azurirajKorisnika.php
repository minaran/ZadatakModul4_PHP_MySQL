<?php

require "../dbBroker.php";
require "../model/osoba.php";

if(isset($_POST['id']) && isset($_POST['ime']) &&
isset($_POST['prezime']) && isset($_POST['tipkorisnika'])){
    $status = Osoba::update($_POST['id'], $_POST['ime'],
    $_POST['prezime'], $_POST['tipkorisnika'], $conn);
    if($status){
        echo 'Success';
    } else{
        echo $status;
        echo "Failed";
    }
}

?>