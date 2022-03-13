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

        $data['trustee'] = $model->getGuardianDetails($trustee_id);
    
        if (empty($data['trustee'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the guardian item: ' . $trustee_id);
        }
    
        $data['trustee_id'] = $data['trustee']['trustee_id'];
    
        echo view('main_header');
        echo view('guardian/guardian_view', $data);
        echo view('main_footer' );
    }
    
    public function create()
    {
        $model = model(GuardianModel::class);     
        $relationship_type_model = model(RelationshipTypeModel::class);

        $data = [
            'relationship_type' => $relationship_type_model->getRelationshipType()       
        ];  
    
        if ($this->request->getMethod() === 'post' && $this->validate([
            'student_index_number' => 'required',
            'relationship_type_id' => 'required',
            'trustee_name' => 'required|min_length[3]|max_length[100]', 
            'trustee_nic' => 'required', 
            'mobile_number' => 'required', 
            'work_place_phone_number' => 'min_length[10]', 
            'resident_phone_number' => 'min_length[10]', 
            'address' => 'required',
            'occupation' => 'required',
            'gender_id' => 'required', 
    
        ])) {
            $model->save([
                'student_index_number' => $this->request->getPost('student_index_number'),
                'relationship_type_id' => $this->request->getPost('relationship_type_id'),
                'trustee_name' => $this->request->getPost('trustee_name'),
                'trustee_nic' => $this->request->getPost('trustee_nic'), 
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
            echo view('guardian/add_guardian_form',$data);
            echo view('main_footer');
        }
    }

    public function edit($trustee_id){

        $model = model(GuardianModel::class);
    
        $data = [
            'guardian'  => $model->find($trustee_id)       
        ];
    
        if (empty($data['guardian'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the guardian item: ' . $trustee_id);
        }
    
        echo view('main_header');
        echo view('guardian/guardian_edit', $data);
        echo view('main_footer');
    
    }
    
    public function update($trustee_id){
    
        $model = model(GuardianModel::class);
        
        
        $data = [
            'trustee_name' => $this->request->getPost('trustee_name'),
            'trustee_nic' => $this->request->getPost('trustee_nic'), 
            'mobile_number' => $this->request->getPost('mobile_number'),
            'work_place_phone_number' => $this->request->getPost('work_place_phone_number'),
            'resident_phone_number' => $this->request->getPost('resident_phone_number'),
            'address' => $this->request->getPost('address'),
            'gender_id' => $this->request->getPost('gender_id'),
            'occupation' => $this->request->getPost('occupation')       
        ];
    
        $model->update($trustee_id, $data);
    
        return redirect()->to('/guardian');
    
    }
}

