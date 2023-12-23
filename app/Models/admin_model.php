<?php

namespace App\Models;

use CodeIgniter\Model;

class admin_model extends Model
{
    protected $table = 'admin_table';
    protected $primaryKey = 'admin_id';
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
}