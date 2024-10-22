<?php
session_start();
require_once 'database.php';

// Check if the user is logged in, if not, redirect to login
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user']; // Assuming $_SESSION['user'] contains user ID
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Update user details in the database
    if ($password) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE user SET fname = ?, lname = ?, uname = ?, email = ?, password = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssssi", $firstname, $lastname, $username, $email, $password_hash, $user_id);
    } else {
        $sql = "UPDATE user SET fname = ?, lname = ?, uname = ?, email = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssssi", $firstname, $lastname, $username, $email, $user_id);
    }

    if (mysqli_stmt_execute($stmt)) {
        // Update session values
        $_SESSION['user'] = $user_id;

        // Redirect to account page
        header("Location: aaccount.php");
        exit();
    } else {
        echo "Error updating account details: " . mysqli_error($conn);
    }
}
?>
