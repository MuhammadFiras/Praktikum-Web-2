<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
        $data = [
            'title'    => 'Login',
            'username' => '',
            'email'    => '',
            'password' => '',
        ];
        return view('vw_login', $data);
    }

    public function login()
    {
        // Capture form inputs
        $username = $this->request->getPost('username');
        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Basic validation
        if (!$this->validateData(
            ['username' => $username, 'email' => $email, 'password' => $password],
            [
                'username' => 'required',
                'email'    => 'required|valid_email',
                'password' => 'required|min_length[8]'
            ]
        )) {
            return redirect()->back()->withInput()->with('error', 'Validation failed');
        }

        // Find user by username and email
        $user = $this->model
            ->where('username', $username)
            ->where('email', $email)
            ->first();

        if (!$user) {
            session()->setFlashdata('error', 'Username atau email salah.');
            return redirect()->back()->withInput();
        }

        // Password verification
        if (!password_verify($password, $user['password'])) {
            session()->setFlashdata('error', 'Password salah.');
            return redirect()->back()->withInput();
        }

        // Auth success
        session()->set([
            'username' => $user['username'],
            'email'    => $user['email'],
            'logged_in' => TRUE
        ]);

        return redirect()->to(base_url('/'));
    }

    public function isLoggedIn()
    {
        return session()->get('logged_in') === TRUE;
    }
}
