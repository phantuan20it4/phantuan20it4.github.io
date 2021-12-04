<?php
	$title = "Administration";
	require_once "./template/header.php";
?>
<div class="ui container">
	<form class="ui form" method="post" action="admin_verify.php" style="margin-top: 100px;">
		<div >
			<label for="name" >Tài khoản</label>
			<div >
				<input type="text" name="name" style="width:400px" >
			</div>
		</div>
		<div >
			<label for="pass" class="control-label col-md-4">Mật khẩu</label>
			<div >
				<input type="password" name="pass" style="width:400px" >
			</div>
		</div><br>
		<input class="ui blue button" type="submit" name="submit" value="Đăng nhập">
	</form>
</div>
<?php
	require_once "./template/footer.php";
?>