<?php

require "../dbBroker.php";
require "../model/osoba.php";

if(isset($_POST['id'])){
    $status = Osoba::deleteById($_POST['id'], $conn);
    if($status){
        echo 'Success';
    } else{
        echo $status;
        echo "Failed";
    }
}

?>