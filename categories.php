<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Categories</title>
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

            <!-- Header -->

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
                                        <div class="home_title">Product Range<span>.</span></div>
                                        <div class="home_text"><p>Check out our limited range of average to low quality products.</p></div>
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="product_grid">
                                
                                
                                <?php foreach ($allCategories as $category): ?>
                                    <div class="product">
                                        <a href="?action=showAllProducts&productType=<?php echo $category['productTypeID'];?>"> <div class="product_image"><img src="../images/category_<?php echo $category['productTypeID']; ?>.jpg" alt=""></div></a>
                                        <div class="product_content">
                                            <a href="?action=showAllProducts&productType=<?php echo $category['productTypeID'];?>"><div class="product_title"><?php echo $category['productTypeID']; ?></div></a>
                                            <div class="product_price"><?php echo $category['description']; ?></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>                         
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
        <?php include 'plugins.php'; ?>
    </body>
</html>