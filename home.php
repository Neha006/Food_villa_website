<?php
  $page_title ="Home";
  include_once('include/header.php');
?>
<!-- Carousal  -->
<div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/carousal.jfif" class="d-block w-100" alt="carousal_img">
            <div class="carousel-caption d-none d-md-block ">
                <h5>WELCOME TO PIZZA VILLA</h5>
                <p>HURRY UP! HEALTHY FOOD FOR HEALTHY BODY</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/1400x370/?food,burger" class="d-block w-100" alt="carousal_img">
            <div class="carousel-caption d-none d-md-block">
                <h5>Order Your Food now</h5>
                <p>Deliever your food on doorsteps</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/carousal.jfif" class="d-block w-100" alt="carousal_img">
            <div class="carousel-caption d-none d-md-block">
                <h5>Quality food </h5>
                <p>Healthy Food for healthy family</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Thumbnail  -->

<div class="container my-4">
    <div class="row">
        <div class="col-md-4">

            <h2 class="order-title text-uppercase c1"> <i class="fas fa-utensils" style="font-size:56px;"></i> order your
                Food</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet consectetur. Fusce dapibus,
                tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
                porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-md-4">
            <h2 class="order-title text-uppercase"><i class="fas fa-truck-moving" style="font-size:56px;"></i> delivery
                online</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet consectetur. Fusce dapibus,
                tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
                porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-md-4">
            <h2 class="order-title text-uppercase"><i class="fas fa-pizza-slice" style="font-size:56px;"></i> delicious
                receipe</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac lorem 4
                facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus
                ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
    </div>
</div>

<!-- Circle thumbnail  -->
<div class="container my-3 ">
    <h3 style="color: rgb(221, 139, 17);" class="text-center">Fresh from pizza villa</h3>
    <h1 class="container my-3 text-center display-2">OUR SPECIALITY</h1>
    <div class="row my-4">
        <div class="col-lg-4 my-4 text-center">
            <img class="rounded-circle" src="images/speciality-1.jpg" alt="Generic placeholder image" width="350"
                height="350">
            <h2>MAXICAN CHILLI</h2>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 my-4 text-center ">
            <img class="rounded-circle" src="images/speciality-2.jpg" alt="Generic placeholder image" width="350"
                height="350">
            <h2>DOUBLE CHEESE PIZZA</h2>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 my-4 text-center ">
            <img class="rounded-circle" src="images/speciality-3.jpg" alt="Generic placeholder image" width="350"
                height="350">
            <h2>MARGHERITA PIZZA</h2>

        </div>
    </div>

    <!-- Jumbotron  -->

    <div class="jumbotron  my-5">


        <h3 style="color: rgb(221, 139, 17);">Fresh from pizza villa</h3>
        <h3  >FOR MORE DETAIL CALL US NOW</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa nihil eligendi, ratione nemo atque,
            tempora blanditiis, possimus dolorum numquam eaque quae vitae ullam explicabo totam incidunt fugit
            odit quibusdam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi sint
            necessitatibus similique? Enim necessitatibus laborum optio nostrum modi.</p>
        <div class="conatiner order_call"> <a class="nav-link" href="tel: 8378795853095"> <i class="fas fa-phone"> +91
                    12795853095 </i></a>



        </div>
    </div>


    <!-- CHEF SECTION  -->
    <div class="container my-5">

        <h3 class="text-center" style="color: rgb(221, 139, 17);">Meet our experts</h3>
        <h1 class="container my-3 text-center display-2">OUR BEST CHIEF</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card ">
                    <img class="card-img-top" src="images/chef-1.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p><span>OUR CHIEF</span></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card ">
                    <img class="card-img-top" src="images/chef-2.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p><span>OUR CHIEF</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card ">
                    <img class="card-img-top" src="images/chef-3.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p><span>OUR CHIEF</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Events  -->
    <div class="container my-5">
        <h3 style="color: rgb(221, 139, 17);" class="text-center">Recent Events</h3>
        <h1 class="container my-3 text-center display-2">LATEST NEWS</h1>
        <div class="container my-4">
            <div class="album py-5 bg-light">
                <div class="container">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="images/news-1.jpg" alt="news1" class="bd-placeholder-img card-img-top"
                                    width="100%" height="225"></img>
                                <div class="card-body">
                                    <h4 class="order-title text-uppercase">POSSESSION SO COMPARISON INQUIETUDE
                                        HE CONVICTION</h4>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">read more</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="images/chef-3.jpg" alt="news1" class="bd-placeholder-img card-img-top"
                                    width="100%" height="225"></img>
                                <div class="card-body">
                                    <h4 class="order-title text-uppercase">POSSESSION SO COMPARISON INQUIETUDE
                                        HE CONVICTION</h4>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">read more</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="images/news-3.jpg" alt="news1" class="bd-placeholder-img card-img-top"
                                    width="100%" height="225"></img>
                                <div class="card-body">
                                    <h4 class="order-title text-uppercase">POSSESSION SO COMPARISON INQUIETUDE
                                        HE CONVICTION</h4>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">read more</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Cliet Says  -->
            <div class="container my-5">
                <h3 style="color: rgb(221, 139, 17);" class="text-center">What our client says</h3>
                <h1 class="container my-3 text-center display-2">OUR CUSTOMERS</h1>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container my-2">


                                <div class="container">

                                    <div class="jumbotron ">
                                        <img src="images/customer-1.png" alt="customer"
                                            class="rounded-circle  img-fluid">
                                        <span class="text-center"> wow ! amazing and delicious food we had lorem
                                            issum Veniam explicabo magni nihil reiciendis. </span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container my-2">


                                <div class="container">

                                    <div class="jumbotron">
                                        <img src="images/customer-1.png" alt="customer"
                                            class="rounded-circle  img-fluid">
                                        <span class="text-center"> wow ! amazing and delicious food we had lorem
                                            issum Veniam explicabo magni nihil reiciendis. </span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container my-2">


                                <div class="container">

                                    <div class="jumbotron">
                                        <img src="images/customer-1.png" alt="customer"
                                            class="rounded-circle  img-fluid">
                                        <span class="text-center"> wow ! amazing and delicious food we had lorem
                                            issum Veniam explicabo magni nihil reiciendis. </span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php
  include 'include/footer.php';
?>