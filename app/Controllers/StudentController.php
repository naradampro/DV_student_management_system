<?php

namespace App\Controllers;

use App\Models\StudentModel;

class StudentController extends BaseController
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

public function all_view()
{
    $model = model(StudentModel::class);

    $data = [
        'student'  => $model->getAllStudentsDetails(),
        'title' => ' All Student Details',
    ];

    echo view('main_header', $data);
    echo view('student/all_students', $data);
    echo view('main_footer', $data);
}

public function view($student_index_number = null)
{
    $model = model(StudentModel::class);
    
    $data['student'] = $model->getStudentDetails($student_index_number);

    if (empty($data['student'])) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the student item: ' . $student_index_number);
    }

    $data['student_index_number'] = $data['student'][0]['student_index_number'];

    echo view('main_header');
    echo view('student/view', $data);
    echo view('main_footer');
}

public function create()
{
    $model = model(StudentModel::class);
    $race_model = model(RaceModel::class);
    $medium_model = model(MediumModel::class);
    $class_model = model(ClassModel::class);
    $gnd_model = model(GramaNiladhariDivisionMOdel::class);
    $religion_model = model(ReligionModel::class);


    $data = [
        'race_data'  => $race_model->getRaceData(),
        'medium_data' => $medium_model->getMediumData(),
        'class_data' => $class_model->getClassData(),
        'gnd_data' => $gnd_model->getGndData(),
        'religion_data' => $religion_model->getReligionData(),
        'title' => 'Student Registration',
    ];

    if ($this->request->getMethod() === 'post' && $this->validate([
        'full_name_en' => 'required|min_length[3]',
        'full_name_sin' => 'required|min_length[3]',
        'first_name' => 'required|min_length[3]|max_length[50]',
        'name_with_initials'  => 'required|min_length[3]|max_length[50]',
        'last_name' => 'required|min_length[3]|max_length[50]',
        'student_index_number' => 'required',
        'date_of_addmission' => 'required',
        'student_insurance_number' => 'min_length[3]|max_length[50]',
        'student_identification_number' => 'required',
        'birthday' => 'required',
        'address' => 'required',
        'gender_id' => 'required',
        'race_id' => 'required',
        'religion_id' => 'required',
        'gnd_id' => 'required',
        'class_id' => 'required',
        'medium_id' => 'required',

    ])) {
        $model->save([
            'full_name_en' => $this->request->getPost('full_name_en'),
            'full_name_sin' => $this->request->getPost('full_name_sin'),
            'first_name' => $this->request->getPost('first_name'), 
            'name_with_initials'  => $this->request->getPost('name_with_initials'),
            'last_name' => $this->request->getPost('last_name'),
            'student_index_number' => $this->request->getPost('student_index_number'),
            'date_of_addmission' => $this->request->getPost('date_of_addmission'),
            'student_insurance_number' => $this->request->getPost('student_insurance_number'),
            'student_identification_number' => $this->request->getPost('student_identification_number'),
            'birthday' => $this->request->getPost('birthday'),
            'address' => $this->request->getPost('address'),
            'gender_id' => $this->request->getPost('gender_id'),
            'race_id' => $this->request->getPost('race_id'),
            'religion_id' => $this->request->getPost('religion_id'),
            'gnd_id' => $this->request->getPost('gnd_id'),
            'class_id' => $this->request->getPost('class_id'),
            'medium_id' => $this->request->getPost('medium_id'),
            'student_status_id' => 1
        ]);

        return redirect()->to('/student');

    } else {
        echo view('main_header', $data);
        echo view('student/student_registration_form', $data);
        echo view('main_footer', $data);
    }
}

public function edit($student_index_number = null){

    $model = model(StudentModel::class);
    $race_model = model(RaceModel::class);
    $medium_model = model(MediumModel::class);
    $class_model = model(ClassModel::class);
    $gnd_model = model(GramaNiladhariDivisionMOdel::class);
    $religion_model = model(ReligionModel::class);

    $data = [
        'race_data'  => $race_model->getRaceData(),
        'medium_data' => $medium_model->getMediumData(),
        'class_data' => $class_model->getClassData(),
        'gnd_data' => $gnd_model->getGndData(),
        'religion_data' => $religion_model->getReligionData(),
        'student'  => $model->getStudentDetails($student_index_number)       
    ];

    /*if (empty($data['student'])) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the student item: ' . $student_index_number);
    }*/

    echo view('main_header');
    echo view('student/student_edit', $data);
    echo view('main_footer');

}

public function update($student_index_number){

    $model = model(StudentModel::class);
    $race_model = model(RaceModel::class);
    $medium_model = model(MediumModel::class);
    $class_model = model(ClassModel::class);
    $gnd_model = model(GramaNiladhariDivisionMOdel::class);
    $religion_model = model(ReligionModel::class);
    
    $data = [
        'full_name_en' => $this->request->getPost('full_name_en'),
        'full_name_sin' => $this->request->getPost('full_name_sin'),
        'first_name' => $this->request->getPost('first_name'), 
        'name_with_initials'  => $this->request->getPost('name_with_initials'),
        'last_name' => $this->request->getPost('last_name'),
        'student_index_number' => $this->request->getPost('student_index_number'),
        'date_of_addmission' => $this->request->getPost('date_of_addmission'),
        'student_insurance_number' => $this->request->getPost('student_insurance_number'),
        'student_identification_number' => $this->request->getPost('student_identification_number'),
        'birthday' => $this->request->getPost('birthday'),
        'address' => $this->request->getPost('address'),
        'gender_id' => $this->request->getPost('gender_id'),
        'race_id' => $this->request->getPost('race_id'),
        'religion_id' => $this->request->getPost('religion_id'),
        'gnd_id' => $this->request->getPost('gnd_id'),
        'class_id' => $this->request->getPost('class_id'),
        'medium_id' => $this->request->getPost('medium_id')        
    ];

    $model->update($student_index_number, $data);

    return redirect()->to('/student');

}

}