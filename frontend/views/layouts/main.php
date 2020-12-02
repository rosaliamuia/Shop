<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
                <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="<?= Yii::$app->request->baseUrl;?>/images/to.jpg" height="50px" width="60px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="<?=Url::to(['site/women'])?>">Women <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?=Url::to(['site/men'])?>">Men</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Kids</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accessories</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <!-- <form action=".php" method="post">
                            <input type="text" name="search" placeholder="Search"/>
                            <input type="submit" value=">>"/>

                        </form> -->
                        <form action="<?php echo Url::to(['/shop2/backend/products'])?>"class="form-inline">
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" name="keyword" aria-label="Search">
                          <i class="fas fa-search fa-lg"></i>
                        </form> 
                      </li>
                      <li class="nav-item mt-2">
                        <i class="fas fa-shopping-cart fa-lg"></i>
                      </li>
                      <?php if (Yii::$app->user->isGuest ){?>
                      <li class="dropdown nav-item">
                        <a class="btn btn-light dropdown-toggle"  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user fa-lg"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" a href="<?=Url::to(['site/signup'])?>"><i class="fas fa-user-plus"></i>Sign Up</a>
                          <a class="dropdown-item" href="site/login"><i class="fas fa-sign-in-alt"></i>Log In</a>
                    </li>
                    <?php }else if(Yii::$app->user) {?>
                      <li class="dropdown nav-item">
                        <a class="btn btn-light dropdown-toggle"  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user fa-lg"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item"> <i class="far fa-user"></i> Hi <?= ucfirst(Yii::$app->user->identity->username)?> !</a>
                          <a class="dropdown-item" href="#"><i class="far fa-id-card"></i>Profile</a>
                          <a class="dropdown-item" href="#"><i class="fas fa-bell"></i>Notifications</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>Messages</a>
                          <a class="dropdown-item" href="site/logout"><i class="fas fa-sign-out-alt"></i>Log Out</a>
                    </li>
                    <?php } ?>
                  </ul>
                </div>
                </div>
              </nav>

    

    <div class="container-fluid">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<!--Footer-->
<footer>
                <div class="container-fluid ">
                    <div class="row text-left">
                        <div class="col-6 col-md-3">
                          <h6>My Account</h6>
                          <ul class="list-unstyled text-small light">
                            <li><a class="text-muted" href="#">Sign In</a></li>
                            <li><a class="text-muted" href="#">Register</a></li>
                            <li><a class="text-muted" href="#">Order Status</a></li>
                          </ul>
                        </div>
                        <div class="col-6 col-md-2">
                          <h6>Help</h6>
                          <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Shipping</a></li>
                            <li><a class="text-muted" href="#">Returns</a></li>
                            <li><a class="text-muted" href="#">Sizing</a></li>
                          </ul>
                        </div>
                        <div class="col-6 col-md-2">
                          <h6>About</h6>
                          <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Our Story</a></li>
                            <li><a class="text-muted" href="#">Media</a></li>
                            <li><a class="text-muted" href="#">Sustainability</a></li>
                          </ul>
                        </div>
                        <div class="col-6 col-md-2">
                          <h6>Legal Stuff</h6>
                          <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Terms of use</a></li>
                            <li><a class="text-muted" href="#">Terms of Sale</a></li>
                            <li><a class="text-muted" href="#">Privacy Policy</a></li>
                          </ul>
                        </div>
                        <div class="col-12 col-md-2">
                          <h6>Follow Here</h6>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>    
                        </div>
                        <div class="col-12 copyr">
                            <div>&copy; 2020 shoes inc. All Rights Reserved.</div>
                        </div>
                      </div> 
                </div>
              </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
