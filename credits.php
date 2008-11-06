<?php
	$t_sub_title = "Credits";

	include( "top.php" );
?>

<span class="page_title">Credits</span>
<hr size="1" noshade="noshade" width="100%" />
<p />
<ul>
<?php
        $file = file( "files/CREDITS");
        $count = count($file);
        $state = 0;
        for ($i=8;$i<$count;$i++) {
                $file[$i] = trim( $file[$i] );
                if ( $file[$i] == "CREDITS" ) {
                        continue;
                } else if ($state == 1) {
                        echo "</ul><p><b>".$file[$i]."</b><p><ul>";
                        $state = 2;
                } else if (ereg('^-+$', $file[$i])) {
                } else if ( !empty( $file[$i] ) ) {
                        echo '<li>' . $file[$i] . '</li>';
                        $state = 0;
                } else if ($state == 0) {
                        $state = 1;
                }
        }
?>
</ul>

<?php
	include( 'adsense_vertical_inc.php' ); 

	$t_footer_sponsored_links = '
	';

	include( "bot.php" ); 
?>
