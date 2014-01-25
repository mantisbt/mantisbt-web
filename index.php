<?php include( "top.php" ); ?>
  <div class="row">
  <div class="col-sm-12 col-md-12">
    <div class="bannercontainer">
      <div class="banner">
        <ul>
          <li class="slide21 slide" data-transition="slotfade-horizontal" data-slotamount="10"
              data-masterspeed="300">
            <img alt="" src="img/slider_3screens.png" class="img-responsive" />
            <div class="caption sft carousel-caption" data-x="472" data-y="69" data-speed="1000"
                 data-start="1000" data-easing="easeInBack" style="background: none;">
              <p class="middle">What is MantisBT?</p>
            </div>
            <div class="caption sfr carousel-caption" data-x="462" data-y="107" data-speed="1000"
                 data-start="1000" data-easing="easeOutBack" style="background: none;">
              <p class="big">MantisBT is a </p>
            </div>
            <div class="caption sfl carousel-caption" data-x="462" data-y="156" data-speed="1000"
                 data-start="1000" data-easing="easeOutBack" style="background: none;">
              <p class="big">free, full-featured</p>
            </div>
            <div class="caption sfl carousel-caption" data-x="462" data-y="205" data-speed="1000"
                 data-start="1000" data-easing="easeOutBack" style="background: none;">
              <p class="big">bug & issue tracking system</p>
            </div>
            <div class="caption sfb carousel-caption" data-x="474" data-y="262" data-speed="1000"
                 data-start="1000" data-easing="easeInBack" style="background: none; width: 436px;">
              <p class="small">MantisBT is an amazingly simple to install. It is intuitive, you’ll pick it up in
                seconds or minutes, not hours, days or weeks. MantisBT is an open source bug tracker written in PHP,
                uses MySQL, and can be installed on Linux, Windows, Mac, and more.</p>
            </div>
          </li>
          <li class="slide2 slide" data-transition="slideleft" data-slotamount="5"
              data-masterspeed="300">
            <img alt="" src="img/slider07.png" class="img-responsive" />
            <div class="caption sft carousel-caption" data-x="45" data-y="78" data-speed="1000"
                 data-start="1000" data-easing="easeInBack" style="background: none;">
              <p class="middle">Get help anywhere anytime!</p>
            </div>
            <div class="caption sfl carousel-caption" data-x="26" data-y="107" data-speed="1000"
                 data-start="1000" data-easing="easeOutBack" style="background: none;">
              <p class="big">Active and engaged</p>
            </div>
            <div class="caption sfl carousel-caption" data-x="26" data-y="160" data-speed="1000"
                 data-start="1000" data-easing="easeOutBack" style="background: none;">
              <p class="big">community is the</p>
            </div>
            <div class="caption sfl carousel-caption" data-x="26" data-y="214" data-speed="1000"
                 data-start="1000" data-easing="easeOutBack" style="background: none;">
              <p class="big">backbone of MantisBT</p>
            </div>
            <div class="caption sfb carousel-caption" data-x="42" data-y="265" data-speed="1000"
                 data-start="1000" data-easing="easeInBack" style="background: none; width: 436px;">
              <p class="small">The community around MantisBT is full of nice people who want to help others.
                Become part of the family, learn from others, and give something back when you can.</p>
            </div>
            <div class="caption sfl carousel-caption stick1" data-x="450" data-y="52"
                 data-speed="1400" data-start="1000" data-easing="easeInExpo" style="background: none;">
              <img alt="" src="img/forums.png" class="img-responsive" />
            </div>
            <div class="caption sfl carousel-caption stick2" data-x="607" data-y="52"
                 data-speed="1400" data-start="1500" data-easing="easeInExpo" style="background: none;">
              <img alt="" src="img/wiki.png" class="img-responsive" />
            </div>
            <div class="caption sfl carousel-caption stick3" data-x="764" data-y="52"
                 data-speed="1400" data-start="2000" data-easing="easeInExpo" style="background: none;">
              <img alt="" src="img/mailing_lists.png" class="img-responsive" />
            </div>
            <div class="caption sfl carousel-caption stick4" data-x="450" data-y="208"
                 data-speed="1400" data-start="2500" data-easing="easeInExpo" style="background: none;">
              <img alt="" src="img/bugtracker.png" class="img-responsive" />
            </div>
            <div class="caption sfl carousel-caption stick5" data-x="607" data-y="208"
                 data-speed="1400" data-start="3000" data-easing="easeInExpo" style="background: none;">
              <img alt="" src="img/irc.png" class="img-responsive" />
            </div>
          </li>
        </ul>
        <div class="tp-bannertimer"></div>
      </div>
    </div>
  </div>

  <div class="main-block">
    <div class="col-sm-12 col-md-12">
      <div class="row">

        <div class="col-sm-6 col-md-6 home-block hero-block-1">
          <h1>Let MantisBT track your bugs!</h1>
          <h2>Easy, fast &amp; feature complete</h2>
          <p>
            MantisBT supports multiple projects and
            different bug types (a.k.a. categories). It gives individual users roles and privileges, and displays
            a changelog and roadmap based on relevant bug resolution state. It also allows users to monitor specific
            issues and organize bugs based on how they relate to a user. It can notify developers and end users of
            reported bugs through email, RSS feeds, and even Twitter. MantisBT also implements a SOAP API
            which allows clients in any language to connect to it.
          </p>
        </div>

        <div class="col-sm-1 col-md-1"></div>

        <div class="col-sm-5 col-md-5 home-block">
          <div class="grey-box hero-block-2">
            <h2><a href="demo.php">Get MantisBT <?php echo $g_latest_version_stable; ?></a></h2>
            <p>
              <img class="img-responsive" src="img/release_icon.png" alt=""/>
              Download the latest MantisBT release. To try before downloading, click on the demo button.
              For details on for details on the changes and bug fixes in this release, check out the
              <a href="/bugs/changelog_page.php?project=mantisbt&amp;version=<?php echo $g_latest_version; ?>">changelog</a>.
            </p>

            <div class="clear-both"></div>

            <a class="btn btn-warning" href="demo.php">Demo</a>
            <a class="btn btn-warning" href="download.php">Download</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <div class="row main-block index1">
    <div class="col-sm-12 col-md-12">
      <div class="row show-grid hero-list">
        <div class="col-sm-4 col-md-4">
          <div class="image-wrapper">
            <div class="img">
              <img class="img-responsive" src="img/direction.png" alt="">
            </div>
          </div>
          <div class="image-text">
            <h2>Email Notifications</h2>
            <p>Keep everyone updated with notifications on issue updates, resolution, or comments.
              <?php //<a href="features.php">Learn more»</a> ?>
            </p>
          </div>
          <div class="clear"></div>
        </div>
        <div class="col-sm-4 col-md-4">
          <div class="image-wrapper">
            <div class="img">
              <img class="img-responsive" src="img/equaliser.png" alt="">
            </div>
          </div>
          <div class="image-text">
            <h2>Access Control</h2>
            <p>Set user permissions per project with MantisBT powerful multi-level access control.
              <?php //<a href="features.php">Learn more»</a> ?>
            </p>
          </div>
          <div class="clear"></div>
        </div>
        <div class="col-sm-4 col-md-4">
          <div class="image-wrapper">
            <div class="img">
              <img class="img-responsive" src="img/ruler.png" alt="">
            </div>
          </div>
          <div class="image-text">
            <h2>Customizable</h2>
            <p>Customize issue status for your workflow. Add custom fields & control field visibility.
              <?php // <a href="features.php">Learn more»</a> ?>
            </p>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-12">
      <div class="horizontal-divider"></div>
    </div>
  </div>

  <div class="main-block testimonials">
    <div class="title-wrapper">
      <h2>Testimonials</h2>
    </div>
    <div class="clear-both"></div>
    <br>
    <div class="row show-grid">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="testimonials-block">
          <div class="quote"></div>
          <p>"We've come to respect mantis for its powerful simplicity and I go around recommending it to friends and clients alike."</p>
          <p></p>
          <p class="autor"><small>John Zastrow <span class="spacer">/</span> <span class="primary-colour">Tetra Tech, Inc.</span></small></p>
        </div>
      </div>
    </div>
    <div class="row show-grid">
      <div class="col-xs-12 col-sm-12 col-md-6">
        <div class="testimonials-block">
          <div class="quote"></div>
          <p>"Great product! We tried 6 different issue trackers before settling on Mantis."</p>
          <p></p>
          <p class="autor"><small>John Locke <span class="spacer">/</span> <span class="primary-colour">Freelock Computing</span></small></p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6">
        <div class="testimonials-block">
          <div class="quote"></div>
          <p>"Very flexible great project, exactly what we need for our software development."</p>
          <p></p>
          <p class="autor"><small>Attila Strba <span class="spacer">/</span> <span class="primary-colour">EnOcean</span></small></p>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-12 grey-box">
      <div class="hero-block3">
        <div class="row show-grid">
          <div class="col-sm-8 col-md-8">
            <div class="hero-content-3">
              <h2>Try MantisBT Now!</h2>
              <p>It's never been easier to evaluate MantisBT.
                You can start by one or more of the demo options we have available or just go direct to downloads page
                and get the latest version along with the administrator's guide to setup on your own servers.</p>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="tour-btn btn-default">
              <a class="btn btn-warning btn-block" href="demo.php">Demo</a>
              <a class="btn btn-warning btn-block" href="download.php">Download</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
<?php include_once('bot.php');
