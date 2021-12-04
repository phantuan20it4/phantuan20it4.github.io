<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "VKUBook - Website bán sách chuyên về lập trình lớn nhất Miền Trung - Tây Nguyên";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
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
</head>
<body>
<div class="se-pre-con"></div>
<div class="w3-main">

<div class="ui inverted vertical masthead center aligned segment" style=" background:linear-gradient(rgba(55,55,55,0.3), rgba(55,55,55,0.3)), url(https://noithatdn.vn/wp-content/uploads/2020/10/ke-sach-treo-tuong-trong-phong-ngu-12.png);"  id="welcome" >
<div class="ui text container" >
  <h1 class="ui inverted header" data-san="slideLeft">
     Book Store 
  </h1>
  <h2 data-san="slideLeft">Nơi lưu trữ sách lớn nhất khu vực miền Trung - Tây Nguyên </h2>
  <div  data-san="slideRight" data-san-delay="400"><button type="button" class="ui big primary button">Tìm hiểu thêm </button></div>


</div>

</div>




  <div style="height:50px" ></div>
<h1 class="ui center aligned header" id="smn" data-san="slideRight" data-san-delay="200" >Sách mới nhất</h1>
 <!-- Example row of columns -->
 <div class="ui center aligned grid" id="books" style="margin-top: 20px;">
        <?php foreach($row as $book) { ?>

          <div class="box-item-slide">
          <img class="ui normal image" src="template/thuvien/img/<?php echo $book['book_image']; ?>" data-san="slideTop" >
    <span class="item-slide03 item-slide">	<a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>"><input class="ui blue button" type="button" value="Xem chi tiết"></input></a></span>
</div>
        <?php } ?>
      </div>

  

</div>


<div class="wrapper" id="slideshow" style="margin-top: 60px;">
<div class="slideshows">
  <div class="slideshow slideshow--hero">
    <div class="slides">
      <div class="slide slide1"></div>
      <div class="slide slide2"></div>
      <div class="slide slide3"></div>
    </div>
  </div>
  <div class="slideshow slideshow--contrast slideshow--contrast--before">
    <div class="slides">
      <div class="slide slide1"></div>
      <div class="slide slide2"></div>
      <div class="slide slide3"></div>
    </div>
  </div>
  <div class="slideshow slideshow--contrast slideshow--contrast--after">
    <div class="slides">
      <div class="slide slide1"></div>
      <div class="slide slide2"></div>
      <div class="slide slide3"></div>
    </div>
  </div>
</div>
  </div>
        </body>
<script src="./template/thuvien/js/scroll-animation.js"></script>

</html>


<script>

$("button").click(function() {
    $('html,body').animate({
        scrollTop: $("#slideshow").offset().top},
        'normal');
});


</script>


