<?php
$t_sub_title = "Development";
include( "top.php" );
?>

  <div class="row show-grid clear-both">
    <div class="col-sm-12 col-md-12">

      <div class="col-sm-12 col-md-12 grey-box">
        <div class="hero-block3">
          <div class="row show-grid">
            <div class="col-sm-12 col-md-12">
              <div class="hero-content-3">
                <h3>
                  MantisBT is an open source bug tracker with a large community of users and contributors.
                  Join us, learn from others, and have some fun!
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br><br>

      <div class="row show-grid clear-both">

        <div class="col-sm-8 col-md-8">
          <h1>Source Code</h1>
          <p>MantisBT source code and
            plugins are hosted on GitHub. Detailed information on how to use git with MantisBT can be found in the
            Mantis Bug Tracker Developers Guide. Help with setting up Git and learning basic usage can be found in
            GitHub's Help pages.
          </p>
          <h3>MantisBT source code:</h3>
          <ul class="icons">
            <ul class="item-details">
              <li>
                <i class="icon-github"></i> <a href="https://github.com/mantisbt/mantisbt">Master Repository</a>
              <li>
              <li>
                <i class="icon-github"></i> <a href="https://github.com/mantisbt-plugins">Plugins Repository</a>
              <li>
            </ul>
          </ul>
        </div>
        <div class="col-sm-3 col-md-3 note-stick stick pull-right">
          <div style="font-size: 32px;"> <i class="icon-github"></i>
          </div>
          <br>
          <h2>MantisBT on GitHub</h2>
          <br>
          <br>
          <a href="https://github.com/mantisbt/mantisbt" onclick="ga('send', 'event', 'Development', 'Browse Source Code');"  type="button" class="ex btn btn-default btn-inverse btn-block">
            Browse Source Code
          </a>
        </div>
      </div>

      <hr>

      <?php
      include 'doc_dev_inc.php';
      ?>

      <hr>

      <div class="row show-grid clear-both">

        <div class=" col-sm-8 col-md-8">
          <h1>Communication</h1>

          <p>Sometimes its just easier to get help or discuss matters in real time. The #mantisbt channel on
            irc.freenode.net is where MantisBT developers hang out.</p>
          <a type="button" class="btn btn-warning" href="irc://irc.freenode.net/mantisbt" onclick="ga('send', 'event', 'Development', 'Join #mantisbt IRC');">
            Join #mantisbt IRC
          </a>

          <br><br>

        </div>
      </div>

    </div>

  </div>

<?php
include( "bot.php" );
