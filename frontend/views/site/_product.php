<?php

use yii\helpers\Url;
?>

<div class="col-md-4">
<div class="card" style="width: 27rem;">
     <img class="card-img-top item" src="backend/web/uploads/<?= $model->image ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?=$model->name?><br><?=$model->description?></h5>
      <p class="card-text"><?=$model->amount?></p>
      <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
    </div>
  </div>
  
      
        
        <!-- <form action="<?=Url::to(['/site/add'])?>" method="post">
        <input name="pid" value="<?=$model->id?>">
        <button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add To Cart</button> -->


</form>
      
 
</div>

