<? include( "top.php3" ); ?>

<span class="page_title">Mantis Coding Conventions</span>
<hr size=1 noshade width="100%">
<p>
	This is the Mantis coding conventions document.  It lists all the basic conventions that I have followed in order to make the code easy to read and maintain.  <b>Code not following these conventions will be modified or (in extreme cases) rejected.</b> Anyone working on the code, adding features, or wanting to send in a patch should take a quick look through this document.  Currently the code is very flat and procedure based.  A future version may switch to objects at which point some of these conventions may change or be added to.  If you have additional suggestions or a good argument for changing some of these guidelines then <a href="mailto:kenito@300baud.org">send a message</a> or <a href="forums.php3">post in the forums</a>.

	<p>

	<span class="section">Variables</span>
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

	<span class="section">Functions</span>
	<ul>
	<li>Use _ to separate words
	<li>Always use lowercase ( this_is_a_function() )
	<li>Keep functions to 5 words or less
	<li>Functions that print should be prefixed with print_.
	<li>Try to use prefixes to group functions (ie, email_, news_, etc)
	</ul>

	<span class="section">Formatting</span>
	<ul>
	<li>Use TABS with a size of 4 to make the code easily readable while not wasting too much space
	<li>Follow the table formatting of existing pages
	<li>Break up SQL queries to be easy to read
	<li>CAPITALIZE SQL keywords
	<li>Use &lt;? and ?&gt; for php delimiters
	<li>Try not to print/echo html code unless it's short or in a function loop
	</ul>

	<span class="section">Page Guidelines</span>
	<ul>
	<li>The first item should be the copyright notice
	<li>The next line should be a cookie check to see if the user is logged in
	<li>Next should be the majority of the SQL queries for a page
	<li>Next will be the various html print_ functions.
	<li>The main body of the page will follow
	<li>At the bottom will be the footer information and closing print_ functions.
	<li>Use @@@ followed by a brief message (BROKEN, TEMPORARY, etc) as a "look at this" indicator.  Leaving your name next to it might be a good idea as well.
	</ul>

	<a href="http://utvikler.start.no/code/php_coding_standard.html"><b>PHP Coding Standard</b></a> has excellent guidelines for php programming style.  For the most part I seem to have followed it (except for TABS vs spaces).  If something is ambiguous consult this link or email me.
	Above all, write code that is easy to read and maintain.  Code that is not will be rewritten or deleted.  Comment blocks of code and functions at all times.  Get onto me if I fail to adhere to my own words.

	<!-- ---------------------------------------------------------------------- -->
	<p>
	<hr size=1>
	<p>
<? include( "bot.php3" ); ?>