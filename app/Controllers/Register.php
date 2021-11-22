<?php
namespace App\Controllers;

use App\Models\M_Login;

class Register extends BaseController
{
    public function index()
        {

            $data = [
                'judul' => 'Register C-Fruit',
            ];

            
            echo view('auth/register',$data);

        }
}