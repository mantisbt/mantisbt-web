<?php
	$t_sub_title = "Download";

	include( "top.php" );
?>

<span class="page_title">Download</span>
<hr size="1" noshade="noshade" width="100%" />

<div align="center">
<p><font color="blue" size="+2">As you are downloading a new MantisBT release, please take a minute to consider how you can contribute to the MantisBT project.  You can do that by contributing time and talent, blogging about it, recommending MantisBT to others, linking to MantisBT website, registering in users directory, donating money, advertising on MantisBT website, sponsoring a feature, and possibly other ways.</font></p>

<!-- Donation -->
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick" />
<input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but04.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" />
<img alt="" border="0" src="https://www.paypal.com/en_AU/i/scr/pixel.gif" width="1" height="1" />
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
" />
</form>
<!-- end of donation -->
</div>

<p><span class="section">Where do you want to go next?</span></p>

<ul>
  <li><a href="http://www.mantisbt.org/wiki/doku.php/mantisbt:contributing">Contributing to MantisBT</a></li>
  <li><a href="directory.php">Users Directory</a></li>
  <li><a class="bold" href="http://sourceforge.net/project/showfiles.php?group_id=14963&package_id=166159">Download MantisBT <?php @include("files/VERSION_STABLE") ?></a></li>
  <li><a class="bold" href="http://sourceforge.net/project/showfiles.php?group_id=14963">Download MantisBT <?php @include("files/VERSION") ?></a></li>
</ul>

<p>MantisBT is compressed in <span class="code">.tar.gz</span> format which any reasonable decompression program can handle (Unix tar/gunzip, <a href="http://www.7-zip.org/" rel="nofollow">7-zip</a>, <a href="http://www.winzip.com/" rel="nofollow">Winzip</a>).</p>
<p>See <a href="/manual/manual.installation.upgrading.php">upgrading</a> page in MantisBT Manual for details about the upgrade process.</p>

<p><span class="section">MantisBT Distributions</span></p>
<p>MantisBT is distributed with several <a href="/wiki/doku.php/mantisbt:distributions">GNU/Linux distributions</a>.  Typically the MantisBT versions in these distributions are not the latest.  For the latest MantisBT version use the links above.</p>

<?php
	include( 'adsense_vertical_inc.php' ); 

	$t_footer_sponsored_links = '';

	include( "bot.php" ); 
?>
