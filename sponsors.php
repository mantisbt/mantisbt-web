<?php
	$t_sub_title = "Sponsors";

	include( "top.php" );
?>

<h4>Partners</h4>

<p>MantisBT team is proud to feature the following companies as partners of our site.  For information on joining our partner group please contact us using the "leave a message" form below.</p>

<table border="0" cellspacing="0" cellpadding="10">

<?php @include ( 'data/sponsors_inc.php' ); ?>

</table>

<?php
	include("bot.php"); 
