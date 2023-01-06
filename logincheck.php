<?php
session_start();
$con = mysqli_connect("localhost","root","","campingdata");
if($con){
    echo "connection successful";

}else{
    echo "No connection";
}
$db = mysqli_select_db($con,'campingdata');
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];

    $sql = "select * from admin_login where email = '$email' and pswd = '$pswd' ";
    
    $q = mysqli_query($con,$sql);

    $row = mysqli_num_rows($q);
        if($row == 1){
            $_SESSION['email'] = $email;
            echo "login successful";
            header('location:admindata.php');
        }else{
            echo "login failed";
            header('location:admin.php');
        }
    
    
}


?>