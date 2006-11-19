<?php include( 'config_defaults_inc.php' ); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
<meta name="description" content="Mantis Bugtracker is an open source bug tracker developed in PHP." />
<meta name="keywords" content="mantis, bugtracker, bug, tracker, issue, software" />
<meta name="dc.title" content="Mantis Bugtracker" />
<meta name="revisit-after" content="1 days" />
<link rel="alternate" type="application/rss+xml" title="RSS" href="http://bugs.mantisbugtracker.com/news_rss.php?project_id=1">
<title>Mantis Bug Tracker<?php if ( isset( $t_sub_title ) ) { echo " | $t_sub_title"; } ?></title>
<?php include( "mantis.css" ) ?>
</head>
<body>

<center><table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
<td align="center">
<div align="center" style="background-color:#FFFFCC; top:0px; position: absolute; left:0px; width: 100%; height: 20px; font-size:12px; padding-top:3px; border-bottom: 2px solid #bebebe;">
<big>.:
<a href="http://www.futureware.biz/mantisconnect/">MantisConnect</a> | 
<a href="http://www.futureware.biz/mantiswap/">MantisWAP</a> | 
<a href="hosting.php">Hosting</a> | 
<a href="http://www.futureware.biz/mantisdemo">Demo</a> | 
<a href="sponsors.php">Sponsors</a> | 
<a href="directory.php">Users</a> | 
<a href="http://manual.mantisbugtracker.com">Manual</a> | 
<a href="http://forums.mantisbugtracker.com">Forums</a> | 
<a href="http://wiki.mantisbugtracker.com">Wiki</a>
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
					<a href="http://www.mantisbugtracker.com/"><img border="0" src="images/mantis_logo.gif" alt="Mantis" /></a>
				</td>
				<td class="top_right">
					<div align="right">
						<table width="508" border="0" cellspacing="0" cellpadding="0">
						<tr>
						<td><a href="sponsors.php"><img src="images/banners.gif" width="20" height="60" border="0" alt="Sponsors" /></a></td>
						<td>
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
<input type="hidden" name="domains" value="mantisbugtracker.com">
<input type="radio" name="sitesearch" value="">
<font size="-1" color="#000000">Web</font>
<input type="radio" name="sitesearch" value="mantisbugtracker.com" checked="checked">
<font size="-1" color="#000000">mantisbugtracker.com</font>
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

