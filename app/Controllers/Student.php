<?php

namespace App\Controllers;

use App\Models\StudentModel;

class Student extends BaseController
{
    public function index()
{
    $model = model(StudentModel::class);

    $data = [
        'student'  => $model->getStudentDetails(),
        'title' => 'Student Details',
    ];

    echo view('dashboard_header', $data);
    echo view('student/overview', $data);
    echo view('dashboard_footer', $data);
}

public function view($sudent_index_number = null)
{
    $model = model(StudentModel::class);

    $data['student'] = $model->getStudentDetails($sudent_index_number);

    if (empty($data['student'])) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the student item: ' . $sudent_index_number);
    }

    $data['sudent_index_number'] = $data['student']['sudent_index_number'];

    echo view('dashboard_header', $data);
    echo view('student/view', $data);
    echo view('dashboard_footer', $data);
}

// public function create()
// {
//     $model = model(NewsModel::class);

//     if ($this->request->getMethod() === 'post' && $this->validate([
//         'title' => 'required|min_length[3]|max_length[255]',
//         'body'  => 'required',
//     ])) {
//         $model->save([
//             'title' => $this->request->getPost('title'),
//             'sudent_index_number$sudent_index_number'  => url_title($this->request->getPost('title'), '-', true),
//             'body'  => $this->request->getPost('body'),
//         ]);

//         echo view('news/success');
//     } else {
//         echo view('templates/header', ['title' => 'Create a news item']);
//         echo view('news/create');
//         echo view('templates/footer');
//     }
// }

}