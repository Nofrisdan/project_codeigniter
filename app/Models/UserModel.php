<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    protected $table = "User";
    protected $allowedFields = ["nama", "nip", "alamat"];

    protected $returnType = "App\Entities\User";
}
