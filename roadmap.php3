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
This is the Mantis feature roadmap.  It lists all the currently planned features and details the schedule for release.  These are not hard deadlines and things are subject to change.  Please feel free to suggest features, contribute, or comment.
<p>

<h3>0.14.0</h3>
<ul>
<li>Bug Search
<li>Email notification
<li>Multiple project support
<li>One click "Assign to Me"
<li>Move more CSS variables into config
<li>Move more META variables into config
<li>Add &nbsp to empty tables for NS
</ul>
<h3>1.x.0</h3>
<ul>
<li>Test settings script
<li>ETA support
<li>Vote support
<li>Priority support
<li>Projection support
<li>Rework bug formatting
<li>Configuration Documentation
<li>Attach files to bugs (file upload)
<li>Database abstraction layer (PEAR?)
<li>Let administrators customize additional information fields for bug report details (CPU, RAM, etc)
<li>Let users create their own accounts and have passwords emailed to them
</ul>
<h3>2.x.0</h3>
<ul>
<li>Remove all &lt;FONT&gt; tags and move towards HTML4/CSS conformance.
<li>PHPLIB/PEAR?
<li>HTTP Authentication?
<li>Session support
<li>Complete XHTML/CSS conformance?
<li>Daily/Weekly report generation
<li>Print friendly form
<li>IP Tracking / banning
<li>Security Audit
<li>String/form handling Audit
<li>Little glyphs and graphics for site
<li>Interfaces for custom configuration
<li>Allow users to specify required fields
<li>Allow user to create own required fields
<li>Move some global settings into the database
<li>"I forgot my password" email (requires different password storage system
</ul>
<h3>3.x.0</h3>
<ul>
<li>Rewrite using objects
</ul>
<h3>Currently Unassigned</h3>
<ul>
<li>Be able to edit bug info
<li>Be able to edit bugnote
<li>Remeber view bug settings
<li>Remember previous entry settings
<li>Summary by assignee
<li>Graphical Charts
<li>Unread/Read bugs indicator
<li>Clear text password authentication option
</ul>

<!-- ---------------------------------------------------------------------- -->
<p>
<hr size=1>
<p>

<font size=-1>
<b>ChangeLog</b>
<p>

<li>version 1.4  January 15, 2001 - Kenzaburo Ito (prescience@300baud.org)<br>
<i>Added Currently Unassigned.  Removed 0.13.0.  Rearranged item locations</i>
<li>version 1.3  December 25, 2000 - Kenzaburo Ito (prescience@300baud.org)<br>
<i>Moved several items around</i>
<li>version 1.2  December 24, 2000 - Kenzaburo Ito (prescience@300baud.org)<br>
<i>Removed 0.12.0 items, added 0.14.0 milestone</i>
<li>version 1.1  December 23, 2000 - Kenzaburo Ito (prescience@300baud.org)<br>
<i>Added FONT removal</i>
<li>version 1.0  December 15, 2000 - Kenzaburo Ito (prescience@300baud.org)<br>
<i>Initial creation</i>

</font>
<p>
<hr size=1>
</td>
</tr>
</table>

</body>
</html>