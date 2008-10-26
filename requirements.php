<?php
	$t_sub_title = "Requirements";

	include( "top.php" );
?>

<span class="page_title">Requirements</span>
<hr size="1" noshade="noshade" width="100%" />
<p>MantisBT runs on Windows, MacOS, OS/2, Linux, Solaris, the BSDs, and just about anything that supports the required server software.</p>
<p>MantisBT has very modest software and hardware requirements.  You need a computer to run the server on along with the server software.  All of the required software is free for commercial or non-commercial use.</p>
<p>The computer can be a shared public web server or a dedicated co-loc box.  It can even run on an office machine.  Any Pentium class computer should be adequate for moderate usage.  You will need enough diskspace for the database to grow and enough memory to avoid virtual memory thrashing.  Several thousand issues will only take up a few MBs of space.  This will grow proportionately with attached files.</p>
<br />
<span class="section">Software (for MantisBT 1.1.x)</span>
<ul>
	<li><a href="http://www.php.net/">PHP</a> 4.3.0 and higher</li>
	<li><a href="http://www.mysql.com/">MySQL database</a> 4.1.1 and higher (MS SQL and DB2 are also supported).</li>
	<li>Web server (<a href="http://httpd.apache.org/">Apache</a>, IIS, etc.)</li>
</ul>
<span class="section">Software (for MantisBT 1.2.x)</span>
<ul>
	<li><a href="http://www.php.net/">PHP</a> 5.2.0 and higher</li>
	<li><a href="http://www.mysql.com/">MySQL database</a> 4.1.1 and higher (MS SQL, DB2, and PostgreSQL are also supported).</li>
	<li>Web server (<a href="http://httpd.apache.org/">Apache</a>, IIS, etc.)</li>
</ul>
<span class="section">Cost</span>
<p>MantisBT is free. The net cost to use MantisBT is the time to download, install, and configure the software plus any potential hardware costs.  Continued maintenance should be minimal unless you are customizing the package.  You can also use the MantisBT team's consulting services to customize or enhance MantisBT for your company's specific needs.</p>
<br />
<span class="section">Time</span>
<p>If you've done this sort of thing before it will probably take about 10-60 minutes.  If not, plan on around 1-8 hours depending on the problems you run into.  If you are using InstantMantis
to evaluate MantisBT or to run a small installation, then you should be up and running in 5 minutes even if you have never touch a webserver or PHP before.</p>
<br />
<span class="section">PHP</span>
<p>You don't have to know a thing about PHP to use MantisBT.  However, it always helps to be able to tinker with PHP scripts.</p>
<p>PHP is a simple scripting language and syntacticaly resembles C.  It is not hard to learn.  In fact, it makes normally difficult tasks so ridiculously easy that you'll want to use it for many tasks.</p>
<p>The <a href="http://www.php.net/manual/en/">PHP Manual</a> is <b>phenomenal</b>.  If you ever have a question about a php function then run to the manual.  The user comments always shed light into issues that others like you have experienced.</p>
<p>There are many sites that offer basic tutorial to using PHP and/or MySQL( <a href="http://www.devshed.com/">DevShed</a> | <a href="http://www.webmonkey.com/">WebMonkey</a> ).</p>
<br />
<span class="section">MySQL</span>
<p>Basic administration of MySQL is necessary.  At a minimum you should be able to:</p>
<ul>
	<li>login</li>
	<li>create a new user</li>
	<li>give the user permissions</li>
	<li>create a new database</li>
</ul>
<p><a href="http://www.mysql.com/doc/">MySQL.com</a> has excellent documentation.  We highly recommend using <a href="http://www.phpwizard.net">phpMyAdmin</a> to administer your MySQL database.  You can create a new database and edit tables with this excellent package.  All you need to do beforehand is setup the database user(s).</p>
<br />
<span class="section">Webserver</span>
<p>The webserver needs to be configured to handle PHP files.  In Apache, this monumental task requires all of <a href="http://www.php.net/manual/en/install.apache.php">three lines in the configuration file</a>.  There are also instructions for <a href="http://www.php.net/manual/en/install.iis.php">IIS</a> and many more webservers.  I think you get the idea: use <a href="http://www.php.net/manual/en/">The PHP Manual</a>!</p>

<?php
	include( 'adsense_vertical_inc.php' ); 

	$t_footer_sponsored_links = '
		<a href="http://www.all4myspace.com/" title="MySpace Layouts" target="_blank">MySpace Layouts</a>,
		<a href="http://www.crserecycling.com/" title="Electronics Recycling" target="_blank">Electronics Recycling</a>,
		<a href="http://www.coolinvesting.com/" title="How to Invest" target="_blank">How to Invest</a>
	';

	include( "bot.php" ); 
?>
