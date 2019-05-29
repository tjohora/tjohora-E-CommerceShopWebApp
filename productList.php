<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CyberLand | Products</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Sublime project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
        <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
        <link rel="stylesheet" type="text/css" href="../styles/categories.css">
        <link rel="stylesheet" type="text/css" href="../styles/categories_responsive.css">
    </head>
    <body>

        <div class="super_container">

            <?php include 'header.php'; ?>

            <!-- Home -->

            <div class="home">
                <div class="home_container">
                    <div class="home_background" style="background-image:url(../images/categories.jpg)"></div>
                    <div class="home_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content">
                                        <div class="home_title">Products<span>.</span></div>
                                        <div class="home_text"><p>We hope you find what you're looking for.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products -->

            <div class="products">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <!-- Product Sorting -->
                            <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                                <div class="results">Showing <span><?php echo count($allProducts);?></span> results</div>
                                <div class="sorting_container ml-md-auto">
                                    <div class="sorting">
                                        <ul class="item_sorting">
                                            <li>
                                                <span class="sorting_text">Sort by</span>
                                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                <ul>
                                                    <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
                                                    <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                                                    <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Name</span></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">

                            <div class="product_grid">
                                <!-- Product -->
                                
                                <?php foreach($allProducts as $product): ?>
                                    <div class="product">
                                        <a href="?action=showProduct&productID=<?php echo $product['productID'];?>">
                                        <div class="product_image"><img src="../images/product_<?php echo $product['productID']?>.jpg" alt=""></div>
                                        </a>
                                        <div class="product_content">
                                            <div class="product_title"><a href="?action=showProduct&productID=<?php echo $product['productID'];?>"><?php echo $product['name'] ?></a></div>
                                            <div class="product_price">€<?php echo $product['cost'] ?></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>                               
                            </div>
                            
                            
                            
                            <div class="product_pagination">
                                <ul>
                                    <li class="active"><a href="#">01.</a></li>
                                    <li><a href="#">02.</a></li>
                                    <li><a href="#">03.</a></li>
                                </ul>
                            </div>
                            
                            

                        </div>
                    </div>
                </div>
            </div>

            <!-- Icon Boxes -->

            <?php include '../guarantees.php'; ?>

            <!-- Newsletter -->

            <?php include '../newsletter.php'; ?>

            <!-- Footer -->
            <?php include 'footer.php'; ?>
            
        </div>
        <?php include 'plugins.php'; ?>
    </body>
</html>