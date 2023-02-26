<?php

class TipKorisnika{

    public $TipKorisnikaID;
    public $nazivTipKorisnika;


    public function __construct($TipKorisnikaID=null, $nazivTipKorisnika=null)
    {
        $this->TipKorisnikaID = $TipKorisnikaID;
        $this->nazivTipKorisnika = $nazivTipKorisnika;
    }

    public static function add($tipkorisnika, mysqli $conn){   // ovu f/ju add cemo pozvati u controlleru kod dodajTipKorisnika
        $q = "INSERT INTO tipkorisnika(naziv) VALUES ('$tipkorisnika')";
        return $conn->query($q);    // ovo ce se proslediti controlleru koji je i pozvao f-ju i upisace nam se u promenljivu $status
    }

    public static function getByName($tipkorisnika, mysqli $conn){
        $q = "SELECT id FROM TipKorisnika WHERE naziv='$tipkorisnika' LIMIT 1";
        return $conn->query($q)->fetch_column();
    }

    public static function getById($tipkorisnika_id, mysqli $conn){
        $q = "SELECT naziv FROM TipKorisnika WHERE id=$tipkorisnika_id LIMIT 1";
        return $conn->query($q)->fetch_column();
    }
}
?>