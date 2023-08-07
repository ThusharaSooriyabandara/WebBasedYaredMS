<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

   
<style>

    body {

    background: #91a716;

    display: flex;

    justify-content: center;

    align-items: center;

    height: 100vh;

    flex-direction: column;

}

*{

    font-family: cursive;

    box-sizing: padding-box;

}

form {

    width: 1000px;

    border: 3px solid rgb(177, 142, 142);

    padding: 20px;

    background: rgb(85, 54, 54);

    border-radius: 20px;

}

h2 {

    text-align: center;

    margin-bottom: 40px;

}

input {

    display: block;

    border: 2px solid #ccc;

    width: 95%;

    padding: 10px;

    margin: 10px auto;

    border-radius: 5px;

}

label {

    color: #888;

    font-size: 18px;

    padding: 10px;

}

button {

    float: right;

    background: rgb(35, 174, 202);

    padding: 10px 15px;

    color: #fff;

    border-radius: 5px;

    margin-right: 10px;

    border: none;

}

button:hover{

    opacity: .10;

}

.error {

   background: #F2DEDE;

   color: #0c0101;

   padding: 10px;

   width: 95%;

   border-radius: 5px;

   margin: 20px auto;

}

h1 {

    text-align: center;

    color: rgb(134, 3, 3);

}

a {

    float: left;

    border-radius: 10px;

    margin-right: 10px;

    border: none;

    text-decoration: none;

}



    body {
  background-image: url('GC.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  opacity: 0.9;
}
form{
    background: #100E0E;
}
h2 {

    text-align: center;

    color: white;

}
 label {
            color: white;
        }

        input {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #FF6E31;
            border-radius: 5px;
            background-color: #100E0E;
            color: white;
        }

         button, a.button {
            background-color: #FF6E31;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        button:hover, a.button:hover {
            background-color: #477c47;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
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
.button {
  float: right;
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

     <form action="Gate Checker login authe.php" method="post">

        <h2>LOGIN AS A Gate Checker</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit">Login</button>
        <button type="reset" value="Reset">Reset</button>
        <a href="main_page.php" class="button">Back</a>

     </form>

</body>

</html>