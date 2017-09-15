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
		
		<div class="centerBox">
		<div class="leftCol">
			<img class="profImg" src="https://albertaventure.com/wp-content/uploads/2014/12/01_bpoy_story01.jpg" width="250" height="250px">
			<h5>Rating:</h5>		<h6 class="fill">image of stars/5	</h6>		<br>
			<h5>Location:</h5>		<h6 class="fill">Registered Location</h6>		<br>
			<h5>Jobs Done:</h5>		<h6 class="fill">0					</h6>		<br>
			<h5>Jobs Posted:</h5>	<h6 class="fill">0					</h6>		<br>
		</div>
		<div class="rightCol">
			<h1> Chris P. Chips</h1>
			<h3> Qualifications </h3>
			<h3> Contact </h3>
			<h3> Qualifications </h3>
			<h3> Qualifications </h3>
			<h3> About User </h3>
		</div>
		<button class="accordion"><h5 class="faqHead">User Reviews</h5></button>
			<div class="panel">
				<div class="review"> 
					<img class="reviewImg" src="https://c1.staticflickr.com/3/2936/14387367072_85312c31b3_b.jpg">
					<h5 class="reviewName"> Clair Voyuent </h5>
					<h6 class="reviewBody"> He was quick and communicated well<h6>
				</div>
			</div>
		</div>
		
		<br>
		<br>
		</div>
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/resources/views/footer.php");?>
		<script>
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
			acc[i].onclick = function(){
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.display === "block") {
					panel.style.display = "none";
				} else {
					panel.style.display = "block";
				}
			}
		}
		</script>
	
	</body>
</html>