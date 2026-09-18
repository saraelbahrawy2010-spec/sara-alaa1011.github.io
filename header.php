<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="container nav-wrap">
    <div class="logo">
      <?php if ( has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <div class="logo-icon">&#127968;</div>
        <div class="logo-text">
          <div class="top"><?php bloginfo( 'name' ); ?></div>
          <div class="bottom">PROPERTY MANAGEMENT</div>
        </div>
      <?php endif; ?>
    </div>

    <nav class="main-nav">
      <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container'      => false,
            'items_wrap'     => '<ul>%3$s</ul>',
            'fallback_cb'    => 'northview_default_menu',
        ) );
      ?>
    </nav>

    <div class="nav-icons">
      <div class="icon-btn">&#9825;</div>
      <div class="icon-btn">&#9776;</div>
    </div>
  </div>
</header>

<?php
function northview_default_menu() {
    echo '<ul>
        <li><a href="' . esc_url( home_url( '/' ) ) . '" class="active">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Properties</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Owners</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact</a></li>
    </ul>';
}
?>
