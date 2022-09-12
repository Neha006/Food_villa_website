<?php 
session_start();
include 'include/header2.php';
include 'database.php';

?>





<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="include/index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
</nav>

<!-- Alert  -->
<div class="container">
<div class="alert alert-warning alert-dismissible show text-center alert-light" role="alert" >
    <h1 style="color: rgb(221, 139, 17);"><strong> Welcome ! <?php echo $_SESSION['name'];?> </strong> Here you can check your orders. 
   
    
       
   
</div>
</div>



<div class="container">
<?php

if(isset($_GET['id'])){
    $bid= $_GET['id'];
    $delete = "DELETE FROM orders WHERE id ='$bid'";
    if($conn->query($delete) === TRUE){
          echo '
          <div class="container">
          <div class="alert alert-success text-center mt-3" >
                 <strong> your order has been cancelled!!</strong>
                   </div>
                   </div>';
    }else {
        echo '
        <div class="container">
        <div class="alert alert-danger " >
                   <strong>Something went wrong.!!</strong>
                   </div>
                   </div>';
    }
}

?>
<div class="table-responsive">
                <table class="table">
                     <thead>
    <tr class="table-secondary">
      <th scope="col">Sno.</th>
      <th scope="col">Food items</th>
      <th scope="col">Booking data/time</th>
      <th scope="col">Cancel Order</th>
    </tr>
  </thead>
  <tbody>
  


 
  <?php

    $yourOrders = mysqli_query($conn, "SELECT * FROM orders WHERE user_id = '" . $_SESSION['id'] . "'");
    if (mysqli_num_rows($yourOrders) > 0) {
        $inc = 1;
        while ($booking = mysqli_fetch_array($yourOrders)) {
            
            ?>
            
            <tr>
                <td><?php echo $inc; ?></td>
                <td><?php echo $booking['title']; ?></td>
                <td><?php echo $booking['order_date']; ?></td>
                <td><a href="dashboard.php?id=<?php echo $booking['id']; ?>" class="btn btn-danger text-center" name="Cancel_booking">Cancel Order </a></td>
            </tr>
            <?php
            $inc++;
        }
    } else {
        echo "<tr><td>No Orders Found!</td></tr>";
    }

?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                            </div>    
                            
                            <div class="container my-2 mx-auto text-center">
                            <h1><strong> Click here ! </strong> To Pay Now
                            <button type="submit"onclick="payment()" name="login" class="btn btn-success btn-lg"> Payment</button>
                            </div>




        <script >
            function payment(){
        alert("Your payment has been successful!!");  
            }
            </script>                  
     <?php     include "include/footer.php"; ?>