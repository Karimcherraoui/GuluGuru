<?php

class User{
    private $db;

    public function __construct (){
        $this->db = new Database ;
    }

    // login user

    public function login($email, $password){
        $this->db->query('SELECT * FROM admin WHERE email = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->single();

        $hached_password = $row->password;
        if(password_verify($password, $hached_password)){
            return $row;
        }else{
            return false;
        }
    }


    // find user by email 
    public function findUserByEmail($email){
        $this->db->query('SELECT * FROM admin WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // check row 
        if($this->db->rowCount() > 0){
            return true;

        }else{
            return false;
        }
    }
     
}