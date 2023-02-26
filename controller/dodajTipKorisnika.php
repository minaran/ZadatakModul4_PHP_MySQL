<?php

// uzima se konekcija ka bazi, i poziva se odgovarajuca f/ja za dodavanje TipaKorisnika, 
// a SQL upit ce se nalaziti u odgovarajucem modelu tipkorisnika

require "../dbBroker.php";
require "../model/tipkorisnika.php";

if(isset($_POST['tipkorisnika'])){  
    // citamo iz forme (koristi POST zahtev) da li postoji polje tipkorisnika u superglobalnoj promenljivoj
    
    
    $status = TipKorisnika::add($_POST['tipkorisnika'], $conn);
    if($status){                        // provericemo ako je vratio neku informaciju
        echo "Success";
    } else{
        echo $status;                   // ako nije, ispisacemo da vidimo sta je
        echo "Failed";
    }
}

?>