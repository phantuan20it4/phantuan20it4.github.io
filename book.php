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
      <!-- Example row of columns -->
      <p class="lead" style="margin: 25px 0" ><a href="books.php">Kho sách</a> > <?php echo $row['book_title']; ?></p>
      <div class="row">
        <div class="col-md-3 text-center">
          <img class="img-responsive img-thumbnail" src="template/thuvien/img/<?php echo $row['book_image']; ?>">
          <div>
            <figure class="text-center">
              <blockquote class="blockquote">
                <p><?php echo $row['book_title']; ?></p>
              </blockquote>
              <figcaption class="blockquote-footer">
                <?php echo($row['book_price'])  ?><cite title="Source Title">vnđ</cite>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-md-6 bg-light">
          <h4>Mô tả</h4>
          <p><?php echo $row['book_descr']; ?></p>
          <h4>Chi tiết sách</h4>
          <table class="table">
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
            echo  '<input type="submit" value="Thanh toán / Thêm vào giỏ hàng" name="cart" style="width:230px" class="btn btn-success">';
            } 
            else{
              echo '<a href="user_login.php"><input value="Thanh toán / Thêm vào giỏ hàng" style="width:260px"  class="ui primary button"></a>';
            }
            ?>
          </form>
       	</div>
      </div>
<?php
  require "./template/footer.php";
?>
