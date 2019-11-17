<?php
session_start();
if(isset($_SESSION['login_id']))

{?>
<html>
<head>
    <style>
        table{
            margin:60px 300px;
            font-size:20px;
            line-height:50px;
            background-image: linear-gradient(rgb(0, 0, 255,0.8),rgb(0,0,255,0.3));
            color:black;
            font-style:oblique;
            text-align:center;
            width:50%;
            height:60%;
            padding:5px;
            box-shadow: 3px 3px 10px rgb(20, 20, 20);
        }
        
        input{
            margin-top:30px;
            margin-left:20px;
            width:200px;
            height:30px;
            box-shadow: 1px 1px 5px black;
            font-weight:bold;
            font-size:14px;
            
        }
        input:hover{color:white;
                    background:blue;}
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
    <script>
        function check()
            {
               
                elem=document.getElementById("reply");
                patt=/^(?=.*[!@#$%^&*(),.?":{}|<>\0-9])(?=.*[a-zA-Z]).{10,}$/;
                
                if(elem.value==" " || !elem.value.match(patt))
                {
                         alert("field must be minimum of 10 characters and must include some text")
                         return false;
                } 
    
                  
                  return true; 
            }
        </script>
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
        </body>
</html>
<?php

    include("dbconnection.php");
    $var_value = $_GET['id'];
    $sql="select * from complaint_tbl where complaint_id=$var_value";
	$result=mysqli_query($con,$sql);

	if(mysqli_num_rows($result)>0) //search for registered complaints of a user
	 	{
       
     while($row=mysqli_fetch_array($result)) //fetch complaint from db
         {
            
            echo "<form method='POST'>
                    <table>
                    <caption><b>Complaint<b></caption>
                        <tr><th>Complaint ID : </th><td>",$row["complaint_id"],"</td>
                        <tr><th>Model No : </th><td>",$row["model_no"],"</td>
                        <tr><th>Complaint : </th><td>",$row["complaint"],"</td>
                        <tr><th> Reply :</th><td><textarea cols='25' rows='5'  id='reply' onchange='check()'name='reply'required></textarea></td>/<tr>
                        <tr ><td colspan='2'><input type='submit' value='Respond' name='reply_btn'  /></td></tr>
                        </table>
                    </form>";
         } 
         if(isset($_POST['reply_btn']))
       {
   
        $response=$_POST['reply'];
        echo $response;
         $sql="update complaint_tbl set response='$response' where complaint_id=$var_value ";
         if(mysqli_query($con,$sql))
         {
             $sql="update complaint_tbl set status='0' where complaint_id=$var_value ";
            if( mysqli_query($con,$sql))
            {header("location:response.php");}
         }
         
        
       }
    }
       
}
        mysqli_close($con);
        ?>
