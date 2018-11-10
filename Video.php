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
  <article>
  <a href="./media/profil.jpg" style="float:left; align="left" download>
		<img src="./media/profil.jpg" alt="profil" width="70" height="70" class="border">
		&nbsp;
		</a>
  <blockquote cite="http://zitate.net/zitat?id=1046">
"What You See Is What You Get - WYSIWYG"<br>
[HTML]
</blockquote>
<br>
<hr>
    <h2 style="text-align:center;">Film ab!</h2>
	<h3>Charlie chaplin</h3>
	<h2 style="color:white;">Ein Schwarzweißfilm</h2>
	<p style="color:black;"> <iframe width="560" height="315" src="./media/animation/CharlieChaplin.GIF" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
	<hr>
	<h3 style="text-align:center;">Paul Watzlawick</h3>
    <p style="text-align:center;"><iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/FV4vpqwvBMw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
	<hr>
	<h3 style="text-align:center;">Jannin Bonnin</h3>
	<p style="text-align:center;"><iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/1v5zhnT9gTs?list=RD1v5zhnT9gTs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
	<hr>
	<h3 style="text-align:center;">Das Millionenspiel</h3>
	<p style="text-align:center;"><iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/OXA2tzmRuno" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
	<hr>
	<p title="siehe Tastatur"> Speichern Sie das Dokument durch Drücken von <kbd>Ctrl + S</kbd> oder <button>klick mich!</button></p>
  </article>
</section>
<!-- footnotes -->
<?php include("footer.php"); ?>
</body>
</html>
