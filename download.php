<?php
	$t_sub_title = "Download";

	include( "top.php" );
?>

<span class="page_title">Download</span>
<hr size="1" noshade="noshade" width="100%" />

<div align="center">
<p><font color="blue" size="+2">As you are downloading a new MantisBT release, please take a minute to consider how you can contribute to the MantisBT project.  You can do that by contributing time and talent, blogging about it, recommending MantisBT to others, linking to MantisBT website, registering in users directory, donating money, advertising on MantisBT website, sponsoring a feature, and possibly other ways.</font></p>

<?php require('paypal_inc.php'); ?>
</div>

<p><span class="section">Where do you want to go next?</span></p>

<ul>
  <li><a href="http://www.mantisbt.org/wiki/doku.php/mantisbt:contributing">Contributing to MantisBT</a></li>
  <li><a href="directory.php">Users Directory</a></li>
  <li><a class="bold" href="http://sourceforge.net/project/showfiles.php?group_id=14963&amp;package_id=166159">Download MantisBT <?php echo $g_latest_version_dev; ?></a></li>
  <li><a class="bold" href="http://sourceforge.net/project/showfiles.php?group_id=14963">Download MantisBT <?php echo $g_latest_version_stable; ?></a></li>
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
