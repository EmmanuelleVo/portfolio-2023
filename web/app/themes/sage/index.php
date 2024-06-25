<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio d‘Emmanuelle Vo, Full-Stack Developer">
    <meta name="keywords" content="web design, web developer, web development, web designer, portfolio, Emmanuelle Vo">
    <meta name="author" content="Emmanuelle Vo">

    <!-- Favicon -->
    <link rel="icon" href="<?= asset('images/favicon.ico') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= asset('images/favicon.ico')?>" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('images/favicon-32x32.png')?>">
    <link rel="manifest" href="<?= asset('images/site.webmanifest')?>">

    <!--TODO:WP_HEAD-->
    <?php wp_head(); ?>
    <!--<link rel="stylesheet" href="resources/styles/app.scss"> --><!--app/themes/sage/dist/styles/main.css-->
  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php do_action('get_header'); ?>
    <div id="app">
      <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
    </div>

    <?php do_action('get_footer'); ?>
    <?php wp_footer(); ?>
  </body>
</html>
