
<?php 
if (!isset($_SESSION['user_first_name'])) {
  echo '<script>
    setTimeout(() => {
      window.location.assign("http://localhost/bansach/template/welcome.php")
    ;
    }, 0 );
    
    
    
</script>';
}
?>
<?php

//index.php

//Include Configuration File
include('user/view/google-login/config.php');

$login_button = '';

if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];
  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}

if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'" id="login" ></a>';
 
}

?>

<?php
$count = 0;

  // connecto database
  
  
  $title = "VKUBook - Website bán sách chuyên về lập trình lớn nhất Miền Trung - Tây Nguyên" ;
  require_once "./template/header.php";
  require_once "./template/main.php";
  require_once "./functions/database_functions.php";
?>


<?php
 
 if($login_button == '')
   {
  	echo '<script>
    setTimeout(() => {
      window.location.assign("http://localhost:7882/doancoso2/template/welcome.php")
    ;
    }, 0 );
    
    
    
</script>';


  include('template/footer.php');
   }
   else {
       header("Location: http://localhost:7882/doancoso2/user_login.php");
   }

   ?>
