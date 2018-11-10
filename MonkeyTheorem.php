<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>MonkeyTheorem</title>

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
<!-- This is a comment -->
<section>
<?php include("navi.php"); ?>
  <!-- This is a comment too-->
  <article>
	<blockquote cite="https://www.aphorismen.de">
"Doch alle Lust will Ewigkeit — will tiefe, tiefe Ewigkeit (Friedrich Wilhelm Nietzsche)!"
</blockquote>
<hr>
	<p><a href="#C4">Jump to Chapter 4</a></p>

	<h2>Chapter 1</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 2</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 3</h2>
	<p>This chapter explains ba bla bla</p>

	<h2 id="C4">Chapter 4</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 5</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 6</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 7</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 8</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 9</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 10</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 11</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 12</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 13</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 14</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 15</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 16</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 17</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 18</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 19</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 20</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 21</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 22</h2>
	<p>This chapter explains ba bla bla</p>

	<h2>Chapter 23</h2>
	<p>This chapter explains ba bla bla</p>
	<h2>Chapter 24</h2>
	<p>This chapter explains ba bla bla</p>
	<hr>
	<p title="siehe Tastatur"> Speichern Sie das Dokument durch Drücken von <kbd>Ctrl + S</kbd> oder <button>klick mich!</button></p>
  </article>
</section>
<!-- why? -->
<?php include("footer.php"); ?>
</body>
</html>