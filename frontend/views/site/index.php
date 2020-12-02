<?php

/* @var $this yii\web\View */
use backend\models\Products;
use yii\helpers\Url;

$this->title = 'My Yii Application';

$products = Products::find()->where(['status'=>1])->all();
?>


<!--Two Column Section-->
<div class="container-fluid">
    <div class="row text-center">
        <div class="col-xs-12 col-sm-6 col-md-6 head">
            <h1 class="mt-5 dh">Built For <br>Flight</h1>
            <p class="mt-5">Introducing, our lightest <br> shoe ever</p>
            <button class="btn btn-dark btn-lg mt-5 wh3"><a href='site/shop'> SHOP</a></button>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <img src="images/Shoes.png" class="pic">
           
        </div>
    </div>
    <!-- <hr class="my-4"> -->
    </div>
    
    
    <!--Two Column Section-->

            <!--Carrousel-->
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-6">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active" ></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/worn.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <p>Men</p>
                      <button type="button" class="btn btn-outline-light btn-lg">Shop Now</button>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/simple.jpg" class="d-block w-100" height="360px" alt="...">
                    <div class="carousel-caption d-none d-md-block">     
                       <p>Men</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/simpc2.jpg" class="d-block w-100 mh-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Men</p>
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
            </div>
                <div class="col-md-6">
                    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="10000">
                                <img src="images/shorth.jpg" class="d-block w-100 mh-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                     <p>Ladies</p>
                                     <button type="button" class="btn btn-outline-light btn-lg">Shop Now</button>
                                </div>
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img src="images/cool2.jpg" class="d-block w-100 mh-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>Ladies</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/pinkie.jpg" class="d-block w-100 mh-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>Ladies</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            </div>
            <!--End Of Carrousel-->

            <!--New Releases-->
            <div class="container-fluid padding mt-5">
                <div class="row top text-left">
                    <div class="col-12">
                        <h2>Top Picks</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid padding mt-2">
              <div class="wrapper">
                <div class="row padding mt-5">
                    <div class="col-md-4">
                        <div class="card" style="width: 27rem;">
                            <img class="card-img-top item" src="images/happy.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Hang Out Shoes</h5>
                              <p class="card-text">Ksh 700</p>
                              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                          </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card" style="width: 27rem;">
                            <img class="card-img-top item" src="images/simpc.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Hang Out Shoes</h5>
                              <p class="card-text">Ksh 700</p>
                              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                          </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card" style="width: 27rem;">
                            <img class="card-img-top item" src="images/shorth.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Hang Out Shoes</h5>
                              <p class="card-text">Ksh 700</p>
                              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                          </div>
                    </div>

                </div>
            </div>
            </div>

            <!--End of New Releases-->
         

            
            
            <div class="container-fluid padding mt-5">
                <div class="row new text-left">
                    <div class="col-12">
                        <h2 class="item">New Releases</h2>
                    </div>
                  </div>
                </div>
            </div>
            <div class="container-fluid padding mt-2">
              <div class="wrapper">
                <div class="row padding mt-5">
                <?php foreach($products as $product) { ?>
                    <div class="col-md-4">
                        <div class="card" style="width: 27rem;">
                            <img class="card-img-top item" src="backend/uploads/<?= $product->image?>" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title"><?=$product->description?></h5>
                              <p class="card-text"><?=$product->amount?></p>
                              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                              <form action="<?=Url::to(['/site/cart'])?>" method="post">
                                <!-- <input name="pid" value="<?=$product->id?>"> -->
                                <button class="cart btn btn-info cart wh"><i class="fa fa-shopping-cart"></i>Add To Cart</button>
                                </form>
                            </div>
                          </div>
                    </div>
                    <?php } ?>

                    <!-- <div class="col-md-4">
                        <div class="card " style="width: 27rem;">
                            <img class="card-img-top item" src="images/simple.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Hang Out Shoes</h5>
                              <p class="card-text">Ksh 700</p> -->
                              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            <!-- </div>
                          </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card" style="width: 27rem;">
                            <img class="card-img-top item" src="images/smartie.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Hang Out Shoes</h5>
                              <p class="card-text">Ksh 700</p> -->
                              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            <!-- </div>
                          </div>
                    </div> -->
                  </div>
                </div>
            </div>

            <!--End Of Top Picks-->

       

            <!--Never Miss-->
            <div class="container-fluid padding mt-5">
            <div class="row never text-center">
                <div class="col-12">
                    <h1 class="style: font-size: 24px;">Never Miss a <br>
                         drop</h1>
                </div>
                <div class="col-12">
                    <p>Receive updates about new Products <br>
                    and Promotions</p>
                    <button class="btn btn-outline-secondary btn-lg mt-5 mb-5"> Join Mailing List</button>  
                </div>  
            </div>
            </div>
            <!--End of Never Miss-->    