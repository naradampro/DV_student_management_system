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
        $teacher_model = model(TeacherModel::class);

        $data = [
            'class'  => $model->getClassData(),
            'title' => 'Class Details',
            'teachers_data' => $teacher_model->getTeacherDetails()
        ];
    
        if ($this->request->getMethod() === 'post' && $this->validate([
            'class_name' => 'required',
            'year'  => 'required',
            'number_of_students' => 'required'
    
        ])) {
            $model->save([
                'class_name' => $this->request->getPost('class_name'), 
                'year'  => $this->request->getPost('year'),
                'number_of_students' => $this->request->getPost('number_of_students'),
                'teacher_id' => $this->request->getPost('teacher_id'),  
            ]);
    
            return redirect()->to('/class');

        } else {
            echo view('main_header');
            echo view('class/add_class_form',$data);
            echo view('main_footer');
        }
    }
}
