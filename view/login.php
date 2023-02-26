<h3> Aplikacija za praćenje zakazanih termina pregleda pacijenata "AppMedik"</h3>
<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="../css/style.css"> 

<form action="" method="post">
<h2>LOGIN</h2>
    <label>E-mail: </label>
    <input type="text" placeholder="e-mail" id="email" name="email"><br>
    <label>Password: </label>
    <input type="text" placeholder="password" id="sifra" name="sifra"><br>

    <input type="submit" name="login" id="login" value="Loguj se">
</form>

<?php

include "../podaci.php";   // podaci za logovanje korisnika su ostali iz zadatka 3. kada nije
                           // bilo dozvoljeno koristi povezivanje na bazu podataka

if(isset($_SESSION["logovani_korisnik"])){
    header("Location:../");
} else {
    if (isset($_POST["login"])) {
        if ($_POST["email"] == "" || $_POST["sifra"] == "") {
            echo "Morate uneti važeći email i password!!!";
        } else {
            foreach ($_SESSION["korisnici"] as $korisnik) {
                if ($korisnik->getEmail() == $_POST["email"] && $korisnik->getSifra() == $_POST["sifra"]) {
                    $_SESSION["logovani_korisnik"] = $korisnik;
                    echo "Ulogovani korisnik: " . $_SESSION["logovani_korisnik"]->getIme();
                    header("Location:../");
                    break;
                } else {
                    echo "Korisnik ne postoji";
                }
            }
        }
    }
}
?>