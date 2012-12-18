<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Weihnacht statt Angst: Laut-Bunt-B&auml;rtig</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="language" content="de">
<meta http-equiv="content-language" content="de">
<meta name="language" content="deutsch, de">
<meta name="keywords" content="Angst, Terror, Freude, Freiheit, Demokratie, Weihnachten, Piratenpartei, Hessen, Bürgerrechte, Überwachung">
<meta name="description" content="Keine Angst vor Männern mit Bärten und unbekannten Gepäckstücken!">
<meta name="revisit-after" content="7 days">
<meta name="robots" content="follow, index">
<style type="text/css">
<!--
body {
	margin: 0;
	padding: 0;
	font-family: 'Trebuchet MS', 'Lucida Grande', Verdana, Arial, Sans-Serif;
	font-size: 14px;
}
#terror {
	width: 1126px;
	margin: 0 auto;
}
#demo {
	position: absolute;
	background: url(gfx/demo.jpg);
	top: 420px;
	width: 225px;
	padding-left: 150px;
	height: 354px;
	padding-top: 286px;
	color: #653505;
}
#demo a {
	text-decoration: underline;
	color: #653505;
}
#demo a:hover {
	text-decoration: none;
}
#demo ul {
	margin: 0;
	padding: 0;
}
#demo li {
	list-style-type: none;
}
#demo li.city {
	font-weight: bold;
}
#demo li.spacer {
	margin-top: 10px;
}
#header {
	height: 420px;
	background: url(gfx/header.jpg);
}
#content {
	min-height: 400px;
	background: url(gfx/content.jpg);
	padding-left: 381px;
	padding-right: 193px;
	padding-top: 33px;
}
#content h1 {
	font-size: 21px;
	font-weight: bold;
	color: #CC0000;
	padding: 0;
	margin: 0;
}
#content div.line {
	width: 100%;
	height: 1px;
	padding: 0;
	margin: 0;
	background: url(gfx/line.gif);
}
#footer {
	position: relative;
	height: 43px;
	background: url(gfx/footer.jpg) no-repeat;
	text-align: right;
	padding-right: 160px;
	padding-top: 300px;
}
#footer a {
	color: #086804;
	text-decoration: underline;
	padding-left: 5px;
}
#footer a:hover {
	text-decoration: none;
}
#terrorneindanke {
	position: absolute;
	width: 150px;
	height: 147px;
	top: 50px;
	left: 180px;
}
span.bold {
	font-weight: 800;
}
-->
</style>
<script type="text/javascript" src="http://piraten-mond.de/jmstvab18.js"></script>
<!-- For lightbox -->
<script type="text/javascript" src="/lightbox/js/prototype.js"></script>
<script type="text/javascript" src="/lightbox/js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="/lightbox/js/lightbox.js"></script>
<link rel="stylesheet" href="/lightbox/css/lightbox.css" type="text/css" media="screen" />
</head>
<body>
<div id="terror">
  <div id="demo">
    <ul>
      <li class="city spacer"><a href="http://piratenpad.de/weihnachtsstattangst">Berlin</a>, 14:00 Uhr</li>
      <li>Alexanderplatz/Weltzeituhr</li>
      <li class="city spacer"><a href="http://piratenpad.de/weihnachtsstattangst">Düsseldorf</a>, 15:00 Uhr</li>
      <li>Hauptbahnhof</li>
      <li class="city spacer"><a href="http://kv-frankfurt.piratenpad.de/weihnachtsmannmadness">Frankfurt</a>, 14:00 Uhr</li>
      <li>Zeil (Höhe Liebfrauenstraße)</li>
      <li class="city spacer"><a href="http://piratenpad.de/Weihnachtsmannterroristen">Hamburg</a>, 18:00 Uhr</li>
      <li>Hauptbahnhof</li>
      <li class="city spacer"><a href="http://piraten-rlp.de/index.php/aktuelles/neuigkeiten/311-weihnacht-statt-angst">Koblenz</a>, 13:30 Uhr</li>
      <li>Hauptbahnhof</li>
      <li class="city spacer"><a href="http://wiki.piratenpartei.de/M%C3%BCnchen/Terrorangst">München</a>, 13:30 Uhr</li>
      <li>Bahnhofsplatz</li>
    </ul>
  </div>
  <div id="header"></div>
  <div id="content">
   <table border=0>
   <tr>
<?php

$thumbs = array();
$bilder = array();

$in = glob("bilder/*.JPG");
$c = 0;
foreach ($in as $i) {
	$thumb = "/bilder/thumbs/" . basename($i);
	$bild = "/bilder/" . basename($i);

	if ($c++ % 3 == 0) {
		echo "</tr><tr>";
	}

	echo '<td><a href="'.$bild.'" rel="lightbox[]"><img src="'.$thumb.'" border=0 /></td>';
}

?>
   </tr>
   </table>
  </div>
  <div id="footer">
    <div id="terrorneindanke"><img src="/gfx/terrorneindanke.gif" width="150" height="147" alt=""></div>
    <a href="http://www.piratenpartei-hessen.de/">Piratenpartei</a> <a href="http://www.piratenpartei-hessen.de/impressum">Impressum</a> </div>
</div>
</body>
</html>
