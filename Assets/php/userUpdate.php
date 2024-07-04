<?php
    session_start();
    include("../config/config.php");

    if(!isset($_SESSION['userId'])){
        header("Location: ../index.php");
        exit();
    }

    $userId = $_SESSION['userId'];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstName = $_POST['editFirstName'];
        $lastName = $_POST['editLastName'];
        $username = $_POST['editUsername'];

        $sql = "UPDATE user SET firstName='$firstName', lastName='$lastName', username='$username' WHERE userId='$userId'";

        if($conn->query($sql) == TRUE){
            $_SESSION['success'] = "Profile updated successfully";
        }else{
            $_SESSION['error'] = "Error updating profile: " . $conn->error;
        }
    
        header("Location: ../Pages/user-dashboard.php");
        exit();
    } else {
        // Handle the case where the form is not submitted
        $_SESSION['error'] = "Invalid request";
        header("Location: profile.php");
        exit();
    }
?>