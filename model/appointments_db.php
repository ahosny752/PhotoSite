<?php







function addAppointment ($date, $location, $time, $user_id) {
    global $db;
    $sql = 'INSERT INTO appointments(date, location, time, user_id) '
            . 'VALUES(?, ?, ?, ?)';
    $statement = $db->prepare($sql);
    $statement->bindValue(1, $date);
    $statement->bindValue(2, $location);
    $statement->bindValue(3, $time);
    $statement->bindValue(4, $user_id);
    $result= $statement->execute();
    $statement->closeCursor();
    //result is true on success, false on error
    return $result;        
    
}


 
// get properties owned by landlord for property_landlordlist.php
function getAllAppointments(){
    global $db;
    $sql='SELECT firstname, lastname, date, time, location FROM  `users`, `appointments` WHERE users.user_id = appointments.user_id ORDER BY date ASC';
     $statement = $db->prepare($sql);  
     $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    return $result;    
}      




// get properties owned by landlord for property_landlordlist.php
function getMyAppointments ($user_id){
    global $db;
    $sql='SELECT firstname, lastname, date, time, location FROM  `users`, `appointments` WHERE users.user_id = appointments.user_id AND users.user_id = ? ORDER BY date DESC';
     $statement = $db->prepare($sql);
     $statement->bindValue(1, $user_id);    
     $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    return $result;    
}      









?>  