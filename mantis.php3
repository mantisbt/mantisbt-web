<html>
<head>
<style>
body { background-color:#ffffff; font-family:Verdana, Arial; font-size=10pt }
td {  font-family:Verdana, Arial; font-size=10pt }
p {  font-family:Verdana, Arial; font-size=10pt }
</style>
<title>Mantis</title>
</head>
<body bgcolor=#ffffff>

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
<b><font size=+1>What is it?</font></b>
<p>
Mantis is a php/MySQL/web based bugtracking system.  The software resides on a webserver while any web browser should be able to function as a client.  It is released under the terms of the <a href="http://www.gnu.org/copyleft/gpl.html">GNU GPL license</a>.
<p>
I and a friend originally created a bugtracker as an internal tool for our own pet project.  Since then I've gone ahead with a total rewrite and decided to make it available to the public.  A check on the web in early 2000 revealed that there were no free php based bug tracking packages that were usable (I may be mistaken).  Hopefully, this package helps fill that niche.  I have no strong love of the GPL but I do feel that development tools should be free for developers, thus my choice of license.
<p>
The release numbering convention I'm using is major.minor.micro.  Major indicates a large change in the core package, minor a significant amount of feature addition/modification, micro for mostly bug fixes.  I am leaning towards releasing a new version for a significant bugfix as often as daily.

<p>
<b><font size=+1>Goals</font></b>
<p>
The stated goals for this project are to produce and maintain a lightweight, simple bugtracking system.  Additions of complexity/features should be modular so that users can be shielded from unwanted complexity.  Thus, much of the package allows for a simple version of a feature along with a more fully developed but complex version.  In the 'core' package the goal is to have the most important, most used, most time saving portions of a bugtracking system.  Hopefully this gives you 90% of the functionality that you need. The product is designed, to the best of the developer's abilities, to be easily modifiable and customizable and upgradeable.

<p>
<b><font size=+1>Requirements</font></b>
<p>
<li><a href="http://www.php.net/">php</a> 3.0.13 and higher
<li><a href="http://www.mysql.com/">MySQL database</a> (check back to see when new databases are added)
<li>Web server (<a href="http://www.apache.org/">apache</a>, IIS, etc.)
<p>
Additionally you will need to know basic administration of MySQL (login, create new database, run a SQL query).  The webserver needs to be configured to handle php files at a minimum.
<p>
It also helps a great deal to at least be able to tinker with php scripts (when there's a little bug or you want to tweak something).  Of course, knowing HTML is essential to do any custom formatting.  Along the lines of appearance, I have tried to use my best judgement in colors, layout, and feel.  Eventually I hope to be able to customize the look and feel from a single CSS file.
<p>
I highly recommend using <a href="http://www.phpwizard.net">phpMyAdmin</a> to administer your mysql database.

<p>
<b><font size=+1>Features and Benefits</font></b>
<p>
<li>Web based and platform independent
<li>Supports PHP3 and PHP4
<li>Mailing module
<li>Multiple project support
<li>Configuration files allow for site-wide control
<li>Integrated user and site management
<li>Integrated news management
<li>Color coding according to bug status
<li>Note addition capability for each bug
<li>Shows which bugs have been modified in last X hours
<li>Stored user profiles
<li>Complex viewing filters
<li>Detailed summary reports
<li>ETA and projection for each bug

<p>
<b><font size=+1>Upcoming Features</font></b>
<p>
Check the <a href="roadmap.php3">Roadmap</a> for a more detailed and up to date list of items.
<p>
<b><font size=+1>How to Help</font></b>
<p>
<li>Report any bugs at the <a href="demo.php3">Demo Bugtracker</a>
<li>Suggest (reasonable) features
<li>Contribute code or tell me where to look
<li>Join the development team!  Send me an email detailing what you would like to help out on.
<li>Let me know if you use it and find it useful.
I won't publish the information without permission, but I would appreciate the feedback.  It keeps me motivated.
</td>
</tr>
</table>

<p>
<div align=right>
<A href="http://sourceforge.net"> <IMG src="http://sourceforge.net/sflogo.php?group_id=14963" width="88" height="31" border="0" alt="SourceForge Logo"></A>
</div>

</body>
</html>