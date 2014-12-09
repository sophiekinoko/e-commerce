<?php

class Model_Product {
	
private $db;

	public function __construct() 
	{ 
		$this->db = new Helper_Database();
	}

	public function getAllProducts()
	{
		return $this->db->query("SELECT * from products WHERE visible=1");
	}

	public function getCategories()
	{
		return $this->db->query("SELECT category from products GROUP BY category ");
	}

    public function getCategoryProducts($category)
    {
        return $this->db->query("SELECT * from products WHERE category=? ", array($category));
    }

    public function getProduct($id)
    {
        return $this->db->queryOne("SELECT * from products WHERE id=?", array($id));
    }

    public function nameCommand()
    {
        return $this->db->execute("INSERT INTO ids_command (pretext) VALUES ('ok')");
    }

    public function setCommand($id, $idUser, $idProduct, $quantity, $address)
    {
        $this->db->execute("INSERT INTO commands (id, idUser, idProduct, quantity, idAddress) VALUES (?, ?, ?, ?, ?)", array($id, $idUser, $idProduct, $quantity, $address));
    }

    public function toggleProduct($visible, $id)
    {
        return $this->db->execute("UPDATE products SET visible=? WHERE id=?", array($visible, $id));
    }

    public function addProduct($name, $description, $price, $category, $img, $visible)
    {
        $this->db->execute("INSERT INTO products
        (name, description, price, category, img, visible) VALUES
        (?, ?, ?, ?, ?, ?)", array($name, $description, $price, $category, $img, $visible));
    }

}