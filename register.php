<?php
session_start();
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = trim($_POST['name']);
    $email    = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if email exists
    $checkEmail = "SELECT * FROM users WHERE email= '$email'";
    $result = $conn->query($checkEmail);

}if ($result->num_rows > 0) {
        echo "Email already exists!";
    } else {

        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO users(name, email, password) VALUES ('$name' ,'$email', '$password', '$hashed_password'";  
    
    }if( $conn ->query($sql)===TRUE) {
        echo "Account Created!!!";
    
    }else{
        echo "Error" .$sql.$conn->error;
} 

?>