<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class NoAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('isLogged')) {
           // return redirect()->to('http://localhost/fil_rouge_eshop/public/C_Profile');
            return redirect()->to('https://razafiasimanana.needemand.com/nestiEshop/public/C_Profile');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
