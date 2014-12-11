<?php

class Model_User {
	
private $db;

	public function __construct() 
	{ 
		$this->db = new Helper_Database();
	}

	public function login($username)
	{
		return $this->db->queryOne("SELECT * from users WHERE username = ? ", array($username));
	}

	public function createUser($username, $email, $password)
	{
		return $this->db->execute("INSERT INTO users (username, email, password) VALUES (?, ?, ?)", array($username, $email, $password));
	}

    public function createAddress($idUser, $firstname, $lastname, $address, $address_complement, $city, $zipcode, $country)
    {
        return $this->db->execute("INSERT INTO addresses (idUser, first_name, last_name, address, address_complement, city, zipcode, country) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", array($idUser, $firstname, $lastname, $address, $address_complement, $city, $zipcode, $country));
    }

    public function getAddress($idUser)
    {
        return $this->db->query("SELECT * FROM addresses WHERE idUser = ?", array($idUser));
    }
}