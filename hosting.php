<?php
	$t_sub_title = "MantisBT Hosting";

	include( "top.php" );
?>

<h4>MantisBT Hosting</h4>

<p>
	For companies that don't already have the infrastructure and expertise required to install MantisBT and the tools it requires or they don't want their staff spending time on maintaining such infrastructure, a hosted environment is an ideal solution.  Use the links below to setup a hosting account to use for MantisBT.  You can also <a href="contact_us.php">contact us</a> to request the installation of MantisBT for a discounted fee of US$<?php echo $g_setup_fee; ?>.  This discounted rate is only available for users who have setup a hosting account through the links in this page.</p>

<table border="0" cellspacing="0" cellpadding="10">

@include( 'sponsors/hosts.php' );

</table>

<br />

<h4>Hosting Feedback</h4>

<p>We're committed to helping create a wholesome and hassle-free MantisBT hosting environment. If you feel there are issues with one of the hosts listed here, please send a note.</p>

<?php
	$t_footer_sponsored_links = '';
	include("bot.php");
?>
