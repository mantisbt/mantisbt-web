<html>
<head>
<style>
body { background-color:#ffffff; font-family:Verdana, Arial; font-size=10pt }
td {  font-family:Verdana, Arial; font-size=10pt }
p {  font-family:Verdana, Arial; font-size=10pt }
</style>
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
<td>
<p>
<b><font size=+1>Getting Started</font></b>

<p>
<b>Basic Steps to Developing in Mantis</b>
<p>

<b>Setup Apache + PHP + MySQL</b>
<p>
<li><a href="http://www.apache.org/">Apache</a><br>
<li><a href="http://www.php.net/">PHP</a><br>
<li><a href="http://www.mysql.com/">MySQL</a><br>
<p>
Some site that will do a step by step install and setup.<p>

<li><a href="http://hotwired.lycos.com/webmonkey/99/21/index2a.html">PHP/MySQL Tutorial</a> - also covers installation and setup<br>
<li><a href="http://www.vtwebwizard.com/tutorials/mysql/">Another Tutorial</a><br>
<li><a href="http://php.vamsi.net/mysql/index.php">And Another!</a>
<p>
<li><a href="http://badblue.com/helpphp.htm">Bad Blue</a> - simple webserver with php support for Windows<br>
<li><a href="http://www.thickbook.com/extra/php_apachephp4_win.phtml">Apache+PHP</a> - installation instructions<br>
<li><a href="http://sourceforge.net/projects/phptriad/">PHPTriad</a> - Apache, MySQL, PHP, PHPLIB, phpMyAdmin all in one!  A bit outdated but still useful<br>

<p>
<b>Install phpMyAdmin</b>
<p>

<li><a href="http://www.phpwizard.net/">phpMyAdmin</a><br>
<p>
All you really need to do is edit the config.php file to be able to access your mysql installation.  Note that you will need to place phpMyAdmin in your web server directory so you can access it with your web browser.  In order to secure this you should read the documents and use a .htaccess file.  If no one will be accessing your server it's not a big deal; just use your common sense.
<p>
It may complain about magic_quotes_gpc.  You can make sure this is on by looking in your php.ini file.  DOn't forget to restart apache for the settings to take effect.  If that doesn't fix the warning just ignore it.  I haven't had any problems.
<p>

<b>Setup CVS/SSH</b>
<p>

<li>Get an account at <a href="http://www.sourceforge.net/">SourceForge</a><br>
<li><a href="http://sourceforge.net/docman/display_doc.php?docid=763&group_id=1">Login</a> (to the shell server)<br>
<li><a href="http://sourceforge.net/docman/display_doc.php?docid=763&group_id=1">Login Again</a> (to the cvs server)<br>
<li>Get me to <a href="mailto:kenito@300baud.org">add you</a> to the development team<br>
<li><a href="http://sourceforge.net/docman/display_doc.php?docid=763&group_id=1">Read the Site Docs on how to setup CVS through SSH</a><br>
<li>Do a <a href="http://sourceforge.net/cvs/?group_id=14963">CVS Checkout</a><br>

<p>
You can store your SSH public key on the SF server to avoid having to type your password each access.
<p>
If you're in a unix all you have to do is set the following environment variable: CVS_RSH=ssh
<p>
In bash just: export CVS_RSH=ssh<br>
In tcsh just: set CVS_RSH ssh
<p>
Don't forget to relogin!
<p>
If you're in Windows then read the <a href="http://sourceforge.net/docman/display_doc.php?docid=766&group_id=1">SF documentation for Windows</a>
<p>
Now checkout the package:
<p>
cvs -z3 -d &lt;username&gt;@cvs.mantisbt.sourceforge.net:/cvsroot/mantisbt co mantisbt
<p>
You should now have the latest CVS snapshot.  Move this file to somewhere under your web root directory.
<p>
Change into the directory and type: "cvs -n update".  The -n means no changes.  It should successfully complete with (probably) no changes.  As long as you are in this directory you won't need to type the long access string.
<p>
NOTE: You will have to disable the CVS_RSH=ssh if you want to use that login account for non-SF cvs projects.
<p>
Read the INSTALL directions and configure your config_inc.php file.  Install the bugtracker into any database that you would like.  If you do a lot of development you will likely be building multiple installations for testing.
<p>
Open up your browser and test it out.  The bugtracker directory (and any subdirectories) need to be executable.  The files will be happy with a chmod of 644.
<p>


<b>CVS Reference</b>
<p>
<a href="http://cvsbook.red-bean.com/cvsbook.html">CVS reference</a> - The key commands are checkout (or co), update, commit (or ci), remove, and add
<p>
Remeber to set your EDITOR environment variable to your favorite command line editor.  Otherwise you're likely to get dumped into vi (to exit type ESC then : then q then ENTER).
<p>
Specify a message on the command line: eg. cvs ci -m "my message" file1 file2 file2.php* *.txt
<p>

<li>Signup on the <a href="http://mantisbt.sourceforge.net/mantis/">demo bugtracker</a><br>
<li>Signup on the <a href="http://mantisbt.sourceforge.net/mailinglists.php3">developer mailing list</a><br>

<li>Files ending in just .php (not .php3) are files of some note<br>
<ul>
<li>config_inc.php has all the global sitewaide variable settings<br>
<li>constants_inc.php has all CONSTANT values (they are UPPERCASE)<br>
<li>core_* files contain all the functions used in the package - When you begin development you might want to make your own core_* file for your own test functions.<br>
</ul>
<li>The localization files are the .txt files<br>
<li>The images are in the images/ directory (The directory structure will undergo changes shortly)<br>
<p>

<b>Help and Reference sites</b>
<p>
<li><a href="http://www.php.net/manual/en/">PHP Manual</a><br>
<li><a href="http://www.phpbuilder.net/">phpBuilder</a><br>
<li><a href="http://www.mysql.com/doc/">MySQL Documentation</a><p>

<b>Development Tips</b>
<p>
<li>The file naming should be close to self-explanatory.  Please follow the convention in future development. Most of the files follow the same basic templates so you should be able to pretty much just snip at code until you are comfortable<p>

<li>To get an idea of what you can work on just read up in the roadmap section and it's got some stuff listed.  Of course, if you have a particular interest feel free to explore that as well.  I don't really care about adhering to the schedule (yet), it's just a guideline.<p>

<b>Editor Tips</b>
<p>
<li>Use a good editor with line numbering.  Make sure you can have multiple files open in your editor at the same time. Searching across multiple files (and recursively down directories) is a big plus.  Being able to search and replace across multiple files comes in very handy as well.<p>

<b>MySQL Tips</b>
<p>
<li>MySQL is pretty primitive: no foreign keys, no subselects, no trasnactions.  Can't do a CASCADE DELETE, can't rollback.  This make it very simple to read and use.<p>

<b>PHP Tips</b>
<p>
<li>PHP is very similar to C.  Most contructs are similar so if you know C/C++/Java/Pascal you should quickly be up to speed.<p>

<li>You have to use the printf methog for debugging (echo or PRINT everything)<p>

<li>There is a keyword called global that is sometimes used inside functions.  This is to allow functions to have access to global varaibles.  By default global variables are locked out of local function scope.  You have to explicitly tell the function what globals it can see.<p>

<li>It has 'OOP' but it is very primitive.  It's good enough to be a useful addition but nowhere close to C++ or Java.  Some of the nice class packages show you that it's good enough though.<p>

<li>PHP will let you know what line an error occurs on.  Depending on your configuration PHP will hide warnings and notices from the user.  In config_inc.php I have this line near the top of the file: error_reporting(E_ALL);  This means 'report ALL errors warnings and notices as errors' (like -Wall in C/C++).  Otherwise things like uninitialized errors will slip by you.<p>

<li>include()s are like C #includes, ie: makes everything look like one big text file<p>

<li> PHP has lots of string and date manipulation functions.  If you think of a common action there is likely already a function that does it in php.<p>
<li>The string concat operand is the . symbol (period)<p>

"this plus"." this" is "this plus this"<p>

Since php is loosely typed it would try to convert to numbers if you used the + operator.<p>

<li>PHP has garbage collection.  You don't need to free resources unless you are using a lot in a single script(page).  So unless you've decided to select all 50,000,000 records from your Big Brother database you probably don't have to worry about freeing database handles or closing files, etc.  All open resources are automatically closed when the script finished execution (when the page loads in the browser).  In general, don't worry about resources/performance until you get something to work first.  After doing so you will probably have some insights into the better way to implement the feature.<p>

<li>Functions can be defined anywhere in php code.  They must be defined before they are used (so be watchful of your include() ordering).<p>

<hr size=1>
<b><i>If you think of more points or have questions please <a href="mailto:kenito@300baud.org">Let me know!</a></i></b>