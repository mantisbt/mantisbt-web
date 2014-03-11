<?php

function print_error( $p_msg ) {
	echo '  <div class="alert alert-error">' . "\n";
	echo '    <button type="button" class="close" data-dismiss="alert">×</button>';
	echo '    <h2>Error</h2>';
	echo "    <p>$p_msg</p>\n";
	echo "  </div>\n\n";
	echo "  <br>\n";
}
