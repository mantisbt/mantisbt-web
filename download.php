<?php
$t_sub_title = "Download";
include( "top.php" );
?>

  <div class="row show-grid clear-both">

    <div class="col-sm-7 col-md-8">
      <h1>Stable Release <small>| Get on latest!</small></h1>
      <p>
        This is the latest stable MantisBT release.
        Make sure you are running the latest release to benefit from all security fixes, bug fixes, and new features.
      </p>

      <h3>Additional Resources:</h3>
      <ul class="icons item-details">
        <li>
          <i class="icon-book"></i> <a href="<?php echo $g_docs_url; ?>master-1.2.x/en/administration_guide/admin.install.upgrade.html">How to upgrade?</a>
        </li>
        <li>
          <i class="icon-paper-clip"></i> <a href="<?php echo $g_bugs_url; ?>changelog_page.php?project=mantisbt&amp;version=<?php echo $g_latest_version_stable; ?>">Changelog</a>
        </li>
        <li>
          <i class="icon-check"></i> <a href="<?php echo $g_docs_url; ?>master-1.2.x/en/administration_guide/admin.install.requirements.html">Requirements</a>
        </li>
      </ul>
    </div>
    <div class="col-sm-5 col-md-4 note-stick stick">
      <div style="font-size: 38px;"> <i class="icon-bullhorn"></i>
      </div>
      <br>
      <h2 style="font-size: 28px;line-height: 36px">MantisBT <?php echo $g_latest_version_stable; ?></h2>
      <br>
      <p>
        <a href="https://sourceforge.net/projects/mantisbt/files/mantis-stable/" type="button" class="ex btn btn-default  btn-inverse">
          <i class="icon-arrow-down"></i> Download
        </a>
      </p>
    </div>
  </div>

  <hr>

  <?php if ( !empty( $g_latest_version_dev ) ) { ?>
  <div class="row show-grid clear-both">
    <div class="col-md-12 col-sm-12">
      <h1>Development Release <small>| Bleeding edge for the brave and tech savvy!</small></h1>
      <p>The latest development release is intended for evaluation and testing purposes. It is not recommended for
        production use, unless you are comfortable with PHP and able to troubleshoot issues that may arise. </p>
    </div>
  </div>

  <div class="row show-grid clear-both">
    <div class="col-sm-8 col-md-8">
      <h3>Additional Resources:</h3>
      <ul class="icons">
        <ul class="item-details">
          <li>
            <i class="icon-road"></i> <a href="<?php echo $g_bugs_url; ?>roadmap_page.php?project=mantisbt&amp;version=<?php echo $g_latest_version_dev_roadmap; ?>">Roadmap</a>
          <li>
          <li>
            <i class="icon-paper-clip"></i> <a href="<?php echo $g_bugs_url; ?>changelog_page.php?project=mantisbt&amp;version=<?php echo $g_latest_version_dev; ?>">Changelog</a>
          </li>
          <li>
            <i class="icon-check"></i> <a href="<?php echo $g_docs_url; ?>master/en-US/Admin_Guide/html-desktop/#admin.install.requirements">Requirements</a>
          </li>
        </ul>
      </ul>
    </div>
    <div class="col-sm-4 col-md-4">
      <a href="https://sourceforge.net/projects/mantisbt/files/mantis-development/" type="button" class="btn btn-default btn-warning">
        <i class="icon-arrow-down"></i> Download MantisBT <?php echo $g_latest_version_dev; ?>
      </a>
    </div>
  </div>

  <hr>
  <?php } ?>

  <div class="row show-grid clear-both">
    <div class="col-md-12 col-sm-12">
      <h1>Nightly Builds <small>| Not Supported - use at your own risk!</small></h1>
      <p>These are nightly snapshots generated from the latest development branches in our Git repository. They have
        only undergone minimal testing through our standard Travis CI build process, and have not been formally
        prepared for release; we recommend you only use them for testing and feedback purposes.  </p>
    </div>
  </div>

  <div class="row show-grid clear-both">
    <div class="col-sm-8 col-md-8">
      <h3>Additional Resources:</h3>
      <ul class="icons">
        <ul class="item-details">
          <li>
            <i class="icon-github"></i> <a href="https://github.com/mantisbt/mantisbt">Git Repository</a>
          <li>
          <li>
            <i class="icon-ok"></i> <a href="https://travis-ci.org/mantisbt/mantisbt">Travis CI Build Process</a>
          <li>
        </ul>
      </ul>
    </div>
    <div class="col-sm-4 col-md-4">
      <a href="builds.php" type="button" class="btn btn-default btn-warning">
        <i class="icon-arrow-down"></i> Download Nightly Builds
      </a>
    </div>
  </div>

<?php
include( "bot.php" );
