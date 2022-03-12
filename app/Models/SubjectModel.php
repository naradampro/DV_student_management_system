<?php

namespace App\Models;

use CodeIgniter\Model;

class SubjectModel extends Model{

    protected $table = 'subject';
    protected $primaryKey = 'subject_id';
    protected $allowedFields = [
        'subject_name',
        'medium_id'];

    public function getSubjectDetails($subject_id = false){
        if ($subject_id === false) {
            return db_connect()->query("SELECT subject_name, medium_name FROM subject_with_medium")->getResultArray();
        }
    
        return $this->where(['subject_id' => $subject_id])->first();
    }

    public function rawgetall(){
        $sql="Select * from ".$table;    
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}