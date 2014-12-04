<?php

class Model_Product {
	
private $db;

	public function __construct() 
	{ 
		$this->db = new Helper_Database();
	}

	public function getAllProducts()
	{
		return $this->db->query("SELECT * from products");
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

}