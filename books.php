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
  <h1 class="ui center aligned header" style="margin-top: 100px;">Full Catalogs of Books</h1>
    <div class="ui center aligned grid bg-success bg-opacity-10">
    <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>
        <?php while($query_row = mysqli_fetch_assoc($result)){ ?>
          <div class="shadow bg-light" style="width: 300px; margin: 10px">
            <a href="book.php?bookisbn=<?php echo $query_row['book_isbn']; ?>">
              <img class="ui image" style="height: 400px;width: 300px;padding: 30px" src="template/thuvien/img/<?php echo $query_row['book_image']; ?>">
            </a>
            <div class="center"><h6 class="start-50"><?php echo $query_row['book_title'] ?></h6></div>
            
          </div>
            
        <?php
          } ?> 
        </div>

<?php
      }
  if(isset($conn)) { mysqli_close($conn); }
  require_once "./template/footer.php";
?>