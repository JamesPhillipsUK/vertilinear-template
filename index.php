<!--
  Vertilinear Template for BlogDraw.  Copyright © James Phillips 2020 - james@jamesphillipsuk.com.
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
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 offset-md-2 col-md-8">
          <aside class="card">
            <header class="card-header"><h3><?php output_author_profile("Caption"); ?></h3></header>
            <div class="card-body"><?php output_author_profile("Image"); ?><?php output_author_profile("Blurb"); ?></div>
          </aside>
        </div>
        <section class="col-12 offset-md-2 col-md-8">
<?php output_canonical_page();?>
        </section>
      </div>
    </div>
    <footer class="container-fluid">
      <hr />
      <div class="row">
        <div class="col-12">
          <p>Content on <?php echo URL; ?>, Copyright &copy; <?php echo TITLE; ?> <?php echo date('Y'); ?></p>
          <p><?php echo TITLE; ?>: Proudly powered by <a href="https://blogdraw.com">BlogDraw</a>.  Template: <?php echo TEMPLATE; ?> by <?php echo TEMPLATEBY; ?></p>
        </div>
      </div>
    </footer>
    <script src="<?php output_template_location(); ?>/bootstrap-4.4.1-dist/js/jquery-3.4.1.min.js"></script>
    <script src="<?php output_template_location(); ?>/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <?php require_once ('./plugins/cookies/index.php'); ?>
  </body>
</html>