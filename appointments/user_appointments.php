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
                     <h1>Book an Appointment</h1>
        
        
        
        
    </div>
    <form style="" action="index.php" method="post" id="form1">
            <div class="form-group" >
                <label for="firstname">First Name</label>
                <input name='firstname' type="text" class="form-control" value="<?php echo $user_info['firstname'];?>" disabled="" id="firstname">
           
                <label for="lastname" type="text">Last Name</label>
                <input name='lastname' type="text" class="form-control" value="<?php echo $user_info['lastname'];?>" disabled="" id="lastname">
                
                <label for="location" type="text">Location</label>
                <input name='location' type="text" class="form-control" id="lastname">
                
                <label for="date" type="text">Date</label>
                <input name='date' type="date" class="form-control" id="date">
                
                 <label for="time" type="text">Time</label>
                 <input name='time' type="text" class="form-control" id="time">
                
                <label for="user_id" ></label>
                <input name='user_id' type="hidden" class="form-control" value="<?php echo $user_info['user_id'];?>" id="user_id">
                
                
                
                
                
                
                
                
                
                
                
            </div>
            
        <div class="text-center">
               <button type="submit" name="book_appointment" class="btn btn-primary">Book Appointment</button> 
       
         </div>
      
                 
                <br>
             </form>   
                 
        </div>
</div>
 
    
        
      

    
 
    

                    


    
   

    </body>
</html>
 