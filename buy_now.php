<?php 
session_start(); 
include 'database.php';


include 'include/header2.php';

?>
<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="include/index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Buy now</li>
    </ol>
</nav>

<!-- Alert  -->
<div class="alert alert-warning alert-dismissible show text-center alert-light" role="alert">
    <h1><strong> Hurry Up! </strong> Get the wow offer without wasting time. <span
            class="badge badge-dark">Limited</span></h1>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<!-- Heding  -->
<h1 class="text-center" style="color: rgb(221, 139, 17);">ORDER FOOD NOW <i class="fas fa-pizza-slice"></i> </h1>




<div class="container mt-5">


    <div class="row mb-5">
    
        <div class="col-lg-9">
            <form method="get" action="<?=$_SERVER['PHP_SELF']?>">

                <div class="form-inline">

                    <input name="serchbox" type="text" class="form-control w-100" id="searchbox" placeholder="search... ">
                   
                </div>
            
        </div>
        <div class="col-lg-3">
        <button class="btn btn-success btn-block " name="Search"> <i class="fas fa-search"></i> Search </button>
        </form>
        </div>
</div>
    </div>
    <?php

if (isset($_SESSION['message'])) {
    ?>
    <div class="container">
<div class="row">
<div class="col-md-12 ">
<?php echo $_SESSION['message']; ?>
</div>
</div>
</div>
<?php
    unset($_SESSION['message']);
}



?>



<div class="container">

<div class="row mb_30">
<?php 
                    if(isset($_GET['Search'])){
                    $name =$_GET['serchbox'];
                   

                        $search = "SELECT * FROM food_items WHERE title LIKE '%" .$name. "%'";
                        $result = mysqli_query($conn,$search);
                        if (mysqli_num_rows($result) > 0) {
                            while ($food = mysqli_fetch_array($result)) {
                              
                            ?>
                            

    <div class="col-lg-4 col-sm-6 mt-2 ">
        <div class="food_item text-center">
            <div class="food_img">
                <img src="images/<?php echo $food['image']; ?>" alt="food image">

            </div>
            <a href="buy_now.php">
                <h4 class="sec_h4">
                    <?php echo $food['title']; ?>
                </h4>
            </a>
            <h5>
                <?php echo $food['price']; ?>
            </h5>
            <a href="buy_now.php?order=<?php echo $food['id']; ?>&title=<?php echo $food['title']; ?>"
                class="btn btn-success">Order Now</a>
        </div>
                            </div>        
                            
    <?php
    

    }
    }
   
    ?>
    
     </div>
</div>
     <?php

           }  else {
    ?>
     
    

    <div class="row mb_30">

        <?php
                        $getFood = mysqli_query($conn, "SELECT * FROM food_items");
                        if (mysqli_num_rows($getFood) > 0) {
                            while ($food = mysqli_fetch_array($getFood)) {
                              
                            ?>
        <div class="col-lg-4 col-sm-6 mt-2 ">
            <div class="food_item text-center">
                <div class="food_img">
                    <img src="images/<?php echo $food['image']; ?>" alt="food image">

                </div>
                <a href="buy_now.php">
                    <h4 class="sec_h4">
                        <?php echo $food['title']; ?>
                    </h4>
                </a>
                <h5>
                    <?php echo $food['price']; ?>
                </h5>
                <a href="buy_now.php?order=<?php echo $food['id']; ?>&title=<?php echo $food['title']; ?>"
                    class="btn btn-success">Order Now</a>
            </div>
        </div>
                            
        <?php
                            }
                        }
                       
                    ?>

    </div>
                    </div>
    </div>
    <?php  } ?>



<?php

if (isset($_GET['order']) AND isset($_GET['title'])) {
        
    if (isset($_SESSION['id'])) {
        
        $userid = $_SESSION['id'];

        $foodid = $_GET['order'];

        $title = $_GET['title'];
        $today = date("Y-m-d");
        

            $book = mysqli_query($conn, "

                INSERT 
                    INTO 
                        orders
                            (
                                user_id, 
                                food_id, 
                                title, 
                                order_date
                            )
                        VALUES
                            (
                            '$userid', 
                            '$foodid', 
                            '$title', 
                            now()
                            )

                ");

            $_SESSION['message'] = "<div class='alert alert-success mx-auto'><strong> Food  has been ordered Successfully! </strong></div>";
           
        

    } else {
        $_SESSION['message'] = "
        <div class=' container mx-auto alert alert-danger alert-dismissible'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <strong>Log in! Without log in user cann't order food </strong> 
</div>";
        
    }

}
     
?>

<?php include 'include/footer.php'; ?>