<?php
session_start();
if(isset($_SESSION['login_id']))
{
	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Service</title>
  <link rel="stylesheet" href="home_style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		/*$(document).ready(function(){
		$('#serviceCenter').click(function(){
			$('#serviceCenter').load("district.php");
		});
	});	*/
	</script>
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
			letter-spacing:1px;
			font-size:27px;
			
			
		}
		*{
			color:#00cc00;
			font-family:georgia;
			font-size:20px;
		}
		select,textarea,option{
			
			border: 1px solid #ccccb3;
			text-align:center;
			width:90%;
			margin-bottom: 40px;
			
			
		}
		.serviceBox_text{ width:70%;
				
				margin:60px 80px;}
		#serviceBox{
				position:relative;
				top:40px;
				left:20px;
				}
		.serviceBox_text_child{
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
			top:-1px;
			left:4px;
			float:right;
			font-size:15px;
			color:white;
			font-family:Comic Sans, Comic Sans MS, cursive;
			font-style: oblique;
}	
#construction{
    position:absolute;
    top:42px;
    left:0px;
    background:rgb(0,0,0,0.8);
    height:100%;
    width:100%;

}	
#construction_txt{
    
    margin-top:18%;
    margin-left:40%;
    color:white;
    font-size:30px;

}
#2con{
    position:relative;
    background:rgb(0,0,0,0.5);
}
	</style>
	  <link rel="stylesheet" href="home_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<body>

<div class= "navbar" style="width:100%; top:0; left:0;"> 
		<nav>
		 <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
		  <a href="report.php"><i class="fa fa-fw fa-edit"></i>Reports</a>
		  <a href="complaint.php"><i class="fa fa-fw fa-edit"></i> Complaints</a> 
		 <a href="logout.php" id="logout"><i class="fa fa-fw fa-user"></i> Logout</a>
		
		<div class="welcome_box">
    		<img src=" <?php echo $_SESSION["file"]; ?> " style="border-radius:50%;height:35px;width:35px;margin-right:-14px;margin-top:4px;" />
			<div class="welcome_txt"><a href="account.php" class="welcome_txt"><?php echo ucwords($_SESSION["username"]);?></a></div>	
	</div>
		</nav>
		</div>
	
	<div id="2con">
		<form id="serviceBox" method="post">
	
	<fieldset>
	<legend>Choose your service center</legend>
		<div class="serviceBox_text">
			<select name="District" >
			<option value=" ">--District--</option>
			<option value="Kottayam"><a href="district.php?dist=Kottayam">Kottayam</a></option>
			<option value="Thrissur">Thrissur</option>
			</select><br>
			
			<select id="serviceCenter">
				<option value=" ">--service centers--</option>
			</select>
					

		</fieldset>
			<div class="serviceBox_text_child">
				<p> Address goes here </p>
			</div>
		</div>
</div>
		<div id="construction">
    		<h2 id="construction_txt">Under Construction</h2>
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