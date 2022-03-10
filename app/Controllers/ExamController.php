<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ExamController extends BaseController
{
    public function index(){
        $model=model(ExamModel::class);

        $data=[
            'exam'=>$model->getExamDetails(),
            'title'=>'Exam Details',
        ];

        echo view('main_header');
        echo view('exam/exam_overview',$data);
        echo view('main_footer');
    }

// public function view($exam_id = null){

//     $model = model(ExamModel::class);

//     $data['exam'] = $model->rawgetall();
    
//     //$data['exam'] = $model->getExamDetails($exam_id);

//     if (empty($data['exam'])) {
//         throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the exam item: ' . $exam_id);
//     }

//     //$data['exam_id'] = $data['exam']['exam_id'];

//     echo view('main_header', $data);
//     echo view('exam/view', $data);
//     echo view('main_footer', $data);
// }

// public function create(){
//     $model = model(ExamModel::class);
//     $medium_model = model(MediumModel::class);
//     $subject_model = model(SubjectModel::class);
    

//     $data = [        
//         'medium_data' => $medium_model->getMediumData(),
//         'subject_data' => $subject_model->getSubjectDetails()
//     ];

//     if ($this->request->getMethod() === 'post' && $this->validate([
//         'term' => 'required',
//         'year' => 'required',
//         'grade' => 'required',
//         'subject_id'  => 'required',
//         'medium_id' => 'required',

//     ])) {
//         $model->save([
//             'term' => $this->request->getPost('term'),
//             'year' => $this->request->getPost('year'),
//             'grade' => $this->request->getPost('grade'), 
//             'subject_id'  => $this->request->getPost('subject_id'),
//             'medium_id' => $this->request->getPost('medium_id'),
//         ]);

//         return redirect()->to('/exam');

//     } else {
//         echo view('main_header', $data);
//         echo view('exam/exam_details_form', $data);
//         echo view('main_footer', $data);
//     }
// }
}
