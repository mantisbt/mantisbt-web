<?php include( "top.php" ); ?>

<span class="page_title">Email Scheme</span>
<hr size=1 noshade width="100%">
<p>

<span class="section">Introduction</span>
<p>
	Mantis provides basic email functionality for user signup and bug notification.  You will need to have a working email server (SMTP server) on your mantis server.  For unix machines this is normally sendmail.  You may find more help at the php.net manual page here: <a href="http://www.php.net/manual/en/function.mail.php">http://www.php.net/manual/en/function.mail.php</a>
	<p>
	Read more about the setup in the <a href="mantis/configuration.html#email">Configuration Documentation: Email</a>
<p>
<span class="section">Signup</span>
<p>
	For signup the administrator must set the $g_allow_signup global in config_inc.php to be true (on by default).  Users must specify a valid email address to signup.  A password will be randomnly generated and sent to the user.  If the email validation is breaking on valid addresses then you may want to disable the MX record check.  If further errors occur then disable the validation altogether.  This is covered in the <a href="mantis/configuration.html#email">Configuration Documentation: Email</a>
<p>
<span class="section">Notification</span>
<p>
	Each user can control which email events he receives.  The site admin gets to specify what the default values are but each user can edit their settings after their account is created.  These values currently apply to all projects.  Per project user email settings are in the works.
	<p>
	Email is sent FROM [$g_from_email] TO [$g_to_email].  Generally these can be fake email addresses as long as the email is sent.  One good use of the TO address is to send everything to an internal email or mailing list (and later, perhaps a news server).  The users who should be notified are included in the bcc: field.  This is Blind Carbon Copy.  This means that the users do not know who else may have received the message.  They will see the message sender, recipient, and they will be listed under cc or bcc.
	<p>
	You can also set the return path for bounced email addresses.  This is useful to detect users who have invalid email addresses or troubled mail servers.
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
			The reporter is notified if their user preferences is set.  All users with access_level of Developer and higher are also emailed if their user preference is set and the global [$g_notify_developers_on_new] is set.
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

<?php include( "bot.php" ); ?>