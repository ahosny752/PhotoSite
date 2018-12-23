<?php
//include all database configuration and functions
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

 


if($_SESSION['TYPE'] == 'admin' && isset($_GET['manage_gallery'])) {
    $photos = getAllPhotos();

    include 'manage_gallery.php';
    exit();
}

if($_SESSION['TYPE'] == 'user' && isset($_GET['user_photos'])) {
    include 'user_photos.php';
    exit();
}


if (ISSET($_GET['gallery'])){
     $photos = getAllPhotos();
include 'gallery.php';
exit();

}

if (isset($_GET['users'])){
    $users = getAllUsers();
    include 'users.php';
    exit();
}



if($_SESSION['TYPE'] == 'admin' && isset($_POST['upload'])){
    $user_id = filter_input(INPUT_POST,'user_id');
    $image = $_FILES['image']['name'];
    
    $target = "images/".basename($image);
    $result = addPhoto($image, $user_id);
    $photos = getAllPhotos();
   
    include 'manage_gallery.php';
//    exit();
    
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";

                 
  	}else{
  		$msg = "Failed to upload image";
  	}
    
          exit();
    
    
    
}







$message = "";








?>