<? include( "top.php3" ); ?>

<span class="page_title">phpWebSite Integration</span>
<hr size=1 noshade width="100%">
<p>
This document illustrates how you can integrate Mantis into <a href="http://phpwebsite.appstate.edu">phpWebSite</a>.
<p>
<span class="section">USING PHPWEBSITE THEMES AUTOMATICALLY IN MANTIS</span>
<p>
By <a href="mailto:Talal@mi4.com">Talal Nehme</a>:<br>
<a href="http://www.mi4.com">http://www.mi4.com</a><br>
<a href="http://www.Talloula.com">http://www.Talloula.com</a>

<pre>
1- config_inc.php:

	line# 40, 48, if mantis has its own folder ("httpdocs/mantis/"), move it
	to the phpwebsite root dir and change the path on these two lines to
	reflect the new	location.  I installed mantis and phpwebsite in the same
	folder which is my /httpdocs, there is no conflict of filenames.  It would
	be great if all mantis files began with a prefix for a future release,
	just like the DB tables).

	NOTE: before you copy the images, there is one conflict, read below for
	blank.gif (in 3 and 4).

2- core_html_api.php:

	(comment out current header part and add phpwebsite header stuff)
	17 // PRINT "&lt;!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">";
	18 // PRINT "&lt;html>";
	19 include("mainfile.php");   //ADDED THIS TO INSERT PHPWEBSITE MAINFILE
	20 include("open_session.php"); //ADDED THIS TO INSERT PHPWEBSITE SESSION FUNCTIONS
	21 include("header.php");	//ADDED THIS TO INSERT PHPWEBSITE HEADER SECTION
	22 include("config.php"); 	//ADDED THIS TO INSERT PHPWEBSITE CONFIGURATION
	commented out
	29 // PRINT "&lt;head>";
	34 // PRINT "&lt;title>$p_title&lt;/title>";
	39 //      if ( !empty($p_css )) {
	40 //             include( "$p_css" );
	41 //    }
	52 //           PRINT "&lt;/head>";
	57 // PRINT "&lt;body>";
	129 // PRINT "&lt;/body>";

	(comment out the html closing tag part and add phpwebsite footer stuff,
	which includes all closing tags)
	134 // PRINT "&lt;/html>";
	135 include("footer.php");   //ADDED THIS TO INSERT PHPWEBSITE FOOTER SECTION

3- core_icon_api.php 16,17,18,32 change "blank.gif" to "mantis_blank.gif"

	PHPWEBSITE has a file in the "images" folder called blank.gif and
	it's MUCH BIGGER than mantis' blank.gif.  To prevent the conflict,
	rename the smaller mantis file to mantis_gif, copy it to the images
	folder,	and make the necessary changes in this file.

4- rename blank.gif to mantis_blank.gif

	Copy it to your images folder (use settings from mantis
	config_inc for images folder).

5- on your menu Create a hyperlink to the file:  login_page.php3

You're DONE!
</pre>

<? include( "bot.php3" ); ?>