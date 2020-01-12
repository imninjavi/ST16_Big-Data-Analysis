<?php 
	session_start();
	if (!$_SESSION['username']) {
		header("Location: index.php");
	  }
	  include 'koneksi2.php';
	?>
<form method="post" action="insert.php" class="login100-form validate-form">
<div class="container-login100-form-btn m-t-20">
	<button href="insert.php" type='submit' class="login100-form-btn">
							Input Data
	</button>
</div>
</form>
<form method="post" action="index2.php" class="login100-form validate-form">
<div class="container-login100-form-btn m-t-20">
	<button type='submit' class="login100-form-btn">
							Grafik
	</button>
</div>
</form>