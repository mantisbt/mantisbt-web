<?php
	$t_sub_title = "MantisBT Hosting";

	include( "top.php" );
?>

<h4>MantisBT Hosting</h4>

<p>For a hassle-free MantisBT hosting that is accessible to both internal and external users, it's recommended to get a hosted solution with one of the MantisBT certified hosting partners.  Use the <a href="contact_us.php">contact us</a> form for custom installations requests.</p>

<table border="0" cellspacing="0" cellpadding="10">

<?php @include( 'data/hosts.php' ); ?>

</table>

<br />

<h4>Hosting Feedback</h4>

<p>We're committed to helping create a wholesome and hassle-free MantisBT hosting environment. If you feel there are issues with one of the hosts listed here, please <a href="contact_us.php">contact us</a>.</p>

<?php
	include("bot.php");
