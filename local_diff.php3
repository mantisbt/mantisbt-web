<?
	function find_var( $p_lang_arr, $p_lang_count, $p_eng_var ) {
		for ($i=0;$i<$p_lang_count;$i++) {
			#echo "============".$p_lang_arr[$i]." ==== $i - $p_eng_var<br>";
			if ( get_variable( $p_lang_arr[$i] ) == $p_eng_var ) {
				#echo $i." aaaa ".$p_lang_arr[$i]." AAAAAAA $p_eng_var ZZZZZZZ<BR>";
				return $i;
			}
		}

		return -1;
	}

	### Get VALUE
	function get_value( $p_string ) {
		$p_string = trim( $p_string );
		return substr( $p_string, strpos( $p_string, "=" )+1, strlen( $p_string )-1 );
	}

	### Get VARIABLE
	function get_variable( $p_string ) {
		if ( strpos( " ".$p_string, "#" ) > 0 ) {
			$p_string = trim( $p_string );

			$arr = explode( " ", $p_string );
			return $arr[0].$arr[1];
		} else {
			$p_string = trim( $p_string );

			$arr = explode( " ", $p_string );
			return $arr[0];
		}
	}

	### returns if is VARIABLE
	function is_var( $p_string ) {
		$p_string = " ".$p_string;

		### The # character means not a variable
		if ( strpos( $p_string, "#" ) > 0 ) {
			return false;
		} else if ( strpos( $p_string, "$" ) > 0 ) {
			return true;
		}
	}

	### returns if is COMMENT
	function is_comment( $p_string ) {
		$p_string = " ".$p_string;

		### The # character means not a variable
		if ( strpos( $p_string, "#" ) > 0 ) {
			return true;
		} else {
			return false;
		}
	}

	function print_blue( $p_string ) {
		echo "<font color=#0000ff><b>".htmlspecialchars( $p_string )."</b></font><br>";
	}

	function print_green( $p_string ) {
		echo "<font color=#00ff00><b>".htmlspecialchars( $p_string )."</b></font><br>";
	}

	function print_red( $p_string ) {
		echo "<font color=#ff0000><b>".htmlspecialchars( $p_string )."</b></font><br>";
	}

	function print_line( $p_string ) {
		echo htmlspecialchars( $p_string )."<br>";
	}

	function print_italics( $p_string ) {
		echo "<i>".htmlspecialchars( $p_string )."</i><br>";
	}

	function process_file( $p_lang ) {
		global $p_var;

		$path = "./../";

		$english = file( $path."strings_english.txt" );
		$english_count = count( $english );
		$lang = file( $path."strings_".$p_lang.".txt" );
		$lang_count = count( $lang );

		### print beginning top page stuff
		$lang_counter = 0;
		while ( trim( $lang[$lang_counter] ) != "# General Strings" ) {
			echo htmlspecialchars( $lang[$lang_counter++] )."<br>";
		}

		### bring $english in sync with $lang
		$eng_counter = 0;
		while ( trim( $english[$eng_counter] ) != "# General Strings" ) {
			$eng_counter++;
		}

		#echo "333 - $lang[$lang_counter] <br>";
		#echo "444 - $lang[$eng_counter] <br>";

		### parse variables, look for missing
		$t_not_found = 0;
		while ( $eng_counter < $english_count ) {
			$eng_counter++;
			$lang_counter++;

			$lang_str = $lang[$lang_counter];
			$eng_str = $english[$eng_counter];
			$lang_str_trim = trim( $lang_str );
			$eng_str_trim = trim( $eng_str );
			$lang_var = get_variable( $lang_str );
			$eng_var = get_variable( $eng_str );
			### if the strings are Variables then print in color
			if ((is_var( $lang_str ) && is_var( $eng_str )) &&
				($lang_var == $eng_var)) {
				### print in RED if same string
				if ( $lang_str_trim == $eng_str_trim ) {
					print_red( $eng_str );
				} else {
					print_line( $lang_str );
				}
			} else if (( $lang_str_trim == "" ) && ( $eng_str_trim == "" )) {
				print_line( "" );
			} else if (is_comment( $lang_str ) &&
						is_comment( $eng_str ) &&
						( $lang_str_trim == $eng_str_trim ) ) {
				print_italics( $lang_str );
			} else if ( $lang_str_trim == "?>" ) {
				print_line( $lang_str );
			} else {
				$s_var = $eng_var;
				#echo "ZOP ZOP ZOP : $s_var<br>";
				$location = find_var( $lang, $lang_count, $s_var );
				if ( $location > -1 ) {
					#echo "AAA - $location : $lang[$location] : $lang_counter : ";
					$lang_counter = $location;
				}

				### missing or out of order
				if ( is_var( $eng_str ) ) {
					#echo $s_var."000000000000";
					if ( $location > -1 ) {
						#echo "AAA - $location : $lang[$location] : $lang_counter : ";
						print_blue( $lang[$location] );  # out of order
						#$lang_counter = $location;
					} else {
						#echo "QQQ $lang_counter";
						print_green( $eng_str ); # missing line
					}
				} else if (is_comment( $eng_str )) {
					#echo "ITALICS ";
					print_italics( $eng_str );
				} else {
					#echo "PLAIN ";
					print_line( $eng_str );
				}
			}
		}
	}
?>
<html>
<head>
<style>
body { background-color:#ffffff; font-family:Verdana, Arial; font-size=10pt }
td {  font-family:Verdana, Arial; font-size=10pt }
p {  font-family:Verdana, Arial; font-size=10pt }
</style>
<title>Mantis</title>
</head>
<body>

<p>
<div align=center>
	<h2>Mantis</h2>
	Last modified: <? echo date( "M d, Y - H:m", getlastmod() )?>
</div>

<p>
<div align=center>

<table width=100%>
<tr valign=top>
	<? include("side_menu.php3") ?>
	<td>
		<b><font size=+1><a name=page_top>Localization Diff - <? echo $f_lang ?></a></font></b>
		<p>
		<a href="localization.php3">Back to Localization</a>
		<p>
		Items in <font color=#ff0000>RED</font> are not translated (or are the same as in english)<br>
		Items in <font color=#0000ff>BLUE</font> are out of order.<br>
		Items in <font color=#00ff00>GREEN</font> are missing.<br>
		<p>
		<table cellspacing=1 border=0 bgcolor=#888888>
		<tr bgcolor=#8888ff>
			<td colspan=2>
				<b><? echo $f_lang ?></b>
			</td>
		</tr>
		<tr bgcolor=#eeeeee>
			<td align=left colspan=2>
			<? process_file( $f_lang ) ?>
			</td>
		</tr>
		</table>
	</td>
</tr>
</table>

</body>
</html>