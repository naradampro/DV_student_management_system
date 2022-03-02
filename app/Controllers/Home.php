<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('main_header');
        echo view('common/dashboard');
        echo view('main_footer');
    }

    public function devforms()
    {
        echo view('main_header');
        echo view('forms/devforms');
        echo view('main_footer');
    }
}
