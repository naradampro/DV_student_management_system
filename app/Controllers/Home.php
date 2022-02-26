<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('dashboard_header');
        echo view('forms/student_registration_form');
        echo view('dashboard_footer');
    }
}
