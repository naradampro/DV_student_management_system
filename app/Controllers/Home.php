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
            'teacher_count' =>  $teacher_model->getTotalTeachersCount(),
            'count_1to5_students' => $student_model->get1to5StudentCount(),
            'count_6to9_students' => $student_model->get6to9StudentCount(),
            'count_10to11_students' => $student_model->get10to11StudentCount(),
            'student_count_by_gender' => $student_model->getStudentCountGroupByGender()
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
