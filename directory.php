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
	section( 'A' );
		entry( 'Axon Pro', 'http://www.axonpro.sk/', null );
	section_end();

	section( 'B' );
		entry( 'Backslash', 'http://www.backslash.com.au/', null );
		entry( 'Base4 Sistemas', 'http://www.base4.com.br/', null );
		entry( 'Beyond Ordinary Software Solutions', 'http://www.beyond-ordinary.com/', null );
		entry( 'BigSoft Limited', 'http://www.bigsoft.co.uk/', null );
	section_end();

	section( 'C' );
		entry( 'CAPSHER Technology, Inc.', 'http://www.capsher.com/', null );
		entry( 'chan_sccp', 'http://chan-sccp.sourceforge.net/', 'http://www.czmok.de/devtrack/' );
		entry( 'clarkconnect', 'http://www.clarkconnect.org/', 'http://www.clarkconnect.org/bugs/' );
		entry( 'CMSform<sup>E</sup>', 'http://cmsforme.sourceforge.net/', 'http://cmsforme.sourceforge.net/bugs/' );
		entry( 'Control Engineering Group', 'http://control.ee.ethz.ch/~ceg/', 'http://control.ee.ethz.ch/~ceg/mantis/' );
		entry( 'Convergys', 'http://www.convergys.com/', null );
		entry( 'csUnit', 'http://www.csunit.org/', null );
	section_end();

	section( 'D' );
		entry( 'Dataprom', 'http://www.dataprom.com' );
		entry( 'Dr. WEB', 'http://www.drweb.com/', 'http://bugs.drweb.com/' );
		entry( 'dotProject', 'http://www.dotproject.net/', 'http://www.dotproject.net/mantis/' );
	section_end();

	section( 'E' );
		entry( 'eboxy', 'http://eboxy.sourceforge.net/', 'http://eboxy.sourceforge.net/mantis/' );
		entry( 'encoway', 'http://www.encoway.de/', null );
		entry( 'EPICS', 'http://www.aps.anl.gov/epics/', 'http://www.aps.anl.gov/epics/mantis/' );
	section_end();

	section( 'F' );
		entry( 'Forum One Communications', 'http://www.forumone.com/' );
		entry( 'Fraunhofer IPSI', 'http://ipsi.fraunhofer.de/concert/' );
		entry( 'FTPEditor', 'http://www.ftpeditor.com/', 'http://www.ftpeditor.com/support/mantis/' );
	section_end();

	section( 'G' );
		entry( 'Gambit Consulting', 'http://www.gambit.de/' );
		entry( 'Gruppo Tesi', 'http://www.gruppotesi.com/' );
	section_end();

	section( 'H' );
		entry( 'Hitflip', 'http://www.hitflip.de/', null );
		entry( 'Hostsharing e.G.', 'http://www.hostsharing.net/', 'https://todo.hostsharing.net/' );
	section_end();

	section( 'I' );
		entry( 'Intra2net', 'http://www.intra2net.com/' );
		entry( 'Institute for Computational Biomedicine (ICB)', 'http://icb.med.cornell.edu/', 'http://icbtools.med.cornell.edu/mantis/' );
	section_end();

	section( 'J' );
		entry( 'Jack Audio Connection Kit', 'http://jackit.sourceforge.net/', 'http://jackit.sourceforge.net/mantis/' );
		entry( 'julitec', 'http://www.julitec.de/' );
	section_end();

	section( 'L' );
		entry( 'LanAction', 'http://lanaction.sourceforge.net/', 'http://lanaction.sourceforge.net/bugtracker/' );
		entry( 'LIVEwwware', 'http://www.livewwware.com/', 'http://mantis.livewwware.com/' );
	section_end();

	section( 'M' );
		entry( 'MantisConnect', 'http://www.futureware.biz/mantisconnect/', 'http://www.futureware.biz/mantis/' );
		entry( 'MediaPortal', 'http://mediaportal.sourceforge.net/', 'http://nolanparty.com/mediaportal.sourceforge.net/mantis/' );
	section_end();

	section( 'N' );
		entry( 'National Centre for Applied Learning Technologies (NCALT)', 'http://www.ncalt.com' );
		entry( 'Nox Wizard', 'http://noxwizard.sourceforge.net/', 'http://noxwizard.sourceforge.net/mantis/' );
	section_end();

	section( 'O' );
		entry( 'Olate', 'http://www.olate.co.uk/', 'http://www.olate.co.uk/tracker/' );
	section_end();

	section( 'P' );
		entry( 'phpBB', 'http://phpbb-php5mod.sourceforge.net/', 'http://phpbb-php5mod.sourceforge.net/bugs/' );
		entry( 'phpWebnotes', 'http://www.futureware.biz/webnotes/', 'http://www.futureware.biz/mantis/' );
		entry( 'PHPlist', 'http://www.phplist.com/', 'http://mantis.tincan.co.uk/' );
		entry( 'phpMyFAQ', 'http://www.phpmyfaq.de/', 'http://bugs.phpmyfaq.de/' );
		entry( 'phpMyEdit', 'http://phpmyedit.org/', 'http://platon.sk/projects/main_page.php?project_id=5' );
		entry( 'Project JEDI', 'http://homepages.borland.com/jedi/', 'http://homepages.borland.com/jedi/issuetracker/' );
	section_end();

	section( 'Q' );
		entry( 'QEM', 'http://www.qem.it/en/fr_en_home/pg_en_home.htm' );
		entry( 'QtParted', 'http://qtparted.sourceforge.net/', 'http://qtparted.sourceforge.net/bugs/' );
	section_end();

	section( 'R' );
		entry( 'RageIRCd', 'http://rageircd.sourceforge.net/', 'http://rageircd.sourceforge.net/mantis/' );
		entry( 'RealDecoy', 'http://www.realdecoy.com/' );
		entry( 'Ritlabs', 'http://www.ritlabs.com/', 'http://www.ritlabs.com/bt/' );
		entry( 'rsbac', 'http://www.rsbac.org/', 'http://bugtracker.rsbac.org/' );
	section_end();

	section( 'S' );
		entry( 'Scribus', 'http://www.scribus.net/', 'http://bugs.scribus.net/' );
		entry( 'SCTV', 'http://sctv.ucsc.edu/', 'http://sctv.ucsc.edu/mantis/' );
		entry( 'Shadow', 'https://sourceforge.net/projects/shadow/', 'http://www.open-shadow.org/mantis/' );
		entry( 'six apart', 'http://www.sixapart.com/', 'http://sixapart.com/mantis/' );
		entry( 'SourceFubar.Net', 'http://www.sourcefubar.net/', 'http://bugs.sourcefubar.net/' );
		entry( 'Soft-Gems', 'http://www.soft-gems.net/', 'http://support.soft-gems.net/mantis/' );
	section_end();

	section( 'T' );
		entry( 'Theratech', 'http://www.theratech.de/', 'http://www.support.theratech.de/' );
		entry( 'Thornsoft Development, Inc.', 'http://www.thornsoft.com/', 'http://www.thornsoft.com/mantis/' );
		entry( 'Truelite', 'http://www.truelite.it/', 'http://bugs.truelite.it/' );
		entry( 'Turkix', 'http://www.turkix.org/', 'http://bug.turkix.org/' );
		entry( 'Twig Project', 'http://informationgateway.org/', 'http://bugs.informationgateway.org/' );
	section_end();

	section( 'U' );
		entry( 'Uncommonplace', 'http://www.uncommonplace.com/', 'http://www.uncommonplace.com/bugs/' );
		entry( 'UnrealIRCd', 'http://www.unrealircd.org/', 'http://bugs.unrealircd.org/' );
		entry( 'USA Z&amp;P', 'http://usazyp.com.ve/' );
	section_end();

	section( 'W' );
		entry( 'Wash One', 'http://www.wash-one.com/' );
		entry( 'Water Corporation', 'http://www.watercorporation.com.au/' );
		entry( 'Web-CP', 'http://www.web-cp.net/', 'http://www.web-cp.net/mantis/' );
		entry( 'WordPress', 'http://wordpress.org/', 'http://mosquito.wordpress.org/' );
	section_end();
?>

<td style="padding: 4px;">
<?php include( "adsense_vertical_inc.php" ); ?>
</td>

<?php include( "bot.php" ); ?>