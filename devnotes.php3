<? include( "top.php3" ); ?>

<span class="page_title">Developer Notes</span>
<hr size=1 noshade width="100%">
<p>
If you wish to join the development team please <a href="mailto:kenito@300baud.org">email me</a>.

<p>
Here are some notes that should help people understand the way Mantis is layed out.
<p>
<ul>
	<li><a href="images/dg_menu.gif">Menu overview</a> <? echo round(filesize("images/dg_menu.gif") / 1024) ?>KB
	<li><a href="images/dg_login.gif">Login procedure</a> <? echo round(filesize("images/dg_login.gif") / 1024) ?>KB
	<li><a href="images/dg_viewbug.gif">View bug overview</a> <? echo round(filesize("images/dg_viewbug.gif") / 1024) ?>KB
	<li><a href="images/dg_manage.gif">Manage overview</a> <? echo round(filesize("images/dg_manage.gif") / 1024) ?>KB
	<li><a href="images/dg_overview.gif">Detailed complete overview</a> <? echo round(filesize("images/dg_overview.gif") / 1024) ?>KB
</ul>

<p>
Recommneded features for your editor of choice:
<ul>
	<li>Syntax Highlighting
	<li>DOS 2 UNIX CR/LF conversions
	<li>Find and Replace
	<li>Find in Files (recurse directories)
	<li>Find and Replace in Files (recurse directories)
	<li>Trim Trailing Whitespace
	<li>Set TAB Width
	<li>Show Line Number
	<li>Goto Line Number
	<li>Word Wrap Toggle
</ul>

<p>
Mantis roughly divides into the following modules:
<ul>
	<li>Account Management
	<li>Account Profile Management
	<li>Account Preference Management
	<li>Authentication
	<li>Bug Reporting
	<li>Bug Updating
	<li>Bug Viewing
	<li>Bugnotes
	<li>Database Access
	<li>Documentation
	<li>Email Notification
	<li>Icons
	<li>Localization
	<li>News Management
	<li>Project Management
	<li>String Manipulation
	<li>Summary
	<li>User Management
</ul>

<p>
Mantis is lacking in the following areas:
<ul>
	<li>Reporting (printable format, weekly/monthly progress charts, line graphs, bar charts, PDF exporting)
	<li>Logging
	<li>Database Abstraction
	<li>Search
	<li>Multiple Authentication
	<li>User Defined Input Fields
</ul>

<p>
Some cool features that could be implemented:
<ul>
	<li>IM integration (ICQ/Jabber/etc)
	<li>NNTP mirroring (send to newsgroups)
	<li>email control/front-end
</ul>

<? include( "bot.php3" ); ?>