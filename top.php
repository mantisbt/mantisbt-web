<?php
	include( 'config_defaults_inc.php' );
	require_once( 'utils_inc.php' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">  
<head>
	<link rel="shortcut icon" href="http://www.mantisbt.org/favicon.ico" />
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="description" content="MantisBT is a popular free web-based bug tracking system. It is written in the PHP scripting language and works with MySQL, MS SQL, and PostgreSQL databases and a webserver. MantisBT has been installed on Windows, Linux, Mac OS, OS/2, and others. Almost any web browser should be able to function as a client. It is released under the terms of the GNU General Public License (GPL)." />
	<meta name="keywords" content="mantis, mantisbt, bugtracker, bug, tracker, issue, software" />
	<meta name="dc.title" content="Mantis Bug Tracker" />
	<meta name="revisit-after" content="1 days" />
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.mantisbt.org/bugs/news_rss.php?project_id=1" />
	<title>Mantis Bug Tracker<?php if ( isset( $t_sub_title ) ) { echo " | $t_sub_title"; } ?></title>
	<link rel="stylesheet" type="text/css" href="/mantis.css" />
</head>
<body>

<center><table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
<td align="center">
<div align="center" style="background-color:#FFFFCC; top:0px; position: absolute; left:0px; width: 100%; height: 20px; font-size:12px; padding-top:3px; border-bottom: 2px solid #bebebe;">
<big>.:
<a href="http://www.mantisbt.org/blog/">Blog</a> |
<a href="/manual/">Manual</a> |
<a href="/forums/">Forums</a> |
<a href="/wiki/">Wiki</a> |
<a href="/bugs/">Bug Tracker</a> |
<a href="/demo/">Demo</a> |
<a href="http://www.futureware.biz/mantisconnect/">MantisConnect</a> |
<a href="http://www.futureware.biz/mantiswap/">MantisWAP</a> |
<a href="hosting.php">Hosting</a> |
<a href="sponsors.php">Sponsors</a> |
<a href="directory.php">Users</a> |
<a href="testimonials.php">Testimonials</a> |
<a href="consulting.php">Consulting</a>
:.</big>

</div></td>
</tr>
</table></center>
<br clear="all" />
<br />

<table class="outside" cellpadding="5" cellspacing="0">
<tr class="top">
	<td colspan="3">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr valign="top">
				<td class="top_left">
					<a href="http://www.mantisbt.org/"><img border="0" width="242" height="102" src="images/mantis_logo.gif" alt="Mantis Bug Tracker Logo" /></a>
				</td>
				<td class="top_right">
					<div align="right">
<script type="text/javascript"><!--
google_ad_client = "pub-0025921896787428";
google_ad_width = 468;
google_ad_height = 60;
google_ad_format = "468x60_as";
google_ad_type = "text_image";
google_ad_channel ="9322764039";
google_color_border = "B8B8FF";
google_color_bg = "FFFFFF";
google_color_link = "0000FF";
google_color_text = "000000";
google_color_url = "4080D0";
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
					</div>
				</td>
			</tr>
		</table>
	</td>
</tr>
<tr class="top">
	<td class="middle" colspan="3">
<!-- SiteSearch Google
<form method="get" action="http://www.google.com/custom" target="_top">
<input type="hidden" name="domains" value="mantisbt.org">
<input type="radio" name="sitesearch" value="">
<font size="-1" color="#000000">Web</font>
<input type="radio" name="sitesearch" value="mantisbt.org" checked="checked">
<font size="-1" color="#000000">mantisbt.org</font>
&nbsp;
<input type="text" name="q" size="25" maxlength="255" value="">
<input type="submit" name="sa" value="Search">
<input type="hidden" name="client" value="pub-0979518001849295">
<input type="hidden" name="forid" value="1">
<input type="hidden" name="channel" value="0813631605">
<input type="hidden" name="ie" value="ISO-8859-1">
<input type="hidden" name="oe" value="ISO-8859-1">
<input type="hidden" name="cof" value="GALT:#008000;GL:1;DIV:#336699;VLC:663399;AH:center;BGC:FFFFFF;LBGC:336699;ALC:0000FF;LC:0000FF;T:000000;GFNT:0000FF;GIMP:0000FF;FORID:1;">
<input type="hidden" name="hl" value="en">
</form>
 SiteSearch Google -->
	</td>
</tr>
<tr valign="top" bgcolor="#ffffff">
	<td class="menu_left">
		<?php include( "side_menu.php" ); ?>
	</td>
	<td class="main">
