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
                    <h1>Manage Appointments</h1>
            
                </div>
        </div><br>
    </div>


                   <table width="100%" border="1">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date</th>
        <th>Time</th>
        <th>Location</th>     
    </tr>
<?php
foreach($viewbookings as $v)
{
    
    $firstname = $v['firstname'];
    $lastname = $v['lastname'];
    $date = $v['date'];
    $time = $v['time'];
    $location = $v['location'];
    
    
    echo "<tr>
        <td>$firstname</td>
        <td>$lastname</td>
        <td>$date</td>
        <td>$time</td>
        <td>$location</td>
        
    </tr>";
}
?>
</table>
       
 </div>

            
            
            
            
            
            
            
            
            
            
         
    </body>
</html>
 