<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  background-image: url('12.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
}

.navbar {
  overflow: hidden;
  background-color: black;
  padding: 10px;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  transition: background-color 0.3s;
}

.navbar a:hover {
  background-color: #4CAF50;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  transition: background-color 0.3s;
}

.dropdown:hover .dropbtn {
  background-color: #4CAF50;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown-content a {
  color: #333;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  transition: background-color 0.3s;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: #333;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.container {
  max-width: 960px;
  margin: 0 auto;
  padding: 20px;
}

.logo {
  font-size: 24px;
  font-weight: bold;
  color: white;
  text-decoration: none;
}

.logo:hover {
  text-decoration: underline;
}

</style>
</head>
<body>

<div class="navbar">
  <a class="logo" href="#home">
    <img src="logo.png" alt="Logo" style="vertical-align: middle; height: 80px; width: 80px;">
  </a>
  <a href="#home">Home</a>
  <a href="About.php">About</a>
  <a href="#home">Contact</a>
  <a href="main_page.php">Login</a>
  <div class="dropdown">
    <button class="dropbtn">Sign Up
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="sign_up_admin.php">As an Admin</a>
      <a href="sign_up_gc.php">As a Gate Checker</a>
      <a href="sign_up_vo.php">As a Vehicle Operator</a>
      
    </div>
  </div>
</div>

<div class="container">
  <!-- Your content goes here -->
</div>

</body>
</html>
