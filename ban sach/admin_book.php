<?php
	session_start();
	require_once "./functions/admin.php";
	$title = "List book";
	require_once "./template/header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result = getAll($conn);
	if (isset($_SESSION['username'])) {
		header("Location: admin_book.php");
	  }
?>
<center><a class="ui primary button" style="margin-top: 100px;" href="admin_add.php">Thêm sách mới</a></center>
	<table class ="ui table" style="margin-top: 20px; border:1px solid black">
		<tr>
			<th>Tên sách</th>
			<th>Tác giả</th>
			<th>Hình ảnh</th>
			<th>Mô tả</th>
			<th>Giá tiền</th>
			<th>Nhà xuất bản</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
			<tbody>
			
		<tr>
		
			<td style="border:1px solid black"><?php echo $row['book_title']; ?></td>
			<td style="border:1px solid black"><?php echo $row['book_author']; ?></td>
			<td style="border:1px solid black"><img style="height:100px; width: 70px"; class="img-responsive img-thumbnail" src="template/thuvien/img/<?php echo $row['book_image']; ?>"> </td>
			<td style="border:1px solid black"><?php echo $row['book_descr']; ?></td>
			<td style="border:1px solid black"><?php echo $row['book_price']; ?></td>
			<td style="border:1px solid black"><?php echo getPubName($conn, $row['publisherid']); ?></td>
			<td style="border:1px solid black"><a class="ui button red" href="admin_edit.php?bookisbn=<?php echo $row['book_isbn']; ?>">Sửa</a></td>
			<td style="border:1px solid black"><a class="ui button red" href="admin_delete.php?bookisbn=<?php echo $row['book_isbn']; ?>">Xóa</a></td>
		</tr>
		</tbody>
		<?php } ?>
	</table>

<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>