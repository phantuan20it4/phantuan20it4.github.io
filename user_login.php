
<?php 

require_once "./functions/database_functions.php";
$conn = db_connect();
session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: user_index.php");
}
if (isset($_SESSION['user_first_name'])) {
  header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		echo '<script>
    setTimeout(() => {
      window.location.assign("http://localhost/bansach/template/welcome.php")
    ;
    }, 0 );
    
    
    
</script>';
	} else {
		echo "<script>alert('Tên tài khoản hoặc mật khẩu bị sai !')</script>";
	}
}

?>


<?php 

require_once "./functions/database_functions.php";
$conn = db_connect();
	
error_reporting(0);

session_start();

if (isset($_SESSION['username2'])) {
    header("Location: user_login.php");
}

if (isset($_POST['submit2'])) {
	$username2 = $_POST['username2'];
	$email2 = $_POST['email2'];
	$password2 = md5($_POST['password2']);
	$cpassword = md5($_POST['cpassword']);

$file = $_FILES['image']['name'];
$file_loc = $_FILES['image']['tmp_name'];
$folder="./img/"; 
$new_file_name = strtolower($file);
$final_file=str_replace(' ','-',$new_file_name);

if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$image=$final_file;
    }
	if ( $password2 == $cpassword ) {
		$sql = "SELECT * FROM users WHERE email='$email2'";
		$result = mysqli_query($conn, $sql);
		if ($result->num_rows > 0) {
			echo "<script>alert('Woops! Tài khoản email đã tồn tại')</script>";
		} else {
      $sql = "INSERT INTO users (username, email, password, image)
          VALUES ('$username2', '$email2', '$password2', '$image')";
  $result = mysqli_query($conn, $sql);
      if ($result) {
        echo "<script>alert('Chúc mừng ! Bạn đã đăng ký thành công.')</script>";
        $username2 = "";
        $email2 = "";
        $_POST['password'] = "";
        $_POST['cpassword'] = "";
      } else {
        echo "<script>alert('Woops! Có gì đó sai sai ')</script>";
      }
		}
		
	} else {
		echo "<script>alert('Mật khẩu không khớp !.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <style>
<?php 
include("template/css/login.css")
?>
     </style>

    <title>Đăng nhập</title>
  </head>
  <body>
  <script>
function validate()
        {
            var extensions = new Array("jpg","jpeg");
            var image_file = document.regform.image.value;
            var image_length = document.regform.image.value.length;
            var pos = image_file.lastIndexOf('.') + 1;
            var ext = image_file.substring(pos, image_length);
            var final_ext = ext.toLowerCase();
            for (i = 0; i < extensions.length; i++)
            {
                if(extensions[i] == final_ext)
                {
                return true;
                
                }
            }
            alert("Image Extension Not Valid (Use Jpg,jpeg)");
            return false;
        };

	  window.fbAsyncInit = function() {
		FB.init({
		  appId      : '356863962577029',
		  cookie     : true,
		  xfbml      : true,
		  version    : 'v11.0'
		});
		FB.AppEvents.logPageView();   
	  };

	  (function(d, s, id){
		 var js, fjs = d.getElementsByTagName(s)[0];
		 if (d.getElementById(id)) {return;}
		 js = d.createElement(s); js.id = id;
		 js.src = "https://connect.facebook.net/en_US/sdk.js";
		 fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	   
	   function fbLogin(){
			FB.login(function(response){
				if(response.authResponse){
					fbAfterLogin();
				}
			});
	   }
	   
	   function fbAfterLogin(){
		FB.getLoginStatus(function(response) {
			if (response.status === 'connected') {   // Lo
				FB.api('/me', function(response) {
				  jQuery.ajax({
					url:'./view/fb-login/check_login.php',
					type:'post',
					data:'name='+response.name+'&id='+response.id,
					success:function(result){
						window.location.href='fb-index.php';
					}
				  });
          
				});
			}
		});
	   }
</script>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form" method="POST">
            <h2 class="title">Đăng nhập</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Tên tài khoản" name="username" value="<?php echo $username; ?>" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Mật khẩu" name="password" value="<?php echo $_POST['password']; ?>" required/>
            </div>
            <!--input type="submit" value="Đăng nhập" class="btn solid" name="submit" /-->
            <button class="pulse" name="submit" type="submit">Đăng nhập</button>
           
          </form>
          <form action="#" class="sign-up-form" method="POST" onsubmit="return validate()" enctype="multipart/form-data" name="regform" >
            <h2 class="title">Đăng ký tài khoản VKUBook</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Tên tài khoản" name="username2" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email2" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="password" placeholder="Mật khẩu" name="password2" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Nhập lại mật khẩu" name="cpassword" required/>
            </div>
            <span><label class="ui small header">Chon avatar </label><input type="file" name="image" required></span>
            <input type="submit" class="btn" value="Đăng ký" name="submit2" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel" >
          <div class="content">
            <h3>Chưa có tài khoản ?</h3>
            <p>
            
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Đăng ký
            </button><br><br>
            <a href="index.php">  <button class="btn transparent" >
             Trang chủ
            </button>
          </a>
          </div>
          <img src="template/thuvien/img/vkubook.png" class="image" alt=""  />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Đã đăng ký ?</h3>
            <p>
             
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Đăng nhập
            </button><br><br>
            <a href="index.php">  <button class="btn transparent" >
             Trang chủ
            </button>
          </a>
          </div>
          <img src="template/thuvien/img/vkubook.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="view/login/app.js"></script>
    <script src="app.js"></script>
  </body>
</html>