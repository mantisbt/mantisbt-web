<?php
	$t_sub_title = "Coding Conventions";

	include( "top.php" );
?>

<span class="page_title">Mantis Coding Conventions</span>
<hr size="1" noshade="noshade" width="100%" />
<p>
This is the Mantis coding conventions document.  This should assist anyone who wants to modify the code or work on active development.  Anyone who wishes to contribute code <b>must adhere</b> to these guidelines.  <b>Code not following these conventions will be rejected.</b>  If you have suggestions or a good argument for changing some of these guidelines then discuss it on the <a href="mailinglists.php">developer mailing lists</a>.
<p>
First, start off by reading the <a href="http://www.phpinfo.net/articles/article_php-coding-standard.html"><b>PHP Coding Standards</b></a> document.  I've deviated in a few places but just about everything in the document applies here as well.
<p>
	Above all, write code that is easy to read and maintain.  Comment blocks of code and functions at all times.  And get on my case if I deviate too much as well!
<p>
<span class="section">Naming Variables</span>
<ul>
	<li>Use all lower case.</li>
	<li>Use _ to separate words, e.g. $green_color_value</li>
	<li>Use descriptive names (except loop variables).</li>
	<li>Loop variables can be of the usual variety: $i, $j, $k, etc.</li>
	<li>Count variables should follow the format $*_count, e.g. $bug_count</li>
	<li>Global variables should be prefixed with g_</li>
	<li>Temporary variables should be prefixed with t_</li>
	<li>Parameters and variables passed from forms that have been cleaned of any special SQL chars (i.e. slashes) should be prefixed with c_</li>
	<li>Uncleaned function parameters should be prefixed with p_</li>
	<li>Uncleaned variables passed from forms should be prefixed with f_</li>
	<li>Other variables are prefixed with v_, v2_, etc.</li>
	<li>Never prefix with l_ or o_ or q_ (visually confusing)</li>
	<li>$query and $result should be used for SQL query and results respectively</li>
</ul>

<span class="section">Naming Functions</span>
<ul>
	<li>Use all lower case.</li>
	<li>Use _ to separate words, e.g. setup_page_breaks()</li>
	<li>Keep functions to 5 words or less</li>
	<li>Functions that print should be prefixed with print_.</li>
	<li>Try to use prefixes to group functions (i.e., email_, news_, etc.)</li>
</ul>

<span class="section">Naming Classes</span>
<ul>
	<li>Use FirstLetterOfWordIsCaptilized style</li>
	<li>Variables that are class objects should have the prefix coo_</li>
</ul>

<span class="section">Naming Files</span>
<ul>
	<li>Use all lower case.</li>
	<li>Use _ to separate words, e.g. view_new_bugs_page.php</li>
	<li>Use .php file extensions</li>
	<li>Filenames must be less than 32 characters in length.  This plays nice with older file systems like Mac OS.</li>
	<li>Included files should be suffixed by _inc.php</li>
</ul>


<span class="section">SQL formatting</span>
<ul>
	<li>UPPERCASE all SQL keywords:</li>
<pre>
$query = "SELECT *
	FROM $g_mantis_bug_table
	WHERE id='1'";
</pre>
	<li>Always assign a query string to a variable.  This makes code easier to debug when problems occur.  Do not create the query in the call to the function.</li>
	<li>Break up SQL queries over multiple lines to be easy to read.</li>
</ul>

<span class="section">General Formatting</span>
<ul>
	<li>Use TABS with a size of 4</li>
	<li>Follow the table formatting of existing pages</li>
	<li>Use &lt;?php ?&gt; for php delimiters.</li>
	<li>Try not to print/echo HTML unless it's short or in a function loop</li>
	<li>Do not use the EOF construct</li>
</ul>

<span class="section">Miscellaneous</span>
<ul>
	<li>Don't use the ?: construct except in very rare cases. It is confusing and has a lot of bug potential.</li>
	<li>Avoid magic numbers.  The only magic numbers in use should be 1 and 0 and their meaning should be obvious.</li>
</ul>

<span class="section">Page Guidelines</span>
<ul>
	<li>The first item should be the copyright notice</li>
	<li>At the bottom will be the footer information and closing print_ functions.</li>
</ul>

<span class="section">Braces and Parantheses</span>
<ul>
	<li>Parantheses should be right after a function name, e.g. function() not function ()</li>
	<li>Parantheses should have a space right after a keyword (if, while, for), e.g. for (...)</li>
	<li>Formatting of braces is illustrating below.  We use unmatched placing.</li>
	<li>Arrays should be referenced with no spaces, e.g. $arr['index'] not $arr[ 'index' ]</li>
<pre>
for (...) {
    blah
}

or

if (...) {
    blah
}
</pre>
	<li>if ... else  blocks should be in this format:</li>
<pre>
if (...) {
    blah1
} else {
    blah2
}
</pre>
</ul>

<span class="section">Comparisons</span>
<ul>
	<li>The NOT operator should be placed next to its operand. No spaces, e.g. !$value</li>
	<li>Parentheses should be used for grouping, especially with multiple comparisons, e.g. if ( ( null == $val ) &amp;&amp; ( null == $val2 ) )</li>
</ul>

<span class="section">Strings</span>
<ul>
	<li>Use spaces around the string concatenation operator, e.g. 'str ' . $value . ' str2';</li>
	<li>Use ' instead of " if there are no variables or special characters.</li>
</ul>

<span class="section">Comments</span>
<ul>
	<li>Use the # symbol for line commenting, not //</li>
	<li>Use /* */ for block commenting unless you nest /* */ comments.  Generally, only use this during development.</li>
	<li>Use @@@ followed by a brief message (BROKEN, TEMPORARY, etc) as a "look at this" indicator.  Leaving your name next to is a good idea.  This way critical items can easily be found.</li>
</ul>

<span class="section">Editor Features</span>
<ul>
	<li>Search and replace in multiple files</li>
	<li>Goto line number</li>
	<li>Syntax highlighting</li>
	<li>Adjustable TAB spacing</li>
</ul>

<?php include( "adsense_vertical_inc.php" ); ?>

<?php include( "bot.php" ); ?>
