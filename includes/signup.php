<?php
if(isset($_POST['submit'])){

    //Grabbing the data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repasswprd = $_POST['repassword'];

    //Instantiate SignupContr class
    include "../class/db.php";
    include "../class/signup.class.php";
    include "../class/signup-control.class.php";
    $signup = new SignupContr($username, $email, $password, $repassword)

    //Running error handlers and user signup
    //$signup->signupUser();

    //Going back to front page
    header("location: ../index.php?error=none");
}