<?php
require "dbBroker.php";
require "model/zakazivanje.php";



$zakazivanje = Zakazivanje::getAll($conn);

if(!$zakazivanje){
    echo "Greska kod upita";
    exit();
}
?>
<br><br><br>
<html>
    <h4>U tabeli mozete videti sve zakazane termine:</h4>
    <div class="main">
        <table bordercolor="black" border="2" width="95%" class="table" id="tabela">
            <thead>
                <tr>
                    <th>R.br.</th>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Email</th>
                    <th>Telefon</th>
                    <th>Datum</th>
                    <th>Vreme</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($zakazivanje->num_rows==0){
                echo "Nema zakazanih termina!";
                
                } else{
                while($red= $zakazivanje->fetch_array()){
                ?>
                    <tr>
                        <td><?php echo $red['id'] ?></td>
                        <td><?php echo $red['firstName'] ?></td>
                        <td><?php echo $red['lastName'] ?></td>
                        <td><?php echo $red['email'] ?></td>
                        <td><?php echo $red['phone'] ?></td>
                        <td><?php echo $red['date'] ?></td>
                        <td><?php echo $red['time'] ?></td>
                    </tr>

                <?php
                }
                } ?>

            </tbody>
        </table>
    </div>
    <body>  
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/main.js" ></script>
    </body>
</html>
