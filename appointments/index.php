<?php // include all database configuration and functions
include '../common/configuration.php';
include '../common/functions.php';
include '../model/database.php';
include '../model/users_db.php';
include '../model/appointments_db.php';
include '../model/photos_db.php';


if (!isset($_SESSION)){
    session_start();
    if (!isset($_SESSION['TYPE'])){
        $_SESSION['TYPE'] = 'visitor';
    }
}



//get out all session variables
if (!isset($_SESSION['USERNAME'])){ 
$_SESSION['USERNAME'] = null;
$_SESSION['USER_ID'] = null;
$_SESSION['ADMIN_ID'] = null;
} else {
    $username = $_SESSION['USERNAME'];
    $user_id = $_SESSION['USER_ID']; //take renter_id out of session and put in variable
    $admin_id = $_SESSION['ADMIN_ID'];
}




$date = filter_input(INPUT_POST,'date');
$location = filter_input(INPUT_POST,'location');
$user_id = filter_input(INPUT_POST,'user_id');
$time = filter_input(INPUT_POST,'time');

  




if($_SESSION['TYPE'] == 'admin' && isset($_GET['manage_appointments'])) {
    
    $viewbookings = getAllAppointments();
    include 'manage_appointments.php';
    exit();
}

 if($_SESSION['TYPE'] == 'user' && isset($_GET['book_appointments'])) {
    include 'user_appointments.php';
    exit();
}










if (isset($_POST['book_appointment'])){
  $result = addAppointment($date, $location, $time, $user_id);
  
           include 'appointment_confirmation.php';
        exit();
    } else {
        
       include 'user_appointments.php';
         exit();
        }









//session_start();






$message = "";








?>
