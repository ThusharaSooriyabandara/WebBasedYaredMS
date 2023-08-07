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

    height: 200vh;

    flex-direction: column;


}
textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
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
<form action="repair in authe.php" method="post">
     <h2> REPAIR IN DETAILS </h2>

     <label>Vehicle Reg. No. </label>
     <input type="text" name="Vehicle_Reg_No" placeholder="Vehicle Registration Number"><br>
     <label>Repair in Date & Time</label>
     <input type="datetime-local" name="Date_Time"><br>
     <label>Current Driver Name</label>
     <input type="text" name="Current_Driver_Name" placeholder="Current Driver Name"><br>
     <label>TP No</label>
     <input type="tel" name="TP_No" placeholder="+94..."><br>
      <label>Current Mileage</label>
     <input type="text" name="Mileage" placeholder="Current Mileage"><br>
      <label>Issue</label>
     <input type="text" name="Issue" placeholder="Issue"><br>
     <label>Current Status</label>
     <input type="text" name="Current_Status" placeholder="Current Status"><br>
      <label>Previous Repair Maintenance</label>
     <input type="text" name="Previous" placeholder="Previous Repair Maintenance"><br>
      <label>Estimate Cost</label>
     <input type="text" name="Cost" placeholder="Rs."><br>
      <label>Repair Timeline</label>
     <input type="text" name="Repair_Timeline" placeholder="Repair timeline"><br>
      <label >Additional Notes</label>
     <textarea placeholder="Additional_Notes" name="Additional Notes"></textarea>

     <input type="reset" class="btn btn-primary" name="Reset" value="Reset">
     <input type="submit" class="btn btn-primary" name="submit" value="Submit">
</form>
</body>

</html>


