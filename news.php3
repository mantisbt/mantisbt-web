<html>
<head>
<style>
body { background-color:#ffffff; font-family:Verdana, Arial; font-size=10pt }
td {  font-family:Verdana, Arial; font-size=10pt }
p {  font-family:Verdana, Arial; font-size=10pt }
</style>
<title>Mantis</title>
</head>
<body bgcolor=#ffffff>

<p>
<div align=center>
<h2>Mantis</h2>
</div>

<p>
<div align=center>

<table width=100%>
<tr valign=top>
	<? include("side_menu.php3") ?>
<td>
<? include( "mantis/config_inc.php" ) ?>
<?
	function db_connect($p_hostname="localhost", $p_username="root",
						$p_password="", $p_database="mantis",
						$p_port=3306 ) {

		$t_result = mysql_connect(  $p_hostname.":".$p_port,
									$p_username, $p_password );
		$t_result = mysql_select_db( $p_database );
	}
	### --------------------
	function string_display( $p_string ) {
		return htmlspecialchars(stripslashes( $p_string ));
	}
	### --------------------
	function string_display_with_br( $p_string ) {
		return str_replace( "&lt;br&gt;", "<br>", htmlspecialchars(stripslashes( $p_string )));
	}
	### --------------------
	function sql_to_unix_time( $p_timeString ) {
		return mktime( substr( $p_timeString, 8, 2 ),
					   substr( $p_timeString, 10, 2 ),
					   substr( $p_timeString, 12, 2 ),
					   substr( $p_timeString, 4, 2 ),
					   substr( $p_timeString, 6, 2 ),
					   substr( $p_timeString, 0, 4 ) );
	}
	### --------------------
?>
<?
	db_connect( $g_hostname, $g_db_username, $g_db_password, $g_database_name );

	if ( !isset( $f_offset ) ) {
		$f_offset = 0;
	}

	### get news count
	$query = "SELECT COUNT(id)
			FROM $g_mantis_news_table";
	$result = mysql_query( $query );
    $total_news_count = mysql_result( $result, 0 );

	$query = "SELECT *
			FROM $g_mantis_news_table
			ORDER BY id DESC
			LIMIT $f_offset, $g_news_view_limit";
	$result = mysql_query( $query );
    $news_count = mysql_num_rows( $result );

	for ($i=0;$i<$news_count;$i++) {
		$row = mysql_fetch_array($result);
		extract( $row, EXTR_PREFIX_ALL, "v" );
		$v_headline = string_display( $v_headline );
		$v_body = string_display_with_br( $v_body );
		$v_date_posted = date( "m-d H:i", sql_to_unix_time( $v_date_posted ) );

		## grab the username and email of the poster
	    $query = "SELECT username, email
	    		FROM $g_mantis_user_table
	    		WHERE id='$v_poster_id'";
	    $result2 = mysql_query( $query );
	    if ( $result2 ) {
	    	$row = mysql_fetch_array( $result2 );
			$t_poster_name	= $row["username"];
			$t_poster_email	= $row["email"];
		}
?>
<p>
<div align=center>
<table width=97% bgcolor=#dddddd>
<tr>
	<td bgcolor=#e8e8e8>
		<b><? echo $v_headline ?></b> -
		<i><? echo $v_date_posted ?></i> -
		<a href="mailto:<? echo $t_poster_email ?>"><? echo $t_poster_name ?></a>
	</td>
</tr>
<tr>
	<td bgcolor=#f8f8f8>
		<br>
		<blockquote>
			<? echo $v_body ?>
		</blockquote>
	</td>
</tr>
</table>
</div>
<?
	}
?>

<p>
<div align=center>
<?
	$f_offset_next = $f_offset + $g_news_view_limit;
	$f_offset_prev = $f_offset - $g_news_view_limit;

	if ( $f_offset_prev >= 0) {
		PRINT "[ <a href=\"$g_main_page?f_offset=$f_offset_prev\">newer_news</a> ]";
	}
	if ( $news_count==$g_news_view_limit ) {
		PRINT " [ <a href=\"$g_main_page?f_offset=$f_offset_next\">older_news</a> ]";
	}
?>
</td>
</tr>
</table>

</body>
</html>
