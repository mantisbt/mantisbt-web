<?php
	require_once ( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'user_directory_config.php' ); 
	include_once ( CLASS_MANTIS_UD );

	$t_sub_title = 'Users Directory';

	include( "top.php" );
?>

<span class="page_title">Mantis Users Directory</span>
<hr size="1" noshade="noshade" width="100%" />

<p>This is a directory of companies and open source projects that are using Mantis as their issue tracking system.  If your company is not listed below, or you know of an open source project that uses Mantis but is not listed below, please <a href="directory_entry_submit.php">submit</a> it here.</p>

<p>When possible consider adding a link back to Mantis website.  You can use the button on the left side of the page, but please download it and reference it from your site to reduce the load on the Mantis web server.</p> 	

<?php
	$mantis_ud = new mantis_user_directory_entry(); 
	$mantis_ud = $mantis_ud->Getmantis_user_directory_entryDisplayList( 'company_name' );

	function get_index_char( $p_company_name ) {
		$t_letter = strtoupper( $p_company_name[0] );

		if ( ( $t_letter >= '0' ) && ( $t_letter <= '9' ) ) {
			return '0-9';
		}

		if ( ( $t_letter >= 'A' ) && ( $t_letter <= 'Z' ) ) {
			return $t_letter;
		}

		return '*';
	}
	
	$t_data = '';
	$entry_count = count( $mantis_ud );
	for ( $i = 0; $i < $entry_count; ) {
		$t_letter = get_index_char( $mantis_ud[$i]->company_name );
	
		echo "<p><a name=\"$t_letter\" id=\"$t_letter\" /><span class=\"section\">- $t_letter -</span></p>\n";
		echo "<ul>\n";
	
		while ( $i < $entry_count && $t_letter == get_index_char( $mantis_ud[$i]->company_name ) ) {
			$t_website_url = htmlspecialchars( $mantis_ud[$i]->website_url );
			$t_company_name = htmlspecialchars( $mantis_ud[$i]->company_name );

			if ( $mantis_ud[$i]->high_profile ) {
				$t_company_name = '<b>'. $t_company_name . '</b>';
			}

			$t_data =  "<li><a href=\"$t_website_url\" target=\"_blank\"  rel=\"nofollow\">$t_company_name</a>";

			if ( $mantis_ud[$i]->mantis_url != '' ) {
				$t_mantis_url = htmlspecialchars( $mantis_ud[$i]->mantis_url );
				$t_data .= " (<a href=\"$t_mantis_url\" target=\"_blank\"  rel=\"nofollow\">public</a>)";
			}

			$t_data .= "</li>\n"; 
					
			echo $t_data;
			$i++;	
		}
	
		echo "</ul>\n\n"; 
	}
			
	echo '<p>', $entry_count, ' members in directory.</p>'; 

	include( 'adsense_vertical_inc.php' ); 

	$t_footer_sponsored_links = '
		<a href="http://www.furniture-spain.co.uk" title="Furniture Spain" target="_blank">Furniture Spain</a>
	';

	include( "bot.php" ); 
?>