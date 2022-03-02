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

    echo view('main_header', $data);
    echo view('student/overview', $data);
    echo view('main_footer', $data);
}

public function view($sudent_index_number = null)
{
    $model = model(StudentModel::class);

    $data['student'] = $model->getStudentDetails($sudent_index_number);

    if (empty($data['student'])) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the student item: ' . $sudent_index_number);
    }

    $data['sudent_index_number'] = $data['student']['sudent_index_number'];

    echo view('main_header', $data);
    echo view('student/view', $data);
    echo view('main_footer', $data);
}

public function create()
{
    $model = model(StudentModel::class);

    if ($this->request->getMethod() === 'post' && $this->validate([
        'first_name' => 'required|min_length[3]|max_length[50]',
        'middle_name'  => 'required|min_length[3]|max_length[50]',
        'last_name' => 'required|min_length[3]|max_length[50]',
        'student_index_number' => 'required',
        'date_of_addmission' => 'required',
        'student_insurance_number',
        'student_identification_number' => 'required',
        'contact_number' => 'required',
        'birthday' => 'required',
        'address' => 'required',
        'gender',
        'race_id' => 'required',
        'religion_id' => 'required',
        'gnd_id' => 'required',
        'class_id' => 'required',
        'medium_id' => 'required',

    ])) {
        $model->save([
            'first_name' => $this->request->getPost('first_name'), 
            'middle_name'  => $this->request->getPost('middle_name'),
            'last_name' => $this->request->getPost('last_name'),
            'student_index_number' => $this->request->getPost('student_index_number'),
            'date_of_addmission' => $this->request->getPost('date_of_addmission'),
            'student_insurance_number' => $this->request->getPost('student_insurance_number'),
            'student_identification_number' => $this->request->getPost('student_identification_number'),
            'contact_number' => $this->request->getPost('contact_number'),
            'birthday' => $this->request->getPost('birthday'),
            'address' => $this->request->getPost('address'),
            'gender' => $this->request->getPost('gender'),
            'race_id' => $this->request->getPost('race_id'),
            'religion_id' => $this->request->getPost('religion_id'),
            'gnd_id' => $this->request->getPost('gnd_id'),
            'class_id' => $this->request->getPost('class_id'),
            'medium_id' => $this->request->getPost('medium_id'),
        ]);

        echo view('student/success');
    } else {
        echo view('main_header');
        echo view('student/student_registration_form');
        echo view('main_footer');
    }
}

}