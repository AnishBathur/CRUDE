<?php 
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from crudtable where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$city=$row['city'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $city=$_POST['city'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];


  $sql="update crudtable set id=$id,name='$name',email='$email',city='$city',mobile='$mobile',password='$password' where id=$id ";
  $result=mysqli_query($con,$sql);
  if($result){
    header('location:display.php');
    //echo "Updated successfully";
  }
  else{
    die(mysqli_error($con));
  }
}



?>















<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

    <title>Crud Operation</title>
  </head>
  <body>
    <div class="container my-5">
      <form method="post">
        <div class="form-group my-2">
          <label>Name</label>
          <input type="text" class="form-control" placeholder="Enter your name" name="name" value=<?php echo $name;?>>
        </div>
        <div class="form-group my-2">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Enter your name" name="email" autocomplete="off" value=<?php echo $email;?>>
        </div>
        <div class="form-group my-2">
          <label>City</label>
          <input type="text" class="form-control" placeholder="Enter your city" name="city" autocomplete="off" value=<?php echo $city;?>>
        </div>
        <div class="form-group my-2">
          <label>Mobile</label>
          <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" value=<?php echo $mobile;?>>
        </div>
        <div class="form-group my-2">
          <label>Password</label>
          <input type="text" class="form-control" placeholder="Enter your password" name="password"  autocomplete="off" value=<?php echo $password;?>>
        </div>
        <button type="submit" class="btn btn-primary" name='submit'>Update

        </button>
      </form>


    </div>
  </body>
</html>