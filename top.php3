<? include("zorblogspages.php"); ?>
<? countpage( $REQUEST_URI, $REQUEST_URI );  ?>

<html>
<head>
<? include( "css.php3" ) ?>
<title>Mantis</title>
</head>
<body>

<table class="outisde" cellpadding="0" cellspacing="0">
<tr class="top">
	<td class="top_left">
		&nbsp;
	</td>
	<td class="top_right">
		<a href="http://mantisbt.sourceforge.net/"><img border="0" src="images/banner.gif"></a>
	</td>
	<td class="right">
		<a href="http://www.google.com/"><img border="0" src="images/google.gif"></a>
	</td>
</tr>
<tr class="top">
<form method="GET" action="http://www.google.com/custom">
	<td class="middle" colspan="3">
<!-- Search Google -->
<input class="small" type="text" name="q" size="16" maxlength="255" value="">&nbsp;
<input class="small" type="submit" name="sa" value="Search">&nbsp;
<input class="small" type="hidden" name="cof" value="L:http://mantisbt.sourceforge.net/images/banner.gif;AH:center;AWFID:124d3521c6d75a4f;">
<input class="small" type="hidden" name="domains" value="mantisbt.sourceforge.net">
<input class="small" type="hidden" name="sitesearch" value="mantisbt.sourceforge.net" CHECKED>
<!-- Search Google -->
	</td>
</form>
</tr>
<tr valign="top" bgcolor=#ffffff>
	<td class="menu_left">
		<? include( "side_menu.php3" ); ?>
	</td>
	<td class="main" colspan=2>

