<?php

namespace App\Models;

use CodeIgniter\Model;

class ClassModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'class';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'class_name',  
        'year',
        'number_of_students',
        'teacher_id'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getClassData($class_id = false){
        if ($class_id === false) {
            return db_connect()->query("SELECT class_id,class_name,year,first_name,middle_name,Last_name,number_of_students,gender_id,contact_number FROM class_with_teacher")->getResultArray();
        }

        return $this->where(['class_id' => $class_id])->first();
    }
}
