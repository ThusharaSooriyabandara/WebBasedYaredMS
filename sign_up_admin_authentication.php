<?php
include_once 'sign_up_admin_connect.php';

if(isset($_POST['submit']))
{    
    $uname = $_POST['uname'];
    $password = $_POST['password'];

    // Check if username or password is empty
    if(empty($uname) || empty($password)) {
        echo '<script>alert("Enter all details");</script>';
    } else {
        $sql = "INSERT INTO users (uname, password)
        VALUES ('$uname','$password')";

        if (mysqli_query($conn, $sql)) {
            // Redirect to main_page.php
            header("Location: main_page.php");
            exit(); // Important: Terminate the current script execution after redirection
        } else {
            echo '<script>alert("Error: ' . $sql . ':-' . mysqli_error($conn) . '");</script>';
        }
    }
    
    mysqli_close($conn);
}
?>