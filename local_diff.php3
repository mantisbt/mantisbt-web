<?
	$p_var = 0;

	function get_variable( $p_string ) {
		global $p_var;

		$p_string = trim( $p_string );
		if (( strpos( " ".$p_string, "#" ) < 1 )&&( strpos( " ".$p_string, "$" ) > 0 )) {
			$arr = explode( " ", $p_string );
			$p_var = 1;
			return $arr[0];
		} else {
			$p_var = 0;
			return $p_string;
		}
	}

	function get_value( $p_string ) {
		$p_string = trim( $p_string );
		return substr( $p_string, strpos( $p_string, "=" )+1, strlen( $p_string )-1 );
	}

	function var_exists( $p_string ) {
		return "0";
	}

	function process_file( $p_lang ) {
		global $p_var;

		$path = "./../";

		$english = file( $path."strings_english.txt" );
		$english_count = count( $english );
		$lang = file( $path."strings_".$p_lang.".txt" );
		$lang_count = count( $lang );

		$eng_section_arr = array();
		$lang_section_arr = array();

		### print beginning top page stuff
		for ($i=0;$i<9;$i++) {
			echo htmlspecialchars( $lang[$i] )."<br>";
		}

		### parse variables, look for missing
		$lang_counter = 9;
		$t_not_found = 0;
		for ($i=9;$i<$english_count;$i++) {
			$p_string = get_variable( $english[$i] );
			if ( $p_var == 1 ) {
				$p_var = 0;

				$t_prev_counter = $lang_counter;
				while ( $p_string != get_variable( $lang[$lang_counter] )) {
					$lang_counter++;

					if ( $lang_counter >= $lang_count ) {
						$t_not_found = 1;
						break;
					}
				}

				if ( $t_not_found==1 ) {
					#echo $p_var_string."<br>";
					echo "<font color=#0000ee><b>$english[$i]</b></font><br>";
					$t_not_found = 0;
					$lang_counter = $t_prev_counter;
					continue;
				}

				if ( $english[$i]==$lang[$lang_counter] ) {
					echo "<font color=#ee000><b>".$p_string." = ".get_value( $english[$i] )."</b></font><br>";
					continue;
				}

				if ( $p_var_string != "0" ) {
					#echo $p_var_string."<br>";
					echo $lang[$lang_counter]."<br>";
				} else {
					echo "<font color=#ee000><b>".$p_string." = ".get_value( $english[$i] )."</b></font><br>";
				}
			} else {
				echo htmlspecialchars( $english[$i] )."<br>";
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
		<table cellspacing=1 border=0 bgcolor=#888888>
		<tr bgcolor=#8888ff>
			<td colspan=2>
				<b>english</b>
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