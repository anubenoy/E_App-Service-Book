
<?php
	session_start();
	include("dbconnection.php");
	$username=$_POST["uname"];
	$password=$_POST["pass"];

	
	$sql="select * from login_tbl where username='$username' and password='$password'";
	if(mysqli_query($con,$sql))
	{ 
		
		
	
		$sql="select * from register_tbl where login_id in (select login_id from login_tbl where username='$username' and password='$password')"; 
		if($result=mysqli_query($con,$sql))
			{
				while($row=mysqli_fetch_array($result))
					{
						$_SESSION["username"]=$row['name'];
						$_SESSION["file"]='uploads/'.$row['file'];
						$_SESSION["login_id"]=$row['login_id'];
						header("location:complaint.php");
					}
			}
			
			?><script>
			alert("Inavalid User");
			window.location.href="index.html";
			</script><?php
		

	}
	
mysqli_close($con);

?>
