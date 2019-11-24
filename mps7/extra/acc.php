<?php
include("dbconnection.php");
session_start();
if(isset($_SESSION['login_id']))
{
    
    $name;
    $username;
    $password;
    $email;
    
    $login_id=$_SESSION['login_id'];
    $sql= "select * from register_tbl r inner join login_tbl l on r.login_id=l.login_id where r.login_id=$login_id";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
        $name=$row['name'];
        $username=$row['username'];
        $password=$row['password'];
        $email=$row['email'];

    }
    ?>    

<!DOCTYPE html>
<html>    
    <head>
        <title>Account</title>
        <script>
    function edit(){
        var elem= document.getElementById("name").disabled=false;
    }

</script>     
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   

<style>
        body
{
	margin:0;
	padding:0;
	background:lightseagreen;
	font-family: sans-serif; 
}
.registerBox
{
	position:absolute;
	top:40%;
	left:50%;
	transform:translate(-50%, -40%);
	width:400px;
	height:500px;
	padding:30px 50px;
	box-sizing: border-box;
	background:rgba(25,0,0,0.5) ;
	
	
}

h3
{
	margin-left:-10px;
	margin-top:-50px;
    padding:-10px 0 20px;
    padding-bottom:30px;
	color:white;
	text-align:center;
	
} 
.registerBox input
{
	width:50%;
	margin-bottom: 20px; 
	font-size:16px;
	font-style:italic;
}
.registerBox input[type="text"], .registerBox input[type="password"],.registerBox input[type="email"]
{
	border: none;
	background: transparent;
	outline:none;
	height:35px;
	color:#fff;
	font-size: 16px;
	
	
}

.registerBox input[type="button"]
{
	border:1px solid whitesmoke;
	height: 25px;
	width:60px;
    color:whitesmoke;
    font-weight:bold;
	font-size:14px;
	background:transparent;
	cursor:pointer;
	border-radius:80px;
	margin-left:235px;
	margin-top:17px;
	
}


.registerBox input[type="button"]:hover
{
	background: lavender;
	color: #262626;
}
 


 label{
    
	 background:transparent;
	 outline:none;
	 color:white;
	 font-size:15.3px;
	
     }

        </style>
    </head>
    
    <body>

        <div class="registerBox">
        
            <form  method="POST" enctype="multipart/form-data" >
            <div class="welcome_box" style="position:relative;">
    		    <img src=" <?php echo $_SESSION["file"]; ?> " style="border-radius:50%;height:75px;width:75px;margin-top:4px;" />
			    <div class="welcome_txt"><h3>My Profile</h3></div>	
	        </div>    
            
               
                <div style="position:relative;">
                    <label id="l">Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" id="name" name="name" value="<?php echo ucwords($name); ?>" disabled>
                   
                </div>
                <div style="position:relative;">
                <label id="l">User Name :&nbsp;</label>
                        <input type="text" id="username" name="username" value="<?php echo $username; ?>" disabled>
                       
                    </div>
                 <div style="position:relative;">
                 <label id="l">Email :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="email" id="email" name="email" value="<?php echo $email; ?>" disabled>
                       
                    </div>
                  <div style="position:relative;">
                  <label id="l">Password :&nbsp;&nbsp;</label>
                        <input type="password" id="password"  name="password" value="<?php echo $password; ?>" disabled>
                        
                    </div>   
                    <div style="position:relative;">
                  <label id="l">Confirm Password :</label>
                        <input type="password" id="confirmpassword"  name="confirmpassword" style="didplay:block;" value="<?php echo $password; ?>" disabled>
                        
                    </div>
          
                        
                    <input type="button"  value="Edit" name="btn_edit" onclick="edit()">  
                    </div>
            
            </form>
        </div>
    </body>
</html>
<?php
    
}?>