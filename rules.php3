<? include( "top.php3" ); ?>

<span class="page_title">Rules for Development</span>
<hr size=1 noshade width="100%">
<p>

<span class="section">Coding Style</span>
<p>
Please follow the <a href="guidelines.php3">Mantis Coding Conventions</a>.

<p>
<span class="section">CVS commits</span>
<p>
Please keep comits short and focused. Ideally you would check in all the files affects by your change(s) at one time.  You should try to commit after every bugfix or feature addition.  Make sure your commit note tells enough so that another developer (familiar with the project) can make sense of what changes were made.  Information might include files, functions, and variables that were modified.
<p>
eg.  cvs ci -m "Modified view_all_bug page so that column alignment is better across browsers" view_all_bug_page.php3
<p>
Occasionally you can make do with a trivial message like "updates for release" or "tweaked formatting".  This might be when you update the Changelog, or reformatted and cleaned up code, etc.

<p>
<span class="section">Communication</span>
<p>
Please use the <a href="mailinglists.php3">mantisbt-dev mailing list</a> or <a href="forums.php3">forums</a>.  You can monitor forums so that every post is emailed to you.  This way there is a public record of development. If you have a matter you would like to discuss in private them emailing me directly is fine.

<p>
<span class="section">Testing</span>
<p>
In general I would prefer that you test using at least two browsers.  This way most browser dependencies can be caught.  I recommend testing with Internet Explorer and Mozilla.  This captures the vast majority of actual users.  Others that might be considered are Opera, Netscape, Konqueror, and OmniWeb.

<p>
<span class="section">Other rules</span>
<p>
Make sure you signup on the bugtracker and received developer access.
<p>
You can mark a bug as resolved if it is commited in CVS.  Please don't close bugs until that release is publicly available.
<p>

<? include( "bot.php3" ); ?>