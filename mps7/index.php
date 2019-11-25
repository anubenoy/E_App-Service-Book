<?php
session_start();
session_destroy();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<style>
	body {
		font-family: Arial, Helvetica, sans-serif;
       
	}
    .b1{ background:rgba(0,0,0,0.8);}
	
	.headerBox{
	position:relative;
	 background-image:url(doctor_1.jpg); 
	 background-size:cover; 
	height:380px;
	}

.footer{
	margin-top:50px;
	position:relative; 
 	bottom:0px; 
	width:100%;
	height:200px;
	overflow:hidden;
	padding:2px 370px;
	box-sizing: border-box;
	background-color: #00cc00;
	}
#img_footer{
		position:absolute; 
 		bottom:0px; 
  		left:-1px;
		float:left;
	}
.navbar {
  position:relative;
  top:-380px; 
  left:0px;
  width: 100%;
  
  background-color:rgba(0,0,0,0.8);
  overflow:auto;

 
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: rgba(9, 173, 146, 0.8);
  text-decoration:none;
  color:white;
}

.active {
  background-color: rgba(9, 173, 146, 0.5);
}

.headerTitle{
		position:absolute; 
  		top:200px; 
  		left:360px;
		font-size:50px;
		font-family:Georgia;
		font-weight:600;
		color:white;
        text-shadow:1px 1px 2px black;
		
}
.headerTitleBox{
		
		background-color:rgb(0,0,0,.3);
		height:100%;
		width:100%;
	}


#device{
		margin-top:13px;
		
	} 

#device a {
  float: center;
  padding: 12px;
  color: #00cc00;
  text-decoration: none;
  font-size: 20px;
} 

.step{
	font-style:oblique;
	font-weight:bold;
    text-align:center;
    
    color:smokywhite;
    text-shadow:3px -2px 1px black;	
	} 
	
	
#contacts{
	padding:7px 0px;
	text-align: left;
	font-size:20px;color:white;
    font-style:oblique;
    text-shadow:1px 1px 2px black;
	}

.container{
	padding:30px;
	margin-top:5px;
    
}
#btn_device{border:none;
				background:white;}

			

	</style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script>
	function fun(){
		<?php 
			$_SESSION['val']="Mobile";
		?>
	//	alert("<?php echo $_SESSION['val'] ?>")
	}
	function funn(){
		<?php 
			$_SESSION['val']="Laptop";
		?>
		//alert("<?php echo $_SESSION['val'] ?>")
	}
 </script>
</head>
<body>

	<div class="headerBox">

		<div class="headerTitleBox">
		<div class="headerTitle">Your E-appliance Doctor</div>
		</div>
		
		
		<div class= "navbar"> 
		<nav>
		 <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
 		 <a href="serviceBook.html"><i class="fa fa-fw fa-edit"></i> Book Service</a> 
 		 <a href="index.php#contacts"><i class="fas fa-phone"></i> Contacts</a> 
  		 <a href="index.html" style='float:right'><i class="fa fa-fw fa-user"></i> Login</a>
		<a href="index.html" style='float:right'><i class="fa fa-fw fa-user"></i> Technician</a>

		</nav>
		</div>
		
		
	</div>
	
		

<div id="device" class="container">
<center>
	<div class="row">
    	<div class="col-sm-12" style="background-color:white;">
		<caption><h2 class="step"><b>Step 1.</b> What appliance needs to be repaired? </h2></caption></div></div>
	<br><br><br><br><br>
	<div class="row">
        <div class="col-sm-5" style="background-color:white;">	
		<button onClick="fun()" id="btn_device"><i class='fas fa-mobile-alt' style='font-size:180px;color:#00cc00;'></i><br><br><center>Mobile<center></button></div>		<div class="col-sm-2">
		<table style="border:none; height:180px; border-right:2px solid green"><td>&nbsp <br><br></td></table> </div>
    	<div class="col-sm-5" style="background-color:white;">
		<button onClick="funn()" id="btn_device"><i class='fas fa-laptop' style='font-size:180px; color:#00cc00;'></i><p><center>Laptop<center></p></button></div>	
	</div>
</center>
</div>


<div class="container" id="login">
	<caption class="login_cap"><h2 class="step" ><b>Step 2.</b> Tell us the issue you are having. Register to lodge your compliant.</h2></caption><br><br>
    
    <form action="login.php" method="POST" class="login_home">
		<div class="form-group">
			<label for="uname"  style='color:#00cc00;'>User Name:</label>
			<input type="text" class="form-control" id="username" placeholder="Enter username" name="uname">
		</div>
		<div class="form-group">
			<label for="pass"  style='color:#00cc00;'>Password:</label>
			<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
        </div>

		<center><br><button type="submit" class="btn btn-default" style='width:200px; background:#00cc00;color:white;'>Submit</button><br><br>
		<a href="register.php">If not a User.Click here to Register!</a></center>
	</form>
</div>

	<div class="container">
		<caption class="step_cap"><h2 class="step" ><a href="serviceBook.html" style="color:#3d3d29;"><b>Step 3.</b>Choose your nearest service centre.</h2></a></caption>
		<caption class="step_cap"><h2 class="step" ><b>Step 4.</b>Call to book your service.</h2></caption>
		<cation class="step_cap"><h2 class="step" ><b>Step 5.</b>Get on with your day.</h2></caption>
    </div>


<div class="footer">
		<div class="logo"><img src="capture3.PNG" alt="e-doc" id="img_footer" width="300" height="200"></div>
		<div id="contacts">
			<h3 style="color:#80ff80;">Contact Us</h3>
			<b> Phone_no :</b> 6356897412<br>
			<b>Email :</b><a href='mailto:edoc@ac.in' > edoc@ac.in</a> <br>
		</div>
</div>
		
        	
       			 
</body>
</html>