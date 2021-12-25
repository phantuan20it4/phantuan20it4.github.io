<?php
  session_start();
  $book_isbn = $_GET['bookisbn'];
  // connecto database
  require_once "./functions/database_functions.php";
  $conn = db_connect();

  $query = "SELECT * FROM books WHERE book_isbn = '$book_isbn'";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $row = mysqli_fetch_assoc($result);
  if(!$row){
    echo "Empty book";
    exit;
  }
  $title = $row['book_title'];
  $route = "chitietsach";
  
  require "./template/header.php";

?>





  <style type="text/css">
    body{
      font-family: Lato,'Helvetica Neue',Arial,Helvetica,sans-serif;
    }
  </style>

<div class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    Profile Picture
  </div>
  <div class="image content">
    <div class="ui medium image">
      <img src="/images/avatar/large/chris.jpg">
    </div>
    <div class="description">
      <div class="ui header">We've auto-chosen a profile image for you.</div>
      <p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
      <p>Is it okay to use this photo?</p>
    </div>
  </div>
  <div class="actions">
    <div class="ui black deny button">
      Nope
    </div>
    <div class="ui positive right labeled icon button">
      Yep, that's me
      <i class="checkmark icon"></i>
    </div>
  </div>
</div>


<div class="ui segment" style="margin-top:100px">
  <div class="ui two column very relaxed grid">
    <div class="column" style="width: 20%;">
      <center style="margin-left: 60px" ><img id="img" style="height: 280px;width: 200px;z-index: 1;transition: transform 0.5s"  src="template/thuvien/img/<?php echo $row['book_image']; ?>">

    <h3><b><?php echo $row['book_title']; ?></b></h3>
      </center>
    </div>


<style type="text/css">
  #img:hover{
    transform: scale(1.3);
  }
</style>
    <div class="column" style="width: 60%; margin-left:50px;">
     
 <h4><b>Mô tả</b></h4>
          <p><?php echo $row['book_descr']; ?></p>
          <h4><b>Chi tiết sách</b></h4>
          <table class="ui table">
            <?php foreach($row as $key => $value){
              if($key == "book_descr" || $key == "book_image" || $key == "publisherid" || $key == "book_title"){
                continue;
              }
              switch($key){
                case "book_isbn":
                  $key = "ISBN";
                  break;
                case "book_title":
                  $key = "Tiêu đề";
                  break;
                case "book_author":
                  $key = "Tác giả";
                  break;
                case "book_price":
                  $key = "Giá";
                  break;
              }
            ?>
            <tr>
              <td><?php echo $key; ?></td>
              <td><?php echo $value; ?></td>
            </tr>
            <?php 
              } 
              if(isset($conn)) {mysqli_close($conn); }
            ?>
          </table>
          <form method="post" action="cart.php?action=code=<?php echo $book_isbn; ?>">
            <input type="hidden" name="bookisbn" value="<?php echo $book_isbn;?>">
            <?php
            if (isset($_SESSION['username']) || isset($_SESSION['user_first_name'])) {
            echo  '<input type="submit" value="Thanh toán / Thêm vào giỏ hàng" name="cart" style="width:260px" class="ui blue button">';
            } 
            else{
              echo '<a href="user_login.php"><input value="Thanh toán / Thêm vào giỏ hàng" style="width:260px"  class="ui primary button"></a>';
            }
            ?>
          </form>

<div class="ui comments">
  <h3 class="ui dividing header">Bình luận</h3>
  <?php 
$conn = db_connect();
      $binhluan = mysqli_query($conn, "SELECT * FROM comments where book_id='$book_isbn' ");
foreach ($binhluan as $bl) { 
  $userid=$bl['user_id'];
$user = mysqli_query($conn, "SELECT * FROM users where id='$userid' ");
 foreach ($user as $us) {

  ?>
  <div class="comment" >
    <a class="avatar">
      <img src="img/<?php echo $us['image']; ?>">
    </a>
    <div class="content">
      <a class="author">

        <?php echo $us['username'] ?></a>
      <div class="metadata">
      </div>
      <div class="text">
        <?php echo $bl['content'] ?>
      </div>

 <div class="comments" >

 <?php 
$conn = db_connect();
      $traloibinhluan = mysqli_query($conn, "SELECT * FROM reply_comments where book_id='$book_isbn' ");
foreach ($traloibinhluan as $tlbl) { 
  $userid=$tlbl['reply_user_id'];
$user = mysqli_query($conn, "SELECT * FROM users where id='$userid' ");
 foreach ($user as $us) {
if($tlbl['comment_id'] == $bl['comment_id']){
  ?>

      <div class="comment" >
        <a class="avatar">
          <img src="img/<?php echo $us["image"] ?>">
        </a>
        <div class="content">
          <a class="author"><?php echo $us['username'] ?></a>
          <div class="text">
         <?php echo $tlbl['content'] ?>
          </div>
        </div>
      </div>
<?php 
}
}} ?>

    </div>


      <form method="POST" action="book.php?bookisbn=<?=$book_isbn?>" style='margin-top:-15px'>
      
        <?php 
        require_once "./functions/database_functions.php";
$conn = db_connect();
$name = $_SESSION['username'];
        $resultanh = mysqli_query($conn, "SELECT * FROM users where username='$name' ");
while ($anh = mysqli_fetch_array($resultanh)) {

 }?>
         <div class="field">
          <input type="hidden" name="cmid" value="<?php echo $bl['comment_id'] ?>">
        <textarea name="reply_content" style="width: 500px;"></textarea>
         <?php 
       require_once "./functions/database_functions.php";
$conn = db_connect();
      $resultanh = mysqli_query($conn, "SELECT * FROM users where username='$name' ");
while ($anh = mysqli_fetch_array($resultanh)) { ?>
        <input type="hidden" name="reply_user_id" value="<?php echo $anh['id']?>">
      <?php  }?>
      </div>
      <div class="actions">
        <button name="submit2" class="ui deny mini button">Trả lời bình luận</button>
      </div>
      </form>
      
    </div>
  </div>
  <hr>
<?php }} ?>
  <form class="ui reply form" method="POST" action="book.php?bookisbn=<?=$book_isbn?>">
    <div class="field">
      <textarea name="content" required></textarea>
      <?php 
       require_once "./functions/database_functions.php";
$conn = db_connect();
      $resultanh = mysqli_query($conn, "SELECT * FROM users where username='$name' ");
while ($anh = mysqli_fetch_array($resultanh)) { ?>
      <input type="hidden" name="test" value="<?php echo $anh['id']?>">

    <?php } ?>
    </div>
    <?php 
    if (isset($_SESSION['username'])) {
     echo '
     <button name="submit" class="ui blue labeled submit icon button">
      <i class="icon edit"></i> Bình luận
    </button>';
  }
    
    else{
       echo ' <a href="user_login.php" style="margin-top:50px" class="ui blue labeled submit icon button">
      <i class="icon edit"></i> Hãy đăng nhập để tiếp tục bình luận ! 
    </a>';
    }
   ?>
  </form>

<?php
require_once "./functions/database_functions.php";
  $conn = db_connect();
if (isset($_POST['submit'])) {
  $test=$_POST['test'];
  $comment_content =$_POST['content'];
  $query2 = "INSERT INTO comments VALUES ('comment_id','" . $comment_content . "', '" . $book_isbn. "', 
    date,'" . $test . "')";
    $result2 = mysqli_query($conn, $query2);
    if(!$result2){
      echo "Không thể bình luận " . mysqli_error($conn);
      exit;
    } else {
       session_start();
          echo '<script>
 location.href = "book.php?bookisbn='.$book_isbn.'";
  alert("Đã bình luận thành công");
          </script>';
    }

}

else if (isset($_POST['submit2'])) {
  $comment_id=$_POST['cmid'];
  $comment_content =$_POST['reply_content'];
  $reply_user_id=$_POST['reply_user_id'];
  $query3 = "INSERT INTO reply_comments VALUES (reply_comment_id,'".$comment_id."','" . $comment_content . "', '".$reply_user_id."','" . $book_isbn. "')";
    $result3 = mysqli_query($conn, $query3);
    if(!$result3){
      echo "Không thể bình luận " . mysqli_error($conn);
      exit;
    } else {
       session_start();
          echo '<script>
 location.href = "book.php?bookisbn='.$book_isbn.'";
  alert("Đã trả lời bình luận thành công");
          </script>';
    }

}

?>
</div>



    </div>

  </div>
 
</div>

<?php
  require "./template/footer.php";
?>