<?php
	$t_sub_title = 'MantisTouch for Mantis Bugtracker';
	include( "top.php" );
?>

<h4>MantisTouch</h4>

<p>
<a href="http://mantisbt.mobi/">MantisTouch is a web app</a> that provides a mobile optimized MantisBT user interface for iPhone, Android and Windows Phones devices.
MantisTouch internally uses web services to access the underlying MantisBT v1.2.x instances, hence, providing the mobile friendly interface without requiring any changes for the accessed MantisBT instance.
</p>

<h4>Private Instance</h4>
<p>MantisTouch is now available to be installed on your owner servers for improved security and performance.  <b>For a limited time MantisTouch is available for US$100 (regular price US$150)</b>.  This license allows access to one bug tracker instance by any number of users and updates to future v1.x releases.  Once a license is purchased, you will receive a download link in the confirmation email.  For installation instructions checkout the README file.</p>

<?php @include( 'data/mantistouch_buy_button.php' ) ?>

<h4>Features</h4>
<ul>
  <li>UI optimized for mobile touch enabled devices.</li>
  <li>HTTPS support.</li>
  <li>Go to an issue by id.</li>
  <li>Apply saved filters.</li>
  <li>Report, Edit and View issues.</li>
  <li>Add, Edit and Delete notes.</li>
  <li>Download attachments.</li>
</ul>

<h4>Demo</h4>
<p>
Access your MantisBT v1.2.5 (or later) instance via the MantisTouch at <a href="http://mantisbt.mobi/" title="Mantis Bug Tracker for Mobile Phones">http://mantisbt.mobi/</a>.
Users must provide user name, password and MantisBT url to be able to use MantisTouch.
</p>

<h4>Setting up a MantisTouch app icon on iPhone</h4>
<ul>
	<li>Go to Settings, Safari, and set "Accept Cookies" to "Always".</li>
	<li>Open Safari and browse to http://mantisbt.mobi</li>
	<li>Click the "share" arrow button and click "Add to Home Screen", then confirm "MantisTouch" name.</li>
	<li>Close Safari and run MantisTouch from the home page icon.</li>
</ul>

<h4>Feedback</h4>
<p>
	Please report MantisTouch issues under the MantisTouch project in the <a href="http://www.mantisbt.org/bugs/">MantisBT official bug tracker</a>.
</p>

<h4>Screenshots</h4>
    <table border="0" cellspacing="10" cellpadding="5" width="100%">
    <tr>
      <td align="center" valign="top" style="text-align:center;"><img alt="Login Page" src="images/mt_login_page.png" height="300" width="200" border="1" /></td>
      <td align="center" valign="top"><img alt="Dashboard Page" src="images/mt_dashboard_page.png" height="300" width="200" border="1" /></td>  
      <td align="center" valign="top"><img alt="Issues Page" src="images/mt_issues_page.png" height="300" width="200" border="1" /></td>
    </tr>
    <tr>
      <td align="center" valign="top"><img alt="Issue Details Page" src="images/mt_issue_detail_page.png" height="300" width="200" border="1" /></td>
      <td align="center" valign="top"><img alt="Issue Details Page 2" src="images/mt_issue_detail_page2.png" height="300" width="200" border="1" /></td>
      <td align="center" valign="top"><img alt="Issue Details Page 3" src="images/mt_issue_detail_page3.png" height="300" width="200" border="1" /></td>
    </tr>
	<tr>
      <td align="center" valign="top"><img alt="Report Issue Page" src="images/mt_report_issue_page.png" height="300" width="200" border="1" /></td>
      <td align="center" valign="top"><img alt="Search Page" src="images/mt_issue_edit_page.png" height="300" width="200" border="1" /></td>
      <td align="center" valign="top"><img alt="Filters Page" src="images/mt_filters_page.png" height="300" width="200" border="1" /></td>
    </tr>
    </table>

<?php
		include( "bot.php" ); 
