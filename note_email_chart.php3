<html>
<head>
<? include( "css.php3" ) ?>
<title>Mantis</title>
</head>
<body bgcolor=#ffffff>

<p>
<div align=center>
	<h2>Mantis</h2>
	Last modified: <? echo date( "M d, Y - H:m", getlastmod() )?>
</div>

<p>
<div align=center>

<table width=100%>
<tr valign=top>
	<? include("side_menu.php3") ?>
<td width=100%>
	<h3>Email Scheme</h3>

<b>Introduction</b><p>
	Mantis provides basic email functionality for user signup and bug notification.  You will need to have a working email server (SMTP server) on your mantis server.  For unix machines this is normally sendmail.  You may find more help at the php.net manual page here: <a href="http://www.php.net/manual/en/function.mail.php">http://www.php.net/manual/en/function.mail.php</a>
	<p>
	Read more about the setup in the <a href="mantis/configuration.html#email">Configuration Documentation</a>
<p>
<b>Signup</b><p>
	For signup the administrator must set the $g_allow_signup global in config_inc.php to be true (on by default).  Users must specify a valid email address to signup.  A password will be randomnly generated and sent to the user.
<p>
<b>Notification</b><p>
	Each user can control which email events he receives.  The site admin gets to specify what the default values are but each user can edit their settings after their account is created.  These values currently apply to all projects.  Per project user email settings are in the works.
	<p>
	<table cellpadding=4 border=0 cellspacing=1 bgcolor=#aaaaaa>
	<tr align=center bgcolor=#ddddff>
		<td width=25%>
			<b>Event</b>
		</td>
		<td width=75%>
			<b>Note</b>
		</td>
	</tr>
	<tr bgcolor=#ffffff>
		<td>
			New bug submitted
		</td>
		<td>
			The reporter is notified if their user preferences is set.  All users with access_level of Developer and higher are also emailed if their user preference is set.
		</td>
	</tr>
	<tr bgcolor=#ffffff>
		<td>
			Bug set to Assigned
		</td>
		<td>
			The reporter and assignee is notified if their user preferences is set.
		</td>
	</tr>
	<tr bgcolor=#ffffff>
		<td>
			Bug set to Feedback
		</td>
		<td>
			The reporter and assignee is notified if their user preferences is set.
		</td>
	</tr>
	<tr bgcolor=#ffffff>
		<td>
			Bug Resolved
		</td>
		<td>
			The reporter and assignee is notified if their user preferences is set.
		</td>
	</tr>
	<tr bgcolor=#ffffff>
		<td>
			Bug Closed
		</td>
		<td>
			The reporter and assignee is notified if their user preferences is set.
		</td>
	</tr>
	<tr bgcolor=#ffffff>
		<td>
			Bug Reopened
		</td>
		<td>
			The reporter and assignee is notified if their user preferences is set.
		</td>
	</tr>
	<tr bgcolor=#ffffff>
		<td>
			Bugnote Added
		</td>
		<td>
			The reporter and assignee is notified if their user preferences is set.
		</td>
	</tr>
	</table>

</td>
</tr>
</table>

</body>
</html>