<?php

function addPhoto($image, $user_id) {
    global $db;
    $sql = "INSERT INTO images(image, user_id) "
            . "VALUES(?,?)";
    $statement = $db->prepare($sql);
    $statement->bindValue(1,$image);
    $statement->bindValue(2,$user_id);
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



function getAllPhotos(){
    global $db;
    $sql = "SELECT image, firstname, lastname FROM images, users where images.user_id = users.user_id order by lastname";
    $statement = $db->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    //result is the array of result
    return $result;            
}


function getAllUserPhotos ($user_id){
    global $db;
    $sql = "Select image FROM images user_id = :user_id";
//    $statement->bindValue(1,$user_id);
    $statement = $db->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    //result is the array of result
    return $result;   
    
    
    
    
    
}






?>
