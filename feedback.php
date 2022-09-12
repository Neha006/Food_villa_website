<?php 
include 'include/header2.php';
?>



<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
  
    $concern = $_POST['concern'];
    
    // Submit to a db
    // Connecting to a database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "neha_pathak_068";

// Create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);



// Die if connection not successfull
if(!$conn){
    die("<br> Sorry connection failed" . mysqli_connect_error());
}



// insert by name of variable
$sql = "INSERT INTO `feedback` ( `name`, `concern`) VALUES ( '$name', '$concern' )";
$result = mysqli_query($conn,$sql);

// Check info inserted
if(!$result){
    echo " <br>The data not inserted  --->" . mysqli_connect_error($conn);
}
else {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Thank You!</strong> Your feedback is recorded.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}


}
?>

<!-- Form  -->
<div class="container mt-3">
    <h2>Please enter your name and concern</h2>
<form action="feedback.php" method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name">
    <small id="nameHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1" name="concern">Concern</label>
    <textarea name="concern" class="form-control" id="concern" placeholder="Enter your concern" cols="30" rows="10"></textarea>

  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php 
  include 'include/footer.php';
  ?>