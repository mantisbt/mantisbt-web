<?php
	$t_sub_title = "Download";
	include( "top.php" );
?>

<h4>Download</h4>

<div class="spotlight">
	As you are downloading a new MantisBT release, please take a minute to 
	consider how you can contribute to the MantisBT project.  You can do 
	that by contributing time and talent, blogging about it, recommending 
	MantisBT to others, linking to MantisBT website, registering in users 
	directory, donating money, advertising on MantisBT website, sponsoring 
	a feature, and possibly other ways.
	<div align="right">
	    <?php require('paypal_inc.php'); ?>
	</div>
</div>

<p/>


<div style="height: 220px" class="genericbox">
	<h3>Stable release</h3>
	This is the latest stable MantisBT release. Download this file for production use.
	<p align="center">
		<a class="bold" href="http://sourceforge.net/project/showfiles.php?group_id=14963">Download MantisBT <?php echo $g_latest_version_stable; ?></a>
	</p>
</div>

<div style="height: 220px" class="genericbox">
	<h3>Unstable / Pre-releases</h3>
	This is the latest unstable Release. If you want to help test future MantisBT code,
	don't mind non-working Features and generally prefer life on the bleeding edge when
	it comes to software then this is for you.
	<p align="center">
		<a class="bold" href="http://sourceforge.net/project/showfiles.php?group_id=14963&amp;package_id=166159">Download MantisBT <?php echo $g_latest_version_dev; ?></a>
	</p>
</div>

<div class="clearBoth"></div>

<h4>Where do you want to go next?</h4>

<ul>
  <li><a href="http://www.mantisbt.org/wiki/doku.php/mantisbt:contributing">Contributing to MantisBT</a></li>
  <li><a href="directory.php">Users Directory</a></li>
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
