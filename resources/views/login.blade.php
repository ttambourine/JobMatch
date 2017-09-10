<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
  <link rel="stylesheet" type="text/css" href="../resources/assets/css/style.css">

  
</head>

<body>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/resources/views/header.php");?>
	<div class="loginFormBox">
      
		<ul class="tab-group">
			<li class="tab"><a href="#signup">Sign Up</a></li>
			<li class="tab active"><a href="#login">Log In</a></li>
		</ul>
      
		<div class="tab-content">
			<div id="login">   
				<h1>Welcome Back!</h1>
          
				<form action="/" method="post">
				<div class="logRegDes">
				<div class="middleForm">
					<div class="form-group">
						<br>
						<p> Email Address </p>
						<input type="email" name="email" id="email" required />
					</div>
					<div class="form-group">
						<br>
						<p> Password <a class="forgotA" href="#">Forgot Password?</a></p>
						<input type="text" name="password" id="password" required />
					</div>
					<br>
					<input type="submit" value="Get Matching" class="submitLogForm">
				</div>
				</div>
				</form>
			</div>
        
			<div id="signup">   
				<h1>Sign Up for Free</h1>
          
				<form action="/" method="post">
				<div class="logRegDes">
					<div class="topLeft">
						<div class="form-group">
							<br>
							<p> First Name <span class="req">*</span> </p>
							<input type="text" name="fName" id="lName" required />
						</div>
					</div>
					<div class="topRight">
						<div class="form-group">
							<br>
							<p> Last Name <span class="req">*</span> </p>
							<input type="text" name="lName" id="lName" required />
						</div>
					</div>
					
					<div class="form-group">
						<br>
						<p> Email Address <span class="req">*</span> </p>
						<input type="email" name="email" id="email" required />
					</div>
					<div class="form-group">
						<br>
						<p> Password <span class="req">*</span> </p>
						<input type="text" name="password" id="password" required />
					</div>
          
					<input type="submit" value="Join JobMatch" class="submitRegForm">
				</div>	
				</form>

        </div>
        
      </div><
      
</div> 
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/resources/views/footer.php");?>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="js/index.js"></script>

</body>
</html>
