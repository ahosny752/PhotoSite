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
        
        <h1>Login</h1>
        
        
        
        
    </div>
    <form style="" action="index.php" method="post" id="form1">
            <div class="form-group" >
                <label for="username">Username</label>
                <input name='username' type="text" class="form-control" placeholder="Username" id="username">
           
                <label for="password" type="hidden">Password</label>
                <input name='password' type="password" class="form-control" placeholder="Password" id="password">
            </div>
            
        <div class="text-center">
               <button type="submit" name="sign-in-user" class="btn btn-primary">Sign in</button> 
       
         </div>
      
                 
                <br>
             </form>   
                 
        </div>
</div>
 
    
        
      

    
 
    

                    

     <div id="message">
                <?php echo $message;?>
            </div> 

    
   

    </body>
</html>
 