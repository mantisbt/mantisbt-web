<?php include( "top.php" ); ?>

<span class="page_title">Roadmap</span>
<hr size=1 noshade width="100%" />
<!--
<br />
This is the Mantis feature roadmap.  It lists most of the currently planned features and details the schedule for release.  These are not hard deadlines and are subject to change.  Occasionally things will get out of date or out of order as schedules are wont to do.  Please feel free to suggest features, contribute, or comment.
-->
<br />

<span class="section">0.18.2</span>
<ul>
	<li>Generic email notifications for user defined statuses.</li>
	<li>Support RSS for news syndication.</li>
	<li>Add Lithuanian language.</li>
</ul>

<span class="section">0.19.0</span>
<ul>
	<li>Database abstraction layer (ADOdb)- allow for Postgres, MS, and more.</li>
	<li>Enhanced filter with load/save query.  Also support for public/private queries.</li>
	<li>Support for more custom field types.</li>
	<li>Support for release information + associated downloads.</li>
	<li>Support merging of duplicate bugs.</li>
	<li>Resolve issues with JpGraph integration.</li>
</ul>

<span class="section">Future</span>
<ul>
	<li>Move configuration variables into the database</li>
	<li>Bug relationship fields (Duplicate of, Depends on, Parent of, etc.)</li>
	<li>Have user settings per project - email preferences should be configurable on a per project basis</li>
	<li>Multiple sort keys (?) - let people select more than one ordering for searches (complicated interface)</li>
	<li>ETA support</li>
	<li>Priority support</li>
	<li>Projection support</li>
	<li>Create file hierarchy for docs, config, etc.</li>
	<li>Rework HTML posting</li>
	<li>Show number of concurrent users - like Freshmeat.net</li>
	<li>Little glyphs and graphics for site - asthetic niceties</li>
	<li>Mantis Logo - about time, right?</li>
	<li>Rework bug formatting - adjust to any changes that need to be made (especially in simpler vs. advanced mode)</li>
	<li>Abstract account management - make it easier for other packages to be integrated</li>
	<li>PDF report generation - same as report generation expect into PDF format</li>
	<li>Nice bar and line graph charts (phplot/jpgraph) - generate plots based on the stats</li>
	<li>IP Tracking / banning - prevent spamming or harrassment from users</li>
	<li>"I forgot my password" email (requires different password storage system)</li>
	<li>Use of Smarty Templates</li>
	<li>Daily/Weekly report generation - generate a complex summary of the past day/week/month/year either on demand or via a cronjob or scheduled task</li>
	<li>String/form handling Audit - make sure illegal and unsafe input is not allowed</li>
	<li>Interfaces for custom configuration.</li>
	<li>Allow users to specify required fields.</li>
	<li>Eliminate strtotime()</li>
	<li>Complex user profiles</li>
	<li>Moderation queue (?)</li>
	<li>User definable display fields (view all bugs page)</li>
	<li>Rewrite Email module</li>
	<li>NNTP Mirroring (with threading)</li>
</ul>

<?php include( "bot.php" ); ?>