<?php include( "top.php" ); ?>

<span class="page_title">ChangeLog</span>
<hr size=1 noshade width="100%">
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

<td style="padding: 4px;">
<?php include( "adsense_vertical_inc.php" ); ?>
</td>

<?php include( "bot.php" ); ?>