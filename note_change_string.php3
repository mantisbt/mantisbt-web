<? include( "top.php3" ); ?>

<span class="page_title">Changing the wording</span>
<hr size=1 noshade width="100%">
<p>

<span class="section">Introduction</span>
<p>
	Some of you may want to change the wording in the drop down lists or modify the actual lists themselves.  This document lists the necessary steps to do so.
<p>
	In order to achieve full localization, Mantis puts its strings in language files.  These are called strings_english.txt, strings_german.txt, and so on.  In order for the drop down list items to be stored properly they are indexed by numbers and those numbers are stored in the database.  These number:string pairings are stored in the strings_*.txt files and a similar thing is found in constant_inc.php.
	<pre>$s_projection_enum_string = "10:none,30:tweak,50:minor fix,70:major rework,90:redesign";</pre>
	Say we have a projection of "tweak".  That means that the bug entry in the database has a value of 30.  We pull this value out of the database and store it in a variable.  Then we take the $s_projection_enum_string and break it into an array.  We scan through this looking for something that matches 30.  If there is a match then we display the appropriate string value ("tweak").  If we can't find it, then the functions is programmed to return the string "@null@".
<p>
	constant_inc.php defines certain contsnat values to be associated with each numberical value.  Here are the access level constants.
<pre>
define( "VIEWER",         10 );
define( "REPORTER",       25 );
define( "UPDATER",        40 );
define( "DEVELOPER",      55 );
define( "MANAGER",        70 );
define( "ADMINISTRATOR",  90 );
</pre>
Note that these correspond nicely to the values in the strings_*.txt file.
<pre>$s_access_levels_enum_string =  "10:viewer,25:reporter,40:updater,55:developer,70:manager,90:administrator";</pre>
Here VIEWER is assigned the value 10.  VIEWER is later used in the code when access level checks need to be performed.  Mantis uses these constants in place of the actual numbers (called "magic numbers") which are a "bad thing" in code.  Changing or removing these constants or their values can be a "bad thing" if you do not know exactly what you are doing.

<p>
<span class="section">Editing String Text</span>
<p>
	Editing the text of a string is easy enough.  Let us say you wanted to change "reporter" to be "Tester" in English.
<ul>
	<li>Open up strings_english.txt
	<li>Look for the access_level enum string.
	<li>Here it is<pre>$s_access_levels_enum_string = "10:viewer,25:reporter,40:updater,55:developer,70:manager,90:administrator";</pre>
	<li>Find the word reporter<pre>25:reporter</pre>
	<li>Change it and save it<pre>25:Tester</pre>
</ul>
If you want to change it for all languages then you will need to do the same for each language file.
<p>
<span class="section">Adding or Deleting from the drop down lists</span>
<p>
	Suppose you wanted to add a new status called "QA Ready".  This is a bit more involved that just editing text.  You will need to insert a new number:string pair.  Let's say you wanted this to be before "resolved".
<pre>$s_status_enum_string = "10:new,20:feedback,30:acknowledged,40:confirmed,50:assigned,70:QA Ready,80:resolved,90:closed";</pre>
Done.  Now you will be able to update a bug and make it's state "QA Ready".
<p>
Suppose you wanted to cut down the serverity list to just "major" and "minor".  Just open up the strings_*.txt file, find the right enum string, and make it look like this:
<pre>$s_severity_enum_string = "50:minor,60:major";</pre>
Be careful of what you remove here.  Some fields have default values that are inserted and if the apprpriate number:string pair is not foudn then the string "@null@" is displayed.

<p>
<b>WARNING</b>: Do NOT remove states from the STATUS fields unless you are absolutely sure of what you are doing.  Mantis uses many of these states in it's core bugflow design and removal will result in many errors and warnings.

<? include( "bot.php3" ); ?>