<?php include( "top.php" ); ?>

<?php
	function section( $p_letter ) {
		echo "<p><a name=\"$p_letter\" id=\"$p_letter\" /><span class=\"section\">- $p_letter -</span></p>\n";
		echo "<ul>\n";
	}

	function entry( $p_name, $p_url, $p_mantis_url = null ) {
		if ( null === $p_mantis_url ) {
			echo "<li><a href=\"$p_url\" target=\"_blank\">$p_name</a></li>\n";
		} else {
			echo "<li><a href=\"$p_url\" target=\"_blank\">$p_name</a> (<a href=\"$p_mantis_url\" target=\"_blank\">public</a>)</li>\n";
		}
	}
	
	function section_end() {
		echo "</ul>\n\n";
	}
?>

<span class="page_title">Users Directory</span>
<hr size=1 noshade width="100%">

<p>This is a directory of companies and open source projects that are using Mantis as their issue tracking system.  If 
your company is not listed below, or you know of an open source project that uses Mantis but is not listed below, please contact 
"vboctor -at- users -dot- sourceforge -dot- net" to update the list.</p>

<p>When possible consider adding a link back to Mantis website.  You can use the button on the left side of the page, however, 
please download it and reference it from your site to reduce the load on Mantis web server.</p>

<?php
	section( 'C' );
		entry( 'CAPSHER Technology, Inc.', 'http://www.capsher.com/', null );
		entry( 'chan_sccp', 'http://chan-sccp.sourceforge.net/', 'http://www.czmok.de/devtrack/' );
		entry( 'CMSform<sup>E</sup>', 'http://cmsforme.sourceforge.net/', 'http://cmsforme.sourceforge.net/bugs/' );
		entry( 'Convergys', 'http://www.convergys.com/locations.html/', null );
	section_end();

	section( 'E' );
		entry( 'eboxy', 'http://eboxy.sourceforge.net/', 'http://eboxy.sourceforge.net/mantis/' );
		entry( 'encoway', 'http://www.encoway.de/', null );
		entry( 'EPICS', 'http://www.aps.anl.gov/epics/', 'http://www.aps.anl.gov/epics/mantis/' );
	section_end();

	section( 'F' );
		entry( 'Forum One Communications', 'http://www.forumone.com/' );
		entry( 'Fraunhofer IPSI', 'http://ipsi.fraunhofer.de/concert/' );
	section_end();

	section( 'G' );
		entry( 'Gambit Consulting', 'http://www.gambit.de/' );
		entry( 'Gruppo Tesi', 'http://www.gruppotesi.com/' );
	section_end();

	section( 'H' );
		entry( 'Hostsharing e.G.', 'http://www.hostsharing.net/', 'https://todo.hostsharing.net/' );
	section_end();

	section( 'J' );
		entry( 'Jack Audio Connection Kit', 'http://jackit.sourceforge.net/', 'http://jackit.sourceforge.net/mantis/' );
	section_end();
	
	section( 'I' );
		entry( 'Institute for Computational Biomedicine (ICB)', 'http://icb.med.cornell.edu/', 'http://icbtools.med.cornell.edu/mantis/' );
	section_end();

	section( 'L' );
		entry( 'LanAction', 'http://lanaction.sourceforge.net/', 'http://lanaction.sourceforge.net/bugtracker/' );
	section_end();

	section( 'M' );
		entry( 'MantisConnect', 'http://www.futureware.biz/mantisconnect/', 'http://www.futureware.biz/mantis/' );
		entry( 'MediaPortal', 'http://mediaportal.sourceforge.net/', 'http://nolanparty.com/mediaportal.sourceforge.net/mantis/' );
	section_end();

	section( 'N' );
		entry( 'National Centre for Applied Learning Technologies (NCALT)', 'http://www.ncalt.com' );
		entry( 'Nox Wizard', 'http://noxwizard.sourceforge.net/', 'http://noxwizard.sourceforge.net/mantis/' );
	section_end();

	section( 'P' );
		entry( 'phpBB', 'http://phpbb-php5mod.sourceforge.net/', 'http://phpbb-php5mod.sourceforge.net/bugs/' );
		entry( 'phpWebnotes', 'http://www.futureware.biz/webnotes/', 'http://www.futureware.biz/mantis/' );
		entry( 'Project JEDI', 'http://homepages.borland.com/jedi/', 'http://homepages.borland.com/jedi/issuetracker/' );
	section_end();

	section( 'Q' );
		entry( 'QEM', 'http://www.qem.it/en/fr_en_home/pg_en_home.htm' );
		entry( 'QtParted', 'http://qtparted.sourceforge.net/', 'http://qtparted.sourceforge.net/bugs/' );
	section_end();

	section( 'R' );
		entry( 'RageIRCd', 'http://rageircd.sourceforge.net/', 'http://rageircd.sourceforge.net/mantis/' );
	section_end();

	section( 'S' );
		entry( 'SourceFubar.Net', 'http://www.sourcefubar.net/', 'http://bugs.sourcefubar.net/' );
	section_end();

	section( 'T' );
		entry( 'Twig Project', 'http://informationgateway.org/', 'http://bugs.informationgateway.org/' );
	section_end();
	
	section( 'W' );
		entry( 'Water Corporation', 'http://www.watercorporation.com.au/' );
	section_end();
?>

<td style="padding: 4px;">
<?php include( "adsense_vertical_inc.php" ); ?>
</td>

<?php include( "bot.php" ); ?>