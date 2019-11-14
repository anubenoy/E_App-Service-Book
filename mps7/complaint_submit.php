<?php
session_start();
    include("dbconnection.php");
    $model_no=$_POST["modelNo"];
    $device_name=$_POST["deviceName"];
    $complaint=$_POST["complaint"];
    
   
    $sql="select model_no from device_tbl where model_no='$model_no'";
	$result=mysqli_query($con,$sql);

	if(mysqli_num_rows($result)<1) //new model_no add to db
	 	{
	 	$sql1="insert into device_tbl (model_no,device_name) values ('$model_no','$device_name')";
	 	mysqli_query($con,$sql1);
         }

     while($row=mysqli_fetch_array($result)) //add complaint to db,fetch model no frm db
         {
            $model_no=$row["model_no"];
         } 
       
          $login_id=$_SESSION['login_id'];
        
          $sql2="select * from register_tbl where login_id= '$login_id'";
          if($result2=mysqli_query($con,$sql2))
          {  
          while($row=mysqli_fetch_array($result2))
             {
                $_SESSION["reg_id"]=$row["reg_id"];
            }
            $reg_id= $_SESSION["reg_id"];
            $sql3="insert into complaint_tbl(reg_id,model_no,complaint) values ($reg_id, '$model_no','$complaint')";
            if(mysqli_query($con,$sql3))
          { 
            ?>
                <script>
                    alert("Filed Complaint successfully!");
                    window.location.href="serviceBook.php"
                    </script>
            <?php 
                 }
         }
        
        mysqli_close($con);
        ?>
    