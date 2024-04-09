<?php
include( "top.php" );

/**
 * Global variables referenced in this script.
 * @global $g_docs_admin_guide
 * @global $g_docs_path
 * @global $g_docs_url
 * @global $g_latest_version_stable
 * @global $g_latest_version_dev_roadmap
 */

/**
 * Print URL for SourceForge downloads
 * @param null $p_version Optional version number (= subdirectory)
 * @param bool $p_stable  True = stable, false = development
 */
function print_sourceforge_url( $p_version = null, bool $p_stable = true ): void {
	$t_sf_url = 'https://sourceforge.net/projects/mantisbt/files/mantis-%s/%s';
	if( $p_version ) {
		$p_version .= '/';
	}
	printf( $t_sf_url,
		$p_stable ? 'stable' : 'development',
		$p_version
	);
}

?>
<!--suppress HtmlUnknownTarget -->

<div class="row show-grid clear-both">

	<div class="col-sm-7 col-md-8">
		<h1>Stable Release
			<small>| Get on latest!</small>
		</h1>
		<p>
			This is the latest stable MantisBT release.
			Make sure you are running the latest release to benefit from all
			security fixes, bug fixes, and new features.
		</p>

		<h3>Additional Resources:</h3>
		<ul class="icons">
			<li>
				<i class="icon-book"></i>
				<a href="<?php echo $g_docs_url, $g_docs_path, $g_docs_admin_guide; ?>/html-desktop/#admin.install.upgrade">How to upgrade?</a>
			</li>
			<li>
				<i class="icon-paper-clip"></i>
				<a href="<?php echo $g_bugs_url; ?>changelog_page.php?project=mantisbt&amp;version=<?php echo $g_latest_version_stable; ?>">Changelog</a>
			</li>
			<li>
				<i class="icon-check"></i>
				<a href="<?php echo $g_docs_url, $g_docs_path, $g_docs_admin_guide; ?>/html-desktop/#admin.install.requirements">Requirements</a>
			</li>
			<li>
				<i class="icon-key"></i>
				<a href="https://github.com/mantisbt/mantisbt/blob/master/KEYS.md"
				   title="Releases are signed with these keys, use them to verify downloaded files' integrity">
					PGP keys
				</a>
			</li>
		</ul>
	</div>
	<div class="col-sm-5 col-md-4 note-stick stick">
		<div style="font-size: 38px;"><i class="icon-bullhorn"></i>
		</div>
		<br>
		<h2 style="font-size: 28px;line-height: 36px">
			MantisBT <?php echo $g_latest_version_stable; ?></h2>
		<br>
		<p>
			<a href="<?php print_sourceforge_url( $g_latest_version_stable ); ?>"
			   onclick="ga('send', 'event', 'Download', 'Download');"
			   type="button" class="ex btn btn-default  btn-inverse">
				Download
			</a>
		</p>
	</div>
</div>
<hr>

<?php
if( !empty( $g_latest_version_legacy ) ) {
	# Documentation for legacy version is under /docs/master-X.Y.x
	$t_legacy_docs_version = explode( '.', $g_latest_version_legacy, 3 );
	$t_legacy_docs_version[2] = 'x';
	$t_legacy_docs_version = implode( '.', $t_legacy_docs_version );
	$t_legacy_docs_path = substr_replace( $g_docs_path,
		'-' . $t_legacy_docs_version,
		strpos( $g_docs_path, '/' ), 0
	);
?>
<div class="row show-grid clear-both">
	<div class="col-md-12 col-sm-12">
		<h1>Legacy Release
			<small> | Security and critical bugs only!</small>
		</h1>
		<p>Older MantisBT version, which is still supported but only gets
			fixes for critical bugs and security issues.
			You are strongly advised to upgrade to the latest Stable release
			as soon as possible, to benefit from new developments.
		</p>
	</div>
</div>

<div class="row show-grid clear-both">
	<div class="col-sm-8 col-md-8">
		<h3>Additional Resources:</h3>
		<ul class="icons">
			<li>
				<i class="icon-paper-clip"></i>
				<a href="<?php echo $g_bugs_url; ?>changelog_page.php?project=mantisbt&amp;version=<?php echo $g_latest_version_legacy; ?>">Changelog</a>
			</li>
			<li>
				<i class="icon-check"></i>
				<a href="<?php echo $g_docs_url, $t_legacy_docs_path, $g_docs_admin_guide; ?>/html-desktop/#admin.install.requirements">Requirements</a>
			</li>
		</ul>
	</div>
	<div class="col-sm-4 col-md-4">
		<a href="<?php print_sourceforge_url( $g_latest_version_legacy ); ?>"
		   onclick="ga('send', 'event', 'Download', 'Download MantisBT');"
		   type="button" class="btn btn-default btn-warning">
			Download MantisBT <?php echo $g_latest_version_legacy; ?>
		</a>
	</div>
</div>
<hr>
<?php } ?>

<?php if( !empty( $g_latest_version_dev ) ) { ?>
<div class="row show-grid clear-both">
	<div class="col-md-12 col-sm-12">
		<h1>Development Release
			<small>| Bleeding edge for the brave and tech savvy!</small>
		</h1>
		<p>The latest development release is intended for evaluation and
			testing purposes. It is not recommended for
			production use, unless you are comfortable with PHP and able to
			troubleshoot issues that may arise. </p>
	</div>
</div>

<div class="row show-grid clear-both">
	<div class="col-sm-8 col-md-8">
		<h3>Additional Resources:</h3>
		<ul class="icons">
			<li>
				<i class="icon-road"></i>
				<a href="<?php echo $g_bugs_url; ?>roadmap_page.php?project=mantisbt&amp;version=<?php echo $g_latest_version_dev_roadmap; ?>">Roadmap</a>
			<li>
			<li>
				<i class="icon-paper-clip"></i>
				<a href="<?php echo $g_bugs_url; ?>changelog_page.php?project=mantisbt&amp;version=<?php echo $g_latest_version_dev; ?>">Changelog</a>
			</li>
			<li>
				<i class="icon-check"></i>
				<a href="<?php echo $g_docs_url, $g_docs_path, $g_docs_admin_guide; ?>/html-desktop/#admin.install.requirements">Requirements</a>
			</li>
		</ul>
	</div>
	<div class="col-sm-4 col-md-4">
		<a href="<?php print_sourceforge_url( $g_latest_version_dev, false ); ?>"
		   onclick="ga('send', 'event', 'Download', 'Download MantisBT');"
		   type="button" class="btn btn-default btn-warning">
			Download MantisBT <?php echo $g_latest_version_dev; ?>
		</a>
	</div>
</div>
<hr>
<?php } ?>

<div class="row show-grid clear-both">
	<div class="col-md-12 col-sm-12">
		<h1>Nightly Builds
			<small>| Not Supported - use at your own risk!</small>
		</h1>
		<p>These are nightly snapshots generated from the latest development
			branches in our Git repository. They have
			only undergone minimal testing through our standard Travis CI
			build process, and have not been formally
			prepared for release; we recommend you only use them for testing
			and feedback purposes. </p>
	</div>
</div>

<div class="row show-grid clear-both">
	<div class="col-sm-8 col-md-8">
		<h3>Additional Resources:</h3>
		<ul class="icons">
			<li>
				<i class="icon-github"></i>
				<a href="https://github.com/mantisbt/mantisbt">Git Repository</a>
			<li>
			<li>
				<i class="icon-ok"></i>
				<a href="https://travis-ci.org/mantisbt/mantisbt">Travis CI Build Process</a>
			<li>
		</ul>
	</div>
	<div class="col-sm-4 col-md-4">
		<a href="builds.php" type="button"
		   class="btn btn-default btn-warning"
		   onclick="ga('send', 'event', 'Download', 'Download Nightly Builds');">
			Download Nightly Builds
		</a>
	</div>
</div>

<?php
include( "bot.php" );
