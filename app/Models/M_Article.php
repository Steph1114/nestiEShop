<?php

namespace App\Models;

use CodeIgniter\Model;
$db = \Config\Database::connect();



class M_Article extends Model
{
    protected $table = 'php_products';
    protected $allowedFields = ['Id_php_products', 'products_name'];

    public function getAllIngredients()
    {
        $db = \Config\Database::connect();
        $query   = $db->query('SELECT * FROM php_products');
        $results = $query->getResult();      
        return $results;
    }

    public function getOneIngredients($id)
    {
        $db = \Config\Database::connect();
        $query   = $db->query("SELECT * FROM php_products WHERE id_php_products=$id");
        $results = $query->getResult();      
        return $results;
    }

    
    



}