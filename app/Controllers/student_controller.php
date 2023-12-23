<?php

namespace App\Controllers;

use App\Models\student_model;
use App\Models\log_model;
use App\Models\admin_model;
use App\Models\login_model;
use App\Models\student_log_model;


class student_controller extends BaseController
{
    public function login(){
        return view('login');
    }
    public function index(): string
    {
        return view('create_student');
    }

    public function credentials(){

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $isAdmin = $this->request->getVar('adminCheck');

        if($isAdmin === '1'){

            $admin_model = new admin_model(); 
            $isValidAdmin = $admin_model->checkCredentials($username,$password);

            if($isValidAdmin){
                return view('admin_view');
            }
            else{
                return view('invalid_user');
            }
        }
        else{

            $login_model = new login_model(); 
            $isValidUser = $login_model->checkCredentials($username,$password);

            if($isValidUser){
                return view('create_student');
            }
            else{
                return view('invalid_user');
            }
        }
    }

    public function admin_view(){
        return view('admin_view');
    }

    public function signup(){
        return view('sign_up.php');
    }
    public function addUser(){
        
       $data = [    
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password')];

        $model = new login_model();
        $model->insert($data);
        return view('login.php');

    }

    public function log_view() {
        // Load the necessary models
        $student_model = new student_model();
        $student_log_model = new student_log_model();

        // Get data from the student_table
        $data['students'] = $student_model->getStudents();
        $data['student_log_model'] = $student_log_model;
        // Load the view
        return view('log_view', $data);
    }

    public function insert()
{
    $data = [
        'course_code'      => $this->request->getVar('course_code'),
        'branch_code'      => $this->request->getVar('branch_code'),
        'scheme_code'      => $this->request->getVar('scheme_code'),
        'leet_status'      => $this->request->getVar('leet_status'),
        'semester'         => $this->request->getVar('semester'),
        '6_month_training' => $this->request->getVar('6_month_training'),
        'AICTE_RE'         => $this->request->getVar('AICTE_RE'),
        'course_type'      => $this->request->getVar('course_type'),
        'subject_title'    => $this->request->getVar('subject_title'),
        'm_code'           => $this->request->getVar('m_code'), 
        'theory/practical' => $this->request->getVar('theory/practical'), 
        'elective_status'  => $this->request->getVar('elective_status'),
        'credits'          => $this->request->getVar('credits'),
        'internal_marks'   => $this->request->getVar('internal_marks'),
        'external_marks'   => $this->request->getVar('external_marks'),
        'cbs_status'       => $this->request->getVar('cbs_status'),
    ];

    $model = new student_model(); 
    $model->insert($data);

    return view('after_insertion');
    // echo "<h1>Data sent successfully...</h1>";
}

public function show(){
    $model = new student_model();
    $data['courses'] = $model->findAll();
    return view('show_student',$data);
}

public function delete($id = null){
    $model = new student_model(); 
    $data['course'] = $model->where('id', $id)->delete();
    $data['courses'] = $model->findAll();
    return view('show_student',$data);
}

public function edit($id){
    $model = new student_model();
    $data2['course'] = $model->where('id', $id)->first();

    // // instance of the log_model
    // $log_model = new log_model();

    // // Insert in Log table
    // $log_data = [
    //     'old_value' => json_encode($data['course']),
    // ];

    // $log_model->insert($log_data);

        // Get the data to update (replace this with your own logic)
        $data = [
        'course_code'      => $data2['course']['course_code'],
        'branch_code'      => $data2['course']['branch_code'],
        'scheme_code'      => $data2['course']['scheme_code'],
        'leet_status'      => $data2['course']['leet_status'],
        'semester'         => $data2['course']['semester'],
        '6_month_training' => $data2['course']['6_month_training'],
        'AICTE_RE'         => $data2['course']['AICTE_RE'],
        'course_type'      => $data2['course']['course_type'],
        'subject_title'    => $data2['course']['subject_title'],
        'm_code'           => $data2['course']['m_code'],
        'theory/practical' => $data2['course']['theory/practical'],
        'elective_status'  => $data2['course']['elective_status'],
        'credits'          => $data2['course']['credits'],
        'internal_marks'   => $data2['course']['internal_marks'],
        'external_marks'   => $data2['course']['external_marks'],
        'cbs_status'       => $data2['course']['cbs_status'],
        ];

        // Call the update_student_record method in the model
        $model->update_student_log_record($id, $data);

    // update_student view
    return view('update_student', $data2);
}

public function update(){
    $data = [
        'course_code'      => $this->request->getVar('course_code'),
        'branch_code'      => $this->request->getVar('branch_code'),
        'scheme_code'      => $this->request->getVar('scheme_code'),
        'leet_status'      => $this->request->getVar('leet_status'),
        'semester'         => $this->request->getVar('semester'),
        '6_month_training' => $this->request->getVar('6_month_training'),
        'AICTE_RE'         => $this->request->getVar('AICTE_RE'),
        'course_type'      => $this->request->getVar('course_type'),
        'subject_title'    => $this->request->getVar('subject_title'),
        'm_code'           => $this->request->getVar('m_code'), 
        'theory/practical' => $this->request->getVar('theory/practical'), 
        'elective_status'  => $this->request->getVar('elective_status'),
        'credits'          => $this->request->getVar('credits'),
        'internal_marks'   => $this->request->getVar('internal_marks'),
        'external_marks'   => $this->request->getVar('external_marks'),
        'cbs_status'       => $this->request->getVar('cbs_status'),
    ];

    $id = $this->request->getVar('id');
    $model = new student_model();
    $model->update($id,$data);
    $data['courses'] = $model->findAll();
    return view('show_student',$data);
}

}