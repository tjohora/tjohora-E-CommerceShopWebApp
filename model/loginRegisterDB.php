<?php

function checkUsersRegister($email, $username) {
    global $db;

    $query = "SELECT * FROM useraccount"
            . " WHERE userName = :username OR email = :email"; //selecting all names that the user has entered

    $statement = $db->prepare($query);
    $statement->bindValue(":username", $username);
    $statement->bindValue(":email", $email);
    $statement->execute();
    $all_queries = $statement->fetchAll();
    $statement->closeCursor();

    $arrayLength = count($all_queries); //counting how many elements there are in the all_queries1 array. This is so that we can see if the SELECT previously has found any names that match that the user has entered
    echo("<script>alert('number of records: " . $arrayLength . ".');</script>"); //this alerts to the user if there are any matches with the name they entered
    if ($arrayLength != 0) { // if the result returned is NOT 0(meaning it has to be 1 or more),BAD!
        return false;
    } else {//if array length is 0, then the name is unique, which is good!
        return true;
    }
}

function addUser($email, $username, $password) {
    global $db;

    $query = "INSERT INTO useraccount VALUES (NULL,:password,0,NULL,:username,:email,NULL)"; //The NULL here is the user address which is allowed within database, the user can change this in the userPage

    $statement = $db->prepare($query);
    $statement->bindValue(":email", $email);
    $statement->bindValue(":username", $username);
    $statement->bindValue(":password", $password);
    $statement->execute();
    $statement->closeCursor();

    //echo("<script> window.location.replace('signin.php');</script>"); //script to bring us to the signin page 
}

function checkUsersLogin($username, $password) {
    global $db;

    $query = "SELECT * FROM useraccount WHERE userName = :username";
    $statement = $db->prepare($query);
    $statement->bindValue(":username", $username);
    $statement->execute();
    $all_queries = $statement->fetchAll();
    $statement->closeCursor();
//selecting all the usernames from the user_account table that is the same as the user input to see if it exists

    $arrayLength = count($all_queries);
    if ($arrayLength != 1) {       
        return false; // if the number of search results found is NOT 1, it means the search is not unique. BAD DATA
    } else { //username exists and is unique, so now we check the password
        foreach ($all_queries as $one_query) :
            $dbPassword = $one_query['userPassword'];
            $dbUserType = $one_query['userType'];
            //$dbUserAddress = $one_query['user_address'];
            $dbuserID = $one_query['userID'];
            $dbEmail = $one_query['email'];
            $dbUsername = $one_query['userName'];
        endforeach; //setting search results as variables

        if ($dbPassword != $password) { //checking to see if the password is valid,run this if the database password does not match with the inputed one
            return false;//if not, BAD DATA
        } else {
            $_SESSION['username'] = $dbUsername;
            $_SESSION['userType'] = $dbUserType;
            $_SESSION['signinUser'] = $username;
            $_SESSION['signinPassword'] = $dbPassword;
            $_SESSION['userID'] = $dbuserID; //session varibales set, until session is destroyed
            return true;
            
//            if ($dbUserAddress = NULL) { // if the user has not made an address:
//                $_SESSION['userAddress'] = ""; //the session is set to blank
//            } else {
//                $_SESSION['userAddress'] = $dbUserAddress; //otehrwise set it as a session variable
//            }
//            if ($dbUserType == 1) {
//                header("Location: index.php?user=" . $_SESSION['signin_user'] . "admin");
//            } else if ($dbUserType == 0) {
//                header("Location: index.php?user=" . $_SESSION['signin_user'] . "member");
//            } else {
//                header("Location: index.php?user=" . $_SESSION['signin_user'] . "unknown");
//            } //depending on the user type, the url will appear different
//            exit;
        }
    }
}
