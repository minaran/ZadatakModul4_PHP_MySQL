<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <title>Pacijent</title>
</head>
<body style="background: linear-gradient(to top, #66ccff 0%, #669999 100%);">

    <!--klikom na dugme da nam se prikazu podaci o lekarima iz Baze-->
    <div id="main">
    <form action="#" method="POST" >
        <input type="submit" name="submit" id="dugmezaprikaz" value="Pretraga i prikaz lekara:"><br><br>
        <?php
        include "controller/prikazlekara.php";
        ?>
    </form>
    </div>


    <!--kod iz 3. zadatka bez baze, ispisuje unete podatke iz form sa stranice 
        terminunospodataka.php, podatke termina u posebnoj stranici obrada_forme.php-->
    <div id="termin">
        <button class="button" onclick="window.location.href='utility/terminunospodataka.php'">Proverite termin pregleda: </button><br><br>   
    </div>

    <!--kod iz 3. zadatka, tabela sa podacima o rasporedu lekara, fiksno prikazana
        i nije povezana sa Bazom-->

    <table bordercolor="black" border="2" width="85%" cellspacing="3" cellpading="0" >
        <thead>
            <tr> 
                <th rowspan="0" colspan="2" width="15%" bgcolor="lightblue">Vreme termina</th> 
                <th colspan="5" bgcolor="white">Pogledajte raspored lekara po danima u nedelji:</th> 
            </tr> 
            <tr bgcolor="lightblue"> 
                <th width="18%">Ponedeljak / 06.03.2023.</th> 
                <th width="15%">Utorak / 07.03.2023.</th> 
                <th width="15%">Sreda / 08.03.2023.</th> 
                <th width="15%">Četvrtak / 09.03.2023.</th> 
                <th width="15%">Petak / 10.03.2013. </th>
            </tr>
        </thead>
        <tbody align="center" valign="top">
            <tr> 
                <th rowspan="0" width="3%" bgcolor="white"> raspored rada lekara</th> 
                <th>10:00-11:00</th> 
                <td bgcolor="white">Dr Lela Djuric</td> 
                <td bgcolor="white">Dr Lela Djuric</td> 
                <td bgcolor="white">Dr Ana Matic</td> 
                <td bgcolor="white">Dr Ana Matic</td> 
                <td bgcolor="white">Dr Ana Matic</td> 
            </tr> 
            <tr> 
                <th>11:00-12:00</th> 
                <td bgcolor="white">Dr Lela Djuric</td> 
                <td bgcolor="white">Dr Lela Djuric</td> 
                <td bgcolor="white">Dr Ana Matic</td> 
                <td bgcolor="white">Dr Ana Matic</td> 
                <td bgcolor="white">Dr Ana Matic</td>
            </tr>
            <tr> 
                <th>12:00-13:00</th> 
                <td bgcolor="white">Dr Lela Djuric</td> 
                <td bgcolor="white">Dr Ana Matic</td> 
                <td bgcolor="white">Dr Sava Pejic</td> 
                <td bgcolor="white">Dr Sava Pejic</td> 
                <td bgcolor="white">Dr Lela Djuric</td> 
            </tr> 
            <tr> 
                <th>13:00-14:00</th> 
                <td bgcolor="white">Dr Sava Pejic</td> 
                <td bgcolor="white">Dr Ana Matic</td> 
                <td bgcolor="white">Dr Sava Pejic</td> 
                <td bgcolor="white">Dr Sava Pejic</td> 
                <td bgcolor="white">Dr Lela Djuric</td> 
            </tr> 
            <tr> 
                <th>14:00-15:00</th> 
                <td bgcolor="white">Dr Sava Pejic</td> 
                <td bgcolor="white">Dr Ana Matic</td> 
                <td bgcolor="white">Dr Sava Pejic</td> 
                <td bgcolor="white">Dr Sava Pejic</td> 
                <td bgcolor="white">Dr Lela Djuric</td>
            </tr>
        </tbody>    
    </table>
</body>
</html>