<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>HelloWorld</title>
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
  <blockquote cite="...">
"Noch niemals zuvor traf mich so plötzlich der süßen Liebe Strahl und Wort-Ihr Antlitz glich der Blume, so lieblich, und trug mein Herz ganz mit sich fort(Nicholas Sparks, Wie ein einziger Tag)."
</blockquote>
 <hr>
    <h2>Farben</h2>
	<h3>Vier gewinnt!</h3>
    <p style="font-size:50px;"></p> 
	<p style="color:tomato">4 Jahreszeiten</p>
	<pre>
   My Bonnie lies over the ocean.

   My Bonnie lies over the sea.

   My Bonnie lies over the ocean.
   
   Oh, bring back my Bonnie to me.
	</pre>
	<p>
	<ol>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol></p> 
	<hr>
	<p title="siehe Tastatur"> Speichern Sie das Dokument durch Drücken von <kbd>Ctrl + S</kbd> oder <button>klick mich!</button></p>
  </article>
</section>
<!-- footnotes -->
<?php include("footer.php"); ?>
</body>
</html>