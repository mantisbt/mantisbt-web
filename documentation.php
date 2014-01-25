<?php
$t_sub_title = "Documentation";
include( "top.php" );
?>

  <br />

  <div class="row show-grid clear-both">

    <div class="col-md-8 col-sm-8">
      <h1>Administrator Documentation</h1>

      <h3>MantisBT documentation is available from the following sources:</h3>
      <ul class="icons">
        <li>
          <i class="icon-ok"></i> <a href="<?php echo $g_docs_url; ?>master-1.2.x/en/">The MantisBT Manual</a>
        </li>
        <li>
          <i class="icon-ok"></i> <a href="<?php echo $g_wiki_url; ?>">The MantisBT Wiki</a> contains a lot of valuable MantisBT knowledge.
        </li>
        <li>
          <i class="icon-ok"></i> <a href="<?php echo $g_wiki_url; ?>doku.php/mantisbt:press">MantisBT in the press</a>
        </li>
      </ul>
    </div>
    <div class="col-md-1 col-sm-1"></div>
    <div class="col-sm-3 col-md-3 note-stick stick pull-right">
      <div style="font-size: 32px;"> <i class="icon-book"></i>
      </div>
      <br>
      <h2>Administrators Guide</h2>
      <br>
      <a href="<?php echo $g_docs_url; ?>master-1.2.x/en/administration_guide.html" type="button" class="ex btn btn-default btn-inverse btn-block">
        <i class="icon-eye-open"></i> Browse Docs
      </a>
      <a href="<?php echo $g_docs_url; ?>master-1.2.x/en/administration_guide.pdf" type="button" class="ex btn btn-default btn-inverse btn-block">
        <i class="icon-arrow-down"></i> Download PDF
      </a>
    </div>
  </div>

  <hr>

      <div class="row show-grid clear-both">
        <div class="col-md-8 col-sm-8">
          <h1>Developer Documentation</h1>
          <p>MantisBT source code and
            plugins are hosted on GitHub. Detailed information on how to use git with MantisBT can be found in the
            Mantis Bug Tracker Developers Guide. Help with setting up Git and learning basic usage can be found in
            GitHub's Help pages.
          </p>

          <h3>MantisBT developer documentation:</h3>
          <ul class="icons">
            <ul class="item-details">
              <li>
                <i class="icon-book"></i> <a href="<?php echo $g_wiki_url; ?>doku.php/mantisbt:developers_corner">Developers' Corner</a>
              <li>
              <li>
                <i class="icon-book"></i> <a href="<?php echo $g_docs_url; ?>master-1.2.x/en/">Developers' Guide</a>
              <li>
            </ul>
          </ul>
        </div>
        <div class="col-md-1 col-sm-1"></div>
        <div class="col-sm-3 col-md-3 note-stick stick pull-right">
          <div style="font-size: 32px;"> <i class="icon-book"></i>
          </div>
          <br>
          <h2>Developers Guide</h2>
          <br>
          <a href="<?php echo $g_docs_url; ?>master-1.2.x/en/developers.html" type="button" class="ex btn btn-default btn-inverse btn-block">
            <i class="icon-eye-open"></i> Browse Docs
          </a>
          <a href="<?php echo $g_docs_url; ?>master-1.2.x/en/developers.pdf" type="button" class="ex btn btn-default btn-inverse btn-block">
            <i class="icon-arrow-down"></i> Download PDF
          </a>
        </div>
      </div>

<?php
include( "bot.php" );
