<?php

function addToCart($productID, $quantity) {
    global $db;

    if (!isset($_SESSION['orderID'])) {//if the orderID session is NOT set, then we need to make one, meaning run this
        $query1 = "INSERT INTO orders VALUES (NULL,NOW(),NULL,0,:userID)"; //NULL is an AUTO-INCREMENT primary key,NOW() is an SQL function that gets the current date,0 is cost that will be calculated when the order is finished

        $statement = $db->prepare($query1);
        $statement->bindValue(":userID", $_SESSION['userID']);
        $statement->execute();
        $statement->closeCursor();

        $query2 = "SELECT MAX(orderID) AS orderID FROM orders WHERE userID = :userID"; //MAX finds the highest integer from the order_ID column made by the current user and calls and is goven the name "orderID" using AS
        $statement = $db->prepare($query2);
        $statement->bindValue(":userID", $_SESSION['userID']);
        $statement->execute();
        $all_queries2 = $statement->fetchAll();
        $statement->closeCursor();

        foreach ($all_queries2 as $one_query2) :
            $_SESSION['orderID'] = $one_query2['orderID']; //sets the orderID as a session variable
        endforeach;
        //this whole process basically lets us crate a new order in the "an_order" table, so that we may update later when all orders are finalized.
        //The orderID is set to a session so that any product ordered by the user will have it set ti the same Order ID 
    }

    $query3 = "INSERT INTO orderlineitems VALUES (:quantity,:productID,:orderID)";
    $statement = $db->prepare($query3);
    $statement->bindValue(":quantity", $quantity);
    $statement->bindValue(":productID", $productID);
    $statement->bindValue(":orderID", $_SESSION['orderID']);
    $statement->execute();
    $statement->closeCursor();
}

function getCartItems($orderID) {
    global $db;

    $query = "SELECT product.productID, product.cost,orderlineitems.quantity,product.name FROM orderlineitems "
            . "INNER JOIN product ON product.productID = orderlineitems.productID "
            . "WHERE orderlineitems.orderID = :orderID";


    $statement = $db->prepare($query);
    $statement->bindValue(":orderID", $orderID);
    $statement->execute();
    $cartItems = $statement->fetchAll();
    $statement->closeCursor();
    return $cartItems;
}

function checkout($orderID) {
    global $db;

    $query2 = 'UPDATE orders SET totalCost = :cost,date = NOW() WHERE orderID = :orderID';
    $statement = $db->prepare($query2);
    $statement->bindValue(':cost', $cost);
    $statement->bindValue(':orderID', $orderID);
    $statement->execute();
    $all_queries2 = $statement->fetchAll();
    $statement->closeCursor();
}
