<? include( "top.php3" ); ?>

<span class="page_title">Notes</span>
<hr size=1 noshade width="100%">
<p>
This page contains several additional notes which should supplement the documentation.  Eventually, this information will probbaly be rolled into the core documentation.

<ul>
	<li><a href="#access_level">Access Level Rights Notes</a>
	<li><a href="#email_notes">Email Notes</a>
	<li><a href="#example_of_use">Example of Use</a>
	<li><a href="#navigation">Navigation</a>
</ul>

<p>
<!-- -------------------------------------------------------------------- -->
<hr size=1>
<p><a name="access_level"></a>
<b><a href="note_access_chart.php3">Access Level Rights Notes</a></b>
<p>
This note is a simple chart of what each access level is allowed to do to a bug.
<p>
<!-- -------------------------------------------------------------------- -->
<hr size=1>
<p><a name="email_notes"></a>
<b><a href="note_email_chart.php3">Email Notes</a></b>
<p>
This note details how email in general works.  It, in conjunction with <a href="mantis/configuration.html#email">Configuration Documentation: Email</a>, covers how email can be configured and customized as well as how it is designed to operate.
<p>
<!-- -------------------------------------------------------------------- -->
<hr size=1>
<p><a name="example_of_use"></a>
<b>Example of Use</b>
<p>
The following is a basic description of what I envisioned when developing the system.
<p>
Access level have been broken into the following:
<ul>
<li>viewer
<li>reporter
<li>updater
<li>developer
<li>manager
<li>administrator
</ul>
Viewers should be considered outsiders to the system.  They have no rights to change or add to any of the data.  This is a useful state for anonymous or guest accounts.  Project teams that wish to allow public access to a bug database but do not wish for more can use this access level.
<p>
Reporters are your basic users who report bugs or request features.  Most of the time these will be your customers or testers.
<p>
Updaters are basically privileged reporters.  They are allowed to update the status of a bug.  This can range from confirming a bug, assigning it to the proper developer, or even resolving a bug.  Examples would be experienced beta testers or trusted members of the product community (helpful power users).
<p>
Developers should be self-explanatory.  These are the people who actually work on the project/product.
<p>
Managers are also Developers but also have the power to control access to projects.  They are assigned ownership of a project on a per project basis.  This is similar to a forum moderator.
<p>
Administrators are the people who have total control over the system.  Yes, they can even screw up the project.  In principle, these accounts shouldn't be used except for administrative functions.  These might include creating new projects, assigning managers to projects, or making system changes.
<p>
The typical cycle for a bug would be as follows (<a href="images/dg_usage.gif">Here is a graph</a>):
<ul>
<li>User obtains product and starts using it.
<li>User discovers what he considers a bug.
<li>User returns to the product webpage to see if there is a fix or workaround.
<li>User sees that there is a public bugtracker and goes to see if his bug is listed there.
<li>User doesn't find it and so reports it.  Developers are notified of the new bug.
<li>Mean while an Updater comes by and notices a NEW bug and reads it.
<li>Updater decides that the bug is legitimate and so ASSIGNS it to a developer.
<li>Developer decided that he should investigate the bug.  Developer discovers he needs more information.
<li>Developer adds a note requesting information and sets the bug to FEEDBACK status.
<li>User recieves an email requesting more information and returns to give it.
<li>Developer and User correspond via bugnotes until the information needed is retrieved.
<li>Developer fixes bug and posts fix or workaround.
<li>Developer RESOLVES the bug.
<li>User checks back and tests the fix.  If verified then it is moved to CLOSED.  If not it should be REOPENED and set to FEEDBACK status.
</ul>
This procedure is very basic and is certainly not the only wayt the product can be used.  It can be used for internal development with testers, as a task tracking tool, issue tracking, and much more.  If you know enough PHP you can customize the package to fit your needs more snugly by enforcing more behavior.
<p>
<!-- -------------------------------------------------------------------- -->
<hr size=1>
<p><a name="navigation"></a>
<b>Navigation</b>
<p>
The navigation in Mantis is designed to be simple to use and hard to get lost in.  Mantis should not waste your time making you figure out what exactly 'create query' entails or ask you to remember 7 digit bug IDs or hide information that you want to see.
<p>
All the major sections are linked in the menu across the top of every page and can be configured to be displayed at the bottom as well.
<? include( "bot.php3" ); ?>