<? include( "top.php3" ); ?>

<span class="page_title">Roadmap</span>
<hr size=1 noshade width="100%">
<p>
This is the Mantis feature roadmap.  It lists most of the currently planned features and details the schedule for release.  These are not hard deadlines and are subject to change.  Please feel free to suggest features, contribute, or comment.
<p>

<span class="section">0.16.0</span>
<ul>
	<li>Rework HTML posting
	<li>Create file hierarchy for docs, config, etc.
	<li>Configuration Documentation - list basic ways in which Mantis can be customized; quickstart guide for customization needs
	<li>List modified files for each release - let users know what exactly has changed in each upgrade
	<li>Fleshed out test settings script - let admins easily diagnose if settings are correct
	<li>Print friendly form - use fewer table elements; more like email; also for summary and view all bugs
	<li>Break up config_inc.php into commonly modified items to avoid upgrade headaches
	<li>Lockdown security permissions
	<li>Allow for project/bug_id email links to work properly.
</ul>
<span class="section">0.17.0</span>
<ul>
	<li>Have user settings per project - email preferences should be configurable on a per project basis
	<li>Vote support - users may add a 'me too' vote to assist in showing which bugs are most common
	<li>ETA support -
	<li>Priority support -
	<li>Projection support -
	<li>Logged in Summary ( bugs reported, assigned, new in last week, high priority, open long time, etc. )
	<li>Show number of concurrent users - like Freshmeat.net
</ul>
<span class="section">0.18.0</span>
<ul>
	<li>Bug Search (Advanced) - fleshed out search with multiple options (search in bugnotes, categories, etc)
	<li>Multiple sort keys (?) - let people select more than one ordering for searches (complicated interface)
	<li>Monitor bug (for anyone) - users can click a 'Monitor Bug' option to let them be included in the email notifications
	<li>Unread/Read bugs indicator - developers and above will see a icon indicating an unread bug
</ul>

<span class="section">0.19.0</span>
<ul>
	<li>Mantis Logo - about time, right?
	<li>Little glyphs and graphics for site - asthetic niceties
	<li>Break up Mantis into subdirectories (docs, config, images, etc.)
</ul>

<span class="section">1.x.x</span>
<ul>
	<li>Rework bug formatting - adjust to any changes that need to be made (especially in simpler vs. advanced mode)
	<li>Let administrators customize additional information fields for bug report details (CPU, RAM, etc) - using a simple interface, let the admin add fields to the bug report. this will make the entry of these fields more explicit
	<li>Abstract account management - make it easier for other packages to be integrated
	<li>Related to bug field - similar to duplicate ID; maybe lead to a dependency graph (are these worth it?)
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
	<li>Sort view bugs by any field
	<li>Auto update config file
	<li>Auto show differences in config file when upgrading
</ul>

<? include( "bot.php3" ); ?>