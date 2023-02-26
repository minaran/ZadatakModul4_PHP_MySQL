<?php

require "../dbBroker.php";
require "../model/osoba.php";

if(isset($_POST['id'])){
    $status = Osoba::getById($_POST['id'], $conn);
    if($status){
        echo json_encode($status);
    } else{
        echo $status;
        echo "Failed";
    }
}

?>