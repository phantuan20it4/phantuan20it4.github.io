<?php
	session_start();
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$query = "SELECT * FROM publisher ORDER BY publisherid";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	if(mysqli_num_rows($result) == 0){
		echo "Empty publisher ! Something wrong! check again";
		exit;
	}

	$title = "Danh sách tác giả";
	require "./template/header.php";
?>

<style type="text/css">
	body{
		background: #D6EBE3;
	}
</style>
<div class="ui container" style="margin-top:100px">

<div class="ui three cards" >

<?php 
		while($row = mysqli_fetch_assoc($result)){
			$count = 0; 
			$query = "SELECT publisherid FROM books";
			$result2 = mysqli_query($conn, $query);
			if(!$result2){
				echo "Can't retrieve data " . mysqli_error($conn);
				exit;
			}
			while ($pubInBook = mysqli_fetch_assoc($result2)){
				if($pubInBook['publisherid'] == $row['publisherid']){
					$count++;
				}
			}
	?>
<style type="text/css">
	.card:hover{
		transform: scale(1.2);
		z-index: 1;
	}
</style>

  <div class="card" style="transition: 0.6s;">
    <div class="content">
      <div class="header"><?php echo $row['publisher_name']; ?></div>
      <div class="meta"><a href="bookPerPub.php?pubid=<?php echo $row['publisherid']; ?>">Xem thêm</a></div>

    </div>
  </div>
<?php } ?>

</div>
		</div>
	

</div>
<div style="height:100px;"></div>
<?php
	mysqli_close($conn);
	require "./template/footer.php";
?>