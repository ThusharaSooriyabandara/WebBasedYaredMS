

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

<style>

body {
            background-image: url('GC.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: black;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo img {
            vertical-align: middle;
            height: 80px;
            width: 80px;
            margin-right: 10px;
        }

        .nav-links {
            margin-right: 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .nav-links a:hover {
            background-color: #333;
        }

        .content {
            width: 1000px;
            border: 3px solid #6C3428;
            padding: 20px;
            background: #6C3428;
            border-radius: 20px;
            margin-top: 100px;
        }

        h1 {
            text-align: center;
            color: #860303;
        }
        h2
        {
            text-align: center;
        }

        a {
            text-decoration: none;
        }

        button {
            background: #1A120B;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            margin: 10px 0;
            cursor: pointer;
            display: block;
            width: 100%;
            text-align: center;
        }

        button:hover {
            background: #1c7e96;
        }
</style>
</head>

<body>
        <div class="header">
        <a class="logo" href="#home">
            <img src="logo.png" alt="Logo">
           
        </a>
        <div class="nav-links">
            <a href="first_main_page.php">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
    </div>
<div class="content">
     <h2> VEHICLE OPERATOR </h2><br>

        <a href="RepairIn/repairIn-create.php"><button type="submit">Repair In</button></a><br>
        <a href="RepairOut/repairOut-create.php"><button type="submit">Repair Out</button></a><br>
        <a href="Vehicle Data.php"><button type="submit">Vehicle Data</button></a>

<a href="vehicle operator login.php" class="btn btn-danger float-end" style="background-color: #1A120B; color: white; font-size: 18px; border-radius: 5px; padding: 10px 15px; margin: 10px 0; cursor: pointer; display: block; width: 10%; text-align: center; float:   right;">Back</a>
</div>

</body>

</html>

