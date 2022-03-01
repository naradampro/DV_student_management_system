<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'student';
    protected $allowedFields = ['student_index_number', 'first_name', 'middle_name','last_name'];

    public function getStudentDetails($student_index_number = false)
{
    if ($student_index_number === false) {
        return $this->findAll();
    }

    return $this->where(['student_index_number' => $student_index_number])->first();
}

}