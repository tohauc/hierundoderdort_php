<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>InDerWeltSein</title>
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
  <blockquote cite="https://www.carlrogers.de">
"Empathisch zu sein, bedeutet, die Welt durch die Augen der anderen zu sehen und nicht unsere Welt in ihren Augen."<br>[Carl Rogers]
</blockquote><br>
<hr>
	<h2 style="text-align:left;">Der Wert eines Lebens</h2>
	<h3 style="text-align:left;">Oder: Was ist mir wichtig?</h3>
	<p style="text-align:left;">Stellen Sie sich ein Kind vor, das die es umgebende Welt mit leuchtenden Augen betrachtet. Es sieht einen wundersch&ouml;nen und spannenden Ort. Einen Ort, der jedes Leben f&ouml;rdert. Es blickt zu den Erwachsenen auf, die dem Kind als freundlich, lenkend und hilfsbereit erscheinen. Ein Tag ist f&uuml;r das Kind immer hell und abenteuerlich, eine Nacht immer dunkel und unheimlich. Die gelbe, frohe Sonne und der graue, blasse Mond sind seine st&auml;ndigen Begleiter. Stellen Sie sich ein Kind vor, das dieses v&ouml;llige Vertrauen in die Welt setzt, die Sie jeden Tag aufs Neue mitgestalten. Ein Kind, das dieses gewaltige Gef&uuml;hl versp&uuml;rt, gesch&auml;tzt und geliebt zu werden. Einfach, weil es in der Welt ist.</p>
	<p style="text-align:left;">Dieses Kind w&uuml;rde ohne Weiteres die Wunder des Lebens entdecken, die Freude am Erforschen und Lernen ﬁnden, die Sch&ouml;nheit des Verstehens sehen. Mit seinem selbst-gebauten K&auml;scher jagt es kleine, blaue Phantasiewesen. Die sch&uuml;tzenden Engel und strahlenden Sterne sind seine besten Freunde.</p>
	<p style="text-align:left;">Stellen Sie sich dieses Kind bitte einmal genau vor Ihrem geistigen Auge vor. Und auch, wie Sie es dazu ermutigen, mit jedem neuen Erwachen einen kleinen aber kreativen Schritt in seinem Werden zu tun. Wie Sie dem Kind helfen, sich jene faszinierende Welt zu erschlie&szlig;en, in der es lebt. Wie es auf das unbekannte Neuland reagiert, ob mit m&auml;chtigem Mut oder mit wachsendem Zweifel. Wie es sich bem&uuml;ht, ein schwieriges Problem anzugehen, ob zaghaften oder wollenden, entschlossenen Schrittes. Wie es stets bereit ist, seine Hand zu reichen, um einem Mitmenschen zu helfen.</p>
	<p style="text-align:left;">Stellen Sie es sich bitte vor, dieses kleine Wesen.</p>
	<p style="text-align:left;">Sehen Sie es?</p>
	<p style="text-align:left;">Diesen kleinen stolzierenden Weltenbummler und Sternenbewunderer.</p>
	<p style="text-align:left;">Sehen Sie es?</p>
	<p style="text-align:left;">Und jetzt stellen sie sich einmal vor, dieses Kind w&auml;ren Sie.</p>
	<p style="text-align:left;">Nun, was w&uuml;rden Sie dem Kind beibringen &uuml;ber diese achso tolle Welt, in der wir heute leben? In der der menschliche Fortschritt der Geschwindigkeit der Maschinen immer mehr hinterherhinkt? In dem das Hier und Jetzt einer Sternschnuppe gleicht, die kaum erblickt, schon wieder erloschen ist?</p>
	<p style="text-align:left;">Jede Sekunde leben wir in einem neuen und einzigartigen Moment des Universums. In einem Moment, der nie vorher war und nie wieder sein wird.</p>
	<p style="text-align:left;">Sie k&ouml;nnen versuchen, ihm die Entstehung des Weltalls mit dem Urknall zu begr&uuml;nden. Sie k&ouml;nnen dem Kind beibringen, dass nicht die Welt im Zentrum steht, wie Ptolem&auml;us lehrte. Sondern, dass die Sonne im Zentrum des Sonnensystems steht, wie Kopernikus und Galileo Galilei lehrten.</p>
	<p style="text-align:left;">Sie k&ouml;nnen versuchen, dem Kind zu erkl&auml;ren, dass die leuchtende Sonne etwa 99,9% der gesamten Masse unseres Systems betr&auml;gt und einen Durchmesser von etwa 1,4 Millionen Kilometern besitzt. Dass das Licht der Sonne acht Minuten braucht, bis es unsere Erde erreicht.</p>
	<p style="text-align:left;">Sie k&ouml;nnen dem Kind sagen, dass die Welt mit einer Geschwindigkeit von etwa 30 Kilometer pro Sekunde in elliptischer Bahn um die Sonne kreist. Und dabei eine Rotation um die eigene Achse vollbringt, die im Durchschnitt 23 Stunden, 56 Minuten und 4,10 Sekunden dauert. Und wenn es in der D&auml;mmerung in den Himmel blickt, es dann Millionen von selbstleuchtenden Sternen sieht, die durch die eigene Schwerkraft zusammengehalten werden. Dass das Kind mit der selben Kraft nach einem Sprung zu den Sternen, von denen fast jeder eine Sonne ist, dann wieder mit beiden Beinen auf dem Boden landet. Und jeder Blick in den Himmel ein Blick in die Vergangenheit ist. Dass der lichte Tag die Zeit vom Sonnenaufgang bis zum Sonnenuntergang darstellt, w&auml;hrend die dunkle Nacht die Zeit vom Ende der Abendd&auml;mmerung bis zum Beginn des n&auml;chsten Morgen bedeutet.</p>
	<p style="text-align:left;">Ja, all das k&ouml;nnten Sie ihm sagen.</p>
	<p style="text-align:left;">Aber: K&ouml;nnen Sie dem Kind auch lehren, was es ist? Sie m&uuml;ssen ihm schon sagen: Wei&szlig;t Du eigentlich, was Du f&uuml;r mich bist? Du bist ein Wunder, Du bist einzigartig. In der ganzen weiten Welt gibt es kein zweites Kind, das genauso ist wie Du. In den Millionen von Jahren, die bereits vergangen sind, hat es noch nie ein zweites Kind wie Dich gegeben. Und sieh Dir deinen K&ouml;rper an, wie gutgebaut er ist. Deine Beine, deine Arme, deine ﬂinken Zehen und Finger. Und auch die Art, wie Du dich bewegst, wie Du gehst. Wei&szlig;t Du denn gar nicht, wie sch&ouml;n Du bist? Du k&ouml;nntest ein Shakespeare sein oder Goethe.</p>
	<p style="text-align:left;">Ja, Du bist ein Wunder. Und wenn Du einmal gro&szlig; bist, wie k&ouml;nntest Du, gerade Du, dann jemand Anderem schaden oder weh tun, der so wie Du ein Wunder ist? In dieser Welt, die f&uuml;r dich so faszinierend ist, sehe ich Respektlosigkeit gegen&uuml;ber den Werten des Lebens. Manchmal schaue ich mich um mit einem Gef&uuml;hl von v&ouml;lliger Verzweiﬂung und der Verwirrung, die die Welt heute qu&auml;lt. Dann denk ich an Dich und bin so stolz auf Dich, einfach weil Du da bist.</p>
	<p style="text-align:left;">Es ist einfach sch&ouml;n, dass es Dich gibt.</p>
	<p style="text-align:left;">Nun liegt es auch an Dir, diese Welt zu einem freundlicheren und besseren Ort zu machen. Wir alle m&uuml;ssen daran arbeiten, und dazu geh&ouml;rst auch Du, dass diese eine Welt sich Deiner wert und w&uuml;rdig erweist.</p>
	<hr>
	<address align="left">
		Autor: Tobias Hauch<br> 
		Datum: 8. Oktober 2018<br>
		DE-Harrislee<br>
	</address>
	<hr>
	<p title="Download als PDF-Datei">
	Drücken Sie 
	<a href="pdf/WerteinesLebens.pdf"
   download>hier</a> um das Dokument als PDF-Datei herunterzuladen.</p>
	<p title="siehe Tastatur"> Speichern Sie das komplette HTML-Dokument durch Drücken von <kbd>Ctrl + S</kbd> oder <button>klick mich!</button></p>
  </article>
</section>
<!-- why? -->
<?php include("footer.php"); ?>
</body>
</html>