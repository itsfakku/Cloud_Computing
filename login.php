<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="Login.php" rel="stylesheet" type="text/css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
<style>
	body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */	
input[type=text], input[type=password] 
{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus 
{
  background-color: lightblue;
}
		input[type=password]:focus 
{
  background-color: lightblue;
}

.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
	.button {
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
}

.button:hover 
{
	background-color: #3e8e41
}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.bg-img 
{
  /* The image used */
  background-image: url("images/background2.jpg");

  min-height: 980px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
h1
		{
			text-align: center;
			color: 	white;
		}
.login_box 
{
  position: absolute;
  right: 0;
  margin: 250px;
  max-width: 800px;
  padding: 16px;
  background-image: url("images/background.png");
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  left: 250px;
}
b
		{
			color: white;
		}
a
		{
			color: white;
		}
span
		{
			color: red;
		}
		.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>

<body>
	
<div class="bg-img">
	<div class="login_box">
	 <form method = "post" action="">
        <h1> WELCOME BACK ! </h1>
          </span>
        <label for="username"><b> Username </b></label>
    	<input type="text" placeholder="username" name="username" required>
        <label for="password"><b>Password </b></label>
        <input type="password" name="password" required placeholder="password" />
		<label>
   			 <input type="checkbox" name="remember"><b> Remember me </b>
 		</label>
		<br /><br />
        <input type="submit"  class="button" name="login" value="Login" />
		<br /><br />
		
		<span> Need an account ? <a href="registrationphp.php"> Register Here </a><br /> </span>
          <br />
	 </form>
	</div>
</div>
	
	
<?php 
	$con = new mysqli('localhost', 'root', '', 'minhtam');
if (!$con)
	{
		echo "Connection failed !";				
	}
	
if(isset($_POST['login']))
{
  	$username = $_POST['username'];
  	$password = $_POST['password'];
  
		$result = mysqli_query($con, "select * from users where Username='$username' AND Password='$password' " );
  
		$check_login = mysqli_num_rows($result);
  
		$row_login = mysqli_fetch_array($result);
  
		if($check_login == 0)
  		{
			echo "<script>alert('Password or username is incorrect, please try again!')</script>";
			exit();
  		}  
  	if($check_login > 0)
	{ 
  		echo "<script>alert('You have logged in successfully !')</script>";
		echo "<script>window.open('index.php','_self')</script>";
  	}
}

?>
</body>
</html>