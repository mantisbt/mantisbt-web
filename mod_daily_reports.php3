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
<b><font size=+1>Daily Reporting</font></b>
<p>
The <a href="HOWTO-daily-reports">daily reporting HOWTO</a> illustrates how you can modify Mantis to allow for simple developer reports.  This can be kept private from other users to keep group members up to date on each other's progress.  This modification is probbaly most useful for small project teams that cannot meet frequently.
<p>
<b><font size=+1>Files</font></b>
<p>
<a href="mods/daily_reports.tar.gz">Obtain the daily reporting files</a>
</td>
</tr>
</table>

</body>
</html>