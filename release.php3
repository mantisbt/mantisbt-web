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
"There are database modifications in this release
<p>
The date_created/posted/submitted fileds have been switched from TIMESTAMP to DATETIME.  There are subtle modifications in the code to handle this change.  The last_modified/updated fields are left unchanged.
<p>
The access level system has been replaced by a system of integer values.  The contstants used are VIEWER, REPORTER, UPDATER, DEVELOPER, MANAGER, and ADMINISTRATOR.  These map to integer values 10,25,40,55,70,90.  The values were chosen so that further customization can be done on a installation by installation basis.
<p>
Along with the access levels all other ENUM fields in the database have been switched over to INT(2).  Similar spacing of values has taken place to allow for installation customizations.
<p>"); ?>

	<!-- GLOBALS ------------------- -->
	<table width=100%>
	<? print_table("Globals","#ddddff") ?>

	<? print_item("delete","g_garbage","","This is no longer used.  It has been deprecated by g_trash") ?>
	<? print_item("add","","g_new_val","Added new variable") ?>
	<? print_item("rename","g_var1","g_variable","New naming scheme") ?>
	</table>

	<!-- FUNCTIONS ----------------- -->
	<table width=100%>
	<? print_table("Functions","#ddddff") ?>

	<? print_item("add","news_add",			"","News API") ?>
	<? print_item("add","news_delete",		"","News API") ?>
	<? print_item("add","news_update",		"","News API") ?>
	<? print_item("add","news_select",		"","News API") ?>
	<? print_item("add","get_news_count",	"","News API") ?>
	<? print_item("add","get_user_info_by_id_arr","","User API") ?>
	<? print_item("add","get_user_info_by_name_arr","","User API") ?>
	<? print_item("add","increment_login_count","","User API") ?>
	<? print_item("add","trans_bool",		"","Helper API") ?>
	<? print_item("add","check_access",		"","User API") ?>
	<? print_item("add","print_enum_string_option_list",		"","Print API") ?>
	<? print_item("remove","","print_table_field_option_list",	"Print API") ?>
	<? print_item("add","str_pd",			"","Helper API") ?>
	<? print_item("add","print_view_bug_sort_link",			"","Print API") ?>
	<? print_item("add","print_manage_user_sort_link",		"","Print API") ?>
	<? print_item("add","print_manage_project_sort_link",	"","Print API") ?>
	<? print_item("add","print_status_icon",	"","Icon API") ?>
	<? print_item("add","print_sort_icon",		"","Icon API") ?>
	<? print_item("add","print_unread_icon",	"","Icon API") ?>
	</table>

	<!-- FILES --------------------- -->
	<p>
	<table width=100%>
	<? print_table("Files","#ffdddd") ?>

	<? print_item("rename","manage_project_add.php3",				"manage_proj_add.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_category_add.php3",		"manage_proj_cat_add.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_category_delete.php3",	"manage_proj_cat_delete.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_category_delete_page.php3","manage_proj_cat_delete_page.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_category_edit_page.php3","manage_proj_cat_edit_page.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_category_update.php3",	"manage_proj_cat_update.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_delete.php3",			"manage_proj_delete.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_delete_page.php3",		"manage_proj_delete_page.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_edit_page.php3",			"manage_proj_edit_page.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_menu_page.php3",			"manage_proj_menu_page.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_update.php3",			"manage_proj_update.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_version_add.php3",		"manage_proj_ver_add.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_version_delete.php3",	"manage_proj_ver_delete.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_version_delete_page.php3","manage_proj_ver_delete_page.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_version_edit_page.php3",	"manage_proj_ver_edit_page.php3","Renamed for MacOS") ?>
	<? print_item("rename","manage_project_version_update.php3",	"manage_proj_ver_update.php3","Renamed for MacOS") ?>
	<? print_item("rename","account_profile_add.php3",				"account_prof_add.php3","Renamed for MacOS") ?>
	<? print_item("rename","account_profile_delete.php3",			"account_prof_delete.php3","Renamed for MacOS") ?>
	<? print_item("rename","account_profile_edit_page.php3",		"account_prof_edit_page.php3","Renamed for MacOS") ?>
	<? print_item("rename","account_profile_make_default.php3",		"account_prof_make_default.php3","Renamed for MacOS") ?>
	<? print_item("rename","account_profile_manage_page.php3",		"account_prof_manage_page.php3","Renamed for MacOS") ?>
	<? print_item("rename","account_profile_update.php3",			"account_prof_update.php3","Renamed for MacOS") ?>
	<? print_item("rename","old","new","Renamed for MacOS") ?>
	<? print_item("add","","new_page_me.php","") ?>
	<? print_item("add","","core_icon_API.php","Icon module") ?>
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

</body>
</html>