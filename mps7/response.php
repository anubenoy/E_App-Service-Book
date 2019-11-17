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
            background:blue;
            color:white;}
            h2{
                font-size:40px;
                color:blue;
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
  background-color: rgb(0,0,255,0.8);
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  text-shadow:1px 1px 2px white;
}

.navbar a:hover {
  background-color: #000;
}
    </style>
</head>
<body>
<div class= "navbar" style="width:100%; top:0; left:0;"> 
		<nav>
		 <a class="active" href="response.php"><i class="fa fa-fw fa-home"></i> Home</a> 
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
   
    $sql="select * from complaint_tbl where status='1'";
	$result=mysqli_query($con,$sql);

	if(mysqli_num_rows($result)<1) //search fo registered complaints
	 	{
            echo "<center style='margin-top:120px;font-size:40px;'>All Complaints Read!</center>";
         }
     else
     {
        echo "<table border='1'><tr><th>Complaint ID </th><th>Complaint</th><th>Reply</th></tr>";
        while($row=mysqli_fetch_array($result)) //fetch complaint details frm db
         {
            ?>
            <tr><td ><?php echo $row["complaint_id"] ?></td>
                <td><?php echo $row["complaint"] ?></td>
                <td><a href='reply.php?id=<?php echo $row['complaint_id'] ?>'><button>reply</button></a></td></tr>;
            <?php
         } 
       echo "</table>";
       
    }
       
}
        mysqli_close($con);
        ?>

