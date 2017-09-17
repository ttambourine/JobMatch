@extends('layout')

@section('pageTitle', 'FAQ')
@section('content')
	<div class="thinBanner">
		<img src="http://i.imgur.com/JKdd1ns.jpg" class="thinBan">
	</div>
			<br>
	<div class="stretch">
		<h1> Frequently Asked Questions  </h1>
	</div>
	
	<div class="faq">
		<button class="accordion"><h5 class="faqHead">What currency are prices in?</h5></button>
		<div class="panel">
			<h5 class="faqBody">All advertised prices should be in Australian Dollar.</h5>
		</div>

		<button class="accordion"><h5 class="faqHead">What is the Rating i see attached to profiles?</h5></button>
		<div class="panel">
			<h5 class="faqBody">These are ratings made by the community that reflect how well the job was done, 
			or how well the job poster performed, i.e prompt payment and good communications.</h5>
		</div>

		<button class="accordion"><h5 class="faqHead">Is this a scam? </h5></button>
		<div class="panel">
			<h5 class="faqBody">No! JobMatch uses a real alogrithm to match real job seekers to real job makers!
			JobMatch does not require payment for a base account and only takes money from completed transactions</h5>
		</div>
		<button class="accordion"><h5 class="faqHead">Question </h5></button>
		<div class="panel">
			<h5 class="faqBody">words</h5>
		</div>
		<button class="accordion"><h5 class="faqHead">Question </h5></button>
		<div class="panel">
			<h5 class="faqBody">words</h5>
		</div>
		<button class="accordion"><h5 class="faqHead">Question</h5></button>
		<div class="panel">
			<h5 class="faqBody">words</h5>
		</div>			
	</div>
	
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
	
	<div class="stretch">
		<div class="aboutButtonBox">
			<a href="/about" class="mainLink">About</a>
			<div class="gap"></div>
			|
			<div class="gap"></div>
			<a href="/faq" class="mainLink">FAQ</a>
			<div class="gap"></div>
			|
			<div class="gap"></div>
			<a href="/contact" class="mainLink">Contact Us</a>
		</div>
	</div>
	
	<br>
	<br>
@stop