<?php
     require_once "./functions/database_functions.php";
     $conn = db_connect();
     error_reporting(0);
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="template/css/index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="app.js"></script>
    <style>

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

</style>
</head>



<div class="ui inverted large top fixed hidden menu" id="menu1">
  <div class="ui container">
   <a class="item" href="index.php"><img class="ui mini rounded image" src="data:image/png;base64,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"></a>
    <a class="item" href="publisher_list.php"><i class="address book outline icon" ></i>Nhà xuất bản</a>
    <a class="item" href="books.php"><i class="book icon" ></i>Kho sách</a>
    <a class="item" href="contact.php"><i class="envelope outline icon" ></i>Liên hệ</a>
    <?php
         error_reporting(0);
    if (isset($_SESSION['username'])) {
        echo '<a class="item" href="cart.php"><i class="cart plus icon" ></i>Giỏ hàng</a>';
    } 
    else  if (isset($_SESSION['user_first_name'])) {
        echo '<a class="item" href="cart.php"><i class="cart plus icon" ></i>Giỏ hàng</a>';
    } 
    else {
        echo '<a class="item" href="user_login.php"><i class="cart plus icon" ></i>Giỏ hàng</a>';
    }
    ?>
    <div class="right menu">
    <?php
         error_reporting(0);
 if (isset($_SESSION['username'])) {
  echo '    <div class="item">
  <div class="dropdown">
  <a href="#"> <img class="ui avatar image" src="https://secure.gravatar.com/avatar/0078cb19fe3881dab34b23ede78af81c/?s=48&d=https://images.binaryfortress.com/General/UnknownUser1024.png"   /></a>
<div class="dropdown-content">
  <a> '.$_SESSION["username"].'</a>
  <a href="#">Cài đặt tài khoản</a>
</div>
</div>
</div>';

 }

else if (isset($_SESSION['user_first_name'])) {
    echo '<div class="item">
    <div class="dropdown">
    <a href="#"> <img class="ui avatar image" src="'.$_SESSION["user_image"].'"  /></a>
  <div class="dropdown-content">
    <a> '.$_SESSION['user_first_name'].''.$_SESSION["user_last_name"].'</a>
    <a href="#">Cài đặt tài khoản</a>
  </div>
</div>
    </div>';
}

 ?>
      <div class="item">
      <?php
           error_reporting(0);
 if (isset($_SESSION['username'])) {
    echo " <a class='ui red inverted button' href='user/view/common/user_logout.php'><i class='sign-out icon'></i>Đăng xuất</a>";
 }
else if (isset($_SESSION['user_first_name'])) { 
  echo '  <a class="ui red inverted button" href="user/view/google-login/logout.php"><i class="sign-out icon"></i>Đăng xuất</a>';
}
 else {
    echo " <a class='ui inverted primary button' href='user_login.php'><i class='user outline icon'></i>Đăng nhập</a>";
 }
 ?>
       
      </div>
    </div>
  </div>
</div>



  <div class="w3-sidebar w3-bar-block w3-xlarge" id="menu2">
      <?php 
           error_reporting(0);
      if (isset($_SESSION['username'])) {
echo '<a href="#" class="w3-bar-item w3-button"> <img src="https://secure.gravatar.com/avatar/0078cb19fe3881dab34b23ede78af81c/?s=48&d=https://images.binaryfortress.com/General/UnknownUser1024.png" style="width:26px;border-radius:30px;"  /> 
<h6 style="font-size:11px">'.$_SESSION['username'].'</h6></a> ';
      }
   else if (isset($_SESSION['user_first_name'])) {
echo '<a href="#" class="w3-bar-item w3-button"> <img src="'.$_SESSION["user_image"].'" style="width:26px;border-radius:30px;border: 1.5px solid white;"  /> 
<h6 style="font-size:11px">'.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h6></a> ';
   } 
   else {
       echo '<img class="ui tiny image" src="data:image/png;base64,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" /> ';
   }  

      ?>

  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-home"><br><h6 style="font-size:11px">Trang chủ</h6></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-search"><br><h6 style="font-size:11px">Tìm kiếm</h6></i></a>
  <?php 
       error_reporting(0);
      if (isset($_SESSION['username'])) { 
          echo '<a href="user/view/common/user_logout.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out"><br><h6 style="font-size:11px">Đăng xuất</h6></i></a> ';
      }
      else  if (isset($_SESSION['user_first_name'])) {
          echo ' <a href="user/view/google-login/logout.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out"><br><h6 style="font-size:11px">Đăng xuất</h6></i></a> ';
      } 
      
      else {
          echo '<a href="user_login.php" class="w3-bar-item w3-button"><i class="fa fa-sign-in"><h6 style="font-size:11px">Đăng nhập</h6></i></a> ';
      }
      ?>
  
</div>

</html>