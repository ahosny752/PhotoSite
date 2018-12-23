<?php include '../view/header.php'?>
<html>
    <head>

        <meta charset="UTF-8">
        <title></title>
    </head>
    
    <body>
        <!--<div class="container">-->
            <!--<div class="col-md-12">-->
                <div class="text-center">
                    <h1>Gallery</h1>
            
            <?php foreach($photos as $p): ?>
            <!--<div class="col-md-4">-->
           
                <img  style="width: 100%" src="images/<?php echo $p['image'];?>" alt="home">
             </div>
        </div></div>
        <?php endforeach;?>
        
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            </div>
            </div>
</div>
    </body>
</html>
 