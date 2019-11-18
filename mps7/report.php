<?php
session_start();
if(isset($_SESSION['login_id']))

{?>
<html>
<head>  
    

    <style>
        table{
            text-align:center;
            margin:5px 250px; ; 
            padding:2px;
            border-collapse:collapse; 
            width:60%;
            font-style:oblique;
        }
        tr:nth-child(odd) {background: #CCC}
        tr{height:40px;}
        th{font-size:20px;
            background:grey;
            color:white;}
            h2{
                font-size:40px;
                color:rgb(255, 80, 80);
                text-align:center;
                font-style:oblique;
                margin-top:100px;
            }
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
.navbar {
  position:absolute; 
  top:6px; 
  left:10px;
  width: 98.5%;
	box-sizing: border-box;
  background-color: rgb(255, 80, 80,0.9);
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  
}

.navbar a:hover {
  background-color: #000;
}
    </style>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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
    <h2>COMPLAINTS</h2>
</body>
</html>
<?php

    include("dbconnection.php");
   $login_id=$_SESSION['login_id'];
    $sql="select * from complaint_tbl where login_id=$login_id";
	$result=mysqli_query($con,$sql);

	if(mysqli_num_rows($result)>0) //search fo registered complaints of current users
	 	{
          
        echo "<table border='1'><tr><th>Model No</th><th>Complaint</th><th>Reply</th><th>Report</th></tr>";
        while($row=mysqli_fetch_array($result)) //fetch complaint details frm db
         {
            ?>
            <tr><td ><?php echo $row["model_no"] ?></td>
                <td><?php echo $row["complaint"] ?></td>
                <td><?php echo $row["response"] ?></td>
                <td><a href='report_doc.php?id=<?php echo $row['complaint_id'] ?>'><button>report</button></a></td></tr>
            <?php
         } 
       echo "</table>";
       
    }
       
}
        mysqli_close($con);
        ?>

