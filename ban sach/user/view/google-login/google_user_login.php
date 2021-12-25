

<?php


//index.php

//Include Configuration File
include('config.php');

$login_button = '';

 $login_button = '<a href="'.$google_client->createAuthUrl().'" id="login" ></a>';
 
?>
<html>
 <head>
     <style>
<?php   
//include("template/css/style.css")
?></style>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 </head>    
 <body>
<?php
   if($login_button == '')
   {
   

$file = file_get_contents('google_index.php');
    echo '   '.$file.'';
   }
   else
   {
    echo '<div hidden>'.$login_button . '</div>
 
    ';
   
    
   }
   ?>

  
   
 </body>
</html>