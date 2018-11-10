<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Datenschutz</title>

<style>
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
  <blockquote align="center" cite="https://www.aphorismen.de/">
"Sicher."
</blockquote><br>
<hr>
  <h2 align="center">Schloss für Notebook</h2>
	<h3>Image,</h3>
	<p>
	Aufgabe und Lösungsvorschlag
	</p>
	<hr>
	<h2 align="center">Barrierefreies Netz</h2>
	<h3>Es gibt viele (auflisten)</h3>
	<p>
	<svg width="25" height="25" align="right">
	<polygon points="12.5,1.25 5,24.75 23.75,9.75 1.25,9.75 20,24.75" style="fill:black ;stroke:gray;stroke-width:1.25;fill-rule:evenodd;" />
</svg>
	</p>
	<hr>
	<h2 align="center">Die Lizenzen</h2>
	<h3>Es gibt viele (auflisten)</h3>
	<p>
	hier auflisten
	</p>
	<hr>
	h2 align="center">Verwendete Verschlüsselungssoftware</h2>
	<h3>Es gibt viele (auflisten)</h3>
	<p>
	hier auflisten
	</p>
	<hr>
	<p title="siehe Tastatur">Speichern Sie das Dokument durch Drücken von <kbd>Ctrl + S</kbd></p>
  </article>
</section>
<!-- why? -->
<?php include("footer.php"); ?>
</body>
</html>