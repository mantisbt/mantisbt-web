<html>
<head>
<? include( "css.php3" ) ?>
<title>Mantis</title>
</head>
<body bgcolor=#ffffff>

<p>
<div align=center>
	<h2>Mantis</h2>
	Last modified: <? echo date( "M d, Y - H:m", getlastmod() )?>
</div>

<p>
<div align=center>

<table width=100%>
<tr valign=top>
	<? include("side_menu.php3") ?>
<td width=100%>
<b><font size=+1>Phorum Integration</font></b>
<p>
The <a href="HOWTO-mantis-phorum">phorum HOWTO</a> illustrates how you can modify Mantis to integrate a simple forum package.
<p>
<b><font size=+1>Screenshots</font></b>
<p>
<li><a href="images/phorum1.gif">view phorum</a> - <? echo round(filesize("images/phorum1.gif") / 1024) ?> KB - bits blurred to protect the innocent (yeah, right!)
<p>
<a href="http://www.phorum.org/">Obtain Phorum here</a>
</td>
</tr>
</table>

</body>
</html>