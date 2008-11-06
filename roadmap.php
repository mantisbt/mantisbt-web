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

<?php include( "adsense_vertical_inc.php" ); ?>

<?php include( "bot.php" ); ?>
