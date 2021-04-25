<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Region</title>
	<link href="assets/css/style3.css" rel="stylesheet" type="text/css">
		<style>
body {
  background-image: url('assets/images/night.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>


<body>	

<script src="assets/js/script.js"></script>

		<!-- navigation with dropdown menu -->
<div id="menu">	
	<ul>
		<li><a href="index.php"><img id="logo" style="display:inline-block" src="assets/images/logo2.png" alt="logo" /></a>	</li>		  
		<li><a href="about.php">About</a></li>
		<li><a href="region.php">Five Boroughs</a></li>
		<li><a href="food.php">Restaurants</a></li>
		<li><a href="museum.php">Museum</a></li>
		<li><a href="must.php">Must Do</a></li>
		<li><a href="shopping.php">Shopping</a></li>
		<li><a href="transportation.php">Transportation</a></li>	
		<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn"> Other</a>
   				<div class="dropdown-content">
     				<a href="reference.php">Reference</a>
					<a href="rubric.php">Grading Rubric</a>
    			</div>   
		<li><a href="survey.php">Survey</a></li>
		<li><a href="image.php">Image Gallery</a></li>

	</ul>
</div>
	
	
	
	<div class = five>
	<h1>THE 5 BOROUGHS OF NEW YORK CITY</h1>
	<p>NYC has five boroughs the Bronx, Brooklyn, Manhattan, Queens and Staten Island. Each with dozens of neighborhoods 
	lending their own local flavor. Here's a quick tour to help you decide where to head next.<p>
	</div>
	
<div class="slideshow-container">





<div class="mySlides">
  <div class="numbertext">1 / 5</div>
  <img src="assets/images/mah.jpg" alt="MANHATTAN, Time Square" title="MANHATTAN, Time Square">
  <div class="text">MANHATTAN, Time Square</div>
  
  <div class="describe">
  Manhattan,  is the most densely populated of the five boroughs of New York City. Often referred to by residents
   of the New York City area as the City. Manhattan serves as the city's economic and administrative center, cultural 
   identifier, and historical birthplace. There are many famous place in Manhattan, such as Central Park, 
   The Statue of Liberty, Empire State Building, etc.</div>
</div>



<div class="mySlides">
  <div class="numbertext">2 / 5</div>
  <img src="assets/images/brooklyn.jpg"  alt="BROOKLYN, Brooklyn Bridge" title="BROOKLYN, Brooklyn Bridge">
  <div class="text">BROOKLYN, Brooklyn Bridge</div>
  <div class="describe">
  Brooklyn, located in the U.S. state of New York, the most populous county in the state, and the second-most densely 
  populated country in the United States. It is New York City's most populous borough. It's a hotbed of culture, art, 
  music, and food. Dozens of art galleries and music venues showcase the works of Brooklyn's many creatives. 
  Sites like the Brooklyn Bridge as well as McCarren and Prospect parks.</div>
</div>



<div class="mySlides">
  <div class="numbertext">3 / 5</div>
  <img src="assets/images/queens.jpg" alt="QUEENS, Queens Museum of Art" title="QUEENS, Queens Museum of Art">
  <div class="text">QUEENS, Queens Museum of Art</div>
  
  <div class="describe">
 The largest of NYC's boroughs, and with nearly half its residents foreign born, Queens is truly a world apart. 
 But other than downtown Flushing, Astoria and Long Island City, it's mostly a suburban, low-rise sprawl and a 
 patchwork of diverse communities. </div>
</div>


<div class="mySlides">
  <div class="numbertext">4 / 5</div>
  <img src="assets/images/bronx.jpg" alt="BRONX, New York Botanical Garden" title="BRONX, New York Botanical Garden">
  <div class="text">BRONX, New York Botanical Garden</div>
  <div class="describe">
  The Bronx is a borough of New York City, coterminous with Bronx County, in the U.S. state of New York, 
  the third-most densely populated county in the United States. It is the only borough predominantly on the U.S. mainland.
   Most people already know the three big attractions in the Bronx – Yankee Stadium,
    New York Botanical Garden and the Bronx Zoo. </div>
</div>


<div class="mySlides">
  <div class="numbertext">5 / 5</div>
  <img src="assets/images/Stan.jpg"alt="Staten Island, Staten Island Yankees" title="Staten Island, Staten Island Yankees">
  <div class="text">Staten Island, Staten Island Yankees</div>
  <div class="describe">
	Staten Island is the southernmost of New York City's 5 boroughs. The most suburban of the five boroughs,
	 Staten Island is often neglected as a tourist destination. Take a ride from Manhattan on the Staten Island 
	 Ferry and get some of the best views of New York City for free, then stick around and see what Staten Island. </div>
</div>





<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>


<br>
<footer>  
	<p>CURRENT TIME:  <span id="datetime"></span></p>
	<script>
	var dt = new Date();
	document.getElementById("datetime").innerHTML = dt.toLocaleString();
	</script>
	<?php
		$filename = 'region.php';
		if (file_exists($filename)) {
    	echo "Last modified: " . date ("l, F d Y h:ia", filemtime($filename));
		}
	?>
		<div id="validation">
			<a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fpeople.rit.edu%2Fsc1343%2Fiste240%2Fproject1%2Fregion.html">
			<div class = "check"><img src="assets/images/html.png" alt="HTML5 check" title="HTML Check"></div>
			</a>  
			
			<a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fpeople.rit.edu%2Fsc1343%2Fiste240%2Fproject1%2Fregion.html&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">
			<div class = "check"><img src="assets/images/css.png"  alt="CSS check" title="CSS check"></div>
			</a>
		</div>
</footer>


<script>
var slideIndex = 1;
showSlides(slideIndex);

</script>


</body>
	
	

	
</html>
