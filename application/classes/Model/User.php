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

	public function CreateUser($username, $email, $password)
	{
		return $this->db->execute("INSERT INTO users (username, email, password) VALUES (?, ?, ?)", array($username, $email, $password));
	}

}