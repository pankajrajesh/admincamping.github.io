<?php
$con = mysqli_connect("localhost","root","","campingdata");
$id = $_GET["Id"];
$q="delete from userinfodata where id=".$id;
mysqli_query($con,$q);
header('location:admindata.php');


?>