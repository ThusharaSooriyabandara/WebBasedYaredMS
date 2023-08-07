<?php
include_once 'repair in connect.php';
if(isset($_POST['submit']))
{    

    $Vehicle_Reg_No = $_POST['Vehicle_Reg_No'];
	$Date_Time = $_POST['Date_Time'];
	$Current_Driver_Name = $_POST['Current_Driver_Name'];
	$TP_No = $_POST['TP_No'];
	$Mileage = $_POST['Mileage'];
	$Issue = $_POST['Issue'];
	$Current_Status = $_POST['Current_Status'];
    $Previous = $_POST['Previous'];
    $Cost = $_POST['Cost'];
    $Repair_Timeline = $_POST['Repair_Timeline'];
    $Additional_Notes = $_POST['Additional_Notes'];


     // Check if username or password is empty
    if(empty($Vehicle_Reg_No) || empty($Date_Time) || empty($Current_Driver_Name) || empty($TP_No) || empty($Cost) || empty($Issue)) {
        echo '<script>alert("Enter all details.");</script>';
    } else {
        $sql = "INSERT INTO repair_in (Vehicle_Reg_No, Date_Time, Current_Driver_Name, TP_No, Mileage, Issue, Current_Status, Previous, Cost, Repair_Timeline, Additional_Notes)
        VALUES ('$Vehicle_Reg_No','$Date_Time','$Current_Driver_Name','$TP_No','$Mileage','$Issue','$Current_Status','$Previous','$Cost','$Repair_Timeline','$Additional_Notes')";

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