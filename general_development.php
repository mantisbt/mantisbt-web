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
<p>
<span class="section">Table of Contents</span>
<p>

<ul>
	<li><a href="#introduction">Introduction</a></li>
	<li><a href="#setup">Setup</a></li>
	<li><a href="#cvs">CVS</a></li>
	<li><a href="#coding_style">Coding Style</a></li>
	<li><a href="#communication">Communication</a></li>
	<li><a href="#patches">Patches</a></li>
	<li><a href="#release">Release Management</a></li>
	<li><a href="#database">Database Development</a></li>
	<li><a href="#editor_tips">Editor Tips</a></li>
	<li><a href="#php_tips">PHP Tips</a></li>
	<li><a href="#rules_for_development">Rules for Development</a></li>

</ul>

<p>
<?php print_dev_section( "introduction", "Introduction" ) ?>
<p>
Mantis, an open source project, allows you to contribute changes you make back to the core package.  This allows others to benefit from your work and can help you from having to reimplement your changes after an upgrade.  This page should provide useful information on procedures to ensure development goes smoothly.
<p>
<?php print_dev_section( "setup", "Setup" ) ?>
<p>
<span class="section">Install and Set Up Apache + PHP + MySQL</span>
<p>
<ul>
	<li><a href="http://www.apache.org/">Apache</a></li>
	<li><a href="http://www.php.net/">PHP</a></li>
	<li><a href="http://www.mysql.com/">MySQL</a></li>
</ul>
<p>
Some sites that will guide you through a step-by-step installation and setup process.
<p>
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
<p>
<span class="section">Install phpMyAdmin</span>
<p>

<ul>
	<li><a href="http://www.phpwizard.net/">phpMyAdmin</a></li>
</ul>
<p>
All you really need to do is edit the config.php file to be able to access your MySQL installation.  Note that you will need to place phpMyAdmin in your web server directory so you can access it with your web browser.  In order to secure this you should read the documentation and use a .htaccess file.  If no one will be accessing your server it's not a big deal; just use common sense.
<p>
It may complain about magic_quotes_gpc.  You can make sure this is on by looking in your php.ini file.  Don't forget to restart apache for the settings to take effect.  If that doesn't fix the warning just ignore it.  I haven't had any problems.
<p>

<span class="section">Set Up CVS/SSH</span>
<p>

<ul>
	<li>Gain our trust to gain developer access.  Post patches to the mantisbt-dev mailing list.  Visiting on IRC helps.
	<li>After gaining developer access follow <a href="http://sourceforge.net/docman/display_doc.php?docid=768&amp;group_id=1">these instructions</a></li>
</ul>

<p>
You can store your SSH public key on the SourceForge server to avoid having to type your password each access.
<p>
If you are in unix, all you have to do is set the following environment variable: CVS_RSH=ssh
<p>
In bash: export CVS_RSH=ssh<br />
In tcsh: set CVS_RSH ssh
<p>
To make this change permanent don't forget to put it in your .bash_profile, profile, .bashrc, .login, or wherever you put your environment variables.  Don't forget to relogin!
<p>
If you're in Windows then read the <a href="http://sourceforge.net/docman/display_doc.php?docid=766&amp;group_id=1">SF documentation for Windows</a>
<p>
Now check out the package:
<p>
cvs -z3 -d &lt;username&gt;@cvs.mantisbt.sourceforge.net:/cvsroot/mantisbt co mantisbt
<p>
You should now have the latest CVS snapshot.  Move this directory to somewhere under your web root directory.
<p>
Change into the directory and type: "cvs -n update".  The -n means no changes.  It should successfully complete with (probably) no changes.  As long as you are in this directory you won't need to type the long access string.
<p>
NOTE: You will have to disable the CVS_RSH=ssh if you want to use that login account for non-SF ssh'ed cvs projects.
<p>
Read the INSTALL directions and configure your config_inc.php file.  Install the bugtracker into any database that you would like.  If you do a lot of development you will likely be building multiple installations for testing.  For example, I have one database called "bugtracker" as my primary database but also make a new one to test each release (mantis-0-15-1, mantis-0-15-2, etc.).
<p>
Open up your browser and test it out.  The bugtracker directory (and any subdirectories) need to be web server (usually world) executable.  Otherwise you will get errors about access denial or the images will fail to load.  The files will be happy with a chmod of 644.
<p>

<?php print_dev_section( "cvs", "CVS" ) ?>
<p>
<a href="http://cvsbook.red-bean.com/cvsbook.html">CVS reference</a> - The key commands to learn are checkout (or co), update, commit (or ci), remove, and add.
<p>
Remember to set your EDITOR environment variable to your favorite command line editor.  Otherwise you're likely to get dumped into vi, which is a horrible program to get stuck in for a first time user.  To exit, hit ESC then : then q! then ENTER).  The last line should look like:
<pre>
:q!
</pre>
This will force quit you out of vi without saving any changes.
<p>
Specify a message on the command line: eg. cvs ci -m "my message" file1 file2 file2.php* *.txt
<p>
<pre>
cvs -n update
</pre> will pretend to do an update.  This is useful to check and see what files have been modifed without modifying your files locally.<p>

<ul>
	<li>Signup on the <a href="demo.php">demo bugtracker</a></li>
	<li>Signup on the <a href="http://mantisbt.sourceforge.net/mailinglists.php">developer mailing list</a></li>
</ul>
<ul>
	<li>Files ending in just .php <!-- (not .php) --> are files of some note</li>
</ul>
<ul>
	<li>config_inc.php has all the global sitewaide variable settings</li>
	<li>constants_inc.php has all CONSTANT values (they are UPPERCASE)</li>
	<li>core_* files contain all the functions used in the package - When you begin development you might want to make your own core_* file for your own test functions.</li>
</ul>
<ul>
	<li>The localization files are the .txt files</li>
	<li>The images are in the images/ directory (The directory structure will undergo changes shortly)</li>
</ul>
<p>

<span class="section">Help and Reference sites</span>
<p>
<ul>
	<li><a href="http://www.php.net/manual/en/">PHP Manual</a></li>
	<li><a href="http://www.phpbuilder.net/">phpBuilder</a></li>
	<li><a href="http://dev.mysql.com/doc/mysql/en/">MySQL Documentation</a></li>
</ul>
<p>
<?php print_dev_section( "coding_style", "Coding Style" ) ?>
<p>
Please follow the <a href="guidelines.php">Mantis Coding Conventions</a> document.  Code not following the convetions <b>will not be accepted</b>!
<p>
<?php print_dev_section( "communication", "Communication" ) ?>
<p>
Discussion and communication should occur in the <a href="mailinglists.php">mailing lists</a>.  Please try to keep discussions public.  As an open source project much of the value and excitement comes from having an process that is open to the public.
<p>
<?php print_dev_section( "patches", "Patches" ) ?>
<p>
Patches should be appliable using the unix "patch" command.  Make sure your .patch or .diff files will be compatible or send explicit instructions on how to apply your changes.  Always specify what release you are patching against.  We prefer unified diffs.  Please send all patches to the mantisbt-dev mailing list.
<p>

<?php print_dev_section( "editor_tips", "Editor Tips" ) ?>
<p>
You'll want, of course, to use an editor you like.  I myself do my development in Windows and use UltraEdit.  You're free to use what you like and here are some features that you'll probably want.
<p>
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

<p>
<?php print_dev_section( "php_tips", "PHP Tips" ) ?>
<p>
This is a short crash course in PHP and things that you should take note of when using PHP.

<ol start="1">
<li>PHP is very similar to C.  Most contructs are similar so if you know C/C++/Java/Pascal you should quickly be up to speed.<p>

<pre>
$a = 1;
$b = 2;
$c = $a + $b;
echo $c;
</pre>

The preceding code creates variables $a, $b and $c and prints the number 3.  Defining a variable is enough to create a variable in PHP.<p>

<li>PHP is also very loosely-typed and does type conversions on the fly.

<li>You have to use the printf method of debugging (use the echo or PRINT command)<p>

<li>There is a keyword called global that is sometimes used inside functions.  This is to allow functions to have access to global varaibles.  By default global variables are locked out of local function scope.  You have to explicitly tell the function what globals it can see.<p>

<li>It has 'OOP' but it is very primitive.  It's good enough to be a useful addition but nowhere close to C++ or Java.  Some of the nice class packages show you that it's good enough though.<p>

<li>PHP will let you know what line an error occurs on.  Depending on your configuration PHP will hide warnings and notices from the user.  In config_inc.php I have this line near the top of the file: error_reporting(E_ALL);  This means 'report ALL errors warnings and notices as errors' (like -Wall in C/C++).  Otherwise things like uninitialization errors will slip by you.<p>

<li>include()s are like C #includes, ie: makes everything look like one big text file<p>

<li>PHP has lots of string and date manipulation functions.  If you think of a common action there is likely already a function that does it in PHP.<p>

<li>The string concatenation operator is the . symbol (period)<p>

"this plus"." this" is "this plus this"<p>

Since PHP is loosely-typed it would try to convert to numbers if you used the + operator.<p>

<li>PHP has garbage collection.  You don't need to free resources unless you are using a lot in a single script (page).  So unless you've decided to select all 50,000,000 records from your Big Brother database you probably don't have to worry about freeing database handles or closing files, etc.  All open resources are automatically closed when the script finished execution (when the page loads in the browser).  In general, don't worry about resources/performance until you get something to work first.  After doing so you will probably have some insights into a better way to implement the feature(s).<p>

<li>Functions can be defined anywhere in PHP code.  They must be defined before they are used (so be watchful of your include() ordering).<p>
</ol>

<!-------------- --------------->
<?php print_dev_section( "rules_for_development", "Rules for Development" ) ?>

<p>

<span class="section">Coding Style</span>
<p>
Please follow the <a href="guidelines.php">Mantis Coding Conventions</a>.

<p>
<span class="section">CVS commits</span>
<p>
Please keep commits short and focused. Ideally you would check in all the files affects by your change(s) at one time.  You should try to commit after every bugfix or feature addition.  Make sure your commit note tells enough so that another developer (familiar with the project) can make sense of what changes were made.  Information might include files, functions and variables that were modified.
<p>
e.g. cvs ci -m "Modified view_all_bug page so that column alignment is better across browsers" view_all_bug_page.php
<p>
Occasionally you can make do with a trivial message like "updates for release" or "tweaked formatting."  This might be when you update the Changelog, or reformatted and cleaned up code, etc.

<p>
<span class="section">Communication</span>
<p>
Please use the <a href="mailinglists.php">mantisbt-dev mailing list</a>.  This way there is a public record of development. If you have a matter you would like to discuss in private them emailing directly is fine.

<p>
<span class="section">Testing</span>
<p>
In general I would prefer that you test using at least two browsers.  This way most browser dependencies can be caught.  I recommend testing with Internet Explorer for Windows and one of Firefox, Mozilla or Netscape.  This captures the vast majority of actual users.  Others that might be considered are Opera, Konqueror, Safari and OmniWeb.

<p>
<span class="section">Other rules</span>
<p>
Make sure you sign up on the bugtracker and received developer access.
<p>
You can mark a bug as resolved if it is commited in CVS.  Please don't close bugs until that release is publicly available.

<?php include( "adsense_vertical_inc.php" ); ?>

<?php include( "bot.php" ); ?>
