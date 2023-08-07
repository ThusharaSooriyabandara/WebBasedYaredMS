
<?php 

session_start(); 

include "Gate Checker login Connect.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: Gate Checker login.php.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: Gate Checker login.php.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM user_gc WHERE uname='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['uname'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['uname'] = $row['uname'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: Gate Checker home.php");

                exit();

            }else{

                header("Location: Gate Checker login.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: Gate Checker login.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: Gate Checker login.php.php");

    exit();

}