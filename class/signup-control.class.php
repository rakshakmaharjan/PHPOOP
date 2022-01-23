<?php

class SignupContr extends Signup{
    private $username;
    private $email;
    private $password;
    private $repassword;

    //constructor
    public function __construct($username, $email, $password, $repassword){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->repassword = $repassword;
    }

    public function signupUser(){
        if($this->emptyInput == false){
            //echo "Empty Input";
            header("location: ../index.php?error=emptyInput");
            exit();
        }
        if($this->invalidUsername == false){
            //echo "Invalid Username";
            header("location: ../index.php?error=invalidUsername");
            exit();
        }
        if($this->invalidEmail == false){
            //echo "Invalid Email";
            header("location: ../index.php?error=invalid Email");
            exit();
        }
        if($this->passwordMatch == false){
            //echo "Password did not match";
            header("location: ../index.php?error=passworddidnotmatch");
            exit();
        }
        if($this->userMatch == false){
            //echo "User Already Exists";
            header("location: ../index.php?error=userExists");
            exit();
        }
        $this->setUser($this->username, $this->password, $this->email);
    }

    //error handlers
    private function emptyInput(){
        $result;
        if(empty($this->username) || empty($this->email) || empty($this->password) || empty($this->repassword)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function invalidUsername(){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(){
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function passwordMatch(){
        $result;
        if($this->password !== $this->repassword){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function userMatch(){
        $result;
        if(!$this->checkUser($this->userame, $this->email)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
    
}