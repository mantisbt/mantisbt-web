<? include( "top.php3" ); ?>

<span class="page_title">General Development</span>
<hr size=1 noshade width="100%">
<p>
<span class="section">Table of Contents</span>
<p>

<ul>
	<li><a href="#introduction">Introduction</a>
	<li><a href="#setup">Setup</a>
	<li><a href="#coding_style">Coding Style</a>
	<li><a href="#cvs">CVS</a>
	<li><a href="#discussion">Discussion</a>
	<li><a href="#communication">Communication</a>
	<li><a href="#patches">Patches</a>
	<li><a href="#database">Database Development</a>
	<li><a href="#release">Release Management</a>
	<li><a href="#editor_tips">Editor Tips</a>
	<li><a href="#php_tips">PHP Tips</a>
</ul>

<p>
<a name="introduction"><span class="section">Introduction</span></a>
<p>
<a name="setup"><span class="section">Setup</span></a>
<p>
<a name=""><span class="section">Basic Steps to Developing in Mantis</span></a>
<p>
<a name="patches"><span class="section">Patches</span></a>
<p>
<a name="coding_style"><span class="section">Coding Style</span></a>
<p>
<a name="discussion"><span class="section">Discussion</span></a>
<p>
<a name="communication"><span class="section">Communication</span></a>
<p>
<a name="database"><span class="section">Database</span></a>
<p>

<a name=""><span class="section">Setup Apache + PHP + MySQL</span></a>
<p>
<ul>
	<li><a href="http://www.apache.org/">Apache</a><br>
	<li><a href="http://www.php.net/">PHP</a><br>
	<li><a href="http://www.mysql.com/">MySQL</a><br>
</ul>
<p>
Some site that will do a step by step install and setup.<p>

<ul>
	<li><a href="http://hotwired.lycos.com/webmonkey/99/21/index2a.html">PHP/MySQL Tutorial</a> - also covers installation and setup<br>
	<li><a href="http://www.vtwebwizard.com/tutorials/mysql/">Another Tutorial</a><br>
	<li><a href="http://php.vamsi.net/mysql/index.php">And Another!</a>
</ul>
<ul>
	<li><a href="http://badblue.com/helpphp.htm">Bad Blue</a> - simple webserver with php support for Windows<br>
	<li><a href="http://www.thickbook.com/extra/php_apachephp4_win.phtml">Apache+PHP</a> - installation instructions<br>
	<li><a href="http://sourceforge.net/projects/phptriad/">PHPTriad</a> - Apache, MySQL, PHP, PHPLIB, phpMyAdmin all in one!  A bit outdated but still useful<br>
</ul>
<p>
<span class="section">Install phpMyAdmin</span>
<p>

<ul>
	<li><a href="http://www.phpwizard.net/">phpMyAdmin</a><br>
</ul>
<p>
All you really need to do is edit the config.php file to be able to access your mysql installation.  Note that you will need to place phpMyAdmin in your web server directory so you can access it with your web browser.  In order to secure this you should read the documents and use a .htaccess file.  If no one will be accessing your server it's not a big deal; just use your common sense.
<p>
It may complain about magic_quotes_gpc.  You can make sure this is on by looking in your php.ini file.  Don't forget to restart apache for the settings to take effect.  If that doesn't fix the warning just ignore it.  I haven't had any problems.
<p>

<span class="section">Setup CVS/SSH</span>
<p>

<ul>
	<li>Get an account at <a href="http://www.sourceforge.net/">SourceForge</a><br>
	<li><a href="http://sourceforge.net/docman/display_doc.php?docid=763&group_id=1">Login</a> (to the shell server)<br>
	<li><a href="http://sourceforge.net/docman/display_doc.php?docid=763&group_id=1">Login Again</a> (to the cvs server)<br>
	<li>Get me to <a href="mailto:kenito@300baud.org">add you</a> to the development team<br>
	<li><a href="http://sourceforge.net/docman/display_doc.php?docid=763&group_id=1">Read the Site Docs on how to setup CVS through SSH</a><br>
	<li>Do a <a href="http://sourceforge.net/cvs/?group_id=14963">CVS Checkout</a><br>
</ul>

<p>
You can store your SSH public key on the SF server to avoid having to type your password each access.
<p>
If you're in a unix all you have to do is set the following environment variable: CVS_RSH=ssh
<p>
In bash just: export CVS_RSH=ssh<br>
In tcsh just: set CVS_RSH ssh
<p>
TO make this change permanent don't forget to put it in your .bash_profile, profile, .bashrc, .login, or wherever you put your environment variables.  Don't forget to relogin!
<p>
If you're in Windows then read the <a href="http://sourceforge.net/docman/display_doc.php?docid=766&group_id=1">SF documentation for Windows</a>
<p>
Now checkout the package:
<p>
cvs -z3 -d &lt;username&gt;@cvs.mantisbt.sourceforge.net:/cvsroot/mantisbt co mantisbt
<p>
You should now have the latest CVS snapshot.  Move this directory to somewhere under your web root directory.
<p>
Change into the directory and type: "cvs -n update".  The -n means no changes.  It should successfully complete with (probably) no changes.  As long as you are in this directory you won't need to type the long access string.
<p>
NOTE: You will have to disable the CVS_RSH=ssh if you want to use that login account for non-SF ssh'ed cvs projects.
<p>
Read the INSTALL directions and configure your config_inc.php file.  Install the bugtracker into any database that you would like.  If you do a lot of development you will likely be building multiple installations for testing.  For example, I have one database called bugtracker as my primary database but also make a new one to test each release (mantis-0-15-1, mantis-0-15-2, etc.).
<p>
Open up your browser and test it out.  The bugtracker directory (and any subdirectories) need to be executable.  The files will be happy with a chmod of 644.
<p>

<a name="cvs"><span class="section">CVS</span></a>
<p>
<a href="http://cvsbook.red-bean.com/cvsbook.html">CVS reference</a> - The key commands are checkout (or co), update, commit (or ci), remove, and add
<p>
Remeber to set your EDITOR environment variable to your favorite command line editor.  Otherwise you're likely to get dumped into vi, which is a horrible program to get stuck in for a first time user.  To exit, hit ESC then : then q! then ENTER).  The last line should look like:
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
	<li>Signup on the <a href="http://mantisbt.sourceforge.net/mantis/">demo bugtracker</a><br>
	<li>Signup on the <a href="http://mantisbt.sourceforge.net/mailinglists.php3">developer mailing list</a><br>
</ul>
<ul>
	<li>Files ending in just .php (not .php3) are files of some note<br>
</ul>
<ul>
	<li>config_inc.php has all the global sitewaide variable settings<br>
	<li>constants_inc.php has all CONSTANT values (they are UPPERCASE)<br>
	<li>core_* files contain all the functions used in the package - When you begin development you might want to make your own core_* file for your own test functions.<br>
</ul>
<ul>
	<li>The localization files are the .txt files<br>
	<li>The images are in the images/ directory (The directory structure will undergo changes shortly)<br>
</ul>
<p>

<span class="section">Help and Reference sites</span>
<p>
<ul>
	<li><a href="http://www.php.net/manual/en/">PHP Manual</a><br>
	<li><a href="http://www.phpbuilder.net/">phpBuilder</a><br>
	<li><a href="http://www.mysql.com/doc/">MySQL Documentation</a><p>
</ul>

<span class="section">Development Tips</span>
<p>
<ul>
	<li>The file naming should be close to self-explanatory.  Please follow the convention in future development. Most of the files follow the same basic templates so you should be able to pretty much just snip at code until you are comfortable<p>

	<li>To get an idea of what you can work on just read up in the roadmap section and it's got some stuff listed.  Of course, if you have a particular interest feel free to explore that as well.  I don't really care about adhering to the schedule (yet), it's just a guideline.<p>
</ul>

<span class="section">MySQL Tips</span>
<p>
<ul>
	<li>MySQL is pretty primitive: no foreign keys, no subselects, no trasnactions.  Can't do a CASCADE DELETE, can't rollback.  This make it very simple to read and use.<p>
</ul>

<a name="editor_tips"><span class="section">Editor Tips</span></a>
<ul>
	<li>Choose an editor that you like.
	<li>Your editor needs to have column and row numbering.
	<li>Your editor needs to have word wrap.
	<li>Make sure you can have multiple files open in your editor at the same time.  This is essential for examining multiple files at once.
	<li>Searching across multiple files (and recursively down directories) is a big plus.
	<li>Search and replace across multiple files comes in very useful.
	<li>You should be able to specify TAB spaces.
	<li>Your editor must be able to save files with unix style line breaks.  This means the \n character instead of the \r (Mac style) or \r\n (Windows style).  You can confirm this by viewing the file in a hex editor.
	<li>Syntax highlighting will greatly assist you in editing.
</ul>

<p>
<a name="php_tips"><span class="section">PHP Tips</span></a>
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

The preceding code creates variables $a, $b, and $c and prints the number 3.  Defining a variable is enough to create a variable in php.<p>

<li>PHP is also very loosely typed and does type conversions on the fly.

<li>You have to use the printf method of debugging (use the echo or PRINT command)<p>

<li>There is a keyword called global that is sometimes used inside functions.  This is to allow functions to have access to global varaibles.  By default global variables are locked out of local function scope.  You have to explicitly tell the function what globals it can see.<p>

<li>It has 'OOP' but it is very primitive.  It's good enough to be a useful addition but nowhere close to C++ or Java.  Some of the nice class packages show you that it's good enough though.<p>

<li>PHP will let you know what line an error occurs on.  Depending on your configuration PHP will hide warnings and notices from the user.  In config_inc.php I have this line near the top of the file: error_reporting(E_ALL);  This means 'report ALL errors warnings and notices as errors' (like -Wall in C/C++).  Otherwise things like uninitialization errors will slip by you.<p>

<li>include()s are like C #includes, ie: makes everything look like one big text file<p>

<li> PHP has lots of string and date manipulation functions.  If you think of a common action there is likely already a function that does it in php.<p>

<li>The string concat operand is the . symbol (period)<p>

"this plus"." this" is "this plus this"<p>

Since php is loosely typed it would try to convert to numbers if you used the + operator.<p>

<li>PHP has garbage collection.  You don't need to free resources unless you are using a lot in a single script(page).  So unless you've decided to select all 50,000,000 records from your Big Brother database you probably don't have to worry about freeing database handles or closing files, etc.  All open resources are automatically closed when the script finished execution (when the page loads in the browser).  In general, don't worry about resources/performance until you get something to work first.  After doing so you will probably have some insights into a better way to implement the feature(s).<p>

<li>Functions can be defined anywhere in php code.  They must be defined before they are used (so be watchful of your include() ordering).<p>
</ol>

<hr noshade size=1>
<b><i>If you think of more points or have questions please <a href="mailto:kenito@300baud.org">Let me know!</a></i></b>

<? include( "bot.php3" ); ?>