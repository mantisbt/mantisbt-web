<?
	function print_core_links() {
		#$path = "/home/www/mantis/";
		$path = "./../";

		$files = 0;
		$xfile = array();
		$handle = opendir( $path );
		while ( $file = readdir( $handle ) ) {
			if ( strpos( $file, "ore_" ) > 0 ) {
				$xfile[$files] = $file;
				$files++;
			}
		}
		closedir( $handle );

		sort ( $xfile );
		$tmp = 0;
		while ( $tmp < $files ) {
			PRINT "<li><A HREF=\"view_source.php3?f_file=$xfile[$tmp]\">$xfile[$tmp]</A>";
			$tmp++;
		}
	}
?>
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
	Last modified: <? echo date( "M d, Y - H:m", getlastmod() )?>
</div>

<p>
<div align=center>

<table width=100%>
<tr valign=top>
	<? include("side_menu.php3") ?>
	<td>
		<b><font size=+1>API</font></b>
		<p>
		Click on the links to see a list of the functions in each file.
		<p>
		<? print_core_links() ?>
	</td>
</tr>
</table>

</body>
</html>