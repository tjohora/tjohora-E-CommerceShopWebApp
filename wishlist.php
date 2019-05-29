<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Product</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Sublime project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
        <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
        <link rel="stylesheet" type="text/css" href="../styles/product.css">
        <link rel="stylesheet" type="text/css" href="../styles/product_responsive.css">
    </head>
    <body>

        <div class="super_container">

            <!-- Header -->

            <?php include 'header.php'; ?>

            <?php foreach($productDetails as $product):?>

            <!-- Product Details -->

            <div class="product_details">
                <div class="container">
                    <div class="row details_row">

                        <!-- Product Image -->
                        <div class="col-lg-6">
                            <div class="details_image">
                                <div class="details_image_large"><img src="../images/details_1.jpg" alt=""><div class="product_extra product_new"><a href="categories.html">New</a></div></div>
                            </div>
                        </div>
                        
                        <!-- Product Content -->
                        <div class="col-lg-6">
                            <div class="details_content">
                                <div class="details_name"><?php echo $product['name'];?></div>
<!--                                <div class="details_discount">$890</div>-->
                                <div class="details_price">€<?php echo $product['cost'];?></div>

                                <!-- In Stock -->
                                <div class="in_stock_container">
                                    <div class="availability">Availability:</div>
                                    <span>In Stock</span>
                                </div>
                                <div class="details_text">
                                    <p><?php echo $product['info'];?></p>
                                </div>

                                <!-- Product Quantity -->
                                <div class="product_quantity_container">
                                    <div class="product_quantity clearfix">
                                        <span>Qty</span>
                                        <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                        <div class="quantity_buttons">
                                            <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                            <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                    <div class="button cart_button"><a href="#">Add to cart</a></div>
                                </div>

                                <!-- Share -->
<!--                                <div class="details_share">
                                    <span>Share:</span>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>-->
                            </div>
                        </div>
                    </div>

                    <div class="row description_row">
                        <div class="col">
                            <div class="description_title_container">
                                <div class="description_title">Description</div>
                                <div class="reviews_title"><a href="#">Reviews <span>(1)</span></a></div>
                            </div>
                            <div class="description_text">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
            <!-- Newsletter -->

            <?php include 'newsletter.php'; ?>

            <!-- Footer -->

            <?php include 'footer.php'; ?>