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
<li>Project title in page title
<li>Icon module
<li>Change date_created/added to a varchar(14)
<li>After reporting bug, allow choice of navigation
<li>Check for already logged in status on login page
<li>List modified files for each release
<li>Split core_API into file modules
<li>Add email string localizations
<li>Eliminate strtotime()
<li>Switch from enums to indexes
<li>Switch from char(3) to indexes
<li>Fleshed out test settings script
</ul>
<h3>0.16.0</h3>
<ul>
<li>Bug Search
<li>ETA support
<li>Vote support
<li>Priority support
<li>Projection support
<li>Unread/Read bugs indicator
<li>Monitor bug (for anyone)
</ul>
<h3>0.17.0</h3>
<ul>
<li>Logged in Summary
<li>Be able to edit bug info
<li>Be able to edit bugnote
<li>Show number of concurrent users
<li>Remember bug entry fields for multiple reports
</ul>
<h3>1.x.0</h3>
<ul>
<li>Rework bug formatting
<li>Configuration Documentation
<li>Attach files to bugs (file upload)
<li>Database abstraction layer
<li>Let administrators customize additional information fields for bug report details (CPU, RAM, etc)
<li>Finer grain control over access to projects
<li>Abstract account management
<li>Related to bug field
</ul>
<h3>2.x.0</h3>
<ul>
<li>Move towards more complete (XHTML)HTML4/CSS conformance.
<li>Daily/Weekly report generation
<li>Nice bar and line graph charts (phplot)
<li>Print friendly form
<li>IP Tracking / banning
<li>Security Audit
<li>String/form handling Audit
<li>Little glyphs and graphics for site
<li>Interfaces for custom configuration
<li>Allow users to specify required fields
<li>Allow user to create own required fields
<li>Move some global settings into the database
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
</ul>

<!-- ---------------------------------------------------------------------- -->
<p>
<hr size=1>
<p>

<font size=-1>
<b>ChangeLog</b>
<p>

<li>version 1.6  February 14, 2001 - Kenzaburo Ito (kenito@300baud.org)<br>
<i>Updated after 0.14.1 release</i>
<li>version 1.5  February 11, 2001 - Kenzaburo Ito (kenito@300baud.org)<br>
<i>Updated after 0.14.0 release</i>
<li>version 1.4  January 15, 2001 - Kenzaburo Ito (kenito@300baud.org)<br>
<i>Added Currently Unassigned.  Removed 0.13.0.  Rearranged item locations</i>
<li>version 1.3  December 25, 2000 - Kenzaburo Ito (kenito@300baud.org)<br>
<i>Moved several items around</i>
<li>version 1.2  December 24, 2000 - Kenzaburo Ito (kenito@300baud.org)<br>
<i>Removed 0.12.0 items, added 0.14.0 milestone</i>
<li>version 1.1  December 23, 2000 - Kenzaburo Ito (kenito@300baud.org)<br>
<i>Added FONT removal</i>
<li>version 1.0  December 15, 2000 - Kenzaburo Ito (kenito@300baud.org)<br>
<i>Initial creation</i>

</font>
<p>
<hr size=1>
</td>
</tr>
</table>

</body>
</html>