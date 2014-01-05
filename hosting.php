<?php
	$t_sub_title = "MantisBT Hosting";

	include( "top.php" );
?>

<h4>MantisBT Hosting</h4>

<p>For a hassle-free MantisBT hosting that is accessible to both internal and external users, it's recommended to get a hosted solution with one of the MantisBT certified hosting partners.</p>

<table border="0" cellspacing="0" cellpadding="10">

<?php @include( 'data/hosts.php' ); ?>

</table>

<?php
	include("bot.php");
