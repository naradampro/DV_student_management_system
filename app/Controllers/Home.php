<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $student_model = model(StudentModel::class);
        $teacher_model = model(TeacherModel::class);

        $data = [
            'student_count'  => $student_model->getTotalActiveStudentsCount(),
            'teacher_count' =>  $teacher_model->getTotalTeachersCount()
        ];

        echo view('main_header');
        echo view('common/dashboard',$data);
        echo view('main_footer');
    }

    public function devforms()
    {
        echo view('main_header');
        echo view('forms/devforms');
        echo view('main_footer');
    }
}
