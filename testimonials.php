<?php
	require_once ( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'user_directory_config.php' ); 
	include_once ( CLASS_MANTIS_UD );

	$t_sub_title = 'Testimonials';

	include( "top.php" );

	function db_connect($p_hostname="localhost", $p_username="root",
						$p_password="", $p_database="mantis",
						$p_port=3306 ) {

		$t_result = mysql_connect(  $p_hostname.":".$p_port,
									$p_username, $p_password );
		$t_result = mysql_select_db( $p_database );
	}

	function string_display( $p_string ) {
		$p_string = string_insert_hrefs( $p_string );
		$p_string = stripslashes( $p_string );
		$p_string = nl2br( $p_string );
		return $p_string;
	}

	# --------------------
	# Detect URLs and email addresses in the string and replace them with href anchors
	function string_insert_hrefs( $p_string ) {
		$t_change_quotes = false;

		# Find any URL in a string and replace it by a clickable link
		$p_string = preg_replace( '/(([[:alpha:]][-+.[:alnum:]]*):\/\/(%[[:digit:]A-Fa-f]{2}|[-_.!~*\';\/?%^\\\\:@&={\|}+$#\(\),\[\][:alnum:]])+)/se',
                                                                 "'<a href=\"'.rtrim('\\1','.').'\">\\1</a> [<a href=\"'.rtrim('\\1','.').'\" target=\"blank\">^</a>]'",
                                                                 $p_string);
		if( $t_change_quotes ) {
			ini_set( 'magic_quotes_sybase', true );
		}

		# Set up a simple subset of RFC 822 email address parsing
		#  We don't allow domain literals or quoted strings
		#  We also don't allow the & character in domains even though the RFC
		#  appears to do so.  This was to prevent &gt; etc from being included.
		#  Note: we could use email_get_rfc822_regex() but it doesn't work well
		#  when applied to data that has already had entities inserted.
		#
		# bpfennig: '@' doesn't accepted anymore
		$t_atom = '[^\'@\'](?:[^()<>@,;:\\\".\[\]\000-\037\177 &]+)';

		# In order to avoid selecting URLs containing @ characters as email
		#  addresses we limit our selection to addresses that are preceded by:
		#  * the beginning of the string
		#  * a &lt; entity (allowing '<foo@bar.baz>')
		#  * whitespace
		#  * a : (allowing 'send email to:foo@bar.baz')
		#  * a \n, \r, or > (because newlines have been replaced with <br />
		#    and > isn't valid in URLs anyway
		#
		# At the end of the string we allow the opposite:
		#  * the end of the string
		#  * a &gt; entity
		#  * whitespace
		#  * a , character (allowing 'email foo@bar.baz, or ...')
		#  * a \n, \r, or <

		$p_string = preg_replace( '/(?<=^|&quot;|&lt;|[\s\:\>\n\r])('.$t_atom.'(?:\.'.$t_atom.')*\@'.$t_atom.'(?:\.'.$t_atom.')*)(?=$|&quot;|&gt;|[\s\,\<\n\r])/s',
								'<a href="mailto:\1" target="_new">\1</a>',
								$p_string);

		return $p_string;
	}

	db_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );

	$query = 'SELECT * FROM `mantis_user_directory_entry` 
           WHERE testimonial > 0 
           ORDER BY testimonial DESC, date_submitted ASC';

	$t_result = mysql_query( $query );
	
	if ( $t_result === false ) {
		echo mysql_error();
		exit;
	}

    ?>    
	<div align="left">
                <?php
                while ( ( $t_row = mysql_fetch_array( $t_result ) ) !== false ) {
                    echo "<p class=\"testimonial\">" . 
                        string_display( $t_row['comments'] ) . "<span class=\"author\">" .
                        string_display( $t_row['contact_name'] ) . " - " .
                        string_display( $t_row['company_name'] ) . "</span></p>";
                }
                ?>
    </div>
    <?php

	$t_footer_sponsored_links = '';

	include( "bot.php" ); 
?>
