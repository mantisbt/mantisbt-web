<?php include( "top.php" ); ?>

<span class="page_title">Roadmap</span>
<hr size=1 noshade width="100%" />
<p>
The following roadmap is currently out-of-date.  The development team is currently working on putting together an updated one.
<!--
This is the Mantis feature roadmap.  It lists most of the currently planned features and details the schedule for release.  These are not hard deadlines and are subject to change.  Occasionally things will get out of date or out of order as schedules are wont to do.  Please feel free to suggest features, contribute, or comment.
-->
<p>

<span class="section">0.19.0</span>
<ul>
	<li>Move configuration variables into the database
	<li>Have user settings per project - email preferences should be configurable on a per project basis
	<li>Bug relationship fields (Duplicate of, Depends on, Parent of, etc.)
	<li>List modified files for each release - let users know what exactly has changed in each upgrade
	<li>Mantis Logo - about time, right?
	<li>Little glyphs and graphics for site - asthetic niceties
	<li>Show number of concurrent users - like Freshmeat.net
	<li>Rework HTML posting
	<li>Create file hierarchy for docs, config, etc.
	<li>Bug Search (Advanced) - fleshed out search with multiple options (search in bugnotes, categories, etc)
	<li>Multiple sort keys (?) - let people select more than one ordering for searches (complicated interface)
	<li>ETA support
	<li>Priority support
	<li>Projection support
</ul>

<span class="section">1.x.x</span>
<ul>
	<li>Rework bug formatting - adjust to any changes that need to be made (especially in simpler vs. advanced mode)
	<li>Abstract account management - make it easier for other packages to be integrated
</ul>
<span class="section">2.x.x</span>
<ul>
	<li>Database abstraction layer - allow for Postgres, MS, and more
	<li>Daily/Weekly report generation - generate a complex summary of the past day/week/month/year either on demand or via a cronjob or scheduled task
	<li>Move towards more complete (XHTML)HTML4/CSS conformance - except for form handling which requires nonstandard formatting
	<li>PDF report generation - same as report generation expect into PDF format
	<li>Nice bar and line graph charts (phplot/jpgraph) - generate plots based on the stats
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
<span class="section">3.x.x</span>
<ul>
	<li>Rewrite using objects
	<li>Templates
</ul>

<span class="section">Unassigned</span>
<ul>
	<li>Eliminate strtotime()
	<li>Complex user profiles
	<li>Moderation queue (?)
	<li>User definable display fields (view all bugs page)
	<li>Email module
	<li>NNTP Mirroring (with threading)
	<li>Auto update config file
	<li>Auto show differences in config file when upgrading
</ul>

<?php include( "bot.php" ); ?>