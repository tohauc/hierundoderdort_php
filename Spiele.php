<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Spiele</title>
 <style type="text/css"> </style>
        <script type="text/javascript">
		<!-- easy mode -->
			"use strict";

			//---------------------------------------------------------------------------------- jQuery ???
			function $(id) {
				return document.getElementById(id);
			}

			(function() {
				window.addEventListener("load", start, false);

				function start() {
					var zeilen = 3;
					var spalten = 3;
					var breite = 30;
					var hohe = 30;
					var dauer = 10000;
					var schwierigkeit = 1000;

					// Start-Button wird erstellt
					var startButton = document.createElement("BUTTON");
					var startButtonText = document.createTextNode("Start");
					startButton.appendChild(startButtonText);
					startButton.style.width = ((breite + 2) * spalten) + "px";
					document.body.appendChild(startButton);

					// Spiel-Objekt wird erstellt
					var spiel = new Spiel();

					// Tabelle-Objekt wird erstellt
					var tabelleObj = new Tabelle(zeilen, spalten, breite, hohe);

					// Hopps-Button wird erstellt
					var xButton = document.createElement("BUTTON");
					xButton.appendChild(document.createTextNode("X"));

					// Ausgabe-Div wird erstellt
					var trefferZahl = document.createElement("DIV");
					trefferZahl.setAttribute("style", "height:15px; width:" + ((breite + 2) * spalten) + "px; text-align: center");
					var text = document.createTextNode("" + spiel.getTreffer());
					//-------------------------------------------------------------------------------------------------- ist "" + intWert gaengige Vorgehensweise???
					trefferZahl.appendChild(text);
					document.body.appendChild(trefferZahl);

					// beim Click auf den xButton wird Trefferzahl um 1 erhoeht
					xButton.onclick = function() {
						spiel.increaseTreffer();
					};
						
					startButton.onclick = function() { //------------------------------------------------------------------------------------- Wieso wird der button beim neuen klick immer schneller?
						// Funktion "interval" wird mit bestimmte Geschwindigkeit ausgerührt
						var interval = setInterval(interval, schwierigkeit);
						// Funktion "timeout" wird nach eine bestimmte Zeit ausgeführt
						var timeout = setTimeout(timeout, dauer);

						// Treffer auf Null setzen
						spiel.setTrefferToZero();

						// Hopps-Button wird einer zufaellige Zeile und Spalte zugewiesen
						function interval() {
							// ------------------------------------------------------------------------------------- zufall ist global, damit man den Hopps-Button entfernen kann???
							this.zufall = "" + parseInt(Math.random() * zeilen) + parseInt(Math.random() * spalten);
							$(zufall).appendChild(xButton);

							trefferZahl.removeChild(text);
							text = document.createTextNode("" + spiel.getTreffer());
							trefferZahl.appendChild(text);
						};

						// Ausfuehrung von der Funktion "interval" wird unterbrochen
						function timeout() {
							clearInterval(interval);
							$(zufall).removeChild(xButton);

							trefferZahl.removeChild(text);
							text = document.createTextNode("" + spiel.getTreffer());
							trefferZahl.appendChild(text);
						};
					};
				}

				function Tabelle(zeilen, spalten, breite, hohe) {
					var tabelle = document.createElement("DIV");
					//-----------------------------------------------------------------------------------------------------Div oder TABLE ??? Aendert sich was???

					for (var i = 0; i < zeilen; i++) {
						var iZeile = document.createElement("tr");

						for (var j = 0; j < spalten; j++) {
							var jSpalte = document.createElement("td");
							jSpalte.setAttribute("style", "width: " + breite + "px; height: " + hohe + "px; border: 2px solid black;");
							jSpalte.setAttribute("id", "" + i + j);
							//---------------------------------------------------------------------------------------------- warum geht nicht border-collapse:collapse; ???
							iZeile.appendChild(jSpalte);
						}

						tabelle.appendChild(iZeile);
					}

					document.body.appendChild(tabelle);
					tabelle.style.borderCollapse = "collapse";
				}

				function Spiel() {
					this.treffer = 0;

					this.setTrefferToZero = function() {
						this.treffer = 0;
					};

					this.increaseTreffer = function() {
						this.treffer++;
					};

					this.getTreffer = function() {
						return this.treffer;
					};
				}

			})();
		<!-- expert-->
        "use strict";
        //init-Function wird nach dem Laden aufgerufen
       	//Es wird ein Game konstruiert, dann ein konstruiertes Objekt X an Game uebergeben 
       	(function()																					//anonyme Fkt. für Namensraum
  		{
  			function $(id)
  			{
  				return document.getElementById(id);
  			}
   			window.addEventListener("load",init, false); 
            function init() 
            {	
                var n=3; 
                var m=4;                 	              
                //Problem Klammersetzung     
            	//erstelle X-Button im Konstruktor
	            function X()
	            {
		            var x_button = document.createElement("INPUT");
		            x_button.setAttribute("type", "button");
		            x_button.setAttribute("value", "X");
		            x_button.setAttribute("id", "XID");
		            
		            return x_button;
				}      
            	var count = 0;   
            	var hold=0;         
        		//erstelle den Start-Button
        		var start_button = document.createElement("INPUT");
	            start_button.setAttribute("type", "button");
	            start_button.setAttribute("value", "Start");
	            start_button.setAttribute("id", "startID");
	            start_button.style.align="center";
	            document.body.appendChild(start_button);
	            //klick auf start, intervall beginnt und endet dann nach 10 sec.
	            if(hold <= 0)
	            {
	            	console.log(hold);
					$("startID").addEventListener("click",start,false);
	            }
	            
	            var matrix=new Matrix(n,m);													//Konstruktor erstellt ein Game mit 3*3 Feldern
	            var x_node=new X();															//Konstruktor erstellt ein X  
	            //funktion startet das Spiel
	            function start() 
	            {
	            	count=0;
	            	$("trefferID").setAttribute("value", count);
	            	console.log("in start");
	            	var zeile;
	            	var spalte;
	            	var stelle_x;
	                
	            	function setze_x()                                    					//bei klick auf x-button, counter erhoehen
	            	{
	            		//Zufallszahlen fuer Zeilen und Spalten
	                	zeile = parseInt(Math.random() * n);
	                	zeile++;
	                	spalte = parseInt(Math.random() * n);
	                	spalte++;
	                	stelle_x="" + zeile + spalte;
	            		console.log("in setzex");
		                $(stelle_x).appendChild(x_node);
		                $("XID").onclick= function ()									//wenn Klick auf x-button erfolgt ist zaehle counter hoch 
		                {
		                    console.log("count erhoehen!");
		                    $("trefferID").setAttribute("value", ++count);
		                };
	            	}
	            	
	                var maximum = 10000;
	                window.clearInterval(aktiv1, 500);
	            	var aktiv0 = function(){window.clearInterval(aktiv1, 500);$(stelle_x).removeChild(x_node);};
	                var aktiv1 = window.setInterval(setze_x, 500);
	                var aktiv2 = window.setTimeout(aktiv0, maximum);
	            
	            }
	            
	            //erstelle das Feld, in dem die Treffernanzahl gezaehlt wird
	            var treffer_button = document.createElement("INPUT");
	            treffer_button.setAttribute("type", "text");
	            treffer_button.setAttribute("id", "trefferID");
	            treffer_button.setAttribute("size", 1);
	            treffer_button.setAttribute("value", count);
	            document.body.appendChild(treffer_button);
	            
            	//Function Matrix erstellt das Spiel mit n*n Feldern mit x-Button
            	//n Anzahl Zeilen, Spalten
            	function Matrix(n,m) 
            	{
		            //Variablen fuer die Tabelle, Parameter wird ueberwiesen
		            var n_zeilen = n;
		            var m_spalten = m;
		            var zellenhoehe = 25;                                           
		            var zellenbreite = 35;                                          
					
	                var x_zeile=parseInt(Math.random() * n);
	            	x_zeile++;
	                var x_spalte=parseInt(Math.random() * n);
	                x_spalte++;	
	                                                                            //Tabelle erstellen, x-button hinzufuegen
		                                                                            
		            var tbl1 = document.createElement('TABLE');                 //for-Schleifen generieren n*m Tabellenzellen
		            tbl1.setAttribute("id", "TableID");
		            tbl1.style.borderCollapse="collapse";
		            //tbl1.style.borderColor="#000";
		            for (var i = 1; i <= n_zeilen; i++)							//1. Schleife fuer die Zeilen
		            {
		                var tr = document.createElement('TR');
		                for (var j = 1; j <= m_spalten; j++)                    //2. Schleife fuer die Spalten
		                {
		                    var td = document.createElement('TD');
		                    td.setAttribute("width", zellenbreite);             //Breite der Tabellenzelle 
		                    td.setAttribute("height", zellenhoehe);             //Hoehe der Tabellenzelle
		                    td.style.borderStyle="solid";
		                    td.style.borderStyle="#000";
		                    td.setAttribute("id",""+i+j);		
		                    tr.appendChild(td);   
		                }
		                tbl1.appendChild(tr);
	            	}
		            document.body.appendChild(tbl1);
            	}  	
        	}																	//Ende init     	
   		})();
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
  <blockquote cite="...">
"Noch niemals zuvor traf mich so plötzlich der süßen Liebe Strahl und Wort-Ihr Antlitz glich der Blume, so lieblich, und trug mein Herz ganz mit sich fort."
[Nicholas Sparks, Wie ein einziger Tag]
</blockquote>
<br>
<hr>
    <h2>X und Hopps</h2>
	<h3>easy-mode:Werther oder expert-mode:Don Juan</h3>
	<hr>
	<svg width="100" height="100">
  
    <table cellpadding="0" cellspacing="0">
		    <tr>
		      <td align="right">Anzahl Zeilen:</td>
		      <td><input name="zeilen" id="ZID" type="text" size="10" maxlength="10"></td>
		    </tr>
		    <tr>
		      <td align="right">Anzahl Spalten:</td>
		      <td><input name="spalten" id="SID" type="text" size="10" maxlength="10"></td>
		    </tr>
		    <tr>
		      <td align="right">Intervall(ms):</td>
		      <td><input name="intervall" id="IID" type="text" size="10" maxlength="10"></td>
		    </tr>
		    <tr>
		      <td align="right">Spieldauer(s):</td>
		      <td><input name="spieldauer" id="SDID" type="text" size="10" maxlength="10"></td>
		    </tr>
		    <tr>
		      <td align="right">Anzahl Buttons:</td>
		      <td><input name="buttons" id="BID" type="text" size="10" maxlength="10"></td>
		    </tr>
		    <tr>
		      <td align="right">Anzahl Spiele:</td>
		      <td><input name="spiele" id="SpID" type="text" size="10" maxlength="10"></td>
		    </tr>
		  </table>
		  <h2>Pong</h2>
		  h3>einfach versus expert (multi)</h3>
		  <p>Beschreibung</p>
		  <h2>Lotto</h2>
		  <hr>
		  h3>Wie wahrscheinlich ist ein Volltreffer?</h3>
		  <p>Beschreibung Lösungsvorschlag</p>
		  <hr>
		  <h2>Warnhinweis</h2>
		  <p>Spielen macht suechtig!</p>
		  <hr>
	<p title="siehe Tastatur"> Speichern Sie das Dokument durch Drücken von <kbd>Ctrl + S</kbd> oder <button>klick mich!</button></p>
  </article>
</section>
<!-- why? -->
<?php include("footer.php"); ?>
</body>
</html>