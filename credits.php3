<? include( "top.php3" ); ?>

<span class="page_title">Credits</span>
<hr size=1 noshade width="100%">
<p>
	<ul>
	<b>Main</b><p>
<?
	$file = file("mantis/doc/CREDITS");
	$count = count($file);
	for ($i=7;$i<$count;$i++) {
		$file[$i] = trim( $file[$i] );
		if ( $file[$i] == "CREDITS" ) {
			continue;
		}
		if ( strpos( $file[$i], ":" ) > 0 ) {
			echo "<p><b>".$file[$i]."</b><p>";
		} else if ( !empty( $file[$i] ) ) {
			echo "<li>".$file[$i]."<br>";
		} else {
			echo $file[$i]."";
		}
	}
?>
	</ul>
<? include( "bot.php3" ); ?>