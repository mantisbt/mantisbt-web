<? include( "top.php3" ); ?>

<span class="page_title">Security</span>
<hr size=1 noshade width="100%">
<p>
Below is a listing of all known security problems in Mantis releases. If you discover a problem not listed below, please contact <a href="mailto:mantisbt-security@lists.sourceforge.net">the Mantis Team</a>.
<p>
<span class="section">[ <a href="advisories/2002/2002-05.txt">Advisory</a> ] Remote code execution + reading files readable by the webserver user</span> - <font color=#ff0000>Security Problem</font>
<p>
Through GET, POST, or COOKIE variables a user may be able to take advantage of remote script execution. It is also possible to read any file on the webserver that is readable by the user that the script is running onder. Both problems have been fixed in 0.17.4.

<p>
<span class="section">[ <a href="advisories/2002/2002-04.txt">Advisory</a> ] Remote code execution</span> - <font color=#ff0000>Security Problem</font>
<p>
Through GET, POST, or COOKIE variables a user may be able to take advantage of remote script execution. This has been fixed in Mantis 0.17.4.

<p>
<span class="section">[ <a href="advisories/2002/2002-03.txt">Advisory</a> ] Showing bug listings of private projects</span> - <font color=#ff0000>Security Problem</font>
<p>
Through manipulation of cookies it is possible to set a user's current project to a private project, and access the 'View Bugs' page. This has been fixed in Mantis 0.17.4.

<p>
<span class="section">[ <a href="advisories/2002/2002-02.txt">Advisory</a> ] Limiting output to reporters</span> - <font color=#ff0000>Security Problem</font>
<p>
There is an option in Mantis which limits the bug reports shown to reporters. This option was not checked on the 'Print Reports' page. This has been fixed in CVS, and will appear in 0.18.0.

<p>
<span class="section">[ <a href="advisories/2002/2002-01.txt">Advisory</a> ] Input validation</span> - <font color=#ff0000>Security Problem</font>
<p>
Upgrade to Mantis 0.17.3 if you do not have magic_quotes_gpc enabled in your PHP installation. Input was not checked in account_update.php (and a lot of other files), which allowed anyone with an account on the system to become administrator in your Mantis installation. Input validation has been added to account_update.php for 0.17.3, and for all other files in the upcoming 0.18.0 (or in CVS).

<p>
<span class="section">File Uploads</span> - <font color=#ff0000>Security Problem</font>
<p>
Upgrade to Mantis 0.15.11 if you use file uploads.  Files were not being checked for their permissions.  By default many Apache installations create /tmp/ directory files as world executable (777).  Files are now umasked before being copied.

<p>
<span class="section">File Uploads</span> - <font color=#ff0000>Security Problem</font>
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