<?php
  session_start();
  $count = 0;
  // connecto database
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $query = "SELECT book_isbn, book_image, book_title FROM books";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }


  $title = "Kho sách";
  require_once "./template/header.php";
?>
<style>
  body{background:#E6F4EA;}
#card:hover{
  transform: scale(1.1);
    box-shadow: 0 10px 16px 0 rgba(0,0,0,0.6);
}
</style>
  <h1 class="ui center aligned header" style="margin-top: 100px;">Tất cả sách</h1>
    <div class="ui center aligned grid bg-success bg-opacity-10">
    <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>
        <?php while($query_row = mysqli_fetch_assoc($result)){ ?>
          <div id="card" class="shadow bg-light" style="width: 300px; margin: 10px; background: white;transition: 0.6s;">
            <a href="book.php?bookisbn=<?php echo $query_row['book_isbn']; ?>">
              <img class="ui image" style="height: 400px;width: 300px;padding: 15px;" src="template/thuvien/img/<?php echo $query_row['book_image']; ?>">
            </a>
            <div class="center"><h6 style="text-align:center; font-weight:bold; font-size:20px;" class="start-50"><?php echo $query_row['book_title'] ?></h6></div>
            
          </div>
            
        <?php
          } ?> 
        </div>

<?php
      }
  if(isset($conn)) { mysqli_close($conn); }
  require_once "./template/footer.php";
?>