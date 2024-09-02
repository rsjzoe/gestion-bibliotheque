<?php

namespace App\Controllers;

use App\Models\Admin;

class Inscription extends BaseController
{
    public function index(): string
    {
        return view('inscription');
    }
    public function create()
    {
        $model = new Admin();
        $username = $this->request->getPost('username');
        $existingUser = $model->getAdminByUsername($username);

        if ($existingUser) {
            return redirect()->back()->with('errorInscription', "Le nom d'utilisateur est déjà pris.");
        }
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)

        ];
        $model->insert($data);
        return redirect()->to('/');
    }
}
