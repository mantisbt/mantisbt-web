<html>
<head>
<? include( "css.php3" ) ?>
<title>Mantis Roadmap</title>
</head>
<body>

<div align=center>
	<h2>Mantis Roadmap</h2>
	Last modified: <? echo date( "M d, Y - H:m", getlastmod() )?>
</div>

<table width=100%>
<tr valign=top>
	<? include("side_menu.php3") ?>
<td width=100%>
<h3>Feature and Version Timetable</h3>

<p>
This is the Mantis feature roadmap.  It lists most fo the currently planned features and details the schedule for release.  These are not hard deadlines and things are subject to change.  Please feel free to suggest features, contribute, or comment.
<p>
*** I've broken the releases into (hopefully) smaller chunks of work.  This is an attempt to speed up the frequency of releases.  Also, smaller releases are easier to manage.

<p>
<h3>0.15.0</h3>
<ul>
<li>Email notification perferences per user
<li>Optional HTML escpaing
<li>Icon module
<li>Change date_created/added to a DATETIME
<li>After reporting bug, allow choice of navigation
<li>Split core_API into file modules
<li>Switch from ENUMs to INT(2)
<li>Switch from CHAR(3) to INT(2)
<li>Be able to edit bug info
<li>Attach files to bugs (file upload)
<li>Finer grain control over access to projects
<li>Remember bug entry fields for multiple reports
<li>Document manager (per project)
</ul>
<h3>0.16.0</h3>
<ul>
<li>Bug Search (Simple) - basic bug searching; search by id; search by keyword; few options
<li>No crypt() authentication - crypt() is causing major headaches for Windows users; provide an alternative
<li>Configuration Documentation - list basic ways in which Mantis can be customized; quickstart guide for customization needs
<li>List modified files for each release - let users know what exactly has changed in each upgrade
<li>Fleshed out test settings script - let admins easily diagnose if settings are correct and where possible problems in new installations may be
</ul>
<h3>0.17.0</h3>
<ul>
<li>Have user settings per project - email preferences should be configurable on a per project basis
<li>Vote support - users may add a 'me too' vote to assist in showing which bugs are most common
<li>ETA support -
<li>Priority support -
<li>Projection support -
<li>Be able to edit bugnote - let users edit instead of having to delete and re-add
<li>Logged in Summary ( bugs reported, assigned, new in last week, high priority, open long time, etc. )
<li>Show number of concurrent users - like Freshmeat.net
</ul>
<h3>0.18.0</h3>
<ul>
<li>Bug Search (Advanced) - fleshed out search with multiple options (search in bugnotes, categories, etc)
<li>Monitor bug (for anyone) - users can click a 'Monitor Bug' option to let them be included in the email notifications
<li>Unread/Read bugs indicator - developers and updaters will see a icon indicating an unread bug
<li>Multiple sort keys (?) - let people select more than one ordering for searches (complicated interface)
</ul>

<h3>0.19.0</h3>
<ul>
<li>Mantis Logo - about time, right?
<li>Print friendly form - user fewer table elements; more like email; also for summary and view all bugs
</ul>

<h3>1.x.0</h3>
<ul>
<li>Rework bug formatting - adjust to any changes that need to be made (especially in simpler vs. advanced mode)
<li>Database abstraction layer - allow for Postgres, MS, and more
<li>Let administrators customize additional information fields for bug report details (CPU, RAM, etc) - using a simple interface, let the admin add fields to the bug report. this will make the entry of these fields more explicit
<li>Abstract account management - make it easier for other packages to be integrated
<li>Related to bug field - similar to duplicate ID; maybe lead to a dependency graph (are these worth it?)
</ul>
<h3>2.x.0</h3>
<ul>
<li>Little glyphs and graphics for site - asthetic niceties
<li>Move towards more complete (XHTML)HTML4/CSS conformance - except for form handling which requires nonstandard formatting
<li>Daily/Weekly report generation - generate a complex summary of the past day/week/month/year either on demand or via a cronjob or scheduled task
<li>PDF report generation - same as report generation expect into PDF format
<li>Nice bar and line graph charts (phplot) - generate plots based on the stats
<li>IP Tracking / banning - prevent spamming or harrassment from users
<li>Security Audit - examine every line, form, cookies, passwords, authetication for security weaknesses
<li>String/form handling Audit - make sure illegal and unsafe input is not allowed
<li>Interfaces for custom configuration -
<li>Allow users to specify required fields -
<li>Allow user to create own required fields -
<li>Move some global settings into the database (?) - potential performanc hit; advantage is simpler upgrading
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
<li>Moderation queue (?)
<li>User definable display fields (view all bugs page)
<li>Email module
<li>NNTP Mirroring (with threading)
<li>Sort view bugs by any field
<li>Auto update config file
<li>Auto show differences in config file when upgrading
<li>Improve Manage Page's "Hide Inactive"
</ul>

</font>
<p>
<hr size=1>
</td>
</tr>
</table>

</body>
</html>