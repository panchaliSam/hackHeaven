<?php
session_start();
include('../config/config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Check if username and password are set
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Protect against SQL injection
        $username = $conn->real_escape_string($username);
        $password = $conn->real_escape_string($password);

        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            $user = $result->fetch_assoc();
            $_SESSION['userId'] = $user['userId'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['isAdmin'] = (bool)$user['isAdmin'];

            if($user['isAdmin']){
                header('Location: ../Pages/admin-dashboard.php');
                exit(); // Ensure script stops here after redirect
            }else{
                header('Location: ../Pages/user-dashboard.php');
                exit(); // Ensure script stops here after redirect
            }
        }else{
            echo "Invalid username or password";
        }
    } else {
        echo "Username or password not set";
    }
}
?>
