<!DOCTYPE html>
<html>

<head>
    <title>Sign Up As an VO</title>
    <style>
        body {
            background-image: url('12.jpg');
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

        form {
            background: black;
            border: 2px solid #FF6E31;
            border-radius: 20px;
            padding: 20px;
            max-width: 800px; /* Increase the max-width to make the form larger */
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }

        input[type="text"],
        input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .btn {
            background: #FF6E31;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            width: 45%;
            font-size: 16px;
        }

        .btn:hover {
            background: #FF8431;
        }

        .link {
            color: blue;
            text-decoration: none;
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
        verify_admin_account.php?code=verification_code_here

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

    <form action="sign_up_gc_authentication.php" method="post">
        <h1>Sign Up As a Vehicle Operator</h1>

        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

    <input type="text" name="uname" placeholder="User Name" required>
    <input type="password" name="password" placeholder="Password" pattern=".{8,}" required title="Password must be at least 8 characters long">
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required title="Please repeat the password">
    <input type="text" name="email" placeholder="Email" required>


        <div class="btn-container">
<h3 style="color: white;">By creating an account, you agree to our <a href="#" class="link">Terms & Privacy</a></h3>
            <div>
                <input type="reset" class="btn" name="Reset" value="Reset">
                <input type="submit" class="btn" name="submit" value="Submit">
            </div>
        </div>
    </form>

</body>

</html>
