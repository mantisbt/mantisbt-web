<?php
	$t_sub_title = "Database";

	include( "top.php" );
?>

<span class="page_title">Database</span>
<hr size="1" noshade="noshade" width="100%" />
<p>
MantisBT uses <a href="http://www.mysql.com/">MySQL</a> for it's database needs.  Other database support will follow.
<p>
This is a basic view of the database schema used in MantisBT.  Note that MySQL doesn't have real foreign keys.
<p>
<ul>
	<li><a href="mantis/sql/db_generate.sql">Text of current release (<?php include("files/VERSION") ?>)</a></li>
	<li><a href="images/mantis-0.17.0.gif">version 0.17.x</a> <?php echo round(filesize("images/mantis-0.17.0.gif") / 1024) ?>KB</li>
	<li><a href="images/mantis-0.15.0.gif">version 0.15.x</a> <?php echo round(filesize("images/mantis-0.15.0.gif") / 1024) ?>KB</li>
	<li><a href="images/mantis-0.14.0.gif">version 0.14.1</a> <?php echo round(filesize("images/mantis-0.14.0.gif") / 1024) ?>KB</li>
	<li><a href="images/mantis-0.13.0.gif">version 0.9.0 to 0.13.1</a> <?php echo round(filesize("images/mantis-0.13.0.gif") / 1024) ?>KB</li>
</ul>
<p>
I made these graphs using <a href="http://www.smartdraw.com/">SmartDraw</a>.  I may be using <a href="http://www.microsoft.com/visio/">Visio</a> in the future.  They are both commercial programs.
<p>
Any database experts who'd like to offer their insights can post on the <a href="mailinglists.php">mantisbt-dev mailing list</a>.  These changes will likely take place after version 1.0.0
<p>
<span class="section">Porting</span>
<p>
This project has a stated goal of database independence.  Unfortunately, even with a database abstraction packages, this is a rather large task.  More than just the access mechanisms need to be available.  The table data and query behaviors also need to be emulated correctly.  Work will be devoted to this task after the 1.0.0 release.
<p>
<span class="section">Porting concerns:</span>
<ul>
	<li>AUTO_INCREMENT - There must be a method for generating a unique id for every entry in a table.  Oracle uses SEQUENCES and TRIGGERS.</li>
	<li>LAST_INSERT_ID() - There needs to be a database mechanism to retrieve the ID of the record that was just inserted.  There are several places in MantisBT where multiple inserts take place in one script and each script needs the ID of the previously inserted record.  MSSQL uses something like "SELECT @@IDENTITY AS 'id'" to accomplish this.  Oracle uses the SEQUENCE's currval field.</li>
	<li>count selected rows - MantisBT uses mysql_num_rows() to get this number.  An alternative is to return a COUNT(*) in a SQL query.  The COUNT(*) method should work on most databases.</li>
	<li>Transactions - MantisBT currently doesn't use this but will switch once MySQL 3.x support is dropped.</li>
</ul>

<?php include( "adsense_vertical_inc.php" ); ?>

<?php include( "bot.php" ); ?>
