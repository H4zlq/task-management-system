<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('layout/header')
            . view('login')
            . view('layout/footer');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }

    public function register()
    {
        return view('layout/header')
            . view('register')
            . view('layout/footer');
    }

    public function profile()
    {
        $user = session()->get('user');
        $name = $user['name'];
        $username = $user['username'];
        $email = $user['email'];

        $data = [
            'name' => $name,
            'username' => $username,
            'email' => $email,
        ];

        return view('layout/header', [
            'route' => 'profile',
        ])
            . view('profile', $data)
            . view('layout/footer');
    }

    public function handle_login()
    {
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username === '' || $password === '') {
            return redirect()->to('/login')->with('error', 'Please fill in all fields');
        }

        $user = $userModel->getUserByUsername($username);

        if (!$user) {
            return redirect()->to('/login')->with('error', 'User does not exist');
        }

        $passwordCheck = password_verify($password, $user['password']);

        if (!$passwordCheck) {
            return redirect()->to('/login')->with('error', 'Invalid password');
        }

        session()->set('user', $user);

        return redirect()->to('/dashboard');
    }

    public function handle_register()
    {
        $userModel = new UserModel();

        $name = $this->request->getPost('name');
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if ($name === '' || $username === '' || $email === '' || $password === '') {
            return redirect()->to('/register')->with('error', 'Please fill in all fields');
        }

        $data = [
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];

        $existingUser = $userModel->getUserByUsername($username);

        if ($existingUser) {
            return redirect()->to('/register')->with('error', 'Usename already exists');
        }

        $userModel->insert($data);

        return redirect()->to('/login')->with('success', 'User registered successfully');
    }
}
