<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Marble - homepage</title>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" rel="stylesheet">

  <!-- polices -->
  <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed:400,700|Roboto+Slab:400,700" rel="stylesheet">

  <!-- mes styles -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">

  <?php

  // we can replace <?php echo with <?= 

  ?>


  <?php
  //* wordpress adds its own stuff here
  wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="main-header">
    <div class="wrapper">
      <h1 class="logo">Marble</h1>
      <nav>
        <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => 'nav')); ?>
        <!--
        <ul>
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Journal</a></li>
          <li><a href="#">Service</a></li>
          <li><a href="#">Features</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
-->
      </nav>
      <!-- ./main navigation -->
    </div>
    <!-- ./wrapper -->
  </header>
  <!-- ./main-header -->

  <main>