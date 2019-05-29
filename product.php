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

            <!-- Product Details -->
            <div class="product_details">
                <div class="container">
                    <?php foreach ($productDetails as $productDetail): ?>
                        <div class="row details_row">

                            <!-- Product Image -->
                            <div class="col-lg-6">
                                <div class="details_image">
                                    <div class="details_image_large"><img src="../images/product_<?php echo $productDetail['productID'] ?>.jpg" alt=""></div>
                                </div>
                            </div>

                            <!-- Product Content -->
                            <div class="col-lg-6">
                                <div class="details_content">
                                    <div class="details_name"><?php echo $productDetail['name'] ?></div>
                                    <!--                                <div class="details_discount">$890</div>-->
                                    <div class="details_price">€<?php echo $productDetail['cost'] ?></div>

                                    <!-- In Stock -->
                                    <div class="in_stock_container">
                                        <div class="availability">Availability:</div>
                                        <span>In Stock</span>
                                    </div>
                                    <div class="details_text">
                                        <p><?php echo $productDetail['info'] ?></p>
                                    </div>

                                    <!-- Product Quantity -->
                                    <form>
                                        <input type="hidden" name="action" value="addToCart">
                                        <input type="hidden" name="productID" value="<?php echo $productDetail['productID'] ?>">
                                        <div class="product_quantity_container">
                                            <div class="product_quantity clearfix">
                                                <span>Qty</span>
                                                <input id="quantity_input" type="text" pattern="[0-9]*" value="1" name="quantity">
                                                <div class="quantity_buttons">
                                                    <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                                    <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                                </div>
                                            </div>
                                            <?php
                                            if (isset($_SESSION['username'])) {
                                                echo '<input type="submit" value="Add to Cart" >';
                                            } else {
                                                echo 'Please sign-in to place order!';
                                            }
                                            ?>

                                        </div>
                                    </form>
                                    <!-- Share -->
                                    <div class="details_share">
    <!--                                    <span>Share:</span>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        </ul>-->
                                    </div>
                                </div>
                            </div>
                        </div>
<?php endforeach; ?>


                    <!--                    <div class="row description_row">
                                            <div class="col">
                                                <div class="description_title_container">
                                                    
                                                    <div class="description_title">Description</div>
                                                    <div class="reviews_title"><a href="#">Reviews <span>(1)</span></a></div>
                                                </div>
                                                <div class="description_text">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                                </div>
                                            </div>
                                        </div>-->
                </div>
            </div>

            <!-- Newsletter -->

<?php include 'newsletter.php'; ?>

            <!-- Footer -->

<?php include 'footer.php'; ?>

        </div>
<?php include 'plugins.php'; ?>
        <script src="../js/product.js"></script>
    </body>
</html>