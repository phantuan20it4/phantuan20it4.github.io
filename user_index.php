
<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>

<?php
  $count = 0;
  // connecto database
  $title = "VKUBook - Website bán sách chuyên về lập trình lớn nhất Miền Trung - Tây Nguyên" ;
  require_once "./template/header.php";
  require_once "./template/main.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
  
?>




      

<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>


