<!doctype html>
<html><head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, inital-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<title>Untitled Document</title>
	<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
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

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
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

.bg-img 
{
  /* The image used */
  background-image: url("https://www.therunningrams.org/images/welcome_background.jpg?crc=3942963768");

  min-height: 980px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.register_box
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
	h2
		{
			color: white;
			text-align: center;
		}
	span
		{
			color: white;
		}
	a
		{
			color: red;
		}
</style>
</head>

<body>
	<div class="bg-img">
	<div class="register_box">
  <form method = "post" action="" enctype="multipart/form-data">
    <table align="left" width="70%">
		<h2>Register.</h2>
          <br />
          <span> Already have an account ? <a href="loginphp.php">Login Now.</a><br />
          <br />
          </span>
      <tr>
      <b>UserName:</b>
       <input type="text" name="username" required placeholder="UserName" />
      </tr>
      <tr>
       <b>Password:</b>
       <input type="password" id="password_confirm1" name="password" required placeholder="Password" />
      </tr>
      <tr>
       <b>Confirm Password:</b>
       <input type="password" id="password_confirm2" name="confirm_password" required placeholder="Confirm Password" />
      </tr>
       <input type="submit" name="register" class="button" value="Register" />
    </table>
  </form>
</div>
	</div>
<?php
$con = new mysqli('localhost', 'root', '', 'minhtam');

	if (!$con) 
	{
    	echo "ket noi that bai";
	}

if (isset($_POST['register'])) 
{
    if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) 
	{
		$username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
		
		
        $check_exist = mysqli_query($con, "select * from users where username = '$username'");
        $username_count = mysqli_num_rows($check_exist);
        $row_register = mysqli_fetch_array($check_exist);
       
			if ($username_count > 0) 
			{
				echo "<script>alert('Sorry, your username already exist in our database !')</script>";
			} 
		
			elseif ($row_register['username'] != $username && $password == $confirm_password) 
			{
				$run_insert = mysqli_query($con, "insert into users values ('$username','$password') ");
            
				if ($run_insert) 
				{
					echo "<script>alert('Account has been created successfully!')</script>";
					echo "<script>window.open('loginphp.php','_self')</script>";
				}
        }
    }
}
?>

</div>
</body>
</html>