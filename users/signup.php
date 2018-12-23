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
        
        <h1>Create an account</h1>
        
        
        
        
    </div>
                <div class="form-group">
                    <form method="POST" action="index.php">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" class="form-control">
                    
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control">
                    
                    <label for="email">Email Address</label>
                    <input type="text" name="email" id="email" class="form-control">
                    
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control">
                    
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="form-control">
                    
                    <label for="type"></label>
                    <input type="hidden" name="type" id="type" value="User" class="form-control">
                    
                    
                    
                    <br>
                    
                    
                    <div class="text-center">
                    <button class="btn-primary" type="submit" name="create">Create an Account</button>
                    
                    
                    
                    
                    </div>
                    
                    </form>
                    
                    
                    
                   
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div>             
                
            </div>
</div>
    </body>
</html>
 