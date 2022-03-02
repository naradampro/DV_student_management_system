<?php

namespace App\Controllers;

class Forms extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'student_registration_form')
    {
        if (! is_file(APPPATH . 'Views/forms/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
    
        $data['title'] = ucfirst($page); // Capitalize the first letter
    
        echo view('main_header', $data);
        echo view('forms/' . $page, $data);
        echo view('main_footer', $data);
    }
}