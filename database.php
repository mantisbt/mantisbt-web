<? include( "top.php" ); ?>

<span class="page_title">Database</span>
<hr size=1 noshade width="100%" />
<p>
Mantis uses <a href="http://www.mysql.com/">MySQL</a> for it's database needs.  Other database support will follow.
<p>
This is a basic view of the database schema used in Mantis.  Note that MySQL doesn't have real foreign keys.
<p>
<ul>
	<li><a href="mantis/sql/db_generate.sql">Text of current release (<?php echo $g_mantis_version ?>)</a>
	<li><a href="images/mantis-0.17.0.gif">version 0.17.x</a> <? echo round(filesize("images/mantis-0.17.0.gif") / 1024) ?>KB
	<li><a href="images/mantis-0.15.0.gif">version 0.15.x</a> <? echo round(filesize("images/mantis-0.15.0.gif") / 1024) ?>KB
	<li><a href="images/mantis-0.14.0.gif">version 0.14.1</a> <? echo round(filesize("images/mantis-0.14.0.gif") / 1024) ?>KB
	<li><a href="images/mantis-0.13.0.gif">version 0.9.0 to 0.13.1</a> <? echo round(filesize("images/mantis-0.13.0.gif") / 1024) ?>KB
</ul>
<p>
I made these graphs using <a href="http://www.smartdraw.com/">SmartDraw</a>.  I may be using <a href="http://www.microsoft.com/visio/">Visio</a> in the future.  They are both commercial programs.
<p>
Any database experts who'd like to offer their insights can <a href="mailto:kenito@300baud.org">email me</a>.  These changes will likely take place after version 1.0.0
<p>
<span class="section">Porting</span>
<p>
This project has a stated goal of database independence.  Unfortunately, even with a database abstraction packages, this is a rather large task.  More than just the access mechanisms need to be available.  The table data and query behaviors also need to be emulated correctly.  Work will be devoted to this task after the 1.0.0 release.
<p>
As a true database, MySQL is severly lacking in core features, however, in our case it is sufficient.  Just remember to backup your database every few days.
<p>
One of the unforseen benefits of using MySQL is that most of the SQL is very simple.  There are no SUB-SELECTS, no foreign keys, no stored procedures.  Porting efforts should be relatively simple.  Here are some of the key points that require attention in porting efforts.
<p>
<span class="section">Basic database functions:</span>
<ul>
	<li>db_connect()
	<li>db_select_db()
	<li>db_query()
	<li>db_result()
	<li>db_num_rows()
	<li>db_fetch_array()
	<li>db_insert_id()
	<li>db_close()
</ul>

<span class="section">Some notes:</span>
<ul>
	<li>AUTO_INCREMENT - There must be a method for generating a unique id for every entry in a table.  Oracle uses SEQUENCES and TRIGGERS.
	<li>LAST_INSERT_ID() - There needs to be a database mechanism to retrieve the ID of the record that was just inserted.  There are several places in Mantis where multiple inserts take place in one script and each script needs the ID of the previously inserted record.  MSSQL uses something like "SELECT @@IDENTITY AS 'id'" to accomplish this.  Oracle uses the SEQUENCE's currval field.
	<li>count selected rows - Mantis uses mysql_num_rows() to get this number.  An alternative is to return a COUNT(*) in a SQL query.  The COUNT(*) method should work on most databases.
	<li>Transactions - Most databases support transactions except for MySQL.  A support mechanism needs to be built.
</ul>
A good candidate for the database abstraction class is <a href="http://php.weblogs.com/ADODB">ADODB</a>
<? include( "bot.php" ); ?>