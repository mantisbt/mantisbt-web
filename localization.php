<?php
	$g_mantis_version = "";

	function print_lang( $p_language, $p_version, $p_state ) {
		global $g_mantis_version;

		$t_file_name = "mantis/lang/strings_".strtolower( $p_language ).".txt";

		PRINT "<tr bgcolor=#ffffff>";
			PRINT "<td>";
				echo $p_language;
			PRINT "</td>";
			PRINT "<td>";
				if ( file_exists( $t_file_name ) ) {
					echo date( "M d, Y", filemtime( $t_file_name ) );
				} else {
					echo '-';
				}
			PRINT "</td>";
			PRINT "<td>";
				$t_lang = strtolower($p_language);
				PRINT "<a href=\"local_diff.php?f_lang=$t_lang\">view diff</a>";
			PRINT "</td>";

		PRINT "</tr>";
	}
?>
<?php include( "top.php" ); ?>

<span class="page_title">Localization</span>
<hr size=1 noshade width="100%">
<p>
Here you can see the latest localization files.
<p>
What to do if you see some errors?  Just <a href="mailto:mantisbt-lang@lists.sourceforge.net">send an email</a> with the corrected strings.
<p>

<div align=left>
<table width=50% cellpadding=5 cellspacing=1 bgcolor=#ffffff>
<tr bgcolor=#ffffff>
	<td>
		<b>Language</b>
	</td>
	<td>
		<b>Updated</b>
	</td>
	<td>
		&nbsp;
	</td>
</tr>
<?php
	print_lang( "English",				"latest",  "active" );
	print_lang( "Chinese_Traditional",	"latest",  "active" );
	print_lang( "Chinese_Simplified",	"latest",  "active" );
	print_lang( "Czech",				"latest",  "active" );
	print_lang( "Danish",				"latest",  "active" );
	print_lang( "Dutch",				"latest",  "active" );
	print_lang( "French",				"latest",  "active" );
	print_lang( "French2",				"latest",  "active" );
	print_lang( "German",				"latest",  "active" );
	print_lang( "Hungarian",			"latest",  "active" );
	print_lang( "Italian",				"latest",  "active" );
	print_lang( "Japanese_EUC",			"latest",  "active" );
	print_lang( "Japanese_SJIS",		"latest",  "active" );
	print_lang( "Korean",				"latest",  "active" );
	print_lang( "Norwegian",			"latest",  "active" );
	print_lang( "Polish",				"latest",  "active" );
	print_lang( "Portuguese_Brazil",	"latest",  "active" );
	print_lang( "Portuguese_Standard",	"latest",  "active" );
	print_lang( "Romanian",				"latest",  "active" );
	print_lang( "Russian",				"latest",  "active" );
	print_lang( "Russian_KOI8",			"latest",  "active" );
	print_lang( "Spanish",				"latest",  "active" );
	print_lang( "Swedish",				"latest",  "active" );
	print_lang( "Turkish",				"latest",  "active" );
?>
</table>
</div>

<p>
<span class="section">Translating</span>
<p>
Don't see your language?  Translate one of the files!  Just take the strings file, translate, and <a href="mailto:mantisbt-lang@lists.sourceforge.net">submit here</a>.
<p>
<span class="section">Updating</span>
<p>
Also, you can update when new strings make it in.  Just click on the "view diff" link to see what strings might need translating and make the changes.
<p>

<?php include( "bot.php" ); ?>