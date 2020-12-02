<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duka</title>
    <link rel="stylesheet" href="../style2.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>


<div class="container mt-5 p-5">
    <div class="row">
    <?php foreach($carts as $cart) { ?>
        <div class="col-xs-12 col-md-3 col-lg-3">
            <div class="card bg-light mb-3" style="width: 16rem;">
                <div class="row no-gutters">
                <div class="col-md-12">
                <!-- <div class="card-header">Shoes</div> -->
                <div class="card-body">
                      <p class=" lead mt-3"><strong><?=$cart->availability?></strong></p>
                </div>
              </div>
            </div>
              <div class="card" style="width: 16rem;">
                <!-- <div class="card"> -->
                    <!-- <div class="card-body"> -->
                      <!-- <blockquote class="blockquote mb-0"> -->
                        <!-- <p>Available Always</p> -->
                        
                            <!-- <img src="images/to.jpg" height="50px" width="60px" class="ml-5 "><br>
                            <p class="pt-2"> -->
                            <!-- Quality Shoes For All and Any Event</p> -->
                     <!-- </blockquote> -->
                    <!-- </div>
                  </div> -->
                <ul class="list-group list-group-flush">
                    <!-- <li class="list-group-item">  <div class="text-left"><img src="images/to.jpg" height="50px" width="60px"></div> -->
                        <p class="lead text-left pl-3"><strong>
                        <?=$cart->description?></strong></li>
                  <li class="list-group-item lead mt-1"><i class="fas fa-truck"></i> Free Delivery</li>
                  <li class="list-group-item lead"><i class="fas fa-exchange-alt"></i> 100 days Policy</li>
                  <li class="list-group-item lead"><i class="fas fa-undo-alt"></i> Free Return</li>
                  <li class="list-group-item lead mb-3"><i class="fas fa-info"></i>&nbsp;Free Helpline<br>+254725685545</li> 
                </ul>
              </div>
        </div> 
        </div>
        <div class="col-xs-12 col-md-3 col-lg-3">
                <div class="card" style="width: 16rem;">
                    <img src="<?= Yii::$app->request->baseUrl; ?> /backend/uploads/<?= $cart->image?>" class="card-img-top img-product" alt="...">
                  </div>
        </div>
        <div class="col-xs-12 col-md-6 col-md-6">
            <div class="card" style="width: 30rem; ">
                <div class="card-header">
                  <h6 class="ph">Summary<?=$cart->ikey?> </p></h6>
                  <span class="stars">★★★★★</span><br>
                  Number of Pairs&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="price"><?=$cart->amount?></span><br>
                  Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="price"><?=$cart->amount?></span></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><h6>Size:</h6>
                    <div class="size-wrap">
                        <span class="size">37</span>
                        <span class="size">38</span>
                        <span class="size selected">40</span>
                        <span class="size">41</span>
                    </div>
                    </li>
                    <li class="list-group-item"><h6>Colors:</h6>
                        <div class="colors-wrap">
                            <span class="colors selected"></span>
                            <span class="colors"></span>
                            <span class="colors"></span>
                            <span class="colors"></span>
                        </div>
                        </li>
                  <li class="list-group-item">Purchase Options<br>
                    <i class="fab fa-cc-paypal fa-lg pay"></i>
                    <i class="fab fa-paypal fa-lg pay"></i>
                    <i class="fab fa-cc-mastercard fa-lg pay"></i>
                    <i class="fab fa-cc-visa fa-lg pay"></i>
                    <i class="fab fa-google-wallet fa-lg pay"></i>
                  </li>
                  <li class="list-group-item "><div class="cart">Go To payment</div></li>
                  <li class="list-group-item" > <div class="wishlist">Add to Wishlist</div></li>
                </ul>
              </div>
        </div>


        <?php } ?>
    </div>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="main.js"></script>
</body>
</html>