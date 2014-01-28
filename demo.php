<?php
$t_sub_title = 'Demo';
include( "top.php" );
?>

  <div class="row show-grid clear-both">
    <div class="col-sm-7 col-md-8">
      <h1>MantisHub <small>| MantisBT Served Fresh</small></h1>

      <p>
        <span class="lead">
          MantisHub offers software as a service solution for MantisBT.
          Get started in seconds and experiment with the latest version of MantisBT.
        </span>
      </p>

      <p>
        Having a dedicated instance with administrator access,
        you are able to create projects,
        submit issues and invite team members to evaluate MantisBT with you.
        MantisHub team also offers you the support you need to get up to speed.
        With 30 day free trial you have plenty of time to get familiar with MantisBT and decide the plan that works for you.
      </p>

      <p>
      Founded by Victor Boctor, MantisBT long time contributor, MantisHub is designed to be a frictionless way to try out MantisBT.
      </p>
    </div>
    <div class="col-sm-5 col-md-4">
      <div class="note-stick stick pull-right" style="margin-top: 20px">
        <div style="font-size: 38px;"> <i class="icon-off"></i>
        </div>
        <br>
        <h2>Try MantisBT</h2>
        <h2>Now</h2>
        <br>
        <a href="http://www.mantishub.com" type="button" class="ex btn btn-default btn-inverse btn-block">
          <i class="icon-arrow-right"></i> Start Your Free Trial
        </a>
        <br />
        no credit card required
      </div>
    </div>
  </div>

  <hr>

  <div class="row show-grid clear-both">
    <div class="col-sm-12 col-md-12">
      <h1>Sneak Peek <small>| Browse MantisBT Official Tracker</small></h1>
    </div>
  </div>
  <div class="row show-grid clear-both">
    <div class="col-sm-8 col-md-8">
      <p>Just as you would expect, we are the first customer of our own product. We use MantisBT to track all
        MantisBT bugs, features, release planning, and pretty much everything that related to helping us drive the
        project forward. </p>

      <p>We encourage you to browse the Mantis Bug Tracker which is publicly viewable to anyone. In doing so you will be
        accessing the MantisBT as an anonymous user with very limited privileges thus missing quite a bit of functionality
        - just keep that in mind.</p>
    </div>
    <div class="col-md-1"></div>
    <div class="col-sm-4 col-md-3">
      <a href="<?php echo $g_bugs_url; ?>" type="button" class="btn btn-default btn-warning">
        Browse BugTracker <i class="icon-arrow-right"></i>
      </a>
    </div>
  </div>

  <hr>

  <div class="row show-grid clear-both">
    <div class="col-sm-12 col-md-12">
      <h1>Download <small>| Setup Your Own</small></h1>
    </div>
  </div>
  <div class="row show-grid clear-both">
    <div class="col-sm-8 col-md-8">
      <p>
        Are you considering deploying MantisBT behind the firewall?
        If yes, then downloading and installing MantisBT is the way to go.
      </p>
    </div>
    <div class="col-md-1"></div>
    <div class="col-sm-4 col-md-3">
      <a href="download.php" type="button" class="btn btn-default btn-warning">
        Browse Downloads <i class="icon-arrow-right"></i>
      </a>
    </div>
  </div>

<?php
include( "bot.php" );
