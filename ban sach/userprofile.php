<?php
  session_start();
  $count = 0;
  // connecto database
  require_once "./functions/database_functions.php";
  $conn = db_connect();
 $username = $_SESSION['username'];
  $query = "SELECT * FROM users where username ='$username' ";
  $result = mysqli_query($conn, $query);
 
 if (isset($_POST['submit'])) {
  $file = $_FILES['image']['name'];
$file_loc = $_FILES['image']['tmp_name'];
$folder="./img/"; 
$new_file_name = strtolower($file);
$final_file=str_replace(' ','-',$new_file_name);

if(move_uploaded_file($file_loc,$folder.$final_file))
  {
    $image=$final_file;
    }
    $sql1 = "UPDATE users SET image='$image' WHERE username='$username'";
    $result1 = mysqli_query($conn, $sql1);
    if ($result1 ) {
       header('location: userprofile.php');
    }

  }

  if (isset($_POST['submit2'])) {
  $username2 = $_POST['username2'];
  $email = $_POST['email'];
    $sql2 = "UPDATE users SET username='$username2', email='$email' WHERE username='$username'";
    $result2 = mysqli_query($conn, $sql2);
    if ($result2 ) {
        session_destroy();
      echo '<script>alert("Cập nhật thành công, vui lòng đăng nhập lại !")
window.location.assign("http://localhost/bansach/user_login.php");
      </script>';
    }

  }

  $title = "Cài đặt tài khoản";
  require_once "./template/header.php";
?>
<style type="text/css">
  body{
    background: #1b1c1d;
  }
</style>
<script type="text/javascript">
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
</script>


 <div class="ui mini blue modal" >
  <div class="ui center aligned icon header"><i class="circular cart icon"></i>
  Đã thêm vào giỏ hàng !</i></div>
</div>

<div class="ui segment" style="margin-top:30px;background: #2185d0;">
  <h1 class="ui center aligned header" style="margin-top: 40px;color: white;font-size: 3.5ch;">Cài đặt tài khoản</h1>
  <div class="ui two column stackable grid" style="margin-top: 10px;">
    <div class="column">
      <div class="ui center aligned container" >
        <div class="ui white segment">
        <h2 class="ui center aligned header" >Avatar</h2>
        <form  class="ui form" method="POST" onsubmit="return validate()" enctype="multipart/form-data" name="regform">
        <?php while($anh = mysqli_fetch_assoc($result)){ ?>
          <div class="col-md-3">
              <img style="width:150px; border-radius:50%; margin:10px;" src="img/<?php echo $anh['image']; ?>">
            <h4 class="ui center aligned header" >Chọn avatar khác</h4><input class="ui button" type="file" name="image" >
            <script>document.image.submit();</script>
          </div><br>
          <center><input class="ui black button" type="submit" name="submit" value="Cập nhật ảnh đại diện"></input></center>
      </form>
    </div>
      </div>
    </div>
    <div class="column">
      <div class="ui inverted segment">
         <h2 class="ui center aligned header">Thông tin tài khoản</h2>
<form class="ui form" method="POST" enctype="multipart/form-data" >
  <div class="field">
    <h4 class="ui header" style="color: white;">Tên tài khoản</h4>
    <input  class="ui input focus" type="text" name="username2" value="<?php echo $_SESSION[username] ?>" required>
  </div>
  <div class="field">
    <h4 class="ui header" style="color: white;">Email</h4>
    <input  class="ui input focus" type="email" name="email" value="<?php echo $anh['email'] ?>" required>
  </div><br>
  <center><input class="ui blue button" type="submit" name="submit2" value="Cập nhật thông tin"></input></center>

</form>
</div>
 <?php
          
          } ?> 
    </div>
  </div>

</div>


 
  
  
<?php
    
  if(isset($conn)) { mysqli_close($conn); }
  require_once "./template/footer.php";
?>