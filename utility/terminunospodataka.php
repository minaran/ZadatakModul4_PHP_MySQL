<body style="background: linear-gradient(to top, #66ccff 0%, #33cccc 100%);">

<form name="unos_podataka" action="obrada_forme.php" method="POST">
    
    <label> Unesite ime i prezime lekara: </label>
    <input type="text" name="lekar">
    <br><br>

    <label> Unesite datum: </label>
    <input type="text" name="datum"> 
    <br><br>
    
    <label> Unesite vreme: </label>
    <input type="text" name="vreme">
    <br><br>
    
    <input type="submit" value="Prosledi">
    
</form>

<br><br><button class="button" onclick="history.back(-1)"> <<< Vrati se nazad </button>
