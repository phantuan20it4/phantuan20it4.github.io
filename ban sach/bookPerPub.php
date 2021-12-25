<?php
	session_start();
	require_once "./functions/database_functions.php";
	// get pubid
	if(isset($_GET['pubid'])){
		$pubid = $_GET['pubid'];
	} else {
		echo "Wrong query! Check again!";
		exit;
	}

	// connect database
	$conn = db_connect();
	$pubName = getPubName($conn, $pubid);

	$query = "SELECT book_isbn, book_title, book_image FROM books WHERE publisherid = '$pubid'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	if(mysqli_num_rows($result) == 0){
		echo "Empty books ! Please wait until new books coming!";
		exit;
	}

	$title = "Books Per Publisher";
	require "./template/header.php";
?>

<center>
<div class="ui three column grid" style="margin-top: 100px;">

	<?php while($row = mysqli_fetch_assoc($result)){
?>
  <div class="column">
    <div class="ui fluid card" style="width: 200px;">
      <div class="image">
        <img style="height: 300px" src="template/thuvien/img/<?php echo $row['book_image']; ?>">
      </div>
      <div class="content">
        <a class="header" href="book.php?bookisbn=<?php echo $row['book_isbn']; ?>"><?php echo $row['book_title'];?></a>
      </div>
    </div>
  </div>
<?php
	}
?>

</div>
</center>

<?php if(isset($conn)) { mysqli_close($conn);}
	require "./template/footer.php"; ?>