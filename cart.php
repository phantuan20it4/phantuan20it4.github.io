<?php
	// the shopping cart needs sessions, to start one
	/*
		Array of session(
			cart => array (
				book_isbn (get from $_POST['book_isbn']) => number of books
			),
			items => 0,
			total_price => '0.00'
		)
	*/
	session_start();
	require_once "./functions/database_functions.php";
	require_once "./functions/cart_functions.php";

	// book_isbn got from form post method, change this place later.
	if(isset($_POST['bookisbn'])){
		$book_isbn = $_POST['bookisbn'];
		echo "<script >
		function thing(){
		$('.mini.modal')
  .modal('show').click();
;
}
window.onload =thing;
	</script>";
	}
	if(isset($book_isbn)){
		// new iem selected;
	
		if(!isset($_SESSION['cart'])){
			// $_SESSION['cart'] is associative array that bookisbn => qty
			$_SESSION['cart'] = array();

			$_SESSION['total_items'] = 0;
			$_SESSION['total_price'] = '0.00';
		}

		if(!isset($_SESSION['cart'][$book_isbn])){
			$_SESSION['cart'][$book_isbn] = 1;
		} elseif(isset($_POST['cart'])){
			$_SESSION['cart'][$book_isbn]++;
			unset($_POST);
		}
	}

	// if save change button is clicked , change the qty of each bookisbn
	if(isset($_POST['save_change'])){
		foreach($_SESSION['cart'] as $isbn =>$qty){
			if($_POST[$isbn] == '0'){
				unset($_SESSION['cart']["$isbn"]);
			} else {
				$_SESSION['cart']["$isbn"] = $_POST["$isbn"];
			}
		}
	}

	
	


	
	//echo '
	//<script type="text/JavaScript"> 
	//function xoa(){
	//document.getElementById("sl").value=0;
	//}
	//</script>'
 //;


	

	// print out header here
	$title = "Giỏ hàng";
	require "./template/header.php";

	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
		$_SESSION['total_price'] = total_price($_SESSION['cart']);
		$_SESSION['total_items'] = total_items($_SESSION['cart']);
?>
<style type="text/css">
	body{
		font-family: Helvetica ;
		font-size: 1.8ch;
		background: #1b1c1d;
	}
</style>

<h1 class="ui center aligned header" style="margin-top:80px;color:white">Giỏ hàng</h1>
<div class="ui mini blue modal" >
  <div class="ui center aligned icon header"><i class="circular cart icon"></i>
  Đã thêm vào giỏ hàng !</i></div>
</div>
   	<form class="ui container" action="cart.php" method="post" style="margin-top: 30px;"  >
	   	<table class="ui center aligned table">
		   <thead >
	   		<tr>
	   			<th class="ui small header" >Sản phẩm</th>
	   			<th class="ui small header">Giá</th>
	  			<th class="ui small header">Số lượng</th>
	   			<th class="ui small header">Tổng</th>
	   		</tr> 
		</thead>
	   		<?php
		    	foreach($_SESSION['cart'] as $isbn => $qty){
					$conn = db_connect();
					$book = mysqli_fetch_assoc(getBookByIsbn($conn, $isbn));
			?>
			<tbody>
			<tr>
				<td><?php echo $book['book_title'] . " by " . $book['book_author']; ?></td>
				<td><?php echo  $book['book_price']; ?></td>
			<td ><input style="width: 60px" type="number" id="sl" value="<?php echo $qty; ?>" min="0" max="10" name="<?php echo $isbn; ?>"> </input></td>
				<td><?php echo  $qty * $book['book_price'].".000 đ"; ?></td>
			</tr>
			</tbody>
			<?php } ?>
			<tfoot >
		    <tr>
		    	<th>&nbsp;</th>
		    	<th>&nbsp;</th>
		    	<th class="ui blue center aligned small header" style="font-weight: bold"><?php echo $_SESSION['total_items']; ?></th>
		    	<th class="ui blue small header" style="font-weight: bold"><?php echo  $_SESSION['total_price'].".000 đ"; ?></th>
		    </tr>
			</tfoot>
	   	</table>
	   	<center><input type="submit" class="ui blue button" name="save_change" value="Lưu thay đổi"></center>
	   	<div class="ui center aligned container" style="margin-top: 20px;">
<div class="ui error compact message">
  <ul class="list">
    <li>Nếu muốn xóa sản phẩm nào thì bạn hãy thay đổi số lượng của sản phẩm đó bằng 0, sau đó chọn nút "Lưu thay đổi"<br>(Xin lỗi vì sự bất tiện này)</li>
  </ul>
</div>
</div>
	</form>
	<br/><br/>
	<div class="ui right aligned container" style="margin-top: -30px;">
	<div class="ui large buttons">
  <a href="books.php"><button class="ui button">Tiếp tục mua sắm</button></a>
  <div class="or"></div>
  <a href="checkout.php"><button class="ui blue button">Tiến hành thanh toán</button></a>
</div> 
	</div>
<?php
	} else {
		echo "
		<h1 class='ui center aligned header'  style='margin-top: 100px;'>Giỏ hàng</h1>
		<p class='ui center aligned header' style='margin-top:95px'>Giỏ hàng rỗng ! Hãy thêm sản phẩm vào giỏ hàng để tiếp tục thanh toán !</p>";
	}
	if(isset($conn)){ mysqli_close($conn); }
	require_once "./template/footer.php";
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
