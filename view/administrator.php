<body style="background: linear-gradient(to top, #99ccff 0%, #00ccff 100%);;">
    <div id="stampa">
        <button class="button" onclick="window.location.href='utility/racun.php'">Obračun plaćanja</button>   

<h4>Ovde možete pristupiti i uređivati listu korisnika:</h4>


<?php
require "dbBroker.php";
require "model/osoba.php";
require "model/tipkorisnika.php";

require "model/zakazivanje.php";


$result = Osoba::getAll($conn);

if(!$result){
    echo "Greska kod upita";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
</head>

<body>

<!-- Dugmici za CRUD operacije -->
    <div class="buttons">
        <div>
            <button class="dugme" id="btnDodaj" style="border: 4px solid #115599" role="button" data-toggle="modal" data-target="#myModal">1. Dodaj korisnika</button>
        </div>
        <div>
            <button class="dugme" id="btnIzmeni" style="border: 4px solid #115599" role="button" data-toggle="modal" data-target="#izmeniModal">2. Ažuriraj korisnika</button>
        </div>
        <div>
            <button class="dugme" id="btnObrisi" style="border: 4px solid #115599" role="button" >3. Obrisi korisnika</button>
    </div><br>


    <div class="buttons">
    <div>
        <button class="dugme" id="btnZakazivanje" style="border: 4px solid #225566" role="button" data-toggle="modal" data-target="#modalZakazivanje">Zakazivanje pregleda</button>
    </div>
    <div>
        <button class="dugme" id="btnDodajTipKorisnika" style="border: 4px solid #225566" role="button" data-toggle="modal" data-target="#modalTipKorisnika">Dodavanje: Tip korisnika</button>
        </div><br>
    </div>



    <!-- Tabela sa korisnicima (clasa osoba) -->
    <div class="main">
        <table class="table" id="tabela">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Tip korisnika</th>
                    <th>Izaberite korisnika</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                    if($result->num_rows == 0){
                    ?>
                    <h3>Trenutno nema unetih korisnika</h3>
                    <?php
                    }else{
                    while($red = $result->fetch_array()){
                    ?>
                <tr>
                    <td><?php echo $red['id'] ?></td>
                    <td><?php echo $red['ime'] ?></td>
                    <td><?php echo $red['prezime'] ?></td>
                    <td>
                        <?php
                        $tipkorisnika = TipKorisnika::getById($red['tipkorisnika_id'], $conn);
                        echo $tipkorisnika;
                        ?>
                    </td>
                        <td class="celija">
                            <label class="radio-btn">
                                <!-- dodati id osobe korisnika -->
                                <input type="radio" class="radio" name="checked-donut" value=<?php echo $red['id'] ?> >
                                <span class="checkmark"></span>
                            </label>
                        </td>
                </tr>
                <?php
                }
                }
                ?>
            </tbody>
        </table>
    </div>
    

    <!-- Forma za unos Korisnika (Osoba) -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border: 4px solid #653428;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container tim-form">
                        
                        <form action="#" method="post" id="dodajForm">
                            <h3 id="naslov" style="color: black">Dodavanje korisnika</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" style="border: 1px solid #653428" name="ime" class="form-control" placeholder="Ime *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" style="border: 1px solid #653428" name="prezime" class="form-control" placeholder="Prezime *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" style="border: 1px solid #653428" name="tipkorisnika" class="form-control" placeholder="TipKorisnika *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <button id="btnDodaj" type="submit" class="btn btn-success btn-block" style="background-color: #653428; border: 1px solid black"><i class="glyphicon glyphicon-plus"></i>Dodaj korisnika
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" style="color: white; background-color: #653428; border: 1px solid black" data-dismiss="modal">Zatvori</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Forma za unos TipKorisika -->
    <div class="modal fade" id="modalTipKorisnika" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border: 4px solid #653428;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container tim-form">
                        <form action="#" method="post" id="dodajTipKorisnika">
                            <h3 id="naslov" style="color: black">Dodavanje tipa korisnika</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" style="border: 1px solid #653428" name="tipkorisnika" class="form-control" placeholder="TipKorisnika *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <button id="btnDodajTipKorisnika" type="submit" class="btn btn-success btn-block" style="background-color: #653428; border: 1px solid black"><i class="glyphicon glyphicon-plus"></i>Dodaj tip korisnika
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" style="color: white; background-color: #653428; border: 1px solid black" data-dismiss="modal">Zatvori</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Forma za azuriranje -->
    <div class="modal fade" id="izmeniModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border: 4px solid #653428;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container tim-form">
                        <form action="#" method="post" id="izmeniForm">
                            <h3 id="naslov" style="color: black">Izmeni korisnika</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="id" type="text" name="id" class="form-control" placeholder="ID korisnika *" value="" readonly />
                                    </div>
                                    <div class="form-group">
                                        <input id="ime" type="ime" style="border: 1px solid #653428" name="ime" class="form-control" placeholder="Ime *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input id="prezime" type="prezime" style="border: 1px solid #653428" name="prezime" class="form-control" placeholder="Prezime *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input id="tipkorisnika" type="tipkorisnika" style="border: 1px solid #653428" name="tipkorisnika" class="form-control" placeholder="TipKorisnika *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <button id="btnIzmeni" type="submit" class="btn btn-success btn-block" style="background-color: #653428; border: 1px solid black"><i class="glyphicon glyphicon-plus"></i>Izmeni korisnika
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" style="color: white; background-color: #653400; border: 1px solid black" data-dismiss="modal">Zatvori</button>
                </div>
            </div>
        </div>
    </div>


    <hr>


    <!-- Forma za zakazivanje -->
    <div class="modal fade" id="modalZakazivanje" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border: 4px solid #653428;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container tim-form">
                        <form action="#" method="post" id="dodajZakazi">
                            <h3 id="naslov" style="color: black">Zakazivanje</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <input type="text" style="border: 1px solid #653428" name="firstName" class="form-control" placeholder="Ime *" value="" />   </div>
                                    <div class="form-group">
                                    <input type="text" style="border: 1px solid #653428" name="lastName" class="form-control" placeholder="Prezime *" value="" />   </div>
                                    <div class="form-group">
                                    <input type="email" style="border: 1px solid #653428" name="email" class="form-control" placeholder="Email*" value="" />   </div>
                                    <div class="form-group">
                                    <input type="phone" style="border: 1px solid #653428" name="phone" class="form-control" placeholder="Telefon *" value="" />   </div>
                                    <div class="form-group">
                                    <input type="date" style="border: 1px solid #653428" name="date" class="form-control" placeholder="Datum *" value="" />   </div>
                                    <div class="form-group">
                                    <input type="time" style="border: 1px solid #653428" name="time" class="form-control" placeholder="Vreme *" value="" />   </div>
                                
                                    <div class="form-group">
                                        <button id="btnDodajZakazivanje" type="submit" class="btn btn-success btn-block" style="background-color: #653428; border: 1px solid black"><i class="glyphicon glyphicon-plus"></i>Zakazivanje
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" style="color: white; background-color: #653428; border: 1px solid black" data-dismiss="modal">Zatvori</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>