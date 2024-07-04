<?php
// Start session
session_start();
if(!isset($_SESSION['userId']) || $_SESSION['isAdmin']){
    header("Location: /Assets/Pages/admin-dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Admin</h1>
</body>
</html>