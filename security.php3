<html>
<head>
<? include( "css.php3" ) ?>
<title>Mantis</title>
</head>
<body>

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
<p>
<b><font size=+1>Security</font></b>

<p>
<b>File Uploads</b> - <font color=#ff0000>Security Hole</font>
<p>
Upgrade to Mantis 0.15.6 if you use file uploads.  A user may be able to gain read access to any file on your server.  The release requries you to have PHP 3.0.17 or higher.


<p>
<b>Show Source</b> - Warning
<p>
Letting users see the complete source can be a security hazard.  This can happen if you set $g_show_source to something other than 0 or 1.  Users can replace the f_url in the URL with any file available on the system.

<p>
<b>Passwords</b> - Information
<p>
Currently the passwords are run through the crypt() function before being stored.  crypt() is a one way function; this means that you cannot obtain the original password from the crypt()ed password.  This ensures that the user passwords are not readable should the database be cracked into (Note: this doesn't mean they are uncrackable, enough time and processing power and brute force will reveal most passwords).  However, your username and password are most likely being transmitted in clear text.  You will have to use a ssl (https) connection to protect transmission.
</td>
</tr>
</table>

</body>
</html>