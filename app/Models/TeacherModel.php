<?php

namespace App\Models;

use CodeIgniter\Model;

class TeacherModel extends Model
{
    protected $table = 'teacher';
    protected $primaryKey = 'teacher_id'; 
    protected $allowedFields = [
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
       
        return db_connect()->query(" CALL get_teacher_data_by_id(".$teacher_id.");")->getResultArray();
        
    }

    public function getTotalTeachersCount(){
        $sql="SELECT COUNT(*) as count FROM teacher";    
        $query = db_connect()->query($sql);
        return $query->getResultArray();
    }

}