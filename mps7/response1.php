
<?php
session_start();
//if(isset($_SESSION['login_id']))

//{
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
       
//}
        mysqli_close($con);
        ?>
<html>
<head>  
 <script>
   /* function response(){
            alert("haii");
            var num=document.getElementById('complaint_no').value;
           
            window.location.href="reply.php";

    }*/
</script>
    <style>
        table{
            text-align:center;
            margin:30px 250px; ; 
            padding:2px;
            border-collapse:collapse; 
            width:60%;
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
                margin-top:40px;
            }
    </style>
</head>
<body><h2>COMPLAINTS</h2></body>
</html>
