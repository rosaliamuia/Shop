<?php

/* @var $this yii\web\View */
use backend\models\Categories;
use backend\models\Products;

$this->title = 'My Yii Application';

$products = Products::find()->where(['Category'=>'women'])->all();
?>

<div class="container-fluid padding mt-5">
                <div class="row new text-left">
                    <div class="col-12">
                        <h2 class="item">Women</h2>
                    </div>
                  </div>
                </div>
            </div>
            <div class="container-fluid padding mt-2">
                <div class="row padding mt-5">
                <?php foreach($products as $product) { ?>
                    <div class="col-md-4">
                        <div class="card" style="width: 27rem;">
                            <img class="card-img-top item" src="<?= Yii::$app->request->baseUrl; ?>/backend/uploads/<?= $product->image?>" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title"><?=$product->description?></h5>
                              <p class="card-text"><?=$product->amount?></p>
                              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                          </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            