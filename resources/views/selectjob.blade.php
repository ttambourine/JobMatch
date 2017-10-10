@extends('layout')

@section('pageTitle', 'Select Job')
@section('content')
	<form action="/applyforjob" method="post">
		{{ csrf_field() }}
	    <div class="contentformBox">	    
		<div class="contentform">
		<h1 id="title">Title</h1>	    
		<div class="contentform">
			<div class="leftcontact">
				<div class="form-group">
                    <br>
                    <br>
                    <br>
                    <br>
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
            <img src="https://cdn0.iconfinder.com/data/icons/command-buttons/512/Left-512.png" style="width:50px;height:50px;">
            <img src="https://cdn0.iconfinder.com/data/icons/command-buttons/512/Right-512.png" style="width:50px;height:50px;">
			<div class="rightcontact">	
                <br>
                <br>
				<div class="form-group">
					<p>Price</p>	
					<input type="text" name="price" id="price" disabled />
				</div>
				<div class="form-group">
					<p>Deadline</p>	
					<input type="text" name="deadline" id="deadline" disabled />
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

	    var tag_names = [];
	    $.getJSON( "api/list_tags", function( data ) {
			for (var i = 0; i < data.length; i++){
				tag_names[data[i].id] = data[i].name;
			}
			$.getJSON( "api/job_info/"+getUrlParameters("id"), function( data ) {
				$("#title").html("Title: " + data.title);
				$("#price").val(data.amount);
				$("#deadline").val(data.due_date);
				$("#description").val(data.description);
				$("#location").val(data.address);

				if (data.tag1 != 0) {
					$("#tags").append('<p>Expertise #1</p><input type="text" name="tag1" id="tag1" value="'+tag_names[data.tag1]+'" disabled />');
				}

				if (data.tag2 != 0 && data.tag2 != null) {
					$("#tags").append('<p>Expertise #2</p><input type="text" name="tag2" id="tag2" value="'+tag_names[data.tag2]+'" disabled />');
				}

				if (data.tag3 != 0 && data.tag3 != null) {
					$("#tags").append('<p>Expertise #3</p><input type="text" name="tag3" id="tag3" value="'+tag_names[data.tag3]+'" disabled />');
				}
			});
		});

	    
	</script>
@stop