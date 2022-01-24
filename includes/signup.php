<?php
include "../class/db.php";
include "../class/signup.class.php";
include "../class/signup-control.class.php";

if(isset($_POST['submit'])){

    //Grabbing the data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $repwd = $_POST['repwd'];

    //Instantiate SignupContr class
    $signup = new SignupContr($username, $email, $pwd, $repwd);

    //Running error handlers and user signup
    $signup->signupUser();

    //Going back to front page
    header("location: ../index.php?error=none");
}