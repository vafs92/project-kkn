<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function process()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $model->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            $session->set(['admin_logged_in' => true]);
            return redirect()->to('/admin');
        } else {
            $session->setFlashdata('msg', 'Username atau Password salah');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function registerProcess()
    {
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $password_confirm = $this->request->getVar('password_confirm');

        if ($password !== $password_confirm) {
            session()->setFlashdata('msg', 'Password tidak cocok');
            return redirect()->to('/register');
        }

        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $model->save([
            'username' => $username,
            'password' => $password_hash
        ]);

        session()->setFlashdata('msg', 'Registrasi berhasil, silakan login');
        return redirect()->to('/login');
    }
}
