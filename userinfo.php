<?php
session_start();
$con = mysqli_connect("localhost","root","","campingdata");
if($con){
    echo "connection successful";

}else{
    echo "No connection";
}
mysqli_select_db($con,'campingdata');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$q="insert into userinfodata(user,email,mobile,comments)values('$user','$email','$mobile','$comments')";
mysqli_query($con,$q);
header('location:index.php');







?>