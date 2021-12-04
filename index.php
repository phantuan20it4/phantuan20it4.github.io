<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "VKUBook - Website bán sách chuyên về lập trình lớn nhất Miền Trung - Tây Nguyên";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  require_once "./template/main.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./template/thuvien/css/scroll-animation.css">
  <link rel="stylesheet" type="text/css" href="./template/css/index.css">
</head>
<body>
  
  

<script src="./template/thuvien/js/scroll-animation.js"></script>
</body>
</html>

      




     
<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>
