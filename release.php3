<?
	function print_item($type,$old,$new,$notes) {
		PRINT "<tr>";
			PRINT "<td>";
				echo $type;
			PRINT "</td>";
			PRINT "<td>";
				echo $old;
			PRINT "</td>";
			PRINT "<td>";
				echo $new;
			PRINT "</td>";
			PRINT "<td>";
				echo $notes;
			PRINT "</td>";
		PRINT "</tr>";
	}

	function print_table($title,$color) {
		PRINT "<tr align=center bgcolor=$color>";
			PRINT "<td colspan=4>";
				PRINT "<b>$title</b>";
			PRINT "</td>";
		PRINT "</tr>";
		PRINT "<tr bgcolor=#eeeeee>";
			PRINT "<td width=10%>Action</td>";
			PRINT "<td width=20%>Old Value</td>";
			PRINT "<td width=20%>New Value</td>";
			PRINT "<td width=50%>Notes</td>";
		PRINT "</tr>";
	}

	function print_release($version,$date,$message) {
		PRINT "<table width=100% bgcolor=#aaaaaa cellspacing=1 border=0>";
		PRINT "<tr bgcolor=#bbddff>";
			PRINT "<td>";
			PRINT "<b>$version</b> - $date";
			PRINT "</td>";
		PRINT "</tr>";
		PRINT "<tr bgcolor=#ffffff>";
			PRINT "<td>";
			PRINT "<p>";
			PRINT "$message";
			PRINT "<p>";
	}

	function print_modified($list) {
		$list_arr = explode(" ",$list);
		$file_count = count( $list_arr );
			###<!-- MODIFIED FILES ------------------- -->
			PRINT "<p>";
			PRINT "<b>Modified Files</b>";
			PRINT "<ul>";
				for ($i=0;$i<$file_count;$i++) {
					if (!empty($list_arr[$i])) {
						PRINT "<li>$list_arr[$i]";
					}
				}
			PRINT "</ul>";
			PRINT "</td>";
		PRINT "</tr>";
		PRINT "</table>";
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
<p>
<b><font size=+1>Release Notes</font></b>

<p>
This is a preliminary draft of the release notes.
<p>

<!-- BEGIN 0.15.0 --------------------------------------------- -->
	<? print_release("0.1.0","July 3, 1977",
					"This release really doesn't do much"); ?>

	<!-- GLOBALS ------------------- -->
	<table width=100%>
	<? print_table("Globals","#ddddff") ?>

	<? print_item("delete","g_garbage","","This is no longer used.  It has been deprecated by g_trash") ?>
	<? print_item("add","","g_new_val","Added new variable") ?>
	<? print_item("rename","g_var1","g_variable","New naming scheme") ?>
	</table>

	<!-- FILES ------------------- -->
	<p>
	<table width=100%>
	<? print_table("Files","#ffdddd") ?>
manage_proj_add.php3
manage_proj_cat_add.php3
manage_proj_cat_delete.php3
manage_proj_cat_delete_page.php3
manage_proj_cat_edit_page.php3
manage_proj_cat_update.php3
manage_proj_delete.php3
manage_proj_delete_page.php3
manage_proj_edit_page.php3
manage_proj_menu_page.php3
manage_proj_update.php3
manage_proj_ver_add.php3
manage_proj_ver_delete.php3
manage_proj_ver_delete_page.php3
manage_proj_ver_edit_page.php3
manage_proj_ver_update.php3
manage_project_category_add.php3
	<? print_item("rename","manage_project_add.php3","manage_proj_add.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_cat_add.php3","manage_proj_cat_add.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_cat_delete.php3","manage_proj_cat_delete.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_cat_delete_page.php3","manage_proj_cat_delete_page.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_cat_edit_page.php3","manage_proj_cat_edit_page.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_cat_update.php3","manage_proj_cat_update.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_delete.php3","manage_proj_delete.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_delete_page.php3","manage_proj_delete_page.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_edit_page.php3","manage_proj_edit_page.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_menu_page.php3","manage_proj_menu_page.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_update.php3","manage_proj_update.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_ver_add.php3","manage_proj_ver_add.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_ver_delete.php3","manage_proj_ver_delete.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_ver_delete_page.php3","manage_proj_ver_delete_page.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_ver_edit_page.php3","manage_proj_ver_edit_page.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_ver_update.php3","manage_proj_ver_update.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_category_add.php3","manage_project_category_add.php3","Renamed for MacOS") ?>
	<? print_item("rename","old","new","Renamed for MacOS") ?>
	<? print_item("rename","old","new","Renamed for MacOS") ?>
	<? print_item("rename","old","new","Renamed for MacOS") ?>
	<? print_item("rename","old","new","Renamed for MacOS") ?>
	<? print_item("rename","old","new","Renamed for MacOS") ?>
	<? print_item("rename","old","new","Renamed for MacOS") ?>
	<? print_item("rename","old","new","Renamed for MacOS") ?>
	<? print_item("rename","old","new","Renamed for MacOS") ?>
	<? print_item("rename","old","new","Renamed for MacOS") ?>
	<? print_item("rename","old","new","Renamed for MacOS") ?>
	<? print_item("rename","old","new","Renamed for MacOS") ?>
	<? print_item("rename","old","new","Renamed for MacOS") ?>
	<? print_item("rename","old","new","Renamed for MacOS") ?>
	<? print_item("add","","new_page_me.php","") ?>
	<? print_item("rename","ok.php","better.php","") ?>
	</table>
	<p>

	<!-- MODIFIED FILES ------------------- -->
	<? print_modified("config_inc.php core_API.php") ?>
	<hr>
<!-- END 0.15.0 --------------------------------------------- -->

</td>
</tr>
</table>

<p>
<div align=right>
<A href="http://sourceforge.net"> <IMG src="http://sourceforge.net/sflogo.php?group_id=14963" width="88" height="31" border="0" alt="SourceForge Logo"></A>
</div>

</body>
</html>