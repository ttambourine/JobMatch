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
			<img src="http://i.imgur.com/JKdd1ns.jpg" class="wideBan">
		</div>
		<div class="profileImg">
			<img src="https://albertaventure.com/wp-content/uploads/2014/12/01_bpoy_story01.jpg" width="200" height="200" class="profileImgPic">
		</div>
		<div class="mainProf">
			<h1>Kent Smuffman</h1>
			<div class="middleProf">
				<h3>Parkdale VIC 3195, Australia</h3>
				<h3>Member since 17th Septermber 2017</h3>
			</div>
			<h5>Report this member</h5> 
			<div class="quote">Request a quote </div>
		</div>
		
		
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/resources/views/footer.php");?>
	</div>	
	</body>
</html>