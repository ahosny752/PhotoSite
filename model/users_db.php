<?php

function userLogin($username,$password,$type){
    //returns true if the username and password are a good match.  false if not
    global $db;
    $sql = 'select user_id FROM users '
            . 'WHERE username = ? and password = ? and type = ?';
    $statement = $db->prepare($sql);
    $statement->bindValue(1,$username);
    $statement->bindValue(2,$password);
    $statement->bindValue(3,$type);
    $statement->execute();
    $array = $statement->fetch();
    $statement->closeCursor();
    if (empty($array['user_id'])){
        $result = false;
    } else
    {
        $result = $array['user_id'];
    }
    return $result; //result is the people_id of the logged-in user   
}



function addUser($firstname, $lastname, $email, $username, $password, $type) {
    global $db;
    $sql = "INSERT INTO users(firstname, lastname, email, username, password, type) "
            . "VALUES(?,?,?,?,?,?)";
    $statement = $db->prepare($sql);
    $statement->bindValue(1,$firstname);
    $statement->bindValue(2,$lastname);
    $statement->bindValue(3,$email);
    $statement->bindValue(4,$username);
    $statement->bindValue(5,$password);
    $statement->bindValue(6,$type);
    if ($statement->execute()){
       $result = true; 
    } else
    {
        $result = false;
    }
    
    $statement->closeCursor();
    
    //result is true on success, false on error
    return $result;
}

function getUserInfo ($user_id){
    global $db;
    $sql = "SELECT * from users WHERE user_id = ?";
    $statement = $db->prepare($sql);
    $statement->bindValue(1,$user_id);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    //result is the array of result
    return $result;            
}

function getAllUsers(){
    global $db;
    $sql = "SELECT * from users WHERE type = 'user'";
    $statement = $db->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    //result is the array of result
    return $result;            
}
