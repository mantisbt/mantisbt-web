<?php
include( "top.php" );
?>

<br />

<div class="row show-grid clear-both">

  <div class="col-md-8 col-sm-8">
    <h1>Docs for Administrators</h1>

    <ul class="icons">
      <li>
        <i class="icon-book"></i> <a href="<?php echo $g_docs_url, $g_docs_path, $g_docs_admin_guide; ?>">Administrator's Guide</a>
      </li>
      <li>
        <i class="icon-book"></i> <a href="<?php echo $g_wiki_url; ?>">Wiki</a>
      </li>
      <li>
        <i class="icon-book"></i> <a href="<?php echo $g_blog_url; ?>">Blog</a>
      </li>
      <li>
        <i class="icon-twitter"></i> <a href="https://www.twitter.com/mantisbt">Twitter</a>
      </li>
      <li>
        <i class="icon-book"></i> <a href="<?php echo $g_wiki_url; ?>doku.php/mantisbt:press">Reviews and Press Articles</a>
      </li>
    </ul>
  </div>
  <div class="col-md-1 col-sm-1"></div>
  <div class="col-sm-3 col-md-3 note-stick stick pull-right">
    <div style="font-size: 32px;"> <i class="icon-book"></i>
    </div>
    <br>
    <h2>Administrator's Guide</h2>
    <br>
    <a href="<?php echo $g_docs_url, $g_docs_path, $g_docs_admin_guide; ?>/html-desktop/" onclick="ga('send', 'event', 'Documentation', 'Browse Admin Docs');" type="button" class="ex btn btn-default btn-inverse btn-block">
      Browse Docs
    </a>
    <a href="<?php echo $g_docs_url, $g_docs_path, $g_docs_admin_guide, "/$g_docs_admin_guide.pdf"; ?>" onclick="ga('send', 'event', 'Documentation', 'Download Admin PDF');" type="button" class="ex btn btn-default btn-inverse btn-block">
      Download PDF
    </a>
  </div>
</div>

<hr>

<div class="row show-grid clear-both">
  <div class="col-md-8 col-sm-8">
    <h1>Docs for Developers</h1>
    <p>MantisBT source code and
      plugins are hosted on GitHub. Detailed information on how to use git with MantisBT can be found in the
      Mantis Bug Tracker Developers Guide. Help with setting up Git and learning basic usage can be found in
      GitHub's Help pages.
    </p>

    <ul class="icons">
      <ul class="item-details">
        <li>
          <i class="icon-book"></i> <a href="<?php echo $g_wiki_url; ?>doku.php/mantisbt:developers_corner">Developer's Corner</a>
        </li>
        <li>
          <i class="icon-book"></i> <a href="<?php echo $g_docs_url, $g_docs_path, $g_docs_dev_guide; ?>">Developer's Guide</a>
        </li>
        <li>
          <i class="icon-sitemap"></i> <a href="<?php echo $g_docs_url, $g_docs_erd_path; ?>latest.pdf">Entity-Relationship Diagram</a>
        </li>
        <li>
          <i class="icon-github"></i> <a href="https://help.github.com">GitHub Help</a>
        </li>
      </ul>
    </ul>
  </div>
  <div class="col-md-1 col-sm-1"></div>
  <div class="col-sm-3 col-md-3 note-stick stick pull-right">
    <div style="font-size: 32px;"> <i class="icon-book"></i>
    </div>
    <br>
    <h2>Developer's Guide</h2>
    <br>
    <a href="<?php echo $g_docs_url, $g_docs_path, $g_docs_dev_guide; ?>/html-desktop/" onclick="ga('send', 'event', 'Documentation', 'Browse Dev Docs');" type="button" class="ex btn btn-default btn-inverse btn-block">
      Browse Docs
    </a>
    <a href="<?php echo $g_docs_url, $g_docs_path, $g_docs_dev_guide, "/$g_docs_dev_guide.pdf"; ?>" onclick="ga('send', 'event', 'Documentation', 'Download Dev PDF');" type="button" class="ex btn btn-default btn-inverse btn-block">
      Download PDF
    </a>
  </div>
</div>

<hr>

<div class="row show-grid clear-both">
  <div class="col-md-8 col-sm-8">
    <h1>Docs for Translators</h1>
    <p>
      MantisBT ships in <a href="https://github.com/mantisbt/mantisbt/tree/master/lang">50 languages</a> providing it a great penetration around the world.
      Anyone can contribute improvements to existing languages or even new languages via TranslateWiki.
      For more details check the <a href="https://mantisbt.org/wiki/doku.php/mantisbt:translationshowto">'Translators How To Guide'</a>.
    </p>
  </div>
</div>

<?php
include( "bot.php" );
