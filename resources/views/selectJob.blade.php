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
		<h1>Create a Job</h1>	    
		<div class="contentform">
			<div class="leftcontact">
				<div class="form-group">
					<p>Seeker</p>	
					<input type="img" name="seeker" id="displyimg" required />
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png">
				</div>
				<div class="form-group">
					<p>Expertise</p>	
					<input type="text" name="expertise" id="expertise" required />
				</div>
                <div class="form-group">
                    <p>Location</p>
                    <input type="text" name="expertise" id="expertise" required />
                </div>
			</div>

			<div class="rightcontact">	
				<div class="form-group">
					<p>Price</p>	
					<input type="text" name="location" id="location" required />
				</div>
				<div class="form-group">
					<p>Deadline</p>	
					<input type="number" name="price" id="price" required />
				</div>
				<div class="form-group">
					<p>About The Job</p>	
					<input type="text" name="deadline" id="deadline" required />
				</div>
			</div>
		</div>
				<div class="centreAccount">
			<div class="form-group">
			</div>
		<br>
		<input type="submit" value="Select Job" class="submitAccForm">
		<br>
		<br>
		</div>
		</div>
		</div>
	</form>	

  		<?php include("{$_SERVER['DOCUMENT_ROOT']}/resources/views/footer.php");?>
		</div>
</body>
</html>