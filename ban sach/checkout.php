<?php
	// the shopping cart needs sessions, to start one
	/*
		Array of session(
			cart => array (
				book_isbn (get from $_GET['book_isbn']) => number of books
			),
			items => 0,
			total_price => '0.00'
		)
	*/
	$action = filter_input(INPUT_POST,'action');

	session_start();
	require_once "./functions/database_functions.php";
	// print out header here
	$title = "Checking out";
	require "./template/header.php";
$conn = db_connect();
	if (isset($_POST['submit'])) {
		
		// code...
		$ship_name = $_POST['name'];		
		 $ship_address = $_POST['address'];
		 $ship_city = $_POST['city'];
		 $ship_zip_code = $_POST['zip_code'];
		 $ship_country = $_POST['country'];	
		 $total_price =$_SESSION['total_price'];
		 $customerid =$_SESSION['$id'];

		$query = "INSERT INTO orders VALUES 
		('', '" . $customerid . "', '" . $total_price . "', '" . $date . "', '" . $ship_name . "', '" . $ship_address . "', '" . $ship_city . "', '" . $ship_zip_code . "', '" . $ship_country . "')";
		$result = mysqli_query($conn, $query);
		echo "<script>alert('Cảm ơn bạn đã đặt hàng!')</script>";
	}

	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
		
?>

<div  class="ui center aligned container" style="margin-top:100px">

<div style="background-image:url('https://static.vecteezy.com/system/resources/previews/000/575/893/original/white-and-gray-color-polygon-abstract-background-technology-modern-vector-illustration.jpg');width:1400px;margin-left:-130px" class="ui placeholder segment">
  <div class="ui two column very relaxed stackable grid">
    <div class="column">
     <table class="ui table" >
		<tr>
			<th>Ảnh</th> 
			<th>Sản phẩm</th> 
			<th>Giá</th>
	    	<th>Số lượng</th>
	    	<th>Số tiền</th>
	    </tr>
	    	<?php
			    foreach($_SESSION['cart'] as $isbn => $qty){
					$conn = db_connect();
					$book = mysqli_fetch_assoc(getBookByIsbn($conn, $isbn));
			?>
		<tr>
			<td><img style="height:100px; width: 70px; class="img-responsive img-thumbnail" src="template/thuvien/img/<?php echo $book['book_image']; ?>"> </td>
			<td><?php echo $book['book_title'] . " by " . $book['book_author']; ?></td>
			<td><?php echo "đ" . $book['book_price']; ?></td>
			<td><?php echo $qty; ?></td>
			<td><?php echo "đ" . $qty * $book['book_price'];echo "00" ?></td>
		</tr>
		<?php } ?>
		<tr>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			
			<td><?php echo $_SESSION['total_items']; ?></td>
			<td><?php echo "đ" . $_SESSION['total_price']; echo "00" ?></td>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<td>Phí vận chuyển</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>đ20.000</td>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<th>Tổng tiền bao gồm phí vận chuyển </th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th style="border:3px solid black; border-radius:10px;"><?php echo "đ" . ($_SESSION['total_price'] + 20); echo "00" ?></th>
		</tr>
		<tr><td></td></tr>
	</table>
    </div>
    <div class="middle aligned column">
     <form class="ui form" method="post" action="checkout.php" class="form-horizontal">
		<?php if(isset($_SESSION['err']) && $_SESSION['err'] == 1){ ?>
			<p class="text-danger">All fields have to be filled</p>
			<?php } ?>
		<div class="form-group">
			<label for="name" class="control-label col-md-4">Họ và tên</label>
			<div class="col-md-4">
				<input type="text" name="name" class="col-md-4" class="form-control" style="width:400px" required>
			</div>
		</div>
		<div class="form-group">
			<label for="address" class="control-label col-md-4">Số điện thoại</label>
			<div class="col-md-4">
				<input type="text" name="address" class="col-md-4" class="form-control" style="width:400px">
			</div>
		</div>
		<div class="form-group">
			<label for="city" class="control-label col-md-4">Địa chỉ giao hàng</label>
			<div class="col-md-4">
				<input type="text" name="city" class="col-md-4" class="form-control" style="width:400px">
			</div>
		</div>
		<div class="form-group">
			<label for="zip_code" class="control-label col-md-4">Thành phố</label>
			<div class="col-md-4">
				<input type="text" name="zip_code" class="col-md-4" class="form-control" style="width:400px">
			</div>
		</div>
		<div class="form-group">
			<label for="country" class="control-label col-md-4">Email</label>
			<div class="col-md-4">
				<input type="text" name="country" class="col-md-4" class="form-control" style="width:400px">
			</div>
		</div>
		<div>
		<span><a href="cart.php"><input class="ui button" type="button" value="Hủy"></a>
			<a ><input class="ui blue button" type="submit" name="submit" value="Hoàn tất thanh toán"></a></span>
		</div>
		
	</form>
	<p class="lead">Thanh toán nếu bạn muốn xác nhận đơn hàng, hoặc tiếp tục xem sản phẩm để thêm vào giỏ hàng</p>
    </div>
  </div>
  <div class="ui vertical divider">
    Hoặc
  </div>
</div>

	
	
</div>
<?php
	} else {
		echo "<p class=\"text-warning\">Giỏ hàng trống ! Bạn phải thêm sản phẩm vào giỏ hàng để tiếp tục thanh toán !</p>";
		
	}
	if(isset($conn)){ mysqli_close($conn); }
	require_once "./template/footer.php";
?>