<?
	function print_lang( $p_language, $p_version, $p_state ) {
		$t_file_name = "mantis/strings_".strtolower( $p_language ).".txt";

		PRINT "<tr bgcolor=#ffffff>";
			PRINT "<td>";
				echo $p_language;
			PRINT "</td>";
			PRINT "<td>";
				echo $p_version;
			PRINT "</td>";
			PRINT "<td>";
				if ( file_exists( $t_file_name ) ) {
					echo date( "M d, Y", filemtime( $t_file_name ) );
				}
			PRINT "</td>";
			PRINT "<td>";
				if (( file_exists( $t_file_name ) )&&( $p_state=="active" )) {
					PRINT "<a href=\"$t_file_name\">download</a>";
				} else if ( $p_state=="active" ) {
					PRINT "in progress";
				} else {
					PRINT"&nbsp;";
				}
			PRINT "</td>";

		PRINT "</tr>";
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
</div>

<p>
<div align=center>

<table width=100%>
<tr valign=top>
	<? include("side_menu.php3") ?>
<td>
<p>
<b><font size=+1>Localization</font></b>
<p>
Here you can see the latest localization files.  Some of them are included with a release (as indicated).  Others tend to lag slightly behind the newest releases so if your language isn't supported check back a few days after a big release.
<p>

<div align=center>
<table width=100% cellpadding=5 cellspacing=1 bgcolor=#ffffff>
<tr bgcolor=#ffffff>
	<td>
		<b>Language</b>
	</td>
	<td>
		<b>Version</b>
	</td>
	<td>
		<b>Date Added</b>
	</td>
	<td>
		&nbsp;
	</td>
</tr>
<?
	print_lang( "English",     "0.14.5",  "active" );
	print_lang( "German",      "0.14.5",  "active" );
	print_lang( "Spanish",     "0.14.5",  "active" );
	print_lang( "Portuguese",  "0.14.5",  "active" );
	print_lang( "Italian",     "0.14.6",  "" );
	print_lang( "French",     "0.14.6",  "" );
	print_lang( "Dutch",       "0.14.7",  "" );
?>
</table>

</div>

<p>
<b><font size=+1>Translating</font></b>
<p>
Don't see your language?  Translate one of the files!  It's really quite simple.  Just take the strings file and convert away.  Then submit it back to me.  Also, you can update them when new strings make it in.  The file won't change drastically so it shouldn't be too much work to keep the files updated.
</td>
</tr>
</table>

<p>
<div align=right>
<A href="http://sourceforge.net"> <IMG src="http://sourceforge.net/sflogo.php?group_id=14963" width="88" height="31" border="0" alt="SourceForge Logo"></A>
</div>

</body>
</html>