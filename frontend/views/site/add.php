<?php

?>

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Shopping Cart</li>
            </ul>
        </div>
    </div>
    <div class="table-responsive cart_info">
        <table class="table table-condensed">
            <thead>
                <tr class="cart_menu">
                    <td class="image">Item</td>
                    <td class="description"></td>
                    <td class="price">Price</td>
                    <td class="quantity">Quantity</td>
                    <td class="total">Total</td>

                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($adds as $add) { ?>
                <tr>
                    <td class="cart_product">
                        <a href=""><img src="images/cool.jpg" alt=""></a>
                    </td>
                    <td class="cart_description">
                        <h4><a href=""><?=$add->description?></a></h4>
                        <p>Web ID:<?=$add->ikey?></p>
                    </td>
                    <td class="cart_price">                       
                        <p><?=$add->amount?></p>
                    </td>
                    <td class="cart_quantity">                       
                        <a class="cart_quantity_up" href="">+</a>
                        <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                        <a class="cart_quantity_down" href=""> - </a>
                    </td>
                    
                    <td class="cart_total">                       
                        <p class="cart_total_price"><?=$add->amount?></p>
                    </td>
                    <td class="cart_delete">
                        <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                    </td>
                </tr>

                <tr>
                    <td class="cart_product">
                        <a href=""><img src="images/cool.jpg" alt=""></a>
                    </td>
                    <td class="cart_description">
                        <h4><a href="">Colorclock Scuba</a></h4>
                        <p>Web ID:1089772</p>
                    </td>
                    <td class="cart_price">                       
                        <p>$59</p>
                    </td>
                    <td class="cart_total">                       
                        <p class="cart_total_price">$59</p>
                    </td>
                    <td class="cart_delete">
                        <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                    </td>
                </tr>

                <tr>
                    <td class="cart_product">
                        <a href=""><img src="images/cool.jpg" alt=""></a>
                    </td>
                    <td class="cart_description">
                        <h4><a href="">Colorclock Scuba</a></h4>
                        <p>Web ID:1089772</p>
                    </td>
                    <td class="cart_price">                       
                        <p>$59</p>
                    </td>
                    <td class="cart_total">                       
                        <p class="cart_total_price">$59</p>
                    </td>
                    <td class="cart_delete">
                        <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                    </td>
                </tr>


                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</section>

   