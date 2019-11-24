
<?php
	session_start();
	include("dbconnection.php");
	$username=$_POST["uname"];
	$password=$_POST["pass"];

	
	$sql="select * from login_tbl where username='$username' and password='$password'";
	if($result=mysqli_query($con,$sql))
	{ 
		while($row=mysqli_fetch_array($result))
					{
						$user_type=$row['user_type'];
					}
	
		$sql="select * from register_tbl where login_id in (select login_id from login_tbl where username='$username' and password='$password')"; 
		if($result=mysqli_query($con,$sql))
			{
				while($row=mysqli_fetch_array($result))
					{
						$_SESSION["username"]=$row['name'];
						$_SESSION["file"]='uploads/'.$row['file'];//load image after login
						$_SESSION["file_check"]=$row['file'];//used during edit profile
						$_SESSION["login_id"]=$row['login_id'];//check if session expired
						
						if($user_type=='customer' ){
							header("location:complaint.php");
						}
						else if($user_type=='technician')
						{
							header("location:response.php");
						}
						/*else if($user_type=='admin' )
						{
							header("location:admin.php");
						}*/
						else
						{
							header("location:index.html");
						}
					}
			}
			
			?><script>
			alert("Inavalid User");
			window.location.href="index.html";
			</script><?php
		

	}
	
mysqli_close($con);

?>
