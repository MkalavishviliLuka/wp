<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Revetive - Free Business Corporate Template By MACode ID</title>
  <?php wp_head(); ?>

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>


    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a href="<?php echo home_url();?>" class="navbar-brand">Reve<span class="text-primary">Tive.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
             
              <?php wp_nav_menu(array(
                        'menu' => 'headerMenu',
                        'theme_location' => 'header-main',
                        'menu_class' => ' navbar-nav ml-auto pt-3 pt-lg-0 header-menu',
                        'container' => 'false'
                    )); ?>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->

    