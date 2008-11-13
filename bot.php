<?php
include( "adsense_vertical_inc.php" );
?>
</div>
<div class="clearBoth"></div>
<?php
$t_footer_sponsored_links = '';
?>

<p />
<div id="bottomLinks">
	<?php include( 'tla.php' ); ?>
	<a href="/contact_us.php">Contact us</a>
	<a href="/privacy.php">Privacy</a>
</div>
<div id="buttonContainer-disable-for-now">
	<table align="center">
		<tr>
			<td>
				<!-- AddThis Bookmark Button BEGIN -->
				<a href="http://www.addthis.com/bookmark.php" onclick="addthis_url   = location.href; addthis_title = document.title; return addthis_click(this);" target="_blank"><img src="http://s5.addthis.com/button1-bm.gif" width="125" height="16" border="0" alt="AddThis Social Bookmark Button" /></a> <script type="text/javascript">var addthis_pub = 'vboctor';</script><script type="text/javascript" src="http://s5.addthis.com/js/widget.php?v=10"></script>  
				<!-- AddThis Bookmark Button END -->
			</td>
			<td>
				<?php include('paypal_inc.php'); ?>
			</td>
			<td>
				<img src="images/mantis_logo_button.gif" width="88" height="35" border="0" alt="MantisBT" />
			</td>
			<td>
				<img src="http://sourceforge.net/sflogo.php?group_id=14963" width="88" height="31" border="0" alt="SourceForge Logo" />
			</td>
		</tr>
	</table>
</div>
<p />
<p />

<!-- Google Analytics -->
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-330112-2";
urchinTracker();
</script>
<!-- End of Google Analytics -->

</body>
</html>
