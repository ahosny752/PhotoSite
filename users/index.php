<?php
include '../common/configuration.php';
include '../model/database.php';
include '../model/users_db.php';
include '../model/photos_db.php';
include '../common/functions.php';


if (!isset($_SESSION)){
    session_start();
    if (!isset($_SESSION['TYPE'])){
        $_SESSION['TYPE'] = 'visitor';
    }
}



$message = "";



$firstname = filter_input(INPUT_POST,'firstname');
$lastname = filter_input(INPUT_POST,'lastname');
$email = filter_input(INPUT_POST,'email');
$username = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST,'password');
$type = filter_input(INPUT_POST,'type');

 
if (ISSET($_GET['signup'])){
include 'signup.php';
exit();
}

if (ISSET($_GET['signin'])){
include 'signin.php';
exit();

}


if (isset($_GET['logout'])){
    include 'user_logout.php';
    exit();
    
}

if (isset($_GET['admin_signin'])){
    include 'admin_signin.php';
    exit();
    
}


        
if($_SESSION['TYPE'] == 'user' && isset($_GET['user_portal'])) {
    include 'user_portal.php';
    exit();
}

//if($_SESSION['TYPE'] == 'user' && isset($_GET['appointments'])) {
//    include 'user_appointments.php';
//    exit();
//}


if($_SESSION['TYPE'] == 'user' && isset($_GET['user_profile'])) {
    include 'user_profile.php';
    exit();
}

if($_SESSION['TYPE'] == 'user' && isset($_GET['contact'])) {
    include 'contact.php';
    exit();
}


    if (isset($_POST['sign-in-user'])) 
{
    $username = filter_input(INPUT_POST,'username');
    $password = filter_input(INPUT_POST,'password');
    if (empty($username) || empty($password)){
        $message = "<div class='alert alert-danger'>Please don't leave any field blank. Please try again.</div>";
        include 'signin.php';
        exit();
    } else {
    $user_id = userLogin($username, $password,'User');
    //$renter_info = getUserInfo($renter_id);
    if (!empty($user_id)){
        //session_start();
        $_SESSION['LOGGED_IN']='OK';
        $_SESSION['TYPE']='user';
        $_SESSION['USER_ID'] = $user_id; //assign value into session variable
        $_SESSION['ADMIN_ID'] = null;
        $_SESSION['USERNAME'] = $username;
        //$_SESSION['RENTER_INFO'] = $renter_info;
        include 'user_portal.php';
        exit();
    } else
    {
        $message = "<div class='alert alert-danger'>Wrong stuff.</div>";
        include 'signin.php';
        exit();
    }
}
}    



// if($_SESSION['TYPE'] == 'admin' && isset($_GET['manage_gallery'])) {
//    include 'manage_gallery.php';
//    exit();
//}


if($_SESSION['TYPE'] == 'admin' && isset($_GET['admin_portal'])) {
    include 'admin_portal.php';
    exit();
}

//
//if($_SESSION['TYPE'] == 'admin' && isset($_GET['manage_appointments'])) {
//    include 'manage_appointments.php';
//    exit();
//}







if (isset($_POST['sign-in-admin'])) 
{
    $username = filter_input(INPUT_POST,'username');
    $password = filter_input(INPUT_POST,'password');
    if (empty($username) || empty($password)){
        $message = "<div class='alert alert-danger'>Please don't leave any field blank. Please try again.</div>";
        include 'signin.php';
        exit();
    } else {
    $admin_id = userLogin($username, $password,'admin');
    //$renter_info = getUserInfo($renter_id);
    if (!empty($admin_id)){
        //session_start();
        $_SESSION['LOGGED_IN']='OK';
        $_SESSION['TYPE']='admin';
        $_SESSION['USER_ID'] = null; 
        $_SESSION['ADMIN_ID'] = $admin_id;//assign value into session variable
        $_SESSION['USERNAME'] = $username;
        //$_SESSION['RENTER_INFO'] = $renter_info;
        include 'admin_portal.php';
        exit();
    } else
    {
        $message = "<div class='alert alert-danger'>Wrong stuff.</div>";
        include 'signin.php';
        exit();
    }
}
}    


      

if (isset($_POST['create'])){
  $result = addUser($firstname, $lastname, $email, $username, $password, $type);
  
           include 'account_confirmation.php';
        exit();
    } else {
        
       include 'signup.php';
         exit();
        }

        
        
        
 ?>

