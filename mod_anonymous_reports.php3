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
<b><font size=+1>Anonymous Reporting</font></b>
<p>
The <a href="HOWTO-anonymous-report">anonymous reporting HOWTO</a> illustrates how you can modify Mantis to allow for one-way bug reporting.  This is for developers who do not wish for bugs to be viewable to the public but want public feedback.
<p>
<b><font size=+1>Files</font></b>
<p>
<a href="mods/anonymous_report.tar.gz">Obtain the anonymous reporting files</a>
</td>
</tr>
</table>

</body>
</html>