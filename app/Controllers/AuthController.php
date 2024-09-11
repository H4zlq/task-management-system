<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function login()
    {
        return view('layout/header')
            . view('login')
            . view('layout/footer');
    }

    public function register()
    {
        return view('layout/header')
            . view('register')
            . view('layout/footer');
    }

    public function profile()
    {
        $data = [
            'name' => 'Muhammad Haziq Nur Naim Bin Alias',
            'username' => 'nxim',
            'email' => 'haziqnaim72@gmail.com',
            'password' => '12345678'
        ];

        return view('layout/header')
            . view('profile', $data)
            . view('layout/footer');
    }
}
