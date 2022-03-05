<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'student';
    protected $allowedFields = [
        'full_name_en',
        'full_name_sin',
        'name_with_initials',
        'student_index_number', 
        'first_name', 
        'middle_name', 
        'last_name', 
        'date_of_addmission', 
        'student_insurance_number', 
        'student_identification_number',
        'contact_number', 
        'birthday', 
        'address',
        'gender_id',
        'race_id',
        'religion_id',
        'gnd_id',
        'class_id',
        'medium_id',
        'student_status_id'];

    public function getStudentDetails($student_index_number = false){
        if ($student_index_number === false) {
            return $this->findAll();
        }

        return db_connect()->query("CALL get_student_by_index_no(".$student_index_number.")")->getResultArray();
    }

    public function getTotalActiveStudentsCount(){
        $sql="CALL get_all_active_students_count()";    
        $query = db_connect()->query($sql);
        return $query->getResultArray();
    }
    
    public function getStudentCountGroupByGender(){
        return db_connect()->query("CALL get_student_count_group_by_gender()")->getResultArray();
    }

}