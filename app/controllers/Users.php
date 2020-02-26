<?php


class Users extends Controller
{
    public function login(){
        $this->view('users/login');
    }
    public function register(){
        // check post request
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // init data
            $data = array(
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'pass' => trim($_POST['pass']),
                'pass2' => trim($_POST['pass2'])
            );
            $this->view('users/register', $data);
    } else {
            $this->view('users/register');

        }
    }
}