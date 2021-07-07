<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Auth extends BaseController
{

    protected $requestData, $authModel;

    public function __construct()
    {
        $this->requestData = service("request");

        $this->authModel = new LoginModel();
    }

    public function login()
    {

        return view("login");
    }


    public function verification()
    {
        $username = $this->requestData->getVar("Username");
        $password = $this->requestData->getVar("Password");

        // cek data
        $cek = $this->authModel->cek($username);


        if (!empty($cek)) {

            // cek password
            if ($cek['password'] === $password) {

                // set session data user
                $param = [
                    "username" => $cek['username'],
                    "id" => $cek['id']
                ];

                session()->set($param);
                return redirect()->to(base_url('/Dashboard'));
            } else {
                // set pesan error
                session()->setFlashdata("login", "Password Anda Salah !");
                return redirect()->to(base_url('/Auth/login'));
            }
        } else {

            // set pesan error
            session()->setFlashdata("login", "Username Anda Salah !");
            return redirect()->to(base_url('/Auth/login'));
        }
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to(base_url('/Auth/login'));
    }
}
