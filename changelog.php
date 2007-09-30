<?php
	$t_sub_title = "Changelog";

	include( "top.php" );
?>

<span class="page_title">ChangeLog</span>
<hr size="1" noshade="noshade" width="100%" />
<p>

<pre>
<?php
	$lines = file("files/ChangeLog");
	foreach ( $lines as $line ) {
		$line = wordwrap( $line, 98 );
		echo htmlspecialchars( $line );
	}
?>
</pre>

<?php
	include( 'adsense_vertical_inc.php' ); 

	$t_footer_sponsored_links = '
		<a href="http://www.hosteurope.de/web-hosting-provider/voip.php" title="VoIP" target="_blank">VoIP</a>,
		<a href="http://www.rwe.com/rwe-heizkosten/contracting.html" title="Contracting" target="_blank">Contracting</a>
	';

	include( "bot.php" ); 
?>
