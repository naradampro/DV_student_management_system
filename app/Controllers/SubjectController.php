<?php

namespace App\Controllers;

use App\Models\SubjectModel;

class SubjectController extends BaseController{

    public function index(){

        $model = model(SubjectModel::class);

        $data = [
            'subject'  => $model->getSubjectDetails(),
            'title' => 'Subject Details'
        ];

        echo view('main_header', $data);
        echo view('subject/subject_overview', $data);
        echo view('main_footer', $data);

    }

    public function view($subject_id = null){

        $model = model(SubjectModel::class);

        $data['subject'] = $model->rawgetall();

        if (empty($data['subject'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the subject item: ' . $subject_id);
        }

    }

    public function create()
    {

        $model = model(SubjectModel::class);
        $medium_model = model(MediumModel::class); 


    $data = [ 
        'medium_data' => $medium_model->getMediumData(),
        'title' => 'Add subject',
    ];

        if ($this->request->getMethod() === 'post' && $this->validate([
            'subject_name' => 'required'
             
        ])) {

            $model->save([
                'subject_name' => $this->request->getPost('subject_name'),
                'medium_id' => $this->request->getPost('medium_id'),
            ]);

            return redirect()->to('/subject');

        } else{
            echo view('main_header');
            echo view('subject/add_subject_form',$data);
            echo view('main_footer');
        }
    }
}
    