# @@@ UNUSED

<?php include( "top.php" ); ?>
<?php
	function print_core_links() {
		global $g_mantis_path;
		$path = $g_mantis_path;

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
			PRINT "<li><A HREF=\"view_source2.php?f_file=$xfile[$tmp]\">$xfile[$tmp]</A>";
			$tmp++;
		}
	}
?>

<span class="page_title">API</span>
<hr size=1 noshade width="100%">
<p>
Click on the links to see a list of the functions in each file.
<p>
<ul>
<?php print_core_links() ?>
</ul>

<?php include( "bot.php" ); ?>