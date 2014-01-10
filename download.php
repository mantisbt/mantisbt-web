<?php
$t_sub_title = "Download";
include( "top.php" );
?>

  <div id="breadcrumb">
    <ul>
      <li class="home"><a href="/">Home</a></li>
      <li><a href="/">MantisBT</a></li>
      <li>Downloads</li>
    </ul>
  </div>

  <div class="row show-grid clear-both">

    <div class="col-md-8 col-sm-8">
      <h1>Stable Release</h1>
      <p>This is the latest stable MantisBT release.
        Feel free to download this version for production use. </p>

      <h3>Additional Resources:</h3>
      <ul class="icons">
        <ul class="item-details">
          <li>
            <i class="icon-book"></i> <a href="/docs/master-1.2.x/en/administration_guide/admin.install.upgrade.html">Admin Guide</a>
          <li>
          <li>
            <i class="icon-paper-clip"></i> <a href="/docs/master-1.2.x/en/administration_guide/admin.install.upgrade.html">Chanagelog</a>
          <li>
          <li>
            <i class="icon-check"></i> <a href="/requirements.php">Requirements</a>
          <li>
        </ul>
      </ul>
    </div>
    <div class="col-md-1 col-sm-1"></div>
    <div class="col-sm-3 col-md-3 attention-stick stick">
      <div style="font-size: 38px;"> <i class="icon-bullhorn"></i>
      </div>
      <br>
      <h2 style="font-size: 28px;line-height: 36px">MantisBT 1.2.15</h2>
      <br>
      <p>
        <a href="https://sourceforge.net/projects/mantisbt/files/mantis-stable/" type="button" class="ex btn btn-default  btn-inverse">
          <i class="icon-arrow-down"></i> Download
        </a>
      </p>
    </div>
  </div>

  <hr>

  <div class="row show-grid clear-both">
    <div class="col-md-12 col-sm-12">
      <h1>Development Release</h1>
      <p>The latest development release is intended for evaluation and testing purposes. It is not recommended for
        production use, unless you are comfortable with PHP and able to troubleshoot issues that may arise. </p>
    </div>
  </div>

  <div class="row show-grid clear-both">
    <div class="col-md-7 col-sm-7">
      <h3>Additional Resources:</h3>
      <ul class="icons">
        <ul class="item-details">
          <li>
            <i class="icon-road"></i> <a href="/bugs/roadmap_page.php?project=mantisbt&version=1.3.x">Roadmap</a>
          <li>
          <li>
            <i class="icon-book"></i> <a href="/requirements.php">Requirements</a>
          <li>
        </ul>
      </ul>
    </div>
    <div class="col-md-1 col-sm-1"></div>
    <div class="col-md-4 col-sm-4">
      <a href="https://sourceforge.net/projects/mantisbt/files/mantis-development/" type="button" class="btn btn-default btn-primary">
        <i class="icon-arrow-down"></i> Download MantisBT 1.3.x
      </a>
    </div>
  </div>

  <hr>

  <div class="row show-grid clear-both">
    <div class="col-md-12 col-sm-12">
      <h1>Nightly Builds</h1>
      <p>These are nightly snapshots generated from the latest development branches in our Git repository. They have
        only undergone minimal testing through our standard Travis CI build process, and have not been formally
        prepared for release; we recommend you only use them for testing and feedback purposes.  </p>
    </div>
  </div>

  <div class="row show-grid clear-both">
    <div class="col-md-7 col-sm-7">
      <h3>Additional Resources:</h3>
      <ul class="icons">
        <ul class="item-details">
          <li>
            <i class="icon-github"></i> <a href="https://github.com/mantisbt/mantisbt">Git Repository</a>
          <li>
          <li>
            <i class="icon-ok"></i> <a href="/requirements.php">Travis CI Build Process</a>
          <li>
        </ul>
      </ul>
    </div>
    <div class="col-md-1 col-sm-1"></div>
    <div class="col-md-4 col-sm-4">
      <a href="http://localhost/~Rafik/mantisbt-web/builds.php" type="button" class="btn btn-default btn-primary">
        <i class="icon-arrow-down"></i> Download Nightly Builds
      </a>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-sm-12 col-md-12 grey-box">
      <div class="hero-block3">
        <div class="row show-grid">
          <div class="col-sm-9 col-md-9">
            <div class="hero-content-3">
              <h2>MantisBT Distributions</h2>
              <p>MantisBT is distributed with several
                <a href="/wiki/doku.php/mantisbt:distributions">GNU/Linux distributions</a>.
                Typically however, the versions available in these distributions are not the latest.
                For the most recent MantisBT release use the links above.</p>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="tour-btn btn-default"> <a class="btn btn-warning" href="/wiki/doku.php/mantisbt:distributions">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br>


<?php
include( "bot.php" );
