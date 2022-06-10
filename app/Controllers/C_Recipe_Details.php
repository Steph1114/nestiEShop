<?php

namespace App\Controllers;

class C_Recipe_Details extends BaseController
{
    public function index()
    {
        echo view('Views/common/V_Header2.php',);
        echo view('Views/common/V_Nav.php',);
        echo view('Views/content/V_Recipe_Details.php');
        echo view('Views/common/V_Footer.php');
    }


}