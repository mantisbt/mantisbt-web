<?php
$t_sub_title = "Support";
include( "top.php" );
?>

  <div class="row show-grid clear-both">
    <div class="col-sm-12 col-md-12">

      <h1>Community Support</h1>

      <div class="col-sm-12 col-md-12 grey-box">
        <div class="hero-block3">
          <div class="row show-grid">
            <div class="col-sm-12 col-md-12">
              <div class="hero-content-3">
                <h3>
                  MantisBT is free software. The community around MantisBT is full of nice people who want to help
                  others learn. Become part of the family, learn from others, and give something back when you can.
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br><br>

      <span class="lead">The following resources are provided by the MantisBT community free of charge:</span>

    </div>
  </div>

  <br>

  <div class="row show-grid">
    <div class="col-md-11 col-md-offset-1">
      <div class="note-stick stick pull-left">
        <br>
        <p>Admin and Developer</p>
        <h2>Documentation</h2>
        <br>
        <a href="documentation.php" onclick="ga('send', 'event', 'Support', 'Go to Docs');" type="button" class="ex btn btn-group btn-default btn-inverse btn-block">
          Go to Docs
        </a>
      </div>
      <div class="note-stick stick pull-left">
        <br>
        <p>Ask questions at the</p>
        <h1>Forums</h1>
        <br>
        <a href="<?php echo $g_forums_url; ?>" onclick="ga('send', 'event', 'Support', 'Go to forums');" type="button" class="ex btn btn-default btn-inverse btn-block">
          Go to forums
        </a>
      </div>
      <div class="note-stick stick pull-left">
        <br>
        <p>Report issues to our</p>
        <h1>Bugtracker</h1>
        <br>
        <a href="<?php echo $g_bugs_url; ?>" onclick="ga('send', 'event', 'Support', 'Go to bug tracker');" type="button" class="ex btn btn-default btn-inverse btn-block">
          Go to bug tracker
        </a>
      </div>
      <div class="note-stick stick pull-left">
        <br>
        <p>Browse and contribute to the</p>
        <h1>Wiki</h1>
        <br>
        <a href="<?php echo $g_wiki_url; ?>doku.php" onclick="ga('send', 'event', 'Support', 'Go to wiki');" type="button" class="ex btn btn-default btn-inverse btn-block">
          Go to wiki
        </a>
      </div>
      <div class="note-stick stick pull-left">
        <br>
        <p>Subscribe to</p>
        <h1>Mailing Lists</h1>
        <br>
        <a href="mailinglists.php" onclick="ga('send', 'event', 'Support', 'Go to mailing lists');" type="button" class="ex btn btn-default btn-inverse btn-block">
          Go to mailing lists
        </a>
      </div>
      <div class="note-stick stick pull-left">
        <br>
        <p>Use IRC chat at</p>
        <h2>#mantisbt-help</h2>
        <br>
        <a href="irc://irc.freenode.net/mantisbt-help" onclick="ga('send', 'event', 'Support', 'Go to IRC');" type="button" class="ex btn btn-group btn-default btn-inverse btn-block">
          Go to IRC
        </a>
        <a href="irclogs.php" onclick="ga('send', 'event', 'Support', 'Read channel archives');" type="button" class="ex btn btn-group btn-default btn-inverse btn-block">
          Read channel archives
        </a>
      </div>

    </div>
  </div>

<?php
include( "bot.php" );
