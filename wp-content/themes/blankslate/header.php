<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<link rel="stylesheet" href="/bootstrap.min.css">
<link rel="stylesheet" href="/style.css">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">


<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

<div class="head1"><a href="/" class="logo1"><img src="/img/logo.png" /></a>
  <div class="logo3" style="font-size: 31px">Новый сервис общения людей на рынке бьюти индустрии</div>
<div class="logo2">Официальный партнер</div>
<div class="logo3" style="font-size: 18px; margin: 0 0 10px 0">www.businessbeautiful.ru</div>
</div>

