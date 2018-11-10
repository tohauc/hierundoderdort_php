<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Med</title>
<!-- <link rel="stylesheet" href="stylesheet.css">  funktioniert nicht wie erwartet, genauer: der Schatten-Effekt oben rechts nicht vorhanden-->
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
  <a href="./media/profil.jpg" style="float:left; align="left" download>
		<img src="./media/profil.jpg" alt="profil" width="70" height="70" class="border">
		&nbsp;
		</a>
  <blockquote cite="https://www.aphorismen.de/zitat/69835">
"Bittere Pillen muss man in Zucker hüllen"<br>[Droge Arzt]
</blockquote><br>
<hr>
	<h3 title=" ">Dementia Digitalis</h3>
	<p>Die Beschreibung? Hab ich vergessen.</p>
	<hr>
    <h2 title="Div,Div,Div,...">Divillis</h2>
	<h3>Div,Div,Div</h3>
	<p>Beschreibung</p>
	<hr>
	<h2>Tafelblindheit</h2>
	<h3 title="Autsch!">...ein Schritt zuviel,ZACK, Brett vor dem Kopf!</h3>
	<p>Beschreibung</p>
	<hr>
	<h2 title="Klick,Klick,Klick,...">Klickeritis</h2>
	<h3>Klick,Klick,Klick</h3>
	<p>Beschreibung</p>
	<hr>
	<h2 title="Tropf,Tropf,Topf">Gegenmaßnahmen</h2>
	<h3>...Tropfen abzählen</h3><!--Tooltip Tropfen-->
	<p>Beschreibung
	<ul style="list-style-type:none">
		<li>Muckefuck-Ersatz</li> <!--Coffee-->
		<li>Gr&uumlner Tee </li>  <!--Green Tea -->
		<li>Malzbier</li>         <!--NoBeer-->
		</ul></p>
	<h3>...strenges Fasten ist angesagt</h3><!--Tooltip Tropfen-->
	<p>ueben Sie den Verzicht von	
	<ul style="list-style-type:none">	
		<li>Kabelsalat</li>
		<li>Buchstabensuppe</li>
	</ul></p>
	<hr>
	<h2>folgender Kurs wirkt sich besonders positiv auf die Genesung aus</h2>
	<p>Malen nach Zahlen!</p>
	<hr>
	<h2>Warnhinweis</h2>
    <p>Bei ... und Nebenwirkungen fragen Sie ...</p>
	<p title="siehe Tastatur"> Speichern Sie das Dokument durch Drücken von <kbd>Ctrl + S</kbd> oder <button>klick mich!</button></p>
  </article>
</section>
<!-- footnotes -->
<?php include("footer.php"); ?>
</body>
</html>