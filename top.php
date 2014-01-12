<?php
include( 'config_defaults_inc.php' );
?>

<html>
<head>
  <title>Mantis Bug Tracker<?php if ( isset( $t_sub_title ) ) { echo " | $t_sub_title"; } ?></title>

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

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/style-switcher/style-switcher.js"></script>

  <!-- STYLES -->
  <link rel="stylesheet" type="text/css" href="css/mantis.css" />

  <!--  revolution slider plugin : begin -->
  <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/rs-responsive.css" media="screen" />
  <!--  revolution slider plugin : end -->
  <link rel="stylesheet" href="css/mantisbt.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/custom.css" />
  <link rel="stylesheet" href="css/styler.css" />
  <link rel="stylesheet" href="css/isotope.css" />
  <link rel="stylesheet" href="css/color_scheme.css" />
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.css" />
  <link rel="stylesheet" href="css/font-awesome-ie7.css" />
  <link rel="stylesheet" href="css/flexslider.css" />
  <link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.0" type="text/css" media="screen" />
  <!--[if lte IE 8]>
  <link rel="stylesheet" type="text/css" href="css/IE-fix.css" />
  <![endif]-->
  <link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.mantisbt.org/blog/?feed=rss2" />
  <link rel="alternate" type="application/rss+xml" title="RSS" href="http://twitter.com/statuses/user_timeline/7199732.rss" />
</head>

<body id="mantisbody">

<div id="load" style="position:fixed; top:0; left:0; right:0; bottom:0; background:#fff; z-index:999999;"><span></span></div>
<div class="container"></div>
<div id="over">
  <div id="out_container">
    <!-- THE LINE AT THE VERY TOP OF THE PAGE -->
    <div class="top_line"></div>
    <!-- HEADER AREA -->
    <header>
      <div class="container">
        <div class="row">
          <!-- HEADER: LOGO AREA -->
          <div class="col-xs-12 col-sm-6 col-md-6 logo">
            <a class="logo" href="index.php">
              <img alt="logo" title="Mantis Bug Tracker" width="200" src="images/mantis_logo_262x90.png" class="img-responsive" />
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <!-- HEADER: SOCIAL ICONS -->
            <div class="grey-box" style="width:305px; height:32px; padding: 4px 10px 0 18px; margin-bottom: 10px">
              <!-- AddThis Button BEGIN -->
              <div class="addthis_toolbox addthis_default_style" addthis:url="http://mantisbt.org/" addthis:title="MantisBT is a free popular web-based bug & issue tracking system">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count" addthis:url="http://mantisbt.org/"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
              </div>
              <!-- AddThis Button END -->
            </div>
          </div>
        </div>

        <!-- HEADER: PRIMARY SITE NAVIGATION -->

        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="navbar navbar-default">
              <div class="navbar-header"></div>
              <div class="buttons-container"></div>
              <div class="navbar-collapse">
                <ul class="nav nav-pills navbar-nav">
                  <li class="active dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#menu">
                      MantisBT
                      <i>downloads &amp; hosting</i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="download.php">Downloads</a></li>
                      <li><a href="hosting.php">Hosting</a></li>
                      <li><a href="addons.php">Add-ons</a></li>
                      <li><a href="requirements.php">Requirements</a></li>
                      <li><a href="documentation.php">Documentation</a></li>
                    </ul>
                  </li>

                  <li class="single">
                    <a href="features.php">
                      FEATURES<i>simple yet powerful</i>
                    </a>
                  </li>

                  <li class="single">
                    <a href="demo.php">
                      DEMO<i>take a test drive</i>
                    </a>
                  </li>

                  <li class="single">
                    <a href="support.php">
                      SUPPORT<i>find answers</i>
                    </a>
                  </li>

                  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#menu4">
                      CONTRIBUTE<i>get involved</i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="bugs/">Bug Tracker</a></li>
                      <li><a href="development.php">Development</a></li>
                    </ul>
                  </li>

                  <li class="single">
                    <a href="blog/">
                      BLOG<i>stay informed</i>
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
