<?php
session_start();
if(!isset($_SESSION['email'])){
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project-php</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
  <h2>Feedback Table</h2>
  <div class="table-responsive-sm">          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Comments</th>
        <th>Action</th>
      </tr>
    </thead>
     <tbody>
     <?php
    $con = mysqli_connect("localhost","root","","campingdata");

    $q="select * from userinfodata";
    $result = mysqli_query($con,$q);

    $num = mysqli_num_rows($result);

    for($i=0;$i<$num;$i++)
    {
        $row = mysqli_fetch_array($result);
?>
        <tr>
            <td><?php echo $row["Id"];  ?></td>
            <td><?php echo $row["user"];  ?></td>
            <td><?php echo $row["email"];  ?></td>
            <td><?php echo $row["mobile"];  ?></td>
            <td><?php echo $row["comments"];  ?></td>
            <td>
                <a href="delete.php?Id=<?php echo $row["Id"];  ?>">Delete</a>
            </td>
<?php 
    }
?>
    </tbody>
  </table>
  </div>
  <a href="logout.php" class="btn btn-success">logout</a>
</div>

</body>
</html>
