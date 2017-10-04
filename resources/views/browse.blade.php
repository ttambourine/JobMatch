@extends('layout')

@section('pageTitle', 'Browse')
@section('content')
	<div id="jobs">
		<div class="jobTab">
			<div class="jobImg">
				<img class="jobPic" src="https://albertaventure.com/wp-content/uploads/2014/12/01_bpoy_story01.jpg" width="100" height="100">
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
				<img class="jobPic" src="https://albertaventure.com/wp-content/uploads/2014/12/01_bpoy_story01.jpg" width="100" height="100">
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
	</div>
	
	<div class="bink"></div>

	<script>
		$(document).ready(function(){
			$.getJSON( "api/list_jobs", function( data ) {
				for (var i = 0; i < data.length; i++){
			 		var html = "<div class='jobTag'><div class='jobBody'><h3>"+data[i].title+"</h3><h4>Due: "+data[i].due_date+"</div><div class='jobEarn'><h1>$"+data[i].amount+"</h1></div></div>"
			 		$("#jobs").append(html);
			 	}
			});
	    });
	</script>
@stop