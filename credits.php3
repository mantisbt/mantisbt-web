<html>
<head>
<style>
body { background-color:#ffffff; font-family:Verdana, Arial; font-size=10pt }
td {  font-family:Verdana, Arial; font-size=10pt }
p {  font-family:Verdana, Arial; font-size=10pt }
</style>
<title>Mantis</title>
</head>
<body bgcolor=#ffffff>

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
<b><font size=+1>Credits</font></b>
<p>
<b>Main</b><p>
<?
	$file = file("mantis/CREDITS");
	$count = count($file);
	for ($i=7;$i<$count;$i++) {
		$file[$i] = trim( $file[$i] );
		if ( strpos( $file[$i], ":" ) > 0 ) {
			echo "<p><b>".$file[$i]."</b><p>";
		} else if ( !empty( $file[$i] ) ) {
			echo "<li>".$file[$i]."<br>";
		} else {
			echo $file[$i]."";
		}
	}
?>
</td>
</tr>
</table>

</body>
</html>