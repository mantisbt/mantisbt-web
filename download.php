<?php
	$t_sub_title = "Download";
	include( "top.php" );
?>

<h4>Download</h4>

<div class="spotlight">
	Get up and running with <a href="hosting.php">hosted MantisBT</a> in less than 5 minutes for $5/month.
</div>

<p/>

<div style="height: 19em; position: relative;" class="genericbox">
	<h3>Stable release</h3>
	This is the latest stable MantisBT release. Download this file for production use.
	<p align="center">
		<a class="bold" href="https://sourceforge.net/projects/mantisbt/files/mantis-stable/">Download MantisBT <?php echo $g_latest_version_stable; ?></a><br />
		<br />
		<a class="bold" href="mantistouch.php">MantisTouch for iPhone, Android, WP7</a><br />
		<a class="bold" href="hosting.php">Hosted MantisBT</a><br />
	</p>
	<p style="position: absolute; top: 17em; left: 3em;">
	[ <a href="/requirements.php">Requirements</a> | <a href="bugs/changelog_page.php?project=mantisbt&version=<?php echo $g_latest_version_stable; ?>">Changelog</a> ]
	</p>
</div>

<div style="height: 19em; position: relative;" class="genericbox">
	<h3>Development release</h3>
	This is the latest development release. Users should use this release for testing and
	providing feedback.  It is not recommended for production use unless you are
	like bleeding edge and comfortable with PHP and able to trouble shoot any issues that may arise.
	<p align="center">
		<a class="bold" href="https://sourceforge.net/projects/mantisbt/files/mantis-development/">Download MantisBT <?php echo $g_latest_version_dev; ?></a>
	</p>
	<p style="position: absolute; top: 17em; left: 3em;">
	[ <a href="/requirements.php">Requirements</a> | <a href="bugs/changelog_page.php?project=mantisbt&version=<?php echo $g_latest_version_dev; ?>">Changelog</a> ]
	</p>
</div>

<div class="clearBoth"></div>

<div class="genericbox" style="width: 97%">
	<h3>Nightly Builds</h3>
	These are nightly snapshots generated from the latest development branches in our Git repository.
	These have not been formally tested or prepared for release in any manner, and are recommended only
	for testing and feedback purposes.  Builds are only available for the past five days.
	<p align="center">
		<a class="bold" href="/builds">Download a Nightly Build</a>
	</p>
</div>

<div class="clearBoth"></div>

<div class="genericbox" style="width: 97%">
	<h3>Add-On Software</h3>

	<h4 style="margin-bottom: 0px;">MantisTouch</h4>
	<div style="margin: 0 20px auto 20px; padding-top: 0px;">
		<a href="http://www.mantisbt.org/mantistouch.php">MantisTouch</a> is a web app
		that provides a mobile optimized MantisBT user interface for iPhone, Android
		and Windows Phones devices. MantisTouch internally uses web services to access
		the underlying MantisBT v1.2.x instances, hence, providing the mobile friendly
		interface without requiring any changes for the accessed MantisBT instance.
	</div>

    <h4 style="margin-bottom: 0px;">MantisConnect</h4>
	<div style="margin: 0 20px auto 20px; padding-top: 0px;">
		<a href="http://www.futureware.biz/mantisconnect/">MantisConnect</a>
		allows .NET-, Java-, Cocoa- and generally all Applications that can access webservices
		to integrate with MantisBT.
	</div>

	<h4 style="margin-bottom: 0px;">MantisBT Related Tools</h4>
	<div style="margin: 0 20px auto 20px; padding-top: 0px;">
		Check the <a href="/wiki/doku.php/mantisbt:related_tools">related tools</a> page.
	</div>
</div>

<div class="clearBoth"></div>

<p>See <a href="/manual/manual.installation.upgrading.php">upgrading</a> page in MantisBT Manual for details about the upgrade process.</p>

<h4>MantisBT Distributions</h4>
<p>MantisBT is distributed with several <a href="/wiki/doku.php/mantisbt:distributions">GNU/Linux distributions</a>.  Typically the MantisBT versions in these distributions are not the latest.  For the latest MantisBT version use the links above.</p>

<?php
	include( "bot.php" );
