<?php /* Template Name: Demo Page Template */ get_header(); ?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

  <header class="header">
    <div class="header-width">
      <div class="hbanka">
        <div class="hbanka2">
        <?php $image = get_field('banner');
          if( !empty($image) ): ?>
          <noindex>
            <a href="<?php the_field('banner_link'); ?>" target="_blank"><img src="<?php echo $image['url']; ?>" width="468" height="60" alt="<?php echo $image['alt']; ?>" /></a>
          </noindex>
          <?php endif; ?>
        </div><!-- hbanka2 -->
      </div><!-- hbanka -->
      <div class="logo">
        <?php if ( is_front_page() && is_home() ){ } else { ?>
          <a href="<?php echo home_url(); ?>">
            <?php  } ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
            <?php if ( is_front_page() && is_home() ){
            } else { ?>
          </a>
        <?php } ?>
      </div><!-- /logo -->
    </div><!-- header-width -->
  </header>

  <div class="wrapper">
    <div class="middle">
      <div class="container">
        <div class="content">
