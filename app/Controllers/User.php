<?php


namespace App\Controllers;


// menyambungkan ke restfull api
use CodeIgniter\RESTful\ResourceController;


class User extends ResourceController
{
    // buat resp api
    protected $modelName = "App\Models\UserModel";

    protected $format = "json";

    public function index()
    {
        return $this->respond($this->model->findAll());
    }
}
