<html>
<head>
<style>
body { background-color:#ffffff; font-family:Verdana, Arial; font-size=10pt }
td {  font-family:Verdana, Arial; font-size=10pt }
p {  font-family:Verdana, Arial; font-size=10pt }
</style>
<title>Mantis</title>
</head>
<body>

<p>
<div align=center>
<h2>Mantis</h2>
</div>

<p>
<div align=center>

<table width=100%>
<tr valign=top>
	<? include("side_menu.php3") ?>
<td>
<p>
<b><font size=+1>Database Schema</font></b>
<p>
This is a basic view of the database schema used in Mantis.  In my defense it was my first try at a decently sized project and the project has grown out of its original design.  It should and will be re-normalized 'soon'.  The schemas are a bit rough right now.  I should add indicators for index, primary keys, 'foreign keys' (mysql doesn't support these, you have to fake them), unique fields, and relationships (1 to 1, 1 to many, etc).
<p>
<ul>
<li><a href="images/mantis-0.14.0.gif">version 0.14.1</a> <? echo round(filesize("images/mantis-0.14.0.gif") / 1024) ?>KB
<li><a href="images/mantis-0.13.0.gif">version 0.9.0 to 0.13.1</a> <? echo round(filesize("images/mantis-0.13.0.gif") / 1024) ?>KB
</ul>
<p>
Any database experts who'd like to offer their insights can email me.
</td>
</tr>
</table>

<p>
<div align=right>
<a href="http://sourceforge.net"> <IMG src="http://sourceforge.net/sflogo.php?group_id=14963" width="88" height="31" border="0" alt="SourceForge Logo"></A>
</div>

</body>
</html>