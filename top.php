<?php
include( 'config_defaults_inc.php' );
include( 'browser_check.php' );
require_once( 'helper_functions.php' );

?>

<!DOCTYPE html>
<html>
<head>

    <title>Mantis Bug Tracker<?php if ( isset( $t_sub_title ) ) { echo " | $t_sub_title"; } ?></title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- META HTTP-EQUIV -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="content-language" content="en-us" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- META NAME -->
    <meta name="description" content="MantisBT is a popular free web-based bug tracking system. It is written in PHP works with MySQL, MS SQL, and PostgreSQL databases. MantisBT has been installed on Windows, Linux, Mac OS, OS/2, and others. It is released under the terms of the GNU General Public License (GPL)." />
    <meta name="keywords" content="mantis, mantisbt, bugtracker, bug, tracker, issue, software" />
    <meta name="dc.title" content="Mantis Bug Tracker" />
    <meta name="revisit-after" content="1 days" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--[if !IE]> -->
    <script type="text/javascript">
        window.jQuery || document.write("<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'>"+"<"+"/script>");
    </script>
    <!-- <![endif]-->

    <!--[if IE]>
    <script type="text/javascript">
        window.jQuery || document.write("<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'>"+"<"+"/script>");
    </script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <script src="js/html5shiv.js" type="text/javascript"></script>
    <script src="js/respond.src.js" type="text/javascript"></script>
    <![endif]-->

    <link rel="stylesheet" href="css/mantisbt.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="stylesheet" href="css/color_scheme.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/flexslider.css" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="css/font-awesome-ie7.css" />
    <![endif]-->

    <!--[if lte IE 8]>
    <link rel="stylesheet" type="text/css" href="css/IE-fix.css" />
    <![endif]-->

    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo $g_blog_url; ?>?feed=rss2" />
    <link rel="alternate" type="application/rss+xml" title="RSS" href="https://twitter.com/statuses/user_timeline/7199732.rss" />

</head>

<body>

<div>
    <div id="out_container">
        <!-- THE LINE AT THE VERY TOP OF THE PAGE -->
        <div class="top_line"></div>
        <!-- HEADER AREA -->
        <header>
            <div class="container">
                <div class="row">
                    <!-- HEADER: LOGO AREA -->
                    <div class="col-xs-12 col-sm-4 col-md-3 logo">
                        <a class="logo" href="index.php" onclick="ga('send', 'event', 'Header', 'Logo');">
                            <img alt="logo" title="Mantis Bug Tracker" width="230" src="images/mantis_logo_262x90.png" class="img-responsive" />
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-8 col-md-9">
                        <div class="navbar navbar-default">
                            <div class="navbar-header"></div>
                            <div class="buttons-container"></div>
                            <div class="navbar-collapse pull-right">
                                <ul class="nav nav-pills navbar-nav">
                                    <li class="single">
                                        <a href="index.php" onclick="ga('send', 'event', 'Navbar', 'Home');">
                                            HOME
                                        </a>
                                    </li>

                                    <li class="single">
                                        <a href="demo.php" onclick="ga('send', 'event', 'Navbar', 'Demo');">
                                            DEMO
                                        </a>
                                    </li>

                                    <li class="single">
                                        <a href="download.php" onclick="ga('send', 'event', 'Navbar', 'Download');">
                                            DOWNLOAD
                                        </a>
                                    </li>

                                    <li class="single">
                                        <a href="support.php" onclick="ga('send', 'event', 'Navbar', 'Support');">
                                            SUPPORT
                                        </a>
                                    </li>

                                    <li class="single">
                                        <a href="addons.php" onclick="ga('send', 'event', 'Navbar', 'Addons');">
                                            ADD-ONS
                                        </a>
                                    </li>

                                    <li class="single" style="border-right:none;">
                                        <a href="hosting.php" onclick="ga('send', 'event', 'Navbar', 'Hosting');">
                                            HOSTING
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="main-content">
            <div class="container">
                <br />
