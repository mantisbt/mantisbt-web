<? include( "top.php3" ); ?>

<span class="page_title">About</span>
<hr size=1 noshade width="100%">
<p>
<span class="section">What is it?</span>
<p>
Mantis is a web-based bugtracking system.  It is in active development and is considered beta.
<p>
It is written in the <a href="http://www.php.net/">PHP</a> scripting language and requires the <a href="http://www.mysql.com/">MySQL</a> database and a webserver.  Mantis has been installed on Windows, MacOS, OS/2, and a variety of Unix operating systems.  Any web browser should be able to function as a client.  It is released under the terms of the <a href="http://www.gnu.org/copyleft/gpl.html">GNU General Public License</a> (GPL).
<p>
Mantis is free to use and modify.  It is free to redistribute as long as you abide by the distribution terms of the <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.
<p>
<span class="section">History</span>
<p>
I and a friend originally created a bugtracker as an internal tool for our own pet project.  We searched for good, free packages but came up with nothing so we wrote our own.  Since then, I've gone ahead with a total rewrite and decided to make it available to the public.  I have no love of the GPL, but I do feel that development tools should be free.
<p>
Mantis was intially released to the public in November 2000.
<p>
<span class="section">Requirements</span>
<p>
Mantis runs on the platforms that these programs run on.  This includes Windows, MacOS, and Unix.
<ul>
	<li><a href="http://www.php.net/">PHP</a> 3.0.13 and higher
	<li><a href="http://www.mysql.com/">MySQL database</a> (alternate database support is planned)
	<li>Web server (<a href="http://httpd.apache.org/">Apache</a>, IIS, etc.)
</ul>
Additionally, you will need to know basic administration of MySQL (login, create new database, run a SQL query).  The webserver needs to be configured to handle PHP files.  The <a href="http://www.php.net/manual/en/">PHP manual</a> has excellent instructions.
<p>
It also helps a great deal to at least be able to tinker with PHP scripts (when there's a little bug or you want to tweak something).  Of course, knowing HTML is essential for any custom display formatting.
<p>
I highly recommend using <a href="http://www.phpwizard.net">phpMyAdmin</a> to administer MySQL.  It allows you to have a web based interface to interact with your database and is much more convenient than using the command line.

<p>
<span class="section">Features and Benefits</span>
<p>
<ul>
	<li>Free
	<li>Easy to install
	<li>Web based
	<li>Platform independent
	<li>Multiple projects
	<li>Multiple languages
	<li>Emailing
	<li>Simple Search
	<li>Viewing filters
	<li>PHP3 and PHP4
</ul>

<p>
<span class="section">Upcoming Features</span>
<p>
Check the <a href="roadmap.php3">Roadmap</a> for a more detailed and somewhat up to date list of items.

<p>
<span class="section">Goals</span>
<p>
The goals for this project are to produce and maintain a lightweight, simple bugtracking system.  Additions of complexity/features are modular so that users can be shielded from unwanted clutter.  Thus, much of the package has a simple version of a feature along with a more fully developed version.
<p>
In the 'core' package the goal is to have the most important, most used, most time saving portions of a bugtracking system.  The product is designed to be easily modifiable, customizable, and upgradeable.  Anyone with intermediate PHP and MySQL experience should be able to customize Mantis to suit their needs.

<p>
<span class="section">Guidelines</span>
<p>
Here are some of the guidelines that I follow:
<ul>
	<li>Quick access to "What I want to do"
	<li>Simple navigation
	<li>Layered complexity
	<li>Consistency
	<li>Scale to browser window size
	<li>Minimal clutter
	<li>Minimal graphics
	<li>No frames
	<li>No animations
	<li>No Javascript
</ul>
<p>
I realize there are problems with some of the listed guidelines.  I'll be addressing them as they come to my notice or cross my annoyance threshold.

<p>
<span class="section">Versioning</span>
<p>
The release numbering convention I'm using is <b>major.minor.micro</b> (eg. 0.15.8).
<ul>
	<li>Major - Indicates a very large change in the core package.  Rewrites or major milestones.
	<li>Minor - Significant amount of feature addition/modification.  Anything that requries an ugprade script.
	<li>Micro - Mostly bug fixes or minor features
</ul>
I will release a new version for a significant bugfix as often as daily.
<p>
Currently, Mantis is considered beta software.  Version 1.0.0 will be used when I consider Mantis to be production quality.  This means it should be feature full and stable enough for full production use.
<p>
<span class="section">How to Help</span>
<p>
<ul>
	<li>Report any bugs at the <a href="demo.php3">Demo Bugtracker</a>
	<li>Suggest (reasonable) features
	<li>Give feedback and visit the <a href="polls.php3">polls</a> or <a href="survey.php3">surveys</a>
	<li>Contribute code or tell me where to look.
	<li><b>Let me know if you find it useful</b>.  I won't publish the information without permission, but I would appreciate the feedback.  This keeps me motivated.
	<li><b>Buy me a book</b> off my <a href="http://www.amazon.com/exec/obidos/registry-edit-items-done/2FXMNHDUMQLA/107-9987144-7527713">wish list</a>!
</ul>

<? include("bot.php3"); ?>