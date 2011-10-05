<?php
	include( 'config_defaults_inc.php' );
	require_once( 'utils_inc.php' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">  
<head>
	<title>Mantis Bug Tracker<?php if ( isset( $t_sub_title ) ) { echo " | $t_sub_title"; } ?></title>

	<!-- META HTTP-EQUIV -->
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta http-equiv="content-language" content="en-us" />

	<!-- META NAME -->
	<meta name="description" content="MantisBT is a popular free web-based bug tracking system. It is written in PHP works with MySQL, MS SQL, and PostgreSQL databases. MantisBT has been installed on Windows, Linux, Mac OS, OS/2, and others. It is released under the terms of the GNU General Public License (GPL)." />
	<meta name="keywords" content="mantis, mantisbt, bugtracker, bug, tracker, issue, software" />
	<meta name="dc.title" content="Mantis Bug Tracker" />
	<meta name="revisit-after" content="1 days" />
	<!-- STYLES -->
	<link rel="stylesheet" type="text/css" href="css/mantis.css" />
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.mantisbt.org/blog/?feed=rss2" />
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://twitter.com/statuses/user_timeline/7199732.rss" />

	<?php ads_print_head(); ?>
</head>
<body id="mantisbody">

<div id="header">
	<div id="headerInner">
		<div id="logoContainer">
			<div id="logoContainerInner">
				<div id="logo"><a href="/"><img src="images/mantis_logo.gif" alt="Mantis Bug Tracker Logo" border="0" /></a></div>
				<div class="clearLeft"></div>
			</div>
			<div id="menu">
				<table cellpadding="0" cellspacing="0" border="0">
					<tbody>
						<tr>
							<td>
								<ul>
									<li><a href="index.php">Overview</a></li>
									<li><a href="demo/">Demo</a></li>
									<li><a href="documentation.php">Documentation</a></li>
									<li><a href="download.php">Download</a></li>
									<li><a href="bugs/">Bugtracker</a></li>
									<li><a href="blog/">Blog</a></li>
									<li><a href="development.php">Development</a></li>
									<li><a href="support.php">Support</a></li>
									<li><a href="hosting.php">Hosting</a></li>
									<li><a href="sponsors.php">Sponsors</a></li>
									<li><a href="contact_us.php">Contact Us</a></li>
								</ul>
								<div class="clearLeft"></div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div id="site">
