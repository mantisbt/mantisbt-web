<?php
$t_sub_title = "Documentation";
include( "top.php" );
?>


  <div id="breadcrumb">
    <ul>
      <li class="home"><a href="index.php">Home</a></li>
      <li><a href="index.php">MantisBT</a></li>
      <li>Documentation</li>
    </ul>
  </div>

  <div class="row show-grid clear-both">

    <div class="col-md-8 col-sm-8">
      <h1>MantisBT Documentation</h1>

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

  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="alert alert-note">
        <h2>Developer Documentation</h2>
        <p>For developer-oriented documentation please see <a href="development.php">the development page</p>
      </div>
    </div>
  </div>


  <br><br>

<?php
include( "bot.php" );
