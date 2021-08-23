<?php
	error_reporting(0);
	include("db.php");
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
		$usertype = $_POST['usertype'];
		$username = stripslashes($username);
		$username = mysqli_real_escape_string($link, $username);//mysqli_real_escape_string
		$password = stripslashes($password);
		$password = mysqli_real_escape_string($link, $password);
		//Checking is user existing in the database or not
        $query = "SELECT * FROM usermanager WHERE username='$username' and password='".md5($password)."' and status='1'";
		$result = mysqli_query($link, $query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			while($row=mysqli_fetch_array($result)) { 
				$_SESSION['usertype'] = $row['usertype'];
			}
			$_SESSION['username'] = $username;
			$usertype = $_SESSION['usertype'] ;
			
			if($usertype ==1){
				header("Location: admin.php");// index panel			
			}elseif($usertype ==2){
				header("Location: acl/employee.php");// student panel
			}
        }else{
				echo "<div class='form'><h3>Username/Password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
			}
    }else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<h2>Welcome to our Bike Service Booking<h2>
 
<h2>Please Login</h2>
<!--<button type="button" class="userbtn">As a User</button>
<button type="button" class="adminbtn">As a Admin</button>-->


<form action="" method="post" name="login">
  <div class="imgcontainer">
    <img src="user.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>User Name</b></label>
    <input type="text" placeholder="Enter User Name" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter password" name="password" required>
        
    <input class="cancelbtn" name="submit" type="submit" value="Login" />	
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <!--<button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>-->
  </div>
</form>
	<?php } ?>
</body>
</html>