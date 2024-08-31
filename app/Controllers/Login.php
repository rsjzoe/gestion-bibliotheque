<?php

namespace App\Controllers;

use App\Models\Admin;

class Login extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function login()
    {
        $model = new Admin();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');


        // Récupérer les données de l'utilisateur à partir de la base de données
        $admin = $model->getAdminByUsername($username);

        if ($admin) {
            if (password_verify($password, $admin['password'])) {
                session()->set('isLoggedIn', true);
                return redirect()->to('/');
            } else {
                return redirect()->back()->with('errorLogin', 'Mot de passe incorrect');
            }
        } else {
            return redirect()->back()->with('errorLogin', "Nom d'utilisateur incorrect.");
        }
    }
}
