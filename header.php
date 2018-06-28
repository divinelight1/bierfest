<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">

  <!-- bootstrap CDN -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <?php wp_head(); ?>
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
<div class="container-fluid core-content-div">
<div class="homepage-big-header">
  <div class="row">
    <div class="top-bar">
      <ul class="top-bar-menu">
        <li>info@bierfest.ch</li>
        <li>+41 123 456</li>
      </ul>
    </div><!-- /top-bar -->
  </div><!-- /row -->
  <div class="row">
    <div class="main-menu">
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </div><!-- /main-menu -->
  </div><!-- /row -->
  <div class="row">

  </div><!-- /row -->
</div><!-- /homepage-big-header -->
