<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Suche</title>

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
}
</style>
</head>
<body>
<?php include("header.php"); ?>
<section>
<?php include("navi.php"); ?>
  <!-- This is a comment too-->
  <article>
  <blockquote align="center" cite="https://www.aphorismen.de/">
"Unser Suchen kann kein Ende finden. Unser Ziel ist in der anderen Welt (Michel de Montaigne )."
</blockquote>
<hr>
	<h2 align="center">Die Suche im Netz</h2>
	<h3>Die Maschinen</h3>
	<p>
		<ol>
			<li>
			<a href="http://www.google.de/" title="Platz 1">Die Suche mit Google</a>
			</li>
			<li>
			<a href="http://www.yahoo.de/" title="blablabla">Yahoo!</a>
			</li>
			<li id="bingLiID">
				<a href="http://www.bing.de/" title="blablabla">Bing</a>
			</li>
			<li id="bingLiID">
				<a href="http://www.ecosia.com/" title="Die ökologische Suchmaschine">Ecosia</a>
			</li>
			<li>
				<a href="http://www.startpage.com" title="Die diskreteste Suchmaschine der Welt">startpage</a>
			</li>
		</ol>
	</p>
	<hr>
	<h3>Die Suchtechnologie</h3>
	<p>
	<hr>
	<h3>Die Seitengewichtung (pagerank)</h3>
	<p>
	<hr>
	<svg width="25" height="25" align="right"><polygon points="12.5,1.25 5,24.75 23.75,9.75 1.25,9.75 20,24.75" style="fill:black ;stroke:gray;stroke-width:1.25;fill-rule:evenodd;" />
</svg>
	</p>
	<hr>
	<p title="siehe Tastatur"> Speichern Sie das Dokument durch Drücken von <kbd>Ctrl + S</kbd> oder <button>klick mich!</button></p>
  </article>
</section>
<!-- why? -->
<?php include("footer.php"); ?>
</body>
</html>