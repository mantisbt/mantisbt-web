<?php include( "top.php" ); ?>

<span class="page_title">Mantis Coding Conventions</span>
<hr size=1 noshade width="100%" />
<p>
This is the Mantis coding conventions document.  This should assist anyone who wants to modify the code or work on active development.  Anyone who wishes to contribute code <b>must adhere</b> to these guidelines.  <b>Code not following these conventions will be rejected.</b>  If you have suggestions or a good argument for changing some of these guidelines then discuss it on the <a href="mailinglists.php">developer mailing lists</a>.
<p>
First, start off by reading the <a href="http://utvikler.start.no/code/php_coding_standard.html"><b>PHP Coding Standards</b></a> document.  I've deviated in a few places but just about everything in the document applies here as well.
<p>
	Above all, write code that is easy to read and maintain.  Comment blocks of code and functions at all times.  And get on my case if I deviate too much as well!
<p>
<span class="section">Naming Variables</span>
<ul>
	<li>Use all lower case.
	<li>Use _ to separate words.  eg.  $green_color_value
	<li>Use descriptive names (except loop variables).
	<li>Loop variables can be of the usual variety: $i, $j, $k, etc.
	<li>Count variables should follow the format $*_count.  eg $bug_count
	<li>Global variables should be prefixed with g_
	<li>Temporary variables should be prefixed with t_
	<li>Parameters and variables passed from forms that have been cleaned of any special SQL chars (i.e. slashes) should be prefixed with c_
	<li>Uncleaned function parameters should be prefixed with p_
	<li>Uncleaned variables passed from forms should be prefixed with f_
	<li>Other variables are prefixed with v_, v2_, etc
	<li>Never prefix with l_ or o_ or q_ (visually confusing)
	<li>$query and $result should be used for SQL query and results respectively
</ul>

<span class="section">Naming Functions</span>
<ul>
	<li>Use all lower case.
	<li>Use _ to separate words.  eg.  setup_page_breaks()
	<li>Keep functions to 5 words or less
	<li>Functions that print should be prefixed with print_.
	<li>Try to use prefixes to group functions (i.e., email_, news_, etc)
</ul>

<span class="section">Naming Classes</span>
<ul>
	<li>Use FirstLetterOfWordIsCaptilized style
	<li>Variables that are class objects should have the prefix coo_
</ul>

<span class="section">Naming Files</span>
<ul>
	<li>Use all lower case.
	<li>Use _ to separate words.  eg.  view_new_bugs_page.php
	<li>Use .php file extensions (previously we used .php or .php)
	<li>Filenames must be less than 32 characters in length.  This plays nice with older file systems like MacOS.
	<li>Included files should be suffixed by _inc.php
</ul>


<span class="section">SQL formatting</span>
<ul>
	<li>UPPERCASE all SQL keywords:
<pre>
$query = "SELECT *
	FROM $g_mantis_bug_table
	WHERE id='1'";
</pre>
	<li>Always assign a query string to a variable.  This makes code easier to debug when problems occur.  Do not create the query in the call to the function.
	<li>Break up SQL queries over multiple lines to be easy to read.
</ul>

<span class="section">General Formatting</span>
<ul>
	<li>Use TABS with a size of 4
	<li>Follow the table formatting of existing pages
	<li>Use &lt;?php ?&gt; for php delimiters.
	<li>Try not to print/echo HTML unless it's short or in a function loop
	<li>Do not use the EOF construct
</ul>

<span class="section">Miscellaneous</span>
<ul>
	<li>Don't use the ?: construct. It is confusing and has too much bug potential.
	<li>Avoid magic numbers.  The only magic numbers in use should be 1 and 0 and their meaning should be obvious.
</ul>

<span class="section">Page Guidelines</span>
<ul>
	<li>The first item should be the copyright notice
	<li>At the bottom will be the footer information and closing print_ functions.
</ul>

<span class="section">Braces and Paranthesis</span>
<ul>
	<li>Paranthesis should be right after a function name.  eg: function() not function ()
	<li>Paranthesis should have a space right after a keyword (if, while, for) eg: for (...)
	<li>Braces formatting is illustrating below.  We use unmatched placing.
<pre>
for (...) {
    blah
}

or

if (...) {
    blah
}
</pre>
	<li>if ... else  blocks should be in this format:
<pre>
if (...) {
    blah1
} else {
    blah2
}
</pre>
</ul>

<span class="section">Comments</span>
<ul>
	<li>Use the # symbol for line commenting
	<li>Use /* */ for block commenting unless you nest /* */ comments.  Generally, only use this during development.
	<li>Use @@@ followed by a brief message (BROKEN, TEMPORARY, etc) as a "look at this" indicator.  Leaving your name next to is a good idea.  This way critical items can easily be found.
</ul>

<span class="section">Editor Features</span>
<ul>
	<li>Search and replace in multiple files
	<li>Goto line number
	<li>Syntax highlighting
	<li>Adjustable TAB spacing
</ul>


<!-- --------------------------------------------------------------------- -->


<?php include( "bot.php" ); ?>