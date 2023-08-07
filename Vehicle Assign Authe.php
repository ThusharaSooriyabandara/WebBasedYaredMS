<?php
include_once 'Vehicle Assign Connect.php';
if(isset($_POST['submit']))
{    

    $DriverRegNo = $_POST['DriverRegNo'];
	$DriverName = $_POST['DriverName'];
	$Assigned_Vehicle_Reg_No = $_POST['Assigned_Vehicle_Reg_No'];
	$CurrentStatus = $_POST['CurrentStatus'];
    $Trip_ID = $_POST['Trip_ID'];
    $Trip_Start_Date = $_POST['Trip_Start_Date'];
    $Trip_End_Date = $_POST['Trip_End_Date'];


     // Check if username or password is empty
    if(empty($DriverRegNo) || empty($DriverName) || empty($Trip_Start_Date) || empty($Assigned_Vehicle_Reg_No) || empty($CurrentStatus) || empty($Trip_ID)) {
        echo '<script>alert("Enter all details.");</script>';
    } else {
        $sql = "INSERT INTO vehicle_assign (DriverRegNo, DriverName, Assigned_Vehicle_Reg_No, CurrentStatus, Trip_ID, Trip_Start_Date, Trip_End_Date)
        VALUES ('$DriverRegNo','$DriverName','$Assigned_Vehicle_Reg_No','$CurrentStatus','$Trip_ID','$Trip_Start_Date', '$Trip_End_Date')";

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