<?php
session_start();
require_once "./functions/database_functions.php";
$conn = db_connect();
  $title = "Liên hệ";
  require_once "./template/header.php";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["a"]) && empty($_POST["b"]) && empty($_POST["c"])) {
	   echo "Name is required";
	} else {
		echo "<script>alert('Cảm ơn bạn đã phản hồi  !')</script>";
	}
}
 
?>
    <div class="row">
        <div class="col-md-3"></div>
		<div class="ui container" style="margin-top:100px">
			<form class="ui form" method="POST" action="contact.php">
			  	<fieldset>
				    <legend>Đội chăm sóc khách hàng VKUBook</legend>
				    <p class="lead">Chúng tôi muốn lắng nghe câu hỏi và ý kiến đóng góp từ bạn. Hãy phản hồi cho VKUBook biết vấn đề của bạn nhé! Chúng tôi sẽ liên hệ lại bạn trong 24h tiếp theo.</p>
				    <div class="form-group">
				      	<label for="inputName" class="col-lg-2 control-label">Họ và tên</label>
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" id="inputName" placeholder="Name" name="a" required>
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="inputEmail" class="col-lg-2 control-label">Email</label>
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" id="inputEmail" name="b" placeholder="Email" required>
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="textArea" class="col-lg-2 control-label">Nội dung phản hồi</label>
				      	<div class="col-lg-10">
				        	<textarea class="form-control" rows="3" id="textArea" name="c" required></textarea>
				      	</div>
				    </div>
				      	<div class="ui large buttons">
						<?php
						  if (isset($_SESSION['username']) ||  isset($_SESSION['user_first_name']) ) {
                      echo '<a href="user_login.php"><input type="button" class="ui black button" value="Thoát"></input></a>';
						  }
						  else{
							echo '<a href="index.php"><input type="button" class="ui black button" value="Thoát"></input></a>'; 
						  }						  
						  ?>
				        	<button type="submit" class="ui button" >Submit</button>
				      	</div>
						 
				    
			  	</fieldset>
			</form>
		</div>
		<div class="col-md-3"></div>
    </div>
<?php
  require_once "./template/footer.php";
?>