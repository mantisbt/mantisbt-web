<? include( "top.php3" ); ?>

<span class="page_title">Requirements</span>
<hr size=1 noshade width="100%">
<p>
Mantis runs on Windows, MacOS, OS/2, Linux, Solaris, the BSDs, and just about anything that supports the required server software.
<p>
Mantis has modest software and hardware requirements.  You need a computer to run the server on along with the server software.  All of the required software is free for commercial or non-commercial use.  Each is the most popularly used product in its respective category.  This doesn't mean they are necessarly the best, but there will be a lot of web content and support knowledge about each.
<p>
The computer can be a shared public web server or a dedicated co-loc box.  It can even run on an office machine.  Any Pentium class computer should be adequate for moderate usage.  You'll just need enough diskspace for the database to grow and enough memory to avoid virtual memory thrashing.  My development machine is a Pentium 233 with 128MBs of RAM.
<p>
<span class="section">Software</span>
<ul>
	<li><a href="http://www.php.net/">PHP</a> 4.0.3 and higher
	<li><a href="http://www.mysql.com/">MySQL database</a> 3.23.2 and higher (alternate database support is planned for 2.0)
	<li>Web server (<a href="http://httpd.apache.org/">Apache</a>, IIS, etc.)
</ul>
<span class="section">Cost</span>
<p>
Mantis is free. The net cost to use Mantis is the time to download, install, and configure the software plus any potential hardware costs.  Continued maintenance should be minimal unless you are tweaking the package.
<p>
<span class="section">Time</span>
<p>
If you've done this sort of thing before it will probably take about 5-60 minutes.  If not, plan on around 1-8 hours depending on the problems you run into.  If you're unlucky then plan on more, or just give up now *wink*.
<p>
<span class="section">PHP</span>
<p>
You don't have to know a thing about PHP to use Mantis, unless something goes wrong.  Then it helps to be able to tinker with PHP scripts (when there's a little bug or you want to tweak something).
<p>
PHP is a simple scripting language and syntacticaly resembles C.  It is not something to be afraid of.  There are very few new concepts to learn.  In fact, it makes normally difficult tasks so ridiculously easy that you'll want to use it for lots of simple tasks (like washing dishes).
<p>
The <a href="http://www.php.net/manual/en/">PHP Manual</a> is *phenomenal*.  If you ever have a question about a php function then run to it.  The user comments always shed light into issues that others like you have expereinced.
<p>
There are many sites that offer basic tutorial to using PHP and/or MySQL( <a href="http://www.devshed.com/">DevShed</a> | <a href="http://www.webmonkey.com/">WebMonkey</a> ).
<p>
<span class="section">MySQL</span>
<p>
Basic administration of MySQL is necessary.  At a minimum you should be able to:
<ul>
	<li>login
	<li>create a new user
	<li>give the user permissions
</ul>
<p>
<a href="http://www.mysql.com/doc/">MySQL.com</a> has excellent documentation.  I also highly recommend using <a href="http://www.phpwizard.net">phpMyAdmin</a> to administer your MySQL database.  You can create a new database and edit tables with this excellent package.  All you need to do beforehand is setup the database user(s).
<p>
<span class="section">Webserver</span>
<p>
The webserver needs to be configured to handle PHP files.  In Apache, this monumental task requires all of <a href="http://www.php.net/manual/en/install.apache.php">one line in the configuration file</a>.  There are even instructions for <a href="http://www.php.net/manual/en/install.iis.php">IIS</a>, <a href="http://www.php.net/manual/en/install.netscape-enterprise.php">iPlanet/Netscape</a>, <a href="http://www.php.net/manual/en/install.xitami.php">Xitami</a>, and more.  I think you get the idea: use <a href="http://www.php.net/manual/en/">The PHP Manual</a>!

<? include( "bot.php3" ); ?>