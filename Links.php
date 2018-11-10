<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Links</title>
<style>
#myDIV {
    width: 100px;
    height: 100px;
    background-color: MediumSeaGreen;
    color: white;
    -webkit-animation: mymove 5s infinite; /* Safari 4.0 - 8.0 */
    animation: mymove 5s infinite;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes mymove {
    50% {box-shadow: 10px 20px 30px Coral;}
}

@keyframes mymove {
    50% {box-shadow: 10px 20px 30px Coral;}
}
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
	background-color:rgb(255,215,0,0.2);
}

/* Style the header */
header {
    background-color: MediumSeaGreen;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Container for flexboxes */
section {
    display: -webkit-flex;
    display: flex;
}

/* Style the top Navi*/
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

/* Style the navigation menu */
nav {
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    background: #ccc;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

/* Style the content */
article {
    -webkit-flex: 3;
    -ms-flex: 3;
    flex: 3;
    background-color: rgb(255,215,0,0.2);
    padding: 10px;
}

/* Style the footer */
footer {
    background-color: gray;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 600px) {
    section {
      -webkit-flex-direction: column;
      flex-direction: column;
    }
</style>
</head>
<body>
<?php include("header.php"); ?>
<section>
 <?php include("navi.php"); ?>
  <article>
  <a href="./media/profil.jpg" style="float:left; align="left" download>
		<img src="./media/profil.jpg" alt="profil" width="70" height="70" class="border">
		&nbsp;
		</a>
  <blockquote cite="http://zitate.net/zitat?id=1046">
"Herzlichen Glückwunsch, Smudo, Toi Toi Toi.
Du kannst dir sicher sein, dass ich mich für dich freu... ."<br>
[Die Fantastischen Vier, Die Da?!]
</blockquote><br>
  <hr>
    <h2>Krimskrams</h2>
	<h3>Kunst &amp; Krempel</h3>  
	<ul style="list-style-type:none; color:tomato">
	  <li><a href="http://www.annahuber.net ">Anna Huber - "hierundoderhierunddort"</a></li>		
	  <li><a href="http://www.istodaythedaymartymcflyarriveswhenhetravelstothefuture.com">MartyMcFly - "back to the future"</a></li>			
	  <li><a href="http://www.archive.org">"Das Internet-Archiv"</a> </li>
	</ul>
<hr>
	<h2>Was zum Schmökern</h2>
	<h3>Literatur pur!</h3>
	<ul style="list-style-type:none; color:MediumSeaGreen">
	  <li><a href="https://www.gutenberg.org">Das Gutenberg-Projekt</a></li>	
	  <li><a href="http://www.kommdesign.de/buecher/leseprobe.pdf">Design-Infos</a></li>
	  <li><a href="http://www.romijnenstam.nl/dezusjesromijn/plaatjes/gedicht_jante.html">Gedicht voor Jante</a></li>
	</ul>
	<hr>
	<h2>Sachen zum verhökern</h2>
	<h3>Ebay &amp; Konsorten</h3>
	<ul style="list-style-type:none; color:lightblue">
	  <li><a href="https://www.gutenberg.org">Das Gutenberg-Projekt</a></li>	
	  <li><a href="http://www.kommdesign.de/buecher/leseprobe.pdf">Design-Infos</a></li>
	  <li><a href="http://www.romijnenstam.nl/dezusjesromijn/plaatjes/gedicht_jante.html">Gedicht voor Jante</a></li>
	</ul>
	<hr>
	<h3>Oder hier im Web-Shop</h3>
	<ul style="list-style-type:none; color:lightblue">
	  <li><a href="https://p533643767.profiseller.de/shop/mein-shop.html">1und1-Webshop</a></li>	
	</ul>
	<hr>
	<h2>Final Links</h2>
	<h3>Die Highlights</h3>
	<ul style="list-style-type:none; color:black">
  <li>http://www.w3school.com</li>
  <li>http://selfhtml.org/</li>
  <li>http://www.mediaevent.de</li>
</ul>
	<hr>
	<p title="siehe Tastatur"> Speichern Sie das Dokument durch Drücken von <kbd>Ctrl + S</kbd> oder <button>klick mich!</button></p>
  </article>
</section>
<!-- footnotes -->
<?php include("footer.php"); ?>
</body>
</html>