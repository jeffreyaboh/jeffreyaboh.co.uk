<?php
    error_reporting(0);
$getid= $_GET["id"];
$con=mysqli_connect("72.52.251.2","adsproco_root","Verifylogin1%","adsproco_oas");
if(!isset($con))
{
    die("Database Not Found");
}

//<img src='./images/Tick.png' width='20px'>
//style='background-color:transparent;border:none;'


if(isset($_REQUEST["appr"]))
{
    
    $sql  = "insert into t_status values(";
    $sql .= "'" . $getid . "',";
    $sql .= "'Approved')";
    
    
  
    
    
    mysqli_query($con, $sql);
    echo $sql;
    
    
}



?>