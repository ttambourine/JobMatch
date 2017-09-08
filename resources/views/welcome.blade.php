
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jobmatch</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="../resources/assets/css/css/style.css">	
    </head>
	
    <body>
	<div class="centre">
	
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/resources/views/header.php");?>
		
		<div class="banner">
			<img src="http://www.thaiembassy.com/wp-content/uploads/2015/04/working-in-thailand.jpg" class="imgBan" >
		</div>
		<div class="stretch">
			<h1> Get yourself JobMatched Today! </h1>
		</div>
		<div class="Row">
			<div class="picBox">
				<img src="http://i.imgur.com/6I5Rtw4.png" width="250" height="170" class="leftImg">
				<img src="http://i.imgur.com/J5qC1n6.png" width="250" height="170" class="rowImg">
				<img src="http://i.imgur.com/CbMrvoh.png" width="250" height="170" class="rowImg">
			</div>
		</div>
		<div class="Row2">
			<div class="picBox">
				<img src="http://i.imgur.com/PLWvz7Y.png" width="250" height="170" class="leftImg">
				<img src="http://i.imgur.com/qlTmPX2.png" width="250" height="170" class="rowImg">
				<img src="http://i.imgur.com/8nCdQMb.png" width="250" height="170" class="rowImg">
			</div>
		</div>
		<div class="stretch">
			<div class="middleLinks">
				<a href="https://laravel.com/docs" class="mainLink">Browse All Jobs</a>
			</div>
		</div>
		<div class="stretch">
				<div class="line"></div>
				<h1> What is JobMatch? </h1>
				<br>
				<h5 class="blurb"> JobMatch is an online communities of those looking for jobs and <br>
				those that have jobs they need completed! <br>
				Complete your profile, then post a job, apply, or wait to be matched! 
				</h5>
				<div class="stretch">
					<div class="middleLinks">
						<a href="/about" class="mainLink">Want to know more?</a>
					</div>
				</div>
		</div>
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/resources/views/footer.php");?>
		
	</body>
</html>
