<?php

//before I can do anything, I need database credentials
include '../common/configuration.php';

// before I can use the model functions, I need a database connection
include 'database.php';




include 'users_db.php';
echo '<p>Testing the users functions ... </p>';

//$firstname = 'test';
//$lastname = 'test';
//$email = 'test@test.com';
//$username = 'test';
//$password = 'test';
//$type = 'test';
//
//    
//    $result = addUser($firstname, $lastname, $email, $username, $password, $type);
//            
//if ($result == false){
//    echo "<p>Failure.  user not added</p>";
//} else {
//    echo "<p>Success.  user added: $result.</p>";    
//}



//
//$username = 'aj';
//$password = 'admin';
//$type = 'admin';
//
//$result = userLogin($username, $password, $type); 
//
//if ($result == true){
//    echo "<p>Login for $username was good</p>";
//} else {
//    echo "<p>Login for $username was bad</p>";    
//}





//$user_id = 39;
//$data = getUserInfo($user_id);
//print_r($data);
//
//
//if ($data == false){
//    echo "<p>Failure. cant get</p>";
//} else {
//    echo "<p>Success we got it : $result.</p>";    
//}
//

//
////$type = 'user';
//$dataS = getAllUsers();
//print_r($dataS);



//if ($dataS == false){
//    echo "<p>cant get users by type</p>";
//} else {
//    echo "<p>All users by tpe: .</p>";    
//}


//testing the appointment_db

include 'appointments_db.php';
//$user_id = 39;
//$user_appointment_id = '';
//$location = 'the whitehouse';
//$date = '12/12/12';
//$time = '10:00PM';
//$data = addAppointment($date, $location,$time, $user_id);
//

//
//if ($data == false){
//    echo "<p>Failure. cant get</p>";
//} else {
//    echo "<p>Success booked! : $result.</p>";    
//}
//
//
//
//
//$data = getAllAppointments();
//print_r($data);
//
//
//if ($data == false){
//    echo "<p>Failure. cant get</p>";
//} else {
//    echo "<p>all your appointments $result.</p>";    
//}
//
//
//
//$user_id = 39;
//$data = getMyAppointments($user_id);
//print_r($data);
//
//
//if ($data == false){
//    echo "<p>Failure. cant get</p>";
//} else {
//    echo "<p>Your scheduled appts are $result.</p>";    
//}
//


//testing the photos_db.php
include 'photos_db.php';

//$user_id= 49;
//$image='test.jpg';
//
//$result = addPhoto($image, $user_id);
//
//if ($result == false){
//    echo "<p>Failure.  image not added</p>";
//} else {
//    echo "<p>Success.  image added: $result.</p>";    
//}
//
//$data = getAllPhotos();
//print_r($data);


//if ($data == false){
//    echo "<p>Failure. cant get</p>";
//} else {
//    echo "<p>Your images appts are .</p>";    
//}




$user_id = 45;

$data = getAllUserPhotos($user_id);


print_r($data);


?>