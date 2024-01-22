<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--TODO:WP_HEAD-->
    <?php wp_head(); ?>
    <!--<link rel="stylesheet" href="resources/styles/app.scss"> --><!--app/themes/sage/dist/styles/main.css-->
  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php /*if (has_nav_menu('primary_navigation')): */?><!--
      <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        <?/*= wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) */?>
      </nav>
    --><?php /*endif; */?>
    <?php do_action('get_header'); ?>

    <div id="app">
      <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
    </div>

    <?php do_action('get_footer'); ?>
    <?php wp_footer(); ?>
  </body>
</html>
