<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>User Account </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
	<link rel="stylesheet" type="text/css" href="../resources/assets/css/style.css">

  
</head>

<body>
<div class="centre">
  <?php include("{$_SERVER['DOCUMENT_ROOT']}/resources/views/header.php");?>
  
  <form action="/" method="post">
	    
    <div class="contentformBox">	    
    <div class="contentform">
		<h1>Account Details</h1>
    	<div class="leftcontact">

            
            <div class="form-group">
			<p>First Name<span>*</span></p>
				<input type="text" name="fName" id="fName" required />
			</div>
            
			<div class="form-group">
			<p>Last Name<span>*</span></p>
				<input type="text" name="lName" id="lName" required />
			</div>

			<div class="text-area">
			<p>Email<span>*</span></p>
                <input type="email" name="email" id="email" required />
			</div>
            <br>
            <div class="dropdown">
			<p>Skills<span>*</span></p>
                <select id="tags">
                    <option value="" disabled="disabled" selected="selected">Please select an option</option>
                </select>
			</div>
			<div class="dropdown">
			<p>Skills<span>*</span></p>
                <select id="tags">
                    <option value="" disabled="disabled" selected="selected">Please select an option</option>
                </select>
			</div>
			</div>

		<div class="rightcontact">	

			<div class="form-group">
				<p>Contact No.<span>*</span></p>	
				<input type="text" name="phone" id="phone" maxlength="10" required />
			</div>
        
            <div class="form-group">
				<p>Location<span>*</span></p>	
				<input type="text" name="location" id="location" maxlength="20" required />
			</div>
			<div class="dropdown">
			<p>Skills<span>*</span></p>
                <select id="tags">
                    <option value="" disabled="disabled" selected="selected">Please select an option</option>
                </select>
			</div>
		</div>
		<br>
		<div class="centreAccount">
			<div class="form-group">
				<p>About You<span>* 250 characters or less</span></p>
                <textarea type="text" name="about" id="about" maxlength="250" placeholder="Share your story!"></textarea>
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
	<script>
		$(document).ready(function(){
			$.getJSON( "api/list_tags", function( data ) {
			 	var listItems= "<option value='' disabled selected>Please select an option</option>";
				for (var i = 0; i < data.length; i++){
					listItems+= "<option value='" + data[i].id + "'>" + data[i].name + "</option>";
				}
				$("#tags").html(listItems);
			});
	    }); 
	</script>
</body>
</html>
  
   
