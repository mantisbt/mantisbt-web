<?php include( "top.php" ); ?>

<span class="page_title">Roadmap</span>
<hr size="1" noshade="noshade" width="100%" />
<br /><span class="section">Mantis 0.19.0</span><ul>	<li><b>Main Features</b></li>
	<ul>		<li><b>[done]</b> Sponsorships</li>
		<li><b>[done]</b> Issue relationships (Duplicate of, Related to, Parent of, etc.)</li>
		<li><b>[done]</b> My View page for providing the user with a one page summary of relevant information.</li>		<li><b>[done]</b> Database abstraction through using ADODB (http://php.weblogs.com/ADODB).</li>
		<li><b>[done]</b> Advanced Filters</li>
		<li><b>[done]</b> Changelog</li>
	</ul>
	<br />

	<li><b>Filters</b></li>
	<ul>		<li><b>[done]</b> Support saving of filters.</li>		<li><b>[done]</b> Support filtering by date range.</li>		<li><b>[done]</b> Support filtering on custom fields.</li>		<li><b>[done]</b> Store filters in database rather than cookies.</li>		<li><b>[done]</b> Create enhanced filters on all/more fields (eg: resolution, monitored by, fixed in version, ...etc).</li>
        <li><b>[done]</b> Create advanced filters with multiple selection support.</li>
	</ul>

	<br />

	<li><b>Email Notifications</b></li>
	<ul>
		<li><b>[done]</b> Only support PHPMailer for sending emails. Bundle PHPMailer with Mantis.</li>
		<li><b>[done]</b> Send an email per user.</li>
	</ul>
	<br />

	<li><b>Custom Fields</b></li>
	<ul>		<li><b>[done]</b> Support custom fields in resolved/closed bug page.</li>		<li><b>[done]</b> Make custom fields mandatory at reporting, updating, resolving, or closing stage.</li>		<li><b>[done]</b> Support list box custom fields</li>	</ul>
	<br />

	<li><b>Miscellaneous</b></li>
	<ul>
		<li><b>[done]</b> Remove Documentation links</li>		<li><b>[done]</b> Fixed in Version</li>		<li><b>[done]</b> Forgot password support</li>
	</ul></ul>
<br />

<span class="section">Mantis 0.19.1</span>
<ul>
	<li><b>General</b></li>
	<ul>
		<li><b>[done]</b> Relationship graphs.</li>
		<li><b>[done]</b> Fixing search in notes.</li>
		<li><b>[done]</b> Ability to specify project id on changelog url.</li>
		<li><b>[done]</b> Add [prev] / [next] to navigate between issues.</li>
		<li><b>[done]</b> Summary should only show information about accessible projects.</li>
	</ul>
</ul>


<span class="section">Mantis 1.0.0</span><ul>	<li><b>General</b></li>
	<ul>
		<li>Mantis Logo</li>
		<li>Support PHP v5</li>
		<li>Provide API to allow users to implement custom linking with external user database (eg: NIS, LDAP, Content Management, Email Server)</li>
	</ul>

	<br />

	<li><b>Templates (probably http://smarty.php.net)</b></li>
	<ul>
		<li>Allow users to choose any subset of supported fields in view/update/print pages.</li>
		<li>Allow users to define the mandatory fields (eg: by definining [field_name]_mandatory hidden field in the template).</li>
		<li>Allow users to customize the look 'n' feel of Mantis by providing their own templates.</li>
		<li>Allow users to define templates to be used in generation of email notifications.</li>
		<li>One theme may include several templates for the same page (same like simple/advanced now).</li>
		<li>Get rid of redundant code by providing one view page rather than simple/advanced/print).</li>
		<li>Allow users to customise fields that appear in View Issues page via a template (unless it is customisable as a setting per user per project).</li>
	</ul>

	<br />

	<li><b>Move configurations to database</b></li>
	<ul>
		<li>Allow control such configuration through web pages.</li>
		<li>Allow per project settings, per user settings, per user/per project settings.</li>
	</ul>

	<br />

	<li><b>Database</b></li>
	<ul>
		<li>Official support for MS SQL</li>
		<li>Official support for PostgreSQL</li>
		<li>Change database upgrade system to get rid of db_generate (version per DBMS) and to have a db version rather than upgrade list</li>
		<li>Add primary key (category_id) to category table.</li>
		<li>Add indices to improve performance, specially for the free text search feature.</li>
	</ul>

	<br />

	<li><b>Custom Fields</b></li>
	<ul>
		<li>Support auto-populated custom fields (eg: version), this will probably use custom functions.</li>
		<li>Support date custom fields</li>
	</ul>
</ul>

<?php
/*
?>
<span class="section">Future</span>
<ul>
	<li><b>Email Notifications</b></li>
	<ul>
		<li>Add optional support for HTML emails.</li>
		<li>Add email templates (where the user can provide a template for the email message, and values can be substitute in the user's template).</li>
		<li>Email footer and header templates.</li>
		<li>Per project email settings.</li>
		<li>Email subject lines should be more easily customizable.</li>
		<li>Add X-Mantis: headers for easy email filtering by project, bug status, etc.</li>
	</ul>

	<br />

	<li><b>Javascript</b></li>
	<ul>
		<li>Rename forms to avoid conflicts</li>
		<li>Auto focus for entry fields</li>
		<li>Disable Submit Button after clicking to prevent double entry Javascript</li>
		<li>Add Select All for view all bugs page</li>
		<li>Highlight Table Rows on mouse over.  Clicking will make highlight sticky.</li>
	</ul>

	<br />

	<li><b>Database</b></li>
	<ul>
		<li>Add Database Indexes</li>
		<li>Add PK to every bug table (eg version and category lack this)</li>
		<li>Renamed id to more descriptive names (bug_id, project_id, etc.)</li>
		<li>Move configuration variables into the database</li>
	</ul>

	<br />

	<li><b>UI</b></li>
	<ul>
		<li>Breakup Report bug page into sections to improve readability.</li>
		<li>Breakup per project access list like user list (alpha groupings).</li>
		<li>Remove Operation Succeed messages.</li>
		<li>Make sure all delete operations have a confirmation page.</li>
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
		<li>RSS for Issues.</li>
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

	<li>Alert Engine - Cronjob that will generate Alerts based on user constructed rules. Alerts on a per project, per user basis.
	<li>Multiple transports beyond just emails (SMS, IM, etc.)
	<li>Attempt to interface with emails via procmail.
	<li>BBCode style markup notation.</li>
	<li>Support Bugzilla style emails where the changes in the bug are highlighted in the email (similar to cvs diff -u for old / new bug email)</li>
</ul>
<?php
*/
?>

<td style="padding: 4px;">
<?php include( "adsense_vertical_inc.php" ); ?>
</td>

<?php include( "bot.php" ); ?>