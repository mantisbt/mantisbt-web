<?
	# switch between colors for banding
	function alternate_colors( $p_num, $p_color1, $p_color2 ) {
		if ( $p_num % 2 == 1) {
			return $p_color1;
		} else {
			return $p_color2;
		}
	}

	# helper funtion for API link priniting
	function print_begin( $p_color ) {
		PRINT "<tr bgcolor=$p_color><td width=25%>";
	}

	# helper funtion for API link priniting
	function print_end() {
		PRINT "</i></td></tr>";
	}

	# create the API links
	function process_file( $p_file ) {
		$path = "mantis/";

		$buf = file( $path.$p_file );
		$num = count( $buf );
		$paren = 0;
		$entry = 0;
		for ($i=0;$i<$num;$i++) {
			if ( strpos( $buf[$i], "#" ) > 0 ) { continue; }

			if ( strpos( $buf[$i], "function" ) > 0 ) {
				$entry++;
				$paren = 1;
				$t_color = alternate_colors( $entry, "#ccccff", "#ccccff" );
				print_begin( $t_color );

				$buf[$i] = str_replace( "function", "", $buf[$i] );
				$buf[$i] = str_replace( "{", "", $buf[$i] );
				$buf[$i] = htmlspecialchars( $buf[$i] );

				$paren_pos = strpos( $buf[$i], "(" );
				$func_str = trim( substr( $buf[$i], 0, $paren_pos ) );
				$param_str = substr( $buf[$i], $paren_pos, strlen( $buf[$i] ) );
				PRINT "&nbsp;<b><a href=\"#$func_str\">$func_str</a></b>&nbsp;";
				echo "</td><td bgcolor=#eeeeff><i> ";

				$param_str = str_replace( "(", "", $param_str );
				$param_str = str_replace( ")", "", $param_str );

				echo $param_str;

				if ( strpos( $buf[$i], ")" ) > 0 ) {
					print_end();
					$paren = 0;
				}
			} else if ( $paren == 1 ) {
				$param_str = $buf[$i];

				$param_str = htmlspecialchars( $param_str );

				if ( strpos( $param_str, ")" ) > 0 ) {
					$param_str = str_replace( ")", "", $param_str );
					$param_str = str_replace( "{", "", $param_str );
					echo $param_str;
					print_end();
					$paren = 0;
				} else {
					$param_str = str_replace( ")", "", $param_str );
					$param_str = str_replace( "{", "", $param_str );
					echo $param_str;
				}
			}
		} ### end for loop
	}

	# return the number of matches
	function char_count( $p_string, $p_char ) {
		$count = 0;
		$len = strlen( $p_string );
		for ($i=0;$i<$len;$i++) {
			if ( $p_string[$i]==$p_char ) {
				$count ++;
			}
		}
		return $count;
	}

	function print_comment( $p_file_name ) {
		echo "<tr bgcolor=#ffffff><td>";
		echo "<font face=\"courier new\">";
		show_source( $p_file_name );
		unlink( $p_file_name );
		echo "</font>";
		PRINT "<center><a href=\"#page_top\">Back to Top</a></center>";
		echo "</td></tr>";
	}

	function print_code( $p_file_name, $p_block_num, $p_name ) {
		$t_color = alternate_colors( $p_block_num, "#eef4ff", "#d8e0ff" );
		echo "<tr bgcolor=$t_color><td>";
		PRINT "<a name=\"$p_name\"></a>";
		echo "<font face=\"courier new\">";
		show_source( $p_file_name );
		unlink( $p_file_name );
		echo "</font>";
		echo "</td></tr>";
	}

	function process_function_file( $p_file ) {
		$path = "mantis/";

		### error
		if (!( strpos( $p_file, "ore_" ) > 0 )) {
			return;
		}

		$buf = file( $path.$p_file );
		$num = count( $buf );

		$comment_name = tempnam( "/tmp", "m" );
		$fp_comment = fopen( $comment_name, "w" );

		$mode = 1;
		$action = 0;

		$start_func = 0;
		$func_count = 0;
		$paren_close = 0;
		$func_num = 0;
		$func_name = "page_top";
		$skip = 0;
		for ($i=0;$i<$num;$i++) {
			$str = $buf[$i];

			$pos = strpos( $str, "function" );
			if (( $pos > 0 )&&(  $pos < 2  )) {
				$action = 1; # close comment # open code

				$func_name = substr( $str, strpos( $str, "function" )+9, strpos( $str, "(" )-10 );
			}

			if ( $start_func == 1 ) {
				if ( strpos( $str, "{" ) ) {

					$func_count += char_count( $str, "{" );
					$paren_close = 1;
				}

				if ( strpos( $str, "}" ) ) {
					$func_count -= char_count( $str, "}" );
				}

				if (( $func_count==0 )&&( $paren_close==1 )) {
					$action = 2;
					$paren_close = 0;
				}
			}

			switch ( $action ) {
				case 0:	# nothing
						break;
				case 1:	# close comment # open code
						fwrite( $fp_comment, "?>\n" );
						fclose( $fp_comment );
						print_comment( $comment_name );
				# @@@ Delete temp file?
						$code_name = tempnam( "/tmp", "m" );
						$fp_code = fopen( $code_name, "w" );
						fwrite( $fp_code, "<?\n" );
						$mode = 0;
						$start_func = 1;
						$paren_close = 0;
						if ( strpos( $str, "{" ) ) {
							$func_count = char_count( $str, "{" );
							$paren_close = 1;
						}
						$action = 0;
						$func_num++;
						continue;
						break;
				case 2: # close code # open comment
						fwrite( $fp_code, $str );
						fwrite( $fp_code, "?>" );
						fclose( $fp_code );
						print_code( $code_name, $func_num, $func_name );
				# @@@ Delete temp file?
						$comment_name = tempnam( "/tmp", "m" );
						$fp_comment = fopen( $comment_name, "w" );
						fwrite( $fp_comment, "<?\n" );
						$mode = 1;
						$action = 0;
						$skip = 1;
						continue;
						break;
			}

				switch ( $mode ) {
					case 0:	# CODE
							fwrite( $fp_code, $str );
							break;
					case 1:	# COMMENT
							if ( $skip == 0 ) {
								fwrite( $fp_comment, $str );
							} else {
								$skip = 0;
							}
							break;
				}
		} ### end for

		fclose( $fp_comment );
		print_comment( $comment_name );

		# @@@ Delete temp file?# @@@ Delete temp file?
	}
?>
<? include( "top.php" ); ?>

<span class="page_title">View API</span>
<hr size=1 noshade width="100%">
<p>

<table width=100%>
<tr valign=top>
	<td width=100%>
		<b><font size=+1><a name=page_top>API - <? echo $f_file ?></a></font></b>
		<p>
		<a href="api.php">Back to API</a>
		<p>
		<table cellspacing=1 border=0 bgcolor=#888888>
		<tr bgcolor=#8888ff>
			<td>
				<b>function</b>
			</td>
			<td>
				<b>parameters</b>
			</td>
		</tr>
			<? process_file( $f_file ) ?>
		<tr bgcolor=#aaaaaa>
			<td colspan=2 align=left>
			<table cellspacing=1 border=0 width=100%>
			<? process_function_file( $f_file ) ?>
			</table>
			</td>
		</tr>
		</table>
	</td>
</tr>
</table>

<? include( "bot.php" ); ?>