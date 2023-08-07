<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="style.css">

<style>
     body {

    background: #100E0E;

    display: flex;

    justify-content: center;

    align-items: center;

    height: auto;

    flex-direction: column;

}
label1 {

    color: #100E0E;

    font-size: 18px;

    padding: 10px;

}
</style>
</head>

<body>
<form action="Vehicle_reg_authen.php" method="post">
     <h2> VEHICLE REGISTRATION </h2>

     <label>Registration Number </label>
     <input type="text" name="Registration_Number" placeholder="Registration Number"><br>
     <label>Engine Number</label>
     <input type="text" name="Engine_Number" placeholder="Engine Number"><br>
     <label>Chassis Number</label>
     <input type="text" name="Chassis_No" placeholder="Chassis Number"><br>
     <label for="Vehicle_Class">Vehicle Class</label><br>
  <select name="Vehicle_Class" id="Vehicle_Class">
    <option value="Class 1">Class 1</option>
    <option value="Class 2">Class 2</option>
    <option value="Class 3">Class 3</option>  
    <option value="Class 4">Class 4</option>
    <option value="Class 5">Class 5</option>
    <option value="Class 6">Class 6</option> 
    <option value="Class 7">Class 7</option>
    <option value="Class 8">Class 8</option> 
  </select><br><br>
     <label for="Taxation_Class">Taxation Class</label><br>
 <select name="Taxation_Class" id="Taxation_Class">
    <option value="6 Tyre Truck">6 Tyre Truck</option>
    <option value="10 Tyre Multy Axie Truck">10 Tyre Multy Axie Truck</option>
    <option value="12 Tyre Single Chassis Truck">12 Tyre Single Chassis Truck</option>  
    <option value="14 Tyre Single Chassis Rigid Truck">14 Tyre Single Chassis Rigid Truck</option>

  </select><br><br>
     <label for="Make">Make</label><br>
 <select name="Make" id="Make">
    <option value="MACK">MACK</option>
    <option value="Kenworth">Kenworth</option>
    <option value="TATA">TATA</option>  
    <option value="Isuze">Isuze</option>
    <option value="MAZ-5440">MAZ-5440</option>  
    <option value="Foton">Foton</option>

  </select><br><br>
     <label for="Type_of_body">Type of body</label><br>
 <select name="Type_of_body" id="Type_of_body">
    <option value="Flatbed">Flatbed</option>
    <option value="Van Body">Van Body</option>
    <option value="Dump Tipper">Dump Tipper</option>  
    <option value="Tanker">Tanker</option>
    <option value="Tractor">Tractor</option>  
    <option value="Chassis Only">Chassis Only</option>

  </select><br><br>
    <label>Color 1</label>
     <input type="text" name="Color_1" placeholder="Color 1"><br>
     <label>Color 2</label>
     <input type="text" name="Color_2" placeholder="Color 2"><br>
     <label for="fual_type">Fual Type</label><br>
<select name="fual_type" id="fual_type">
    <option value="Diesel">Diesel</option>
    <option value="Petrol">Petrol</option>

 </select><br><br>
     <label>Cylinder Capacity</label>
     <input type="text" name="Cylinder_Capacity" placeholder="Cylinder Capacity"><br>
     <label>First Registration</label>
     <input type="date" name="First_Registration" placeholder="First Registration"><br>
     <label>Responsible Owner</label>
     <input type="text" name="Responsible_Owner" placeholder="Responsible owner"><br>

  <label for="status">Current Status</label><br>
  <select name="status" id="status">
    <option value="Off Duty">Off Duty</option>
    <option value="On Duty">On Duty</option>
    <option value="Repair">Repair</option>  
  </select><br><br>

     <label>Remarks</label>
     <input type="text" name="Remarks" placeholder="Remarks"><br>
     <label>Vehicle Photo</label>
         <input type="file" name="Vehicle_Photo">
    <input type="submit" name="submit" value="Upload">

     <a href="logout.php">Submit</a>
</form>
</body>

</html>