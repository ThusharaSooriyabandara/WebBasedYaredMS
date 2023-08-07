<?php
include_once 'Trip Data Connect.php';
if(isset($_POST['submit']))
{    

    $Trip_ID = $_POST['Trip_ID'];
	$CurrentStatus = $_POST['CurrentStatus'];
	$Order_Out_Date = $_POST['Order_Out_Date'];
	$Received_Date = $_POST['Received_Date'];
    $Delivery_ID = $_POST['Delivery_ID'];
    $Total_Mileage = $_POST['Total_Mileage'];


     // Check if username or password is empty
    if(empty($Trip_ID) || empty($CurrentStatus) || empty($Delivery_ID)) {
        echo '<script>alert("Enter all details.");</script>';
    } else {
        $sql = "INSERT INTO trip_database (Trip_ID, CurrentStatus, Order_Out_Date, Received_Date, Delivery_ID, Total_Mileage)
        VALUES ('$Trip_ID','$CurrentStatus','$Order_Out_Date','$Received_Date','$Delivery_ID','$Total_Mileage')";

        if (mysqli_query($conn, $sql)) {
            // Redirect to main_page.php
            header("Location: home.php");
            exit(); // Important: Terminate the current script execution after redirection
        } else {
            echo '<script>alert("Error: ' . $sql . ':-' . mysqli_error($conn) . '");</script>';
        }
    }
    
    mysqli_close($conn);
}
?>