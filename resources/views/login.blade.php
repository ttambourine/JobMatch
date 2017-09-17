<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jobmatch</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="../resources/assets/css/style.css">	
    </head>

<body>

	<div class="centre">
<?php include("{$_SERVER['DOCUMENT_ROOT']}/resources/views/header.php");?>
	<div class="contentformBox">
        
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
                    <input type="submit" value="Sign Up Now" onclick="location.href='http://ec2-13-54-159-102.ap-southeast-2.compute.amazonaws.com/account';" class="submitLogForm">
				</div>
				</div>
				</form>
        
      </div>
      
</div> 

		<?php include("{$_SERVER['DOCUMENT_ROOT']}/resources/views/footer.php");?>
		</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="../resources/assets/js/index.js"></script>

</body>
</html>
