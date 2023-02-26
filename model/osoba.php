<?php

class Osoba{
    public $osobaID;
    public $ime;
    public $prezime;
    public $tipkorisnikaID;

    public function __construct($osobaID=null, $ime=null, $prezime=null, $tipkorisnikaID=null)
    {
        $this->osobaID = $osobaID;
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->tipkorisnikaID = $tipkorisnikaID;
    }

    public static function add($ime, $prezime, $tipkorisnika_id, mysqli $conn){
        $q = "INSERT INTO osoba(ime, prezime, tipkorisnika_id) 
                VALUES ('$ime', '$prezime', $tipkorisnika_id)";
        return $conn->query($q);
    }

    public static function getAll(mysqli $conn){
        $q = "SELECT * FROM osoba";
        return $conn->query($q);
    }

    /*public static function getAll(mysqli $conn){
        $q = "SELECT * FROM osoba WHERE tipkorisnika_id=$tipkorisnika_id";
        return $conn->query($q);
    }*/

    public static function deleteById($id, mysqli $conn){
        $q = "DELETE FROM osoba WHERE id=$id";
        return $conn->query($q);
    }

    public static function getById($id, mysqli $conn){
        $q = "SELECT id, ime, prezime, tipkorisnika_id
                FROM osoba WHERE id=$id";
        
        $result = $conn->query($q);
        
        $row = $result->fetch_assoc();

        return $row;
    }

    public static function update($id, $ime, $prezime, $tipkorisnika_id, mysqli $conn){
        $q = "UPDATE osoba SET ime='$ime', prezime='$prezime', tipkorisnika_id=$tipkorisnika_id
                WHERE  id=$id";
        return $conn->query($q);
    }

}

?>