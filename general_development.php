<?php
	$t_sub_title = "General Development";

	include( "top.php" );
?>

<?php
	function print_dev_section( $p_a_name, $p_section_title ) {
		PRINT "<table width=\"100%\" border=\"0\" cellspacing=\"0\">";
		PRINT "<tr>";
			PRINT "<td class=\"dev_section\">";
				PRINT "<a name=\"$p_a_name\">$p_section_title</a>";
			PRINT "</td>";
			PRINT "<td class=\"dev_right\">";
				PRINT "<a href=\"general_development.php\">Back to Top</a>";
			PRINT "</td>";
		PRINT "</tr>";
		PRINT "</table>";
	}
?>

<span class="page_title">General Development</span>
<hr size="1" noshade="noshade" width="100%" />
<p />
<span class="section">Table of Contents</span>
<p />

<ul>
	<li><a href="#introduction">Introduction</a></li>
	<li><a href="#setup">Setup</a></li>
	<li><a href="#git">GIT</a></li>
	<li><a href="#coding_style">Coding Style</a></li>
	<li><a href="#communication">Communication</a></li>
	<li><a href="#patches">Patches</a></li>
	<li><a href="#release">Release Management</a></li>
	<li><a href="#database">Database Development</a></li>
	<li><a href="#editor_tips">Editor Tips</a></li>
	<li><a href="#php_tips">PHP Tips</a></li>
	<li><a href="#rules_for_development">Rules for Development</a></li>

</ul>

<p />
<?php print_dev_section( "introduction", "Introduction" ) ?>
<p />
MantisBT, an open source project, allows you to contribute changes you make back to the core package.  This allows others to benefit from your work and can help you from having to reimplement your changes after an upgrade.  This page should provide useful information on procedures to ensure development goes smoothly.
<p />
<?php print_dev_section( "setup", "Setup" ) ?>
<p />
<span class="section">Install and Set Up Apache + PHP + MySQL</span>
<p />
<ul>
	<li><a href="http://www.apache.org/">Apache</a></li>
	<li><a href="http://www.php.net/">PHP</a></li>
	<li><a href="http://www.mysql.com/">MySQL</a></li>
</ul>
<p />
Some sites that will guide you through a step-by-step installation and setup process.
<p />
<ul>
	<li><a href="http://hotwired.lycos.com/webmonkey/99/21/index2a.html">PHP/MySQL Tutorial</a> - also covers installation and setup</li>
	<li><a href="http://www.vtwebwizard.com/tutorials/mysql/">Another tutorial</a></li>
	<li><a href="http://php.vamsi.net/mysql/index.php">And another!</a></li>
</ul>
<ul>
	<li><a href="http://badblue.com/helpphp.htm">Bad Blue</a> - simple webserver with PHP support for Windows</li>
	<li><a href="http://www.thickbook.com/extra/php_apachephp4_win.phtml">Apache+PHP</a> - installation instructions</li>
	<li><a href="http://sourceforge.net/projects/phptriad/">PHPTriad</a> - Apache, MySQL, PHP, PHPLIB, phpMyAdmin all in one!  A bit outdated but still useful</li>
</ul>
<p />
<span class="section">Install phpMyAdmin</span>
<p />

<ul>
	<li><a href="http://www.phpwizard.net/">phpMyAdmin</a></li>
</ul>
<p />
All you really need to do is edit the config.php file to be able to access your MySQL installation.  Note that you will need to place phpMyAdmin in your web server directory so you can access it with your web browser.  In order to secure this you should read the documentation and use a .htaccess file.  If no one will be accessing your server it's not a big deal; just use common sense.
<p />
It may complain about magic_quotes_gpc.  You can make sure this is on by looking in your php.ini file.  Don't forget to restart apache for the settings to take effect.  If that doesn't fix the warning just ignore it.  I haven't had any problems.
<p />

<span class="section">Help and Reference sites</span>
<p />
<ul>
	<li><a href="http://www.php.net/manual/en/">PHP Manual</a></li>
	<li><a href="http://www.phpbuilder.net/">phpBuilder</a></li>
	<li><a href="http://dev.mysql.com/doc/mysql/en/">MySQL Documentation</a></li>
</ul>
<p />
<?php print_dev_section( "coding_style", "Coding Style" ) ?>
<p />
Please follow the <a href="guidelines.php">MantisBT Coding Conventions</a> document.  Code not following the convetions <b>will not be accepted</b>!
<p />
<?php print_dev_section( "communication", "Communication" ) ?>
<p />
Discussion and communication should occur in the <a href="mailinglists.php">mailing lists</a>.  Please try to keep discussions public.  As an open source project much of the value and excitement comes from having an process that is open to the public.
<p />
<?php print_dev_section( "patches", "Patches" ) ?>
<p />
Patches should be appliable using the unix "patch" command.  Make sure your .patch or .diff files will be compatible or send explicit instructions on how to apply your changes.  Always specify what release you are patching against.  We prefer unified diffs.  Please send all patches to the mantisbt-dev mailing list.
<p />

<?php print_dev_section( "editor_tips", "Editor Tips" ) ?>
<p />
You'll want, of course, to use an editor you like.  I myself do my development in Windows and use UltraEdit.  You're free to use what you like and here are some features that you'll probably want.
<p />
<ul>
	<li>Column and row numbering.</li>
	<li>Goto Line Number</li>
	<li>Word wrap toggle.</li>
	<li>Multiple files.</li>
	<li>Searching across multiple files and recursively down directories.</li>
	<li>Search and replace across multiple files.</li>
	<li>Specify TAB spaces (I use 4).</li>
	<li>Syntax highlighting</li>
	<li>Trim trailing whitespace</li>
	<li>DOS 2 UNIX CR/LF conversions.  Your editor must be able to save files with Unix-style line breaks.  This means the \n character instead of the \r (Mac style) or \r\n (Windows style).  You can confirm this by viewing the file in a hex editor.</li>
</ul>

<!-- -->
<?php print_dev_section( "rules_for_development", "Rules for Development" ) ?>

<p />

<span class="section">Coding Style</span>
<p />
Please follow the <a href="guidelines.php">MantisBT Coding Conventions</a>.

<p />
<span class="section">GIT Commits</span>
<p />
Please keep commits short and focused. Ideally you would check in all the files affects by your change(s) at one time.  You should try to commit after every bugfix or feature addition.  Make sure your commit note tells enough so that another developer (familiar with the project) can make sense of what changes were made.  Information might include files, functions and variables that were modified.
<p />
e.g. git commit -a -m "Modified view_all_bug page so that column alignment is better across browsers" view_all_bug_page.php
<p />
Occasionally you can make do with a trivial message like "updates for release" or "tweaked formatting."  This might be when you update the Changelog, or reformatted and cleaned up code, etc.

<p />
<span class="section">Communication</span>
<p />
Please use the <a href="mailinglists.php">mantisbt-dev mailing list</a>.  This way there is a public record of development. If you have a matter you would like to discuss in private them emailing directly is fine.

<p />
<span class="section">Testing</span>
<p />
In general I would prefer that you test using at least two browsers.  This way most browser dependencies can be caught.  I recommend testing with Internet Explorer for Windows and one of Firefox, Mozilla or Netscape.  This captures the vast majority of actual users.  Others that might be considered are Opera, Konqueror, Safari and OmniWeb.

<p />
<span class="section">Other rules</span>
<p />
Make sure you sign up on the bugtracker and received developer access.
<p />
You can mark a bug as resolved if it is commited in GIT.  Please don't close bugs until that release is publicly available.

<?php include( "adsense_vertical_inc.php" ); ?>

<?php include( "bot.php" ); ?>

