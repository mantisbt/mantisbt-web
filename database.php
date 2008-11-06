<?php
	$t_sub_title = "Database";

	include( "top.php" );
?>

<span class="page_title">Database</span>
<hr size="1" noshade="noshade" width="100%" />
<p />
MantisBT uses <a href="http://www.mysql.com/">MySQL</a> for it's database needs.  Other database support will follow.
<p />
This is a basic view of the database schema used in MantisBT.
<p />
<ul>
	<li><a href="images/mantis-0.17.0.gif">version 0.17.x</a> <?php echo round(filesize("images/mantis-0.17.0.gif") / 1024) ?>KB</li>
	<li><a href="images/mantis-0.15.0.gif">version 0.15.x</a> <?php echo round(filesize("images/mantis-0.15.0.gif") / 1024) ?>KB</li>
	<li><a href="images/mantis-0.14.0.gif">version 0.14.1</a> <?php echo round(filesize("images/mantis-0.14.0.gif") / 1024) ?>KB</li>
	<li><a href="images/mantis-0.13.0.gif">version 0.9.0 to 0.13.1</a> <?php echo round(filesize("images/mantis-0.13.0.gif") / 1024) ?>KB</li>
</ul>
<p />
Any database experts who'd like to offer their insights can post on the <a href="mailinglists.php">mantisbt-dev mailing list</a>. 
<p />
<span class="section">ADODB</span>
<p />
This project has a stated goal of database independence.  Unfortunately, even with a database abstraction packages, this is a rather large task. Currently support for other databases is experimental. 
<p>

<?php include( "adsense_vertical_inc.php" ); ?>

<?php include( "bot.php" ); ?>
