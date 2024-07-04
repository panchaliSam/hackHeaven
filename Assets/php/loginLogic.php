<?php
session_start();
include('../config/config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Protect against SQL injection
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        $_SESSION['userId'] = $user['userId'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['isAdmin'] = $user['isAdmin'];

        if($user['isAdmin']){
            header('Location: ./Assets/Pages/admin-dashboard.php');
        }else{
            header('Location: ./Assets/Pages/user-dashboard.php');
        }
    }else{
        echo "Invalid username or password";
    }
}
?>