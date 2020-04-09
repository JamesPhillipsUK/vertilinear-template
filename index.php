<!--
  Vertilinear Template for BlogDraw.  Copyright © Jesse Phillips 2020 - james@jamesphillipsuk.com.
 -->
<!DOCTYPE html>
<html lang="en">
  <head>   
    <!-- Enable utf8 reading -->
    <meta charset="UTF-8" />
    <!-- Enable Mobile-first Optimization -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="MobileOptimized" content="400" />
    <meta name="HandheldFriendly" content="True" />
    <!-- Enable IE/Edge Standards mode -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Use An Apple Touch Icon and Favicon-->
    <link rel="apple-touch-icon" href="<?php output_home_link(); ?>/uploads/apple-touch-icon.png" />
    <link rel="shortcut icon" href="<?php output_home_link(); ?>/uploads/favicon.ico" />
    <!-- Here`s where the SEO comes in. -->
    <meta name="description" content="<?php output_head_description(); ?>" />
    <title><?php output_head_title(); ?></title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php output_head_template_location(); ?>/bootstrap-4.4.1-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php output_head_template_location(); ?>/style.css" />
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
      <div class="container d-flex justify-content-between">
          <a href="<?php output_home_link(); ?>" title="<?php echo TITLE; ?>" class="navbar-brand d-flex align-items-center">
            <h1><?php output_site_title(false); ?></h1>
          </a>
        </div>
    </nav>
    <div class="container-fluid py-3">
      <div class="row justify-content-center">
        <div class="col-12 col-md-3 order-md-first text-center">
          <aside>
            <header>
              <h2><?php output_author_profile("Caption"); ?></h3>
            </header>
            <div>
              <div style="width:50%; margin:0 auto"><?php output_author_profile("Image"); ?></div>
              <?php output_author_profile("Blurb"); ?>
            </div>
          </aside>
          <a class="btn btn-success btn-block" href="<?php output_archive_link(); ?>" title="Blog archive">Blog archive</a>
          <a class="btn btn-success btn-block" href="<?php output_contact_link(); ?>" title="Contact the blog">Contact the blog</a>
        </div>
        <section class="col-12 order-first col-md-8">
<?php output_canonical_page();?>
        </section>

      </div>
    </div>
    <footer class="container-fluid">
      <hr />
      <div class="row">
        <div class="col-12 text-center">
          <p>Content on <?php echo URL; ?>, Copyright &copy; <?php echo TITLE; ?> <?php echo date('Y'); ?></p>
          <p><?php echo TITLE; ?> is proudly powered by <a href="https://blogdraw.com">BlogDraw</a>.  Template: <?php echo output_template_name(); ?> by <a href="<?php echo output_template_contact_url(); ?>" title="<?php echo output_template_author(); ?>"><?php echo output_template_author(); ?></a></p>
        </div>
      </div>
    </footer>
    <script src="<?php output_template_location(); ?>/bootstrap-4.4.1-dist/js/jquery-3.4.1.min.js"></script>
    <script src="<?php output_template_location(); ?>/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <?php require_once ('./plugins/cookies/index.php'); ?>
  </body>
</html>