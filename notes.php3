<html>
<head>
<? include( "css.php3" ) ?>
<title>Mantis</title>
</head>
<body>

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
<td width=100%>
<p>
<b><font size=+1>Notes</font></b>

<p>
<b>Example of Use</b>
<p>
The following is a basic description of what I envisioned when developing the system.
<p>
Access level have been broken into the following:
<ul>
<li>viewer
<li>reporter
<li>updater
<li>developer
<li>manager
<li>administrator
</ul>
Viewers should be considered outsiders to the system.  They have no rights to change or add to any of the data.  This is a useful state for anonymous or guest accounts.  Project teams that wish to allow public access to a bug database but do not wish for more can use this access level.
<p>
Reporters are your basic users who report bugs or request features.  Most of the time these will be your customers or testers.
<p>
Updaters are basically privileged reporters.  They are allowed to update the status of a bug.  This can range from confirming a bug, assigning it to the proper developer, or even resolving a bug.  Examples would be experienced beta testers or trusted members of the product community (helpful power users).
<p>
Developers should be self-explanatory.  These are the people who actually work on the project/product.
<p>
Managers are also Developers but also have the power to control access to projects.  They are assigned ownership of a project on a per project basis.  This is similar to a forum moderator.
<p>
Administrators are the people who have total control over the system.  Yes, they can even screw up the project.  In principle, these accounts shouldn't be used except for administrative functions.  Theses might include creating new projects, assigning managers to projects, or making system changes.
<p>
The typical cycle for a bug would be as follows:
<ul>
<li>User downloads/buys product and starts using it.
<li>User discovers what he considers a bug.
<li>User returns to the product webpage to see if there is a fix or workaround.
<li>User sees that there is a public bugtracker and goes to see if his bug is listed there.
<li>User doesn't find it and so reports it.
<li>Updater comes by and notices a NEW bug and reads it.
<li>Updater decides that the bug is legitimate and so ASSIGNS it to a developer.
<li>Developer is notified and discovers he needs more information.
<li>Developer adds a note requesting information and sets the bug to FEEDBACK status.
<li>User recieves an email requesting more information and returns to give it.
<li>Developer and User correspond via bugnotes until the information needed is retrieved.
<li>Developer fixes bug and posts fix or workaround.
<li>Developer RESOLVES the bug.
</ul>
<p>
<b>Navigation</b>
<p>
My biggest problem with every web based bugtracking package that I have come across is that the interfaces are inadequate.  Most of the time I go to a bugtracker for one of two reasons: 1) I want to file a bug.  2) I want to browse recent, open bugs.  All of the bugtrackers that I have seen up to this point made is difficult to do 2.  Most of the time they use poor language like 'generate reports'.  Almost all seem to think that the first thing you'd like to do when entering a bugtracker is to query for a bug by its ID.  I find that bug IDs are the last thing I remember and I think it's an extremely poor choice to be presented to a new visitor.  My interface reflects this disatisfaction.  All major actions are available via the menu bar, thus navigation is simple and quick.
</td>
</tr>
</table>

</body>
</html>