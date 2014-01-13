<?php
$t_sub_title = "Requirements";
include( "top.php" );
?>

<div id="breadcrumb">
  <ul>
    <li class="home"><a href="/">Home</a></li>
    <li><a href="index.php">MantisBT</a></li>
    <li>Requirements</li>
  </ul>
</div>

<div class="row show-grid clear-both">
  <div class="col-xs-12 col-sm-12">

    <h1>MantisBT Requirements</h1>
    <p>
      <span class="lead">MantisBT has very modest requirements - all you need is a computer to run the server on along
        with the server software.</span>
        MantisBT runs on any operating system that supports the required server software, e.g. Windows, MacOS, Linux, etc.
    </p>

    <br>

    <h2>Hardware</h2>
    <p>The server can be a shared public machine, or a dedicated box; It can even run on an desktop computer.
      Any recent hardware should be adequate for moderate usage. You will need enough disk space for the database
      to grow, and enough RAM to avoid virtual memory thrashing. Several thousand issues will only take up a few MBs of
      space, but be aware that this may grow proportionately with attached files.
    </p>

    <div class="text-divider6">
      <span></span>
    </div>


    <h2>Software</h2>
    <p>Please refer to the <strong>MantisBT Administration Guide</strong> for the target version to review the software
      requirements in detail:
    </p>
    <ul class="icons">
      <li><i class="icon-ok"></i>
        <a href="/docs/master-1.2.x/en/administration_guide/admin.install.requirements.html">
          MantisBT 1.2.x
        </a>
      </li>
      <li><i class="icon-ok"></i>
        <a href="/docs/master/en-US/Admin_Guide/html-desktop/#admin.install.requirements">
          MantisBT 1.3.x
        </a>
      </li>
    </ul>

    <div class="text-divider6">
      <span></span>
    </div>


    <h2>Cost</h2>
    <p>MantisBT, including all the required underlying software is free for commercial and non-commercial use.</p>
    <p>The net cost to use MantisBT is the time to download, install, and configure the software plus any potential
      hardware costs. Continued maintenance should be minimal unless you are customizing the package.
    </p>
    <p>For an end-to-end paid solution with support, please refer to <a href="http://www.mantishub.com">MantisHub</a>.
      MantisHub offers different plans and pricing for you to choose from.
    </p>

    <div class="text-divider6">
      <span></span>
    </div>

    <h2>Time</h2>
    <p>If you've done this sort of thing before it will probably take about 10-60 minutes.
      If not, plan on around 1-8 hours depending on the problems you run into.
      If you are using InstantMantis to evaluate MantisBT or to run a small installation,
      then you should be up and running in 5 minutes, even if you have never
      touched a web server or PHP before.
    </p>

    <div class="text-divider6">
      <span></span>
    </div>

    <h2>PHP</h2>
    <p>You don't have to know a thing about PHP to use MantisBT. However, it always helps to be able to tinker
      with PHP scripts.
    </p>
    <p>PHP is a simple scripting language and syntacticaly resembles C. It is not hard to learn. In fact, it makes
      normally difficult tasks so ridiculously easy that you'll want to use it for many tasks.
    </p>
    <p>The <a href="http://www.php.net/manual/en/">PHP Manual</a> is <strong>phenomenal</strong>.
      If you ever have a question about a php function then run to the manual.
      The user comments always shed light into issues that others like you have experienced.
    </p>
    <p>There are many sites that offer basic tutorial to using PHP and/or MySQL,
      such as <a href="http://www.devshed.com/">DevShed</a>,
      <a href="http://www.webmonkey.com/">WebMonkey</a> and many others.
    </p>

    <div class="text-divider6">
      <span></span>
    </div>

    <h2>MySQL</h2>
    <p>Basic administration of MySQL is necessary. At a minimum you should be able to:</p>
    <ul class="icons">
      <li><i class="icon-ok"></i> login</li>
      <li><i class="icon-ok"></i> create a new user</li>
      <li><i class="icon-ok"></i> give the user permissions</li>
      <li><i class="icon-ok"></i> create a new database</li>
    </ul>
    <p><a href="http://www.mysql.com/doc/">MySQL.com</a> has excellent documentation.
      We highly recommend using <a href="http://www.phpmyadmin.net/">phpMyAdmin</a>
      to administer your MySQL database.
      You can create a new database and edit tables with this excellent package.
      All you need to do beforehand is setup the database user(s).
    </p>

    <div class="text-divider6">
      <span></span>
    </div>

    <h2>Web Server</h2>
    <p>The webserver needs to be configured to handle PHP files.
      In <a href="http://php.net/install.unix.apache2.php">Apache</a>,
      this monumental task requires all of three lines in the configuration file.
      There are also instructions for <a href="http://php.net/install.windows.iis.php">IIS</a>
      and many more webservers, just refer to the
      <a href="http://php.net/install.php">PHP Manual</a> !
    </p>

  </div>
</div>

<?php
include( "bot.php" );
?>
