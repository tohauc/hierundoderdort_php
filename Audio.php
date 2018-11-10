<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Video</title>
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
  <blockquote cite="http://zitate.net/zitat?id=1046">
"Das H&oumlren ist der Ursprung der vern&uumlnftigen Seele, und die Vernunft spricht mit dem Klang, und der Klang ist gleichsam Denken, und das Wort ist gleichsam Werk."<br>
[Hildegard von Bingen]
</blockquote>
<hr>
    <h2 style="text-align:center;">Audio</h2>
	<h3 style="text-align:center;">Ode an die Freude<h3>
	<p><pre>Ode an die Feude, Friedrich von Schiller, Ludwig von Beethoven
O Freunde, nicht diese Töne!
Sondern laßt uns angenehmere anstimmen,
und freudenvollere.
Freude! Freude!
</pre>
</p>
    <p style="text-align:center;">
		<audio controls>
		<source src="./media/odetojoy.ogg" type="audio/ogg">
		<source src="./media/odetojoy.mp3" type="audio/mpeg">
		Your browser does not support the audio element.</audio>
	</p>
	<hr>
	<h2 style="font-family:verdana;">Lyrik zu Ode an die Freude</h2>
	<h3>Strophe 1</h3>
	<p><pre>Freude, schöner Götterfunken
Tochter aus Elysium,
Wir betreten feuertrunken,
Himmlische, dein Heiligtum!
Deine Zauber binden wieder
Was die Mode streng geteilt;
Alle Menschen werden Brüder,
Wo dein sanfter Flügel weilt.</pre></p>

	<h3>Strophe 2</h3>
	<p><pre>Wem der große Wurf gelungen,
Eines Freundes Freund zu sein;
Wer ein holdes Weib errungen,
Mische seinen Jubel ein!
Ja, wer auch nur eine Seele
Sein nennt auf dem Erdenrund!
Und wer's nie gekonnt, der stehle
Weinend sich aus diesem Bund!</pre></p>

	<h3>Strophe 3</h3>
	<p><pre>Freude trinken alle Wesen
An den Brüsten der Natur;
Alle Guten, alle Bösen
Folgen ihrer Rosenspur.
Küße gab sie uns und Reben,
Einen Freund, geprüft im Tod;
Wollust ward dem Wurm gegeben,
Und der Cherub steht vor Gott.</pre></p>

	<h3>Strophe 4</h3>
	<p><pre>Froh, wie seine Sonnen fliegen
Durch des Himmels prächt'gen Plan,
Laufet, Brüder, eure Bahn,
Freudig, wie ein Held zum Siegen.</pre></p>

	<h3>Strophe 5</h3>
	<p><pre>Seid umschlungen, Millionen!
Diesen Kuß der ganzen Welt!
Brüder, über'm Sternenzelt
Muß ein lieber Vater wohnen.
Ihr stürzt nieder, Millionen?
Ahnest du den Schöpfer, Welt?
Such' ihn über'm Sternenzelt!
Über Sternen muß er wohnen.</pre></p>

	<h3>Strophe 6</h3>
	<p><pre>Seid umschlungen, Millionen!
Diesen Kuß der ganzen Welt!
Brüder, über'm Sternenzelt
Muß ein lieber Vater wohnen.
Seid umschlungen,
Diesen Kuß der ganzen Welt!
Freude, schöner Götterfunken
Tochter aus Elysium,
Freude, schöner Götterfunken.</pre></p>
<svg width="25" height="25" align="right"><polygon points="12.5,1.25 5,24.75 23.75,9.75 1.25,9.75 20,24.75" style="fill:black ;stroke:gray;stroke-width:1.25;fill-rule:evenodd;" />
</svg>
	<p>End of lyrics</p>

	<hr>
	<h3 style="text-align:center;">Für Elise<h3>
	<p style="text-align:center;">
		<audio controls>
		<source src="./media/fuerElise.ogg" type="audio/ogg">
		<source src="./media/fuerElise.mp3" type="audio/mpeg">
		Your browser does not support the audio element.</audio>
	</p>
	</p>
	<hr>
	<p>
	Soundcloud <!--my jazz-->
	</p>
	<!-- hush little baby mockingbird--><!-- soundcloud: Klavier wo ist es?-->
	<hr>
	<p title="siehe Tastatur"> Speichern Sie das Dokument durch Drücken von <kbd>Ctrl + S</kbd> oder <button>klick mich!</button></p>
  </article>
</section>
<!-- why? -->
<?php include("footer.php"); ?>
</body>
</html>