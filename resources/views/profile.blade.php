@extends('layout')

@section('pageTitle', 'Profile')
@section('content')
	<br/><br/><br/>
	<div class="profileImg">
		<img src="https://albertaventure.com/wp-content/uploads/2014/12/01_bpoy_story01.jpg" width="200" height="200" class="profileImgPic">
	</div>
	<div class="mainProf">
		<h1 id="name"></h1>
		<div class="middleProf">
			<h3>Skills: </h3>
			<h4 id="tags1">Loading</h4><h4 id="tags2"></h4><h5 id="tags3"></h5>
			<h3 id="address">LLOAODOADOAIDNGINGING</h3>
			<!--<h3>Member since 17th Septermber 2017</h3>-->

		</div>
		<h5>Report this member</h5> 
		<div class="quote">Request a quote </div>
	</div>

	<script>
		var tag_names = [];
	    $.getJSON( "api/list_tags", function( data ) {
			for (var i = 0; i < data.length; i++){
				tag_names[data[i].id] = data[i].name;
			}
			$.getJSON( "api/get_info", function( data ) {
				$("#name").html(data.fname + " " + data.lname);
				//$("#email").val(data.email);
				//$("#about").val(data.about);
				//$("#mobile").val(data.mobile);
				$("#address").html(data.address);
				//$("#lat").val(data.lat);
				//$("#lng").val(data.lng);

				if (data.tag1 != 0) {
					$('#tags1').html(tag_names[data.tag1]);
				}

				if (data.tag2 != 0 && data.tag2 != null) {
					$('#tags2').html(tag_names[data.tag2]);
				}

				if (data.tag3 != 0 && data.tag3 != null) {
					$('#tags3').html(tag_names[data.tag3]);
				}
			});
		});
	</script>
@stop