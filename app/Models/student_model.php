<?php

namespace App\Models;

use CodeIgniter\Model;

class student_model extends Model
{
    protected $table = 'student_table';
    protected $primaryKey = 'id';

    protected $useTimestamps = true; // Enable automatic timestamps

    protected $createdField  = 'created_at'; // Customize created_at column name if needed
    protected $updatedField  = 'updated_at'; // Customize updated_at column name if needed

    public $allowedFields = ['course_code', 'branch_code', 'scheme_code', 'leet_status', 'semester', '6_month_training', 'AICTE_RE', 'course_type', 'subject_title', 'm_code', 'theory/practical', 'elective_status', 'credits', 'internal_marks', 'external_marks', 'cbs_status', 'created_at', 'updated_at']; // Add other fields in your table

    public function getStudents() {
        // Fetch data from student_table
        return $this->findAll();
    }

    public function update_student_record($id, $data) {
        // Update the student_table
        // $this->where('id', $id);
        // $this->update($data);

        // Check if any row was affected
        // if ($this->affectedRows() > 0) {
        //     // Attempt to update the corresponding record in student_log_table
        //     $this->update_student_log_record($id, $data);
        // } else {
        //     // If no rows were affected, it means there was no matching record
        //     // Insert a new record into student_log_table
        //     $this->insert_student_log_record($id, $data);
        // }

        $existingRow = $this->where('id', $id)->get()->getRow();

        if ($existingRow) {
            // Row exists, attempt to update the corresponding record in student_log_table
            $this->update_student_log_record($id, $data);
        } else {
            // Row does not exist, insert a new record into student_log_table
            $this->insert_student_log_record($id, $data);
    }
}

    public function update_student_log_record($id, $data) {
        // Update the last record for the given id in student_log_table
        $existingRow = $this->db->table('student_log_table')->where('id', $id)->get()->getRow();

        if ($existingRow) {
        
            $this->db->table('student_log_table')
                ->where('id', $id)
                ->orderBy('updated_at', 'DESC')
                ->limit(1)
                ->update($data);
        }
        else{
            $this->insert_student_log_record($id, $data);
        }
    }

    public function insert_student_log_record($id, $data) {
        // Insert a new record into student_log_table
        $data['id'] = $id; // Assuming 'id' is the common identifier
        $this->db->table('student_log_table')->insert($data);
    }

}