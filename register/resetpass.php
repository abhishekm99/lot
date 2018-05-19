<?php 
  session_start();
?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>RESET PASSWORD</h2>
  </div>
	 
  <form method="post" action="resetpass.php">
  	<?php include('errors.php'); ?>
    <div class="input-group">
  		<label>NEW PASSWORD</label>
  		<input type="password" name="password_1" >
  	</div>
  	<div class="input-group">
  		<label>CONFIRM PASSWORD</label>
  		<input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="reset_pass">SET NEW PASSWORD</button>
  	</div>
  </form>
</body>
</html>