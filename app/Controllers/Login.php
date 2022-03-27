<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function __construct()
    {
        helper('url');
    }
    public function index()
    {
        return view('login');
    }
}
