<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin extends Model
{
    protected $table = "admin";
    protected $primaryKey = "id";
    protected $allowedFields = ['username', 'password'];

    public function getAdminByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
