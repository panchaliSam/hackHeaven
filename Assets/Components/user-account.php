<?php
session_start();
include('../config/config.php');

// Check if userId session variable is set
if (!isset($_SESSION['userId'])) {
    // Redirect or handle the case where the user is not logged in
    exit();
}

// Get the user ID from the session
$userId = $_SESSION['userId'];

// Fetch user details from the database
$sql = "SELECT firstName, lastName, username FROM user WHERE userId='$userId'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $firstName = $user['firstName'];
    $lastName = $user['lastName'];
    $username = $user['username'];
} else {
    echo "User not found";
    exit();
}

// Display success or error message if available
$success = isset($_SESSION['success']) ? $_SESSION['success'] : '';
$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';

// Clear messages
unset($_SESSION['success']);
unset($_SESSION['error']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .custom-alert {
            width: 600px;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: .25rem;
        }

        .custom-alert-success {
            color: white;
            background-color: #72BD71;
            border-color: #c3e6cb;
        }

        .custom-alert-error {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="userAccount" style="margin-top:40px; margin-left:100px;">
        <div class="header">
            <center><h1>P R O F I L E</h1></center>
        </div>

        <!-- Display success or error message -->
        <?php if ($success): ?>
            <div class="custom-alert custom-alert-success" id="success-message">
                <?php echo $success; ?>
            </div>
        <?php endif; ?>
        <?php if ($error): ?>
            <div class="custom-alert custom-alert-error" id="error-message">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <div id="profile-info" class="profile">
            <div class="card">
                <div class="info">
                    <img src="../Images/profile-user.png" alt="Profile Image" style="width: 100px; height: auto; border-radius: 50%;">
                    <br><br>
                    <h1 style="color: #72BD71;">H E L L O !</h1>
                    <h2><?php echo $firstName . " " . $lastName; ?></h2>
                </div>
            </div>
            <div class="view-details" style="margin-left: 10%; margin-top: 2%;">
                <p style="font-size: 12px;">FIRST NAME</p>
                <p style="font-size: 20px;"><b><?php echo $firstName; ?></b></p>
                <hr style="width:500px;">
                <p style="font-size: 12px;">LAST NAME</p>
                <p style="font-size: 20px;"><b><?php echo $lastName; ?></b></p>
                <hr style="width:500px;">
                <p style="font-size: 12px;">USER NAME</p>
                <p style="font-size: 20px;"><b><?php echo $username; ?></b></p>
                <hr style="width:500px;">
            </div>
            <div class="user-details-buttons" style="margin-left: 10%; margin-top: 2%;">
                <button id="editDetailsBtn" class="btn btn-primary"><b>EDIT DETAILS</b></button><br><br><br>
                <button class="btn btn-secondary"><b>CHANGE PASSWORD</b></button><br><br><br>
                <button class="btn btn-secondary"><b>SUBSCRIPTION PLAN</b></button><br><br><br>
                <button class="btn btn-secondary"><b>MY HACKATHONS</b></button><br><br><br>
            </div>                    
        </div>    
    </div>

    <!-- Edit Details Modal -->
    <div class="modal fade" id="editDetailsModal" tabindex="-1" aria-labelledby="editDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDetailsModalLabel">Edit Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../../Assets/php/userUpdate.php" method="POST">
                        <div class="mb-3">
                            <label for="editFirstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="editFirstName" name="editFirstName" value="<?php echo $firstName; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="editLastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="editLastName" name="editLastName" value="<?php echo $lastName; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="editUsername" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="editUsername" name="editUsername" value="<?php echo $username; ?>">
                        </div>
                        <center><button type="submit" class="btn btn-primary" style="background-color: green;">Save</button></center>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var editDetailsBtn = document.getElementById('editDetailsBtn');
            var editDetailsModal = new bootstrap.Modal(document.getElementById('editDetailsModal'));

            editDetailsBtn.addEventListener('click', function() {
                editDetailsModal.show();
            });

            // Hide success message after 3 seconds
            var successMessage = document.getElementById('success-message');
            if (successMessage) {
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 3000);
            }

            // Hide error message after 3 seconds (if you want the same for error message)
            var errorMessage = document.getElementById('error-message');
            if (errorMessage) {
                setTimeout(function() {
                    errorMessage.style.display = 'none';
                }, 3000);
            }
        });
    </script>
</body>
</html>
