<?php include( "top.php" ); ?>
<?php
	function print_lang( $p_language ) {
		global $g_mantis_path, $g_lang_cvs_path;

		# generate path to release version of the lang strings
		$g_release_lang_path = $g_mantis_path.'lang/';

		$t_release_file_name = $g_release_lang_path.'strings_'.strtolower( $p_language ).".txt";
		$t_cvs_file_name = $g_lang_cvs_path.'strings_'.strtolower( $p_language ).".txt";

		PRINT "<tr bgcolor=#ffffff>";
			PRINT "<td>";
				echo $p_language;
			PRINT "</td>";
			PRINT "<td>";
				PRINT '<a href="'.$t_release_file_name.'">[view]</a> ';
				if ( file_exists( $t_release_file_name ) ) {
					echo date( "M d, Y", filemtime( $t_release_file_name ) );
				} else {
					echo '-';
				}
			PRINT "<td>";
				PRINT '<a href="'.$t_cvs_file_name.'">[view]</a> ';
				if ( file_exists( $t_cvs_file_name ) ) {
					echo date( "M d, Y", filemtime( $t_cvs_file_name ) );
				} else {
					echo '-';
				}
			PRINT "</td>";
			PRINT "<td>";
				$t_lang = strtolower($p_language);
				#PRINT "<a href=\"local_diff.php?f_lang=$t_lang\">view diff</a>";
			PRINT "</td>";

		PRINT "</tr>";
	}
?>

<span class="page_title">Localization</span>
<hr size="1" noshade="noshade" width="100%">
<p>
Here you can see the latest localization files.
<p>
What to do if you see some errors?  Just <a href="mailto:mantisbt-lang@lists.sourceforge.net">send an email</a> with the corrected strings.
<p>

<div align=left>
<table width="100%" cellpadding="5" cellspacing="1" bgcolor="#ffffff">
<tr bgcolor=#ffffff>
	<td>
		<b>Language</b>
	</td>
	<td>
		<b>Release Date</b>
	</td>
	<td>
		<b>CVS Date</b>
	</td>
	<td>
		&nbsp;
	</td>
</tr>
<?php
	print_lang( "English" );
	print_lang( "Chinese_Traditional" );
	print_lang( "Chinese_Simplified" );
	print_lang( "Croatian" );
	print_lang( "Czech" );
	print_lang( "Danish" );
	print_lang( "Dutch" );
	print_lang( "Estonian" );
	print_lang( "French" );
	print_lang( "Finnish" );
	print_lang( "German" );
	print_lang( "Hungarian" );
	print_lang( "Italian" );
	print_lang( "Japanese_EUC" );
	print_lang( "Japanese_SJIS" );
	print_lang( "Korean" );
	print_lang( "Latvian" );
	print_lang( "Lithuanian" );
	print_lang( "Norwegian" );
	print_lang( "Polish" );
	print_lang( "Portuguese_Brazil" );
	print_lang( "Portuguese_Standard" );
	print_lang( "Romanian" );
	print_lang( "Russian" );
	print_lang( "Russian_KOI8" );
	print_lang( "Serbian" );
	print_lang( "Slovak" );
	print_lang( "Spanish" );
	print_lang( "Swedish" );
	print_lang( "Turkish" );
?>
</table>
</div>

<p>
<span class="section">Translating</span>
<p>
Don't see your language?  Translate one of the files!  Just take the strings file, translate, and <a href="mailto:mantisbt-lang@lists.sourceforge.net">submit here</a>.
<p>
Note: You cannot submit ZIP files through sourceforge.  However, you can just append another extension and send it.  eg. <i>strings_mylang.zip.remove</i>
<p>
<span class="section">Updating</span>
<p>
Also, you can update when new strings make it in.  Just click on the "view diff" link to see what strings might need translating and make the changes.
<p>

<?php include( "bot.php" ); ?>