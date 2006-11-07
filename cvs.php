<?php include( "top.php" ); ?>

<span class="page_title">Source Code</span>

<hr size="1" noshade="noshade" width="100%" />

<br />

<span class="section">CVS</span>

<p>Mantis uses <a href="http://www.cyclic.com/">CVS</a> to store and control its source code.  
The module name for Mantis source code is <em>mantisbt</em>.</p>
<br />
<p class="center"><a class="bold" href="http://sourceforge.net/cvs/?group_id=14963" target="_blank">Mantis CVS</a></p>
<p class="center"><a class="bold" href="http://mantisbt.cvs.sourceforge.net/mantisbt/" target="_blank">Browse Mantis CVS</a></p>

<span class="section">Rsync</span>

<p>The access to the latest CVS code is available to developers.  If you don't have developer access to CVS, you
can still get the latest Mantis code using Rsync:</p>

<p><pre>rsync -av rsync://mantisbt.cvs.sourceforge.net/cvsroot/mantisbt/* .</pre></p>

<p>Note that you cannot rsync the entire cvsroot rsync module for performance reasons.</p>

<p>Download rsync for <a href="http://samba.anu.edu.au/rsync/" target="_blank">Linux</a> or <a href="http://www.itefix.no/phpws/index.php?module=pagemaster&PAGE_user_op=view_page&PAGE_id=6&MMN_position=23:23" target="_blank">Windows</a>.</p>

<?php include( "adsense_vertical_inc.php" ); ?>

<?php include( "bot.php" ); ?>
