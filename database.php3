<html>
<head>
<? include( "css.php3" ) ?>
<title>Mantis</title>
</head>
<body>

<p>
<div align=center>
	<h2>Mantis</h2>
	Last modified: <? echo date( "M d, Y - H:m", getlastmod() )?>
</div>

<p>
<div align=center>

<table width=100%>
<tr valign=top>
	<? include("side_menu.php3") ?>
<td>
<p>
<b><font size=+1>Database Schema</font></b>
<p>
This is a basic view of the database schema used in Mantis.  In my defense it was my first try at a decently sized project and the project has grown out of its original design.  It should and will be re-normalized 'soon'.  The schemas are a bit rough right now.  I should add indicators for index, primary keys, 'foreign keys' (mysql doesn't support these, you have to fake them), unique fields, and relationships (1 to 1, 1 to many, etc).
<p>
<ul>
<li><a href="images/mantis-0.14.0.gif">version 0.14.1</a> <? echo round(filesize("images/mantis-0.14.0.gif") / 1024) ?>KB
<li><a href="images/mantis-0.13.0.gif">version 0.9.0 to 0.13.1</a> <? echo round(filesize("images/mantis-0.13.0.gif") / 1024) ?>KB
</ul>
<p>
Any database experts who'd like to offer their insights can email me.
<p>
<b><font size=+1>Porting</font></b>
<p>
This project has a stated goal of database independence.  The following provide some information to aid in this goal.
<p>
The core package has been developed with mysql.  As a true database mysql is severly lacking in core features, however, in our case it is sufficient.  Just remember to backup your database every few days.
<p>
One of the unforseen 'benefits' of using mysql is that most of the SQL is very simple.  There are no SUB-SELECTS, no foreign keys, no stored procedures.  Porting efforts should be relatively simple.  Here are some of the key points that require attention in porting efforts.
<p>

<b>Basic database functions:</b>
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

<b>Some notes:</b>
<ul>
<li>AUTO_INCREMENT - There must be a method for generating a unique id for every entry in a table.  I believe Oracle uses SEQUENCES.
<li>LAST_INSERT_ID() - There needs to be a database mechanism to retrieve the ID of the record that was just inserted.  There are several places in Mantis where multiple inserts take place in one script and each script needs the ID of the previously inserted record.  I had some feedback that MSSQL uses something like "SELECT @@IDENTITY AS 'id'" to accomplish this.
<li>count returned rows - There should be a way to count the number of returned rows.  Mantis uses mysql_num_rows() to get this number.  An alternative is to return a COUNT() in a SQL query.
</ul>
</td>
</tr>
</table>

</body>
</html>