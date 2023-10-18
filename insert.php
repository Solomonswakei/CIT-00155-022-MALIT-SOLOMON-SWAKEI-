<?php
require "dbconnect.php";
$firstname=$_REQUEST['first_name'];
$lastname=$_REQUEST['$last_name'];
$gender=$_REQUEST['gender'];
$address=$_REQUEST['address'];
$sql="insert into staff values('$firstname','$lastname','$gender','$adddress')";
if($conn->query($sql)===true){
    echo"records inserted";
}else{
    echo"error";
}
?>