    <?php

    $name= $_POST["name"];
	$email= $_POST["email"];
	$username= $_POST["username"];
	$password= $_POST["password"];
	$file= $_FILES["file"]["name"];
	echo "haiiiiiii";
	$sql="select username from login_tbl where username='$username'";
	$result=mysqli_query($con,$sql);
        $log_id=$_SESSION['login_id'];
	if(mysqli_num_rows($result)<2)
	 	{
	 	$sql1="update login_tbl set username='$username', password='$password' where login_id=$log_id";
         mysqli_query($con,$sql1);
         
		$sql2="update register_tbl set name='$name',email='$email',file='$file' where login_id=$log_id ";
 		mysqli_query($con,$sql2);
        if($_SESSION['file_check']<>$file)
        {
            $file_path='uploads/'.$file;
	 	    if(move_uploaded_file($_FILES["file"]["tmp_name"], $file_path))
		    {header("location:account.php");}
		 }
        }   
	 	
	else
		 { 
	?>
		<script>alert("existing user!");</script>
	