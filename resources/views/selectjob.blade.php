@extends('layout')

@section('pageTitle', 'Select Job')
@section('content')
	<form action="/" method="post">
	    <div class="contentformBox">	    
		<div class="contentform">
		<h1 id="title">Title</h1>	    
		<div class="contentform">
			<div class="leftcontact">
				<div class="form-group">
					<p>Seeker</p>	
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png" style="width:100px;height:100px;">
				</div>
				<div class="form-group" id="tags">
				</div>
                <div class="form-group">
                    <p>Location</p>
                    <input type="text" name="location" id="location" disabled />
                </div>
			</div>

			<div class="rightcontact">	
                <br>
                <br>
				<div class="form-group">
					<p>Price</p>	
					<input type="text" name="price" id="price" disabled />
				</div>
				<div class="form-group">
					<p>Deadline</p>	
					<input type="number" name="deadline" id="deadline" disabled />
				</div>
				<div class="form-group">
					<p>About The Job</p>	
					<input type="text" name="description" id="description" disabled />
				</div>
			</div>
		</div>
				<div class="centreAccount">
			<div class="form-group">
			</div>
		<br>
		<input type="submit" value="Apply for job" class="submitAccForm" style="float: none">
		<br>
		<br>
		</div>
		</div>
		</div>
	</form>	

	<script>
		function getUrlParameters(parameter){
	       var currLocation = window.location.search,
	           parArr = currLocation.split("?")[1].split("&");

	       for(var i = 0; i < parArr.length; i++){
	            parr = parArr[i].split("=");
	            if(parr[0] == parameter){
	                return parr[1];
	            }
	       }

	       return false;  
	    }

	    $.getJSON( "api/job_info/"+getUrlParameters("id"), function( data ) {
	    	data = data[0];
			$("#title").html(data.title);
			$("#price").html(data.amount);
			$("#deadline").html(data.due_date);
			$("#description").html(data.description);
		});
	</script>
@stop