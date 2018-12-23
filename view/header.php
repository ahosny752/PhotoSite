
<?php


if (!isset($_SESSION)){
    session_start();
    if (!isset($_SESSION['TYPE'])){
        $_SESSION['TYPE'] = 'visitor';
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  
  <link rel="stylesheet" href="../main.css"> 
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    </head>
    
    <script>
 
 
 
 
    
    </script>
    
    
    
    
    
    
    
    


    <body>
        <?php
    //learn from avclub's request_list
    if($_SESSION['TYPE'] == 'visitor') {
?>
        
       <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Zac Henning Photography</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="home"><a aria-label="Home Page" href="<?php echo $base_path;?>/index.php">Home</a></li>
      <li><a id="signin" href="<?php echo $base_path;?>/users?signin">Sign In</a></a></li>
      <li><a id="signup" href="<?php echo $base_path;?>/users?signup">Sign Up</a></a></li>
      <li><a id="Galery "href="<?php echo $base_path;?>/photos?gallery">Gallery</a></a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
         
         <li><a id="Gallery"  href="<?php echo $base_path;?>/users?admin_signin">Admin</a></a></li>
      </ul>
  </div>
</nav>
   <?php
            };
        ?>
        
        <?php        
    if($_SESSION['TYPE'] == 'user') {
        $user_id = $_SESSION['USER_ID'];
        $user_info = getUserInfo($user_id);
                
?>      
        
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand"href="<?php echo $base_path;?>/users?user_portal"><i class="fas fa-user"></i>Welcome, <?php echo $user_info['firstname'];?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="home"><a aria-label="Home Page" href="<?php echo $base_path;?>/index.php">Home</a></li>
      <li><a id="appointments" href="<?php echo $base_path;?>/appointments?book_appointments">Book An Appointment</a></a></li>
      <li><a id="my_photos" href="<?php echo $base_path;?>/photos?user_photos">My Photos</a></a></li>
      <li><a id="profile "href="<?php echo $base_path;?>/Users?user_profile">My Profile</a></a></li>
      <li><a id="contact "href="<?php echo $base_path;?>/Users?contact">Contact</a></a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a id="logout" href="<?php echo $base_path;?>/users?logout">Logout</a></a></li>
      </ul>
  </div> 
</nav>
        
        
        
         <?php
            };
        ?>
        
   
        
      
        
<?php        
    if($_SESSION['TYPE'] == 'admin') {
        $user_id = $_SESSION['ADMIN_ID'];
        $user_info = getUserInfo($user_id);
        
        
                
?>      
        
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand"href="<?php echo $base_path;?>/users?admin_portal"><i class="fas fa-user"></i>Welcome, <?php echo $user_info['firstname'];?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="home"><a aria-label="Home Page" href="<?php echo $base_path;?>/index.php">Home</a></li>
      <li><a id="manage_appointments" href="<?php echo $base_path;?>/appointments?manage_appointments">My Appointments</a></a></li>
      <li><a id="manage_gallary "href="<?php echo $base_path;?>/photos?manage_gallery">My Photos</a></a></li>
    </ul>
       <ul class="nav navbar-nav navbar-right">
          <li><a id="logout" href="<?php echo $base_path;?>/users?logout">Logout</a></a></li>
      </ul>
  </div>
</nav>
        
         

         <?php };
        ?>
        
        
        
        
        
        
        
         
        
        
        
        
        
        
        

 
    </body>
   
    </script>
</html>
