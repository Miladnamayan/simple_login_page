<?php
session_start();
// session_destroy();
//valdation

$error=[];

$email= $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error['email'] = "Invalid email format";
  }

$password= $_POST['password'];
if(strlen($password)<6){
    $error['password'] = "Invalid password lens";
}

if(!empty($error)){
    $_SESSION['error']=$error;
    header("Location: http://127.0.0.1//phpcourses/elyas/form.php");
    die;
};

//credential check

if(!($email=="miladnamayan50@gmail.com" && $password==123456)){
    $error['credential'] = "your email and password are not valid";
    $_SESSION['error']=$error;
    header("Location: http://127.0.0.1//phpcourses/elyas/form.php");
    die;
}

unset($_SESSION['error']);

$_SESSION['email']=$email;
header("Location: http://127.0.0.1//phpcourses/elyas/welcome.php");
die;
