<?php
namespace App\Controllers;

use App\Models\M_Login;

class Login extends BaseController
{
    public function index()
        {

            $data = [
                'judul' => 'Login C-Fruit',
            ];

            
            echo view('auth/login',$data);

        }
}