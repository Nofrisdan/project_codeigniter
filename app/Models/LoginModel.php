<?php

namespace App\Models;

use CodeIgniter\Model;

use function PHPSTORM_META\type;

class LoginModel extends Model
{

    protected $table = "admin";
    protected $allowedFields = ['username', 'password'];


    public function cek($username)
    {
        return $this->where("username", $username)->first();
    }
}
