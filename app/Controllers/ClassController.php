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
    
    public function view($class_id = null)
    {
        $model = model(classModel::class);
    
         $data['class'] = $model->getClassData($class_id); 
    
        if (empty($data['class'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the class item: ' . $class_id);
        }
    
        $data['class_name'] = $data['class'][0]['class_name'];
    
        echo view('main_header' );
        echo view('class/class_view', $data);
        echo view('main_footer' );
    }
    
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

    public function edit($class_id){

        $model = model(ClassModel::class);
        $teacher_model = model(TeacherModel::class);
    
        $data = [
            'teachers_data' => $teacher_model->getTeacherDetails(),
            'class'  => $model->find($class_id)       
        ];
    
        if (empty($data['class'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the class item: ' . $class_id);
        }
    
        echo view('main_header');
        echo view('class/class_edit', $data);
        echo view('main_footer');
    
    }
    
    public function update($class_id){
    
        $model = model(ClassModel::class);
        $teacher_model = model(TeacherModel::class);
        
        $data = [
            'class_name' => $this->request->getPost('class_name'), 
            'year'  => $this->request->getPost('year'),
            'number_of_students' => $this->request->getPost('number_of_students'),
            'teacher_id' => $this->request->getPost('teacher_id')       
        ];
    
        $model->update($class_id, $data);
    
        return redirect()->to('/class');
    
    }
}
