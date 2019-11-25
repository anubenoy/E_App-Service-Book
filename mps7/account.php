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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
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
	padding:30px 50px;
	box-sizing: border-box;
    background:rgba(25,0,0,0.5) ;
    box-shadow:4px 5px 3px black;
	
	
}

h3
{
	margin-left:-10px;
	margin-top:-50px;
    padding:-10px 0 20px;
    padding-bottom:30px;
	color:white;
    text-align:center;
    text-shadow:2px 2px 2px black;
	
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
    text-shadow:1px 1px 1px black;
	
	
}

.registerBox input[type="button"],.registerBox input[type="submit"]
{
	border:1px solid whitesmoke;
    color:whitesmoke;
    font-weight:bold;
	font-size:16px;
	background:transparent;
	cursor:pointer;
	border-radius:80px;
	margin-left:130px;
    margin-top:17px;
    
	
}
.registerBox input[type="file"]{
    color:whitesmoke;
    font-weight:bold;
	font-size:12px;
    background:transparent;
    border-radius:80px;
    margin-left:130px;
	margin-top:-22px;
	
}


.registerBox input[type="button"]:hover,.registerBox input[type="submit"]:hover
{
	background: lavender;
	color: #262626;
}

 label{
    
	 background:transparent;
	 outline:none;
	 color:white;
     font-size:15.3px;
     text-shadow:1px 1px 1px black;
	
     }
     #pic_btn{
         position:absolute;
         top:50px;
         left:53px;
        border: none;
	    background: transparent;
	    outline:none;
	    height:35px;
	    color:#fff;
	    font-size: 16px;
     }

        </style>
        

        <script src="edit.js"></script>
        <script>
            function enable()
            {
                document.getElementById('pic').style.display = "block";
                document.getElementById('profile_pic').disabled=false;
                <?php $_SESSION["file_set"]="set";?>
            }
    function edit(){
        document.getElementById('cfpass').style.display = "block";
        
        document.getElementById('pic_btn').style.display = "block";
        document.getElementById('btn1').style.display = "none";
        document.getElementById('btn2').style.display = "block";
        


        var elem;
        var arr=['name','username','email','password','confirmpassword'];
        for(i=0;i<5;i++){
            elem= document.getElementById(arr[i]).disabled=false;
        }
    }

</script>     
  
   


    </head>
    
    <body>
        

        <div class="registerBox">
        
            <form  method="POST" enctype="multipart/form-data" action="update.php">
            <div class="welcome_box" style="position:relative;">
            <button type=button onclick="enable()" id="pic_btn" style="display:none;" value=""> <i class="fa fa-fw fa-edit"></i> </button>
            <img src=" <?php echo $_SESSION["file"]; ?> " style="border-radius:50%;  box-shadow:2px 2px 3px black;height:75px;width:75px;margin-top:4px;" />
               
			    <div class="welcome_txt"><h3>My Profile</h3></div>	
	        </div>    
            
               
                <div style="position:relative;">
                    <label id="l">Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" id="name" name="name" onchange="checkName()" value="<?php echo ucwords($name); ?>" disabled>
                    <div class="container">
                         <a href="javascript:err()" data-toggle="popover" data-trigger="focus" id="err1" style="display:none; position:absolute;top:10px; right:-10px;"data-content="Invalid name!"><img src="error.png" height="20px" width="20px"></a>
                    </div>
                </div>
               
                <div style="position:relative;">
                <label id="l">User Name :&nbsp;</label>
                        <input type="text" id="username" name="username" onchange="checkUserName()" value="<?php echo $username; ?>" disabled>
                        <div class="container">
                         <a href="javascript:err()" data-toggle="popover" data-trigger="focus" id="err2" style="display:none; position:absolute;top:10px; right:-10px;"data-content="Invalid name!"><img src="error.png" height="20px" width="20px"></a>
                    </div>
                    </div>
                
                    <div style="position:relative;">
                 <label id="l">Email :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="email" id="email" name="email" onchange="checkEmail()" value="<?php echo $email; ?>" required disabled>
                        <div class="container">
                         <a href="javascript:err()" data-toggle="popover" data-trigger="focus" id="err3" style="display:none; position:absolute;top:10px; right:-10px;"data-content="Invalid name!"><img src="error.png" height="20px" width="20px"></a>
                    </div>
                    </div>
                 
                    <div style="position:relative;">
                  <label id="l">Password :&nbsp;&nbsp;</label>
                        <input type="password" id="password"  name="password" onchange="checkPassword()" value="<?php echo $password; ?>" required disabled>
                        <div class="container">
                         <a href="javascript:err()" data-toggle="popover" data-trigger="focus" id="err4" style="display:none; position:absolute;top:10px; right:-10px;"data-content="Invalid name!"><img src="error.png" height="20px" width="20px"></a>
                    </div>
                    </div>   
                   
                    <div id="cfpass"style="position:relative;display:none;">
                  <label id="l">Confirm Password :</label>
                        <input type="password" id="confirmpassword"  name="confirmpassword" onchange="checkConfirmPass()" value="<?php echo $password; ?>" required disabled>
                        <div class="container">
                         <a href="javascript:err()" data-toggle="popover" data-trigger="focus" id="err5" style="display:none; position:absolute;top:10px; right:-10px;"data-content="Invalid name!"><img src="error.png" height="20px" width="20px"></a>
                    </div>
                    </div>
          
                    <div id="pic" style="position:relative; display:none;">
                    <label id="l">Change Image :</label> 
                        <input type="file" id="profile_pic"  name="file" onchange="checkImage()" value="User Image" required disabled> 
                        
                        <div class="container">
                             <a href="javascript:err()" data-toggle="popover"  data-trigger="focus" id="err6" style="display:none; position:absolute;top:10px; right:-10px;"data-content="Invalid format! eg:ex.jpg/.png"><img src="error.png" height="20px" width="20px"></a>
                        </div>
                    </div>
                        
                    <input type="button" id="btn1" value="Edit" name="btn_edit" onclick="edit()">  
                   <input type="submit" id="btn2" value="Submit" name="btn_submit" style="display:none;">
                   <a href="report.php" style="color:white;font-size:14px;margin-left:130px;">Click here to go back</a>

                    </div>
             
            
            </form>
        </div>
    </body>
</html>
<?php
    
}?>