<html>
<head>
<? include( "css.php3" ) ?>
<title>Mantis</title>
</head>
<body>

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
<p>
<b><font size=+1>Requirements</font></b>
<p>
<li><a href="http://www.php.net/">php</a> 3.0.13 and higher (this might drop back down to 3.0.7)
<li><a href="http://www.mysql.com/">MySQL database</a> (more support is planned)
<li>Web server (<a href="http://www.apache.org/">apache</a>, IIS, etc.)
<p>
Additionally you will need to know basic administration of MySQL (login, create new database, run a SQL query).  The webserver needs to be configured to handle php files at a minimum.
<p>
It also helps a great deal to at least be able to tinker with php scripts (when there's a little bug or you want to tweak something).  Of course, knowing HTML is essential to do any custom formatting.  Along the lines of appearance, I have tried to use my best judgement in colors, layout, and feel.  Eventually I hope to be able to customize the look and feel from a single CSS file.
<p>
I highly recommend using <a href="http://www.phpwizard.net">phpMyAdmin</a> to administer your mysql database.
</td>
</tr>
</table>

</body>
</html>