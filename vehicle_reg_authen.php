<?php
include_once 'vehicle_reg_connect.php';
if(isset($_POST['submit']))
{    

    $Registration_Number = $_POST['Registration_Number'];
	$Engine_Number = $_POST['Engine_Number'];
	$Chassis_No = $_POST['Chassis_No'];
	$Vehicle_Class = $_POST['Vehicle_Class'];
	$Taxation_Class = $_POST['Taxation_Class'];
	$Make = $_POST['Make'];
	$Type_of_body = $_POST['Type_of_body'];
    $Color_1 = $_POST['Color_1'];
    $Color_2 = $_POST['Color_2'];
    $fual_type = $_POST['fual_type'];
    $Cylinder_Capacity = $_POST['Cylinder_Capacity'];
    $First_Registration = $_POST['First_Registration'];
    $Responsible_Owner = $_POST['Responsible_Owner'];
    $status = $_POST['status'];
    $Remarks = $_POST['Remarks'];
    $Vehicle_Photo = $_POST['Vehicle_Photo'];

     // Check if username or password is empty
    if(empty($Registration_Number) || empty($Engine_Number) || empty($Chassis_No) || empty($Vehicle_Class) || empty($Taxation_Class) || empty($Make) || empty($Type_of_body) || empty($fual_type) || empty($Cylinder_Capacity) || empty($First_Registration) || empty($Responsible_Owner) || empty($status)) {

        echo '<script>alert("Enter all details.");</script>';
    } else {
        $sql = "INSERT INTO vehicle_details (Registration_Number, Engine_Number, Chassis_No, Vehicle_Class, Taxation_Class, Make, Type_of_body,  Color_1, Color_2, fual_type, Cylinder_Capacity, First_Registration, Responsible_Owner, status, Remarks, Vehicle_Photo)
        VALUES ('$Registration_Number','$Engine_Number','$Chassis_No','$Vehicle_Class','$Taxation_Class','$Make','$Type_of_body','$Color_1','$Color_2','$fual_type','$Cylinder_Capacity','$First_Registration','$Responsible_Owner','$status','$Remarks','$Vehicle_Photo')";

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
  