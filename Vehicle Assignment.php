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
.btn {
    float: right;

    background: rgb(35, 174, 202);

    padding: 10px 15px;

    color: #fff;

    border-radius: 5px;

    margin-right: 10px;

    border: none;

    width: 200px;
  }
</style>
</head>

<body>
<form action="Vehicle Assign Authe.php" method="post">
     <h2> Vehicle Assignment </h2>

     <label>Driver Reg. No. </label>
     <input type="text" name="DriverRegNo" placeholder="Driver Registration Number"><br>
     <label>Driver Name</label>
     <input type="text" name="DriverName" placeholder="Driver Name"><br>
     <label>Assigned Vehicle Reg. No. </label>
     <input type="text" name="Assigned_Vehicle_Reg_No" placeholder="Assigned Vehicle Reg. No."><br>
     <label> Status</label>
      <br>
      <select name="CurrentStatus" id="CurrentStatus">
      <option value="Order">Order</option>
      <option value="Receiving">Receiving</option>

  </select><br><br>
     <label>Trip ID</label>
     <input type="Number" name="Trip_ID" placeholder="Trip ID"><br>
     <label>Trip Start Date</label>
     <input type="datetime-local" name="Trip_Start_Date" placeholder="Trip Start Date"><br>
     <label>Trip End Date</label>
     <input type="datetime-local" name="Trip_End_Date" placeholder="Trip End Date"><br>


     <input type="reset" class="btn btn-primary" name="Reset" value="Reset">
     <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    
</form>
</body>

</html>