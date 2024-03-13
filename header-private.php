<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Auto</title>

  <?php wp_head(); ?>
 
</head>

<body>

  <header class="header header-private">
    <div class="container">
      <div class="header__top">
        <!-- <?php the_custom_logo(); ?> -->
        <a class="logo" href="#">
          <img class="logo__img" src="<?php bloginfo(template_url); ?>/assets/images/logo.svg" alt="logo">
        </a>
        <a class="phone" href='<?php the_field('phone-number', 8); ?>'><?php the_field('phone', 8); ?></a>
      </div>
      </div>
    </div>
  </header>