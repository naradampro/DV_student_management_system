<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'student';
    protected $primaryKey = 'student_id';
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

    public function getAllStudentsDetails($student_index_number = false){
        if ($student_index_number === false) { 
            return $this->findAll(); 
        } 
    }

    public function getStudentDetails($student_index_number = false){
        if ($student_index_number === false) {
            return db_connect()->query("CALL get_active_students_all_data()")->getResultArray();        
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

    public function get1to5StudentCount(){
        return db_connect()->query("CALL get_1_to_5_student_count()")->getResultArray();
    }

    public function get6to9StudentCount(){
        return db_connect()->query("CALL get_6_to_9_student_count()")->getResultArray();
    }

    public function get10to11StudentCount(){
        return db_connect()->query("CALL get_10_to_11_student_count()")->getResultArray();
    }

}