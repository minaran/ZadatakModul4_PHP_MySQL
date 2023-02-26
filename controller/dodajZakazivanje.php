<?php
require "../dbBroker.php";
require "../model/zakazivanje.php";


if(isset($_POST['firstName']) 
&& isset($_POST['lastName']) 
&& isset($_POST['email'])   
&& isset($_POST['phone']) 
&& isset($_POST['date']) 
&& isset($_POST['time'])){

// saljem podatke u model fj-add classe Zakazivanje, da izvrsi upisivanje u bazu
    $status = Zakazivanje::add($_POST['firstName'], 
    $_POST['lastName'], 
    $_POST['email'], 
    $_POST['phone'], 
    $_POST['date'], 
    $_POST['time'], 
    $conn);                             
    
    if($status){
        echo 'Success';
        
    } else{
        echo $status;
        echo "Failed";
    }
}

?>


    
    

    
    





?>