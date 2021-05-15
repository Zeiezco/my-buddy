<!DOCTYPE html>
<html>
<head>
<title>My-Buddy Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>My-Buddy</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form method="POST" action="register.php">

				<div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="firstname" value="<?php echo $username; ?>">
  	</div>
      <div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="name"  value="<?php echo $name; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
      <div class="input-group">
  	  <label>Upload a copy of your drivers liscence or international passport</label>
  	  <input type="file" name="driverspassport" value="<?php echo $driverspassport; ?>">
  	</div>
	  <div class="input-group">
  	  <label>BVN or NIN</label>
  	  <input type="text" name="bvnnin" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password" value="<?php echo $password; ?>">
	  </div>
	
	  <div class="input-group">
  	  <label>Date Of Birth</label>	 
	<input type="date" name="dob" value="<?php echo $dob; ?>">
 	</div>
  	<div class="input-group">
  	  <label>Contact Number</label>
  	  <input type="text" name="number" value="<?php echo $number; ?>">
  	</div>
      <div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address" value="<?php echo $address; ?>">
  	</div>

					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP" name="reg_user">
				</form>
				<p>Already have an Account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		
	</div>
	<!-- //main -->
</body>
</html>