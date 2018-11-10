<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Uhr</title>
<script type="text/javascript">
	var para=44;																	//globale Variable
	var clickonce=0;
		function get2DContext(canvasID) 
		{
			return document.getElementById(canvasID).getContext("2d");
		}
																					//Beginn Uhr zeichnen
		function zeichne(para) 
		{
			var x,y;
			x=1.75;y=0;
			var ctx = get2DContext("canID");
																					//Hintergrundfarbe grau setzen
			ctx.fillStyle = "#ddd";
																					//Festlegung der Fenstergroesse 
			var B = document.getElementById("canID").getAttribute("width");
			var H = document.getElementById("canID").getAttribute("height");
																					//ctx.translate(50+x*100,15+y*100); //Bewege das CANVAS-Element innerhalb des Fensters
																					//Durchmesser im Verhaeltnis zur Canvas-Abmessung
			var faktor = 0.5;
			var durchmesser = Math.max(B,H) * faktor; 								//Bedingung erfuellt
			var radius = durchmesser * 0.5; 
			ctx.lineWidth = 1; 														// Pixel
																					//Deklaration der x,y-Koordinaten
			var x = B * 0.1;
			var y = H * 0.1;
																					//Funktion fuellt das Rechteck
			ctx.fillRect(x , y, B * 0.8, H * 0.8 );
			ctx.beginPath(); 														// 1. Pfad: Kreisflaeche der Uhr zeichnen
				ctx.fillStyle = "#fff"; 											//Farbe: weiss
				x = B/2;
				y = H/2;	
				var phiStart = 0;
				var phiEnde = 2 * Math.PI; 											// Bogenmaß
				var mathPositiv = true;
				ctx.arc(x, y, radius, phiStart, phiEnde, mathPositiv);
				ctx.fill();	
			ctx.closePath();
			ctx.beginPath(); 														// 2. Pfad: Minutenlinien der Uhr zeichnen
				ctx.strokeStyle = "#000";
																					//Variablen fuer Winkel, Innenradien, Aussenradius
				var alpha = Math.PI/30;
				var c = 0.75 * radius;
				var d = 0.95 * radius;
																					//for schleife zum Erstellen der Zeigerlinien
					for (var i = 0; i < 60; i++)
					{
																					//if-Anweisung um Linienlaenge und Staerke zu variieren	
						if(i % 5)
						{
							ctx.lineWidth = 7.5; 									// Pixel
							c = 0.85 * radius;
						}
						else 
						{
							c = 0.75 * radius;
							ctx.lineWidth = 5; 										//Warum geht das nicht?
						}
						x = B/2 + Math.cos(alpha * i) * c;
						y = H/2 + Math.sin(alpha * i) * c;
						ctx.moveTo(x,y); 											//gehe zu Punkt (x,y)
						x = B/2 + Math.cos(alpha * i) * d;
						y = H/2 + Math.sin(alpha * i) * d;
						ctx.lineTo(x,y); 											//zeichne die Linie
					}
				ctx.stroke();
			ctx.closePath();
			
			ctx.beginPath(); 														// 3. Pfad: Sekundenzeiger
				ctx.strokeStyle = "#f00";
				ctx.lineWidth = 5; 													// Pixel	
				x = B/2 + Math.cos(alpha  * (para -30)) * 0.4 * c;
				y = H/2 + Math.sin(alpha  * (para-30 )) * 0.4* c;
				ctx.moveTo(x,y); 													//gehe zu Punkt (x,y)
				x = B/2 + Math.cos(alpha * para) * 0.9 * c;
				y = H/2 + Math.sin(alpha * para) * 0.9 * c;
				ctx.lineTo(x,y); 													//zeichne die Linie
				ctx.moveTo(x,y); 													//gehe zu Punkt (x,y)
				ctx.fillStyle = "#f00";
				var phiStart = 0;
				var phiEnde = 2 * Math.PI; 											// Bogenmaß
				var mathPositiv = true;
				radius = 0.1 * c;
				ctx.arc(x, y, radius, phiStart, phiEnde, mathPositiv);
				ctx.fill();							
				ctx.stroke();
			ctx.closePath();
		}																			//Ende Uhr zeichnen
		
		window.onload = function()													//onload wird gebraucht, um das Script zu starten, wenn 
		{																			//die Seite vollstaendig geladen ist.
			return zeichne(para+1);
		};
																					//start-function definieren
		function Start(){
			clickonce=clickonce+1;													//if-Anweisung verhindert Beschleunigung des Sekundenzeigers
			if(clickonce<=1){
				window.onload = function(){zeichne(++para);};
				aktiv=window.setInterval(window.onload,1000);
				}
		}
		function Stop(){
			window.clearInterval(aktiv,1000); 
			clickonce=0;
			window.onload = function(){return zeichne(para);};
		}
		function Reset(){
			para=44;
			window.onload = function(){return zeichne(para);};
		}
	</script>
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
		<br>
  <blockquote cite="http://zitate.net/zitat?id=1046">
"Carpe tempum (unbekannt)."
</blockquote><br>
<hr>
    <h2 align="center">Die Stopuhr</h1>
	<h3>TicTacTicTac...</h3>
    <p>
	<div align="center">
	<canvas id="canID" width="800" height="600" >Kein canvas!</canvas>				<!-- hier wird das Canvas-Element erzeugt -->
</div>
<div align="center">
	<input type="button" value="Start" onclick="Start()">
	<input type="button" value="Stop"  onclick="Stop()">
	<input type="button" value="Reset" onclick="Reset()">
</div>
	</p>
	<hr>
	<p title="siehe Tastatur"> Speichern Sie das Dokument durch Drücken von <kbd>Ctrl + S</kbd> oder <button>klick mich!</button></p>
  </article>
</section>
<!-- why? -->
<?php include("footer.php"); ?>
</body>
</html>