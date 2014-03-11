<?php
include( 'config_defaults_inc.php' );
?>

<!DOCTYPE html>
<html>
<head>

    <title>Mantis Bug Tracker<?php if ( isset( $t_sub_title ) ) { echo " | $t_sub_title"; } ?></title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- META HTTP-EQUIV -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="content-language" content="en-us" />

    <!-- META NAME -->
    <meta name="description" content="MantisBT is a popular free web-based bug tracking system. It is written in PHP works with MySQL, MS SQL, and PostgreSQL databases. MantisBT has been installed on Windows, Linux, Mac OS, OS/2, and others. It is released under the terms of the GNU General Public License (GPL)." />
    <meta name="keywords" content="mantis, mantisbt, bugtracker, bug, tracker, issue, software" />
    <meta name="dc.title" content="Mantis Bug Tracker" />
    <meta name="revisit-after" content="1 days" />

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/upgrade_browser.css" />
</head>

<body>
<div id="container">

    <div id="header">
        <div id="intro">
            <a class="logo" href="index.php" onclick="ga('send', 'event', 'Header', 'Logo');">
                <img alt="logo" title="Mantis Bug Tracker" width="230" src="images/mantis_logo_262x90.png" class="img-responsive" />
            </a>
        </div>
        <div id="explain">
            <h1>MantisBT makes collaboration with team members & clients easy, fast, and professional.</h1>
        </div>
    </div>




    <h2>You are using an outdated browser</h2>
    <p>For a better experience using MantisBT website, please upgrade to a modern web browser.</p>

    <div id="buts">

        <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx" id="button-ie" title="Internet Explorer browser">
            <h3>Internet Explorer</h3>
            <p class="sub">PC, Mac + Linux</p>
            <p class="downloadfree">Download free</p>
        </a>

        <a href="http://www.apple.com/safari/" id="button-sa" title="Safari browser">
            <h3>Safari</h3>
            <p class="sub">PC, Mac + Linux</p>
            <p class="downloadfree">Download free</p>
        </a>

        <a href="http://www.google.com/chrome/" id="button-ch" title="Google Chrome browser">
            <h3>Chrome</h3>
            <p class="sub">PC, Mac + Linux</p>
            <p class="downloadfree">Download free</p>
        </a>

        <a href="http://www.opera.com/" id="button-op" title="Update de Opera browser">
            <h3>Opera</h3>
            <p class="sub">PC, Mac + Linux</p><p class="downloadfree">Download free</p>
        </a>

        <a href="http://www.mozilla-europe.org/nl/firefox/" id="button-ff" title="Update de Firefox browser">
            <h3>Firefox</h3>
            <p class="sub">PC, Mac + Linux</p>
            <p class="downloadfree">Download free</p>
        </a>
    </div>

</div>

<?php
include( 'google_analytics.php' );
?>


</body>
</html>
