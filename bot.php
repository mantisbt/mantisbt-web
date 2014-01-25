</div>

<br><br>

<div class="recent-tweets">
  <div class="container">
    <div class="row show-grid">
      <div class="col-md-12 col-sm-12 twitter-wrapper">
        <div id="nav_t"></div>
        <div class="tweets-slide"><ul class="slides"></ul></div>
        <a href="https://twitter.com/mantisbt" class="follow_img"><img src="img/follow.png" alt=""></a>
      </div>
    </div>
  </div>
</div>

<!-- FOOTER STARTS HERE -->
<footer id="footer">
  <div class="footer-top"></div>
  <div class="footer-wrapper">
    <div class="container">
      <div class="row show-grid">
        <!-- FOOTER: LOGO -->
        <div class="col-sm-3 col-md-3 footer-center">
          <img alt="Mantis Bug Tracker Logo" class="footer-logo img-responsive" src="images/mantis_footer_logo.png"/>
          <!-- AddThis Button BEGIN -->
          <div class="addthis_toolbox addthis_default_style addthis_16x16_style" addthis:url="http://mantisbt.org/" addthis:title="MantisBT is a free popular web-based bug & issue tracking system">
            <a class="addthis_button_facebook" fb:like:layout="button_count" addthis:url="http://mantisbt.org/"></a>
            <a class="addthis_button_twitter"></a>
            <a class="addthis_button_linkedin"></a>
            <a class="addthis_button_google_plusone_share"></a>
            <a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a>
          </div>

          Resources:<br />
          <a href="development.php">Development</a><br />
          <a href="documentation.php">Documentation</a><br />
          <a href="<?php echo $g_blog_url ;?>">Blog</a><br />

          <!-- AddThis Button END -->
          <br>
        </div>
        <!-- FOOTER: NEWSLETTER -->
        <div class="col-sm-4 col-md-4 footer-center">
          <h4 class="center-title">Newsletter</h4>
          <p>Stay up to date with our latest news and product releases by signing up to our newsletter.</p>
          <div id="mc_embed_signup">
            <br>
            <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div class="input-group input-group-sm">
                <input type="email" name="EMAIL"  class="form-control" id="mce-EMAIL" placeholder="Email">
                <span class="input-group-btn">
                  <input type="submit" value="Go!" name="subscribe" class="btn btn-primary" id="mc-embedded-subscribe" class="button">
                </span>
              </div>
            </form>
            <div class="clearfix"></div>
            <div id="mce-responses">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
        <!-- FOOTER: ABOUT US -->
        <div class="col-sm-4 col-md-4 footer-center">
          <h4 class="center-title">About MantisBT</h4>
          <p>
            MantisBT is a popular open source web-based bug tracking system.
            Built on PHP and supports Linux, Windows and Mac OS X on the server side.
            Compatible with Chrome, Firefox, Safari, Opera and IE 7+.
            Released under the terms of the GNU General Public License (GPL).</p>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row show-grid">
          <!-- FOOTER: COPYRIGHT TEXT -->
          <div class="col-sm-12 col-md-12">
            <p>Copyright © 2000 - 2014 MantisBT Team</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- END FOOTER -->


<!-- Placed at the end of the document so the pages load faster -->

<script type="text/javascript" src="js/bootstrap.js"></script>

<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.0"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/revolution.custom.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52c507063b3a2bbd"></script>

<!-- Google Analytics -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-330112-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- End of Google Analytics -->

</body>
</html>
