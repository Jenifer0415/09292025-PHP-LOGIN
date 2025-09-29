<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Example login check (replace with database validation)
    if ($username == "admin" && $password == "1234") {
        echo "Login successful. Welcome, " . $username . "!";
    } else {
        echo "Invalid username or password.";
    }
}




