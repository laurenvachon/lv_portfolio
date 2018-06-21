<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> <?php wp_title(); ?> </title>
<meta name="description" content="Lauren Vachon's design and photography portfolio, based in Boston, MA. She is a User Interface designer.">
<?php wp_head(); ?>

<!-- <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png?v=pgr7zX7pp5">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png?v=pgr7zX7pp5">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png?v=pgr7zX7pp5">
<link rel="manifest" href="img/favicon/manifest.json?v=pgr7zX7pp5">
<link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg?v=pgr7zX7pp5" color="#5bbad5">
<link rel="shortcut icon" href="img/favicon/favicon.ico?v=pgr7zX7pp5">
<meta name="msapplication-config" content="img/favicon/browserconfig.xml?v=pgr7zX7pp5">
<meta name="theme-color" content="#ffffff"> -->

</head>

<body <?php body_class(); ?> id="laurenvachon" data-spy="scroll" data-target=".navbar" data-offset="50">
  <header class="nav-down">
    <div class="brand">
      <a href="<?php bloginfo('url'); ?>">LV</a>
    </div>

    <?php
      $defaults = array(
        'container' => false,
        'theme_locaton' => 'primary-menu',
        'menu_class' => 'nav'
      );
      wp_nav_menu( $defaults );
    ?>
    <!-- <ul class="nav">
      <li>
        <a href="resume">About </a>
      </li>
    </ul> -->
  </header>
