<header>
<link rel="stylesheet" type="text/css" href="css/styleLogout.css"> 
    <div id="korisnik_info">
        <h3>
            <?php
            echo $korisnik->getTip().": ";
            echo $korisnik->getIme()." ";
            echo $korisnik->getPrezime();
            ?>
        </h3>
    </div>
    <div id="logout">
        <form action="" method="post">
            <input type="submit" name="logout" id="btn_logout" value="Izloguj se">
        </form>
    </div>
</header>

<?php
    if(isset($_POST["logout"])){
    unset($_SESSION["logovani_korisnik"]);
    header("Location: .");
    }
// header smo inkorporirali kod svih korisnika: administrator, lekar, pacijent
?>