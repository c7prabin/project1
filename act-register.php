<?php
session_start();

//ini_set('display_errors', false);
//error_reporting(E_ALL);

$post = $_POST;

if(!empty($post)){
    
    $first_name = $post['first_name'];
     $middle_name = $post['middle_name'];
    $last_name = $post['last_name'];
    $email_enter = $post['email_enter'];
    $create_email = $post['create_email'];
    $password = $post['password'];
    
    $conn = mysqli_connect('localhost', 'root', '');
        
    if($conn){
        
        if(mysqli_select_db($conn, 'db_college')){
           
            $sql = "INSERT INTO `tbl_students` "
            . "(first_name,middle_name, last_name, email_enter,create_email, password,) "
              . "VALUES ('$first_name','$middle_name', '$last_name', '$email_enter','$create_email', '$password')";
            
            
            if(mysqli_query($conn, $sql)){
                $_SESSION['flash_msg'] = 'Registration successful.';
                header('Location: login.php');
            } else {
                die('insert error.'. mysqli_error($conn));
            }
            
        } else {
            die('selection error'.mysqli_error($conn));
        }
        
        mysqli_close($conn);
    } else {
        die('connection error:'.  mysqli_connect_error());
    }
    
}
