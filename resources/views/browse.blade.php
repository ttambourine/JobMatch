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

		<div class="jobTab">
			<div class="jobImg">
				<img src="https://albertaventure.com/wp-content/uploads/2014/12/01_bpoy_story01.jpg" width="68" height="68">
			</div>
			<div class="jobBody">
				<h3> Garden Landscaping </h3>
				<h4> Frankston, Victoria, Australia </h4>
			</div>
			<div class="jobEarn">
				<h1> $50 </h1>
				<h4> Match </h4>
			</div>
		</div>
		<div class="jobTab">
			<div class="jobImg">
				<img src="https://albertaventure.com/wp-content/uploads/2014/12/01_bpoy_story01.jpg" width="68" height="68">
			</div>
			<div class="jobBody">
				<h3> Garden Landscaping </h3>
				<h4> Frankston, Victoria, Australia </h4>
			</div>
			<div class="jobEarn">
				<h1> $50 </h1>
				<h4> Match </h4>
			</div>
		</div>
		
		<div class="bink"></div>
	
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/resources/views/footer.php");?>
	</div>	
	</body>
</html>