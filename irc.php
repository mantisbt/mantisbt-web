<?php
	$t_sub_title = "IRC";

	include( "top.php" );
?>

<h4>IRC</h4>

<p>
	The official MantisBT IRC channels are hosted on
	<a href="http://freenode.net/">Freenode</a>. The
	<span class="tooltip">
		<a href="irc://irc.freenode.net/mantisbt-help">#mantisbt-help</a>
		<span>Connect to the channel</span>
	</span>
	channel is dedicated to questions and support, while
	<span class="tooltip">
		<a href="irc://irc.freenode.net/mantisbt-help">#mantisbt</a>
		<span>Connect to the channel</span>
	</span>
	is more focused on development discussions.
</p>

<p>
	Our <em>mantisbot</em> lurks in both IRC channels and keeps a log
	of all conversations.
	The <a href="irclogs.php">archives can be found here</a>.
	Should you want to go off the record, simply prefix your message
	with <tt>[nolog]</tt>.
</p>

<p>
	If you are looking for an IRC client, have a look at this
	<a href="http://en.wikipedia.org/wiki/Comparison_of_Internet_Relay_Chat_clients">wikipedia page</a>,
	listing a number of options.

	Should you prefer to use a web client, feel free to use the widget below
	or connect using the
	<a href="http://webchat.freenode.net/?channels=%23mantisbt-help">Freenode webchat</a>.
	Note that the <a href="http://blog.freenode.net/2009/06/new-freenode-webchat-and-why-to-use-it/">
		Mibbit client has been disabled</a>
	and can't be used on Freenode.
</p>

<br />

<iframe width="600" height="380" scrolling="no" frameborder="0"
	src="http://webchat.freenode.net/?channels=%23mantisbt-help">
</iframe>

<?php
	include( "bot.php" );
