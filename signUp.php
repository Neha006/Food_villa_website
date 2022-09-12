<?php 
include 'include/header2.php';
include 'database.php';
?>
<?php
if(isset($_POST['submit'])){
  $name = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['pass'];
   $address = $_POST['address'];
   $address2 = $_POST['address2'];
   $city = $_POST['city'];
   $pin = $_POST['pin'];
    
    

// insert by name of variable

$sql = "INSERT INTO `register` ( `name`,`email`, `password`,`address`,`address2`,`city`,`zip` ) VALUES ('$name', '$email', '$password', '$address', '$address2','$city', '$pin')";
$result = mysqli_query($conn,$sql);

// Check info inserted
if(!$result){
    echo " <br>The data not inserted  --->" . mysqli_connect_error($conn);
}
else {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Thank you !</strong> You have Successfully registered.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}


}
?>
<section class="signUpArea">
<div class="overlay bg-parallax" ></div>
<div class="container">
<h1 class="text-center">Sign Up</h1>
<div class="row">
  <div class="col-lg-3"></div>
  <div class="col-lg-6">


  <!-- SignUP Form  -->
<form action="signUp.php" method="post">
<div class="form-group">
    <label for="inputname">Name</label>
    <input name="username" type="text" class="form-control" id="inputname" placeholder="Enter name here" required>
  </div>
  <div class="form-row">
 
    <div class="form-group col-md-6">
      <label  for="inputEmail4">Email</label>
      <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input name="pass" type="password" class="form-control" id="inputPassword4" placeholder="Password" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input name="address2" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input name="city" type="text" class="form-control" id="inputCity" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" name="state" class="form-control">
        <option selected>State</option>
        <option>UP</option>
        <option>Haryana</option>
        <option>Uttrakhand</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">pin code</label>
      <input name="pin" type="text" class="form-control" id="inputpin">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
  <a href="logIn.php"  class="float-right mt-3 text-dark">Already have an account</a>
</form>
</div>
<div class="col-lg-3"></div>
</div>
</div>
</section>
<?php 
  include 'include/footer.php';
  ?>