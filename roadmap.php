<?php include( "top.php" ); ?>

<span class="page_title">Roadmap</span>
<hr size=1 noshade width="100%" />

<span class="section">0.19.0</span>
<ul>
<p><p><b>Database abstraction</b><p>
	<li><b>[done]</b> Ready the code for ADODB (http://php.weblogs.com/ADODB)?</li>
<p><p><b>Re-implement Email Notifications</b><p>
	<li><b>[done]</b> Only support PHPMailer for sending emails. Bundle Mantis with PHPMailer.
	<li><b>[done]</b> Send an email per user.</li>
	<li>Support Bugzilla style emails where the changes in the bug are highlighted in the email (similar to cvs diff -u for old / new bug email)
	<li>Add optional support for HTML emails.
	<li>Add email templates (where the user can provide a template for the email message, and values can be substitute in the user's template).
	<li>Email footer and header templates.
	<li>All bug data should be made available for full use of templates.
	<li>Per project email settings.
	<li>Email subject lines should be more easily customizable.
	<li>Option to obfuscate emails (user at server dot com)
	<li>Add X-Mantis: headers for easy email filtering by project, bug status, etc.
<p><b>RSS</b><p>
	<li>Replace existing RSS with http://freshmeat.net/projects/feedcreator/ to be compliant with GPL.
<p><b>Custom Fields</b><p>
	<li>Support date custom fields.
	<li>Support custom fields in resolved/closed bug page.
	<li>Make custom fields mandatory at reporting, updating, resolving, or closing stage.
	<li>Custom fields should support being a listbox type.

<p><b>Filters</b><p>
	<li><b>[done]</b> Create Saved Queries</li>
	<li><b>[done]</b> Filters will be stored in the database instead of cookies.</li>
	<li><b>[done]</b> Add date range filter</li>
	<li><b>[done]</b> Create enhanced search to filter on all/more fields.</li>
	<li><b>[done]</b> Support filtering on custom fields.</li>
        <li>Create advanced search with multiple selection support for fields.</li>
<p><b>Javascript</b><p>
	<li>Rename forms to avoid conflicts
	<li>Auto focus for entry fields
	<li>Disable Submit Button after clicking to prevent double entry Javascript
	<li>Add Select All for view all bugs page
	<li>Highlight Table Rows on mouse over.  Clicking will make highlight sticky.
<p><b>Passwords</b><p>
	<li>Add forgot password reset option - New password will be generated and sent to user.  Old password kept until new password successfully used.
<p><b>UI</b><p>
	<li>Breakup Report bug page into sections to improve readability.
	<li>Remove Documentation links
	<li>Breakup per project access list like user list (alpha groupings).
	<li>Remove Operation Succeed messages.
	<li>Make sure all delete operations have a confirmation page.
<p><b>Database</b><p>
	<li>Add Database Indexes
	<li>Add PK to every bug table (eg version and category lack this)
	<li>Renamed id to more descriptive names (bug_id, project_id, etc.)
<p><b>Misc</b><p>
	<li>BBCode style markup notation.
<p>
<b>New Fields</b>
<p>
	<li>Component Field - Use like a subcategory
	<li>Discovered In Phase Field
	<li>Report what part of the product lifecycle an issue was discovered in.
	<li>Create like Version/Categories
	<li>Target Resolution Date
	<li>Target Version
	<li>Fixed in Release
</ul>


<span class="section">Future</span>
<ul>
	<li>Move configuration variables into the database</li>
	<li>Bug relationship fields (Duplicate of, Depends on, Parent of, etc.)</li>
	<li>Have user settings per project - email preferences should be configurable on a per project basis</li>
	<li>Multiple sort keys (?) - let people select more than one ordering for searches (complicated interface)</li>
	<li>Create file hierarchy for docs, config, etc.</li>
	<li>Rework HTML posting</li>
	<li>Show number of concurrent users - like Freshmeat.net</li>
	<li>Little glyphs and graphics for site - asthetic niceties</li>
	<li>Mantis Logo - about time, right?</li>
	<li>Abstract account management - make it easier for other packages to be integrated</li>
	<li>PDF report generation - same as report generation expect into PDF format</li>
	<li>Nice bar and line graph charts (phplot/jpgraph) - generate plots based on the stats</li>
	<li>IP Tracking / banning - prevent spamming or harrassment from users</li>
	<li>Use of Smarty Templates</li>
	<li>Daily/Weekly report generation - generate a complex summary of the past day/week/month/year either on demand or via a cronjob or scheduled task</li>
	<li>String/form handling Audit - make sure illegal and unsafe input is not allowed</li>
	<li>Interfaces for custom configuration.</li>
	<li>Allow users to specify required fields.</li>
	<li>Eliminate strtotime()</li>
	<li>Complex user profiles</li>
	<li>Moderation queue (?)</li>
	<li>User definable display fields (view all bugs page)</li>
	<li>NNTP Mirroring (with threading)</li>

	<li>Alert Engine - Cronjob that will generate Alerts based on user constructed rules. Alerts on a per project, per user basis.
	<li>Multiple transports beyond just emails (SMS, IM, etc.)
	<li>Attempt to interface with emails via procmail.
</ul>

<?php include( "bot.php" ); ?>