<?php

namespace App\Controllers;

class C_Profile extends BaseController
{
    public function index()
    {
        echo view('Views/common/V_Header.php',);
        echo view('Views/common/V_Nav.php',);
        echo view('Views/content/V_Profile.php');
        echo view('Views/common/V_Footer.php');
    }
}