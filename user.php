<?php 
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $city=$_POST['city'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];


  $sql="insert into crudtable (name,email,city,mobile,password)
  values('$name','$email','$city','$mobile','$password')";
  $result=mysqli_query($con,$sql);
  if($result){
    header('location:display.php');
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
          <input type="text" class="form-control" placeholder="Enter your name" name="name">
        </div>
        <div class="form-group my-2">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Enter your name" name="email" autocomplete="off">
        </div>
        <div class="form-group my-2">
          <label>City</label>
          <input type="text" class="form-control" placeholder="Enter your city" name="city" autocomplete="off">
        </div>
        <div class="form-group my-2">
          <label>Mobile</label>
          <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
        </div>
        <div class="form-group my-2">
          <label>Password</label>
          <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary" name='submit'>Submit

        </button>
      </form>


    </div>
  </body>
</html>