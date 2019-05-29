<?php
require '../model/database.php';
require '../model/loginRegisterDB.php';
require '../model/productDB.php';
//require '../model/adminDB.php';
require '../model/cartDB.php';
//require '../model/indexDB.php';

//require '../model/wishlistDB.php';

session_start();
$action = filter_input(INPUT_POST, 'action');
if($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL){
        $action = 'showFrontPage';
        //TODO categories
    }
}

switch ($action){
    case 'showFrontPage':
        include '../index.php';
        break;
    
    case 'showLoginRegister':       
        include '../loginRegister.php';
        break;
    
    case 'checkRegister':
        $username = filter_input(INPUT_POST, 'username');
        $email = filter_input(INPUT_POST, 'email');       
        $password = filter_input(INPUT_POST, 'password');
        
        if(checkUsersRegister($email,$username) == false){
            $error = "Username or email already in use.";
            include '../loginRegister.php';
        }else{
            addUser($email, $username, $password);
            $goodMsg = "Thank you registering! Now login to begin shopping!";
            include '../loginRegister.php';
        }
        break;
    
    case 'checkLogin':
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');
        //check username,password
        if(checkUsersLogin($username,$password) == false){
            $error = "Incorrect username or password.";
            include '../loginRegister.php';
        }else{
            //creates session in function
            include '../index.php';  
        }    
        break;
        
    case 'logout':
        unset($_SESSION['username']);
        include '../index.php';         
        break;
    
//    case 'sendRecoverCode':
//        
//        include '../view/.php';
//        break;
//    
//    case 'verifyCode':
//        
//        break;
//    
//    case 'newPassword':
//        
//        break;
    
    case 'showCategories':
        $allCategories = getCategories();
        
        include '../categories.php';
        break;
    
    case 'showAllProducts':
        $product = filter_input(INPUT_GET, 'productType');
        $allProducts = getProducts($product);
        include '../productList.php';
        break;    
    
    case 'showProduct':   
        $productID = filter_input(INPUT_GET,'productID');
        $productDetails = getProductDetails($productID);
        include '../product.php';
        break;
    
//    case 'viewWishlist':
//        $userID;//session
//        $wishlistItems = getWishlistItems($userID);
//        include '../view/wishlist.php';
//        break;
//        
//    case 'removeWishlistItem':
//        $wishlistID = filter_input(INPUT_POST,'wishlistID');
//        
//        deleteWishlistItem($wishlistID);
//        include '../view/wishlist.php';
//        break;
//          

//    
//    case 'searchBarProducts':
//        $filter = "%" . filter_input(INPUT_POST,'searchBar') . "%";
//        
//        getProductsByType($filter);
//        include '../view/searchProducts.php';       
//        break;
//    
    case 'showCart':
        $orderID = $_SESSION['orderID'];
        
        $cartItems = getCartItems($orderID);
        include '../cart.php';
        break;
    
    case 'addToCart':
        $productID = filter_input(INPUT_GET, 'productID');
        $quantity = filter_input(INPUT_GET, 'quantity');
        
        echo $quantity;
        echo 'test';
        
        addToCart($productID,$quantity);
        include '../index.php';
        break;
    
    case 'completeOrder':
        $orderID = $_SESSION['orderID'];
        checkout($orderID);
        echo("<script>alert(Thanks for ordering!);</script>");
        include '../index.php';
        break;
    
//    case 'removeCartItem':
//        //todo
//        deleteCartItem();
//        include '../view/cart.php';
//        break;
//       
//    case 'addWishlistItem':
//        $productID = filter_input(INPUT_POST,'productID');
//        addWishlistItem($productID);
//        include '../view/productDetails.php';
//        break;
//    
//    case 'viewUser':
//        $userID;//session
//        $userDetails = getUserDetails($userID);
//        include '../view/userPage.php';
//        break;
//     
//    case 'updateUser':
//        //todo
//    
//        updateUser();        
//        break;
//    
//    case 'viewOtherUser':
//        $userID;
//        $userDetails = getUserDetails($userID);
//        include '../view/otherUserPage.php';
//        break;
//    
//    case 'addProductReview':
//        $productID = filter_input(INPUT_POST,'productID');
//        $userID;//session
//        $rating = filter_input(INPUT_POST,'rating');
//        $comment = filter_input(INPUT_POST,'comment');
//        
//        
//        if($productID==null || $userID==null|| $rating==null||$comment==null){
//            $error = "Invalid data.";
//        }else{
//            addReview($productID, $userID, $rating, $comment);
//            include '../view/productDetails.php';
//        }
//        break;
//    
//    case 'completeOrder':
//        //todo
//        //all item details
//        addOrder();
//        include '../view/frontpage.php';
//        break;
//        
//        
//    //****************admin settings*************************
//    
//    case 'viewProductsTable':
//        $allProducts = getAllProducts();
//        include '../view/productsTable.php';
//        break;
//    
//    case 'updateProduct':
//        //todo
//        
//        include '../view/productForm.php';
//        break;
//      
//    case 'insertProduct':
//        // todo add images
//        $manufacturerID = filter_input(INPUT_POST,'manufacturerID');
//        $name = filter_input(INPUT_POST,'name');
//        $info = filter_input(INPUT_POST,'info');
//        $cost = filter_input(INPUT_POST,'cost');
//        $type = filter_input(INPUT_POST,'type');
//        if($manufacturerID==null || $name==null || $info==null || $cost==null || $type==null){
//            $error = "Invalid data.";
//            include '../view/error.php';
//        }else{
//            addProduct($manufacturerID, $name, $info, $cost, $type);
//            include '../view/productDetails.php';
//        }
//        
//        break;
//    
//    case 'deleteProduct':
//        //todo
//        //consider maybe not deleting but hiding product to prevent problems with other
//        
//        break;
//    
////    case 'viewOrders':
////        
////        break;
////    
////    case 'deleteOrder':
////        
////        break;
//    
//    case 'viewProductReview':
//        $allReviews = getAllReviews();
//        include '../view/productsTable.php';
//        break;
//    
//    case 'deleteProductReview':
//        $reviewID = filter_input(INPUT_POST,'reviewID');
//        deleteProductReview();
//        include '../view/productsTable.php';
//        break;
//    
//    case 'viewUserTable':
//        $allUsers = getAllUsers();
//        include '../view/usersTable.php';
//        break;
//    
//    case 'deleteUser':
//        //todo
//        include '../view/userTable.php';
//        break;
//        
//    case 'updateUser':
//        //todo
//        break;
//        
//    case 'selectTimesheetOption':
//        //todo
//        break;
//        
//    case 'exportTimesheet':
//        //todo
//        break;
//        
//    case '':
//      
//        break;  
//
//    default :
        
}