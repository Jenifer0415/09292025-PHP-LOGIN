<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $email    = mysqli_real_escape_string(mysql:conn, string: $_POST['email']);
    $password = mysqli_real_escape_string(mysql:conn, string: $_POST['password']);


    $sql = "SELECT * FROM users WHERE email= '$email'";
    $result = $conn->query(query: $sql);

}

if ($result->num_rows > 0) {

    $user = result ->fetch_assoc()


    if(password_verify(password: $password,hash:$user[password])) 
        echo"login successful! , Welcome". $user['fullname'];

    header(header: "Location: dashboard.php")

    }

    else {

        echo " NO USER WITH THAT EMAIL";
    }


?>
