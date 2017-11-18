<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/assets/js/slick/slick.css">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/assets/js/slick/slick-theme.css">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
