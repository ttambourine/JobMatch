
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
				<br>
		<div class="stretch">
			<h1> What is JobMatch?  </h1>
		</div>
		<h5 class="blurb"> JobMatch is an online communities of those looking for jobs and <br>
				those that have jobs they need completed! <br>
				Complete your profile, then post a job, apply, or wait to be matched! 
		</h5>
		<br>
		<div class="stretch">
			<h1> Why should you choose JobMatch?  </h1>
		</div>
		<h5 class="blurb"> We made JobMatch to help build an online community where people can  <br>
				seek out help with tasks, whether day to day or those that require special expertise.  <br>
				Our service is unique as you don't need to find your own jobs, once you're in our system <br>
				our JobMatch alogrithm fill pair you with jobs we think you're qualified for, based <br>
				on the profile you create!
		</h5>
		<br>
		<div class="stretch">
			<h1> What does JobMatch do with my data?  </h1>
		</div>
		<h5 class="blurb"> JobMatch uses data collected from you, such as your location and what you  <br>
				enter in to your profile to match a job to a worker, and vice versa. The Location is used  <br>
				to ensure you only receive job offers or applicants relevant to you! No extra information <br>
				is collected, stored, and we do not sell your data to other companies.  <br>
		</h5>
		<br>
		<br>
		<div class="stretch">
			<div class="aboutButtonBox">
				<a href="https://laravel.com/docs" class="mainLink">Tutorial</a>
				<div class="gap"></div>
				|
				<div class="gap"></div>
				<a href="/faq" class="mainLink">FAQ</a>
				<div class="gap"></div>
				|
				<div class="gap"></div>
				<a href="/contact" class="mainLink">Contact Us</a>
			</div>
		</div>
		<br>
		<br>
		
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/resources/views/footer.php");?>
		</div>
	</body>
</html>
