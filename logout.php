<?php 
include 'include/header2.php';
include 'database.php';

session_start();
session_destroy();

?>


<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="include/index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        <li class="breadcrumb-item active" aria-current="page">Log Out</li>
    </ol>
</nav>

<!-- Alert  -->
<div class="container">
<div class="alert alert-warning alert-dismissible show text-center alert-light" role="alert">
    <h1 style="color: rgb(221, 139, 17);"><strong> Successfully ! </strong> LOGGED OUT.</h1> 
   
    
       
   
</div>
</div>


  <!-- Jumbotron  -->

  <div class="container    my-5">


<h3 >Fresh from pizza villa</h3>
<h3 style="color: rgb(221, 139, 17);">FOR MORE DETAIL CALL US NOW</h3>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa nihil eligendi, ratione nemo atque,
    tempora blanditiis, possimus dolorum numquam eaque quae vitae ullam explicabo totam incidunt fugit
    odit quibusdam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi sint
    necessitatibus similique? Enim necessitatibus laborum optio nostrum modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, eum maiores? Magnam! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum deserunt est alias sed, voluptates totam! Tempore soluta corrupti eaque dolor?</p>
<div class="conatiner order_call"> <a class="nav-link" href="tel: 8378795853095"> <i
            class="fas fa-phone">  Call us : +91 12795853095 </i></a>



</div>
</div>


<?php 

  include 'include/footer.php';
  
  ?>