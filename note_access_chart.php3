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
		<h3>User Access Level Rights</h3>

	<b>Chart</b><p>

	<table cellpadding=4 border=0 cellspacing=1 bgcolor=#aaaaaa>
	<tr bgcolor=#ddddff>
		<td bgcolor=#ffffff>&nbsp;</td>
		<td>View Bug</td>
		<td>Report Bug</td>
		<td>Update Bug</td>
		<td>Assign Bug</td>
		<td>Resolve Bug</td>
		<td>Close Bug</td>
		<td>Reopen Bug</td>
		<td>Delete Bug</td>
	</tr>
	<tr bgcolor=#ffffff>
		<td bgcolor=#ddddff>Viewer</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#ffbbbb>N</td>
		<td bgcolor=#ffbbbb>N</td>
		<td bgcolor=#ffbbbb>N</td>
		<td bgcolor=#ffbbbb>N</td>
		<td bgcolor=#ffbbbb>N</td>
		<td bgcolor=#ffbbbb>N</td>
		<td bgcolor=#ffbbbb>N</td>
	</tr>
	<tr bgcolor=#ffffff>
		<td bgcolor=#ddddff>Reporter</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#ffbbbb>N</td>
		<td bgcolor=#ffbbbb>N</td>
		<td bgcolor=#ffbbbb>N</td>
		<td bgcolor=#ffbbbb>N</td>
		<td bgcolor=#ffbbbb>N</td>
	</tr>
	<tr bgcolor=#ffffff>
		<td bgcolor=#ddddff>Updater</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#ffbbbb>N</td>
		<td bgcolor=#ffbbbb>N</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#ffbbbb>N</td>
	</tr>
	<tr bgcolor=#ffffff>
		<td bgcolor=#ddddff>Developer</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#ffbbbb>N</td>
	</tr>
	<tr bgcolor=#ffffff>
		<td bgcolor=#ddddff>Manager</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
	</tr>
	<tr bgcolor=#ffffff>
		<td bgcolor=#ddddff>Administrator</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
		<td bgcolor=#bbeebb>Y</td>
	</tr>
	</table>
</td>
</tr>
</table>

</body>
</html>