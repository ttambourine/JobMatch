<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   	<link rel="stylesheet" type="text/css" href="../resources/assets/css/style.css">
  </head>

<body>  
	<div class="centre">
<?php include("{$_SERVER['DOCUMENT_ROOT']}/resources/views/header.php");?>
	<form action="/" method="post">
	    <div class="contentformBox">	    
		<div class="contentform">
		<h1>Select a Job</h1>	    
		<div class="contentform">
			<div class="leftcontact">	
                <div class="creatorField">
                    <p>Seeker: </p>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png" class="displayPic">
                </div>
				<div class="creatorField">
					<p>Name: </p>	
				</div>
				<div class="creatorField">
					<p>Expertise: </p>	
				</div>
                <div class="creatorField">
					<p>Location: </p>	
				</div>
            </div>

			<div class="rightcontact">	
				<div class="creatorField">
					<p>Price: </p>	
				</div>
				<div class="creatorField">
					<p>Deadline: </p>	
				</div>
                <div class="creatorField">
					<p>About The Job: </p>	
				</div>
            </div>
			</div>
		</div>
		<br>
		<br>
        </div>
	</form>	

  		<?php include("{$_SERVER['DOCUMENT_ROOT']}/resources/views/footer.php");?>
		</div>
</body>
</html>