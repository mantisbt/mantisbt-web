<?php include( "top.php" ); ?>

<?php
	$g_entry_count = 0;

	function section( $p_letter ) {
		echo "<p><a name=\"$p_letter\" id=\"$p_letter\" /><span class=\"section\">- $p_letter -</span></p>\n";
		echo "<ul>\n";
	}

	function entry( $p_name, $p_url, $p_mantis_url = null ) {
		global $g_entry_count;

		$g_entry_count++;

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
<hr size="1" noshade="noshade" width="100%" />

<p>This is a directory of companies and open source projects that are using Mantis as their issue tracking system.  If
your company is not listed below, or you know of an open source project that uses Mantis but is not listed below, please contact
"vboctor -at- users -dot- sourceforge -dot- net" to update the list.</p>

<p>When possible consider adding a link back to Mantis website.  You can use the button on the left side of the page, but
please download it and reference it from your site to reduce the load on the Mantis web server.</p>

<?php
	section( '0-9' );
		entry( '4eyes', 'http://www.4eyes.ch' );
	section_end();

	section( 'A' );
		entry( 'Absolute Software', 'http://www.absolute-software.co.uk/' );
		entry( 'AG SOFTWARE', 'http://www.agsoftware.hu/' );
		entry( 'aitools.org', 'http://aitools.org/' );
		entry( 'AlphaCarina Software GmbH', 'http://www.alphacarina.de/' );
		entry( 'ALSA project', 'http://www.alsa-project.org/', 'https://bugtrack.alsa-project.org/alsa-bug/login_page.php' );
		entry( 'Applied Informatics', 'http://www.appinf.com/' );
		entry( 'ASEP', 'http://www.asepgroup.com' );
		entry( 'Asterisk Project', 'http://www.digium.com/', 'http://bugs.digium.com/' );
		entry( 'Asystance', 'http://www.asystance.nl/' );
		entry( 'Avenity', 'http://www.avenity.com/' );
		entry( 'Axon Pro', 'http://www.axonpro.sk/', null );
		entry( 'AYS Systems', 'http://www.ayssystems.co.uk/', null );
	section_end();

	section( 'B' );
		entry( 'Backslash', 'http://www.backslash.com.au/', null );
		entry( 'Base4 Sistemas', 'http://www.base4.com.br/', null );
		entry( 'BBR Verkehrstechnik GmbH', 'http://www.bbr-vt.de/' );
		entry( 'Beyond Ordinary Software Solutions', 'http://www.beyond-ordinary.com/', null );
		entry( 'BigSoft Limited', 'http://www.bigsoft.co.uk/', null );
	section_end();

	section( 'C' );
		entry( 'CalidStyle', 'http://www.calidstyle.com' );
		entry( 'Candis Group (Beijing)', 'http://www.candis.com.cn/', null );
		entry( 'CAPSHER Technology, Inc.', 'http://www.capsher.com/', null );
		entry( 'Cel Kunststoffen', 'http://celkunststoffen.khlim.be/cel/', null );
		entry( 'chan_sccp', 'http://chan-sccp.sourceforge.net/', 'http://www.czmok.de/devtrack/' );
		entry( 'Circuitlink International', 'http://www.circuitlink.com.au/' );
		entry( 'clarkconnect', 'http://www.clarkconnect.org/', 'http://www.clarkconnect.org/bugs/' );
		entry( 'CMSform<sup>E</sup>', 'http://cmsforme.sourceforge.net/', 'http://cmsforme.sourceforge.net/bugs/' );
		entry( 'Codestuff LTD', 'http://www.codestuff.net/' );
		entry( 'Control Engineering Group', 'http://control.ee.ethz.ch/~ceg/', 'http://control.ee.ethz.ch/~ceg/mantis/' );
		entry( 'Convergys', 'http://www.convergys.com/', null );
		entry( 'csUnit', 'http://www.csunit.org/', null );
		entry( 'CVn', 'http://www.cavern.pl' );
	section_end();

	section( 'D' );
		entry( 'Dataprom', 'http://www.dataprom.com/' );
		entry( 'Deganius', 'http://www.deganius.de/' );
		entry( 'DeniX Solutions', 'http://denixsolutions.com/' );
		entry( 'Digital Edge Software &amp; Consulting', 'http://www.digitaledgesw.com' );
		entry( 'Dr. WEB', 'http://www.drweb.com/', 'http://bugs.drweb.com/' );
		entry( 'dotProject', 'http://www.dotproject.net/', 'http://www.dotproject.net/mantis/' );
	section_end();

	section( 'E' );
		entry( 'Earth Systems Science Computational Centre (ESSCC)', 'http://www.esscc.uq.edu.au' );
		entry( 'Easy To Work', 'http://www.easytowork.nl/' );
		entry( 'eboxy', 'http://eboxy.sourceforge.net/', 'http://eboxy.sourceforge.net/mantis/' );
		entry( 'ebswift.com', 'http://www.ebswift.com/', 'http://www.ebswift.com/bugtrack/mantis/' );
		entry( 'Edoceo, Inc.', 'http://www.edoceo.com/', null );
		entry( 'Emphasis Development', 'http://www.emphasisdevelopment.com/', 'http://www.emphasisdevelopment.com/mantis/' );
		entry( 'encoway', 'http://www.encoway.de/', null );
		entry( 'EPICS', 'http://www.aps.anl.gov/epics/', 'http://www.aps.anl.gov/epics/mantis/' );
	section_end();

	section( 'F' );
		entry( 'FileVision', 'http://www.filevision.net' );
		entry( 'Florian Müller GmbH', 'http://www.florian-mueller.de' );
		entry( 'Forum One Communications', 'http://www.forumone.com/' );
		entry( 'Fraunhofer IPSI', 'http://ipsi.fraunhofer.de/concert/' );
		entry( 'French ministry of culture and communication, IT department', 'http://www.culture.gouv.fr/' );
		entry( 'FTPEditor', 'http://www.ftpeditor.com/', 'http://www.ftpeditor.com/support/mantis/' );
	section_end();

	section( 'G' );
		entry( 'Gambit Consulting', 'http://www.gambit.de/' );
		entry( 'German Aerospace Center (DLR)', 'http://www.dlr.de/' );
		entry( 'GigaVoice - Internet Marketing & Outsourcing Solutions', 'http://gigavoice.com' );
		entry( 'GRAMPS', 'http://www.gramps-project.org', 'http://bugs.gramps-project.org' );
		entry( 'GROU.PS', 'http://grou.ps/' );
		entry( 'Gruppo Tesi', 'http://www.gruppotesi.com/' );
	section_end();

	section( 'H' );
		entry( 'Handydev', 'http://www.handydev.com/' );
		entry( 'Hitflip', 'http://www.hitflip.de/', null );
		entry( 'Hostsharing e.G.', 'http://www.hostsharing.net/', 'https://todo.hostsharing.net/' );
	section_end();

	section( 'I' );
		entry( 'IDSecuritySuite', 'http://www.idsecuritysuite.com/' );
		entry( 'Illumen', 'http://www.illumen.co.uk/' );
		entry( 'Intra2net', 'http://www.intra2net.com/' );
		entry( 'Institute for Computational Biomedicine (ICB)', 'http://icb.med.cornell.edu/', 'http://icbtools.med.cornell.edu/mantis/' );
		entry( 'INTEC International GmbH', 'http://www.intec-international.com/' );
		entry( 'inveress.net', 'http://www.inveress.net/' );
		entry( 'I-Tul Design & Software', 'http://www.i-tul.com/' );
	section_end();

	section( 'J' );
		entry( 'Jack Audio Connection Kit', 'http://jackit.sourceforge.net/', 'http://jackit.sourceforge.net/mantis/' );
		entry( 'JavlinConsulting', 'http://www.javlinconsulting.com/' );
		entry( 'julitec', 'http://www.julitec.de/' );
		entry( 'Juno Records', 'http://www.juno.co.uk' );
	section_end();

	section( 'K' );
		entry( 'Knowmax', 'http://www.knowmax.nl/', 'http://www.caremax.nl/' );
	section_end();

	section( 'L' );
		entry( 'Lachowski Datensysteme GmbH', 'http://www.lacho.net' );
		entry( 'LanAction', 'http://lanaction.sourceforge.net/', 'http://lanaction.sourceforge.net/bugtracker/' );
		entry( 'LifeType', 'http://www.lifetype.de/', 'http://bugs.lifetype.net/' );
		entry( 'LIVEwwware', 'http://www.livewwware.com/', 'http://mantis.livewwware.com/' );
		entry( 'Logical Arts', 'http://www.logicalartsinc.com/' );
	section_end();

	section( 'M' );
		entry( 'MantisConnect', 'http://www.futureware.biz/mantisconnect/', 'http://www.futureware.biz/mantis/' );
		entry( 'MediaPortal', 'http://mediaportal.sourceforge.net/', 'http://nolanparty.com/mediaportal.sourceforge.net/mantis/' );
		entry( 'Mfatix Co., Ltd.', 'http://www.mfatix.com/', 'http://www.mfatix/com/issues/' );
		entry( 'MiTo Team', 'http://mito.exofire.net/' );

	section_end();

	section( 'N' );
		entry( 'National Centre for Applied Learning Technologies (NCALT)', 'http://www.ncalt.com' );
		entry( 'Navigo Systems', 'http://www.navigo.com.au/' );
		entry( 'Nox Wizard', 'http://noxwizard.sourceforge.net/', 'http://noxwizard.sourceforge.net/mantis/' );
		entry( 'NWEA', 'http://www.nwea.org' );
	section_end();

	section( 'O' );
		entry( 'Olate', 'http://www.olate.co.uk/', 'http://www.olate.co.uk/tracker/' );
		entry( 'OLS Software', 'http://www.ols.co.il' );
		entry( 'OpenFlyers', 'http://openflyers.org/', 'http://bts.openflyers.org/' );
		entry( 'OtwarteRozwiazania', 'http://www.OtwarteRozwiazania.com/', 'http://mantis.OtwarteRozwiazania.com/' );
	section_end();

	section( 'P' );
		entry( 'Particracy', 'http://www.particracy.net/' );
		entry( 'phpayment', 'http://www.phpayment.de/', 'http://bugs.phpayment.de/' );
		entry( 'phpBB', 'http://phpbb-php5mod.sourceforge.net/', 'http://phpbb-php5mod.sourceforge.net/bugs/' );
		entry( 'phpWebnotes', 'http://www.futureware.biz/webnotes/', 'http://www.futureware.biz/mantis/' );
		entry( 'PHPlist', 'http://www.phplist.com/', 'http://mantis.tincan.co.uk/' );
		entry( 'phpMyFAQ', 'http://www.phpmyfaq.de/', 'http://bugs.phpmyfaq.de/' );
		entry( 'phpMyEdit', 'http://phpmyedit.org/', 'http://platon.sk/projects/main_page.php?project_id=5' );
		entry( 'Pointstone Software', 'http://www.pointstone.com/', 'http://bugs.pointstone.com/' );
		entry( 'Project JEDI', 'http://homepages.borland.com/jedi/', 'http://homepages.borland.com/jedi/issuetracker/' );
		entry( 'purepistos.net', 'http://www.purepistos.net/', 'http://purepistos.net/mantis/' );
	section_end();

	section( 'Q' );
		entry( 'QEM', 'http://www.qem.it/en/fr_en_home/pg_en_home.htm' );
		entry( 'QtParted', 'http://qtparted.sourceforge.net/', 'http://qtparted.sourceforge.net/bugs/' );
	section_end();

	section( 'R' );
		entry( 'RageIRCd', 'http://rageircd.sourceforge.net/', 'http://rageircd.sourceforge.net/mantis/' );
		entry( 'RealDecoy', 'http://www.realdecoy.com/' );
		entry( 'Redwood Custom Communications', 'http://www.redwoodcc.com/' );
		entry( 'redWall Firewall', 'http://www.redwall-firewall.com/', 'http://www.redwall-firewall.com/issue' );
		entry( 'Reebok Poland S.A.', 'http://www.reebok.pl/', 'http://mantis.reebok.pl/' );
		entry( 'Risse Design', 'http://risse.org/' );
		entry( 'Ritlabs', 'http://www.ritlabs.com/', 'http://www.ritlabs.com/bt/' );
		entry( 'rsbac', 'http://www.rsbac.org/', 'http://bugtracker.rsbac.org/' );
		entry( 'RS MediaGroup', 'http://www.rsmg.de/' );
	section_end();

	section( 'S' );
		entry( 'Saab', 'http://www.saab.se/' );
		entry( 'Scribus', 'http://www.scribus.net/', 'http://bugs.scribus.net/' );
		entry( 'SCS Software', 'http://www.scssoft.com' );
		entry( 'SCTV', 'http://sctv.ucsc.edu/', 'http://sctv.ucsc.edu/mantis/' );
		entry( 'SELEX SI - Gematronik Weather Radar Systems', 'http://www.gematronik.com/' );
		entry( 'seracom gmbh', 'http://seracom.org/' );
		entry( 'Shadow', 'https://sourceforge.net/projects/shadow/', 'http://www.open-shadow.org/mantis/' );
		entry( 'six apart', 'http://www.sixapart.com/', 'http://sixapart.com/mantis/' );
		entry( 'SkyGate International', 'http://www.skygate.dk/' );
		entry( 'SourceFubar.Net', 'http://www.sourcefubar.net/', 'http://bugs.sourcefubar.net/' );
		entry( 'Soficol', 'http://www.soficol.com/' );
		entry( 'Soft-Gems', 'http://www.soft-gems.net/', 'http://support.soft-gems.net/mantis/' );
		entry( 'Solo Group, Inc.', 'http://www.sologroup.com/' );
	section_end();

	section( 'T' );
		entry( 'TanuSoft', 'http://www.tanusoft.com/' );
		entry( 'Theratech', 'http://www.theratech.de/', 'http://www.support.theratech.de/' );
		entry( 'Thornsoft Development, Inc.', 'http://www.thornsoft.com/', 'http://www.thornsoft.com/mantis/' );
		entry( 'Timber Windows', 'http://www.timberwindows.com/' );
		entry( 'Truelite', 'http://www.truelite.it/', 'http://bugs.truelite.it/' );
		entry( 'Turkix', 'http://www.turkix.org/', 'http://bug.turkix.org/' );
		entry( 'Twig Project', 'http://informationgateway.org/', 'http://bugs.informationgateway.org/' );
	section_end();

	section( 'U' );
		entry( 'Uncommonplace', 'http://www.uncommonplace.com/', 'http://www.uncommonplace.com/bugs/' );
		entry( 'United Water International', 'http://www.uwi.com.au/' );
		entry( 'UnrealIRCd', 'http://www.unrealircd.org/', 'http://bugs.unrealircd.org/' );
		entry( 'USA Z&amp;P', 'http://usazyp.com.ve/' );
	section_end();

	section( 'V' );
		entry( 'Vantage Controls', 'http://www.vantagecontrols.com' );
		entry( 'Vicus eBusiness Solutions', 'http://www.vicus.nl/ticketmanagement' );
	section_end();

	section( 'W' );
		entry( 'Wash One', 'http://www.wash-one.com/' );
		entry( 'Water Corporation', 'http://www.watercorporation.com.au/' );
		entry( 'Web-CP', 'http://www.web-cp.net/', 'http://www.web-cp.net/mantis/' );
		entry( 'WebCommons :: Web Programming Services', 'http://www.webcommons.biz/' );
		entry( 'wiseGEEK', 'http://www.wisegeek.com/' );
		entry( 'WordPress', 'http://wordpress.org/', 'http://mosquito.wordpress.org/' );
	section_end();

	section( 'X' );
		entry( 'Xillion ICT Solutions BV', 'http://www.xillion.nl/' );
		entry( 'XSALTO', 'http://www.xsalto.com/' );
	section_end();

	section( 'Y' );
		entry( 'Yoper', 'http://www.yoper.com/', 'http://www.yoper.com/bugtracker/' );
	section_end();

	section( 'Z' );
		entry( 'Zoobox', 'http://www.zoobox.co.uk/' );
	section_end();

	echo '<p>', $g_entry_count, ' members in directory.</p>';
?>

<?php include( "adsense_vertical_inc.php" ); ?>

<?php include( "bot.php" ); ?>