<?
	$g_mantis_version = "";
	if ( file_exists( "/home/groups/mantisbt/htdocs/mantis/config_inc.php" ) ) {
		include( "/home/groups/mantisbt/htdocs/mantis/config_inc.php" );
	}

	function print_lang( $p_language, $p_version, $p_state ) {
		global $g_mantis_version;

		$t_file_name = "mantis/strings_".strtolower( $p_language ).".txt";

		PRINT "<tr bgcolor=#ffffff>";
			PRINT "<td>";
				echo $p_language;
			PRINT "</td>";
			PRINT "<td>";
				if ( $p_version=="latest" ) {
					echo $g_mantis_version;
				} else {
					echo $p_version;
				}
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
			PRINT "<td>";
				$t_lang = strtolower($p_language);
				PRINT "<a href=\"local_diff.php3?f_lang=$t_lang\">view diff</a>";
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
What to do if you see some errors?  Just <a href="mailto:kenito@300baud.org">send me an email</a> with the corrected strings.
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
		<b>Date Updated</b>
	</td>
	<td>
		&nbsp;
	</td>
</tr>
<?
	print_lang( "English",     "latest",  "active" );
	print_lang( "Dutch",       "latest",  "active" );
	print_lang( "French",      "latest",  "active" );
	print_lang( "German",      "latest",  "active" );
	print_lang( "Italian",     "latest",  "active" );
	print_lang( "Korean",      "0.14.8 (separate)",  "active" );
	print_lang( "Norwegian",   "latest",  "active" );
	print_lang( "Spanish",     "latest",  "active" );
	print_lang( "Portuguese",  "latest",  "active" );
	print_lang( "Turkish",     "0.14.8 (separate)",  "active" );
?>
</table>

</div>

<p>
<b><font size=+1>Translating</font></b>
<p>
Don't see your language?  Translate one of the files!  It's really quite simple.  Just take the strings file and convert away.  Then <a href="mailto:kenito@300baud.org">submit it</a> back to me.  Also, you can update them when new strings make it in.  The file won't change drastically so it shouldn't be too much work to keep the files updated.
<p>
Currently some strings are hard-coded into the database tables or the code.  This will be fixed soon.
</td>
</tr>
</table>

</body>
</html>