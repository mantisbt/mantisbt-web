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
</td>
<td>
	<h3>Mantis Coding Conventions</h3>

	<p>
	This is the Mantis coding conventions document.  It lists all the basic conventions that I have followed in order to make the code easy to read and maintain.  ANyone working on the code, adding features, or wanting to send in a patch should take a quick look through this document.  Currently the code is very flat and procedure based.  A future version may switch to objects at which point some of these conventions may change or be added to.

	<p>

	<h3>Variables</h3>
	<ul>
	<li>Use descriptive names (except loop variables)
	<li>Single character variables should only be used for loop variables
	<li>Use _ to separate words
	<li>Always use lowercase ( $this_is_a_variable )
	<li>Use .php3 or .php for all file extensions.  Do not use .inc
	<li>Form variables are prefixed with f_
	<li>Function parameters should be prefixed with p_
	<li>Global variables should be prefixed with g_
	<li>Temporary variables are prefixed with t_
	<li>Use the v_ prefix for primary purpose variables in a page
	<li>Never prefix with l_ or o_ or q_ (visually confusing)
	<li>$query and $result should be used for SQL query and results respectively
	<li>Count variables should follow the format $<what>_count.  eg $bug_count
	<li>Included files should be suffixed by _inc.php
	</ul>

	<h3>Functions</h3>
	<ul>
	<li>Use _ to separate words
	<li>Always use lowercase ( this_is_a_function() )
	<li>Keep functions to 5 words or less
	<li>Functions that print should be prefixed with print_.
	<li>Try to use prefixes to group functions (ie, email_, news_, etc)
	</ul>

	<h3>Formatting</h3>
	<ul>
	<li>Use TABS with a size of 4 to make the code easily readable while not wasting too much space
	<li>Follow the table formatting of existing pages
	<li>Break up SQL queries to be easy to read
	<li>Use &lt;? and ?&gt; for php delimiters
	<li>Try not to print/echo html code unless it's short or in a function loop
	</ul>

	<h3>Page Guidelines</h3>
	<ul>
	<li>The first item should be the copyright notice
	<li>The next line should be a cookie check to see if the user is logged in
	<li>Next should be the majority of the SQL queries for a page
	<li>Next will be the various html print_ functions.
	<li>The main body of the page will follow
	<li>At the bottom will be the footer information and closing print_ functions.
	</ul>

	<a href="http://utvikler.start.no/code/php_coding_standard.html">PHP Coding Standard</a> has excellent guidelines for php programming style.  For the most part I seem to have followed it (except for TABS vs spaces).  If something is ambiguous consult this link or email me.
	Above all, write code that is easy to read and maintain.  Code that is not will be rewritten or deleted.  Comment blocks of code and functions at all times.  Get onto me if I fail to adhere to my own words.

	<!-- ---------------------------------------------------------------------- -->
	<p>
	<hr size=1>
	<p>
</td>
</tr>
</table>

</body>
</html>