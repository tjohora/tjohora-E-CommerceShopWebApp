<?php

function getCategories() {
    global $db;

    $query = "SELECT * FROM producttype";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (PDOException $ex) {
        header("Location:../error.php?msg=" . $ex->getMessage());
    }
    $allCategories = $statement->fetchAll();
    $statement->closeCursor();

    return $allCategories;
}

function getProducts($product) {
    global $db;

    $query = 'SELECT product.productID,product.name,product.cost FROM product '
            . 'WHERE productTypeID = :product';
    $statement = $db->prepare($query);
    $statement->bindValue(':product', $product);
    $statement->execute();
    $allProducts = $statement->fetchAll();
    $statement->closeCursor();
    return $allProducts;
}

function getProductDetails($productID){
    global $db;
    $query = 'SELECT product.productID,product.name,product.info,product.cost,manufacturer.manufacturerName,manufacturer.manufacturerContact,productType.productTypeID FROM product '            
            . 'INNER JOIN manufacturer ON product.manufacturerID = manufacturer.manufacturerID '
            . 'INNER JOIN producttype ON product.productTypeID = producttype.productTypeID '
            . 'WHERE productID = :productID';
    echo $query;
    $statement = $db->prepare($query);
    $statement->bindValue(':productID', $productID);
    $statement->execute();
    $productDetails = $statement->fetchAll();
    $statement->closeCursor();
    return $productDetails;
}
