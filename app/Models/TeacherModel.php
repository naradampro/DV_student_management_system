<?php

namespace App\Models;

use CodeIgniter\Model;

class TeacherModel extends Model
{
    protected $table = 'teacher'; 
    protected $allowedFields = [
        'teacher_id', 
        'teacher_nic', 
        'birthday', 
        'gender_id', 
        'contact_number', 
        'address', 
        'teacher_grade_id',
        'first_name', 
        'middle_name', 
        'last_name',];

    public function getTeacherDetails($teacher_id = false){
        if ($teacher_id === false) {
            return $this->findAll();
        }

        return $this->where(['teacher_id' => $teacher_id])->first();
    }

    public function getTotalTeachersCount(){
        $sql="SELECT COUNT(*) as count FROM teacher";    
        $query = db_connect()->query($sql);
        return $query->getResultArray();
    }

}