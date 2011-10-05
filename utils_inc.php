<?php
	# ------------------
	# Strip slashes if necessary (supports arrays)
	function gpc_strip_slashes( $p_var ) {
		if ( 0 == get_magic_quotes_gpc() ) {
			return $p_var;
		} else if ( !is_array( $p_var ) ){
			return stripslashes( $p_var );
		} else {
			foreach ( $p_var as $key => $value ) {
				$p_var[$key] = gpc_strip_slashes( $value );
			}
			return $p_var;
		}
	}
	
	# ------------------
	# Prints the right hand vertical banner
	function ads_print_right_vertical_banner() {
		@include( 'sponsors/ads_right_vertifical_banner_inc.php' );
	}

	# ------------------
	# Print the footer text ads
	function ads_print_footer_text() {
		@include( 'sponsors/ads_footer_inc.php' );
	}