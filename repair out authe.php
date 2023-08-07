<?php
include_once 'repair out connect.php';
if(isset($_POST['submit']))
{    

    $Vehicle_Reg_No = $_POST['Vehicle_Reg_No'];
	$Date_Time = $_POST['Date_Time'];
	$Driver_Name = $_POST['Driver_Name'];
	$TP_No = $_POST['TP_No'];
    $Repair_type = $_POST['Repair_type'];
    $cost = $_POST['cost'];
    $Additional_Notes = $_POST['Additional_Notes'];


     // Check if username or password is empty
    if(empty($Vehicle_Reg_No) || empty($Date_Time) || empty($Driver_Name) || empty($TP_No) || empty($cost) || empty($Repair_type)) {
        echo '<script>alert("Enter all details.");</script>';
    } else {
        $sql = "INSERT INTO repair_out (Vehicle_Reg_No, Date_Time, Driver_Name, TP_No, Repair_type, cost, Additional_Notes)
        VALUES ('$Vehicle_Reg_No','$Date_Time','$Driver_Name','$TP_No','$Repair_type','$cost', '$Additional_Notes')";

        if (mysqli_query($conn, $sql)) {
            // Redirect to main_page.php
            header("Location: vehicle operator.php");
            exit(); // Important: Terminate the current script execution after redirection
        } else {
            echo '<script>alert("Error: ' . $sql . ':-' . mysqli_error($conn) . '");</script>';
        }
    }
    
    mysqli_close($conn);
}
?>