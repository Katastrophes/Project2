<!--by Danny Diaz-Etchevehere-->
<!--FULLSCREEN OVERLAY-->
<div class="cover">
	<div id="mobile-nav" class="overlay fade fadeOut">
	    <div id= "overlay-content-ID" class="overlay-content" >
	        <a href="index.php" class="mobile-nav-a" onclick="openNav()">Home</a>
	        <a href="NMH.php" class="mobile-nav-a" onclick="openNav()">Neutral Milk Hotel</a>
	        <a href="lordHuron.php" class="mobile-nav-a" onclick="openNav()">Lord Huron</a>
	        <a href="freelanceWhales.php" class="mobile-nav-a" onclick="openNav()">Freelance Whales</a>
	        <a href="colophon.php" class="mobile-nav-a" onclick="openNav()">Colophon</a>
	    </div>
</div>

<!--Fixed top-nav-->
<span class="hamburger-class" id="hamburger" onclick="openNav()">&#9776;</span>

<div id="barID" class="bar">
    <div id="nav-this-page"><a href="#top" ><?php echo $thisPage?></a></div>
 
    <div class="nav-item"><a href="index.php" class="<?php if ($thisPage == "Home"){ echo "nav-a active";} ?>">Home</a></div>
    <div class="nav-item"><a href="NMH.php" class="<?php if ($thisPage == "Neutral Milk Hotel"){ echo "nav-a active";} ?>">Neutral Milk Hotel</a></div>
    <div class="nav-item"><a href="lordHuron.php" class="<?php if ($thisPage == "Lord Huron"){ echo "nav-a active";} ?>">Lord Huron</a></div>
    <div class="nav-item"><a href="freelanceWhales.php" class="<?php if ($thisPage == "Freelance Whales"){ echo "nav-a active";} ?>">Freelance Whales</a></div>
    <div class="nav-item"><a href="colophon.php" class="<?php if ($thisPage == "Colophon"){ echo "nav-a active";} ?>">Colophon</a></div>
    <div id="music">
		<audio id = "song" src =""></audio>
		<input type = "button" class="btn btn-primary btn-lg outline" onclick="play()" value="Play">
		<input type = "button" class="btn btn-primary btn-lg outline" onclick="stop()" value="Pause">
	</div>
</div>	