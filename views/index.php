<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('../includes/head.php'); ?>
</head>

<body>
  <div class="js-cursor" id="js-cursor"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="l-sidebar">
          <?php include('../includes/sidebar.php'); ?>
        </div>
      </div>

      <div class="col-md-9 col-md-offset-3 content">
        <div class="l-filter">
          <div id="leeswijzer_nav">
            <button type="button" class="btn active" onclick="filterSelection('all')">All</button>
            <button type="button" class="btn" onclick="filterSelection('individual')">Individual</button>
            <button type="button" class="btn" onclick="filterSelection('group')">Group</button>
            <button type="button" class="btn" onclick="filterSelection('international')">International</button>
          </div>
        </div>
        <div class="l-projectcon l-filterdiv individual">
          <a href="uxresearch_iteratie.php">
            <?php include('../includes/item-top.php'); ?>
            <h4>Individual Project</h4>
            <h1><strong>Research UX/UI</strong></h1>
            <h3>Research optimalisation portfolio.</h3>
            <?php include('../includes/item-mid.php'); ?><img class="c-thumbnail"
              src="https://i.imgur.com/v02Er0K.jpg" />
            <?php include('../includes/item-bottom.php'); ?>
          </a>
        </div>

        <div class="l-projectcon l-filterdiv group">
          <a href="projectplanpsv_iteratie.php">
            <?php include('../includes/item-top.php'); ?>
            <h4>Group Project</h4>
            <h1><strong>Projectplan PSV</strong></h1>
            <h3>Fundementals of the psv project.</h3>
            <?php include('../includes/item-mid.php'); ?><img class="c-thumbnail"
              src="https://geletina-images.s3.amazonaws.com/portfolio/expjs-title-lg.png" />
            <?php include('../includes/item-bottom.php'); ?>
          </a>
        </div>

        <div class="l-projectcon l-filterdiv individual">
          <a href="projectplanportfolio_iteratie.php">
            <?php include('../includes/item-top.php'); ?>
            <h4>Individual Project</h4>
            <h1><strong>Projectplan Portfolio</strong></h1>
            <h3>Fundementals for building new portfolio.</h3>
            <?php include('../includes/item-mid.php'); ?><img class="c-thumbnail"
              src="https://geletina-images.s3.amazonaws.com/portfolio/expjs-title-lg.png" />
            <?php include('../includes/item-bottom.php'); ?>
          </a>
        </div>

        <div class="l-projectcon l-filterdiv group">
          <a href="research-targetgroup_iteratie.php">
            <?php include('../includes/item-top.php'); ?>
            <h4>Group Project</h4>
            <h1><strong>Research Target group</strong></h1>
            <h3>Research identifying the targetgroup.</h3>
            <?php include('../includes/item-mid.php'); ?><img class="c-thumbnail"
              src="https://geletina-images.s3.amazonaws.com/portfolio/expjs-title-lg.png" />
            <?php include('../includes/item-bottom.php'); ?>
          </a>
        </div>

        <div class="l-projectcon l-filterdiv international">
          <a href="researchtags_iteratie.php">
            <?php include('../includes/item-top.php'); ?>
            <h4>International Project</h4>
            <h1><strong>Research tags</strong></h1>
            <h3>Research on different tags.</h3>
            <?php include('../includes/item-mid.php'); ?><img class="c-thumbnail"
              src="https://geletina-images.s3.amazonaws.com/portfolio/expjs-title-lg.png" />
            <?php include('../includes/item-bottom.php'); ?>
          </a>
        </div>

        <div class="l-projectcon l-filterdiv international">
          <a href="researchtags_iteratie.php">
            <?php include('../includes/item-top.php'); ?>
            <h4>Group</h4>
            <h1><strong>C4-model</strong></h1>
            <h3>Infrastructure of our project.</h3>
            <?php include('../includes/item-mid.php'); ?><img class="c-thumbnail"
              src="https://geletina-images.s3.amazonaws.com/portfolio/expjs-title-lg.png" />
            <?php include('../includes/item-bottom.php'); ?>
          </a>
        </div>

        <div class="l-projectcon l-filterdiv group">
          <a href="">
            <?php include('../includes/item-top.php'); ?>
            <h4>Group Project</h4>
            <h1><strong>Leveling System</strong></h1>
            <h3>Progression system for PSV app.</h3>
            <?php include('../includes/item-mid.php'); ?><img class="c-thumbnail"
              src="https://geletina-images.s3.amazonaws.com/portfolio/expjs-title-lg.png" />
            <?php include('../includes/item-bottom.php'); ?>
          </a>
        </div>

        <div class="l-projectcon l-filterdiv group">
          <a href="frontend_iteratie.php">
            <?php include('../includes/item-top.php'); ?>
            <h4>Group Project</h4>
            <h1><strong>Front end dev app</strong></h1>
            <h3>Frond-end development PSV app.</h3>
            <?php include('../includes/item-mid.php'); ?><img class="c-thumbnail"
              src="https://geletina-images.s3.amazonaws.com/portfolio/expjs-title-lg.png" />
            <?php include('../includes/item-bottom.php'); ?>
          </a>
        </div>

        <div class="l-projectcon l-filterdiv international">
          <a href="video_iteratie.php">
            <?php include('../includes/item-top.php'); ?>
            <h4>International Project</h4>
            <h1><strong>Logo Design & Video</strong></h1>
            <h3>Logo iterations and video script.</h3>
            <?php include('../includes/item-mid.php'); ?><img class="c-thumbnail"
              src="https://geletina-images.s3.amazonaws.com/portfolio/expjs-title-lg.png" />
            <?php include('../includes/item-bottom.php'); ?>
          </a>
        </div>

        <div class="l-projectcon l-filterdiv individual">
          <a href="portfolio_iteratie.php">
            <?php include('../includes/item-top.php'); ?>
            <h4>Individual Project</h4>
            <h1><strong>Portfolio Iterations</strong></h1>
            <h3>Different iterations on my portfolio.</h3>
            <?php include('../includes/item-mid.php'); ?><img class="c-thumbnail"
              src="https://geletina-images.s3.amazonaws.com/portfolio/expjs-title-lg.png" />
            <?php include('../includes/item-bottom.php'); ?>
          </a>
        </div>

        <div class="l-projectcon l-filterdiv individual">
          <a href="leadership_iteratie.php">
            <?php include('../includes/item-top.php'); ?>
            <h4>Individual Project</h4>
            <h1><strong>Leadership smartmobile</strong></h1>
            <h3>Being the stakeholders for smartmobile.</h3>
            <?php include('../includes/item-mid.php'); ?><img class="c-thumbnail"
              src="https://geletina-images.s3.amazonaws.com/portfolio/expjs-title-lg.png" />
            <?php include('../includes/item-bottom.php'); ?>
          </a>
        </div>

      </div>
    </div>
  </div>
  <?php include('../includes/scripts.php'); ?>
</body>

</html>