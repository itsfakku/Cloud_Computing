<!doctype html>
<html>
<?php
	echo "string";
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	
	<style>
			*{padding: 0; margin: 0;}
		header
		{
			background: blue;margin-top: 15px; height: 150px; line-height: 150px; color: white; font-size: 32px; text-align: center;
		}
		section
		{
			background: blue; margin-top: 5px; height: 250px; color: white;line-height: 250px; font-size: 32px; text-align: center;
		}
		article
		{
			background: blue; margin-top: 5px; height: 250px; line-height: 250px; color: white; font-size: 32px; text-align: center;
		}
		aside
		{
			background:blue; margin-top: 5px; height: 250px; line-height: 250px; color:white; font-size: 32px;text-align: center;
		}
		footer
		{
			background: blue; margin-top: 5px; height: 30px; line-height: 30px; color:white; font-weight: bold; font-size: 32px; text-align: center;
		}
		
body
{
  background: #343d46;
	color: white;
}
 
input [type="text"]
		{
		 width: 130px;
     	 box-sizing: border-box;
     	 border: 1px solid black;
     	 border-radius: 4px;
     	 outline:none;
      	padding: 12px 14px;
		}
		input[type="text"]:focus{
    width:500px; 
}
input[type="text"] 
	{
      width: 900px;
      box-sizing: border-box;
      border: 1px solid black;
      border-radius: 4px;
      outline:none;
      padding: 12px 14px;

      transition:0.6s ease-in-out;
    }
		input[type="text"]:focus
		{
    		width:1065px; 
   		    background-color:#343d46;
		}
button
		{
			width: 50px;
			height: 40px;
		}
.pagination
		{
		  width: 300px;
		  margin: 0 auto;
		}
.list-product-title
		{
			color: red;
		}
.list-product-subtitle
		{
			color: red;
		}
h5
		{
			color: black;
		}
.card-text
		{
			color: black;
		}
.search
		{
			font-size: 11px;
		}
.card-img-top
		{
  			cursor: pointer;
 		    transition: 0.3s;
		}
		.card-img-top:hover
		{
			opacity: 0.7;
		}
		.button2
		{
			background-color: #4CAF50;
			position: absolute;
  			right: 150px;
  			width: 100px;
  			border: 3px solid #73AD21;
		 	padding: 10px;
		}
		h2
		{
			text-align: center;
			
		}
		h3
		{
			font-size: 14px;
			color: white;
		}
		.d-block
		{
			background-position: center;
			background-size: cover;
		}
		a
		{
			font-size: 13px;
		}
		
		
		
		/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Add an active class to highlight the current page */
.active {
  background-color: #4CAF50;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
		
		
	</style>
  </head>
<body>
 <div class="container">
		<div class="row">
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
			</div>
		
			<div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"> <span class="glyphicon glyphicon-user"></span> Home </a></li>
                    <li><a href="Cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Your cart </a></li>
                    <li><a href="Contact.html"><span class="glyphicon glyphicon-envelope"></span> Contact </a></li>
					<li><a href="Timeline.html"><span class="glyphicon glyphicon-time"></span> Our Timeline </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li style="font-size:16px" class="dropdown">
                        <a data-toggle="dropdown" href=""> My Account <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="loginphp.php"> Login </a></li>
                            <li><a href="registrationphp.php"> Registration </a></li>
                        </ul>
                    </li>
				</ul>
            </div>
			<div class="search-container">
				<form action="">
					<div class="search">
						<input type="text" placeholder="Search..." name="search">
						<button type="submit"> <i class="glyphicon glyphicon-search"  style="color:black"> </i> </button>
					</div>
				</form>
			</div>
			</nav>
			</div>
	</div>
			
	<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/banner.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/banner4.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/banner3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	
	
	<div class="container">
	<div class="row mt-5">
		<h2 class="list-product-title">New product</h2>
		<div class="list-product-subtitle">
			<p>List product description</p>
		</div>
		<div class="product-group">
			
			<?php
			  $con = new mysqli('localhost', 'root', '', 'minhtam');
			  if (!$con)
			  {
				echo "Connection failed !";
			  }
		  
		$get_pro = "select * from song";
		
		$run_pro = mysqli_query($con, $get_pro);
		
		while($row_pro = mysqli_fetch_array($run_pro))
		{
		  $song_id = $row_pro['IDSong'];
		  $song_name = $row_pro['NameSong'];
		  $song_category = $row_pro['IDCate'];
		  $song_role = $row_pro['IDRole'];
		  $song_file = $row_pro['SongFile'];
		  $song_image = $row_pro['SongImage'];
	     
		  
		  echo "
		      <div class='col-md-4 col-sm-6 col-xs-12'>
			    <h3>$song_name</h3>
				<img src='images/$song_image' width='300' height='300' />
				
				 <audio id='audio_1' controls preload autoplay='autoplay' loop>
								<source src='images/$song_file' />
							</audio>
				<a href='Cart.php?add_cart=$song_id'>
				<br /> <br />
				  <button style='float:right', class='button2'> <h3> Add to Cart </h3> </button>
				</a>
				<br /> <br /> <br />
			  </div>
			  
		  ";
		};
			
	?>
			


		</div>
	</div>
</div>
	<br /><br /><br /><br />
		<ul class="pagination">
			<li class="page-item"> <a class="page-link" href="#"> Previous </a></li>
			<li class="page-item"> <a class="page-link" href="#"> 1 </a></li>
			<li class="page-item"> <a class="page-link" href="#"> 2 </a></li>
			<li class="page-item"> <a class="page-link" href="#"> 3 </a></li>	
			<li class="page-item"> <a class="page-link" href="#"> Next </a></li>
		</ul>
	
<div class="topnav" id="myTopnav">
  <a href="addproduct.php" class="active"> Add a Product </a>
	<a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a>
  <a></a><a></a><a></a><a></a><a></a>
	<a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a>
  <a href="Edit.php"> Edit a Product </a>
</div>

			
	<script src="jquery-3.3.1.min.js"jquery-3.3.1.min.js""></script>
	<script src="bootstrap/bootstrap-4.5.2-dist/js/bootstrap.min.js"></script>
</body>
</html>
