<?php
$t_sub_title = "MantisBT Add-ons";
include( "top.php" );
?>

  <div class="row show-grid clear-both">
    <div class="col-sm-12 col-md-12">
      <h1>Add Ons</h1>
    </div>
  </div>
  <br>

  <div class="row show-grid clear-both">
    <div class="col-sm-7 col-md-8">
      <h2><b>Plugins</b></h2>
      <p>
        MantisBT plugin system allows extension of MantisBT through both officially maintained and third party plug-ins.
        Browse the plugin directory to learn more about each plugin.
      </p>
    </div>
    <div class="col-md-1"></div>
    <div class="col-sm-5 col-md-3">
      <br>
      <a class="btn btn-warning" href="wiki/doku.php/mantisbt:plugins:start" onclick="ga('send', 'event', 'Addons', 'Browse Plugins Directory');">
        Browse Plugins Directory</a>
      <div class="clear-both"></div>
      <br>
      <a class="btn btn-warning" href="https://github.com/mantisbt-plugins" onclick="ga('send', 'event', 'Addons', 'Browse Plugins on GitHub');">
        Browse Plugins on GitHub</a>
    </div>
  </div>

<?php
include_once('bot.php');
