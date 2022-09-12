<?php 
include 'include/header2.php';
include 'database.php';

if(isset($_POST['login'])){

  $user_email = $_POST['email'];
  $user_pass = $_POST['password'];

  $query = "SELECT * FROM register WHERE email= '$user_email' AND password = '$user_pass'";
  $result = mysqli_query($conn,$query);
 // Check info inserted
 $email_count = mysqli_num_rows($result);


 if($email_count){
  $email_pass = mysqli_fetch_assoc($result);

    session_start();
      $_SESSION['id']= $email_pass['sno'];
      $_SESSION['email'] = $email_pass['email'];
    $_SESSION['name'] = $email_pass['name'];
   
   header('Location:buy_now.php');

  }
 else {
      echo "<div class='alert alert-danger'>Email/password is incorrect!</div>";
      

       }


      }







?>

<div class="container mt-5 mb-5">
<h1 class="text-center">Log In</h1>
<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-8 p-4">

<form method="post" action="logIn.php" role="form" >
  
  <div class="form p-3">
    
    <div class="form-group ">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group ">
      <label for="inputPassword4">Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  
  <button type="submit" name="login" class="btn btn-primary btn-block"> Log In</button>
  <a href="signUp.php"  class="float-right mt-3 text-dark">Don't have an Account?</a>
</form>
</div>
<div class="col-lg-2"></div>
</div>
</div>
<?php 
  include 'include/footer.php';
  ?>