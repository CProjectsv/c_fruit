<?php
namespace App\Controllers;

use App\Models\M_Product;

class Login extends BaseController
{
    public function index()
        {

            $data = [
                'judul' => 'Login C-Fruit',
            ];

            
            echo view('templates/v_header',$data);
            echo view('Login/index');

        }
}