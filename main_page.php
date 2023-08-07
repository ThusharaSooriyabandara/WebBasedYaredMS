<!DOCTYPE html>
<html>

<head>
    <title>HOME</title>
    <style>
        body {
            background-image: url('gettyimages-484355041-612x612.jpg');
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
            opacity: 1;
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
            border: 3px solid #1A120B;
            padding: 20px;
            background: #1A120B;
            border-radius: 20px;
            margin-top: 100px;
        }

        h1 {
            text-align: center;
            color: #860303;
        }

        a {
            text-decoration: none;
        }

        button {
            background: #5D9C59;
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
            <a href="About.php">About</a>
            <a href="#">Contact</a>
        </div>
    </div>

    <div class="content">
        <h1>Login</h1>
        <a href="index.php"><button type="submit">Admin</button></a>
        <a href="Gate Checker login.php"><button type="submit">Gate Checker</button></a>
        <a href="vehicle operator login.php"><button type="submit">Vehicle Operator</button></a>
        <a href="Dashboard/dash board.php"><button type="submit">Dash Board</button></a>
    </div>

  
</body>

</html>
