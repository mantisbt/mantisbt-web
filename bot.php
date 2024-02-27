</div>
</div>

<br><br>

<footer id="footer">
  <div class="footer-top"></div>
  <div class="footer-wrapper">
    <div class="container">
      <div class="row show-grid">
        <div class="col-sm-3 col-md-3 footer-center">
          <img alt="Mantis Bug Tracker Logo" class="footer-logo img-responsive" src="images/mantis_footer_logo.png"/>
          <div class="a2a_kit a2a_kit_size_32 a2a_default_style a2a_follow">
              <a class="a2a_button_github" data-a2a-follow="mantisbt"></a>
              <a class="a2a_button_x" data-a2a-follow="mantisbt"></a>
              <a class="a2a_button_linkedin_company" data-a2a-follow="mantisbt"></a>
          </div>
        </div>
        <div class="col-sm-4 col-md-4 footer-center">
          <h4 class="center-title">Resources</h4>
          <ul class="footer-navigate">
            <li> <a href="documentation.php" onclick="ga('send', 'event', 'Footer', 'Documentation');">Documentation</a></li>
            <li> <a href="development.php" onclick="ga('send', 'event', 'Footer', 'Development');">Development</a></li>
            <li> <a href="<?php echo $g_bugs_url ;?>" onclick="ga('send', 'event', 'Footer', 'BugTracker');">BugTracker</a></li>
            <li> <a href="<?php echo $g_forums_url ;?>" onclick="ga('send', 'event', 'Footer', 'Forums');">Forums</a></li>
            <li> <a href="<?php echo $g_blog_url ;?>" onclick="ga('send', 'event', 'Footer', 'Blog');">Blog</a></li>
          </ul>
        </div>
        <div class="col-md-1"></div>
        <div class="col-sm-4 col-md-4 footer-center">
          <h4 class="center-title">About MantisBT</h4>
          <p>
            MantisBT is a popular open source, web-based bug tracking system.
            Built on PHP, it supports Linux, Windows and macOS on the server side.
            Compatible with Chrome, Firefox, Safari, Opera and Edge.
            Released under the terms of the GNU General Public License (GPL).
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container">
      <div class="row show-grid">
        <div class="col-sm-12 col-md-12">
          <p>Copyright © 2000 - <?php echo date('Y') ?> MantisBT Team</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- END FOOTER -->

</div>
</div>

<!-- Placed at the end of the document so the pages load faster -->

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>

<script async src="https://static.addtoany.com/menu/page.js"></script>
<script type="text/javascript">
    var a2a_config = a2a_config || {};
    a2a_config.icon_color = "transparent";
    a2a_config.track_links = 'ga';
</script>

<?php
include( 'google_analytics.php' );
?>

</body>
</html>
