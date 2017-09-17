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
                
                <div class="form-group">
					<p>Creator</p>
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973461_960_720.png">
                <div class="profilepic-upload">
                    <button value="upload">Select Profile Picture</button>    
                </div>
				<div class="form-group">
					<p>Name</p>	
					<input type="text" name="title" id="title" required />
				</div>
				<div class="form-group">
					<p>Expertise</p>	
					<input type="text" name="expertise" id="expertise" required />
				</div>
                <div class="form-group">
                    <p>Location</p>
                    <input type="text" name="location" id="location" required />
                </div>
			</div>

			<div class="rightcontact">	
					<input type="text" name="location" id="location" required />
				</div>
				<div class="form-group">
					<p>Price</p>	
					<input type="number" name="price" id="price" required />
				</div>
				<div class="form-group">
					<p>Deadline</p>	
					<input type="text" name="deadline" id="deadline" required />
				</div>
                <div class="form-group">
					<p>About The Job</p>	
					<input type="text" name="about the job" id="about the job" required />
				</div>
			</div>
		</div>
		<br>
		<input type="submit" value="Save Information" class="submitAccForm">
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