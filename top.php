<?php
	include( 'config_defaults_inc.php' );
	require_once( 'utils_inc.php' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<link rel="shortcut icon" href="http://www.mantisbt.org/favicon.ico" />
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
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
<a href="http://www.futureware.biz/mantisdemo">Demo</a> |
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
						<table width="508" border="0" cellspacing="0" cellpadding="0">
						<tr>
						<td><a href="sponsors.php"><img src="images/banners.gif" width="20" height="60" border="0" alt="Sponsors" /></a></td>
						<td>
<?php
// if ( strstr( $_SERVER['HTTP_HOST'], 'mantisbt.org' ) === false ) {
	if ( true ) {
?>
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
<?php } else { ?>
<!-- Begin: AdBrite -->
<script type="text/javascript">
   var AdBrite_Title_Color = '0000FF';
   var AdBrite_Text_Color = '000000';
   var AdBrite_Background_Color = 'FFFFFF';
   var AdBrite_Border_Color = 'FFFFFF';
</script>
<span style="white-space:nowrap;"><script src="http://ads.adbrite.com/mb/text_group.php?sid=191899&zs=3436385f3630" type="text/javascript"></script><!--
--><a target="_top" href="http://www.adbrite.com/mb/commerce/purchase_form.php?opid=191899&afsid=1"><img src="http://files.adbrite.com/mb/images/adbrite-your-ad-here-banner.gif" style="background-color:#FFFFFF" alt="Your Ad Here" width="11" height="60" border="0" /></a></span>
<!-- End: AdBrite -->
<br />
<div align="right">
<!-- AddThis Bookmark Button BEGIN -->
<a href="http://www.addthis.com/bookmark.php" onclick="addthis_url   = location.href; addthis_title = document.title; return addthis_click(this);" target="_blank"><img src="http://s5.addthis.com/button1-bm.gif" width="125" height="16" border="0" alt="AddThis Social Bookmark Button" /></a> <script type="text/javascript">var addthis_pub = 'vboctor';</script><script type="text/javascript" src="http://s5.addthis.com/js/widget.php?v=10"></script>  
<!-- AddThis Bookmark Button END -->
</div>
<?php } ?>
						</td>
						<td><a href="sponsors.php"><img src="images/advertise.gif" width="20" height="60" border="0" alt="Advertise" /></a></td>
						</tr>
						</table>
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

