<?php

include 'config.php';
if(isset($_COOKIE['user_id'])){
    $user_id = $_COOKIE['user_id'];
}
else{
    $user_id = '';
}
if(isset($_POST['send'])){
 
    $msg_id = generate_unique_id();
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $subject = $_POST['subject'];
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);
    $message = $_POST['message'];
    $message = filter_var($message, FILTER_SANITIZE_STRING);}