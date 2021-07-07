<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    protected $requestData;

    public function __construct()
    {
        $this->requestData = service("request");
    }

    public function index()
    {

        $data = [
            "title" => "Belajar Rest Api"
        ];


        return view("Myweb/index", $data);
    }

    public function tesBlog()
    {
        return view("Dashboard");
    }
}
