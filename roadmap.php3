<html>
<head>
<title>Mantis Roadmap</title>
<style>
body { background-color:<? echo $g_white_color ?>; font-family:Verdana, Arial; font-size=10pt }
td {  font-family:Verdana, Arial; font-size=10pt }
p {  font-family:Verdana, Arial; font-size=10pt }
</style>
</head>
<body>

<div align=center>
	<h2>Mantis Roadmap</h2>
	Last modified: <? echo date( "M d, Y - H:m", getlastmod() )?>
</div>

<table width=100%>
<tr valign=top>
	<? include("side_menu.php3") ?>
<td>
<h3>Feature and Version Timetable</h3>

<p>
This is the Mantis feature roadmap.  It lists most fo the currently planned features and details the schedule for release.  These are not hard deadlines and things are subject to change.  Please feel free to suggest features, contribute, or comment.

<p>
<h3>0.15.0</h3>
<ul>
<li>Email notification perferences per user
<li>Optional HTML escpaing
<li>Icon module
<li>Change date_created/added to a DATETIME
<li>After reporting bug, allow choice of navigation
<li>Split core_API into file modules
<li>Switch from enums to indexes
<li>Switch from char(3) to indexes
<li>Fleshed out test settings script
<li>Be able to edit bug info
<li>Attach files to bugs (file upload)
<li>Finer grain control over access to projects
<li>Remember bug entry fields for multiple reports
<li>Document manager (per project)
</ul>
<h3>0.16.0</h3>
<ul>
<li>Bug Search
<li>ETA support
<li>Vote support
<li>Priority support
<li>Projection support
<li>Configuration Documentation
<li>List modified files for each release
</ul>
<h3>0.17.0</h3>
<ul>
<li>Monitor bug (for anyone)
<li>Unread/Read bugs indicator
<li>Logged in Summary
<li>Be able to edit bugnote
<li>Show number of concurrent users
</ul>
<h3>1.x.0</h3>
<ul>
<li>Rework bug formatting
<li>Database abstraction layer
<li>Let administrators customize additional information fields for bug report details (CPU, RAM, etc)
<li>Abstract account management
<li>Related to bug field
</ul>
<h3>2.x.0</h3>
<ul>
<li>Little glyphs and graphics for site
<li>Move towards more complete (XHTML)HTML4/CSS conformance.
<li>Daily/Weekly report generation
<li>Nice bar and line graph charts (phplot)
<li>Print friendly form
<li>IP Tracking / banning
<li>Security Audit
<li>String/form handling Audit
<li>Interfaces for custom configuration
<li>Allow users to specify required fields
<li>Allow user to create own required fields
<li>Move some global settings into the database (?)
<li>"I forgot my password" email (requires different password storage system)
<li>plaintext, one-way crypt, de/encrypt, and no password authentication modes
</ul>
<h3>3.x.0</h3>
<ul>
<li>Rewrite using objects
<li>Templates
</ul>
<h3>Currently Unassigned</h3>
<ul>
<li>Eliminate strtotime()
<li>Complex user profiles
<li>Voting
<li>Moderation queue (?)
<li>Multiple sort keys (?)
</ul>

</font>
<p>
<hr size=1>
</td>
</tr>
</table>

</body>
</html>