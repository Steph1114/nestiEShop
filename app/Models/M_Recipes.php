<?php

namespace App\Models;

use CodeIgniter\Model;
$db = \Config\Database::connect();



class M_Recipes extends Model
{
    protected $table = 'view_recipes';
    protected $allowedFields = ['id', 'name', 'difficulty', 'duration', 'number', 'users_nickname'];


    public function getAllRecipes()
    {
        $db = \Config\Database::connect();
        $query   = $db->query('SELECT * FROM view_recipes');
        $results = $query->getResult();      
        return $results;
    }

    public function getOneRecipe($id)
    {
        $db = \Config\Database::connect();
        $query   = $db->query("SELECT * FROM view_recipes WHERE id= $id" );
        $results = $query->getResult();      
        return $results;
    }

    public function getParagraphRecipe($id)
{
    $db = \Config\Database::connect();
    $query   = $db->query("CALL get_paragraph_recipe_by_id($id)" );
    $results = $query->getResult();      
    return $results;

}


public function getIngredientRecipe($id)
{
    $db = \Config\Database::connect();
    $query   = $db->query("CALL get_product_for_recipe_by_id($id)" );
    $results = $query->getResult();      
    return $results;

}


}