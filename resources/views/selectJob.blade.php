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
			<div class="rightcontact">	
				<div class="form-group">
					<p>Name</p>	
				</div>
				<div class="form-group">
					<p>Expertise</p>	
				</div>
                <div class="form-group">
					<p>Location</p>	
				</div>
            </div>

			<div class="rightcontact">	
				<div class="form-group">
					<p>Price</p>	
				</div>
				<div class="form-group">
					<p>Deadline</p>	
				</div>
                <div class="form-group">
					<p>About The Job</p>	
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