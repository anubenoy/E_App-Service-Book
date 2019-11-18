<?php
session_start();
if(isset($_SESSION['login_id']))
{?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Complaint</title>
  <link rel="stylesheet" href="home_style.css">
	<style>
		body{
			background-color:#b3ffb3;
			
			}
		fieldset{
				border:2px solid #00cc00;
				margin:40px 80px;
				height:340px;
				width:500px;
				border-radius:30px;
				background-color:white;
			}
		legend{
			margin-left:5%;
			font-family:forte;
			letter-spacing:-1px;
			font-size:27px;
			
			
		}
		*{
			color:#00cc00;
			font-family:georgia;
			font-size:20px;
		}
		input,textarea{
			border:none;
			border-bottom: 1px solid #ccccb3;
			text-align:center;
			width:100%;
			margin-bottom: 40px;
			
			
		}
		#register_btn,#reset_btn{
			position:relative;
			top:70px;
			left:40px;	
			border:none;
			outline:none;
			height: 40px;
			width:130px;
			color:#262626;
			font-size:16px;
			font-style:oblique;
			background: lavender;
			cursor:pointer;
			border-radius:20px;
		
		}
		
		#register_btn:hover,#reset_btn:hover{
			background: green;
			color: #fff;
		}
 
		.complaint_text{ width:70%;
				
				margin:60px 80px;}
		#complaintRegister{
				position:relative;
				top:40px;
				left:20px;
				}
		.complaint_text_child{
				position:absolute;
				top:170px;
				left:850px;
				}
		i{ color:white;}
		#logout{
			float:right;
		}
		.welcome_box{
			float:right;
			position:relative;
			right:10px;
			
		}
		.welcome_txt{
			position:relative;
			top:10px;
			left:4px;
			float:right;
			font-size:15px;
			color:white;
			font-family:Comic Sans, Comic Sans MS, cursive;
			font-style: oblique;
}	
		}
		
		
	</style>
	<link rel="stylesheet" href="home_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<body>

<div class= "navbar" style="width:100%; top:0; left:0;"> 
		<nav>
		 <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
		  <a href="serviceBook.php"><i class="fa fa-fw fa-edit"></i> Book Service</a>
		  <a href="report.php"><i class="fa fa-fw fa-edit"></i> Complaints</a>  
 		 <a href="index.php#contacts"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
  		 <a href="logout.php" id="logout"><i class="fa fa-fw fa-user"></i> Logout</a>
		
		<div class="welcome_box">
    		<img src=" <?php echo $_SESSION["file"]; ?> " style="border-radius:50%;height:35px;width:35px;margin-top:4px;" />
			<div class="welcome_txt"><?php echo ucwords($_SESSION["username"]);?></div>	
	</div>	
		</nav>
		</div>
	<form id="complaintRegister" method="POST" action="complaint_submit.php">
	

	<fieldset>
	<legend> Register Complaint </legend>
		<div class="complaint_text">
			<input type="text" name="modelNo" placeholder="Model No'" required><br>
			<input type="text" name="deviceName" placeholder="Device Name' required"><br>
			<textarea  rows="0" cols="20" name="complaint" placeholder="Complaint" required></textarea>
			<input type="submit" value="Register" id="register_btn" name="register_btn">
			<input type="reset" value="Reset" id="reset_btn" name="reset_btn">
		</fieldset>
			<div class="complaint_text_child">
				<p> Report goes here </p>
			</div>
		</div>
		
</body>
</html>
<?php
		}
	else
 		{?>
			<script>
			alert("Already Logout! \n Login to continue.");
			window.location.href="index.php";
			</script>
			
			<?php
		}?>