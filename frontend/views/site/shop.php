<?php

/* @var $this yii\web\View */

$this->title = 'Shop';

use yii\helpers\Url;
use backend\models\Products;

$products = Products::find()->where(['status'=>1])->all();
?>
    <div class="container-fluid mt-5">
        <div class="row top text-left">
            <div class="col-12">
                <h2>Shop</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row padding">
        <?php foreach($products as $product) { ?>
            <div class="col-sm-12 col-md-3 col-lg-3 mt-5">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="<?= Yii::$app->request->baseUrl; ?> /backend/uploads/<?= $product->image?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?=$product->description?></h5>
                        <p class="card-text"><?=$product->amount?></p>
                        <form action="<?=Url::to(['/site/cart'])?>" method="post">
                                <input name="pid" value="<?=$product->id?>">
                                <button class="cart btn btn-info cart wh"><i class="fa fa-shopping-cart"></i>Add To Cart</button>
                        </form>
                        <!-- <button class="cart btn btn-info cart wh">Add To Cart</button> -->
                    </div>
                </div>
            </div>
            <?php } ?>

            <div class="col-sm-12 col-md-3 col-lg-3 mt-5">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="<?= Yii::$app->request->baseUrl; ?>/images/worn.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Cool Leather Shoes with Black Stripe</h5>
                        <p class="card-text">Ksh 700</p>
                        <button class="cart btn btn-info cart wh" data-toggle="modal" data-target="#basicExampleModal">Add To Cart</button>
                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-3 col-lg-3 mt-5">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="<?= Yii::$app->request->baseUrl; ?>/images/blackn.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Cool Leather Shoes with Black Stripe</h5>
                        <p class="card-text">Ksh 700</p>
                        <button class="cart btn btn-info cart wh" data-toggle="modal" data-target="#basicExampleModal">Add To Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3 mt-5">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="<?= Yii::$app->request->baseUrl; ?>/images/ladies2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Cool Leather Shoes with Black Stripe</h5>
                        <p class="card-text">Ksh 700</p>
                        <button class="cart btn btn-info cart wh" data-toggle="modal" data-target="#basicExampleModal">Add To Cart</button>
                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-3 col-lg-3 mt-5">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="<?= Yii::$app->request->baseUrl; ?>/images/newg.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Cool Comfortable Shoes to wear in any event</h5>
                        <p class="card-text">Ksh 700</p>
                        <button class="cart btn btn-info cart wh" data-toggle="modal" data-target="#basicExampleModal">Add To Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3 mt-5">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="<?= Yii::$app->request->baseUrl; ?>/images/pinkie.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Cool Comfortable Shoes to wear in any event</h5>
                        <p class="card-text">Ksh 700</p>
                        <button class="cart btn btn-info cart wh" data-toggle="modal" data-target="#basicExampleModal">Add To Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3 mt-5">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="<?= Yii::$app->request->baseUrl; ?>/images/red.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Cool Comfortable Shoes to wear in any event</h5>
                        <p class="card-text">Ksh 700</p>
                        <button class="cart btn btn-info cart wh" data-toggle="modal" data-target="#basicExampleModal">Add To Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3 mt-5">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="<?= Yii::$app->request->baseUrl; ?>/images/shorth.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Cool Comfortable Shoes to wear in any event</h5>
                        <p class="card-text">Ksh 700</p>
                        <button class="cart btn btn-info cart wh" data-toggle="modal" data-target="#basicExampleModal">Add To Cart</button>
                    </div>
                </div>
            </div>


            <div class="col-md-3 mt-5">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="<?= Yii::$app->request->baseUrl; ?>/images/smartie.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Cool Comfortable Shoes to wear in any event</h5>
                        <p class="card-text">Ksh 700</p>
                        <button class="cart btn btn-info cart wh" data-toggle="modal" data-target="#basicExampleModal">Add To Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mt-5">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="<?= Yii::$app->request->baseUrl; ?>/images/simple.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Cool Comfortable Shoes to wear in any event</h5>
                        <p class="card-text">Ksh 700</p>
                        <button class="cart btn btn-info cart wh" data-toggle="modal" data-target="#basicExampleModal">Add To Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mt-5">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="<?= Yii::$app->request->baseUrl; ?>/images/simpc2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Cool Comfortable Shoes to wear in any event</h5>
                        <p class="card-text">Ksh 700</p>
                        <button class="cart btn btn-info cart wh" data-toggle="modal" data-target="#basicExampleModal">Add To Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mt-5">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="<?= Yii::$app->request->baseUrl; ?>/images/simpc.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Cool Comfortable Shoes to wear in any event</h5>
                        <p class="card-text">Ksh 700</p>
                        <button class="cart btn btn-info cart wh" data-toggle="modal" data-target="#basicExampleModal">Add To Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Only The Best</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class=" chk">
                        <i class="fas fa-check"></i>
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h6 class="lead text-center">Available in your nearest Store.<br> Thank you for Checking it Out </h6>
                </div>
                <div class="modal-footer wh2">
                    <button type="button" class="btn btn-success btn-lg"><i class="far fa-gem"></i><a href="<?=Url::to(['site/cart'])?>">Get It Now</a></button>
                    <button type="button" class="btn btn-outline-success btn-lg">No Thanks</button>
                </div>
            </div>
            <!--Modal End-->


