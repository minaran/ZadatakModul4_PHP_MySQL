<?php
include "controler/controler.php";
include "podaci.php";
include "model/static.php";

if(!isset($_SESSION["logovani_korisnik"])){
    header("Location: view/login.php");
}else{
    $korisnik = $_SESSION["logovani_korisnik"];
    include "view/header.php";

    if($korisnik->getTip()=="Lekar"){
        include "view/lekari.php";
        exit();
    }else if($korisnik->getTip()=="Pacijent"){
        include "view/pacijenti.php";
        exit();
    }else if($korisnik->getTip()=="Administrator"){
        include "view/administrator.php";
        exit();
    }else{
        echo "Error 404";
        exit();
    }
}
?>