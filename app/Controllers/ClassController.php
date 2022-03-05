<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ClassController extends BaseController
{
    public function index()
    {
        $model = model(ClassModel::class);
    
        $data = [
            'class'  => $model->getClassData(),
            'title' => 'Class Details',
        ];
    
        echo view('main_header', $data);
        echo view('class/class_overview', $data);
        echo view('main_footer', $data);
    }
    
    // public function view($teacher_id = null)
    // {
    //     $model = model(classModel::class);
    
    //      $data['teacher'] = $model->rawgetall();
    //     //$data['student'] = $model->getTeacherDetails($teacher_id);
    
    //     if (empty($data['teacher'])) {
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the teacher item: ' . $teacher_id);
    //     }
    
    //     //$data['sudent_index_number'] = $data['student']['sudent_index_number'];
    
    //     echo view('main_header', $data);
    //     echo view('teacher/teacher_view', $data);
    //     echo view('main_footer', $data);
    // }
    
    public function create()
    {
        $model = model(classModel::class);
    
        // if ($this->request->getMethod() === 'post' && $this->validate([
        //     'first_name' => 'required|min_length[3]|max_length[50]',
        //     'middle_name'  => 'required|min_length[3]|max_length[50]',
        //     'last_name' => 'required|min_length[3]|max_length[50]',
        //     'nic' => 'required',
        //     'contact_number' => 'required',
        //     'birthday' => 'required',
        //     'address' => 'required',
        //     'gender' => 'required',
        //     'teacher_grade_id' => 'required',
        //     'subject_id' => 'required', 
        //     'medium_id' => 'required',
    
        // ])) {
        //     $model->save([
        //         'first_name' => $this->request->getPost('first_name'), 
        //         'middle_name'  => $this->request->getPost('middle_name'),
        //         'last_name' => $this->request->getPost('last_name'),
        //         'nic' => $this->request->getPost('nic'), 
        //         'contact_number' => $this->request->getPost('contact_number'),
        //         'birthday' => $this->request->getPost('birthday'),
        //         'address' => $this->request->getPost('address'),
        //         'gender' => $this->request->getPost('gender'),
        //         'teacher_grade_id' => $this->request->getPost('teacher_grade_id'),
        //         'subject_id' => $this->request->getPost('subject_id'),
        //         'medium_id' => $this->request->getPost('medium_id'),
        //     ]);
    
        //     echo view('teacher/success');
        // } else {
            echo view('main_header');
            echo view('class/add_class_form');
            echo view('main_footer');
        // }
    }
}
