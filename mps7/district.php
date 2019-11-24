<?php
include('dbconnection.php');
 
$dist=$_POST['District'] ;
echo $dist;
echo "hai1";
 $sql="select * from sevicecentre_tbl where district_id in (select * from sevicedistrict_tbl where district_name='$dist')";
 $r=mysqli_query($con,$sql);
 ?>
 <script>
     var elem=document.getElementById('serviceCenter');
 //<select name='serviceCenter'>
 //<option value=''>-Select Center-</option>
 elem
 <?php
while($row=mysqli_fetch_array($r))
{
    echo "hailoop";
    $name=$row['name'];?>
    <option value="<?php echo $name ; ?>"><?php echo $name;?></option>
<?php
}
?>