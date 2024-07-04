<!--Database Configuration-->
<?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "hackheaven";

    //Create Connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Check connection
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
?>