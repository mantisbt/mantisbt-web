<?php
	$t_sub_title = "Download";
	include( "top.php" );
?>

<h4>Download</h4>

<div class="spotlight">
	Get up and running with <a href="hosting.php">hosted MantisBT</a> in less than 5 minutes for $5/month.
</div>

<p />

<div class="genericbox box-fixedheight">
	<h3>Stable release</h3>
	<p>This is the latest stable MantisBT release.
	Please download this file for production use.
	</p>
	<p class="downloadlink">
		<a href="https://sourceforge.net/projects/mantisbt/files/mantis-stable/">
			Download MantisBT <?php echo $g_latest_version_stable; ?>
		</a>
	</p>
	<div class="box-bottom">
		<p class="center">
			[ <a href="requirements.php">Requirements</a>
			| <a href="bugs/changelog_page.php?project=mantisbt&version=<?php echo $g_latest_version_stable; ?>">Changelog</a>
			]
		</p>
	</div>
</div>

<div class="genericbox box-fixedheight">
	<h3>Development release</h3>
	<p>The latest development release is intended for evaluation and testing
		purposes. It is not recommended for production use, unless you are
		comfortable with PHP and able to troubleshoot issues that may arise.
	</p>
	<p class="downloadlink">
		<a href="https://sourceforge.net/projects/mantisbt/files/mantis-development/">
			Download MantisBT <?php echo $g_latest_version_dev; ?>
		</a>
	</p>
	<div class="box-bottom">
		<p class="center">
			[ <a href="requirements.php">Requirements</a>
			| <a href="bugs/roadmap_page.php?project=mantisbt&version=<?php echo $g_latest_version_dev; ?>">Roadmap</a>
			]
		</p>
	</div>
</div>

<div class="clearBoth"></div>

<div class="genericbox box-doublewidth">
	<div class="floatRight">
		<a href="https://travis-ci.org/mantisbt/mantisbt/branches">
			<img src="https://travis-ci.org/mantisbt/mantisbt.png">
		</a>
	</div>
	<h3>Nightly Builds</h3>
	These are nightly snapshots generated from the latest development branches in our
	<a href="https://github.com/mantisbt/mantisbt">Git repository</a>.
	They have only undergone minimal testing through our standard
	<a href="https://travis-ci.org/mantisbt/mantisbt">Travis CI</a>
	build process, and have not been formally prepared for release;
	we recommend you only use them for testing and feedback purposes.
	<p class="downloadlink">
		<a class="bold" href="/builds">Download a Nightly Build</a>
	</p>
</div>

<div class="clearBoth"></div>

<div class="genericbox box-doublewidth">
	<h3>Add-On Software</h3>

	<h4 class="addon">MantisTouch</h4>
	<div class="addon-text">
		<a href="http://www.mantisbt.org/mantistouch.php">MantisTouch</a> is a web app
		that provides a mobile-optimized MantisBT user interface for iPhone, Android
		and Windows Phones devices. MantisTouch internally uses web services to access
		the underlying MantisBT instance, hence providing the mobile friendly
		interface without requiring any changes for the accessed system.
	</div>

	<h4 class="addon">MantisConnect</h4>
	<div class="addon-text">
		<a href="http://www.futureware.biz/mantisconnect/">MantisConnect</a>
		allows .NET-, Java-, Cocoa- and generally all Applications that can access webservices
		to integrate with MantisBT.
	</div>

	<h4 class="addon">MantisBT Related Tools</h4>
	<div class="addon-text">
		Check the <a href="/wiki/doku.php/mantisbt:related_tools">related tools</a> page.
	</div>
</div>

<div class="clearBoth"></div>

<p>See <a href="/manual/manual.installation.upgrading.php">upgrading</a> page in MantisBT Manual for details about the upgrade process.</p>

<h4>MantisBT Distributions</h4>
<p>MantisBT is distributed with several
	<a href="/wiki/doku.php/mantisbt:distributions">GNU/Linux distributions</a>.
	Typically however, the versions available in these distributions
	are not the latest.
	For the most recent MantisBT release, use the links above.</p>

<?php
	include( "bot.php" );
