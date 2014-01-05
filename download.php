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
	<p>
	</p>Please read the
		<a href="/docs/master-1.2.x/en/administration_guide/admin.install.upgrade.html">
		Admin Guide</a> for instructions on the upgrade process.
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
		<a class="bold" href="builds.php">Download a Nightly Build</a>
	</p>
</div>

<div class="clearBoth"></div>

<h4>MantisBT Distributions</h4>
<p>MantisBT is distributed with several
	<a href="/wiki/doku.php/mantisbt:distributions">GNU/Linux distributions</a>.
	Typically however, the versions available in these distributions
	are not the latest.
	For the most recent MantisBT release, use the links above.</p>

<?php
	include( "bot.php" );
