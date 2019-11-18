<?php
session_start();
$value=$_GET['id'];
$_SESSION['device_type']=$value;
?>