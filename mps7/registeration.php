<?php
include("dbconnection.php");
if(isset($_POST["btn_submit"])){

	$name= $_POST["name"];
	$email= $_POST["email"];
	$username= $_POST["username"];
	$password= $_POST["password"];
	$file= $_FILES["file"]["name"];
	
	$sql="select username from login_tbl where username='$username'";
	$result=mysqli_query($con,$sql);

	if(mysqli_num_rows($result)<1)
	 	{
	 	$sql1="insert into login_tbl (username,password) values ('$username','$password')";
	 	mysqli_query($con,$sql1);

	 	$n=mysqli_insert_id($con);
		$sql2="insert into register_tbl (login_id,name,email,file) values ($n,'$name','$email','$file')";
 		mysqli_query($con,$sql2);
		
	 	$file_path='uploads/'.$file;
	 	if(move_uploaded_file($_FILES["file"]["tmp_name"], $file_path))
		{header("location:index.html");}
		 }
	else
		 { 
	?>
		<script>alert("already a user!");</script>
	<?php 
		 }

}
mysqli_close($con);
?>

<!DOCTYPE html>
<html>    
    <head>
        <title>Sign Up</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="register_style.css">
    <script>  

            function err(){
                $(document).ready(function(){$('[data-toggle="popover"]').popover();});
            }
            
    
            function checkName()
            {
               
                elem=document.getElementById("name");
                x=document.getElementById("err1");
                patt=/^[a-zA-Z\. ]+$/;
                
                if(elem.value==" " || !elem.value.match(patt))
                {
                         x.style.display = "block";
                         err();
                         return false;
                } 
    
                  x.style.display="none" ;
                  return true; 
            }
            
            function checkUserName()
            {
               
                elem=document.getElementById("username");
                x=document.getElementById("err2");
                patt=/^[a-zA-Z0-9$&+,:;=?@#|'<>.-^*()%!]+[0-9]+$/;
                
                if(elem.value==" " || !elem.value.match(patt))
                {
                         x.style.display = "block";
                         err();
                         return false;
                } 
    
                  x.style.display="none" ;
                  return true; 
            }
    
            function checkEmail()
            {
               
                elem=document.getElementById("email");
                x=document.getElementById("err3");
                patt=/^([A-Za-z0-9\.]{4,30})+@[a-z.]+\.+[a-z]+$/;
                
                if(elem.value==" " || !elem.value.match(patt))
                {
                         x.style.display = "block";
                         err();
                         return false;
                } 
    
                  x.style.display="none" ;
                  return true; 
            }
    
            
            function checkPassword()
            {
               
                elem=document.getElementById("password");
                x=document.getElementById("err4");
                patt=/^(?=.*[!@#$%^&*(),.?":{}|<>\ )(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
                
                if(elem.value==" " || !elem.value.match(patt))
                {
                         x.style.display = "block";
                         err();
                         return false;
                } 
    
                  x.style.display="none" ;
                  return true; 
            }
            function checkConfirmPass()
            {
               
                
                x=document.getElementById("err5");
                        
                if((document.getElementById("password").value)!=(document.getElementById("ConfirmPass").value))
                {
                         x.style.display = "block";
                         err();
                         return false;
                } 
    
                  x.style.display="none" ;
                  return true; 
            }
            function checkImage()
            {
               
                elem=document.getElementById("profile_pic");
                x=document.getElementById("err6");
                patt=/\.(jpe?g|png|JPE?G|PNG)$/;     
                if(!elem.value.match(patt))
                {
                         x.style.display = "block";
                         err();
                         return false;
                } 
    
                  x.style.display="none" ;
                  return true; 
            }     
            
                    
                            
            
    </script>
    </head>
    
    <body>

        <div class="registerBox">
        
            <form  method="POST" enctype="multipart/form-data">
                <h1>Sign Up</h1>
                <div style="position:relative;">
                    <input type="text" id="name" name="name" onchange="checkName()" placeholder="Name"required >
                    <div class="container">
                         <a href="javascript:err()" data-toggle="popover" data-trigger="focus" id="err1" style="display:none; position:absolute;top:10px; right:-10px;"data-content="Invalid name!"><img src="error.png" height="20px" width="20px"></a>
                    </div>
                </div>
                <div style="position:relative;">
                        <input type="text" id="username" name="username" onchange="checkUserName()" placeholder="Username" required>
                        <div class="container">
                             <a href="javascript:err()" data-toggle="popover" data-trigger="focus" id="err2" style="display:none; position:absolute;top:10px; right:-10px;"title="Invalid user! "data-content="eg:xyz12"><img src="error.png" height="20px" width="20px"></a>
                        </div>
                    </div>
                 <div style="position:relative;">
                        <input type="email" id="email" name="email" onchange="checkEmail()" placeholder="Email" required>
                        <div class="container">
                             <a href="javascript:err()" data-toggle="popover" data-trigger="focus" id="err3" style="display:none; position:absolute;top:10px; right:-10px;"data-content="Invaild Email! eg:something@something.com"><img src="error.png" height="20px" width="20px"></a>
                        </div>
                    </div>
                  <div style="position:relative;">
                        <input type="password" id="password"  name="password" onchange="checkPassword()" placeholder="Password" required>
                        <div class="container">
                             <a href="javascript:err()" data-toggle="popover" data-trigger="focus" id="err4" style="display:none; position:absolute;top:10px; right:-10px;"data-content="Invalid! eg:#Ay&iou31 min:8chars "><img src="error.png" height="20px" width="20px"></a>
                        </div>
                    </div>   
                <div style="position:relative;">
                        <input type="password" id="ConfirmPass" name="confirm_password" onchange="checkConfirmPass()" placeholder="Confirm Password" required>
                        <div class="container">
                             <a href="javascript:err()" data-toggle="popover"  data-trigger="focus" id="err5" style="display:none; position:absolute;top:10px; right:-10px;"data-content="Password don't match!"><img src="error.png" height="20px" width="20px"></a>
                        </div>
                    </div>   
           <div style="position:relative;">
                        
                        <input type="file" id="profile_pic"  name="file" onchange="checkImage()" value="User Image" required>
                        
                        <div class="container">
                             <a href="javascript:err()" data-toggle="popover"  data-trigger="focus" id="err6" style="display:none; position:absolute;top:10px; right:-10px;"data-content="Invalid format! eg:ex.jpg/.png"><img src="error.png" height="20px" width="20px"></a>
                        </div>
                    </div>
                <input type="submit"  value="Sign Up" name="btn_submit">
            
            </form>
        </div>
    </body>
</html>
