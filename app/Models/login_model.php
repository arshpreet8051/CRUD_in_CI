<?php

namespace App\Models;

use CodeIgniter\Model;

class login_model extends Model
{
    protected $table = 'login_table';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['username','password'];

    public function checkCredentials($username, $password) {
        //$username = $this->conn->real_escape_string($username);
    
        // Query to check if the username and password match
        //$query = "SELECT * FROM admin_table WHERE username='$username' AND password='$password'";
        //$result = $this->conn->query($query);
    
        $user = $this->where('username', $username)->first();
    
            if ($user && ($password === $user['password'])) {
                // User credentials are valid
                return true;
            } else {
                // User credentials are invalid
                return false;
            }
    }

    // public function addUser($username,$password){
    //     $data = array('username'=> $username,
    //                    'password'=> $password)

    //     $this->db->insert('login_table',$data);
    // }
}

