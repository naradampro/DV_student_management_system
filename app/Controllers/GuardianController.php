<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class GuardianController extends BaseController
{
    public function index()
    {
        $model = model(GuardianModel::class);

        $data = [
            'trustee'  => $model->getGuardianDetails(),
            'title' => 'Guardian Details',        
        ];
    
        echo view('main_header', $data);
        echo view('guardian/guardian_overview', $data);
        echo view('main_footer', $data);
    }
    
    public function view($trustee_id = null)
    {
        $model = model(GuardianModel::class); 
    
        if (empty($data['trustee'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the guardian item: ' . $guardian_id);
        }
    
        //$data['sudent_index_number'] = $data['student']['sudent_index_number'];
    
        echo view('main_header', $data);
        echo view('guardian/guardian_view', $data);
        echo view('main_footer', $data);
    }
    
    public function create()
    {
        $model = model(GuardianModel::class);    
        
    
        if ($this->request->getMethod() === 'post' && $this->validate([
            'trustee_name' => 'required|min_length[3]|max_length[100]', 
            'nic' => 'required', 
            'mobile_number' => 'required', 
            'work_place_phone_number' => 'min_length[10]', 
            'resident_phone_number' => 'min_length[10]', 
            'address' => 'required',
            'occupation' => 'required',
            'gender_id' => 'required', 
    
        ])) {
            $model->save([
                'trustee_name' => $this->request->getPost('trustee_name'),
                'nic' => $this->request->getPost('nic'), 
                'mobile_number' => $this->request->getPost('mobile_number'),
                'work_place_phone_number' => $this->request->getPost('work_place_phone_number'),
                'resident_phone_number' => $this->request->getPost('resident_phone_number'),
                'address' => $this->request->getPost('address'),
                'gender_id' => $this->request->getPost('gender_id'),
                'occupation' => $this->request->getPost('occupation') 
            ]);
            
            return redirect()->to('/guardian');
    
        } else {
            echo view('main_header');
            echo view('guardian/add_guardian_form');
            echo view('main_footer');
        }
    }
}