<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PAWS</title>
  <?php // https://developer.wordpress.org/reference/functions/wp_head/;?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php 
  wp_body_open();?> 
  <header> 
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" class="logo" alt="Logo">
    <nav class="main-menu"> 
      <?php 
      wp_nav_menu(['theme_location' => 'primary-menu']); 
      ?> 
    </nav>
  </header> 
