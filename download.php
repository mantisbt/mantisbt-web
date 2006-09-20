<?php include( "top.php" ); ?>

<span class="page_title">Download</span>
<hr size="1" noshade="noshade" width="100%" />

<p>Mantis is compressed in <span class="code">.tar.gz</span> format which any reasonable decompression program can handle (Unix tar/gunzip, <a href="http://www.7-zip.org/">7-zip</a>, <a href="http://www.winzip.com/">Winzip</a>).</p>
<p class="center"><a class="bold" href="http://sourceforge.net/project/showfiles.php?group_id=14963&package_id=166159">Download Mantis <?php @include("files/VERSION_STABLE") ?></a></p>
<p class="center"><a class="bold" href="http://sourceforge.net/project/showfiles.php?group_id=14963">Download Mantis <?php @include("files/VERSION") ?></a></p>
<p>The <a href="http://manual.mantisbugtracker.com/manual.installation.upgrading.php">UPGRADING</a> file contains information on upgrading from one version to the next.  Generally, micro releases just require you to copy over files.  Major and minor releases will require you to run the admin_upgrade.php script.  It is always a good idea to back up your database and files before upgrading.</p>
<p><span class="section">Mantis Distributions</span></p>
<p>Mantis is distributed with several <a href="http://wiki.mantisbugtracker.com/doku.php/mantisbt:distributions">GNU/Linux distributions</a>.  Typically the Mantis versions in these distributions are not the latest.  For the latest Mantis version use the links above.</p>

<?php include( "adsense_vertical_inc.php" ); ?>

<?php include("bot.php"); ?>