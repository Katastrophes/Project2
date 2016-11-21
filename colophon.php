<!doctype html>
<html>
<?php $thisPage = "Colophon" ?>
<?php include "inc/head.inc" ?>

<body>
<!--This div is for getting the variable value $audio_str thru JS in responsive-nav.js-->
 <div id="music-target" style="display: none;">
	<?php
	$audio_str = "nomusic";
	echo htmlspecialchars($audio_str);
	?>
 </div>
<?php include "inc/responsive-nav.inc"; ?>
<div class="container">
	<a class="anchor" id="top"></a>	
	<header>
		<h1>Colophon</h1>
	</header>

	<div class="jumbotron">
		<div class="container">
			<h1>Who We Are</h1>
			<p>We are a team of student web developers from the University of Rochester that have a passion for music. By leveraging our diverse background and interests, we created a website to showcase a few of our favorite alternative rock bands.</p>
			<p><a class="btn btn-primary btn-lg outline" href="#aboutUs">Learn more &raquo;</a></p>
		</div>
	</div>

		<!-- Team Information & Who Did What -->
	<section>
		<h2 id="aboutUs">About Us</h2>
		<div class="row">
			<div class="col-md-4">
				<img src="images/sarah.jpg" class="img-responsive unveilImg" alt="Sarah">
			</div>

			<div class="col-md-8">
				<h3>Sarah Kingsley</h3>
				<ul class="list-unstyled">
					<li>CSS Artist</li>
				</ul>
			</div>
		</div>

		<br><hr/>
		<div class="row">
			<div class="col-md-4">
				<img src="images/alex.jpg" class="img-responsive unveilImg" alt="Alex">
			</div>

			<div class="col-md-8">
				<h3>Alex Mai</h3>
				<ul class="list-unstyled">
					<li>Framework Wrangler</li>
				</ul>
			</div>
		</div>

		<br><hr/>
		<div class="row">
			<div class="col-md-4">
				<img src="images/tess.jpg" class="img-responsive unveilImg" alt="Tess">
			</div>

			<div class="col-md-8">
				<h3>Tess Stone</h3>
				<ul class="list-unstyled">
					<li>Content Master and Designer</li>
				</ul>
			</div>
		</div>

		<br><hr/>
		<div class="row">
			<div class="col-md-4">
				<img src="images/april.jpg" class="img-responsive unveilImg" alt="April">
			</div>

			<div class="col-md-8">
				<h3>April Uzzle</h3>
				<ul class="list-unstyled">
					<li>Architect</li>
				</ul>
			</div>
		</div>

		<br><hr/>
		<div class="row">
			<div class="col-md-4">
				<img src="images/theresa.jpg" class="img-responsive unveilImg" alt="Theresa">
			</div>

			<div class="col-md-8">
				<h3>Theresa Xu</h3>
				<ul class="list-unstyled">
					<li>Javascript Coder</li>
				</ul>
			</div>
		</div>
		<br><hr><br>
	</section>

	<section>
		<h2>Team 4 Colophon</h2>
		<br><hr/>
		<div class="row">

			<div class="col-md-8">
				<h3>Danny Diaz-Etchevehere</h3>
				<ul class="list-unstyled">
					<p>I got rid of the old nav and created a responsive fixed top-nav. This required a mix of html, css, js (and jquery), and php. I created responsive-nav.inc, responsive-nav-styles.css, and responsive-nav.js, and I added nav fonts to fonts.css. I also incorporated Team 3's music player into the nav on each band page by using php on to store the path to each page's audio file. Then I used js to add the path to the source attribute of the audio element in responsive-nav.inc. I included responsive-nav.inc and responsive-nav.js on every page. </p>
					<p>For mobile sized screens, the nav has a hamburger menu that creates a fullscreen overlay so that the user can choose which page to go to next (or choose to navigate back to the top of the page). I found a couple online tutorials on how to achieve the fade effect for the overlay (and to create the overlay itself), which I cite in responsive-nav-styles.css.</p>
					<p>(Note: on our github page, commits from "memoryfuel" and "ddiazetc" are both me. I have two accounts and accidentally used both.)</p>
				</ul>
			</div>
		</div>
	</section>
	<!-- Technologies Used -->
	<section>
		<h2>Technologies Used For All Pages</h2>
		<ul ul class="list-unstyled">	
			<li>PHP</li>
			<li>HTML</li>
			<li>CSS</li>
			<li>Javascript</li>
			<li>Bootstrap</li>
		</ul>
		<br><hr><br>
	</section>

	<!-- Sources of Content -->
	<section>
		<h2>Sources</h2>
		<ol>
			<li><a href="https://en.wikipedia.org/wiki/Alternative_rock">https://en.wikipedia.org/wiki/Alternative_rock</a></li>
			<li><a href="https://en.wikipedia.org/wiki/Neutral_Milk_Hotel">https://en.wikipedia.org/wiki/Neutral_Milk_Hotel</a></li>
			<li><a href="https://en.wikipedia.org/wiki/Lord_Huron">https://en.wikipedia.org/wiki/Lord_Huron</a></li>
			<li><a href="http://bits.blogs.nytimes.com/2014/02/19/meet-lord-huron-a-musical-project-that-is-also-an-alternate-reality-game/?_r=0">http://bits.blogs.nytimes.com/2014/02/19/meet-lord-huron-a-musical-project-that-is-also-an-alternate-reality-game/?_r=0</a></li>
			<li><a href="https://en.wikipedia.org/wiki/Freelance_Whales">https://en.wikipedia.org/wiki/Freelance_Whales</a></li>
		</ol>
	</section>

</div> <!-- end .container -->

<script src="js/responsive-nav.js"></script>
<?php include('inc/unveil.inc'); ?>

</body>
</html>