<?php
	$t_sub_title = "Roadmap";

	include( "top.php" );
?>

<span class="page_title">Roadmap</span>
<hr size="1" noshade="noshade" width="100%" />
<br />

<span class="section">MantisBT 1.1.0</span>
<ul>
	<li><b>Databases</b></li>
	<ul>
		<li>Official support for MS SQL Server (several fixes during installation and normal usage).</li>
		<li>Add experimental Oracle support.</li>
	</ul>

	<br />

	<li><b>Configuration</b></li>
	<ul>
		<li>Provide a screen that reports all the configuration data stored in the database.</li>
		<li>Provide means for administrators to set configuration from MantisBT UI.</li>
		<li>Provide means for administrators to set general, project specific, user specifc, project+user specific configurations.</li>
	</ul>

	<br />

	<li><b>Features</b></li>
	<ul>
		<li>Support authenticated RSS feeds for news, issues and issue filters.</li>
	</ul>

	<br />

	<li><b>Packages</b></li>
	<ul>
		<li>Upgrade to ADODB v4.80.</li>
		<li>Upgrade to PHPMailer 1.73.</li>
	</ul>
</ul>

<br />

<span class="section">MantisBT 2.0</span>
<ul>
	<li><b>Templates (probably http://smarty.php.net)</b></li>
	<ul>
		<li>Allow users to choose any subset of supported fields in view/update/print pages.</li>
		<li>Allow users to define the mandatory fields (eg: by definining [field_name]_mandatory hidden field in the template).</li>
		<li>Allow users to customize the look 'n' feel of MantisBT by providing their own templates.</li>
		<li>Allow users to define templates to be used in generation of email notifications.</li>
		<li>One theme may include several templates for the same page (same like simple/advanced now).</li>
		<li>Get rid of redundant code by providing one view page rather than simple/advanced/print).</li>
		<li>Allow users to customise fields that appear in View Issues page via a template (unless it is customisable as a setting per user per project).</li>
	</ul>

	<br />

	<li><b>Database</b></li>
	<ul>
		<li>Add primary key to every table (eg category lack this)</li>
		<li>Add indices to improve performance, specially for the free text search feature.</li>
	</ul>

	<br />

	<li><b>Email Notifications</b></li>
	<ul>
		<li>Optional support for queueing email notifications in a database table, and sending them using a cronjob.</li>
		<li>Add optional support for HTML emails.</li>
		<li>Add email templates (where the user can provide a template for the email message, and values can be substitute in the user's template).</li>
		<li>Email footer and header templates.</li>
		<li>Per project email settings.</li>
		<li>Email subject lines should be more easily customizable.</li>
		<li>Add X-MantisBT: headers for easy email filtering by project, bug status, etc.</li>
	</ul>

	<br />
</ul>

<?php
/*
?>
<span class="section">Future</span>
<ul>

	<br />

	<li><b>Javascript</b></li>
	<ul>
		<li>Rename forms to avoid conflicts</li>
		<li>Auto focus for entry fields</li>
		<li>Disable Submit Button after clicking to prevent double entry Javascript</li>
		<li>Highlight Table Rows on mouse over.  Clicking will make highlight sticky.</li>
	</ul>

	<br />

	<li><b>UI</b></li>
	<ul>
		<li>Breakup Report bug page into sections to improve readability.</li>
		<li>Breakup per project access list like user list (alpha groupings).</li>
		<li>Remove Operation Succeed messages.</li>
	</ul>

	<br />

	<li><b>Custom Fields</b></li>
	<ul>
		<li>Support date custom fields.</li>
		<li>Custom fields should support being a listbox type.</li>
	</ul>

	<br />

	<li><b>RSS</b></li>
	<ul>
		<li>Replace existing RSS with http://freshmeat.net/projects/feedcreator/ to be compliant with GPL.</li>
	</ul>

	<br />

	<li><b>New Fields</b></li>
	<ul>
		<li>New field - Component Field - Use like a subcategory</li>
		<li>New field - Discovered In Phase Field</li>
		<li>New field - Report what part of the product lifecycle an issue was discovered in.</li>
		<li>New field - Create like Version/Categories</li>
		<li>New field - Target Resolution Date</li>
		<li>New field - Target Version</li>
	</ul>

	<br />

	<li>Option to obfuscate emails (user at server dot com)</li>
	<li>Multiple sort keys (?) - let people select more than one ordering for searches (complicated interface)</li>
	<li>Create file hierarchy for docs, config, etc.</li>
	<li>Rework HTML posting</li>
	<li>Show number of concurrent users - like Freshmeat.net</li>
	<li>Little glyphs and graphics for site - asthetic niceties</li>
	<li>Abstract account management - make it easier for other packages to be integrated</li>
	<li>PDF report generation - same as report generation expect into PDF format</li>
	<li>Nice bar and line graph charts (phplot/jpgraph) - generate plots based on the stats</li>
	<li>IP Tracking / banning - prevent spamming or harrassment from users</li>
	<li>Daily/Weekly report generation - generate a complex summary of the past day/week/month/year either on demand or via a cronjob or scheduled task</li>
	<li>String/form handling Audit - make sure illegal and unsafe input is not allowed</li>
	<li>Allow users to specify required fields.</li>
	<li>Eliminate strtotime()</li>
	<li>Complex user profiles</li>
	<li>Moderation queue (?)</li>
	<li>User definable display fields (view all bugs page)</li>
	<li>NNTP Mirroring (with threading)</li>

	<li>Alert Engine - Cronjob that will generate Alerts based on user constructed rules. Alerts on a per project, per user basis.</li>
	<li>Multiple transports beyond just emails (SMS, IM, etc.)</li>
	<li>Attempt to interface with emails via procmail.</li>
	<li>BBCode style markup notation.</li>
	<li>Support Bugzilla style emails where the changes in the bug are highlighted in the email (similar to cvs diff -u for old / new bug email)</li>
</ul>
<?php
*/
?>

<?php include( "adsense_vertical_inc.php" ); ?>

<?php include( "bot.php" ); ?>
