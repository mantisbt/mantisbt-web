<?php
	#include( "zorblogspages.php" );
	$g_mantis_path = "mantis/";
	$g_mantis_url = "mantis/";

	if ( file_exists( dirname(__FILE__) . "/mantisweb_config_inc.php" ) ) {
		include ( dirname(__FILE__) . "/mantisweb_config_inc.php");
	}

	include( $g_mantis_path . "constant_inc.php" );

	if ( file_exists( $g_mantis_path . "custom_constant_inc.php" ) ) {
		include( $g_mantis_path . "custom_constant_inc.php" );
	}

	if ( file_exists( $g_mantis_path . "config_defaults_inc.php" ) ) {
		include( $g_mantis_path . "config_defaults_inc.php" );
	} else {
		include( $g_mantis_path . "default/config_inc1.php" );
	}

	if ( file_exists( $g_mantis_path . "custom_config_inc.php" ) ) {
		include( $g_mantis_path . "custom_config_inc.php" );
	} else {
		include( $g_mantis_path . "config_inc.php" );
	}

	if ( file_exists( $g_mantis_path . "default/config_inc2.php" ) ) {
		include( $g_mantis_path . "default/config_inc2.php" );
	}
?>
<? #countpage( $REQUEST_URI, $REQUEST_URI );  ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
<title>Mantis</title>
<? include( "mantis.css" ) ?>
</head>
<body>

<table class="outisde" cellpadding="0" cellspacing="0">
<tr class="top">
	<td class="top_left">
		&nbsp;
	</td>
	<td class="top_right">
		<a href="http://mantisbt.sourceforge.net/"><img border="0" src="images/banner.gif" alt=""></a>
	</td>
	<td class="right">
		<a href="http://www.google.com/"><img border="0" src="images/google.gif" alt=""></a>
	</td>
</tr>
<tr class="top">
	<td class="middle" colspan="3">
<form method="GET" action="http://www.google.com/custom">
<!-- Search Google -->
<input class="small" type="text" name="q" size="16" maxlength="255" value="" />&nbsp;
<input class="small" type="submit" name="sa" value="Search" />&nbsp;
<input class="small" type="hidden" name="cof" value="L:http://mantisbt.sourceforge.net/images/banner.gif;AH:center;AWFID:124d3521c6d75a4f;" />
<input class="small" type="hidden" name="domains" value="mantisbt.sourceforge.net" />
<input class="small" type="hidden" name="sitesearch" value="mantisbt.sourceforge.net" checked="checked" />
<!-- Search Google -->
</form>
	</td>
</tr>
<tr valign="top" bgcolor="#ffffff">
	<td class="menu_left">
		<? include( "side_menu.php" ); ?>
	</td>
	<td class="main" colspan=2>

