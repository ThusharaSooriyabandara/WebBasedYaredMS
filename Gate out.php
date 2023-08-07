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
     <h2> Gate Out DETAILS </h2>

     <label>Vehicle Reg. No. </label>
     <input type="text" name="Vehicle_Reg_No" placeholder="Vehicle Registration Number"><br>
     <label>Date & Time</label>
     <input type="datetime-local" name="Date_Time"><br>
    

     <input type="reset" class="btn btn-primary" name="Reset" value="Reset">
     <input type="submit" class="btn btn-primary" name="submit" value="Submit">
</form>
</body>

</html>


