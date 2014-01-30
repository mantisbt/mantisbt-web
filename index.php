<?php include( "top.php" ); ?>
  <div class="row">
  <div class="main-block">
    <div class="col-sm-12 col-md-12">
      <div class="row">

        <div class="col-sm-6 col-md-6 home-block hero-block-1">
          <h1>MantisBT makes collaboration with team members &amp; clients easy, fast, and professional</h1>
          <p>
            MantisBT is an open source issue tracker that provides a delicate balance between simplicity and power.
            Users are able to get started in minutes and start managing their projects while collaborating with their teammates and clients effectively.
            Once you start using it, you will never go back!
          </p>
        </div>

        <div class="col-sm-1 col-md-1"></div>

        <div class="col-sm-5 col-md-5 home-block">
          <div class="grey-box hero-block-2">
            <h2><a href="demo.php">MantisBT <?php echo $g_latest_version_stable; ?></a></h2>
            <p>
              <img class="img-responsive" src="img/release_icon.png" alt=""/>
              For details on the new features and bug fixes in this release, check out the
              <a href="<?php echo $g_bugs_url; ?>changelog_page.php?project=mantisbt&amp;version=<?php echo $g_latest_version_stable; ?>">changelog</a>.
            </p>

            <div class="clear-both"></div>

            <a class="btn btn-warning" href="demo.php" onclick="ga('send', 'event', 'Homepage', 'Demo');">Demo</a>
            <a class="btn btn-warning" href="download.php" onclick="ga('send', 'event', 'Homepage', 'Download');">Download</a>
            <a class="btn btn-warning" href="hosting.php" onclick="ga('send', 'event', 'Homepage', 'Hosting');">Hosting</a>
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
            <p>Keep your team and clients updated with notifications on issue updates, resolution, or comments.
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
            <p>Per project role based access control for users putting you in control of your business.
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
            <p>
              Flexibility to customize your issue fields, notifications and workflow.
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
      <h2>Words from our users</h2>
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
                You can start by one or more of the demo options we have available or just go directly to the downloads page
                and get the latest version along with the administrator's guide to setup on your own servers.</p>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="tour-btn btn-default">
              <a class="btn btn-warning btn-block" href="demo.php" onclick="ga('send', 'event', 'Homepage', 'Demo');">Demo</a>
              <a class="btn btn-warning btn-block" href="download.php" onclick="ga('send', 'event', 'Homepage', 'Download');">Download</a>
              <a class="btn btn-warning btn-block" href="hosting.php" onclick="ga('send', 'event', 'Homepage', 'Hosting');">Hosting</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
<?php include_once('bot.php');
