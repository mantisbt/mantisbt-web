<? include( "top.php3" ); ?>

<span class="page_title">Security</span>
<hr size=1 noshade width="100%">
<p>
I'm no security expert so some things are bound to slip by me.  Heck, things slip by experts so no shame.  <a href="mailto:kenito@300baud.org">Let me know</a> if you detect problems with the package.

<p>
<span class="section">File Uploads</span> - <font color=#ff0000>Security Hole</font>
<p>
Upgrade to Mantis 0.15.11 if you use file uploads.  Files were not being checked for their permissions.  By default many Apache installations create /tmp/ directory files as world executable (777).  Files are now umasked before being copied.

<p>
<span class="section">File Uploads</span> - <font color=#ff0000>Security Hole</font>
<p>
Upgrade to Mantis 0.15.6 if you use file uploads.  A user may be able to gain read access to any file on your server.  The release requries you to have PHP 3.0.17 or higher.

<p>
<span class="section">Show Source</span> - Warning
<p>
Letting users see the complete source can be a security hazard.  This can happen if you set $g_show_source to something other than 0 or 1.  Users can replace the f_url in the URL with any file available on the system.

<p>
<span class="section">Passwords</span> - Information
<p>
Currently the passwords are run through the crypt() function before being stored.  crypt() is a one way function; this means that you cannot obtain the original password from the crypt()ed password.  This ensures that the user passwords are not readable should the database be cracked into (Note: this doesn't mean they are uncrackable, enough time and processing power and brute force will reveal most passwords).  However, your username and password are most likely being transmitted in clear text.  You will have to use a ssl (https) connection to protect transmission.

<? include( "bot.php3" ); ?>