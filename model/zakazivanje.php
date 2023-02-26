<?php

class Zakazivanje{

public $id;
public $firstName;
public $lastName;
public $email;
public $phone;
public $date;
public $time;


public function __construct($id=null, $firstName=null, $lastName=null, $email=null, $phone=null, $date=null, $time=null)
{
$this->id = $id;
$this->firstName = $firstName;
$this->lastName = $lastName;
$this->email = $email;
$this->phone = $phone;
$this->date = $date;
$this->time = $time;
}


public function getid() {
    return $this->id;
}
    public function setid($id) {
    $this->id = $id;
    return $this;
}

	public function getFirstName() {
		return $this->firstName;
	}
		public function setFirstName($firstName) {
		$this->firstName = $firstName;
		return $this;
	}
	
	public function getLastName() {
		return $this->lastName;
	}
		public function setLastName($lastName) {
		$this->lastName = $lastName;
		return $this;
	}

	public function getPhone() {
		return $this->phone;
	}
	public function setPhone($phone) {
		$this->phone = $phone;
		return $this;
	}

	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->email = $email;
		return $this;
	}

	public function getDate() {
		return $this->date;
	}
		public function setDate($date) {
		$this->date = $date;
		return $this;
	}

	public function getTime() {
		return $this->time;
	}
		public function setTime($time) {
		$this->time = $time;
		return $this;
	}

	public static function add($firstName, $lastName, $email, $phone, $date, $time, mysqli $conn){
        $q = "INSERT INTO zakazivanje(firstName, lastName, email, phone, date, time) 
                VALUES ('$firstName', '$lastName', '$email', '$phone', '$date', '$time')";
        return $conn->query($q);
		}
	public static function getAll(mysqli $conn){
		$q = "SELECT * FROM zakazivanje";
		return $conn->query($q);
		}
}
?>


