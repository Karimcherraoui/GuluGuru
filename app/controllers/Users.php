<?php

class Users extends Controller{
    protected $userModel;
    public function __construct(){
        $this->userModel = $this->model('User');
        
    }

    public function login(){
        // check for Post
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //process Form 
        // sanitize POST DATA
        $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        // init data
    $data = [
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'email_err' => '',
        'password_err' => '',
    ];

    // validate email 
    if(empty($data['email'])){
        $data['email_err'] = 'please enter email';

    }
    // validate password 
    if(empty($data['password'])){
        $data['password_err'] = 'please enter password';

    }

    // check for user / email

    if($this->userModel->findUserByEmail($data['email'])){
        // User found


    }else{
        //  User not Found
        $data['email_err'] = 'No user Found';
    }


    // make sure errors empty

        if(empty($data['email_err']) && empty($data['password_err'])){
            // validated
            // check ans set logged in user 
            $loggedInUser = $this->userModel->login($data['email'], $data['password']);

            if($loggedInUser){
                // create session 
                $this->createUserSession($loggedInUser);

            }else{
                $data['password_err'] = 'Password incorrect';
                $this->view('users/login', $data);
            }
        }else{
            //load view with errors 
            $this->view('users/login',$data);
        }


    }else{
    // init data
    $data = [
        'email' => '',
        'password' => '',
        'email_err' => '',
        'password_err' => '',
    ];

    // load view
    $this->view('users/login', $data);
}

    }

    public function createUserSession($user){

        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;

        redirect('pages/product');
    }

    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        session_destroy();
        redirect('pages/index');

    }
}