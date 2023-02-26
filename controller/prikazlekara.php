<?php

// klikom na dugme da nam se prikazu podaci

if (isset($_POST['submit'])){

require 'dbBroker.php';   // bolje je ovako ukljuciti konekciju sa bazom, jer dobijemo obavestenje i automatski se prkida rad koda


$q = "SELECT ime, prezime FROM `osoba` WHERE tipkorisnika_id = 2";  
// samo se lekari prertaze i prikazu se zato je tip=2 Lekar

$result = mysqli_query($conn, $q);

// prvo da proverimo da li se nesto nalazi u bazi

if(mysqli_num_rows($result) > 0) {            // ako je vece od 0, mi cemo izlistati redove
    while($row=mysqli_fetch_array($result))

    // pretvorili smo sve elemente iz jednog reda, u asocijativni niz i ispisujemo,
    // sve dok ih ima kroz petlju prolazimo
    
    echo " Dr. " . $row['ime'] . " " . $row['prezime'] . " " . "<br><br>";
    
}else{
    echo "Ne postoje podaci u bazi.";
}
}