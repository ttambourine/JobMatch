
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

		<div class="thinBanner">
			<img src="http://i.imgur.com/JKdd1ns.jpg" class="thinBan">
		</div>
		<div class="stretch">
			<h1> Have a Question or Comment?  </h1>
		</div>
		<div class="container">
			<form action="/action_page.php">

				<label for="fname">First Name</label><br>
				<input type="text" id="fname" name="firstname" placeholder="Your name.." required><br>

				<label for="lname">Last Name</label><br>
				<input type="text" id="lname" name="lastname" placeholder="Your last name.." required><br>

				<label for="lname">E-Mail</label><br>
				<input type="email" id="email" name="eMail" placeholder="username@website.etc" required><br>
				<br>
				<label for="subject">Subject</label><br>
				<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea><br>

				<input type="submit" value="Submit">

			</form>
		</div>
		
				
		<div class="stretch">
			<div class="aboutButtonBox">
				<a href="https://laravel.com/docs" class="mainLink">Tutorial</a>
				<div class="gap"></div>
				|
				<div class="gap"></div>
				<a href="/about" class="mainLink">About</a>
				<div class="gap"></div>
				|
				<div class="gap"></div>
				<a href="/faq" class="mainLink">FAQ</a>
			</div>
		</div>
		
		<br>
		<br>
			
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/resources/views/footer.php");?>
		</div>

	</body>
</html>