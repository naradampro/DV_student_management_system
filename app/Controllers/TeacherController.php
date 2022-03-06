<?php

namespace App\Controllers;

use App\Models\TeacherModel;

class TeacherController extends BaseController
{
    public function index()
{
    $model = model(TeacherModel::class);

    $data = [
        'teacher'  => $model->getTeacherDetails(),
        'title' => 'Teacher Details',        
    ];

    echo view('main_header', $data);
    echo view('teacher/teacher_overview', $data);
    echo view('main_footer', $data);
}

public function view($teacher_id = null)
{
    $model = model(TeacherModel::class);

    //$data['teacher'] = $model->getTeacherDetails();
    //$data['student'] = $model->getTeacherDetails($teacher_id);

    if (empty($data['teacher'])) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the teacher item: ' . $teacher_id);
    }

    //$data['sudent_index_number'] = $data['student']['sudent_index_number'];

    echo view('main_header', $data);
    echo view('teacher/teacher_view', $data);
    echo view('main_footer', $data);
}

public function create()
{
    $model = model(TeacherModel::class);
    $teacher_grade_model = model(TeacherGradeModel::class);

    $data = [
        'grades' => $teacher_grade_model->getTeacherGradeData(),
        'title' => 'Add a teacher',        
    ];   
    

    if ($this->request->getMethod() === 'post' && $this->validate([
        'first_name' => 'required|min_length[3]|max_length[50]',
        'middle_name'  => 'required|min_length[3]|max_length[50]',
        'last_name' => 'required|min_length[3]|max_length[50]',
        'nic' => 'required',
        'contact_number' => 'required',
        'birthday' => 'required',
        'address' => 'required',
        'gender_id' => 'required',
        'teacher_grade_id' => 'required',

    ])) {
        $model->save([
            'first_name' => $this->request->getPost('first_name'), 
            'middle_name'  => $this->request->getPost('middle_name'),
            'last_name' => $this->request->getPost('last_name'),
            'nic' => $this->request->getPost('nic'), 
            'contact_number' => $this->request->getPost('contact_number'),
            'birthday' => $this->request->getPost('birthday'),
            'address' => $this->request->getPost('address'),
            'gender_id' => $this->request->getPost('gender_id'),
            'teacher_grade_id' => $this->request->getPost('teacher_grade_id'), 
        ]);
        
        return redirect()->to('/teacher');

    } else {
        echo view('main_header',$data);
        echo view('teacher/add_teacher_form',$data);
        echo view('main_footer',$data);
    }
}
}