<?php include '../view/header.php'?>
<html>
    <head>

        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="col-md-12">
                <div class="text-center">
                    <h1>My Photos</h1>
            
                    
           
            
            <?php
  // Create database connection
//  $db = mysqli_connect("localhost", "root", "", "photosite");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
//  if (isset($_POST['upload'])) {
//  	// Get image name
//  	$image = $_FILES['image']['name'];
//  	// Get text
//  	$user_id = mysqli_real_escape_string($db, $_POST['user_id']);
//
//  	// image file directory 
//  	$target = "images/".basename($image);
//
//  	$sql = "INSERT INTO images (image, user_id) VALUES ('$image', '$user_id')";
//  	// execute query
//  	mysqli_query($db, $sql);
//
//  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
//  		$msg = "Image uploaded successfully";
//  	}else{
//  		$msg = "Failed to upload image";
//  	}
//  }
//  $result = mysqli_query($db, "SELECT * FROM images");
//?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 100%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 100%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 100%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 80%;
   	height: 80%;
   }
</style>
</head>
<script>
    
$(document).ready(function(){
       
   $.getJSON('../photos?users',function(data){

       for(var i = 0; i < data.length; i++){
           //make an option
           var the_option = '<option value ="'+data[i]['user_id']+ '">'+data[i] ['firstname']+ ' '+data[i] ['lastname']+'</option';
           // put it in the tag
           var fullName = '<a value ="'+data[i]['user_id']+ '">'+data[i] ['firstname']+ ' '+data[i] ['lastname']+'</a';
           $('#user_id').append(the_option);
           $('#name').append(fullName);





       }
   });
   });
   </script>

<body>

  <form method="POST" action="index.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
        <div class="text-center">
  	  <input type="file" name="image">
  	</div>
  	<div>
       <label for="user_id">Client Name</label>
       <select class="form-control" id="user_id"  name='user_id'>
            <option value=''>Please choose</option>
           <!--<option value='1'>Alabama</option>-->
       </select>
           
             
            
  	</div>
  	
            <button class="btn btn-primary" type="submit" name="upload">Upload</button>
  	</div>
         </div>
            </div>
</div>
  </form>
<div id="content">
                       <table width="100%" border="1">
    <tr>
        <th>Photos</th>
        <th>Client Name</th>
       
     
      
    </tr>
<?php
foreach($photos as $p)
{
    
//    $user_id = $p['user_id'];
    $image = $p['image'];
    $firstname = $p['firstname'];
    $lastname = $p['lastname'];
    
    echo "<tr>"
    . "<td><img src='images/$image'</td>"; 
//    echo "<td>$user_id</td>"; 
    echo "<td>$firstname $lastname</td>";
    
    
   " </tr>";
    
}
?>
  
</table>
</div>
    

    
    
    
    
    
    
    
    
    
    
    
    
    <?php
//    while ($row = mysqli_fetch_array($photo)) {
//      echo "<div id='img_div'>";
//      	echo "<img src='images/".$row['image']."' >";
//      	echo "<p>".$row['user_id']."</p>";
//      echo "</div>";
//    }
//  ?>
</div>
</body>
</html>
            
            
            
            
            
            
            
            
            
            
            
            
            
    </body>
</html>
 